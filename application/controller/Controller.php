<?php

namespace application\controller;

use application\util\UrlUtil;   //app안의 util에있는 urlutil을 쓸 것이다.

class Controller {
    protected $model;
    private static $modelList = [];

    // 생성자
    public function __construct($identityName, $action) {
        // session start
        if(!isset($_SESSION)) {
            session_start();
        }
        
        // model 호출
        $this->model = $this->getModel($identityName);

        // controller의 메소드 호출
        $view = $this->$action();

        if(empty($view)) {
            echo "해당 controller에 메소드가 없습니다. : ".$action;
            exit();
        }
    
        // view 호출
        require_once $this->getView($view);
    }

    // model 호출하고 결과를 리턴
    protected function getModel($identityName){
        // model 생성 체크
        if(!in_array($identityName, self::$modelList)) {
            $modelName = UrlUtil::replaceSlashToBackslash(_PATH_MODEL.$identityName._BASE_FILENAME_MODEL);
            self::$modelList[$identityName] = new $modelName();
        }
        return self::$modelList[$identityName];
    }

    // 파라미터를 확인해서 해당하는 view를 리턴하거나, redirect
    public function getView($view) {
        return _PATH_VIEW.$view;
    }
}
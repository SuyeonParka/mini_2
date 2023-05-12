<?php

namespace application\controller;

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
    }

    // model 호출하고 결과를 리턴
    protected function getModel($identityName){
        // model 생성 체크
        if(!in_array($identityName, self::$modelList)) {
            $modelName = _PATH_MODEL.$identityName._BASE_FILENAME_MODEL;
            self::$modelList[$identityName] = new $modelName();
        }
        return self::$modelList[$identityName];
    }
}
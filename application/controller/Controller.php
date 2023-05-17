<?php

namespace application\controller;

use application\util\UrlUtil;   //app안의 util에있는 urlutil을 쓸 것이다.
use \AllowDynamicProperties;

//? 이거 왜 쓰는 거죠? = 세트임(6,9번줄), public정적변수(static)
#[AllowDynamicProperties]   //동적속성(뒤에 추가하는 속성??)안쓰면 워닝뜸 이거 안쓰면 필드에 에러메세지를 선언하면 됨(ex. protected errMsg~~)
class Controller {
    protected $model;
    private static $modelList = [];      
    // 여러개의 모델을 불러올 경우, 이미 불러온 모델을 또다시 불러올 경우 많은 메모리를 사용하게 됨, 서버의 부하를 줄이기 위해서사용
    //? 무슨 효과가 있는 거죠?
    
    private static $arrNeedAuth = ["product/list"];
    // 필드, 인증이 필요한 페이지 이름을 적어줌

    //!생성자
    public function __construct($identityName, $action) {   
        //iden에는 User, action에는 loginGet이 담겨있음
        //$action은 각각의 컨트롤러에 담겨있는 메소드 명
        //현재 세션이 없으면 session start
        if(!isset($_SESSION)) {
            session_start();
        }
        
        //!유저 로그인 및 권한 체크
        $this->chkAuthorization();

        // model 호출
        $this->model = $this->getModel($identityName);

        // controller의 메소드 호출
        // ex) $view = Usercontroller의 loginGet();
        // ex) $view = login.php
        $view = $this->$action();

        if(empty($view)) {
            echo "해당 controller에 메소드가 없습니다. : ".$action;
            exit();
        }
    
        //!view 호출
        //ex) require_once(application/view/login.php);
        require_once $this->getView($view); //login화면 처리, 처리 종료
    }

    //!model 호출하고 결과를 리턴 (해당 모델 호출)
    protected function getModel($identityName){
        // model 생성 체크
        if(!in_array($identityName, self::$modelList)) {  //있는지 없는지 체크하고 있으면 있는값 넣고 없으면 새로 생성  
            //self 컨트롤러 나자신을 가리킴
            //model class 호출해서 모델 객체 생성
            //나 자신(Controller.php)의 $modelList를 사용하겠다
            $modelName = UrlUtil::replaceSlashToBackslash(_PATH_MODEL.$identityName._BASE_FILENAME_MODEL);
            self::$modelList[$identityName] = new $modelName(); //model 호출, usermodel을 객체화해서 modelList에 담음
        }
        return self::$modelList[$identityName]; //User라는 키를 이용해서 리턴
    }

    // 파라미터를 확인해서 해당하는 view를 return하거나, redirect
    protected function getView($view) { //$view에는 login.php가 담겨있음

        //view 체크
        if(strpos($view, _BASE_REDIRECT) === 0) {   //문자열에서 지정한 검색 문자가 존재하는 경우에는 인덱스 값을, 존재하지 않는 경우에는 false를 반환
            header($view);
            exit();
        }

        return _PATH_VIEW.$view;
    }

    // 동적 속성(addDynamicProperty)를 셋팅하는 메소드
    protected function addDynamicProperty($key, $val) {
        $this->$key = $val; //this에 key에 val를 담는 것
    }

    // 유저 권한 체크 메소드
    protected function chkAuthorization() {
        $urlPath = UrlUtil::getUrl();
        foreach(self::$arrNeedAuth as $authPath) {
            if(!isset($_SESSION[_STR_LOGIN_ID]) && strpos($urlPath, $authPath) === 0) {
                header(_BASE_REDIRECT."/user/login");
                exit;
            }
        }
    }
}
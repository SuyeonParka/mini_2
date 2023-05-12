<?php

namespace application\lib;

use application\util\UrlUtil;   //class 선언 위에. 

class Application {



    // 생성자
    public function __construct() {
        $arrPath = UrlUtil::getUrlArrPath(); //접속 url을 배열로 획득
        $identityName = empty($arrPath[0]) ? "User" : ucfirst($arrPath[0]); //ucfirst는 aaa bbb일 때 Aaa bbb 로 되고 ucword는 Aaa Bbb로 됨
        $action = (empty($arrPath[1]) ? "login" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"])); //request method는 대문자로 가져옴, Get, Post로 나오게 변경해준거임
        
        $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;

        //? controllerPath 있나 없나 확인 할려고 가져옴

        // 해당 controller 파일 존재 여부 체크
        if(!file_exists($controllerPath)) {
            echo "해당 컨트롤러 파일이 없습니다. : ".$controllerPath;
            exit();
        }

        // 해당 Controller 호출
        $controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);
        // var_dump($controllerName);
        // exit();        
        new $controllerName($identityName, $action);




        // var_dump($identityName, $action);
        // exit;
    }
}


<?php

namespace application\lib;

use application\util\UrlUtil;   //class 선언 위에.(미리 위치 선언해줘서 urlutil앞에 path설정 안해줌) 

class Application {



    // 생성자
    public function __construct() {
        $arrPath = UrlUtil::getUrlArrPath(); //접속 url을 배열로 획득. 0번방 user 1번방 login
        $identityName = empty($arrPath[0]) ? "User" : ucfirst($arrPath[0]); //ucfirst는 aaa bbb일 때 Aaa bbb 로 되고 ucword는 Aaa Bbb로 됨. 0번방에 있는애가 엠티냐? ㄴㄴ그래서 뒤에꺼가 실행, User가 $identityName에 담김
        $action = (empty($arrPath[1]) ? "login" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"])); //request method는 대문자로 가져옴, Get, Post로 나오게 변경해준거임, 어떤 메소드로 왔는지 체크함, $action에는 loginGet이 담김
        
        //controller명 작성
        $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;

        //? controllerPath 있나 없나 확인 할려고 가져옴

        // 해당 controller 파일 존재 여부 체크
        if(!file_exists($controllerPath)) {
            echo "해당 컨트롤러 파일이 없습니다. : ".$controllerPath;   //호출할게 없으면 에러처리가 힘들어서 미리 해당 파일이있는지 확인
            exit();
        }

        // 해당 Controller 호출
        $controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);
        // var_dump($controllerName);
        // exit();        
        new $controllerName($identityName, $action); //슬러시를 역슬러시로 바꾼게 controllerName에 저장
        // application\controller\Usercontroller('User', 'loginGet')
        // 특정값을 변수에 담고 그걸 이용할때 new 사용해서 새로운 객체 사용




        // var_dump($identityName, $action);
        // exit;
    }
}


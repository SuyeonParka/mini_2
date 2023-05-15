<?php

namespace application\controller;

class UserController extends Controller {
    public function loginGet() {    //login 접속할 때 이 메소드 호출
        return "login"._EXTENSION_PHP;
    }

    public function loginPost() {
        $result = $this->model->getUser($_POST);
        // 유저 유무 체크
        if(count($result) === 0){
            $errMsg = "입력하신 회원 정보가 없습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            // 로그인 페이지 리턴
            return "login"._EXTENSION_PHP;
        }
        // session에 User ID 저장
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];

        // 리스트 페이지 리턴
        return _BASE_REDIRECT."/shop/main";
    }

    // 로그아웃 메소드
    public function logoutGet() {
        session_unset();    // 삭제
        session_destroy(); //세션 자체 파괴, 연결고리 끊음

        // 로그인 페이지 리턴
        return "login"._EXTENSION_PHP; //view파일명 리턴
    }

    // 회원가입 메소드
    public function signGet() {
        return "sign"._EXTENSION_PHP;
    }

    // bigbag 카테고리 메소드
    public function bigbagGet() {
        return "bigbag"._EXTENSION_PHP;
    }
    
    //smallbag 카테고리 메소드
    public function smallbagGet() {
        return "smallbag"._EXTENSION_PHP;
    }
}
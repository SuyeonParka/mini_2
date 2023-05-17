<?php

namespace application\controller;

class UserController extends Controller {
    public function loginGet() {    //login 접속할 때 이 메소드 호출
        return "login"._EXTENSION_PHP;
    }
 
    public function loginPost() {
        $result = $this->model->getUser($_POST);
        $this->model->closeConn(); //db파기
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
        return _BASE_REDIRECT."/shop/main"; //view파일명 리턴
    }

    // 회원가입 메소드
    public function signGet() {
        return "sign"._EXTENSION_PHP;
    }

    public function signPost() {
        $arrPost = $_POST;
        $arrChkErr = [];

        // 유효성체크
        // id 글자수 체크
        if(mb_strlen($arrPost["id"]) === 0 || mb_strlen($arrPost["id"]) > 12){
            $arrChkErr["id"] = "아이디는 12글자 이하로 입력해주세요.";
        }
        //todo id 영문자 체크(알아서) 정규식
        $pattern = "/[^a-zA-Z0-9]/";    // ^ : 아닐 때
        if(preg_match($pattern, $arrPost["id"]) !== 0) {  //int나 false를 리턴해옴
            $arrChkErr["id"] = "ID는 영어 대문자, 영어 소문자, 숫자로만 입력해 주세요.";
            $arrPost["id"] = "";
        }

        //pw 글자수 체크
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20){
            $arrChkErr["pw"] = "비밀번호는 8~20글자로 입력해주세요.";
        }
        //todo pw 영문숫자 체크(알아서) */
        $pattern = "/[^a-zA-Z0-9]/";    // ^ : 아닐 때
        if(preg_match($pattern, $arrPost["pw"]) !== 0) {  //int나 false를 리턴해옴
            $arrChkErr["pw"] = "PW는 영어 대문자, 영어 소문자, 숫자로만 입력해 주세요.";
            $arrPost["pw"] = "";
        }

        //비밀번호와 비밀번호 체크 확인
        if($arrPost["pw"] !== $arrPost["pwc"]){
            $arrChkErr["pwc"] = "비밀번호가 일치하지 않습니다.";
        }

        if(mb_strlen($arrPost["name"]) === 0 || mb_strlen($arrPost["name"]) > 30){
            $arrChkErr["name"] = "이름을 30글자 이하로 입력해주세요.";
        }

        // 유효성 체크 에러일 경우
        if(!empty($arrChkErr)) {
            // 에러메세지 세팅
            $this->addDynamicProperty('arrError', $arrChkErr);
            return "sign"._EXTENSION_PHP;
        }

        $result = $this->model->getUser($arrPost, false);

        //유저 유무 체크
        if(count($result) !== 0) {
            $errMsg = "입력하신 ID가 사용중입니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            // 회원 가입 페이지
            return "sign"._EXTENSION_PHP;
        }

        // 트랜잭션 스타트
        $this->model->tranBegin();

        // user inert
        if(!$this->model->insertUserInfo($arrPost)) {
            // 예외처리 롤백
            $this->model->tranRollback();
            echo "User Sign Error";
            exit();
        }
        $this->model->tranCommit(); // 정상처리 커밋
        // 트랜잭션 끝

        // 로그인 페이지로 이동
        return _BASE_REDIRECT."/user/login";
        
    }

    public function detailGet() {
        return "detail"._EXTENSION_PHP;
    }

    // bigbag 카테고리 메소드
    public function bigbagGet() {
        return "bigbag"._EXTENSION_PHP;
    }
    
    //smallbag 카테고리 메소드
    public function smallbagGet() {
        return "smallbag"._EXTENSION_PHP;
    }

    //update 페이지
    public function updateGet() {
        return "update"._EXTENSION_PHP;
    }

    //수정
    public function updatePost() {
        $arrPost = $_POST;
        $arrChkErr = [];

        //유효성 체크
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20){
            $arrChkErr["pw"] = "비밀번호는 8~20글자로 입력해주세요.";
        }

        if($arrPost["pw"] !== $arrPost["pwc"]){
            $arrChkErr["pwc"] = "비밀번호가 일치하지 않습니다.";
        }

        if(mb_strlen($arrPost["name"]) === 0 || mb_strlen($arrPost["name"]) > 30){
            $arrChkErr["name"] = "이름을 30글자 이하로 입력해주세요.";
        }

        //에러메시지 
        if(!empty($arrChkErr)) {
            // 에러메세지 세팅
            $this->addDynamicProperty('arrError', $arrChkErr);
            return "update"._EXTENSION_PHP;
        }

        $result = $this->model->getUser($arrPost, false);

        $this->model->closeConn();

        // 정상처리 되면 커밋
        $this->model->tranCommit();

        return _BASE_REDIRECT."/shop/main";
    }

}
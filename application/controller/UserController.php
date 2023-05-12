<?php

namespace application\controller;

class UserController extends Controller {
    public function loginGet() {    //login 접속할 때 이 메소드 호출
        return "login"._EXTENSION_PHP;
    }

    public function loginPost() {
        return _BASE_REDIRECT."/product/list";
    }
}
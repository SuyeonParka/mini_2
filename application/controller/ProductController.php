<?php

namespace application\controller;

class ProductController extends Controller {
    public function listGet() {    //login 접속할 때 이 메소드 호출
        return "list"._EXTENSION_PHP;
    }
}
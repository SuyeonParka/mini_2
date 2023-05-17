<?php

namespace application\controller;

class ApiController extends Controller {
    public function userGet() {    //login 접속할 때 이 메소드 호출
        $arrGet = $_GET;
        $arrData = [ "flg" => "0" ]; //flg라는 key의 값을 0으로 설정(=>의 기능)
        // model 호출
        $this->model = $this->getModel("User");

        $result = $this->model->getUser($arrGet, false);    //Model에서의 두번째를 안쓰겠다는 뜻

        //유저 유무 체크
        if(count($result) !== 0) {
            $arrData["flg"] ="1";
            $arrData["msg"] = "입력하신 ID가 사용중입니다.";
        }

        // 배열을 JSON으로 변경
        $json = json_encode($arrData);
        header('Content-type: application/json');
        echo $json;
        exit();
    }

}
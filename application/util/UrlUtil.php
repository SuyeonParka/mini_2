<?php

// 객체지향에서는 하나의 메소드가 하나의 기능만 할 수 있도록 쪼갬

namespace application\util;

class UrlUtil{

    // $_GET["url"]을 분석해서 리턴
    public static function getUrl() {
        return isset($_GET["url"]) ? $_GET["url"] : ""; //$_GET["url"]에는 서브디렉토리인 user/login이 담겨있음
    }

    // URL을 "/"로 구분해서 배열을 만들고 리턴
    public static function getUrlArrPath() {
        $url = UrlUtil::getUrl();   //static으로 선언된 메소드는 ::사용 / $url에는 user/login이 들어가있음 이걸 분석
        return $url !== "" ? explode("/", $url) : "";   // 최종적으로 0번 방에 user, 1번 방에 login이 담김 그리고 이거를 리턴
    }

    // "/"를 "\"로 치환해주는 메소드
    public static function replaceSlashToBackslash($str) {
        return str_replace("/", "\\", $str);
    }
}
<?php

// 객체지향에서는 하나의 메소드가 하나의 기능만 할 수 있도록 쪼갬

namespace application\util;

class UrlUtil{

    // $_GET["url"]을 분석해서 리턴
    public static function getUrl() {
        return isset($_GET["url"]) ? $_GET["url"] : "";
    }

    // URL을 "/"로 구분해서 배열을 만들고 리턴
    public static function getUrlArrPath() {
        $url = UrlUtil::getUrl();   //static으로 선언된 메소드는 ::사용
        return $url !== "" ? explode("/", $url) : "";
    }

    // "/"를 "\"로 치환해주는 메소드
    public static function replaceSlashToBackslash($str) {
        return str_replace("/", "\\", $str);
    }
}
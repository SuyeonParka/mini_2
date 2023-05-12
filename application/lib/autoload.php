<?php

spl_autoload_register( function($path) {
    $path = str_replace("\\", "/", $path);  // "\"를 "/"로 바꿈

    // 해당 파일 require
    require_once($path._EXTENSION_PHP);
});
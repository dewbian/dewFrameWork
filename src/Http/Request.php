<?php

namespace myFrameWork\Http;

class Request{
    public static function getMethod()
    {
        $method = filter_input(INPUT_POST, '_method');
        $sanitizedMethod = $method !== null ? htmlspecialchars($method, ENT_QUOTES, 'UTF-8') : null;
        return $sanitizedMethod ?: $_SERVER['REQUEST_METHOD'];
    }

    public static function getPath(){
        return $_SERVER['PATH_INFO'] ??'/';
    }
}
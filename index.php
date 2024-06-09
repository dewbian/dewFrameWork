<?php

require_once "vendor/autoload.php";


//데이터베이스 연결
//세션을 켜는일
//에러 핸들러 등록하기
//환경설정하기





use myFrameWork\Routing\Route;

Route::add('get', '/', function(){
    echo "index";
});


//Route::add('get', '/post', function(){
//    echo "post meong";
//});


//Route::add('get', '/post/{id}', function(){
//    echo "post meong";
//});

Route::run();
//Adaptor::setup('mysql:dbname=myapp_test', 'root','root');






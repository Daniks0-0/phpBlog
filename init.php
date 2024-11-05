<?php

session_start();
require_once 'functions.php';

try{
    $_DB_CONNECTION = new PDO("mysql:host=127.0.0.1;port=3307;dbname=testPhp", 'root', 'root');; //подлкючение к бд
}catch (Exception $e){
    die('error:'.$e->getMessage()); //если ошибка подключения к бд
}



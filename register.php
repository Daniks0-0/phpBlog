<?php
require_once 'init.php';
if(isUserAuthorized()){
    //пользователь не авторизован
    header('Location:index.php'); /** функция для перебоса пользователя на страницу регистрации */
    die;

}

var_dump($_POST);

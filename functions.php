<?php
//функция для проверки авторизации пользователя
function isUserAuthorized() :bool
{
   return isset($_SESSION['user_id']);
}

//функция хеширование пароля
function getPasswordHash( string $userPassword):string{
    return sha1($userPassword . 'nfjngk342,sa');

}

<?php
//функция для проверки авторизации пользователя
function isUserAuthorized()
{
   return isset($_SESSION['user_id']);
}
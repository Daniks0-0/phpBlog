<?php
require_once 'init.php';
if(isUserAuthorized()){
    //пользователь не авторизован
    header('Location:index.php'); /** функция для перебоса пользователя на страницу регистрации */
    die;

}
?>
Register
<form action="register.php" method="post">

    Login: <input type="text" name="login" value="">
    Password:<input type="text" name="password" value="register">

    <input type="submit" value="Register">

</form>


Auth
<form action="auth.php" method="post">

    Login: <input type="text" name="login" value="">
    Password:<input type="text" name="password" value="register">
    <input type="submit" value="Login">
</form>

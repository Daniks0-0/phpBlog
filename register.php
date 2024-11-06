<?php
require_once 'init.php';
if(isUserAuthorized()){
    //пользователь не авторизован
    header('Location:index.php'); /** функция для перебоса пользователя на страницу регистрации */
    die;

}
$name = $_POST['login'];
$originalPassword = $_POST['password'];
$password = getPasswordHash($originalPassword);


global $_DB_CONNECTION;

try {
    $query = "INSERT INTO users (`name`, `password`, `email`) VALUES (:name, :password, :email)";
    $stmt = $_DB_CONNECTION->prepare($query);

    $result = $stmt->execute([
        'name' => $name,
        'password' => $password,
        'email' => 'default@mail.ru'
    ]);

    if ($result) {
        echo "Запись успешно добавлена";
    } else {
        echo "Ошибка добавления записи: " . implode(", ", $stmt->errorInfo());
    }
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}



<?php

    session_start();

    include 'php/admin/config.php';

    $name = htmlspecialchars(trim($_POST['name']));
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));
    $password_confirm = htmlspecialchars(trim($_POST['password_cofirm']));
    $email = htmlspecialchars(trim($_POST['email']));
    $root = "0";

if ($password === $password_confirm) {

    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $sql = ("INSERT INTO `users` (`id`, `root`, `name`, `login`, `pass`, `email`) VALUES (NULL,?,?,?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$root, $name, $login, $password, $email]);
    
    sleep(5);
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: index.php');


} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: register.php');
}


?>

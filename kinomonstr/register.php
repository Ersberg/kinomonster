<?php
    session_start();
    if ($_COOKIE['login']) {
        header('Location: index.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="signup.php" method="post">
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите свое имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="pass" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="pass_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/login.php">авторизируйтесь</a>!
        </p>

    </form>

</body>
</html>
<?php
	
session_start();

include 'php/admin/config.php';


	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	

	$query = $pdo->prepare("SELECT * FROM `users` WHERE `login` = ? ");
	$query->execute([$login]);
	$user = $query->fetch(PDO::FETCH_ASSOC);


	if (!empty($user)) {
		$hash = $user['pass'];
	}

	if (password_verify($password, $hash)) {

		header('Location: index.php');
		$_SESSION['auth'] = true; //Делаем пользователя авторизованным
        $_SESSION['user'] = $user; //Записываем в сессию логин пользователя


	} else {
		echo ($_SESSION['message'] = "Не верный логин или пароль");
		header('Location: login.php');
		
		
	}






	
		


	
	


?>

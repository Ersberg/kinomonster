
<?php 
	
	session_start();
	include "auth.php";
	$login = $_SESSION ['user']['login']; 
	
?>	

	
<div class="header">
	<div class="logo">
		<div class="logo_text">
			<h1><a href="/">КиноМонстр</a></h1>
			<h2>Кино - наша страсть!</h2>

			<div class="authorized">
				<?php
					if ($login) { ?>
				<div class="authorized" ></div><style>.authorized{display: none;}</style> 
				<?php } ?>
				<h3><a href="register.php" class="register" value="Регистрация">Регистрация</a></h3>
				<h3><a href="login.php" class="auth" type="submit" value="Забыли пароль">Войти</a></h3>
			</div>

		</div>
  
	</div>

	<div class="menubar">

		<ul class="menu">
			<li class="selected"><a href="index.php">Главная</a></li>
			<li><a href="films.php">Фильмы</a></li>	
			<li><a href="films.php">Сериалы</a></li>
			<li><a href="news.php">Новости</a></li>
			<li><a href="contact.php">Контакты</a></li>			
		</ul>

	</div>

</div>	

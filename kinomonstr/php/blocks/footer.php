<?php

	session_start();
	$root =  $_SESSION ['user']['root'];
	echo $root;

?>

<div class="footer">
		<p>
			<a href="index.php">Главная</a> |
			<a href="films.php">Фильмы</a> |
			<a href="#">Сериалы</a> |
			<a href="news.php">Рейтинг фильмов</a> |
			<a href="contact.php">Контакты</a> |
		</p>

		<p>wh-db.com 2015</p>
</div>
<?php

session_start();


$dbhost = "localhost";
$username = "mysql";
$password = "mysql";
$dbname = "kinomonstr";


// Database connect
$connect = new PDO ("mysql:dbname=$dbname;host=$dbhost", $username, $password);

// Вывод фильмов на сайт

function get_content_all() {
	global $connect;
	$content = $connect->query("SELECT * FROM films ")->fetchAll(PDO::FETCH_ASSOC);
	return $content;
	
}


// Вывод описания фильмов на сайт


function get_description() {
	global $connect;
	$description = $connect->query("SELECT `title`, `trailer`, `year`, `style`, `author`, `description` FROM films ")->fetchAll(PDO::FETCH_ASSOC);
	return $description;
	
}


// Получение описания фильма по id


function get_description_by_id($id) {
	global $connect;
	$films = $connect->query("SELECT * FROM films WHERE id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($films as $film) {
	return $film;
	}
	
}

// Вывод статей на сайт

function get_article_all() {
	global $connect;
	$content = $connect->query("SELECT * FROM articles ")->fetchAll(PDO::FETCH_ASSOC);
	return $content;
	
}


// Вывод текстов статей на сайт


function get_article_description() {
	global $connect;
	$description = $connect->query("SELECT `title`, `trailer`, `year`, `style`, `author`, `description` FROM articles ")->fetchAll(PDO::FETCH_ASSOC);
	return $description;
	
}


// Получение описания статей по id


function get_articles_by_id($id) {
	global $connect;
	$articles = $connect->query("SELECT * FROM articles WHERE id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($articles as $article) {
	return $article;
	}
	
}









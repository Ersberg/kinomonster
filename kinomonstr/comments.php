<?php 

$dbhost = "localhost";
$username = "admin";
$password = "12345678";
$dbname = "kinomonster";


// Database connect

$connect = new PDO ("mysql:dbname=$dbname;host=$dbhost", $username, $password);



// Добавление комментария к фильму 

$id = $_POST['id'];
$name = $_POST['review_name'];
$text = $_POST['review_text'];

var_dump($_POST);

$comments = $connect->query("INSERT INTO `comments` (`id`, `film_id`, `name`, `text`) VALUES (NULL, '$id', '$name', 
	'$text') ");

header('Location: show.php?id='.$id);
?>
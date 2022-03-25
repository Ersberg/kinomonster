<?php
include_once 'config.php';





// Users

$name = htmlspecialchars(trim($_POST['name']));
$root = $_POST['root'];
$login = htmlspecialchars(trim($_POST['login']));
$password = htmlspecialchars(trim($_POST['password']));
$password_confirm = htmlspecialchars(trim($_POST['password_confirm']));
$email = htmlspecialchars(trim($_POST['email']));


//Проверка прав админа

	if($_POST['root']) 
	{
	    $root = "1";
	}else {
			$root = "0";
	}



if ($password === $password_confirm) {

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


// Create Users

	if (isset($_POST['submit'])) {
    $sql = ("INSERT INTO `users` (`id`, `root`, `name`, `login`, `pass`, `email`) VALUES (NULL,?,?,?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$root, $name, $login, $password, $email]);

    header('location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);


		
	}

}


// Read Users

$sql = $pdo->prepare("SELECT * FROM `users`");
$sql->execute();
$result = $sql->fetchAll();



// Update Users

$edit_name = $_POST['edit_name'];
$edit_login = $_POST['edit_login'];
$edit_email = $_POST['edit_email'];

$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE `users` SET `root`=?, `name`=?, `login`=?, `email`=?  WHERE `users`.`id`= ?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$root, $edit_name, $edit_login, $edit_email, $get_id]);
	// header('Location: '. $_SERVER['HTTP_REFERER']);
	header('location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

// DELETE Users

if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM `users` WHERE `users`.`id` = ?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	// header('Location: '. $_SERVER['HTTP_REFERER']);
	header('location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}





//--------------Content------------------------


// Content

$title = htmlspecialchars(trim($_POST['title']));
$logo = "assets/img/".$_FILES['logo']['name'];
$trailer = htmlspecialchars(trim($_POST['trailer']));
$year = htmlspecialchars(trim($_POST['year']));
$style = htmlspecialchars(trim($_POST['style']));
$author = htmlspecialchars(trim($_POST['author']));
$descr = htmlspecialchars(trim($_POST['description']));



// Read Content

$sql = $pdo->prepare("SELECT * FROM `films`");
$sql->execute();
$res = $sql->fetchAll();



// Create Content

if (isset($_POST['submit_content'])) {
	$create = ("INSERT INTO `films` (`id`, `title`, `logo`, `trailer`, `year`, `style`, `author`, `description`) VALUES (NULL,?,?,?,?,?,?,?)");
	$query = $pdo->prepare($create);
	$query->execute([$title, $logo, $trailer, $year, $style, $author, $descr]);
	header('location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

}


// Update Content

$edit_title = htmlspecialchars(trim($_POST['edit_title']));
$edit_logo = "assets/img/".$_FILES['logo']['name'];
$edit_trailer = htmlspecialchars(trim($_POST['edit_trailer']));
$edit_year = htmlspecialchars(trim($_POST['edit_year']));
$edit_style = htmlspecialchars(trim($_POST['edit_style']));
$edit_author = htmlspecialchars(trim($_POST['edit_author']));
$edit_descr = htmlspecialchars(trim($_POST['edit_description']));	




$get_id = $_GET['id'];
if (isset($_POST['edit_content'])) {
	$sqlup = "UPDATE `films` SET title=?, logo=?, trailer=?, year=?, style=?, author=?, description=? WHERE `films`.`id`= ?";
	$querys = $pdo->prepare($sqlup);
	$querys->execute([$edit_title, $edit_logo, $edit_trailer, $edit_year, $edit_style, $edit_author, $edit_descr, $get_id]);
	header('location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}



// DELETE Content

if (isset($_POST['delete_content'])) {
	$sql_del = "DELETE FROM `films` WHERE `films`.`id` = ?";
	$query_del = $pdo->prepare($sql_del);
	$query_del->execute([$get_id]);
	header('location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

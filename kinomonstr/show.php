<?php 
	
	session_start();
	include("function.php"); 
	$film_id = $_GET['id'];	
	$films = get_description_by_id($_GET['id']);	
	$comments = $connect->query("SELECT * FROM `comments` WHERE `film_id` = '$film_id' ")->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<meta name="description" content="Киномонстр - это портал о кино">
<meta name="keywords" content="фильмы, фильмы онлайн, hd" / >
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main">

<?php include("php/blocks/header.php"); ?>	

<div class="site_content">

	<?php include("php/blocks/panel.php"); ?>	

	<div class="content">



		<h1><?php echo $films['title']; ?></h1>

		<embed src="<?php echo $films['trailer']; ?>" width="700" height="350"> 

		<div class="info_film_page">

			<p class="label">Год: </span><span class="value"><?php echo $films['year'] ?></p>
			<p class="label">Жанр: </span><span class="value"><?php echo $films['style'] ?></p> 
			<p class="label">Режиссер: </span><span class="value"><?php echo $films['author'] ?></p>
		</div>

		<hr>

		<h2>Описание  <?php echo $films['title'] ?></h2>
		<div class="description_film">
			<?php echo $films['description'] ?>
		</div>

		<hr>
		<h2>Отзывы о фильме</h2>
		<div class="reviews">
			<?php foreach ($comments as $value): ?>
			<div class="review_name">
				<?php echo $value['name'] ?>
			</div>
			<div class="review_text">
				<?php echo $value['text'] ?>
			</div>

			<?php endforeach;?>
		</div>

		<div class="send">

			<form method="post" action="comments.php" id="review">
				<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
				<input type="text" name="review_name" placeholder="Ваше имя">
				<textarea name="review_text"></textarea>
				<input class="btn_submit" type="submit" value="Отправить">

			</form>

		</div>



	</div>

</div>


<?php include("php/blocks/footer.php"); ?>	

</div>

<!----------     JS-------------------------------------------->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
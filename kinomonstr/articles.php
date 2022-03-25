<?php 
	
	session_start();
	include("function.php"); 
	$article_id = $_GET['id'];	
	$article = get_articles_by_id($_GET['id']);	


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



		<h1><?php echo $article['title']; ?></h1>

		<?php if (($article['video']) !== null) {  ?>
			<iframe width="600" height="315" src="<?php echo ($article['video']); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php } else {echo $article['video']; } ?>


		<div class="description_film">
			<?php echo $article['text'] ?>
		</div>

		<hr>

	</div>

</div>


<?php include("php/blocks/footer.php"); ?>	

</div>

<!----------     JS-------------------------------------------->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
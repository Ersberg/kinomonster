	<?php 
		session_start();
		include("function.php"); 	
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

			<?php include("php/blocks/panel.php"); 
				  
			?>	
			
			<div class="content">
				<?php 
					
					$contents = get_article_all();
					foreach ($contents as $value): ?>				
				
					 <div class="info_film">
					 	<h2 class="title_film">
					 		<?php echo $value['title'] ?>
					 	</h2>
						<img class="film_logo" src=<?php echo $value['logo'] ?>>
						<span class="film_description">
							<?php echo substr($value['text'],0,800) ?>
						</span>
						<a href="articles.php?id=<?=$value['id']?>">Читать </a>
					</div> 

				<?php endforeach; ?>

			</div>
			</div>
		</div>


	<?php include("php/blocks/footer.php"); ?>	

	</div>

	<!----------JS-------------------------------------------->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/main.js"></script>

	</body>
	</html>


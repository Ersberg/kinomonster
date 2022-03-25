<?php 
	session_start(); 
	
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
<link href="assets/css/lightbox.css" rel="stylesheet" /> 
</head>
<body>

<div class="main">

<?php include "php/blocks/header.php";?>	

<div class="site_content">
	<?php include "php/blocks/panel.php";?>
	<div class="content">
		<h1>Новые фильмы</h1>
		<div class="films_block">

			<a href="assets/img/matrix-max.png"data-lightbox="assets/img/matrix-max.png"><img src="assets/img/matrix.png"></a>
			<a href="assets/img/max-max.png"data-lightbox="assets/img/max-max.png"><img src="assets/img/max.png"></a>
			<a href="show.html"><img src="assets/img/inter.png"></a>
			<a href="assets/img/cloud-max.png"data-lightbox="assets/img/cloud-max.png"><img src="assets/img/cloud.png"></a>
		</div>

		<h1>Новые сериалы</h1>
		<div class="films_block">

			<a href="assets/img/dead-max.jpg"data-lightbox="assets/img/dead-max.jpg"><img src="assets/img/dead.png"></a>
			<a href="assets/img/silicon-max.png"data-lightbox="assets/img/silicon-max.png"><img src="assets/img/silicon.png"></a>
			<a href="assets/img/bad-max.png"data-lightbox="assets/img/bad-max.png"><img src="assets/img/bad.png"></a>
			<a href="assets/img/xfiles-max.png"data-lightbox="assets/img/xfiles-max.png"><img src="assets/img/xfiles.png"></a>

		</div>



	<div class="posts">

		<hr> 

		<h2> <a href="#">Как снимали Интерстеллар </a></h2>
		<div class="post_content">

			<p>

				45 лет исполнилось Кристоферу Нолану — одному из самых успешных режиссеров нашего времени, чьи работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималась студия Paramount. Когда Кристофер Нолан занял место режиссера, студия Warner Bros., которая выпускала его последние фильмы, добилась участия в проекте.

			</p>

		</div>
		<p> <a href="articles.php?id=1">Читать</a></p>

	</div>
	<div class="posts">

		<hr>

		<h2> <a href="#">Актер Том Хенкс поделился впечатлением о фестивале </a></h2>
		<div class="post_content">

			<p>

				16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл, Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.

			</p>

		</div>
			<p> <a href="articles.php?id=2">Читать</a></p>

		</div>

	</div>
</div>

	<?php include "php/blocks/footer.php";?>

</div>


<!---------------------------JS-------------------------------------------->

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>

<!--------------------------JS-Lightbox-------------------------------------------->

<script src="js/lightbox.js"></script>


</body>
</html>
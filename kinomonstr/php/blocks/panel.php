<?php
	session_start();
	include "auth.php";
	$login = $_SESSION ['user']['login'];
	$root =  $_SESSION ['user']['root'];

?>

<html>


<div class="sidebar_container">
	
	<div class="sidebar--quest">
		<button type="submit" class="btn_quest" value="Задать вопрос">Задать вопрос</button>
		<div class="popup">
			<div class="popup_content">
				<img class="close-popup" src="assets/css/close.png" alt="">
				<div class="modal_form">
					<form id="form" name="form" method="post" action="../php/mail.php" >
						<input type="text" name="name" id="name" placeholder="Ваше имя" >
						<input type="email" name="mail" id="mail" placeholder="Ваш email" >
						<textarea name="text" id="text" required></textarea>
						<input class="btn_popup" type="submit" value="Отправить"/>
					</form>
				</div>
			</div>
		</div>
	</div>


	<?php
		if ($login ) { ?>
			<div class="sidebar-welcome" ><style>.sidebar-welcome{display: block;}</style> 
				<p>Добро пожаловать, <?php echo $login; ?></p>
				<?php  if ($root == 1) : ?>
					 <p><a href="../php/admin/index.php">Личный кабинет</a></p> 
				 <?php endif;?> 
				 <?php  if ($root == 0) : ?>
					 <p><a href="#">Личный кабинет</a></p> 
				 <?php endif;?> 
				<p><a href="../outh.php">Выход</a></p>
			 </div>
	<?php } ?>


	<div class="sidebar">

		<h2>Поиск</h2>
		<form method="post" action="#" id="search_form">
			<input type="search" name="search_field" placeholder="Ваш запрос" />
			<input type="submit" class="btn_search" value="Найти" />
		</form>

	</div>

	<div class="sidebar">
		<h2>Новости</h2>
		<span>31.10.2021</span>
		<p>Актер Том Хенкс поделился впечатлениями от «Инферно»</p>
		<a href="articles.php?id=2">Читать</a>	
	</div>

	<div class="sidebar">
		<h2>Рейтинг фильмов</h2>
		<ul>
			<li><a href="#">Интерстеллар</a><span class="rating_sidebar">8.1</span></li>
			<li><a href="#">Матрица</a><span class="rating_sidebar">8.0</span></li>
			<li><a href="#">Макс</a><span class="rating_sidebar">7.7</span></li>
			<li><a href="#">Облачный атлас</a><span class="rating_sidebar">7.1</span></li>
		</ul>

	</div>
</div>

</html>

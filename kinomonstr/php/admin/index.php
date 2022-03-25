<?php

session_start();
include_once 'func.php';

if ($_SESSION['user']['root'] !== '1') {
        header('Location: ../../index.php');
}

if(isset($_POST['submit_content']) and $_FILES){
   $upload = "../../assets/img/".time();	
   move_uploaded_file($_FILES['logo']['tmp_name'],$upload);
} 



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD приложение на PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<!-- Выпадающий список -->

<div class="admin_header">
	<select class="form-select" aria-label="Default select example">
	  <option selected>Выберите пункт</option>
	  <option value="1" id="user">Пользователи</option>
	  <option value="2" id="films">Фильмы</option>
	</select>
	<span><button class="admin_out" onclick="window.location.href = '../../index.php'">Выйти</button></span>
</div>



	<!-- Таблица пользователей -->

	<div class="container" id="users">
		<div class="row">
			<div class="col mt-1">

		<button class="btn btn-success mb-1" data-toggle="modal" data-target="#createModal"><i class="fa fa-user-plus"></i></button>
		
		<table class="table shadow " id="table_users" >
			<thead class="thead-dark">
				<tr>
					<th>Root</th>
					<th>Имя</th>
					<th>Логин</th>
					<th>Почта</th>
					<th>Действие</th>
				</tr>
				<?php foreach ($result as $value) { ?>
				<tr>
					<td><?=$value['root'] ?></td>
					<td><?=$value['name'] ?></td>
					<td><?=$value['login'] ?></td>
					<td><?=$value['email'] ?></td>
					<td>
						<a href="?edit=<?=$value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$value['id'] ?>"><i class="fa fa-edit"></i></a> 
						<a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$value['id'] ?>"><i class="fa fa-trash"></i></a>
						<?php require 'modal.php'; ?>
					</td>
						</tr> <?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>


<!-- Добавление пользователей -->
	<div class="modal fade" tabindex="-1" role="dialog" id="createModal">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow">
	      <div class="modal-header">
	        <h5 class="modal-title">Добавить пользователя</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="name" value="" placeholder="Имя">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="login" value="" placeholder="Логин">
	        	</div>
	        	<div class="form-group">
	        		<input type="password" class="form-control" name="password" value="" placeholder="Пароль">
	        	</div>
	        	<div class="form-group">
	        		<input type="password" class="form-control" name="password_confirm" value="" placeholder="Повторите пароль">
	        	</div>
	        	<div class="form-group">
	        		<input type="email" class="form-control" name="email" value="" placeholder="Почта">
	        	</div>
	        	<label for="root">Администратор</label>
	        	<input class="root" type="checkbox" name="root">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>

	<!-- Таблица фильмов -->


	<div class="container" id="content">
		<div class="row">
			<div class="col mt-1">


		<button class="btn btn-success mb-1" data-toggle="modal" data-target="#createContent"><i class="fa fa-user-plus"></i></button>
		
		
		<table class="table shadow ">
			<thead class="thead-dark">
				<tr>
					<th>Название</th>
					<th>Постер</th>
					<th>Трейлер</th>
					<th>Год</th>
					<th>Жанр</th>
					<th>Режиссер</th>
					<th>Описание</th>
					<th>Действие</th>
				</tr>
				<?php foreach ($res as $value) { ?>
				<tr>
					<td><?=$value['title'] ?></td>
					<td><?=$value['logo'] ?></td>
					<td><?=$value['trailer'] ?></td>
					<td><?=$value['year'] ?></td>
					<td><?=$value['style'] ?></td>
					<td><?=$value['author'] ?></td>
					<td><?= substr($value['description'],0,410) ?></td>
					<td>
						<a href="?edit=<?=$value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editContent<?=$value['id'] ?>"><i class="fa fa-edit"></i></a> 
						<a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_Modal<?=$value['id'] ?>"><i class="fa fa-trash"></i></a>
						<?php require 'modal.php'; ?>
					</td>
						</tr> <?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>



	<!-- Добавление фильмов -->

	<div class="modal fade_content" tabindex="-1" role="dialog" id="createContent">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow">
	      <div class="modal-header">
	        <h5 class="modal-title">Добавить статью</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form enctype="multipart/form-data" action="" method="post">
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="title" value="" placeholder="Название">
	        	</div>
	        	<div class="form-group">
	        		<input type="file" accept= "image/jpeg,image/png" class="form-control" name="logo" value="" placeholder="Постер">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="trailer" value="" placeholder="Трейлер">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="year" value="" placeholder="Год">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="style" value="" placeholder="Жанр">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="author" value="" placeholder="Режиссер">
	        	</div>
	        	<div class="form-group">
	        		<textarea type="text" class="form-control" name="description" value="" placeholder="Описание">
	        		</textarea>
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        <button type="submit" name="submit_content" class="btn btn-primary">Добавить</button>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>




<!---------------------------JS-------------------------------------------->


<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
</body>
</html>

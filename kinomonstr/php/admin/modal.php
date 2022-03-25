<?php


if(isset($_POST['edit_content']) and $_FILES){
  $upload = "../../assets/img/";  
  move_uploaded_file($_FILES['logo']['tmp_name'],$upload);
} 


?>

<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_name" value="<?=$value['name'] ?>" placeholder="Имя">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_login" value="<?=$value['login'] ?>" placeholder="Логин">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_email" value="<?=$value['email'] ?>" placeholder="Почта">
        	</div>
          <label for="root">Администратор</label>
          <div class="form-group">
            <input class="root" name="root" type="checkbox" value="<?=$value['root'] ?>">
          </div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>


<!-- Modal Edit Content-->
<div class="modal fade_content" id="editContent<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" action="?id=<?=$value['id'] ?>" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="edit_title" value="<?=$value['title'] ?>" placeholder="Название фильма">
          </div>
          <div class="form-group">
            <input type="file" class="form-control" name="logo" value="" placeholder="Постер">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="edit_trailer" value="<?=$value['trailer'] ?>" placeholder="Трейлер">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="edit_year" value="<?=$value['year'] ?>" placeholder="Год">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="edit_style" value="<?=$value['style'] ?>" placeholder="Жанр">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="edit_author" value="<?=$value['author'] ?>" placeholder="Режиссер">
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" name="edit_description" placeholder="Описание"><?=$value['description'] ?></textarea> 
          </div>
          <div class="modal-footer">
            <button type="submit" name="edit_content" class="btn btn-primary">Обновить</button>
          </div>
        </form> 
      </div>
    </div>
  </div>
</div>


<!-- DELETE Content -->


<div class="modal fade" id="delete_Modal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?id=<?=$value['id'] ?>" method="post">
          <button type="submit" name="delete_content" class="btn btn-danger">Удалить</button>
      </form>
      </div>
    </div>
  </div>
</div>


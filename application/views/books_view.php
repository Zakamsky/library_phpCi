<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/style.css">
	<title>Наша библиотека</title>
</head>
<body>
	<h1 class="text-center text-info m-5">Наша библиотека</h1>

<div class="container pb-5">
	<div class="card-deck flex-wrap justify-content-between ">
		<?php foreach($books as $book):?>
		<div class="card m-3 border-info">
			<div class="card-header h -25">
				<h5 class="card-title text-info m-0"><?=$book['title'];?></h5>
			</div>
			<div class="card-body">
				<p class="text-muted mb-1">Автор:</p>
				<p class="card-text"><?=$book['author'];?></p>
				<p class="text-muted mb-1">Жанр:</p>
				<p class="card-text">
				 <?php
				 $id = $book['genre_id'];
				 echo $genres[$id-1]['genre'];
				 ?>
				</p>
				<p class="text-muted mb-1">Год выпуска:</p>
				<p class="card-text"><?=$book['year'];?></p>

			</div>
			<div class="card-footer px-1 d-flex justify-content-around">
				<a href="<?=base_url()?>libs/edit_book/<?=$book['id'];?>" class="btn bt n-sm btn-outline-info">Изменить</a>
				<a href="<?=base_url()?>libs/del_book/<?=$book['id'];?>" class="btn bt n-sm btn-outline-danger">удалить</a>
			</div>
		</div>
		<?php endforeach;?>

		<div class="card m-3 border-info">
			<div class="card-header h-25">
				<h5 class="card-title m-0"><a href="<?=base_url()?>libs/add_book" class="text-info">Новая книга</a></h5>
			</div>
			<div class="card-body">
				<p class="card-text"><a class="btn btn-info m-3" href="<?=base_url()?>libs/add_book">Добавить книгу</a></p>
				<p class="card-text">
				</p>
				<p class="card-text"></p>
			</div>
			<div class="card-footer px-1 d-flex justify-content-around">
				<a href="<?=base_url()?>libs/add_book" class="btn bt n-sm btn-outline-info">Добавить</a>
				<a href="#" class="btn bt n-sm btn-outline-secondary disabled">удалить</a>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/style.css">
	<title>Изменить книгу</title>
</head>
<body>
<<!--div class="container"><h1 class="m-5 text-info">Добавить книгу</h1>

	<div class="form border border-info rounded p-4">
		<form method="post" action="<?/*= base_url() */?>libs/edit_book/<?/*= $book['0']['id']; */?>">

			<div class="form-group pb-3">
				<label for="title">Название</label>
				<input type="text" name="title" id="title" value="<?/*= $book['0']['title']; */?>" class="form-control"><?/*= form_error( 'title' ) */?>
			</div>

			<div class="form-group pb-3">
				<label for="author">Автор</label>
				<input type="text" name="author" id="author"
						 value="<?/*= $book['0']['author']; */?>" class="form-control"><?/*= form_error( 'author' ) */?>
			</div>

			<div class="form-group pb-3">
				<label for="genre">Жанр</label>
				<select name="genre_id" id="genre" class="form-control">
				<?php /*foreach ( $genres as $genre ): */?>
						 <option <?php /*if ( $genre['id'] == $book['0']['genre_id'] ) {
					   echo 'selected';
				   } */?> value="<?/*= $genre['id'] */?>"><?/*= $genre['genre'] */?></option>
				<?php /*endforeach; */?>
				</select>
			</div>

			<div class="form-group pb-3">
				<label for="year">Год выпуска</label>
				<input type="text" name="year" id="year" value="<?/*= $book['0']['year']; */?>" class="form-control"><?/*= form_error( 'year' ) */?>
			</div>

			<input type="submit" name="add" value="Добавить книгу">
		</form>
	</div>-->

<div class="container">
	<h1 class="m-5 text-info">Изменить книгу</h1>
	<div class="form border border-info rounded p-4">
		<form method="post" action="<?= base_url() ?>libs/edit_book/<?= $book['0']['id']; ?>">

			<div class="form-group pb-3">
				<label for="title">Название:</label>
				<input type="text" name="title" id="title" value="<?= $book['0']['title']; ?>"
						 class="form-control"><?= form_error( 'title' ) ?>
			</div>
			<div class="form-group pb-3">
				<label for="author">Автор:</label>
				<input type="text" name="author" id="author" value="<?= $book['0']['author']; ?>"
						 class="form-control"><?= form_error( 'author' ) ?>
			</div>

			<div class="form-group pb-3">
				<label for="genre">Жанр:</label>
				<select name="genre_id" id="genre" class="form-control">
				<?php foreach ( $genres as $genre ): ?>
						 <option <?php if ( $genre['id'] == $book['0']['genre_id'] ) {echo 'selected';}?>  value="<?= $genre['id'] ?>"><?= $genre['genre'] ?></option>
				<?php endforeach; ?>
				</select>
			</div>

			<div class="form-group pb-3">
				<label for="year">Год выпуска:</label>
				<input type="text" name="year" id="year" value="<?= $book['0']['year']; ?>"
						 class="form-control"><?= form_error( 'year' ) ?>
			</div>
			<input type="submit" name="add" value="Сохранить изменения" class="btn btn-info">
		</form>

	</div>
	<a href="<?= base_url() ?>" class="my-5 btn btn-outline-info">Вернуться на главную</a></div>
</body>
</html>
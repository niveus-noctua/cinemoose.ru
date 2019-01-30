<div class="container">
	<form action="/rule/addarticle" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">Заголовок: </label>
			<input type="text" name="title" class="form-control form-control-lg">
		</div>
		<div class="form-group">
			<label for="content">Контент:</label>
			<textarea name="content" class="form-control form-control-lg"></textarea>
		</div>
		<div class="form-group">
			<label for="author">Автор: </label>
			<select class="form-control" name="author">
				<option>Антон Новожилов</option>
				<option>Лина Лозинская</option>
				<option>Василий Степанович</option>
				<option>Дмитрий Поликарпович</option>
				<option>Борис Александрович</option>
			</select>
		</div>
		<div class="form-group">
			<label for="preview_image">Изображение превью: </label>
			<input type="file" name="preview_image" class="form-control-file form-control-lg" rows="3">
		</div>
		<div class="form-group">
			<label for="date">Дата: </label>
			<input type="date" name="date" class="form-control form-control-lg">
		</div>
		<div class="form-group">
			<label for="category">Категория: </label>
			<select class="form-control" name="category">
				<option>news</option>
				<option>movies</option>
				<option>shows</option>
				<option>review</option>
			</select>
		</div>


		<button type="submit" class="btn btn-primary">Отправить</button>
		<div>
			<p>___________________________________________________________</p>
		</div>
	</form>
</div>

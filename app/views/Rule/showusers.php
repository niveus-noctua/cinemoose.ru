<div class="container">
	<form action="/rule/showusers" method="post">

		<div class="form-group">
			<div class="form-group">
				<label for="login">Поиск по никнейму: </label>
				<input type="text" name="login" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Искать</button>
			</div>
		</div>

	</form>
	<table class="table table-striped">
		<tr>
			<th>nickname</th>
			<th>email</th>
			<th>name</th>
			<th>role</th>
			<th>Изменить
				<div class="checkbox">
					<label>
						<input id="change_user_admin" type="checkbox">
					</label>
				</div>
			</th>
			<th>Удалить
				<div class="checkbox">
					<label>
						<input id="delete_user_admin" type="checkbox">
					</label>
				</div>
			</th>
		</tr>
		<tr>
			<td><?=$user_data->login?></td>
			<td><?=$user_data->email?></td>
			<td><?=$user_data->name?></td>
			<td><?=$user_data->role?></td>
			<td>
				<div class="form-group">
					<button id="change_user_admin_button" class="btn btn-primary" type="submit" disabled="disabled">
						Далее
					</button>
				</div>

			</td>
			<td>
				<div class="form-group">
					<button id="delete_user_admin_button" class="btn btn-danger" type="submit" disabled="disabled"
                            onclick="deleteClick(<?=$user_data->id?>)">
                        <a href="

                        "></a>
						Далее
					</button>
				</div>
			</td>
		</tr>
	</table>
	<form class="change_user_admin_form" hidden action="/rule/showusers" method="post">
		<div class="form-group">
			<label for="login_change">Никнейм: </label>
			<input type="text" name="login_change" class="form-control form-control-lg" value="<?=$user_data->login?>">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input name="email_change" class="form-control form-control-lg" value="<?=$user_data->email?>">
		</div>
		<div class="form-group">
			<label for="name">Name:</label>
			<input name="name_change" class="form-control form-control-lg" value="<?=$user_data->name?>">
		</div>
		<div class="form-group">
			<label for="role_change">Роль: </label>
			<select class="form-control" name="role_change">
				<option><?=$user_data->role?></option>
				<? if ($user_data->role=="admin"): ?>
				<option>user</option>
				<? else: ?>
				<option>admin</option>
				<? endif; ?>
			</select>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Сохранить</button>
		</div>

	</form>
	<div>
		<p>___________________________________________________________</p>
	</div>
</div>
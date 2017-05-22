<?php 
	session_start();
	if (isset($_POST[login])&&isset($_POST[password])){
		$login=$_POST[login];
		$password=$_POST[password];
		if ($login='admin'&&$password='123456')
			$_SESSION[logged]=true;
	}
	include 'templates/top.php';
	if (isset($_SESSION[logged]))
		echo '<a href="adminfb.php">Почитать отзывы</a>
	<div class="content">
				<form enctype="multipart/form-data" action="input.php" method="POST">
					<fieldset>
						<legend><b>Добавление товаров:</b></legend>
						<label for="name">Название товара</label>
						<input type="text" name="name" value=""><br>
						<label for="short">Краткое описание</label>
						<input type="text" name="short" value=""><br>
						<label for="long">Полное описание</label><br>
						<textarea name="long" cols="80" rows="30"></textarea><br>
						<label for="cost">Стоимость</label>
						<input type="number" name="cost" id=""><br>
						<label for="img">Ссылка на картинку</label>
						<input type="text" name="img" value=""><br>
						<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
						<input name="userfile" type="file" />
						<input type="submit">
					</fieldset>
				</form>
			</div>';
	else
		echo '
<form action="admin.php" method="POST">
	<fieldset>
		<legend>Вход</legend>
		<label for="login">Имя пользователя:</label>
		<input type="text" name="login" id="">
		<label for="password">Пароль</label>
		<input type="password" name="password" id="">
		<input type="submit">
	</fieldset>
</form>
	';

?>

<?php include 'templates/bot.php';?>

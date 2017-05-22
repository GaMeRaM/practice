<?php include 'templates/top.php';?>

<form action="addfb.php" method="POST">
	<h1>Оставьте отзыв о нашем сайте:</h1>
	<label for="name"><b>Имя:</b></label><br>
	<input type="text" name="name" id=""><br>
	<label for="text"><b>Отзыв:</b></label><br>
	<textarea name="text" id="" cols="80" rows="10"></textarea><br>
	<input type="submit">
</form>
<?php include 'adminfb.php';?>
<?php include 'templates/bot.php';?>
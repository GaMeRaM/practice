<?php 
	include 'templates/top.php';
	include 'conf.php';
	$conn=new mysqli($servername, $username, $password, $tablename);
	$sql="insert into fb (`name`, `text`) values ('".$_POST[name]."','".$_POST[text]."');";
	$conn->query($sql);
?>
<div class="content">
	<h1>Спасибо за ваш отзыв</h1>
	Ваше мнение важно для нас
</div>
<script>
	var delay=5000;
	setTimeout(function(){ window.location = "index.php";},delay);
</script>
<?php include 'templates/bot.php';?>
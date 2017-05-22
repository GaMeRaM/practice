<?php 
	include 'template/top.php';
	include 'conf.php';
	$conn=new mysqli($servername, $username, $password, $tablename);
	$sql="insert into fb (`name`, `text`) values ('".$_POST[name]."','".$_POST[text]."');";
	$conn->query($sql);
?>
<h1>Спасибо за ваш отзыв</h1>
Ваше мнение важно для нас
<script>
	var delay=5000;
	setTimeout(function(){ window.location = "index.php";},delay);
</script>
<?php include 'template/bot.php';?>
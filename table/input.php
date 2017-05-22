<?php
	include 'conf.php';
	if (isset($_POST[name])&&isset($_POST[short])&&isset($_POST[long])&&isset($_POST[img])){
		$name=$_POST[name];
		$short=nl2br($_POST[short]);
		$long=nl2br($_POST[long]);
		$img=$_POST[img];
		$cost=$_POST[cost];
		$conn=new mysqli($servername, $username, $password, $tablename);
		$sql="INSERT INTO `tovar`(`name`, `short`, `long`, `img`, `cost`) VALUES ('".$name."', '".$short."','".$long."', '".$img."', '".$cost."');";
		echo $sql;
		$conn->query($sql);
	}
	mysql_close($conn);
	header("Location: shop.php");
?>
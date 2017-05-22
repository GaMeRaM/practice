<?php
	include 'conf.php';
	if (isset($_POST[name])&&isset($_POST[short])&&isset($_POST[long])){
		if (isset($_FILES['userfile']['name'])){
			$uploaddir = 'uploads/';
			$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
			/*if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			    echo "Файл корректен и был успешно загружен.\n";
			} else {
			    echo "Возможная атака с помощью файловой загрузки!\n";
			}*/
			echo "<pre>";
			print_r($_FILES);
			echo "</pre>";
			$img='uploads/'.basename($_FILES['userfile']['name']);
		}
		else 
			$img=$_POST[img];
		$name=$_POST[name];
		$short=nl2br($_POST[short]);
		$long=nl2br($_POST[long]);
		$cost=$_POST[cost];
		$conn=new mysqli($servername, $username, $password, $tablename);
		$sql="INSERT INTO `tovar`(`name`, `short`, `long`, `img`, `cost`) VALUES ('".$name."', '".$short."','".$long."', '".$img."', '".$cost."');";
		$conn->query($sql);
		echo basename($_FILES['userfile']['name']);
	}
	mysql_close($conn);
	#header("Location: shop.php");
?>

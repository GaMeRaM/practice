<?php
	if(isset($_POST[id])){
		include 'conf.php';
		$conn=new mysqli($servername, $username, $password, $tablename);
		$sql="delete from fb where `id`=".$_POST[id].";";
		echo $sql;
		$result=$conn->query($sql);
		header("Location: ./adminfb.php");
	}
?>
<?php include 'template/top.php';?>

			<div class="content">
				<?php
					include 'conf.php';
					$conn=new mysqli($servername, $username, $password, $tablename);
					session_start();
					if(isset($_POST[id])){
						$sql="delete from tovar where `id`=".$_POST[id].";";
						echo $sql;
						$result=$conn->query($sql);
						header("Location: ./shop.php");

					}
					$sql="select * from tovar where `id`='".$_GET[id]."';";
					$result=$conn->query($sql);
					if ($result->num_rows > 0){
						while ($rows[]=mysqli_fetch_assoc($result));
						array_pop($rows);
					}
				if ($_SESSION[logged])
					echo '
				<form action="product.php" method="POST">
					<input type="hidden" name="id" id="" value="'.$rows[0][id].'">
					<input type="submit" value="X">
				</form>';
				?>
				<img src="<?php echo $rows[0][img];?>" style="width:50%; float:left;">
				<h1><?php echo $rows[0][name]?></h1>
				<h3><?php echo $rows[0][cost]?> руб.</h3>
				<?php echo $rows[0][long];?>
			</div>
<?php include 'template/bot.php';?>
<?php include 'templates/top.php';?>
			<div class="content">
			<h2>Магазин</h2>
				<?php
					include 'conf.php';
					session_start();
					if (isset($_SESSION[logged]))
						echo "<a href='admin.php'>Admin</a><br>";
					$conn=new mysqli($servername, $username, $password, $tablename);
					$sql="select * from tovar;";
					
					$result=$conn->query($sql);
					if ($result->num_rows > 0){
						while ($rows[]=mysqli_fetch_assoc($result));
						array_pop($rows);
					}
					foreach ($rows as $row) {
						echo "<div class='shop-item'>";
						echo "<div class='shop-cont'><img src='".$row[img]."' alt='' class='shop-image center'></div>";
						echo "<a href='product.php?id=".$row[id]."'><h1>".$row[name]."</h1></a>";
						echo "<p>".$row[short]."</p>";
						echo "<p><b>".$row[cost]." руб.</b></p>";
						echo "</div>";
					}
				?>
			</div>
<?php include 'templates/bot.php';?>
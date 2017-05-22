<?php include 'template/top.php';?>
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
						echo "<table class='shop-table'>
									<tr >
										<td class='shop-item'><img src='".$row[img]."' class='shop-image'></td>
									</tr>
									<tr >
										<td class='shop-item'>
											<a href='product.php?id=".$row[id]."'><h1>".$row[name]."</h1></a>
											<p>".$row[short]."</p>
											<p><b>".$row[cost]." руб.</b></p>
										</td>
									</tr>
								</table>";
					}
				?>



<?php include 'template/bot.php';?>
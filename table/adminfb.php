<?php include 'template/top.php';?>
<h2>Магазин</h2>
<?php
include 'conf.php';
session_start();
if (isset($_SESSION[logged])){

$conn=new mysqli($servername, $username, $password, $tablename);
$sql="select * from fb;";

$result=$conn->query($sql);
if ($result->num_rows > 0){
	echo '<table border="1" class="maintable">
	<tr>
		<th>Имя</th>
		<th>Отзыв</th>
		<th>Удалить</th>
	</tr>';
	while ($rows[]=mysqli_fetch_assoc($result));
	array_pop($rows);
foreach ($rows as $row) {
	echo "<tr>
		<td class='feedback-author' align='center'>".$row[name]."</td>
		<td>".$row[text]."</td>
		<td width='10%' align='center'>
			<form action='delfb.php' method='POST'>
					<input type='hidden' name='id' id='' value='".$row[id]."'>
					<input type='submit' value='X'>
			</form>
		</td>
	</tr>";
}
echo "</table>";}
else
	echo "Отзывов нет";
}
else
	header("Location: ./index.php");
?>


<?php include 'template/bot.php';?>
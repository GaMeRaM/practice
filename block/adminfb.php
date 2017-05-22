<h2>Отзывы</h2>
<?php
include 'conf.php';
session_start();

$conn=new mysqli($servername, $username, $password, $tablename);
$sql="select * from fb;";

$result=$conn->query($sql);
if ($result->num_rows > 0){
	while ($rows[]=mysqli_fetch_assoc($result));
	array_pop($rows);
foreach ($rows as $row) {
	echo "<div style='overflow:auto;'><b>".$row[name].":</b> ".$row[text]."<form action='delfb.php' method='POST' style='display:inline; float: right;'>
					<input type='hidden' name='id' id='' value='".$row[id]."'>
					<input type='submit' value='X'>
			</form></div>";
}
} else echo "Отзывов нет";

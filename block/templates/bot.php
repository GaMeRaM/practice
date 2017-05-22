		</div>
	</div>
	<div class="footer">
		&copy; Безденежных Антон КС-331 2k17
		<?php 
			session_start();
			include 'conf.php';
			$conn=new mysqli($servername, $username, $password, $tablename);
			if(!isset($_SESSION['hasVisited'])){
				$conn->query('update counter set counter=counter+1');
				$_SESSION['hasVisited']="yes";
			}
			$sql="SELECT counter FROM counter";
			
			$result=$conn->query($sql);
			if ($result->num_rows > 0){
				while ($rows[]=mysqli_fetch_assoc($result));
				array_pop($rows);
			}

			
			echo $rows[0][counter] . " посетителей";
		 ?>
	</div>
</body>
<script src="script/snow.js"></script>
</html>
<?php 
	function loadUsers(){
		$con=mysqli_connect("localhost", "root","Nuncalasabr@s97", "cali_database");
		$arr = array();

		if (mysqli_connect_errno($con)){
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
		    $sql="SELECT * FROM login";
			$result = mysqli_query($con, $sql);

			while($row = mysqli_fetch_array($result))
			{
				$arr[] = $row['username'];
				
			}
			
			

			mysqli_close($con);
		}
		return $arr; 
	}
 ?>
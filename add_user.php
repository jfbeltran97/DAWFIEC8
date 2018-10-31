<?php 
	session_start();
	if(isset($_POST["submit"])){
		$con=mysqli_connect("localhost", "root","Nuncalasabr@s97", "cali_database");

		if (mysqli_connect_errno($con)){
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
			$username = $_POST['username'];
			$password = $_POST['password'];
		    $sql="INSERT INTO login(username, password) VALUES('$username', '$password')";
			$result = mysqli_query($con, $sql);

			if($result){
				echo "Saved in database successfully";
				$previousUrl = $_SESSION['previousUrl'];
				header("Location: $previousUrl");
			}else{
				echo "Warning, delete in server the image or it won't work";
			}
			
			

			mysqli_close($con);
		}
	}
 ?>
<?php 
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysqli_connect("localhost", "root", "Nuncalasabr@s97", "cali_database");
    session_start();// Starting Session
    // Storing Session
    $user_check = $_SESSION['login_user'];
    // SQL Query To Fetch Complete Information Of User
    $ses_sql = mysqli_query($connection, "SELECT username FROM login WHERE username='$user_check'");
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session = $row['username'];
    if(!isset($login_session)){
      mysqli_close($connection); // Closing Connection
      header("Location: login.php"); // Redirecting To Home Page
      exit();
    }
    
 ?>
<?php 
	$resumenData = $_POST["editorR"];
	$descData = $_POST['editor1'];
	$id = $_GET["id"];
	$title = $_POST['title'];
	$con=mysqli_connect("localhost", "root","Nuncalasabr@s97", "cali_database");

    if (mysqli_connect_errno($con)){
    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{
		$sql="UPDATE noticias SET title='{$title}', brief='{$resumenData}', description='{$descData}' WHERE id={$id}";
		$success = mysqli_query($con, $sql);
		if($success){
			echo "GUARDADO EXITOSAMENTE! <br>";
			echo "<a href='posts.php'>SEGUIR ADMINISTRANDO...</a>";
		}else{
			echo "ERROR, REVISAR QUERY";
		}

	}
 ?>
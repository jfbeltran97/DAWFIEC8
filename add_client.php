<?php 
	function saveDataInDatabase($image){
		$con=mysqli_connect("localhost", "root","Nuncalasabr@s97", "cali_database");

		if (mysqli_connect_errno($con)){
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
		    $sql="INSERT INTO clientes(client) VALUES('$image')";
			$result = mysqli_query($con, $sql);

			if($result){
				echo "Saved in database successfully";
			}else{
				echo "Warning, delete in server the image or it won't work";
			}
			
			

			mysqli_close($con);
		}

	}

	$target_dir = "clients/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . "." . "<br>";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}

		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			echo "Sorry, only JPG, JPEG, PNG files are allowed.";
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			echo "moving from " . $_FILES["fileToUpload"]["tmp_name"] . "  to  " . $target_file . "<br>";
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				$image = basename($_FILES["fileToUpload"]["name"]);
				saveDataInDatabase($image);
				header("Location: dashboard.php");
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
	}
 ?>
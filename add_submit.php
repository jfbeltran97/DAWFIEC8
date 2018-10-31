<?php 
	/*
		get all data except image
		find out how to upload image to server
		find the route where image is in server
		get image name with extension
		when loading image for edit.php or noticiass.php or custom_new.php be sure to include variable cotaining path

	*/
		function saveDataInDatabase($title, $description, $image, $brief){
			$con=mysqli_connect("localhost", "root","Nuncalasabr@s97", "cali_database");

			if (mysqli_connect_errno($con)){
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}else{
			    $sql="INSERT INTO noticias(title, description, img, brief) VALUES('$title', '$description', '$image', '$brief')";
				$result = mysqli_query($con, $sql);

				if($result){
					echo "Saved in database successfully";
				}else{
					echo "Warning, delete in server the image or it won't work";
				}
				
				

				mysqli_close($con);
			}

		}

		function getDataFromForm(){
			$title      = $_POST['title'];
			echo "got title";
			$description  = $_POST['editor1'];
			echo "got descrip";
			$image 		  = basename($_FILES["fileToUpload"]["name"]);
			echo "got image";
			$brief		  = $_POST['editorR'];
			echo "got brief";
			$arr = array();
			$arr[] = $title;
			$arr[] = $description;
			$arr[] = $image;
			$arr[] = $brief;
			echo "\n";var_dump($arr);
			return $arr;
		}



		$target_dir = "uploads/";
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
				echo $_POST['title'];
				$arr = getDataFromForm();
				echo "\n got data!";
				saveDataInDatabase($arr[0],$arr[1],$arr[2],$arr[3]);
				header("Location: dashboard.php");
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
	}

 ?>
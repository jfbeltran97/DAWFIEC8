<?php 
	class Noticia{
		public $id;
		public $title;
		public $img;
		public $brief;
		public $description;
		public $date;
		

		public function __construct($id, $title, $img, $brief, $description, $date){
			$this->id = $id;
			$this->title = $title;
			$this->img = $img;
			$this->brief = $brief;
			$this->description = $description;
			$this->date = $date;
		}

		public static function loadNews(){
			$con=mysqli_connect("localhost", "root","Nuncalasabr@s97", "cali_database");
 			$arr = array();

			if (mysqli_connect_errno($con)){
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}else{
			    $sql="SELECT * FROM noticias";
				$result = mysqli_query($con, $sql);

				while($row = mysqli_fetch_array($result))
				{
					$arr[] = new Noticia($row['id'], $row['title'], $row['img'], $row['brief'], $row['description'], $row['fecha']);
					
				}
				
				

				mysqli_close($con);
			}
			return $arr; 
		}

		public static function getNew($id){
			$con=mysqli_connect("localhost", "root","Nuncalasabr@s97", "cali_database");
			$noticia;
			if (mysqli_connect_errno($con)){
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}else{
			    $sql="SELECT * FROM noticias WHERE id=" . $id;
				$result = mysqli_query($con, $sql);

				while($row = mysqli_fetch_array($result))
				{
					$noticia = new Noticia($row['id'], $row['title'], $row['img'], $row['brief'], $row['description'], $row['fecha']);
					
				}
				
				

				mysqli_close($con);
			}
			return $noticia;
		}
	}
 ?>
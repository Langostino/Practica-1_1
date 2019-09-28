	
	<?php
	include "conexion_bd.php";

		function insertar(){
	
	if ( isset( $_POST['submit'])){
		$city_id = $_POST['c_id'];
		$city_name = $_POST['c_name'];
		$city_code = $_POST['c_code'];
		$city_pop = $_POST['c_pop'];
		$city_dis = $_POST['c_dis'];
		
		try{
			$stmt = $dbh->prepare("INSERT into city (id, name, countrycode, district, population) VALUES (:id, :name, :code, :dis, :pop)");
			$rows = $stmt->execute(array(':id' => $city_id, ':name' => $city_name, ':code' => $city_code, ':pop' =>  $city_dis, ':dis' =>  $city_pop));
			if($rows == 1)
			echo "La ciudad ba sido insertada con éxito";
		}catch(PDOException $e){
			echo "Error".$e->getMessage();
		}
	}
	
	//Inserta los parámetros recogidos por el POST.


	/*	$stmt = $dbh->PREPARE("SELECT * FROM city");
		$stmt->execute();
		$rows = $stmt->fetchAll();
		foreach ($rows as $rs){
			echo $id = $rs[0];
		} */
		}
		?>
<?php
	include "inc/conexion_bd.php";
?>
<html>
<head>
	<meta charset="utf-8">
	<title>FORM</title>
	<link rel="stylesheet" href="css/form.css">
</head>
<body>

	<ul>
		<li><a href="index.php">Volver a Index</a></li>
		<li><a href="list.php">Volver a Listado</a></li>
	</ul>

	<?php
	if (isset($_POST['insertar'])){

		$city_name = $_POST['c_name'];
		$city_code = $_POST['c_code'];
		$city_pop = $_POST['c_pop'];
		$city_dis = $_POST['c_dis']; 

		if($city_name == null){
			echo "Debes al menos especificar el nombre de la ciudad";
		}else{
			//Inserta los parámetros recogidos por el POST.
			try{
				$stmt = $dbh->prepare("INSERT into city (name, CountryCode, population, district) VALUES (:name, :code, :pop, :dis)");
				$rows = $stmt->execute(array( ':name' => $city_name, ':code' => $city_code, ':pop' =>  $city_pop, ':dis' =>  $city_dis));
				if($rows == 1)
				echo "La ciudad ba sido insertada con éxito";
			}catch(PDOException $e){
				echo "Error: ".$e->getMessage();
			}
		}
		$dbh = null;
	}else if(isset($_POST['eliminar'])){
		try{
			$stmt_b = $dbh->prepare("DELETE FROM city WHERE id = :city_id");
			$stmt_b->bindParam(':city_id', $_POST['c_id'], PDO::PARAM_INT);
			$stmt_b->execute();
			echo "Eliminado correctamente.";
		}catch(PDOException $e){
			echo "Error: ".$e->getMessage();
		}
		$dbh = null;
	}
	/*	$stmt = $dbh->PREPARE("SELECT * FROM city");
		$stmt->execute();
		$rows = $stmt->fetchAll();
		foreach ($rows as $rs){
			echo $id = $rs[0];=
		} */
	?>
	</body>
</html>
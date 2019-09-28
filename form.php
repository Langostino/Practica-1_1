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
	<ul><li><a href="index.php">Volver a Index</a></li><li><a href="list.php">Volver a Listado</a></li></ul>
	<?php
	if ( isset( $_POST['submit'])){
		$city_id = $_POST['c_id'];
		$city_name = $_POST['c_name'];
		$city_code = $_POST['c_code'];
		$city_pop = $_POST['c_pop'];
		$city_dis = $_POST['c_dis'];

	}

	/*	$stmt = $dbh->PREPARE("SELECT * FROM city");
		$stmt->execute();
		$rows = $stmt->fetchAll();
		foreach ($rows as $rs){
			echo $id = $rs[0];
		} */
	?>

	<?php
		//Inserta los parámetros recogidos por el POST.
		try{
			$stmt = $dbh->prepare("INSERT into city (id, name, CountryCode, district, population) VALUES (:id, :name, :code, :dis, :pop)");
			$rows = $stmt->execute(array(':id' => $city_id, ':name' => $city_name, ':code' => $city_code, ':pop' =>  $city_dis, ':dis' =>  $city_pop));
			if($rows == 1)
			echo "La ciudad ba sido insertada con éxito";
		}catch(PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	?>



</body>
</html>
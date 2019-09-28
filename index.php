<?php
	include "inc/conexion_bd.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Desarrollo de interfaces</title>
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
				<?php 								/*
		try{

			$datos = $dbh->query('SELECT name, population FROM city');
			foreach ($datos as $row) {
				echo $row[0].'	-	'.$row[1].'<br/>';

			$stmt = $dbh->prepare('SELECT name FROM city');

			for ($i=0; $i < 30; $i++) { 

			}

			while( $datos = $stmt->fetch() )
				echo $datos[0].'<br/>';
			
		}catch(PDOException $e){
			echo 'Error'.$e->getMessage();
		}											*/
		?>

		<h1>Práctica 1_1 - DI</h1>

		<h2><a href="list.php">Ir a listado</a></h2>

		<form method="post" name="formulario" action ="form.php">
			<h2>Insertar Ciudad</h2>
			ID:
		  <input type="text" name="c_id"><br>
		  Nombre:
		  <input type="text" name="c_name"><br>
		  Country Code: 
		  <input type="text" name="c_code"><br>
		  Population: 
		  <input type="text" name="c_pop"><br>
		  District: 
		  <input type="text" name="c_dis"><br><br>
		  <input type="submit" value="Insertar" name="submit">
		</form>




	</body>
</html>




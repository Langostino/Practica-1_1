<?php
	include "inc/conexion_bd.php";
?>

<!DOCTYPE html>
<html style="font-family:Arial">
	<head>
		<title>Desarrollo de interfaces</title>
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
		<script>
			function hola(){
				return confirm("Está seguro de que desea eliminar?");
				}
		</script>
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
			Nombre:<br>
			<input type="text" name="c_name"><br>
			Country Code: <br>
			<select name="c_code" class="hola">
				<?php
				try{
					$i=1;
					$stmt = $dbh->query("SELECT DISTINCT CountryCode FROM city");
					while($rows = $stmt->fetch())
						echo "<option value=".$rows[0].">".$rows[0]."</option>";
					}catch(PDOException $e){
					echo "Error".$e->getMessage();
					}
				?>
			</select><br>
			Population: <br>
			<input type="text" name="c_pop"><br>
			District: <br>
			<input type="text" name="c_dis"><br><br>
			<button id="btn1" name="insertar" type="submit" value="HTML">Insertar</button>
		</form>

		<form method="post" name="formulario2" action="form.php"> 
			ID: <input type="text" name="c_id" size="3"> <br>
			<button id="btn2" onclick="hola()" name="eliminar" type="submit" value="HTML">Eliminar</button>
		</form>
	</body>
</html>
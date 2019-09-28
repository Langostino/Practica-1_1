<?php
	include "inc/conexion_bd.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Listado</title>
		<link rel="stylesheet" href="css/list.css">
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

		<h1>Listado</h1>

		<h2><a href="index.php">Ir a Index</a></h2>
		<h2><a href="form.php">Ir a Form</a></h2>




<table class="datagrid">
<thead>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>COUNTRY CODE</th>
		<th>POPULATION</th>
		<th>DISTRICT</th>
	</tr>
</thead>
<tbody>
	<?php
			$datos = $dbh->query('SELECT id, name, countrycode, population, district FROM city');
			//$stmt->execute();
			//$datos = $stmt->fetch();
			$total = 0;
			foreach($datos as $rows) : ?>
		  <tr>
		    <td>
				<?php echo $rows[0];?>
		    </td>
		    <td>
		    	<?php echo $rows[1];?>
		    </td>
		    <td>
		    	<?php echo $rows[2];?>
		    </td>
		    <td>
		    	<?php echo $rows[3];?>
		    </td>
		    <td>
		    	<?php echo $rows[4];?>
		    </td>
		  </tr>

		  <?php 
			endforeach;
			?>
</tr>
</tbody>
</table>


	</body>
</html>





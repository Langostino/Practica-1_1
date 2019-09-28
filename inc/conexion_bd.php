	<?php

	$dsn = 'mysql:host=127.0.0.1;dbname=world;charset=UTF8';
	$user = 'root';
	$password = '';

	try{
		$dbh = new PDO($dsn, $user, $password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e){
		echo 'Error de conexión'.$e->getMessage();
	}
	?>
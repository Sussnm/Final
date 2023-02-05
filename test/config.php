<?php 
	// DB credentials.
	define('DB_HOST','localhost');
	define('DB_USER','sa');
	define('DB_PASS','123');
	define('DB_NAME','inventario');


	// Establish database connection.
	try
	{
	$dbh = new PDO("sqlsrv:Server=localhost;Database=inventario", "sa", "123");

	
	}
	catch (PDOException $e)
	{
	exit("Error: " . $e->getMessage());
	}
?>
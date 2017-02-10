<?php
	
	class DataBase{
		public $name;
	}

	class User{
		public $id;
		public $name;
	}


	$server = "mysql";
	$username = "root";
	$password= "secret";
	$database = "project";

	try{
		$pdo = new PDO("mysql:host={$server};dbname={$database};charset=utf8", $username, $password);
		echo "Connected to database<br>";

		$stmt = $pdo->query('select schema_name from information_schema.schemata');

		while($row = $stmt->fetch()) {
			echo $row[0];
			echo '<br>';
		}


	} catch(PDOException $e) {
		echo $e->getMessage();
	} catch(Throwable $e) {
		echo $e->getMessage();
	}

?>
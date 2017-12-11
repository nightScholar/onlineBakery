<?php 
	define('DB_SERVER', '127.0.0.1');
	define('DB_USERNAME', 'xxx');
	define('DB_PASSWORD', 'xxx');
	define('DB_DATABASE', 'bakery');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	//Check connection
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL database: ".mysqli_connect_error();
	}
?>

<?php
include('config.php');

echo 'Hello World<hr>';

		$mysqli = new mysqli($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['pw'], $GLOBALS['dbname'], 3306);

		if(!$mysqli->connect_error)
		{
			echo 'DB Connect Success';
			mysqli_close($mysqli);
			
		}
		else
		{
			echo 'DB Connect fail';
		}

?>
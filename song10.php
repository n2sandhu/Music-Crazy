<?php
	include 'connection.php';
	mysql_query('UPDATE songs SET hits=hits+1 WHERE id=10 ');
	header('Location: http://www.milkychanceofficial.com/');
?>
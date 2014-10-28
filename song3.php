<?php
	include 'connection.php';
	mysql_query('UPDATE songs SET hits=hits+1 WHERE id=3 ');
	header('Location: http://www.milkychanceofficial.com/');
?>
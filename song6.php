<?php
	include 'connection.php';
	mysql_query('UPDATE songs SET hits=hits+1 WHERE id=6 ');
	header('Location: http://www.mileycyrus.com/');
?>
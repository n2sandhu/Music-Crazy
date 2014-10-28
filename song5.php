<?php
	include 'connection.php';
	mysql_query('UPDATE songs SET hits=hits+1 WHERE id=5 ');
	header('Location: http://www.jordinsparks.com/us/home');
?>
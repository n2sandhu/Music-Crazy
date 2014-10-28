<?php
	include 'connection.php';
	mysql_query('UPDATE songs SET hits=hits+1 WHERE id=9 ');
	header('Location: http://www.akon.com');
?>
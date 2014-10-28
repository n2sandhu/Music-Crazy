<?php
	include 'connection.php';
	mysql_query('UPDATE songs SET hits=hits+1 WHERE id=7 ');
	header('Location: http://katytizmusic.com/');
?>
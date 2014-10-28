<?php
	include 'connection.php';
	mysql_query('UPDATE songs SET hits=hits+1 WHERE id=4 ');
	header('Location: http://en.wikipedia.org/wiki/Naughty_Boy');
?>
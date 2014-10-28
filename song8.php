<?php
	include 'connection.php';
	mysql_query('UPDATE songs SET hits=hits+1 WHERE id=8 ');
	header('Location: http://www.guysebastian.com/au/');
?>
<?php
	include 'connection.php';
	mysql_query('UPDATE songs SET hits=hits+1 WHERE id=1 ');
	echo "<script>window.location = 'http://www.360music.com.au/'</script>";
?>
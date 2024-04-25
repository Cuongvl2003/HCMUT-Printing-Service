<?php
	$conn = pg_connect('host=localhost port=5432 dbname=TempDB user=postgres password=xxxxxxx');
	if ($db_handle) {
		echo 'Connection attempt succeeded. ';
	  } else {
		echo 'Connection attempt failed. ';
	  }
?>

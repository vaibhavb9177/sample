<?php
	include ('conn.php');

	$delete = mysql_query("delete from crud where id=2");

	if($delete)
	{
		echo "successful";
	}
	else
	{
		echo "unsuccessful";
	}

  ?>
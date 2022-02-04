<?php
	$dbhost='localhost';
	$dbuser='root';
	//$dbpass='password';
	$con=mysql_connect($dbhost, $dbuser);

	if(!$con)
	{

		die('not connected'.mysql_error());
		//echo "hiii...";
	}	
	else
	{
		echo "Connected....";
	}
	mysql_select_db('employee');
?>
 
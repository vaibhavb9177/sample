<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form action="update.php" method="post">
		id:<input type="text" name="id"><br>
		name:<input type="text" name="name"><br>
		mobile:<input type="text" name="mb"><br>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>
<?php

	include ('conn.php');

	if(isset($_POST['submit'])) 
	{
		$i=$_GET['id'];	
	  $n = $_POST['name'];
	  $m = $_POST['mb'];
 
	  $result= "UPDATE crud SET name= '$n', mobile= '$m' WHERE id=1";
	  $query= mysql_query($result);
	  if($query)
	  {
	  	echo "record inserted";

	  }
	  else
	  {
	  	echo "not inserted";
	  }
	}
	
  ?>

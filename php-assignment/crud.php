<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="crud.php" method="post">
		
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
	  $n = $_POST['name'];
	  $m = $_POST['mb'];
 
	  $result= "insert into crud values ('','$n', '$m')";
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
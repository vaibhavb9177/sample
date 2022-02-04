<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
	<table>
		<thead>
			<th>id</th>
			<th>name</th>
			<th>mobile</th>
			<th colspan="2">operations</th>
		</thead>
	
	<tbody>
	<?php
		include ('conn.php');
		$query=mysql_query("select * from crud");
		while($result=mysql_fetch_assoc($query))
		{
			?>
			<tr>
				<td><?php echo $result['id'] ?></td>
				<td><?php echo $result['name'] ?></td>
				<td><?php echo $result['mobile'] ?></td>

				<td><a href="update.php"><button>update</button></a></td>
				<td><a href="delete.php"><button>delete</button></a></td>
				</tr>

	<?php 

		}
	  ?>
	  </tbody>
	  </table>
</body>
</html>
<?php 
	echo strlen("welcome to ycsrd");
	echo "<br>";
	echo str_word_count("welcome to ycsrd");
	echo "<br>";
	echo strrev("welcome to ycsrd");
	echo "<br>";
	echo strpos("welcome to ycsrd","to");
	echo "<br>";
	echo str_replace("ycsrd", "university","welcome to ycsrd");
	echo "<br>";
	echo ucwords("welcome to the php");
	echo "<br>";
	echo strtoupper("welcome to university");
	echo "<br>";
	echo strtolower("WELCOME TO UNIVERSITY");
	echo "<br>";
	echo str_repeat("*", 10);
	echo "<br>";


	//removing white spaces from string
	$s="welcome to php";
	echo "$s.<br>";
	echo trim("$s","wel");
 ?>
 
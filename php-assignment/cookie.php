<?php
	setcookie("sport", "cricket", time() +24*60*60);

  ?>
  <?php 
  	if (isset($_COOKIE['sport']))
  	 {
  		echo("worlds best sport is ". $_COOKIE['sport']);
  	}
  	else
  	{
  		echo "not in cookie";
  	}

   ?>
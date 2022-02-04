<?php
	class animal
	{
		public $name;
		public $color;

		function set_name($name)
		{
			$this->name= $name;
		}
		function get_name()
		{
			return $this->name;
		}
		function set_color($color)
		{
			$this->color= $color;
		}
		function get_color()
		{
			return $this->color;
		}

	}
	$panther= new Animal();
	$panther->set_name('PANTHER');
	$panther->set_color('black');
	echo "name:".$panther->get_name();
	echo "<br>";
	echo "color:".$panther->get_color();
	
 ?>
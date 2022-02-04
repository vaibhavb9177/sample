<?php
   class flower
   {
   	public $name;
   	public $color;
   	public function
   	__construct($name,$color)
   	{
   		$this -> name =$name;
   		$this -> color=$color;
   	}
   	public function intro()
   	{
   		echo "the flower is {$this-> name} and the color is {$this->color}.";
   	}
   }
   //rose is inherited from fruit
   class rose extends flower
   {
   	public function message()
   	{
   		echo "i am rose?  ";
   	}

   }
   $rose = new rose("lotus", "pink");

   $rose->message();
   $rose->intro();

  ?>
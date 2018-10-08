<?php
class nutrition
{
	public $food_type;
	public $components = 'vitamins';
	public $drinks;
	public function warning()
	{
		echo 'do not over eat your food . </br>';
	}
}
$nutrition_a = new nutrition();
$nutrition_a->food_type =  'avocados';
$nutrition_a->drinks = 'water';
echo $nutrition_a->food_type . '</br>';
echo $nutrition_a->drinks . '</br>';
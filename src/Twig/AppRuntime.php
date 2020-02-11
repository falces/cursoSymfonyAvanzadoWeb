<?php

namespace App\Twig;

class AppRuntime
{
	public function __construct() // Inyectaríamos aquí las dependencias
	{
		
	}

	public function priceFormatFilter(
		$number,
		$decimals = 2,
		$decPoint = ',',
		$thousandsSep = '.')
	{
		$price = number_format($number, $decimals, $decPoint, $thousandsSep);
		$price = $price . '€';
		return $price;
	}
}
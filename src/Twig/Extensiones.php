<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Extensiones extends AbstractExtension
{
	public function getFilters()
	{
		return array(
			// new TwigFilter('priceFormat', array($this, 'priceFormatFilter')),
			new TwigFilter('priceFormat', array(AppRuntime::class, 'priceFormatFilter')),
		);
	}
	// public function priceFormatFilter(
	// 	$number,
	// 	$decimals = 2,
	// 	$decPoint = ',',
	// 	$thousandsSep = '.')
	// {
	// 	$price = number_format($number, $decimals, $decPoint, $thousandsSep);
	// 	$price = $price . '€';
	// 	return $price;
	// }
}

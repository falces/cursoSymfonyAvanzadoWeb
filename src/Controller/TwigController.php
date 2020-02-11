<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TwigController extends Controller
{
	public function outputEscaping()
	{
		$nombre = "Javi";
		dump($nombre);
		$script = "<script>alert('Hola')</script>";
		return $this->render('twig/output_escaping.html.twig', array(
			'nombre' => $nombre,
			'script' => $script
		));
	}

	public function showFormat(Request $request, $_slug)
	{
		$article = [
			'nombre' => $_slug
		];
		$format = $request->getRequestFormat();
		return $this->render('twig/article/article.'.$format.'.twig', array(
			'article' => $article
		));
	}

	public function price()
	{
		$price = 35.99;
		return $this->render('twig/price.html.twig', array(
			'price' => $price
		));
	}
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
	public function articleDetail($_locale, $_year, $_slug, $_format)
	{
		// Escupir error
		// throw new \Exception('Algo ha ido mal');

		// Error 404
		// throw new NotFoundHttpException('El artículo no existe');

		return $this->render('twig/article/article_detail.'.$_format.'.twig', array(
			'language' => $_locale,
			'year' => $_year,
			'article' => $_slug,
			'format' => $_format
		));
	}
}
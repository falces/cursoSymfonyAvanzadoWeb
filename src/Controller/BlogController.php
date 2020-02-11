<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
	public function articleDetail($_locale, $_year, $_slug, $_format)
	{
		return $this->render('twig/article/article_detail.'.$_format.'.twig', array(
			'language' => $_locale,
			'year' => $_year,
			'article' => $_slug,
			'format' => $_format
		));
	}
}
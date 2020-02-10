<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RoutingController extends AbstractController
{
    public function edit($_id)
    {
        return new Response(
            '<html><body><p>Usuario id: <b>'.$_id.'</b></p></html>'
        );
    }

	public function list($_page, $_title)
    {
        return new Response(
            '<html><body><h1>'.$_title.'</h1><p>Listado de la página: <b>'.$_page.'</b></p></html>'
        );
    }

	public function generarURL()
    {
		$url = $this->generateUrl('user_list', ['page' => 1], UrlGeneratorInterface::NETWORK_PATH);
		return new Response(
            '<html><body><h1>URL</h1><p>URL de la página: <b>'.$url.'</b></p></html>'
        );
    }
}

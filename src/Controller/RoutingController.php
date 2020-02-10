<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class RoutingController
{
    public function edit($_id)
    {
        return new Response(
            '<html><body><p>Usuario id: <b>'.$_id.'</b></p></html>'
        );
    }
}

<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
class IndexController
{
    public function display(): Response
    {
        $msg = "What the hellllllllll";
        $heihei = 91212;
        return new Response('<html><body>' .$msg. '</body></html>'); 
    }
}

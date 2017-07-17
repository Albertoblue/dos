<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
<h2

class SaludoController extends Controller
{
    public function indexAction()

    {
     
        
        return $this->render('AcmeHelloBundle:Default:index.html.twig','user'=>556);
    }
}

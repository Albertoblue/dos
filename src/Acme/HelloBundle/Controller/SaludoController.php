<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SaludoController extends Controller
{
    public function indexAction()

    {
     
        
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('user'=>556));
    }
}

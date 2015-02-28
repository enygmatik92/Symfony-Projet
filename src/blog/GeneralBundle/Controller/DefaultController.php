<?php

namespace blog\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('blogGeneralBundle:Default:index.html.twig');
    }
}

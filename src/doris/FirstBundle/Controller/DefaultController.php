<?php

namespace doris\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dorisFirstBundle:Default:index.html.twig');
    }
}

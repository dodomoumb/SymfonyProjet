<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class adminController extends Controller
{


    /**
     * @Route("/admin/themes")
     */
    public function themeAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/themes.html.twig');
    }
}

<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends Controller
{
    /**
     * @Route("/post/{id}")
     */
    public function detailsAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/details.html.twig');
    }
}

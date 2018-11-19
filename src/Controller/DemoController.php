<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends Controller
{
    /**
     * @Route("/demo", name="demo")
     */
    public function index()
    {
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }

    /**
     * @Route("/demo/bootstrap", name="demo_bootstrap")
     */
    public function bootstrap()
    {
        return $this->render('demo/bootstrap.html.twig');
    }
}

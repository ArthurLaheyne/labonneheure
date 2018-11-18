<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends Controller
{
    /**
     * @Route("/", name="demo")
     */
    public function index()
    {
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }
}

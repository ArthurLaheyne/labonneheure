<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/new-page", name="new_page")
     */
    public function newPage()
    {
        return $this->render('pages/new-page.html.twig');
    }
}

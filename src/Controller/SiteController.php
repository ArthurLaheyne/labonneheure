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
        return $this->render('pages/index.html.twig');
    }

    /**
     * @Route("/musique", name="musique")
     */
    public function musique()
    {
        return $this->render('pages/musique.html.twig');
    }

    /**
     * @Route("/video", name="video")
     */
    public function video()
    {
        return $this->render('pages/video.html.twig');
    }

    /**
     * @Route("/bio", name="bio")
     */
    public function bio()
    {
        return $this->render('pages/bio.html.twig');
    }

    /**
     * @Route("/gallerie", name="gallerie")
     */
    public function gallerie()
    {
        return $this->render('pages/gallerie.html.twig');
    }
    
}

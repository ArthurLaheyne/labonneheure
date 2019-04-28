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

    /**
     * @Route("/demo/other-page", name="demo_other_page")
     */
    public function otherPage()
    {
        return $this->render('demo/other-page.html.twig');
    }

    /**
     * @Route("/demo/full-video-background", name="demo_full_video_background")
     */
    public function fullVideoBackground()
    {
        return $this->render('demo/full-video-background.html.twig');
    }

    /**
     * @Route("/demo/images-gallery", name="demo_images_gallery")
     */
    public function imagesGallery()
    {
        return $this->render('demo/images-gallery.html.twig');
    }

    /**
     * @Route("/demo/paralax", name="demo_paralax")
     */
    public function paralax()
    {
        return $this->render('demo/paralax.html.twig');
    }
}

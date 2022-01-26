<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/news", name="news")
     */
    public function news(): Response 
    {
        return $this->render('home/news.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CuriosityController extends AbstractController
{
    /**
     * @Route("/curiosity", name="curiosity")
     */
    public function index(): Response
    {
        return $this->render('curiosity/index.html.twig', [
            'controller_name' => 'CuriosityController',
        ]);
    }
    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
{
    return $this->render('curiosity/accueil.html.twig');
}
}

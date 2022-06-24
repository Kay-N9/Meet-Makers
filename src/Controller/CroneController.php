<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CroneController extends AbstractController
{
    /**
     * @Route("/crone", name="app_crone")
     */
    public function index(): Response
    {
        return $this->render('crone/index.html.twig', [
            'controller_name' => 'CroneController',
        ]);
    }
}

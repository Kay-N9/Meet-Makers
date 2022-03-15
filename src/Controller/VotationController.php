<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VotationController extends AbstractController
{
    /**
     * @Route("/votation", name="app_votation")
     */
    public function index(): Response
    {
        return $this->render('votation/index.html.twig', [
            'controller_name' => 'VotationController',
        ]);
    }
}

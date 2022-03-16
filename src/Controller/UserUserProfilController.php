<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserUserProfilController extends AbstractController
{
    /**
     * @Route("/user/user/profil", name="app_user_user_profil")
     */
    public function index(): Response
    {
        return $this->render('user_user_profil/index.html.twig', [
            'controller_name' => 'UserUserProfilController',
        ]);
    }
}

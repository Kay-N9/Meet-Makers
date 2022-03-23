<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{

    private $doctrine ;
    
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function show($idUser)
    {
        $userInfo = $this->doctrine->getRepository(User::class) ;

        $user = $userInfo->find($idUser) ;
        return $this->render('user/info.html.twig',
            [
                "user" => $user,
            ]
        );
    }
    /**
     * @Route("/user", name="app_user")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}

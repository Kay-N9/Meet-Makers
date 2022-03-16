<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Status;
use App\Repository\ProjectRepository;
use App\Repository\StatusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(ProjectRepository $repoProject, StatusRepository $status): Response 
    {
        $projectAll = $repoProject->findAll();
        $aleatNumber = [1,2,3];


        #----------------   Projets aleatoire
        $projectbyStatusVote = $repoProject->findBy(array ('status' => '1'));
        #----------------   Projets ouvert au vote 
        $projectbyStatusVote = $repoProject->findBy(array ('status' => '1'));
        #----------------   Projets ouvert au candidature 
        $projectbyStatusCandid = $repoProject->findBy(array ('status' => '2'));
        #----------------   Projets clos
        $projectbyStatusFinished = $repoProject->findBy(array ('status' => '3'));


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'vote'=> $projectbyStatusVote,
            'projectbyStatusVote'=>$projectbyStatusVote,
            'repoProject'=>$repoProject
        ]);
    }
}

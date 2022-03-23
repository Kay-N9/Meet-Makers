<?php

namespace App\Controller;

use App\Entity\Project;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Test\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{

    public function create(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_MAKER');

        $project = new Project() ;


        $project->setCreateBy($this->getUser()) ;

        $form->handleRequest($request) ;

        if($form->isSubmitted() && $form->isValid())
        {
            $ârticle->setDateLancement(date_create("saturday")) ;
        }
    }
    /**
     * @Route("/project", name="app_project")
     */
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
}

<?php


namespace App\Controller;

use App\Entity\Status;
use App\Entity\Project;
use Doctrine\ORM\Mapping\Id;
use App\Form\ProjectFormType;
use App\Form\ProjectFormType2;
use Symfony\Component\Filesystem\Path;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Test\FormBuilderInterface;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProjectController extends AbstractController
{

    private $doctrine ;


    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

     /**
     * @Route("/project", name="app_project")
     */
    public function index(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_MUSE');
       
        

        $project = new Project() ;
        
     
        $project->setCreateBy($this->getUser()) ;

    
        $form = $this->createForm(ProjectFormType::class, $project) ;

        $form->handleRequest($request) ;
        
        $statusRepo = $this->doctrine->getRepository(Status::class) ;

        $status = $statusRepo->find(1);

        
        if($form->isSubmitted() && $form->isValid())
        {
            $project->setDateLacement(new \DateTime('next saturday')) ;
            $project->setStatus($status);
            

            // dd($project);

            $em = $this->doctrine->getManager();

            $em->persist($project);

            $em->flush();


            return $this->redirectToRoute('project_create_project_middle', [ 'idProject' => $project->getId(),]);
        }

        return $this->renderForm(
            'project/index.html.twig',
            [
                "project" => $project,
                "form" => $form,
            ]
        );
    }

    public function index2($idProject, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_MUSE');
        
        
        $projectRepo = $this->doctrine->getRepository(Project::class) ;
        $project = $projectRepo->find($idProject) ;


        // $project->setCreateBy($this->getUser()) ;

        $form = $this->createForm(ProjectFormType2::class, $project) ;

        $form->handleRequest($request) ;

        // $statusRepo = $this->doctrine->getRepository(Status::class) ;

        // $status = $statusRepo->find(1);


        if($form->isSubmitted() && $form->isValid())
        {
            // $project->setDateLacement(new \DateTime('next saturday')) ;
            // $project->setStatus($status);

            // dd($project);
        
            $filesystem = new Filesystem();

            $file = $form->get('uploadProject')->getData();

            $em = $this->doctrine->getManager();

            $em->persist($project);

            $em->flush();


            return $this->redirectToRoute('project_project_confirmation', [ 'idProject' => $project->getId(),]);
        }

        return $this->renderForm('project/index2.html.twig',
            [
                "form" => $form,
            ]
        );
    }

    public function Confirmation($idProject)
    {
        $userInfo = $this->doctrine->getRepository(Project::class) ;

        $user = $userInfo->find($idProject) ;       
        return $this->render('project/Confirmation.html.twig',
            [
                "user" => $user,
            ]
        );
    }

   
    // public function index(): Response
    // {
    //     return $this->render('project/index.html.twig', [
    //         'controller_name' => 'ProjectController',
    //     ]);
    // }
}

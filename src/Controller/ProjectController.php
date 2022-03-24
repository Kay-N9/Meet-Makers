<?php


namespace App\Controller;

use App\Entity\Status;
use App\Entity\Project;
use Doctrine\ORM\Mapping\Id;
use App\Form\ProjectFormType;
use App\Form\ProjectFormType2;
use Symfony\Component\Filesystem\Path;
use Doctrine\Persistence\ManagerRegistry;
// use Symfony\Component\Filesystem\Filesystem;
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
    public function create(Request $request)
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
            

            $em = $this->doctrine->getManager();

            $em->persist($project);

            $em->flush();


            return $this->redirectToRoute('project_create_project_middle', [ 'idProject' => $project->getId(),]);
        }

        return $this->renderForm(
            'project/create.html.twig',
            [
                "project" => $project,
                "form" => $form,
            ]
        );
    }
 
    ################################################### FORM PART 2 ###############################################
    public function create2($idProject, Request $request)
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

            $sond = $form->get('uploadProject')->getData();
            $image = $form->get('uploadPicture')->getData();

            // On génère un nouveau nom de fichier
            $fichier_son = md5(uniqid()). '.'. $sond->guessExtension();
            $fichier_img = md5(uniqid()). '.'. $image->guessExtension();

            // On copie le fichier dans le dossier uploads
            $sond->move(
                $this->getParameter('sond_directory'),
                $fichier_son 
            );
            $image->move(
                $this->getParameter('images_directory'),
                $fichier_img
            );
            // On stocke l'image dans la base de donée (son nom)
            $project->setuploadPicture($fichier_img);
            $project->setuploadProject($fichier_son);

            $em = $this->doctrine->getManager();

            $em->persist($project);

            $em->flush();


            return $this->redirectToRoute('project_project_confirmation', [ 'idProject' => $project->getId(),]);
        }

        return $this->renderForm('project/create2.html.twig',
            [
                "form" => $form,
            ]
        );
    }

    public function create3($idProject)
    {
        $projectResum = $this->doctrine->getRepository(Project::class) ;

        $projet = $projectResum->find($idProject) ;
        return $this->render('project/create.html.twig',
            [
                "projet" => $projet,
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

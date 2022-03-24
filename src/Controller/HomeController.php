<<<<<<< HEAD
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
=======
<?php

namespace App\Controller;

use App\Entity\Project;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(ProjectRepository $ProjectRepo): Response
    {
        $projects = $ProjectRepo -> findAll();
        $projectsByStat1 = $ProjectRepo -> findBystatus(1);
        $projectsByStat2 = $ProjectRepo -> findBystatus(2);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'projectAll' => $projects,
            'projectstatus1' => $projectsByStat1,
            'projectstatus2' => $projectsByStat2,
       
        ]);
    }


}

>>>>>>> ed9c2708c81582455f6d770aa7b4d0f3f39a5e62

<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{

    public function getData()
    {
        $cities= ['paris', 'abidjan', 'monaco', 'istanbul']; 
        return new JsonResponse($cities);
    }
}

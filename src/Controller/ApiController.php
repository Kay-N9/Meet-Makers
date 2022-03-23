<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
public function getData()
{
    $cities = [];
    return new JsonResponse($cities);
}

}
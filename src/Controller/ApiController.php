<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\MyService;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }
    public function updateimage(Request $request){
        $data = json_decode($request->getContent(), true);
        $response = array_merge($data);
        
        return new JsonResponse($response);
    }
}

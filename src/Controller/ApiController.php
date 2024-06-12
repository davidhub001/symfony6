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
        $data = (object)json_decode($request->getContent(), true);
        $service = new MyService();
        $source = $this->getParameter('images_directory').'/'.$data->titre;
        $destination = $this->getParameter('images_directory').'/'.$data->titre;
        $quality = $data->quality;
        $convertjpg = true;
        $service->compressImage($source, $destination, $quality, $convertjpg);
        return new JsonResponse(['send'=>true]);
    }
}

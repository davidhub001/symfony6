<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\OptionService;

class FrontController extends AbstractController
{
    private $optionService;

    public function __construct(OptionService $optionService)
    {
        $this->optionService = $optionService;
    }
    //#[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig',[
            'titre'=>'Acceuil'
        ]);
    }
    public function contact(): Response
    {
        return $this->render('front/contact.html.twig',[
            'titre'=>'Contact'
        ]);
    }
    public function test(): Response
    {
        // Mettre une option en cache
        $this->optionService->setOption('site_name', 'Mon Site Web');

        // Récupérer une option du cache
        $siteName = $this->optionService->getOption('site_name');

        return new Response('Nom du site : ' . $siteName);
    }

}

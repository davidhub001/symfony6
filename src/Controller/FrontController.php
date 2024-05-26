<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    //#[Route('/front', name: 'app_front')]
    private function card(){
        return [
            array(
                "titre" => "test",
                "description" => "Lorem",
                "url" => "#",
                "image" => "merou.jpg"
            ),
            array(
                "titre" => "test",
                "description" => "Lorem",
                "url" => "#",
                "image" => "merou.jpg"
            ),
            array(
                "titre" => "test",
                "description" => "Lorem",
                "url" => "#",
                "image" => "merou.jpg"
            )
            ];
    }
    public function index(): Response
    {
        return $this->render('front/index.html.twig',[
            'titre' => 'Acceuil',
            'data_card' => $this->card()
        ]);
    }
    public function contact(): Response
    {
        return $this->render('front/contact.html.twig',[
            'titre'=>'Contact'
        ]);
    }
}

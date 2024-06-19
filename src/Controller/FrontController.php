<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    //#[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig',[
            'titre' => 'Acceuil',
        ]);
    }
    public function contact(): Response
    {
        return $this->render('front/contact.html.twig',[
            'titre'=>'Contact'
        ]);
    }
    public function content1():Response{
        return $this->render('front/contenu_brut/tout-sur-la-peche.html.twig');
    }
    public function content2():Response{
        return $this->render('front/contenu_brut/infos-nosy-be.html.twig');
    }
    public function content3():Response{
        return $this->render('front/contenu_brut/jour-autour-de-nosy-be.html.twig');
    }
    public function content4():Response{
        return $this->render('front/contenu_brut/jour-peche-mitsio.html.twig');
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\LoginFormType;
use App\Form\BankimgFormType;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Finder\Finder;

class AdminController extends AbstractController
{
    public function login(Request $request, SessionInterface $session): Response
    {
        if($session->get('user')){
            return $this->redirectToRoute('dashboard');
        }
        $form = $this->createForm(LoginFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            if($data['username'] == $this->getParameter('admin') && md5($data['password']) == md5($this->getParameter('password'))){
                $session->set('user', [
                    'username' => $data['username'],
                    'password' => $data['password']
                ]);
                return $this->redirectToRoute('dashboard');
            }
            return $this->redirectToRoute('admin');
        }
        return $this->render('admin/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    public function logout(SessionInterface $session): Response
    {
        $session->remove('user');
        return  $this->redirectToRoute('admin');
    }
    public function dashboard(Request $request, SessionInterface $session, SluggerInterface $slugger): Response
    {
        if($session->get('user')){
            $page = $request->query->get('page','default');
            switch ($page) {
                case 'bank_images':
                        $form = $this->createForm(BankimgFormType::class);
                        $form->handleRequest($request);
                        if ($form->isSubmitted() && $form->isValid()) {
                            $imageFile = $form->get('image')->getData();
                            if($imageFile){
                                    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                                    $safeFilename = $slugger->slug($originalFilename);
                                    $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                                    $imageFile->move(
                                        $this->getParameter('images_directory'),
                                        $newFilename
                                    );
                            }
                        }
                        // Créez une instance de Finder
                        $finder = new Finder();
                        // Utilisez le Finder pour parcourir le répertoire
                        $files = $finder->files()->in($this->getParameter('images_directory'));
                        // Parcourez les fichiers et affichez-les
                        $type_images = explode('|', $this->getParameter('type_images'));
                        $images = [];
                        foreach ($files as $file) {
                            array_push($images, ['titre' => $file->getFilename(),'path'=>'assets/images/']);
                        }
                        return $this->render('admin/dashboard.html.twig',['page' => $page, 
                                                                        'form' =>  $form->createView(), 
                                                                        'images' => $images,
                                                                        'type_images' => $type_images]);
                    break;
                
                default:
                    # code...
                    return $this->render('admin/dashboard.html.twig',['page'=>'null']);
                    break;
            }
            

        }else{
            return $this->redirectToRoute('admin');
        }
        return $this->render('admin/dashboard.html.twig',['page'=>'null']);
    }
}

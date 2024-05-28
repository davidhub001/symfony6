<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\LoginFormType;

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
            if($data['username'] == 'admin' && md5($data['password']) == md5('david123+')){
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
    public function dashboard(Request $request, SessionInterface $session): Response
    {
        if($session->get('user')){
            $page = $request->query->get('page','default');
            return $this->render('admin/dashboard.html.twig',['page' => $page]);
        }else{
            return $this->redirectToRoute('admin');
        }
        return $this->render('admin/dashboard.html.twig');
    }
}

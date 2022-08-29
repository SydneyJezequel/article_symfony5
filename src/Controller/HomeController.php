<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: '/index')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/inscription', name: 'inscription')]
    public function page1(): Response
    {
        return $this->render('home/page_inscription.html.twig', [
            'controller_name' => 'page1',
        ]);
    }


    #[Route('/connexion', name: 'connexion')]
    public function page2(): Response
    {
        return $this->render('home/page_connexion.html.twig', [
            'controller_name' => 'page2',
        ]);
    }


    #[Route('/page3', name: 'page3')]
    public function page3(): Response
    {
        return $this->render('home/page3.html.twig', [
            'controller_name' => 'page3',
        ]);
    }

/*
     //@Route("/page2", name="main_test")
     public function page2(){
        echo "page 2";
        die();
    }

    // @Route("/page3", name="main_test")
    public function page3(){
        echo "page 3";
        die();
    }
*/



}

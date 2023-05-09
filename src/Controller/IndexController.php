<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/IndexController.php',
        ]);
    }

    #[Route('/home', name: 'home_page')]
    public function home()
    {
        #return $this->render('articles/index.html.twig');
        $articles = ['Artcile1', 'Article 2','Article 3'];
        return $this->render('articles/index.html.twig',['articles' => $articles]);
    }
        
}
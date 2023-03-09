<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index (): Response
    {
        $articles = ['Artcile1','Article2' ,'Article3'];

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}


<?php

namespace App\Controller;

use App\Repository\Quizz\QuizzRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\Quizz\QuizzCategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(QuizzCategoriesRepository $quizzCategoriesRepository, QuizzRepository $quizzRepository): Response
    {
        $topQuizzes = $quizzRepository->findTopXMostPlayedQuizzes(6);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'categories' => $quizzCategoriesRepository->findAll(),
            'topQuizz' => $topQuizzes,
        ]);
    }
}

<?php

namespace App\Controller\Quizz\Front;

use App\Entity\Quizz\Quizz;
use App\Entity\Quizz\QuizzCategories;
use App\Repository\Quizz\QuizzRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\Quizz\QuizzChoicesRepository;
use App\Repository\Quizz\QuizzQuestionsRepository;
use App\Repository\Quizz\QuizzCategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{




    #[Route('/quizz/home', name: 'app_quizz_front_categories')]
    public function categories(QuizzCategoriesRepository $quizzcategorierepository): Response
    {
        return $this->render('quizz/front/catQuizz.html.twig', [
            'controller_name' => 'HomeController',
            'categories' => $quizzcategorierepository->findAll(),
        ]);
    }


    #[Route('/quizz/cat/{id}', name: 'app_quizz_front_listequizz')]
    public function listequizz(QuizzCategories $quizzcategorie): Response
    {
        return $this->render('quizz/front/listQuizz.html.twig', [
            'controller_name' => 'HomeController',
            'categories' => $quizzcategorie,
        ]);
    }


    #[Route('/quizz/quizz/{id}', name: 'app_quizz_front_quizz')]
    public function quizz(Quizz $quizz , Request $request): Response
    {

        if ($request->isMethod('POST')){
            // $answers = $request->request->get('answers');
            $post = $request->request->all();
            $answers = $post['answers'];
            dd($answers);
        }

        return $this->render('quizz/front/quizz.html.twig', [
            'controller_name' => 'HomeController',
            'quizz' => $quizz,
        ]);
    }

    #[Route('/quizz/front/listequizz', name: 'app_quizz_front_listequizz_all')]
    public function listequizzall(QuizzRepository $quizzrepository , QuizzCategoriesRepository $quizzcategorierepository): Response
    {
        return $this->render('quizz/front/listQuizzAll.html.twig', [
            'controller_name' => 'HomeController',
            'quizz' => $quizzrepository->findAll(),
            'categories' => $quizzcategorierepository->findAll(),
        ]);
    }



    #[Route('/quizz/teste', name: 'app_quizz_front_teste')]
    public function teste(QuizzCategoriesRepository $quizzcategorierepository): Response
    {
        return $this->render('quizz/front/teste.html.twig', [
            'controller_name' => 'HomeController',
            // 'quizz' => $quizz,
            'categories' => $quizzcategorierepository->find(2),

        ]);
    }



}

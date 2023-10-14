<?php

namespace App\Controller\Quizz\Front;

use App\Entity\Quizz\Quizz;
use App\Service\ScoreService;
use App\Entity\Quizz\QuizzUser;
use App\Entity\Quizz\QuizzCategories;
use App\Entity\Quizz\QuizzUserAnswers;
use Doctrine\ORM\EntityManagerInterface;
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
    public function quizz(ScoreService $scoreService, Quizz $quizz, Request $request, EntityManagerInterface $entityManager, QuizzQuestionsRepository $questionsRepository, QuizzChoicesRepository $choicesRepository): Response
    {
        // Par defaut on ne veux pas de la correction.
        $score = null;
        $quizzUser = null;
        if ($request->isMethod('POST')) {
            // $answers = $request->request->get('answers');
            $post = $request->request->all();
            $answers = $post['answers'];
            $score = $scoreService->calculateScore($answers);
            // La on veux maintenant les corrections.
           
            // On enregistre la partie
            $quizzUser = new QuizzUser();
            $quizzUser->setQuizz($quizz);
            $quizzUser->setUser($this->getUser());
            $entityManager->persist($quizzUser);

            // En enregitre les réponses données par l'user
            foreach ($answers as $key =>  $answer) {
                foreach ($answer as $keyChoice => $choiceUser) {
                    $answersUser = new QuizzUserAnswers();
                    $objQuestion = $questionsRepository->find($key);
                    $answersUser->setQuestion($objQuestion);
                    $objChoice = $choicesRepository->find($keyChoice);
                    $answersUser->setChoice($objChoice);
                    $answersUser->setUserQuizz($quizzUser);
                    $entityManager->persist($answersUser);
                  
                }
            }
            $entityManager->flush();
            
        }

        return $this->render('quizz/front/quizz.html.twig', [
            'quizzU' => $quizzUser,
            'total' => count($quizz->getQuizzQuestions()),
            'score' => $score,
            'controller_name' => 'HomeController',
            'quizz' => $quizz,
        ]);
    }

    #[Route('/quizz/front/listequizz', name: 'app_quizz_front_listequizz_all')]
    public function listequizzall(QuizzRepository $quizzrepository, QuizzCategoriesRepository $quizzcategorierepository): Response
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

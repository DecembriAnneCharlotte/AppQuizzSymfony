<?php

namespace App\Twig\Quizz;

use App\Repository\Materiel\MaterielRepository;
use App\Repository\Quizz\QuizzUserAnswersRepository;
use App\Repository\Quizz\QuizzUserRepository;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class QuizzExtension extends AbstractExtension
{
    private Environment $twig;
    private $quizzUserAnswersRepository;
    private $quizzUserRepository;
  
    public function __construct(Environment $twig, QuizzUserAnswersRepository $quizzUserAnswersRepository, QuizzUserRepository $quizzUserRepository)
    {
        $this->twig = $twig;
        $this->quizzUserAnswersRepository = $quizzUserAnswersRepository;
        $this->quizzUserRepository = $quizzUserRepository;
      
    }
    public function getFunctions(): array
    {
        return [
            new TwigFunction('solution', [ $this, 'solution' ], [ 'is_safe' => [ 'html' ] ]),
            new TwigFunction('maselection', [ $this, 'maselection' ], [ 'is_safe' => [ 'html' ] ]),
        ];
    }
    


    /**
     * Returns the HTML attribute "checked" if the user has selected the given answer for the given question in the given quiz.
     *
     * @param int $partie The ID of the quiz.
     * @param int $question The ID of the question.
     * @param int $reponse The ID of the answer.
     * @return string|null The string "checked" if the user has selected the given answer for the given question in the given quiz, null otherwise.
     */
    public function maselection($partie, $question, $reponse){
        $reponseUtilisateur =  $this->quizzUserAnswersRepository->findBy(['userQuizz'=>$partie, 'question' => $question, 'choice' => $reponse]);
        if($reponseUtilisateur){
            return  'checked="checked"';
        }
    }

    /**
     * Returns the CSS class for displaying the solution of a quiz question.
     *
     * @param Choice $choice The choice object to check if it is correct.
     * @param bool $score The score of the quiz question.
     * @return string The CSS class to display the solution.
     */
    public function solution($choice, $score){

        if($score){
            if($choice->isIsCorrect()){
                $class ="bg-success";
            }else{
                $class ="text-danger";
            }
        }else{
            $class = "";
        }
        return  $class;
    }
}
<?php
// src/Service/ScoreService.php

namespace App\Service;

use App\Repository\Quizz\QuizzChoicesRepository;
use App\Repository\Quizz\QuizzUserRepository;
use App\Repository\Quizz\QuizzUserAnswersRepository;

class ScoreService
{

    private $quizzUserAnswersRepository;
    private $quizzUserRepository;
    private $quizzChoicesRepository;
  
    public function __construct(QuizzUserAnswersRepository $quizzUserAnswersRepository, QuizzUserRepository $quizzUserRepository, QuizzChoicesRepository $quizzChoicesRepository)
    {
 
        $this->quizzUserAnswersRepository = $quizzUserAnswersRepository;
        $this->quizzUserRepository = $quizzUserRepository;
        $this->quizzChoicesRepository = $quizzChoicesRepository;
      
    }
    public function calculateScore($answers)
    {
        $scores = 0;
        foreach($answers as $question => $reponses){
            foreach($reponses as $reponseId => $value){
                $result = $this->quizzChoicesRepository->findBy(['id'=> $reponseId, 'isCorrect' => true]);
                if($result){
                    $scores ++;
                }
            }
            
        }
        return $scores;
    }
}

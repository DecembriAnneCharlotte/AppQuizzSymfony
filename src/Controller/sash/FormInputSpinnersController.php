<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormInputSpinnersController extends AbstractController
{
    #[Route('sash/form-input-spinners', name: 'app_sash_form_input_spinners')]
    public function index(): Response
    {
        return $this->render('sash/form_input_spinners/index.html.twig', [
            'controller_name' => 'FormInputSpinnersController',
        ]);
    }
}

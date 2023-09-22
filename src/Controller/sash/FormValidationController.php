<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormValidationController extends AbstractController
{
    #[Route('sash/formile-validation', name: 'app_sash_form_validation')]
    public function index(): Response
    {
        return $this->render('sash/form_validation/index.html.twig', [
            'controller_name' => 'FormValidationController',
        ]);
    }
}

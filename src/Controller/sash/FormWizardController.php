<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormWizardController extends AbstractController
{
    #[Route('sash/formile-wizard', name: 'app_sash_form_wizard')]
    public function index(): Response
    {
        return $this->render('sash/form_wizard/index.html.twig', [
            'controller_name' => 'FormWizardController',
        ]);
    }
}

<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormElementsController extends AbstractController
{
    #[Route('sash/form-elements', name: 'app_sash_form_elements')]
    public function index(): Response
    {
        return $this->render('sash/form_elements/index.html.twig', [
            'controller_name' => 'FormElementsController',
        ]);
    }
}

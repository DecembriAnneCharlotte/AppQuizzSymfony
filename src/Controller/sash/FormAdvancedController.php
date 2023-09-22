<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormAdvancedController extends AbstractController
{
    #[Route('sash/form-advanced', name: 'app_sash_form_advanced')]
    public function index(): Response
    {
        return $this->render('sash/form_advanced/index.html.twig', [
            'controller_name' => 'FormAdvancedController',
        ]);
    }
}

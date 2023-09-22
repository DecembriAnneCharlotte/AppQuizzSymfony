<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormLayoutsController extends AbstractController
{
    #[Route('sash/form-layouts', name: 'app_sash_form_layouts')]
    public function index(): Response
    {
        return $this->render('sash/form_layouts/index.html.twig', [
            'controller_name' => 'FormLayoutsController',
        ]);
    }
}

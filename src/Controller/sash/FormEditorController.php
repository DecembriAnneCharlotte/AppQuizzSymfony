<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormEditorController extends AbstractController
{
    #[Route('sash/form-editor', name: 'app_sash_form_editor')]
    public function index(): Response
    {
        return $this->render('sash/form_editor/index.html.twig', [
            'controller_name' => 'FormEditorController',
        ]);
    }
}

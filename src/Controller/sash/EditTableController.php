<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditTableController extends AbstractController
{
    #[Route('sash/edit-table', name: 'app_sash_edit_table')]
    public function index(): Response
    {
        return $this->render('sash/edit_table/index.html.twig', [
            'controller_name' => 'EditTableController',
        ]);
    }
}

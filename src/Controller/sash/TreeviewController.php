<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TreeviewController extends AbstractController
{
    #[Route('sash/treeview', name: 'app_sash_treeview')]
    public function index(): Response
    {
        return $this->render('sash/treeview/index.html.twig', [
            'controller_name' => 'TreeviewController',
        ]);
    }
}

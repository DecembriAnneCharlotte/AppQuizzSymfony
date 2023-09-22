<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TablesController extends AbstractController
{
    #[Route('sash/tables', name: 'app_sash_tables')]
    public function index(): Response
    {
        return $this->render('sash/tables/index.html.twig', [
            'controller_name' => 'TablesController',
        ]);
    }
}

<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExtensionTablesController extends AbstractController
{
    #[Route('sash/extensio-tables', name: 'app_sash_extension_tables')]
    public function index(): Response
    {
        return $this->render('sash/extension_tables/index.html.twig', [
            'controller_name' => 'ExtensionTablesController',
        ]);
    }
}

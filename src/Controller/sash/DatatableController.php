<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DatatableController extends AbstractController
{
    #[Route('sash/datatable', name: 'app_sash_datatable')]
    public function index(): Response
    {
        return $this->render('sash/datatable/index.html.twig', [
            'controller_name' => 'DatatableController',
        ]);
    }
}

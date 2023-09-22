<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BreadcrumbsController extends AbstractController
{
    #[Route('sash/breadcrumbs', name: 'app_sash_breadcrumbs')]
    public function index(): Response
    {
        return $this->render('sash/breadcrumbs/index.html.twig', [
            'controller_name' => 'BreadcrumbsController',
        ]);
    }
}

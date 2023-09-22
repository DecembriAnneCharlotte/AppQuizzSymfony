<?php

namespace App\Controller\Backoffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('backoffice/', name: 'app_backoffice_home')]
    public function index(): Response
    {
        return $this->render('backoffice/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/', name: 'app_home')]
    public function redirectLogin(): Response
    {
        return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
    }
}

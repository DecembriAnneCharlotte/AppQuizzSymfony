<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SweetalertController extends AbstractController
{
    #[Route('sash/sweetalert', name: 'app_sash_sweetalert')]
    public function index(): Response
    {
        return $this->render('sash/sweetalert/index.html.twig', [
            'controller_name' => 'SweetalertController',
        ]);
    }
}

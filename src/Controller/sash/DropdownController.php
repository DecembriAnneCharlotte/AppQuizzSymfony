<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DropdownController extends AbstractController
{
    #[Route('sash/dropdown', name: 'app_sash_dropdown')]
    public function index(): Response
    {
        return $this->render('sash/dropdown/index.html.twig', [
            'controller_name' => 'DropdownController',
        ]);
    }
}

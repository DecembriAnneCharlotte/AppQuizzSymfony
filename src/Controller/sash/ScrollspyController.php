<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScrollspyController extends AbstractController
{
    #[Route('sash/scrollspy', name: 'app_sash_scrollspy')]
    public function index(): Response
    {
        return $this->render('sash/scrollspy/index.html.twig', [
            'controller_name' => 'ScrollspyController',
        ]);
    }
}

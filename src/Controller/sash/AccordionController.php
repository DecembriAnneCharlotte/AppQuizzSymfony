<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccordionController extends AbstractController
{
    #[Route('sash/accordion', name: 'app_sash_accordion')]
    public function index(): Response
    {
        return $this->render('sash/accordion/index.html.twig', [
            'controller_name' => 'AccordionController',
        ]);
    }
}

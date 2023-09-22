<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Calendar2Controller extends AbstractController
{
    #[Route('sash/calendar2', name: 'app_sash_calendar2')]
    public function index(): Response
    {
        return $this->render('sash/calendar2/index.html.twig', [
            'controller_name' => 'Calendar2Controller',
        ]);
    }
}

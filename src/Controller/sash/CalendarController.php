<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendarController extends AbstractController
{
    #[Route('sash/calendar', name: 'app_sash_calendar')]
    public function index(): Response
    {
        return $this->render('sash/calendar/index.html.twig', [
            'controller_name' => 'CalendarController',
        ]);
    }
}

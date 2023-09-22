<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SettingsController extends AbstractController
{
    #[Route('sash/settings', name: 'app_sash_settings')]
    public function index(): Response
    {
        return $this->render('sash/settings/index.html.twig', [
            'controller_name' => 'SettingsController',
        ]);
    }
}

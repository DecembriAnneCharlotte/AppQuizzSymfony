<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotifyListController extends AbstractController
{
    #[Route('sash/notify-list', name: 'app_sash_notify_list')]
    public function index(): Response
    {
        return $this->render('sash/notify_list/index.html.twig', [
            'controller_name' => 'NotifyListController',
        ]);
    }
}

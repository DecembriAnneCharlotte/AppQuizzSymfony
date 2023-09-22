<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LockscreenController extends AbstractController
{
    #[Route('sash/lockscreen', name: 'app_sash_lockscreen')]
    public function index(): Response
    {
        return $this->render('sash/lockscreen/index.html.twig', [
            'controller_name' => 'LockscreenController',
        ]);
    }
}

<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListgroupController extends AbstractController
{
    #[Route('sash/listgroup', name: 'app_sash_listgroup')]
    public function index(): Response
    {
        return $this->render('sash/listgroup/index.html.twig', [
            'controller_name' => 'ListgroupController',
        ]);
    }
}

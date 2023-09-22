<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TagsController extends AbstractController
{
    #[Route('sash/tags', name: 'app_sash_tags')]
    public function index(): Response
    {
        return $this->render('sash/tags/index.html.twig', [
            'controller_name' => 'TagsController',
        ]);
    }
}

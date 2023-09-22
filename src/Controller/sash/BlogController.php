<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('sash/blog', name: 'app_sash_blog')]
    public function index(): Response
    {
        return $this->render('sash/blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}

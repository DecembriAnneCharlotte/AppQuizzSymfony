<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogDetailsController extends AbstractController
{
    #[Route('sash/blog-details', name: 'app_sash_blog_details')]
    public function index(): Response
    {
        return $this->render('sash/blog_details/index.html.twig', [
            'controller_name' => 'BlogDetailsController',
        ]);
    }
}

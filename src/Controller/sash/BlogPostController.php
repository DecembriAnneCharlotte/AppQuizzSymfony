<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogPostController extends AbstractController
{
    #[Route('sash/blog-post', name: 'app_sash_blog_post')]
    public function index(): Response
    {
        return $this->render('sash/blog_post/index.html.twig', [
            'controller_name' => 'BlogPostController',
        ]);
    }
}

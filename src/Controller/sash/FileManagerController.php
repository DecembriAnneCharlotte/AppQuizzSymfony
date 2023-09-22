<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FileManagerController extends AbstractController
{
    #[Route('sash/file-manager', name: 'app_sash_file_manager')]
    public function index(): Response
    {
        return $this->render('sash/file_manager/index.html.twig', [
            'controller_name' => 'FileManagerController',
        ]);
    }
}

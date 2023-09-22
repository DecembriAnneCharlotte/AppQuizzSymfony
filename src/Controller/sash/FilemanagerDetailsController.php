<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilemanagerDetailsController extends AbstractController
{
    #[Route('sash/filemanager-details', name: 'app_sash_filemanager_details')]
    public function index(): Response
    {
        return $this->render('sash/filemanager_details/index.html.twig', [
            'controller_name' => 'FilemanagerDetailsController',
        ]);
    }
}

<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FileAttachmentsController extends AbstractController
{
    #[Route('sash/file-attachments', name: 'app_sash_file_attachments')]
    public function index(): Response
    {
        return $this->render('sash/file_attachments/index.html.twig', [
            'controller_name' => 'FileAttachmentsController',
        ]);
    }
}

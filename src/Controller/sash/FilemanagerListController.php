<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilemanagerListController extends AbstractController
{
    #[Route('sash/filemanager-list', name: 'app_sash_filemanager_list')]
    public function index(): Response
    {
        return $this->render('sash/filemanager_list/index.html.twig', [
            'controller_name' => 'FilemanagerListController',
        ]);
    }
}

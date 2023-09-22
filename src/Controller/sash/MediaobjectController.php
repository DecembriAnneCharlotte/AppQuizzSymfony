<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MediaobjectController extends AbstractController
{
    #[Route('sash/mediaobject', name: 'app_sash_mediaobject')]
    public function index(): Response
    {
        return $this->render('sash/mediaobject/index.html.twig', [
            'controller_name' => 'MediaobjectController',
        ]);
    }
}

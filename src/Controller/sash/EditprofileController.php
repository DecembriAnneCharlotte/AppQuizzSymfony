<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditprofileController extends AbstractController
{
    #[Route('sash/editprofile', name: 'app_sash_editprofile')]
    public function index(): Response
    {
        return $this->render('sash/editprofile/index.html.twig', [
            'controller_name' => 'EditprofileController',
        ]);
    }
}

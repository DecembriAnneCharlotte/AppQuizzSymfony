<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersListController extends AbstractController
{
    #[Route('sash/users-list', name: 'app_sash_users_list')]
    public function index(): Response
    {
        return $this->render('sash/users_list/index.html.twig', [
            'controller_name' => 'UsersListController',
        ]);
    }
}

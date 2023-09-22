<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RangesliderController extends AbstractController
{
    #[Route('sash/rangeslider', name: 'app_sash_rangeslider')]
    public function index(): Response
    {
        return $this->render('sash/rangeslider/index.html.twig', [
            'controller_name' => 'RangesliderController',
        ]);
    }
}

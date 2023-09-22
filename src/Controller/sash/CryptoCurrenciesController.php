<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CryptoCurrenciesController extends AbstractController
{
    #[Route('sash/crypto-currencies', name: 'app_sash_crypto_currencies')]
    public function index(): Response
    {
        return $this->render('sash/crypto_currencies/index.html.twig', [
            'controller_name' => 'CryptoCurrenciesController',
        ]);
    }
}

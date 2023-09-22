<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InvoiceController extends AbstractController
{
    #[Route('sash/invoice', name: 'app_sash_invoice')]
    public function index(): Response
    {
        return $this->render('sash/invoice/index.html.twig', [
            'controller_name' => 'InvoiceController',
        ]);
    }
}

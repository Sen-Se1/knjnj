<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/', name: 'list_produit')]
    public function list(): Response
    {
        return $this->render('produit/produit-list.html.twig');
    }

    #[Route('/produit-add', name: 'add_produit')]
    public function add(): Response
    {
        return $this->render('produit/produit-add.html.twig');
    }
}

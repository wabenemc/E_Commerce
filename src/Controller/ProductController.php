<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/produit/{slug}', name: 'app_product')]
    public function index($slug,ProductsRepository $productsRepository): Response
    {
        $product = $productsRepository->findOneBy([
            "slug"=>$slug
        ]);

        return $this->render('product/index.html.twig', [
         "product"=>$product
        ]);
    }
}

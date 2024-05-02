<?php

// namespace APP\Controller\Cart;


// use App\Repository\ProductsRepository;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Attribute\Route;

// class CartController extends AbstractController
// {
//     #[Route('/mon_panier', name: 'app_cart')]
//     public function index(CartController $cart): Response
//     {

//         return $this->render('cart/index.html.twig', [
//             'cart'=>$cart->getCart()
//         ]);
//     }

    
//     #[Route('/cart/add/{id}', name: 'app_cart_add')]
//     public function add($id, CartController $cart, ProductsRepository $productsRepository ): Response
//     {
//         $product = $productsRepository->findOneById($id);

//         $this->addFlash(
//             type: 'success',
//             message: "Produit correctement ajouté u panier "
//         );


//         $cart->add($product);
       
//         return $this->redirectToRoute('app_product',[
//             'slug'=>$product->getslug()
//         ]);
            
        
//     }
// }
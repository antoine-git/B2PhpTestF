<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
  /**
   * @Route("/", name="index")
   */
  public function index(ProductRepository $productRepository): Response
  {
    $products = $productRepository->top(Product::PAGE_NB_ITEMS);

    return $this->render('index/index.html.twig', [
      'products' => $products
    ]);
  }
}

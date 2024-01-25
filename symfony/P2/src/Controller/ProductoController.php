<?php

namespace App\Controller;
use App\Entity\Producto;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\InsertarProductoType;
use Symfony\Component\HttpFoundation\Request;

class ProductoController extends AbstractController {
    #[Route('/producto')]
    public function producto(Request $request, EntityManagerInterface $entityManager): Response {
        
        $product = new Producto();
        $form = $this->createForm(InsertarProductoType::class, $product);
        $form->handleRequest($request);

        return $this->render('index.html.twig', ['form' => $form->createView()]);
    }
}
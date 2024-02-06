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
        
        $repository = $entityManager->getRepository(producto::class);
        $products = $repository->findAll();

        return $this->render('index.html.twig', ['productos' => $products]);
    }

    #[Route('/insertar')]
    public function insertaProducto(Request $request, EntityManagerInterface $entityManager) {
        $producto = new producto();

        $form = $this->createForm(insertarProductoType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $entityManager->persist($data);
            $entityManager->flush();

            return $this->render('insertado.html.twig');
        }
        return $this->render('insertar.html.twig', ['form' => $form]);

        
    }

    #[Route('/producto/{id}')]
    public function productoEspecifico(EntityManagerInterface $entityManager, $id) {
        $repository = $entityManager->getRepository(producto::class);
        $producto = $repository->findBy(['id' => $id]);

        if (!(empty($producto))) {
            return $this->render('producto.html.twig', ['productos' => $producto]);
        } else {
            die ('El producto no existe');
        }
    }
}

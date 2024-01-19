<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SaludoController extends AbstractController
{
    #[Route('saludo/{nombre?}')]
    public function saludo($nombre)
    {
        $nombre = $nombre ?? 'generico';
        return $this->render('saludo.html.twig',['nombre' => $nombre]);
    }
}

<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route('/bienvenida/{nombre?}')]

    public function bienvenida($nombre) {
        $nombre = $nombre ?? 'generico';

        die('Bienvenido ' . $nombre);
    }
}

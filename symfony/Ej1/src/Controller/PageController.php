<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class PageController extends AbstractController
{
    #[Route('/about')]
    public function about()
    {
        return $this->render('pages/about.html.twig');
    }

    #[Route('/contact')]
    public function contact()
    {
        die("contact");
    }
}

<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class RedirectController extends AbstractController {
    #[Route('/redirect')]
    public function redirectToHome() {
        return $this->redirectToRoute('home');
    }

    #[Route('/external')]
    public function redirectExternal() {
        return $this->redirect('http://symfony.com/doc');
    }
}
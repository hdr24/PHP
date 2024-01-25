<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
use App\Entity\Student;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use App\Service\StudentRepository;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        



        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
        ]);
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = 'Genre: '.u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All Genres';
        }

        return new Response($title);

        //return new Response('Breakup vinyl? Angsty 90s rock? Browse the collection!');
    }

    #[Route('/saveStudent1')]
    public function new(EntityManagerInterface $entityManager): Response
    {
        $s = new Student();
        $s->setName('Pepe');
        $s->setId(1);
        $s->setSurname('perez');
        $s->setEmail('example@ies.com');

        $entityManager->persist($s);
        $entityManager->flush();

        //$mixes = $this->StudentRepository->findAll();

        return new Response(sprintf(
            'Mix %d is %d tracks of pure 80\'s heaven',
            $s->getId(),
            $s->getName()
        ));
    }

    #[Route('/getStudent1')]
    public function consulta(EntityManagerInterface $entityManager): Response
    {
        $studentRespository = $entityManager->getRepository(Student::class);
        $student = $studentRespository->findAll();
        dd($student);
    
        return new Response(sprintf(
            'CONSULTA CON ÉXITO',
        ));
    
    }

    
}

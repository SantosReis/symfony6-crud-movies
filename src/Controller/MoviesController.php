<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }

    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        // $repository = $this->em->getRepository(Movie::class);
        // $movies = $repository->findAll();
        // $movies = $repository->findBy([], ['id' => 'DESC']);
        // $movies = $repository->findOneBy(['id' => 5, 'title' => 'The Dark Knight'], ['id' => 'DESC']);
        // $movies = $repository->count(['id' => 5]);
        // $movies = $repository->getClassName();
        // dd($movies);

        return $this->render('index.html.twig');
    }
}

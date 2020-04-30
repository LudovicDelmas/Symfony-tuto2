<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $repository)
    {
        $animaux = $repository->findall();
        return $this->render('animal/index.html.twig',[
            "animaux"=>$animaux
        ]);
    }
}

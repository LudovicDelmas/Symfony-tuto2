<?php

namespace App\Controller;


use App\Repository\FamilleRepository;
use App\Entity\Famille;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="familles")
     */
    public function index(FamilleRepository $repository)
    {
        $familles = $repository->findall();
        return $this->render('famille/familles.html.twig',[
            "familles" => $familles
        ]);
    }

    /**
     * @Route("/famille/{id}", name="afficher_famille")
     */
    public function afficherFamille(Famille $famille)
    {

        return $this->render('famille/afficherFamille.html.twig',[
            "famille" => $famille
        ]);
    }
}

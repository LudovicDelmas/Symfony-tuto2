<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $c1 = new Famille();
        $c1->setLibelle("mammifères")
            ->setDescription("Les Mammifères (Mammalia) sont une classe d'animaux vertébrés qui ont pour caractéristique principale que les représentants femelles (et parfois aussi les mâles) allaitent leurs juvéniles à partir d'une sécrétion cutanéo-glandulaire spécialisée appelée lait. Leur aire de répartition est planétaire, ils ont conquis une grande partie des niches écologiques de la macrofaune et demeurent un des taxons dominants depuis l'Éocène.");
        $manager->persist($c1);

        $c2 = new Famille();
        $c2->setLibelle("reptiles")
            ->setDescription("Le nom reptiles (du latin reptile, « rampant ») désigne des animaux terrestres à température variable (ectothermes), au corps souvent allongé et recouvert d'écailles, et dont la démarche, pattes écartées et corps proche du sol, est proche de la reptation.");
        $manager->persist($c2);

        $c3 = new Famille();
        $c3->setLibelle("poissons")
            ->setDescription("Les poissons sont des animaux vertébrés aquatiques à branchies, pourvus de nageoires et dont le corps est le plus souvent couvert d'écailles.");
        $manager->persist($c3);

        $a1 = new Animal();
        $a1->setNom("Chien")
            ->setDescription("Un animal de compagnie fidèle")
            ->setImage("chien.png")
            ->setPoids(20)
            ->setDangereux(false)
            ->setFamille($c1)
        ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom("Cochon")
            ->setDescription("Un animal d'élevage")
            ->setImage("cochon.png")
            ->setPoids(300)
            ->setDangereux(false)
            ->setFamille($c1)
        ;
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom("Serpent")
            ->setDescription("Un animal dangereux")
            ->setImage("serpent.png")
            ->setPoids(5)
            ->setDangereux(true)
            ->setFamille($c2)
        ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom("Crocodile")
            ->setDescription("Un animal amphibie très dangereux")
            ->setImage("croco.png")
            ->setPoids(500)
            ->setDangereux(true)
            ->setFamille($c2)
        ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom("Requin")
            ->setDescription("Un animal marin très dangereux")
            ->setImage("requin.png")
            ->setPoids(800)
            ->setDangereux(true)
            ->setFamille($c3)
        ;
        $manager->persist($a5);
       

        $manager->flush();
    }
}

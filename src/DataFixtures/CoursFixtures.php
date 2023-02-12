<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->createCours("HTML", "Cour sur le HTML", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createCours("CSS", "Cour sur le CSS", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createCours("JS", "Cour sur le JS", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createCours("React", "Cour sur le React", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createCours("Maquettage", "Cour sur le maquettage", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createCours("PHP", "Cour sur le PHP", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createCours("Symfony", "Cour sur le Symfony", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);

        $manager->flush();
    }

    public function createCours(string $sTitre, string $sSynopsis, int $intNiveau, int $intTempsEstime, string $sImage, DateTimeImmutable $dtiDate, int $cree, ObjectManager $manager): Cours 
    {
        $counter = 1;
        $cours = new Cours();
        $cours->setTitre($sTitre);
        $cours->setSynopsis($sSynopsis);
        $cours->setNiveau($intNiveau);
        $cours->setTempsEstime($intTempsEstime);
        $cours->setImage($sImage);
        $cours->setDate($dtiDate);
        $cours->setCree($cree);
       
        $manager->persist($cours);
        // Cette méthode héritée va permettre de mémoriser les utilisateurs pour nous en resservir dans d'autres Fixtures
        $this->setReference('cours-' . $counter, $cours);
        $counter++;

        return $cours;
    }
}

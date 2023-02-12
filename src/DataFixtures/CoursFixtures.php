<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use App\Entity\Chapitres;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Cours HTML
        $cours = $this->createCours("HTML", "Cour sur le HTML", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createChapitres("Chapitre 1 - Introduction", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. 
        Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.", rand(), $cours, $manager);
        $this->createChapitres("Chapitre 2 - Les balises", "Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. 
        Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.", rand(), $cours, $manager);
        
        // Cours CSS
        $cours = $this->createCours("CSS", "Cour sur le CSS", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createChapitres("Chapitre 1 - Introduction", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. 
        Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.", rand(), $cours, $manager);

        // Cours JS
        $cours = $this->createCours("JS", "Cour sur le JS", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createChapitres("Chapitre 1 - Introduction", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. 
        Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.", rand(), $cours, $manager);

        // Cours React
        $cours = $this->createCours("React", "Cour sur le React", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createChapitres("Chapitre 1 - Introduction", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. 
        Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.", rand(), $cours, $manager);

        // Cours Maquettage
        $cours = $this->createCours("Maquettage", "Cour sur le maquettage", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createChapitres("Chapitre 1 - Introduction", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. 
        Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.", rand(), $cours, $manager);

        // Cours PHP
        $cours = $this->createCours("PHP", "Cour sur le PHP", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createChapitres("Chapitre 1 - Introduction", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. 
        Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.", rand(), $cours, $manager);

        // Cours Symfony
        $cours = $this->createCours("Symfony", "Cour sur le Symfony", rand(0, 5), rand(1, 40), "", new DateTimeImmutable(), rand(0, 1), $manager);
        $this->createChapitres("Chapitre 1 - Introduction", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. 
        Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.", rand(), $cours, $manager);
        
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

    public function createChapitres(string $sTitre, string $sContenu, int $intPosition, Cours $cours, ObjectManager $manager): Chapitres 
    {
        $counter = 1;
        $chapitre = new Chapitres();
        $chapitre->setTitre($sTitre);
        $chapitre->setContenu($sContenu);
        $chapitre->setPosition($intPosition);
        $chapitre->setCours($cours);
       
        $manager->persist($chapitre);
        $this->setReference('chapitre-' . $counter, $chapitre);
        $counter++;

        return $chapitre;
    }
}

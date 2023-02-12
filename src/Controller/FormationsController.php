<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Repository\ChapitresRepository;
use App\Repository\CoursRepository;
use App\Repository\UtilisateursChapitresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationsController extends AbstractController
{
    #[Route('/formations', name: 'app_formations')]
    public function formations(CoursRepository $cours): Response
    {
        $list_cours = $cours->findAll();
        
        return $this->render('formations/index.html.twig', [
            'list_cours' => $list_cours,
        ]);
    }
    
    #[Route('/cours-{titre}-{id}-chapitre/{col}', name: 'app_cours')]
    public function cours(string $titre, int $id, int $col, CoursRepository $cours, ChapitresRepository $chapitres, UtilisateursChapitresRepository $utilisateursChapitres): Response
    {
        $cours = $cours->findOneBy(['titre' => $titre]);
        $list_chapitres = $cours->getChapitres();
        $chapitre = $utilisateursChapitres->getUtilisateursChapitres($id, $chapitres);
        
        return $this->render('formations/cours.html.twig', [
            'cours' => $cours,
            'chapitres' => $list_chapitres,
            'chapitre' => $chapitre,
            'col' => $col,
        ]);
    }
}

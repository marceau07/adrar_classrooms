<?php

namespace App\Controller;

use App\Repository\CoursRepository;
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
    
    #[Route('/cours-{titre}/{col}', name: 'app_cours')]
    public function cours(string $titre, int $col, CoursRepository $cours): Response
    {
        $cours = $cours->findOneBy(['titre' => $titre]);
        
        return $this->render('formations/cours.html.twig', [
            'cours' => $cours,
            'col' => $col,
        ]);
    }
}

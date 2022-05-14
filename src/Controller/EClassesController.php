<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Form\ClasseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EClassesController extends AbstractController
{
    #[Route('/e/classes', name: 'ecole_classes')]
    public function index(): Response
    {
        return $this->render('e_classes/index.html.twig', [
            'controller_name' => 'EClassesController',
        ]);
    }

    // ***********************************CREER******************************************//
    #[Route('/e/classes/add', name: 'ecole_classes_add')]
    public function add(Request $request): Response
    {
        
        $classe = new Classe();
        
        $form = $this ->createForm(ClasseType::class,$classe);
        return $this->render('e_classes/add.html.twig', [
            "formulaire" =>$form->createView()

        ]);
    }

   
}

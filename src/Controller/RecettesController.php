<?php


namespace App\Controller;

use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
/**
 * Description of RecettesController
 *
 * @author 4lfred 
 */
class RecettesController extends AbstractController{
     #[Route('/recettes', name: 'recettes')]
    public function index(): Response {
        
        return $this->render("pages/recettes.html.twig");
    }
}


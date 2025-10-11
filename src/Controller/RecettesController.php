<?php


namespace App\Controller;

use App\Repository\RepaRepository;
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
    
    /**
     * 
     * @var RepaRepository
     */
    private $repository;
    
    /**
     * 
     * @param RepaRepository $repository
     */
    public function __construct(RepaRepository $repository) {
        $this->repository = $repository;
    }

    
     #[Route('/recettes', name: 'recettes')]
    public function index(): Response {
        $repas = $this->repository->findAll();
        return $this->render("pages/recettes.html.twig", [
            'repas' => $repas
        ]);
    }
}


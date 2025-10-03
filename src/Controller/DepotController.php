<?php
namespace App\Controller;

use App\Repository\DepotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepotController extends AbstractController
{
    #[Route('/depots', name: 'depot_list')]
    public function index(DepotRepository $depotRepository): Response
    {
        $depots = $depotRepository->findAll();

        return $this->render('depot/index.html.twig', [
            'depots' => $depots,
        ]);
    }
}

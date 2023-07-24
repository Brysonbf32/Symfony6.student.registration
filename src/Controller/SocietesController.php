<?php

namespace App\Controller;
use App\Repository\SocietesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocietesController extends AbstractController
{
    #[Route('/societes', name: 'app_societes')]
    public function index(SocietesRepository $repository): Response
    {
        $societes = $repository->findAll();
        //dd($societes);
        return $this->render('pages/societes/index.html.twig', [
            'societe'=>$societes
        ]);
    }
}

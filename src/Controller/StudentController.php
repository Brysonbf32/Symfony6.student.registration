<?php

namespace App\Controller;

use App\Repository\StudentsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(StudentsRepository $repoitory, PaginatorInterface $paginator, Request $request): Response
    { 
        $students=$paginator->paginate(
            $repoitory->findAll(),
            $request->query->getInt('page', 1),
            10
        );
        // dd($students);
        return $this->render('pages/student/index.html.twig', [
            'student' =>$students
        ]);
    }
}

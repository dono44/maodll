<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/pages/project/index.html.twig", name="project.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this -> render('pages/project/index.html.twig');
    }
}
<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DownloadController extends AbstractController
{
    /**
     * @Route("/pages/download/index.html.twig", name="download.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this -> render('pages/download/index.html.twig');
    }
}
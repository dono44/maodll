<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController 
{
    /**
 * @var Environment
 */
private $twig;
 
public function __construct(Environment $twig)
{
  
    $this->twig = $twig ; 
}


Public function index():Response
{
    return new Response($this->twig->render('home.html.twig'));
}

}
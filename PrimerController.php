<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class PrimerController extends AbstractController
{
  #[Route('/home', name: 'verPortada')]
  public function verPortada()
  {
    return $this->render('portada.html.twig');
  }
}
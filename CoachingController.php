<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class CoachingController extends AbstractController
{
     #[Route('/entrada', name: 'inicio')]
      public function inicio()
      {
        return $this->render('entrada.html.twig');    
      }
}
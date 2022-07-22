<?php

namespace App\Controller;
use App\Entity\Usuarios;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

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

  #[Route('/registro', name: 'registrarUsuario')]
  public function registrarUsuario(Request $request, EntityManagerInterface $em)
  {
    // Recuperar nuevo registro
    $nombreNuevo    = $request->request->get('nombre');
    $emailNuevo     = $request->request->get('email');
    $keywordNuevo   = $request->request->get('keyword');
    

    // Dar de alta
    $usuario = new Usuarios();
    // $usuario->setNombre($nombreNuevo);
    $usuario->setEmail($emailNuevo);
    $usuario->setKeyword($keywordNuevo);
    dump($usuario);

    $em->persist($usuario);

    $em->flush();
  }

  // FALTA
  #[Route('/iniciar', name: 'iniciarSesion')]
  public function iniciarSesion(Request $request, EntityManagerInterface $em)
  {
    // Recuperar el usuario
    $nombreUsuario    = $request->request->get('nombre');
    $emailUsuario     = $request->request->get('email');
    $keywordUsuario   = $request->request->get('keyword');

  }

  #[Route('/biografia', name: 'mostrarBiografia')]
  public function mostrarBiografia()
  {
    return $this->render('biografia.html.twig');
  }



}
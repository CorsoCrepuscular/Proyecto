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

  #[Route('/home', name: 'mostrarHome')]
  public function mostrarHome()
  {
    return $this->render('home.html.twig');
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
    $usuario->setNombre($nombreNuevo);
    $usuario->setEmail($emailNuevo);
    $usuario->setKeyword($keywordNuevo);
    dump($usuario);

    $em->persist($usuario);

    $em->flush();
  }

  #[Route('/iniciar', name: 'iniciarSesion')]
  public function iniciarSesion(Request $request, EntityManagerInterface $em)
  {  
    // Recuperar el usuario
    $nombreUsuario    = $request->request->get('nombre');
    $emailUsuario     = $request->request->get('email');
    $keywordUsuario   = $request->request->get('keyword');
    dump($nombreUsuario);

    // Comprobar si está en la tabla de usuarios
    $datosUsuario = $em->getRepository(Usuarios::class)->findByNombre($nombreUsuario);
    dump($datosUsuario);
 
    if (!$datosUsuario) { // No existe ese usuario
      return $this->render('header.html.twig', [
        'mensaje' => 'Ese usuario no existe'
      ]);
    } else {
      return $this->render('header.html.twig', [
        'usuario' => $datosUsuario
      ]);
    }
   
      /*
    // Si existe, buscar qué rol tiene
    $idRol = getRolesIdRol($nombreUsuario);
    dump($idRol);
    $rol = $em->getRepository(Roles::class)->find($idRol);
    dump($rol);
    return $this->render('header.html.twig', [
      'rol' => $rol
    ]);  
    */
 

  }


  // Rutas de botones

  #[Route('/biografia', name: 'mostrarBiografia')]
  public function mostrarBiografia()
  {
    return $this->render('biografia.html.twig');
  }

  #[Route('/contacto', name: 'mostrarContacto')]
  public function mostrarContacto()
  {
    return $this->render('contacto.html.twig');
  }

  #[Route('/testimonios', name: 'mostrarTestimonios')]
  public function mostrarTestimonios()
  {
    return $this->render('testimonios.html.twig');
  }

  #[Route('/servicios', name: 'mostrarServicios')]
  public function mostrarServicios()
  {
    return $this->render('servicios.html.twig');
  }

  #[Route('/precios', name: 'mostrarPrecios')]
  public function mostrarPrecios()
  {
    return $this->render('precios.html.twig');
  }

  #[Route('/agenda', name: 'mostrarAgenda')]
  public function mostrarAgenda()
  {
    return $this->render('agenda.html.twig');
  }

  #[Route('/blog', name: 'mostrarBlog')]
  public function mostrarBlog()
  {
    return $this->render('blog.html.twig');
  } 

  #[Route('/coaching', name: 'mostrarCoaching')]
  public function mostrarCoaching()
  {
    return $this->render('coaching.html.twig');
  } 


}
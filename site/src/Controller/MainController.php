<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

  class MainController extends AbstractController
  {
      #[Route('/', name: 'homepage', stateless: true)]
      public function home(): Response
      {
        return $this->render('public/home.html.twig', []);
      }
  }
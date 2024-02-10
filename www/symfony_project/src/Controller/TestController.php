<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

  class TestController
  {
     #[Route('/test')]
      public function number(): Response
      {
            return new Response(
            'Bienvenue Sur le Site BC24'
        );
      }
  }
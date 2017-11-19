<?php

  namespace App\Controllers;

  use Psr\Http\Message\RequestInterface;
  use Psr\Http\Message\ResponseInterface;

  class PagesDashboard extends Controller
  {
     public function dashboard(RequestInterface $request, ResponseInterface $response)
     {
       $this->render($response, 'pages/dashboard.twig');
     }
  }

?>

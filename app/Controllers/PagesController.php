<?php

 namespace App\Controllers;

 use Psr\Http\Message\RequestInterface;
 use Psr\Http\Message\ResponseInterface;

 class PagesController extends Controller
 {

   public function index(RequestInterface $request, ResponseInterface $response)
   {
     return $this->render($response, 'pages/index.twig');
   }

   public function bio(RequestInterface $request, ResponseInterface $response)
   {
     return $this->render($response, 'pages/bio.twig');
   }

   public function portfolio (RequestInterface $request, ResponseInterface $response)
   {
     return $this->render($response, 'pages/portfolio.twig');
   }

   public function eshop(RequestInterface $request, ResponseInterface $response)
   {
     return $this->render($response, 'pages/eshop.twig');
   }

   public function contact(RequestInterface $request, ResponseInterface $response)
   {
     return $this->render($response, 'pages/contact.twig');
   }
 }
 /*
 $users = $this->container->pdo->query('SELECT * FROM users')->fetchAll();
 $params = $request->getParams();
return $response->withRedirect('/dashboard');
 */

?>

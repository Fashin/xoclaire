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
 }
 /*
 $users = $this->container->pdo->query('SELECT * FROM users')->fetchAll();
 $params = $request->getParams();
return $response->withRedirect('/dashboard');
 */

?>

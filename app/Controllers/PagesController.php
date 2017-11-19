<?php

 namespace App\Controllers;

 use Psr\Http\Message\RequestInterface;
 use Psr\Http\Message\ResponseInterface;

 class PagesController extends Controller
 {

   public function connexion(RequestInterface $request, ResponseInterface $response)
   {
     $session = isset($_SESSION['id']) ? $_SESSION['id'] : false;
     if ($session)
       return $response->withRedirect('/dashboard');
     else
      return $this->render($response, 'pages/connexion.twig');
   }

   public function postConnexion(RequestInterface $request, ResponseInterface $response)
   {
     $users = $this->container->pdo->query('SELECT * FROM users')->fetchAll();
     $params = $request->getParams();
     foreach ($users as $k => $v)
     {
        if ($v['login'] == $params['login'] && $v['psswd'] == hash('whirlpool', $params['psswd']))
        {
          $_SESSION['id'] = $v['id'];
          return $response->withRedirect('/dashboard');
        }
     }
     return $response->withRedirect('/');
   }
 }

?>

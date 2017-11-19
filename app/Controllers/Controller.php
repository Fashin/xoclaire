<?php

 namespace App\Controllers;

 use Psr\Http\Message\RequestInterface;
 use Psr\Http\Message\ResponseInterface;

 class Controller
 {
   protected $container;

   function __construct($container)
   {
     $this->container = $container;
   }

   public function render(ResponseInterface $response, $file, $params = [])
   {
     $this->container->view->render($response, $file, $params);
   }

   public function flash($message, $type = 'success')
   {
     return [$type, $message];
   }
 }

 ?>

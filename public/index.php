<?php

  require "../vendor/autoload.php";

  session_start();
  //session_destroy();

  $app = new \Slim\App([
    'settings' => [
      'displayErrorDetails' => true
    ]
  ]);

  require "../app/container.php";

  $app->get('/', \App\Controllers\PagesController::class . ':connexion');

  $app->get('/dashboard', \App\Controllers\PagesDashboard::class . ':dashboard');

  $app->post('/', \App\Controllers\PagesController::class . ':postConnexion');

  $app->run();

?>

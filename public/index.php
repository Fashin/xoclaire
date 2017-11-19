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

  //Routes

  $app->get('/', \App\Controllers\PagesController::class . ':index');

  $app->get('/bio', \App\Controllers\PagesController::class . ':bio');

  $app->get('/portfolio', \App\Controllers\PagesController::class . ':portfolio');

  $app->get('/eshop', \App\Controllers\PagesController::class . ':eshop');

  $app->get('/contact', \App\Controllers\PagesController::class . ':contact');

  $app->post('/contact', \App\Controllers\ContactController::class . ':save_contact');

  $app->run();

?>

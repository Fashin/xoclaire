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

  $app->get('/', \App\Controllers\PagesController::class . ':index');

  $app->run();

?>

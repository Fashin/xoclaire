<?php

  $container = $app->getContainer();

  $container['view'] = function($container)
  {
    $dir = dirname(__DIR__);
    $view = new \Slim\Views\Twig($dir . '/app/views', [
      'cache' => false//$dir . '/tmp/cache'
    ]);

    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');

    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    return ($view);
  };

  $container['pdo'] = function()
  {
    $pdo = new PDO('mysql:dbname=objectif-solaire;host=localhost', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return ($pdo);
  };

?>

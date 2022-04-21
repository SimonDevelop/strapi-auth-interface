<?php

use Slim\Views\PhpRenderer;

// Router
$container->set('router', function () use ($app) {
    return $app->getRouteCollector()->getRouteParser();
});

// View
$container->set('view', function () use ($app) {
    return new PhpRenderer(dirname(__DIR__)."/src/Views/");
});

<?php

use App\Middlewares;

// Middleware pour les messages flash en session
$app->add(new Middlewares\AlertMiddleware());

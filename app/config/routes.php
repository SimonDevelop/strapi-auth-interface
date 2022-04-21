<?php

use App\Controllers\ConfirmationController;

// Confirmation
$app->get('/confirmation', ConfirmationController::class. ':getConfirmation')->setName('confirmation');

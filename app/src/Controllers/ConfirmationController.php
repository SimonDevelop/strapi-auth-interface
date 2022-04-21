<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ConfirmationController extends Controller
{
    public function getConfirmation(RequestInterface $request, ResponseInterface $response)
    {
        $title = "Inscription confirmé !";

        $params = compact("title");
        return $this->render($response, "pages/confirmation.php", $params);
    }
}

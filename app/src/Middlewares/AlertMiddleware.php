<?php

namespace App\Middlewares;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface as Middleware;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

class AlertMiddleware implements Middleware
{
    public function process(Request $request, RequestHandler $handler): Response
    {
        if (isset($_SESSION['alert'])) {
            unset($_SESSION['alert']);
        }
        if (isset($_SESSION['alert2'])) {
            $_SESSION['alert'] = $_SESSION['alert2'];
            unset($_SESSION['alert2']);
        }
        return $handler->handle($request);
    }
}

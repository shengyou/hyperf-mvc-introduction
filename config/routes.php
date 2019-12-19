<?php

declare(strict_types=1);

use App\Controller\TaskController;
use Hyperf\HttpServer\Router\Router;

Router::get('/', [TaskController::class, 'index']);

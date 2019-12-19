<?php

declare(strict_types=1);

use App\Controller\TaskController;
use Hyperf\HttpServer\Router\Router;

Router::get('/', [TaskController::class, 'index']);
Router::post('/tasks', [TaskController::class, 'store']);
Router::post('/tasks/{id}/complete', [TaskController::class, 'update']);
Router::post('/tasks/{id}/delete', [TaskController::class, 'destroy']);

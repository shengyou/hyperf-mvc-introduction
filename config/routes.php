<?php

declare(strict_types=1);

use Hyperf\HttpServer\Router\Router;

Router::get('/', function () {
    return 'Hello, world';
});

<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\View\RenderInterface;

class TaskController
{
    public function index(RenderInterface $render)
    {
        return $render->render('index', []);
    }
}

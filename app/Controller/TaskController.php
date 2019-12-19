<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Task;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\View\RenderInterface;

class TaskController
{
    public function index(RenderInterface $render)
    {
        $tasks = Task::orderBy('id', 'DESC')->get();

        $data = [
            'tasks' => $tasks,
        ];

        return $render->render('index', $data);
    }

    public function store(RequestInterface $request, ResponseInterface $response)
    {
        Task::create($request->all());

        return $response->redirect('/');
    }
}

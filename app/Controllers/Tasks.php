<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();
        $today = date('Y-m-d');

        return view('welcome', [
            'tasks' => $model->where('task_date', $today)->orderBy('status', 'ASC')->findAll(),
            'today' => $today,
        ]);
    }

    public function list()
    {
        $model = new TaskModel();

        return view('tasks', [
            'tasks' => $model->orderBy('task_date', 'ASC')->orderBy('id', 'ASC')->findAll(),
        ]);
    }
}

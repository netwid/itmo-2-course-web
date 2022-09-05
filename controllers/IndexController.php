<?php

namespace controllers;

use core\Controller;
use core\Response;
use core\View;
use core\Validate;
use models\HistoryManager;

class IndexController extends Controller
{
    public function index()
    {
        return View::render('index', [
            'history' => HistoryManager::get()
        ]);
    }

    public function sendPoint()
    {
        if (!Validate::intInRange($_GET['X'], -5, 3))
            return Response::error(400, 'X is not in range');

        if (!Validate::intInRange($_GET['Y'], -3, 5))
            return Response::error(400, 'Y is not in range');

        if (!Validate::intInRange($_GET['R'], 1, 5))
            return Response::error(400, 'R is not in range');

        HistoryManager::add($_GET['X'], $_GET['Y'], $_GET['R']);

        return View::render('historyTable', [
            'history' => HistoryManager::get()
        ]);
    }

    public function clearHistory()
    {
        HistoryManager::clear();

        return View::render('historyTable', [
            'history' => HistoryManager::get()
        ]);
    }
}
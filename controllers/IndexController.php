<?php

declare(strict_types=1);

namespace controllers;

use core\View;

class IndexController
{
    public function index()
    {
        return View::render('index');
    }
}
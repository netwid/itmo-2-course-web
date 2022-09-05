<?php

namespace controllers;

use core\View;

class IndexController
{
    public function index()
    {
        return View::render('index');
    }
}
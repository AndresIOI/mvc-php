<?php

namespace MVC\Controllers;

use MVC\Libs\Controller;

class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        $this->view->render('index/index');
    }
}

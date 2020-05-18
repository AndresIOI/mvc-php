<?php

namespace MVC\Libs;


class View
{
    public function render($vista)
    {
        require 'MVC/views/' . $vista . '.php';
    }
}

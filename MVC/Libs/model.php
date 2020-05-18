<?php

namespace MVC\Libs;

class Model
{
    function __construct()
    {
        $this->db = new Database();
    }
}

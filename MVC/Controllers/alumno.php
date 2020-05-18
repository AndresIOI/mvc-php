<?php

namespace MVC\Controllers;

use MVC\Libs\Controller;
use MVC\Models\AlumnoModel;

class Alumno extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    public function render()
    {
        $alumnos = $this->model->getAll();
        $this->view->datos = $alumnos;
        $this->view->render('alumno/index');
    }

    public function registar()
    {
        $this->view->render('alumno/create');
    }

    public function store()
    {
        $alumno = new AlumnoModel();
        $alumno->Nombre = $_POST['nombre'];
        $alumno->Edad = $_POST['edad'];
        $alumno->Boleta = $_POST['boleta'];
        if ($this->model->insertar($alumno)) {
            header('location: ' . constant('URL') . 'alumno');
        } else {
            echo "Hubo un error";
        }
    }

    public function editar($id)
    {
        $producto = $this->model->getById($id[0]);
        $this->view->datos = $producto;
        $this->view->render('alumno/edit');
    }

    public function update()
    {
        $alumno = new AlumnoModel();
        $alumno->id = $_POST['id'];
        $alumno->Nombre = $_POST['nombre'];
        $alumno->Edad = $_POST['edad'];
        $alumno->Boleta = $_POST['boleta'];
        if ($this->model->actualizar($alumno)) {
            header('location: ' . constant('URL') . 'alumno');
        } else {
            echo "Hubo un error";
        }
    }

    public function eliminar($id)
    {
        if ($this->model->eliminar($id[0])) {
            header('location: ' . constant('URL') . 'alumno');
        } else {
            echo "Hubo un error";
        }
    }
}

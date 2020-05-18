<?php

namespace MVC\Libs;

use MVC\Controllers\Errores;
use MVC\Controllers\Index;

class App
{
    function __construct()
    {
        // Leer url
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {

            $controlador = new Index();
            $controlador->render();
            return false;
        } else {
            $archivoControlador = 'Controllers/' . $url[0] . '.php';
        }

        if (file_exists($archivoControlador)) {
            require $archivoControlador;

            $controlador = new $url[0];
            $controlador->loadModel($url[0]);

            // Leer parametros
            $nparams = sizeof($url);

            // comprueba si hay un metodo
            if ($nparams > 1) {
                //comprueba si tiene parametros
                if ($nparams > 2) {
                    $params = array();
                    for ($i = 2; $i < $nparams; $i++) {
                        array_push($params, $url[$i]);
                    }
                    $controlador->{$url[1]}($params);
                } else {
                    $controlador->{$url[1]}();
                }
            } else {
                $controlador->render();
            }
        } else {
            $error = new Errores();
        }
    }
}

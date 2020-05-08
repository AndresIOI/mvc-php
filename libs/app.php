<?php

require_once 'controllers/errores.php';

class App {
    function __construct(){
        // Leer url
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url,'/');
        $url = explode('/', $url);

        if(empty($url[0])){
            $archivoControlador = 'controllers/index.php';
            require $archivoControlador;
            $controlador = new Index();
            $controlador->render();
            return false;
        } else {
            $archivoControlador = 'controllers/'.$url[0].'.php';
        }

        if(file_exists($archivoControlador)){
            require $archivoControlador;

            $controlador = new $url[0];
            $controlador->loadModel($url[0]);

            // Leer parametros
            $nparams = sizeof($url);

            // comprueba si hay un metodo
            if($nparams > 1){
                //comprueba si tiene parametros
                if($nparams > 2){
                    $params = array();
                    for ($i=2; $i < $nparams ; $i++) { 
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
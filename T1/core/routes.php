<?php

    function cargarControlador($controlador){
        $nombreControlador = ucwords($controlador)."Controller";
        $archivoControlador = 'control/'.$controlador.'.php';

        if(!is_file($archivoControlador)){
            $archivoControlador = 'control/'.CONTROLADOR_PRINCIPAL.'.php';
        }

        require_once $archivoControlador;
        $control = new $nombreControlador();
        return $control;
    }

    function cargarAccion($controller, $accion){
        if(isset($accion) && method_exists($controller, $accion)){
            $controller->$accion();
        } else {
            $controller->ACCION_PRINCIPAL();
        }
    }
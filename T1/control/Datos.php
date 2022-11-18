<?php

    class DatosController {

        public function __construct(){
            require_once "./modelo/DatosModel.php";
        }

        public function index(){
            $datos = new Datos_model();
            $data["titulo"] = "Datos";
            $data["datos"] = $datos->get_datos();

            require_once "vista/datos/datos.php";
        }

        public function nuevo (){
            $data["titulo"] = "Datos";
            require_once "vista/datos/datos_nuevo.php";
        }

        public function guarda (){
            $cedula = $_POST['cedula'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];

            $datos = new Datos_model();
            $datos->insertar($cedula, $nombre, $apellido, $fecha_nacimiento, $usuario, $clave);
            $data["titulo"] = "Datos";
            $this->index();
        }

        public function actualziar (){
            $id = $_POST['id'];
            $cedula = $_POST['cedula'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];

            $datos = new Datos_model();
            $datos->modificar($id, $cedula, $nombre, $apellido, $fecha_nacimiento, $usuario, $clave);
            $data["titulo"] = "Datos";
            $this->index();
        }

    }
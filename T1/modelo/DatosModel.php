<?php

    class Datos_model {
        private $db;
        private $datos;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->datos = array();
        }

        public function get_datos(){
            $sql = "SELECT * FROM datos";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $this->datos[] = $row;
            }
            return $this->datos;
        }

        public function insertar($cedula, $nombre, $apellido, $fecha_nacimiento, $usuario, $clave){
            $resultado = $this->db->query("INSERT INTO datos (cedula, nombre, apellido, fecha_nacimiento, usuario, clave) 
            VALUES ('$cedula', '$nombre', '$apellido', '$fecha_nacimiento', '$usuario', '$clave')");
        }
   
        public function get_dato($id){
            $sql = "SELECT * FROM datos WHERE id='$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $this->datos[] = $row;
            }
            return $this->datos;
        }

    }
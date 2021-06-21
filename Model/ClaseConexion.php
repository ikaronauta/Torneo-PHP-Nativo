<?php
    abstract class ClaseConexion{
        protected $conexion;

        public function abrir(){
            try {
                $this->conexion = new PDO("mysql:host=localhost; dbname=torneo", "root", "");
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return "1";
            } catch (PDOExeption $e) {
                return $e->getMessage(); 
            }
        }

        public function cerrar(){
            $this->conexion = null;
        }

        abstract public function save();
        abstract public function all();
        abstract public function find($id_municipio);
        abstract public function update();
        abstract public function delete();
    }    

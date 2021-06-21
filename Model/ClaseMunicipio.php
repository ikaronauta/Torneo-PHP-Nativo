<?php
    require_once "ClaseConexion.php";

    class ClaseMunicipio extends ClaseConexion{
        public $id_municipio;
        public $nombre_municipio;

        public function save(){
            $this->abrir();
            $consulta = $this->conexion->prepare("INSERT INTO municipios VALUES(null, ?)");
            $consulta->bindParam(1, $this->nombre_municipio);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }
        
        public function all(){
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT * FROM municipios");
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $municipios = $consulta->fetchAll();
            $this->cerrar();
            return $municipios;
        }

        public function find($id_municipio){
            $this->abrir(); 
            $consulta = $this->conexion->prepare("SELECT * FROM municipios WHERE id_municipio=?");
            $consulta->bindParam(1, $id_municipio);
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $municipios = $consulta->fetchAll();
            $this->cerrar();
            return $municipios[0];
        }

        public function update(){
            $this->abrir();
            $consulta = $this->conexion->prepare("UPDATE municipios SET nombre_municipio=? WHERE id_municipio=?");
            $consulta->bindParam(1, $this->nombre_municipio);
            $consulta->bindParam(2, $this->id_municipio);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }

        public function delete(){
            $this->abrir();
            $consulta = $this->conexion->prepare("DELETE FROM municipios WHERE id_municipio=?");
            $consulta->bindParam(1, $this->id_municipio);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }
    }
  
    
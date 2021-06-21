<?php
    require_once "ClaseConexion.php";

    class ClasePosicion extends ClaseConexion{
        public $id_posicion;
        public $nombre_posicion;

        public function save(){
            $this->abrir();
            $consulta = $this->conexion->prepare("INSERT INTO posiciones VALUES(null, ?)");
            $consulta->bindParam(1, $this->nombre_posicion);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }
        
        public function all(){
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT * FROM posiciones");
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $posiciones = $consulta->fetchAll();
            $this->cerrar();
            return $posiciones;
        }

        public function find($id_posicion){
            $this->abrir(); 
            $consulta = $this->conexion->prepare("SELECT * FROM posiciones WHERE id_posicion=?");
            $consulta->bindParam(1, $id_posicion);
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $posiciones = $consulta->fetchAll();
            $this->cerrar();
            return $posiciones[0];
        }

        public function update(){
            $this->abrir();
            $consulta = $this->conexion->prepare("UPDATE posiciones SET nombre_posicion=? WHERE id_posicion=?");
            $consulta->bindParam(1, $this->nombre_posicion);
            $consulta->bindParam(2, $this->id_posicion);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }

        public function delete(){
            $this->abrir();
            $consulta = $this->conexion->prepare("DELETE FROM posiciones WHERE id_posicion=?");
            $consulta->bindParam(1, $this->id_posicion);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }
    }
  
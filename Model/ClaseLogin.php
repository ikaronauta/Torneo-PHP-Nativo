<?php
    require_once "ClaseConexion.php";

    class ClaseLogin extends ClaseConexion{
        public $id;
        public $usuario;
        public $contrasena;

        public function save(){
            $this->abrir();
            $consulta = $this->conexion->prepare("INSERT INTO login VALUES(null, ?, md5(?))");
            $consulta->bindParam(1, $this->usuario);
            $consulta->bindParam(2, $this->contrasena);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }
        
        public function all(){
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT equipos.*, municipios.nombre_municipio AS n_municipio FROM equipos INNER JOIN municipios ON equipos.municipio=municipios.id_municipio");
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $equipos = $consulta->fetchAll();
            $this->cerrar();
            return $equipos;
        }

        public function find($id_equipo){
            $this->abrir(); 
            $consulta = $this->conexion->prepare("SELECT * FROM equipos WHERE id_equipo=?");
            $consulta->bindParam(1, $id_equipo);
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $equipos = $consulta->fetchAll();
            $this->cerrar();
            return $equipos[0];
        }

        public function update(){
            $this->abrir();
            $consulta = $this->conexion->prepare("UPDATE equipos SET nombre_equipo=?, dt_equipo=?, municipio=? WHERE id_equipo=?");
            $consulta->bindParam(1, $this->nombre_equipo);
            $consulta->bindParam(2, $this->dt_equipo);
            $consulta->bindParam(3, $this->municipio_id);
            $consulta->bindParam(4, $this->id_equipo);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }

        public function delete(){
            $this->abrir();
            $consulta = $this->conexion->prepare("DELETE FROM equipos WHERE id_equipo=?");
            $consulta->bindParam(1, $this->id_equipo);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }

        public function validarUsuario(){
            $this->abrir(); 
            $consulta = $this->conexion->prepare("SELECT * FROM login WHERE usuario=? AND contrasena=md5(?)");
            $consulta->bindParam(1, $this->usuario);
            $consulta->bindParam(2, $this->contrasena);
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $logins = $consulta->fetchAll();
            $this->cerrar();
            if(count($logins) > 0){
                return $logins[0];
            }else{
                return null;
            } 
        }
    }
  
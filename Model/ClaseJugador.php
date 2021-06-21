<?php
    require_once "ClaseConexion.php";

    class ClaseJugador extends ClaseConexion{
        public $id_jugador;
        public $nombre_jugador;
        public $posicion_jugador;
        public $equipo_jugador;

        public function save(){
            $this->abrir();
            $consulta = $this->conexion->prepare("INSERT INTO jugadores VALUES(null, ?, ?, ?)");
            $consulta->bindParam(1, $this->nombre_jugador);
            $consulta->bindParam(2, $this->posicion_jugador);
            $consulta->bindParam(3, $this->equipo_jugador);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }
        
        public function all(){
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT jugadores.*, posiciones.nombre_posicion AS n_posicion, equipos.nombre_equipo AS n_equipo FROM jugadores, posiciones, equipos WHERE jugadores.posicion_jugador=posiciones.id_posicion AND jugadores.equipo_jugador=equipos.id_equipo ");
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $jugadores = $consulta->fetchAll();
            $this->cerrar();
            return $jugadores;
        }

        public function find($id_jugador){
            $this->abrir(); 
            $consulta = $this->conexion->prepare("SELECT * FROM jugadores WHERE id_jugador=?");
            $consulta->bindParam(1, $id_jugador);
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $jugadores = $consulta->fetchAll();
            $this->cerrar();
            return $jugadores[0];
        }

        public function update(){
            $this->abrir();
            $consulta = $this->conexion->prepare("UPDATE jugadores SET nombre_jugador=? , posicion_jugador=?, equipo=? WHERE id_jugador=?");
            $consulta->bindParam(1, $this->nombre_jugador);
            $consulta->bindParam(2, $this->posicion_jugador);
            $consulta->bindParam(3, $this->equipo_jugador);
            $consulta->bindParam(4, $this->id_jugador);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }

        public function delete(){
            $this->abrir();
            $consulta = $this->conexion->prepare("DELETE FROM jugadores WHERE id_jugador=?");
            $consulta->bindParam(1, $this->id_jugador);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return $filas;
        }
    }
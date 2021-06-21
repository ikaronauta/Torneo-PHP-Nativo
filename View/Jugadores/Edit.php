<section>
    <div class="container"><br>
        <h2>Modificar Equipo</h2> <br>   

        <form action="Update.php" method="post">
            <div class="form-group">
                <label for="id_jugador">ID del Jugador</label>
                <input type="text" class="form-control" id="id_jugador" name="id_jugador" value="<?= $jugadorId->id_jugador ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del Jugador</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $jugadorId->nombre_jugador ?>">
            </div>
            <div class="form-group">
                <label for="posicion_jugador">Posicion del Jugador</label>
                <select class="form-control" id="posicion_jugador" name="posicion_jugador">
                    <?php foreach ($listaPosiciones as $posicion){ ?>
                        <option value="<?= $posicion->id_posicion ?>" <?php if($posicion->id_posicion == $jugadorId->posicion_jugador){ ?> selected <?php } ?>>
                            <?= $posicion->nombre_posicion ?>                      
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="equipo_jugador">Equipo</label>
                <select class="form-control" id="equipo_jugador" name="equipo_jugador">
                    <?php foreach ($listaEquipos as $equipo){ ?>
                        <option value="<?= $equipo->id_equipo ?>" <?php if($equipo->id_equipo == $jugadorId->equipo){ ?> selected <?php } ?>>
                            <?= $equipo->nombre_equipo ?>                      
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div><br>
</section>
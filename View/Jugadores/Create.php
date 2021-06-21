<br>
<section>
    <div class="container">
        <h2>Crar Jugador</h2>    

        <form action="Store.php" method="post">
            <div class="form-group">
                <label for="nombreJugador">Nombre del Jugador</label>
                <input type="text" class="form-control" id="nombreJugador" name="nombreJugador">
            </div>
            <div class="form-group">
                <label for="posicionJugador">Posicion del Jugador</label>
                <select class="form-control" id="posicionJugador" name="posicionJugador">
                    <?php foreach ($listaPosiciones as $posicion){ ?>
                        <option value="<?= $posicion->id_posicion ?>"><?= $posicion->nombre_posicion ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="equipoJugador">Equipo</label>
                <select class="form-control" id="equipoJugador" name="equipoJugador">
                    <?php foreach ($listaEquipos as $equipo){ ?>
                        <option value="<?= $equipo->id_equipo ?>"><?= $equipo->nombre_equipo ?></option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>
    </div><br>
</section>
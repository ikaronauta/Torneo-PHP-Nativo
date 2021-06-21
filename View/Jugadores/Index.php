<br>
<section>
    <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
        <h2>Lista de Jugadores</h2>    

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Posicion</th>
                    <th scope="col">Equipo</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaJugadores as $jugador) { ?>
                    <tr>
                        <th scope="row"><?= $jugador->id_jugador ?></th>
                        <td><?= $jugador->nombre_jugador ?></td>
                        <td><?= $jugador->n_posicion ?></td>
                        <td><?= $jugador->n_equipo ?></td>
                        <td><a class="btn btn-warning" href="Edit.php?id_jugador=<?= $jugador->id_jugador ?>" role="button">Actualizar</a></td>
                        <td><a class="btn btn-danger" href="Destroy.php?id_jugador=<?= $jugador->id_jugador ?>" role="button">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
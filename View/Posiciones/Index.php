<br>
<section>
    <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
        <h2>Lista de Posiciones</h2>    

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Posicion</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaPosiciones as $posicion) { ?>
                    <tr>
                        <th scope="row"><?= $posicion->id_posicion ?></th>
                        <td><?= $posicion->nombre_posicion ?></td>
                        <td><a class="btn btn-warning" href="Edit.php?id_posicion=<?= $posicion->id_posicion ?>" role="button">Actualizar</a></td>
                        <td><a class="btn btn-danger" href="Destroy.php?id_posicion=<?= $posicion->id_posicion   ?>" role="button">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
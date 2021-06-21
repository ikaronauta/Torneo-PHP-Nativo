<br>
<section>
    <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
        <h2>Lista de Equipos</h2><br>    

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Equipo</th>
                    <th scope="col">Director Tecnico</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaEquipos as $equipo) { ?>
                    <tr>
                        <th scope="row"><?= $equipo->id_equipo ?></th>
                        <td><?= $equipo->nombre_equipo ?></td>
                        <td><?= $equipo->dt_equipo ?></td>
                        <td><?= $equipo->n_municipio ?></td>
                        <td><a class="btn btn-warning" href="Edit.php?id_equipo=<?= $equipo->id_equipo ?>" role="button">Actualizar</a></td>
                        <td><a class="btn btn-danger" href="Destroy.php?id_equipo=<?= $equipo->id_equipo ?>" role="button">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
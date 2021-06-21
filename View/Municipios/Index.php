<br>
<section>
    <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
        <h2>Lista de Municipios</h2>    

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaMunicipios as $municipio) { ?>
                    <tr>
                        <th scope="row"><?= $municipio->id_municipio ?></th>
                        <td><?= $municipio->nombre_municipio ?></td>
                        <td><a class="btn btn-warning" href="Edit.php?id_municipio=<?= $municipio->id_municipio ?>" role="button">Actualizar</a></td>
                        <td><a class="btn btn-danger" href="Destroy.php?id_municipio=<?= $municipio->id_municipio ?>" role="button">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
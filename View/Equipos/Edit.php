<section>
    <div class="container">
        <h2>Modificar Equipo</h2> <br>   

        <form action="Update.php" method="post">
            <div class="form-group">
                <label for="id_equipo">ID del Equipo</label>
                <input type="text" class="form-control" id="id_equipo" name="id_equipo" value="<?= $equipoId->id_equipo ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del Equipo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $equipoId->nombre_equipo ?>">
            </div>
            <div class="form-group">
                <label for="dt_equipo">Director Tecnico</label>
                <input type="text" class="form-control" id="dt_equipo" name="dt_equipo" value="<?= $equipoId->dt_equipo ?>">
            </div>
            <div class="form-group">
                <label for="municipio">Municipio</label>
                <select class="form-control" id="municipio" name="municipio">
                    <?php foreach ($listaMunicipios as $municipio){ ?>
                        <option value="<?= $municipio->id_municipio ?>" <?php if($municipio->id_municipio == $equipoId->municipio){ ?> selected <?php } ?>>
                            <?= $municipio->nombre_municipio ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div><br>
</section>
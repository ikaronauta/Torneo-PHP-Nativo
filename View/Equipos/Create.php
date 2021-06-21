<br>
<section>
    <div class="container">
        <h2>Crar Equipo</h2>    

        <form action="Store.php" method="post">
            <div class="form-group">
                <label for="nombreEquipo">Nombre del Equipo</label>
                <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo">
            </div>
            <div class="form-group">
                <label for="dtEquipo">Director Tecnico</label>
                <input type="text" class="form-control" id="dtEquipo" name="dtEquipo">
            </div>
            <div class="form-group">
                <label for="municipio">Municipio</label>
                <select class="form-control" id="municipio" name="municipio">
                    <?php foreach ($listaMunicipios as $municipio){ ?>
                        <option value="<?= $municipio->id_municipio ?>"><?= $municipio->nombre_municipio ?></option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>
    </div><br>
</section>
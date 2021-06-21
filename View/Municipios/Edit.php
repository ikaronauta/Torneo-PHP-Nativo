<section>
    <div class="container">
        <h2>Modificar Municipio</h2>    

        <form action="Update.php" method="post">
            <div class="form-group">
                <label for="id_municipio">ID del Municipio</label>
                <input type="text" class="form-control" id="id_municipio" name="id_municipio" value="<?= $municipioId->id_municipio ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del Municipio</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $municipioId->nombre_municipio ?>">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div><br>
</section>
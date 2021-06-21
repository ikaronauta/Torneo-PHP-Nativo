<section>
    <div class="container">
        <h2>Modificar Posicion</h2>    

        <form action="Update.php" method="post">
            <div class="form-group">
                <label for="id_posicion">ID de la Posicion</label>
                <input type="text" class="form-control" id="id_posicion" name="id_posicion" value="<?= $posicionId->id_posicion ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nombrePosicion">Nombre de la Posicion</label>
                <input type="text" class="form-control" id="nombrePosicion" name="nombrePosicion" value="<?= $posicionId->nombre_posicion ?>">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div><br>
</section>
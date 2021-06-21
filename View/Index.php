    <section>
        <div class="container">
            <?php if (isset($_GET["accion"])) { ?>
                <div class="<?= $clase ?>" role="alert">
                    <?= $mensaje ?>
                </div>
            <?php } ?>
            
            <h1>Iniciar Sesión</h1>

        <form action="IniciarSesion.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena">
            </div><br>
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
            <a href="Logins/Create.php" class="btn btn-secondary">Registrarse</a>
        </form><br><br>        
        </div>    
    </section>
    

    

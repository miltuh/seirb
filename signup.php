<?php include_once 'config/init.php'; ?>

      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>SEIRB</title>
          <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
          <link rel="stylesheet" href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.css">
          <link rel="stylesheet" href="https://getbootstrap.com/docs/3.4/examples/jumbotron-narrow/jumbotron-narrow.css">
          <link rel="icon" type="image" href="favicon0.png">
        </head>
        <body>
          <div class="container">
              <div class="header clearfix">
                <nav class="navbar navbar-dark bg-dark">
                  <a class="navbar-brand" href="#">
          <img src="favicon.png" width="75" height="75" alt="logo">
                  </a>
                  <h3 class="text-muted" style="position:left;">SEIRB</h3>
                </nav>
            </div>

        <form action="lib/User.php" method="post" class="login100-form validate-form">
           Nombre:<br>
           <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nombre" required>
           <br>
           Apellido:<br>
           <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellido" required>
           <br>
           Email:<br>
           <input type="email" class="form-control" name="email" id="email" placeholder="Email" required data-validate = "Correo electrónico no válido: ejemplo@abc.xyz">
           <br>
           Contraseña:<br>
           <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required data-validate="Tu contraseña es necesaria">
           <br>
           <div class ="div">
           <br>
           <input type="submit" class="btn btn-default" name="submit" id="submit" value="Registrarse">
           <br><br>
           <label>¿Tienes una cuenta? <a href="login.php" style="color:pink;"><br>Inicia Sesión</a></label>
           </form>
   </div>
</body>

     <footer class="footer">
       <p>&copy; Milton Trigueros, 2020. </p>
     </footer>

   </div> <!-- /container -->


    </body>
</html>

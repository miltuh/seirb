<html>
<head>
   <meta charset="UTF-8">
   <title>
   </title>
</head>
<body>
   <div class="form">
       <form method ="post" action="signup.php">
           <h3 class = "signup"> Registrate </h3>
            <?php
       if(isset($error)) {
                       foreach($error as $error)
        {
                ?>
                              <div class="alert alert-danger">
                   <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                </div>
                <?php
           }
       }
       else if(isset($_GET['joined']))
       {
            ?>
            <div class="alert alert-info">
                 <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
            </div>
            <?php
       } ?>

           Nombre de Usuario:<br>
           <input type="text" name="username" id="username" placeholder="Nombre de Usuario" required>
           <br>
           Nombre:<br>
           <input type="text" name="first_name" id="first_name" placeholder="Nombre" required>
           <br>
           Apellido:<br>
           <input type="text" name="last_name" id="last_name" placeholder="Apellido" required>
           <br>
           Email:<br>
           <input type="email" name="email" id="email" placeholder="Email" required>
           <br>
           contraseña: <br>
           <input type="password" name="password" id="password" placeholder="contraseña" required>
           <br><br>
           <div class ="div">
           <input type="submit" name="submit" id="submit" value="Registrarse">
           <br><br>
           <label>Ya tienes una cuenta? <a href="index.php">Inicar sesion</a></label>
           </form>
   </div>
</body>
<?php include 'inc/footer.php' ?>

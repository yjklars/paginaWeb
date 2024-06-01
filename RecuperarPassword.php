<?php
include("conexion.php");
$con=conectar();

if($_SERVER['REQUEST_METHOD']==='POST'){
  $email=$_POST['email'];
  $alias=$_POST['alias'];
  $clave=$_POST['clave'];
  $sql1="SELECT email FROM usuario WHERE email='$email' and alias='$alias'";
  $query1=mysqli_query($con,$sql1);

  if(mysqli_num_rows($query1) > 0){
    $sql="UPDATE usuario SET clave='$clave' WHERE email='$email' and alias='$alias'";
    $query=mysqli_query($con,$sql);
    if($query){
      header("Location: RecuperarPassword.php");
    }
  }
  else{
    $error="Usuario o email incorrectos.";
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convergencia Literata</title>
    <link rel="stylesheet" href="Bootstrap/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-success-subtle">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="Images/dragon.png" class="rounded float-start border border-warning" alt="DragonIcono" height="50px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#"><strong>Convergencia Literata</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="IndexPrueba.php">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="NosotrosPrueba.php">NOSOTROS</a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">LOGIN</a>
              </li>
              -->
            </ul>
            <div class="d-flex">
                <a class="nav-link" href="FormularioPrueba.php">REGISTRO</a>
            </div>
          </div>
        </div>
    </nav>
    <!-- LOGIN MODAL
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">¡Bienvenido!</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="container text-center my-5 bg-success-subtle border border-5 border-success rounded-4">
                      <form class="row" novalidate>
                          <div class="col-12">
                              <label for="userInput" class="form-label">Usuario</label>
                              <input type="text" class="form-control focus-ring focus-ring-success text-center" id="userInput" placeholder="Escribe tu usuario">
                          </div>
                          <div class="col-12">
                              <label for="passwordInput" class="form-label">Contraseña</label>
                              <input type="password" class="form-control focus-ring focus-ring-success text-center" id="passwordInput" placeholder="Escribe tu contraseña">
                          </div>
                          <div class="col-12">
                              <button type="submit" class="btn btn-success my-3"><strong>Enviar</strong></button>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="modal-footer">
                <span>¿No estás registrado aún? <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="FormularioPrueba.php">Registrate.</a></span>
              </div>
          </div>
      </div>
  </div>
  -->

  <?php if(isset($error)){?>
  <div class="alert alert-danger text-center" role="alert">
      <strong><?php echo $error; ?></strong>
  </div>
  <?php }?>

    <!-- FORMULARIO DE RECUPERAR CONTRASEÑA -->

    <div class="container text-center mt-5">
      <h1>Recuperar contraseña</h1>
    </div>
    <div class="container mt-5 text-center">
      <p1>Puedes <strong>recuperar tu contraseña</strong>, cambiandola a una <strong>nueva</strong>, una vez sea verificado correctamente el <strong>usuario</strong> y el <strong>email</strong> asociado a su cuenta.</p1>
    </div>


    <div class="container my-5">
        <form method="POST" class="row needs-validation" novalidate>
            <div class="col-4"></div>
            <div class="col-4 row bg-success-subtle border border-5 border-success rounded-4 text-center">
                <label for="emailInput" class="form-label my-2">Email</label>
                <input type="email" class="form-control focus-ring focus-ring-success" name="email" id="emailInput" placeholder="Ingrese su email asociado al usuario" required>
                <label for="userInput" class="form-label my-2">Usuario</label>
                <input type="password" class="form-control focus-ring focus-ring-success mb-3" name="alias" id="userInput" placeholder="Ingrese su usuario" required>
                <label for="passwordInput" class="form-label my-2">Nueva contraseña</label>
                <input type="password" class="form-control focus-ring focus-ring-success mb-3" name="clave" id="passwordInput" placeholder="Ingrese su nueva contraseña" required>
            </div>
            <div class="col-4"></div>
            <div class="col-12"><br></div>
            <div class="col-5"></div>
            <div class="col-7 mb-4">
              <button type="submit" class="btn btn-success"><strong>Cambiar contraseña</strong></button>
            </div>
        </form>
    </div>

    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Divergencia Literata</h5>
      
              <p>
                Divergencia Literata es un espacio perfecto para amantes de la literatura. Se exploran las
                diferentes reviews de nuestros usuarios a partir de una gran cantidad de libros en nuestro catálogo.
              </p>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>
              <a href="https://www.whatsapp.com/?lang=es_LA" target="_blank"><img class="logosFooter" src="Images/whatsapp.png" alt="Logo whatsapp" height="30px" width="30px"></a>
              <a href="https://facebook.com/" target="_blank"><img class="logosFooter" src="Images/facebook.png" alt="Logo facebook" height="30px" width="30px"></a>
              <a href="https://instagram.com/" target="_blank"><img class="logosFooter" src="Images/instagram.png" alt="Logo instagram" height="30px" width="30px"></a>
            </div>
          </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
          <strong>© 2024 Copyright:</strong>
          <a class="link-success" href="#"><strong>Divergencia Literata</strong></a>
        </div>
      </footer>

    <script src="Bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
      })()
</script>
</body>
</html>
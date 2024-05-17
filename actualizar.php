<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuario WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
$intereses=explode(',',$row['areaInteres']);
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
            <ul class="navbar-nav">
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
              <li class="nav-item">
                <a class="nav-link" href="FormularioPrueba.php">REGISTRO</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container my-5 text-center">
        <h1>Actualizar Usuario ID: <?php echo $row['id'] ?></h1>
    </div>

    <!-- FORMULARIO DE LA PAGINA -->

    <div class="container my-5 bg-success-subtle border border-5 border-success rounded-4">
        <form action="update.php" method="POST" class="row needs-validation" novalidate>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <div class="col-6">
                <label for="nameInput" class="form-label">Nombre</label>
                <input type="text" class="form-control focus-ring focus-ring-success" name="nombre" id="nameInput" placeholder="Escribe tu nombre" value="<?php echo $row['nombre'];?>" required>
            </div>
            <div class="col-6">
                <label for="surnameInput" class="form-label">Apellido</label>
                <input type="text" class="form-control focus-ring focus-ring-success" name="apellido" id="surnameInput" placeholder="Escribe tu apellido" value="<?php echo $row['apellido'];?>" required>
            </div>
            <div class="col-6">
                <label for="userInput" class="form-label">Usuario</label>
                <input type="text" class="form-control focus-ring focus-ring-success" name="alias" id="userInput" placeholder="Escribe tu usuario" value="<?php echo $row['alias'];?>" required>
            </div>
            <div class="col-6">
                <label for="passwordInput" class="form-label">Contraseña</label>
                <input type="text" class="form-control focus-ring focus-ring-success" name="clave" id="passwordInput" placeholder="Escribe tu contraseña" value="<?php echo $row['clave'];?>" required>
            </div>
            <div class="col-12">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control focus-ring focus-ring-success" name="email" id="emailInput" placeholder="Escribe tu email" value="<?php echo $row['email'];?>" required>
            </div>
            <div class="col-12">
                <label for="addressInput" class="form-label">Dirección</label>
                <input type="text" class="form-control focus-ring focus-ring-success" name="direccion" id="addressInput" placeholder="Escribe tu primera dirección" value="<?php echo $row['direccion'];?>" required>
            </div>
            <div class="col-12">
                <label class="form-label">Dirección 2</label>
                <input type="text" class="form-control"  placeholder="Escribe tu segunda dirección" disabled>
            </div>
            <div class="col-4">
                <label for="" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control focus-ring focus-ring-success" name="fechaNacimiento" id="dateInput" value="<?php echo $row['fechaNacimiento'];?>" required>
            </div>
            <div class="col-4">
                <label for="ageInput" class="form-label">Edad</label>
                <input type="number" class="form-control focus-ring focus-ring-success" name="edad" id="ageInput" placeholder="Escribe tu edad" value="<?php echo $row['edad'];?>" required>
            </div>
            <div class="col-4">
                <label class="form-label">Sexo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="Masculino" <?php if($row['sexo'] == 'Masculino') echo "checked";?> required>
                    <label class="form-check-label" for="sexo">
                      Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="Femenino" <?php if($row['sexo'] == 'Femenino') echo "checked";?> required>
                    <label class="form-check-label" for="sexo">
                      Femenino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="Otro" <?php if($row['sexo'] == 'Otro') echo "checked";?> required>
                    <label class="form-check-label" for="sexo">
                      Otro
                    </label>
                </div>
            </div>
            <div class="col-6">
                <label class="form-label">Área de Interés</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion[]" value="Fantasía" id="flexCheck1" <?php if(in_array("Fantasía",$intereses)) echo "checked";?>>
                    <label class="form-check-label" for="flexCheck1">
                      Fantasía
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion[]" value="Terror" id="flexCheck2" <?php if(in_array("Terror",$intereses)) echo "checked";?>>
                    <label class="form-check-label" for="flexCheck2">
                      Terror
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion[]" value="Ciencia Ficción" id="flexCheck3" <?php if(in_array("Ciencia Ficción",$intereses)) echo "checked";?>>
                    <label class="form-check-label" for="flexCheck3">
                      Ciencia Ficción
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion[]" value="Misterio" id="flexCheck4" <?php if(in_array("Misterio",$intereses)) echo "checked";?>>
                    <label class="form-check-label" for="flexCheck4">
                      Misterio
                    </label>
                  </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descriptionInput" rows="3" name="descripcion" placeholder="Escribe una descripción que te gustaría compartir"><?php echo $row['descripcion'];?></textarea>
                  </div>
            </div>
            <div class="col-12"><br></div>
            <div class="col-5"></div>
            <div class="col-7 mb-4">
                <a href="PanelDeControl.php" class="btn btn-danger"><strong>Cancelar</strong></a>
                <button type="submit" class="btn btn-success"><strong>Modificar</strong></button>
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
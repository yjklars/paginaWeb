<?php
    include("conexion.php");
    $con=conectar();
    if(isset($_POST['nombre'])) {
        $nombre=$_POST['nombre'];
        $sql = "SELECT * FROM usuario WHERE nombre LIKE '$nombre%'";
        $query = mysqli_query($con, $sql);
    }
    else{
        $sql="SELECT * FROM usuario";
        $query=mysqli_query($con,$sql);
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
        <h1>Panel de control de usuarios</h1>
    </div>

    <!-- FORMULARIO DE LA PAGINA -->



    <div class="container my-5 bg-success-subtle border border-5 border-success rounded-4">
        <form action="insertarPanel.php" method="POST" class="row needs-validation" novalidate>
            <div class="col-6">
                <label for="nameInput" class="form-label">Nombre</label>
                <input type="text" class="form-control focus-ring focus-ring-success" name="nombre" id="nameInput" placeholder="Escribe tu nombre" required>
            </div>
            <div class="col-6">
                <label for="surnameInput" class="form-label">Apellido</label>
                <input type="text" class="form-control focus-ring focus-ring-success" name="apellido" id="surnameInput" placeholder="Escribe tu apellido" required>
            </div>
            <div class="col-6">
                <label for="userInput" class="form-label">Usuario</label>
                <input type="text" class="form-control focus-ring focus-ring-success" name="alias" id="userInput" placeholder="Escribe tu usuario" required>
            </div>
            <div class="col-6">
                <label for="passwordInput" class="form-label">Contraseña</label>
                <input type="password" class="form-control focus-ring focus-ring-success" name="clave" id="passwordInput" placeholder="Escribe tu contraseña" required>
            </div>
            <div class="col-12">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control focus-ring focus-ring-success" name="email" id="emailInput" placeholder="Escribe tu email" required>
            </div>
            <div class="col-12">
                <label for="addressInput" class="form-label">Dirección</label>
                <input type="text" class="form-control focus-ring focus-ring-success" name="direccion" id="addressInput" placeholder="Escribe tu primera dirección" required>
            </div>
            <div class="col-12">
                <label class="form-label">Dirección 2</label>
                <input type="text" class="form-control"  placeholder="Escribe tu segunda dirección" disabled>
            </div>
            <div class="col-4">
                <label for="" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control focus-ring focus-ring-success" name="fechaNacimiento" id="dateInput" required>
            </div>
            <div class="col-4">
                <label for="ageInput" class="form-label">Edad</label>
                <input type="number" class="form-control focus-ring focus-ring-success" name="edad" id="ageInput" placeholder="Escribe tu edad" required>
            </div>
            <div class="col-4">
                <label class="form-label">Sexo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="Masculino" required>
                    <label class="form-check-label" for="sexo">
                      Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="Femenino" required>
                    <label class="form-check-label" for="sexo">
                      Femenino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="Otro" required>
                    <label class="form-check-label" for="sexo">
                      Otro
                    </label>
                </div>
            </div>
            <div class="col-6">
                <label class="form-label">Área de Interés</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion[]" value="Fantasía" id="flexCheck1">
                    <label class="form-check-label" for="flexCheck1">
                      Fantasía
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion[]" value="Terror" id="flexCheck2" >
                    <label class="form-check-label" for="flexCheck2">
                      Terror
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion[]" value="Ciencia Ficción" id="flexCheck3" >
                    <label class="form-check-label" for="flexCheck3">
                      Ciencia Ficción
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion[]" value="Misterio" id="flexCheck4" >
                    <label class="form-check-label" for="flexCheck4">
                      Misterio
                    </label>
                  </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descriptionInput" rows="3" name="descripcion" placeholder="Escribe una descripción que te gustaría compartir"></textarea>
                  </div>
            </div>
            <div class="col-12"><br></div>
            <div class="col-5"></div>
            <div class="col-7 mb-4">
                <button type="submit" class="btn btn-success"><strong>Agregar usuario</strong></button>
            </div>
        </form>
    </div>


    <div class="container text-center">
        <div class="row">
            <div class="col-4"></div>
            <form class="col-4 bg-success-subtle border-success rounded-4 border border-1" action="PanelDeControl.php" method="POST">
                <input class="form-control my-2" type="text" id="name" name="nombre" placeholder="Buscar por nombre">
                <a class="btn btn-primary my-2" href="PanelDeControl.php">Reset</a>
                <button class="btn btn-primary my-2" type="submit">Buscar</button>
            </form>
            <div class="col-4"></div>
        </div>
    </div>

    <!-- Panel de control -->
    <div class="my-5">
        <div class="col">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>ALIAS</th>
                        <th>CLAVE</th>
                        <th>EMAIL</th>
                        <th>DIRECCION</th>
                        <th>NACIMIENTO</th>
                        <th>EDAD</th>
                        <th>SEXO</th>
                        <th>INTERES</th>
                        <th>DESCRIPCION</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=mysqli_fetch_array($query)){ 
                    ?>
                        <tr>
                            <th><?php echo $row['id']?></th>
                            <th><?php echo $row['nombre']?></th>
                            <th><?php echo $row['apellido']?></th>
                            <th><?php echo $row['alias']?></th>
                            <th><?php echo $row['clave']?></th>
                            <th><?php echo $row['email']?></th>
                            <th><?php echo $row['direccion']?></th>
                            <th><?php echo $row['fechaNacimiento']?></th>
                            <th><?php echo $row['edad']?></th>
                            <th><?php echo $row['sexo']?></th>
                            <th><?php echo $row['areaInteres']?></th>
                            <th><?php echo $row['descripcion']?></th>
                            <th>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminacion-<?php echo $row['id'];?>">
                                    Eliminar
                                </button>
                                <div class="modal fade" id="ModalEliminacion-<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que desea eliminar el usuario seleccionado?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="actualizar.php?id=<?php echo $row['id'];?>" class="btn btn-info">Editar</a>
                            </th>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
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
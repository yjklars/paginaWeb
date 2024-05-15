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
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="FormularioPrueba.php">REGISTRO</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">¡Bienvenido!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container text-center my-5 bg-success-subtle border border-5 border-success rounded-4">
                        <form class="row">
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

    <div class="container-sm my-3 mb-3 d-none d-sm-block">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Images/MordorBanner.png" class="d-block w-100 object-fit-none" alt="..." width="800" height="400">
              <div class="carousel-caption d-none d-md-block">
                <h1>"Mordor"</h1>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/RivendelBanner.png" class="d-block w-100 object-fit-none" alt="..." width="800" height="400">
              <div class="carousel-caption d-none d-md-block">
                <h1>"Rivendel"</h1>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/GondorBanner.png" class="d-block w-100" alt="..." width="800" height="400">
              <div class="carousel-caption d-none d-md-block">
                <h1>"Gondor"</h1>
              </div>
            </div>
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="my-5">¡Bienvenido/a a <strong>Convergencia Literata</strong>!</h1>
            </div>
            <div class="col-12 my-3">
                <p>¡Únete a nosotros en <b>Convergencia Literata</b> y sé parte de esta emocionante comunidad literaria!</p>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button focus-ring focus-ring-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                            <h3>¿Quiénes somos?</h3>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Somos un apasionado equipo de entusiastas de la literatura que se han unido para crear un espacio virtual donde los amantes de los libros, 
                                cómics, mangas y novelas pueden reunirse, 
                                compartir ideas, y discutir sobre sus obras favoritas.
                            </p>
                            <p>
                                En <b>Convergencia Literata</b>, creemos en la importancia de la diversidad de géneros, estilos y culturas en la literatura. Nos esforzamos por ofrecer un espacio donde se celebre la variedad y
                                se promueva el intercambio de ideas de manera respetuosa y constructiva.
                            </p>
                            <p>
                                Nuestro equipo está comprometido en proporcionar una experiencia positiva para todos nuestros miembros,
                                ya sea que estén buscando recomendar su próxima lectura, participar en debates apasionados sobre tramas y personajes,
                                o simplemente compartir su amor por la escritura y la narrativa visual.
                            </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button focus-ring focus-ring-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                              <h3>¿Cuál es nuestra visión?</h3>
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>En <b>Convergencia Literata</b>, visualizamos un mundo donde la literatura en todas sus formas es valorada, 
                                celebrada y accesible para todos. Nos esforzamos por crear una comunidad global de lectores apasionados que 
                                encuentren inspiración, conexión y enriquecimiento a través de la diversidad de historias
                                 y narrativas que ofrecen los libros, cómics, mangas y novelas.</p>
                          </div>
                        </div>
                      </div>
                </div>
                </p>
                <p><strong>¡Gracias por visitarnos!</strong></p>
            </div>
        </div>
    </div>

    <div class="container-sm my-5">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h1>Nuestro equipo</h1>
          </div>
          <div class="col">
            <div class="card border border-success border-2 float-end" style="width: 14rem;">
              <img src="Images/Cthulhu photo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Administrador principal</h4>
                <h5>"Serlan"</h5>
                <p class="card-text">Encargado de la redaccion y administracion de la discusiones del foro.</p>
                <div class="btn-group">
                    <a href="https://facebook.com/" class="btn btn-success" target="_blank"><img src="Images/facebooklogo.png" height="30px"></a>
                    <a href="https://instagram.com/" class="btn btn-success" target="_blank"><img src="Images/instragramlogo.png" height="35px"></a>
                    <a href="https://youtube.com/" class="btn btn-success"><img src="Images/youtubelogo.png" height="30px"></a>
                </div> 
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border border-success border-2" style="width: 14rem;">
                <img src="Images/Alpaca photo.png" class="card-img-top" alt="...">
                <div class="card-body ">
                  <h4 class="card-title">Colaborador principal</h4>
                  <h5>"Alpaca"</h5>
                  <p class="card-text">Encargador de moderar la interaccion entre usuarios dentro del foro.</p>
                  <div class="btn-group">
                    <a href="https://facebook.com/" class="btn btn-success" target="_blank"><img src="Images/facebooklogo.png" height="30px"></a>
                    <a href="https://instagram.com/" class="btn btn-success" target="_blank"><img src="Images/instragramlogo.png" height="35px"></a>
                    <a href="https://youtube.com/" class="btn btn-success"><img src="Images/youtubelogo.png" height="30px"></a>
                  </div> 
                </div>
            </div>
          </div>
        </div>
        <div class="row my-5">
            <div class="col-3">
                <div class="col-3">
                    <div class="card border border-success border-2 float-start" style="width: 10rem;">
                        <img src="Images/Astragos photo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Moderador</h4>
                            <h5>"Astragos"</h5>
                            <p class="card-text">Entusiasta de los videojuegos indie.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border border-success border-2" style="width: 10rem;">
                    <img src="Images/Sebx photo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Moderador</h4>
                        <h5>"Sebx"</h5>
                        <p class="card-text">Deportista profesional.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border border-success border-2" style="width: 10rem;">
                    <img src="Images/Stevn photo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Moderador</h4>
                        <h5>"Stevn"</h5>
                        <p class="card-text">Profesor de musica.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border border-success border-2" style="width: 10rem;">
                    <img src="Images/Yoseph photo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Moderador</h4>
                        <h5>"Yoseph"</h5>
                        <p class="card-text">Marinero de alta mar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center my-5"><h1>Postula para ser parte del equipo!</h1></div>

    <div class="container text-center my-5 bg-success-subtle border border-5 border-success rounded-4">
        <form class="row">
            <div class="col-12">
                <label for="nameInput" class="form-label">Nombre completo</label>
                <input type="text" class="form-control focus-ring focus-ring-success text-center" id="nameInput" placeholder="Escribe tu nombre completo">
            </div>
            <div class="col-12">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control focus-ring focus-ring-success text-center" id="emailInput" placeholder="Escribe tu email">
            </div>
            <div class="col-12">
                <label for="textInput" class="form-label">Características</label>
                <textarea type="textarea" class="form-control focus-ring focus-ring-success text-center" id="textInput" placeholder="Escribe tus razones por las que deberias pertenecer al equipo!"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success my-3"><strong>Enviar</strong></button>
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
</body>
</html>
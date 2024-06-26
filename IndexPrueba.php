<?php
include("conexion.php");
session_start();
$con=conectar();

if($_SERVER['REQUEST_METHOD']==='POST'){
  $alias=$_POST['alias'];
  $clave=$_POST['clave'];

  $sql="SELECT * FROM usuario WHERE alias='$alias' AND clave='$clave'";
  $query=mysqli_query($con,$sql);

  if(mysqli_num_rows($query)>0){
    $row=mysqli_fetch_array($query);
    $_SESSION['alias']=$row['alias'];
    $_SESSION['nombre']=$row['nombre'];
    $_SESSION['apellido']=$row['apellido'];
    $_SESSION['adm']=$row['adm'];
    if(isset($_SERVER['HTTP_REFERER'])){
      $url=$_SERVER['HTTP_REFERER'];
    }
    else{
      $url="IndexPrueba.php";
    }
    header("Location: $url");
    exit();
  }
  else{
    $error="Alias o contraseña incorrectos";
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
            <a class="nav-link" href="IndexPrueba.php"><strong>INICIO</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="NosotrosPrueba.php">NOSOTROS</a>
          </li>
          <?php if(isset($_SESSION['alias'])){ if($_SESSION['adm'] == '1'){ ?>
            <li class="nav-item">
              <a class="nav-link" href="PanelDeControl.php">Panel de Control</a>
            </li>
          <?php }}?>
        </ul>
        <?php if(!isset($_SESSION['alias'])){ ?>
        <div class="d-flex">
          <div class="p-2"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">LOGIN</a></div>
          <div class="p-2"><a class="nav-link" href="FormularioPrueba.php">REGISTRO</a></div>
        </div>
        <?php }?>
        <?php if(isset($_SESSION['alias'])){ ?>
        <div class="d-flex">
          <div class="p-2"><a class="nav-link" href="#"><strong><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido'];?></strong></a></div>
          <div class="p-2"><a class="nav-link" href="logout.php">LOGOUT</a></div>
        </div>
        <?php }?>
      </div>
    </div>
  </nav>
    
  <!-- Modal de logueo -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="container text-center"><h4><strong>¡Bienvenido!</strong></h4></div>
                  <div class="container text-center mt-5 mb-1 bg-success-subtle border border-5 border-success rounded-4">
                      <form class="row needs-validation" method="POST" novalidate>
                          <div class="col-12">
                              <label for="userInput" class="form-label">Usuario</label>
                              <input type="text" class="form-control focus-ring focus-ring-success text-center" id="userInput" name="alias" placeholder="Escribe tu usuario" required>
                          </div>
                          <div class="col-12">
                              <label for="passwordInput" class="form-label">Contraseña</label>
                              <input type="password" class="form-control focus-ring focus-ring-success text-center" id="passwordInput" name="clave" placeholder="Escribe tu contraseña" required>
                          </div>
                          
                          <div class="col-12">
                              <button type="submit" class="btn btn-success my-3"><strong>Enviar</strong></button>
                          </div>
                      </form>
                  </div>
                  <span>¿Olvidaste tu contraseña? <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="RecuperarPassword.php">Recuperar contraseña.</a></span>
              </div>
              <div class="modal-footer">
                <span>¿No estás registrado aún? <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="FormularioPrueba.php">Registrate.</a></span>
              </div>
          </div>
      </div>
  </div>
  
  <?php if(isset($error)){?>
  <div class="alert alert-danger text-center" role="alert">
      <strong><?php echo $error; ?></strong>
  </div>
  <?php }?>

  

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
  <div class="container text-center">
    <h1 class="my-5">RECOMENDACIÓN DEL MES!</h1>
  </div>
  <div class="container-sm my-5">
    <div class="row">
      <div class="col">
        <div class="card border border-success border-2">
          <img src="Images/Comunidad.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">"La Comunidad del Anillo"</h5>
            <p class="card-text">es el primer volumen de la trilogía épica escrita por J.R.R. Tolkien. Narra la odisea de Frodo Bolsón y un variado grupo de personajes, incluyendo elfos, enanos y humanos, quienes forman la Comunidad del Anillo para destruir un poderoso anillo capaz de sumir a la Tierra Media en la oscuridad. A lo largo de su viaje, enfrentan numerosos peligros y desafíos, mientras se ven acosados por los siervos del Señor Oscuro, Sauron.</p>
            <a href="https://www.youtube.com/watch?v=CL_3mlOPnGI" target="_blank" class="btn btn-success">"Los hobbits, pequeñas criaturas..."</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card ">
          <img src="Images/DosTorres.png" class="card-img-top" alt="...">
          <div class="card-body border border-success border-2">
            <h5 class="card-title">"Las Dos Torres"</h5>
            <p class="card-text">es el segundo volumen de la trilogía épica escrita por J.R.R. Tolkien. La historia continúa con la Comunidad del Anillo dividida después de la traición de Boromir y la captura de Frodo y Sam por Gollum. Mientras tanto, Aragorn, Legolas y Gimli se embarcan en la búsqueda de los hobbits secuestrados, mientras que Merry y Pippin se encuentran en manos de los orcos de Saruman. La novela narra las luchas de estos grupos separados contra las fuerzas del mal, así como la creciente amenaza del resurgimiento de Sauron.</p>
            <a href="https://www.youtube.com/watch?v=a_1EVCVYjO8" target="_blank" class="btn btn-success">"La era del hombre llegó a su fin..."</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border border-success border-2">
          <img src="Images/RetornoDelRey.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">"El Retorno del Rey"</h5>
            <p class="card-text">es el tercer volumen de la trilogía épica escrita por J.R.R. Tolkien. En esta entrega, la batalla final por el destino de la Tierra Media alcanza su clímax. Mientras Frodo y Sam continúan su peligroso viaje hacia el Monte del Destino para destruir el Anillo Único, las fuerzas de la Oscuridad se reúnen para lanzar un ataque devastador contra Gondor y Rohan. La novela narra las heroicas acciones de Aragorn, Gandalf y otros personajes en la lucha contra Sauron, así como el destino final del Anillo y el futuro de la Tierra Media.</p>
            <a href="https://www.youtube.com/watch?v=4s2gNErMozc" target="_blank" class="btn btn-success">"¿Qué nos deparará el destino?..."</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
    <h1 class="my-5">HOBBITS</h1>
  </div>

  <div class="container my-5">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button focus-ring focus-ring-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            "Frodo Bolsón"
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Frodo Bolsón es el principal protagonista de "El Señor de los Anillos"</strong>, creado por J.R.R. Tolkien. Es un hobbit de la Comarca, descendiente de una distinguida familia hobbit, los Bolsón. Frodo es un personaje valiente y compasivo que se ve empujado a una aventura épica cuando se le confía la tarea de destruir el Anillo Único, una tarea de inmensa importancia para salvar a la Tierra Media de la oscuridad. A lo largo de su viaje, Frodo muestra una gran determinación y coraje, enfrentándose a numerosos peligros y tentaciones mientras lucha contra la influencia corruptora del Anillo. Aunque inicialmente es un personaje más ingenuo e inocente, su carácter se va forjando a medida que avanza la historia, demostrando una notable capacidad para resistir el poder maligno del Anillo y mantenerse fiel a su misión. Su amistad y lealtad hacia sus compañeros de la Comunidad del Anillo, así como su compasión por los demás, son rasgos destacados de su personalidad. Frodo representa la lucha contra el mal y la perseverancia en la búsqueda del bien, y su viaje es un arco de desarrollo personal que lo transforma de un hobbit apacible a un héroe destinado a marcar la historia de la Tierra Media.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed focus-ring focus-ring-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            "Samwise Gamgee"
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Samwise Gamgee, comúnmente conocido como Sam</strong>, es un personaje fundamental en "El Señor de los Anillos" de J.R.R. Tolkien. Es el fiel amigo y compañero de Frodo Bolsón en su viaje para destruir el Anillo Único. Sam es un hobbit de la Comarca, de origen humilde pero con un corazón valiente y leal. A lo largo de la historia, Sam demuestra una devoción inquebrantable hacia Frodo, mostrando un coraje excepcional y una determinación inagotable para protegerlo y apoyarlo en cada paso del viaje. Su fortaleza emocional y física son fundamentales para el éxito de la misión de destruir el Anillo, ya que es capaz de superar numerosos obstáculos y desafíos con ingenio y valentía. Además de su lealtad hacia Frodo, Sam también muestra una profunda conexión con la naturaleza y un sentido de responsabilidad hacia su hogar, la Comarca. Su humildad y su capacidad para encontrar la belleza y la esperanza en los momentos más oscuros lo convierten en un personaje entrañable y memorable. Sam es más que un simple compañero de viaje; es un héroe en su propio derecho, cuyo sacrificio y valentía desempeñan un papel crucial en la derrota de Sauron y la salvación de la Tierra Media. Su historia es un testimonio del poder de la amistad y la fuerza del espíritu humano ante la adversidad.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed focus-ring focus-ring-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            "Meriadoc Brandigamo"
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Meriadoc "Merry" Brandigamo es otro de los destacados hobbits en "El Señor de los Anillos" de J.R.R. Tolkien.</strong> Aunque inicialmente puede parecer más jovial y despreocupado que algunos de sus compañeros, Merry demuestra ser valiente y leal en momentos de peligro. Merry se une a Frodo Bolsón y Samwise Gamgee en su viaje hacia Mordor, pero su camino toma un giro inesperado cuando es capturado por los orcos y llevado a Isengard. Allí, él y su amigo Pippin se encuentran con el Ent Barbárbol y, gracias a su astucia, logran influir en los acontecimientos de manera significativa. A lo largo de la historia, Merry muestra un gran sentido de la responsabilidad y un ingenio agudo, especialmente en situaciones de peligro. Aunque es más joven que Frodo y Sam, su valentía y su disposición para ayudar a sus amigos lo convierten en un personaje valioso en la Comunidad del Anillo. La participación de Merry en la batalla de la Pellanor Fields es especialmente destacada, donde demuestra su habilidad en la lucha y su determinación para enfrentarse al enemigo. Su papel en la derrota de Sauron y en la restauración de la paz en la Tierra Media es un testimonio de su valentía y su dedicación a la causa.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed focus-ring focus-ring-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            "Peregrin Tuk"
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Peregrin "Pippin" Tuk es otro de los queridos hobbits en "El Señor de los Anillos" de J.R.R. Tolkien.</strong> Al principio, Pippin puede parecer un poco más despreocupado y travieso que sus compañeros, pero a medida que avanza la historia, demuestra ser valiente y leal, dispuesto a arriesgarlo todo por sus amigos y por la causa. Pippin se une a la Comunidad del Anillo junto con Frodo Bolsón, Samwise Gamgee y Merry Brandigamo en su viaje hacia Mordor. Su curiosidad a menudo lo mete en problemas, pero también lo lleva a descubrir información valiosa que resulta crucial en la lucha contra el mal. A lo largo de la aventura, Pippin muestra un profundo sentido de lealtad hacia sus amigos y una valentía sorprendente en situaciones peligrosas. Su relación con Merry es especialmente cercana, y juntos enfrentan numerosos desafíos con ingenio y coraje. Pippin también desempeña un papel importante en la batalla de Gondor, donde su valentía y su habilidad en la lucha son cruciales para la victoria. A pesar de su naturaleza jovial, Pippin demuestra ser un verdadero héroe, dispuesto a sacrificarse por el bien mayor y a enfrentarse al mal para proteger a aquellos a quienes ama.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed focus-ring focus-ring-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            "Bilbo Bolsón"
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Bilbo Bolsón es un personaje central en el universo de "El Señor de los Anillos"</strong>, creado por J.R.R. Tolkien. Es el protagonista de "El Hobbit", una historia que precede a los eventos de la trilogía principal. Bilbo es un hobbit de la Comarca, conocido por su amor por la paz, la comodidad y la buena comida. Aunque al principio parece ser un hobbit bastante ordinario y hogareño, Bilbo es arrastrado a una aventura inesperada cuando el mago Gandalf y un grupo de enanos llegan a su puerta en busca de un ladrón experto. A lo largo de "El Hobbit", Bilbo demuestra su astucia, ingenio y coraje mientras se enfrenta a trolls, arañas gigantes y, finalmente, al temible dragón Smaug. En "El Señor de los Anillos", Bilbo desempeña un papel fundamental como el portador original del Anillo Único. Aunque inicialmente es renuente a dejar el Anillo, eventualmente lo entrega a su sobrino Frodo Bolsón, iniciando así la búsqueda para destruirlo. A lo largo de la historia, Bilbo actúa como mentor y figura paterna para Frodo, proporcionándole sabiduría y consejo. Aunque ya es anciano para los estándares hobbits, Bilbo sigue siendo un personaje vital y valiente. Su participación en la historia es fundamental para el desarrollo del Anillo y su impacto en la Tierra Media. Además, su amor por la aventura y su generosidad hacia sus amigos lo convierten en uno de los personajes más queridos y memorables de la obra de Tolkien.
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
    <h2 class="my-5">TOPS PERSONAJES MAS QUERIDOS POR LOS LECTORES</h2>
  </div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Personaje</th>
          <th scope="col">Lugar de Origen</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Gollum</td>
          <td>La Comarca</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Gandalf</td>
          <td>Aman</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Samsagaz "Sam" Gamyi</td>
          <td>La Comarca</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Aragorn, hijo de Arathorn</td>
          <td>Eriador</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Frodo Bolsón</td>
          <td>La Comarca</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Sauron, El señor Oscuro</td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Legolas Hojaverde, hijo de Thranduil.</td>
          <td>Bosque Negro</td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Arwen</td>
          <td>Rivendel</td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Saruman el Blanco</td>
          <td>Aman</td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Gimli, hijo de Glóin</td>
          <td>Montañas Azules</td>
        </tr>
      </tbody>
    </table>
  </div>


  <div class="container text-center">
    <h1 class="my-5">LUGARES DE LA TIERRA MEDIA</h1>
  </div>
  <div class="container text-center">
    <h3 class="my-5">"La Comarca"</h1>
  </div>
  <div class="container">
    <div class="card border border-success">
      <img src="Images/LaComarca.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><strong>La Comarca</strong> es un idílico y apacible lugar situado en la Tierra Media, conocido por ser el hogar de los hobbits. Es un territorio agrícola y rural, caracterizado por sus campos verdes, colinas suaves, ríos serenos y pequeños pueblos dispersos. Los hobbits que habitan la Comarca son conocidos por su amor por la paz, la buena comida y la tranquilidad, y su sociedad se rige por costumbres simples y tradiciones arraigadas. Los asentamientos más importantes de la Comarca incluyen Bolsón Cerrado, donde vive Frodo Bolsón, y Hobbiton, el pueblo más grande y animado, donde se encuentra la famosa Colina de Bolsón y la icónica Casa de Bolsón. Los hobbits son conocidos por sus casas acogedoras, construidas en agujeros hobbit bajo las colinas y adornadas con jardines exuberantes y flores brillantes. La Comarca es un lugar donde la vida transcurre en paz y armonía, lejos de las intrigas y las amenazas del mundo exterior. Sus habitantes disfrutan de una existencia tranquila, dedicados a la agricultura, la música, las fiestas y los placeres simples de la vida. Sin embargo, esta tranquilidad se ve amenazada cuando el mal acecha en forma de Sauron y su Anillo Único, lo que obliga a los hobbits a embarcarse en una peligrosa aventura para proteger su hogar y su forma de vida.</p>
      </div>
    </div>
  </div>
  <div class="container text-center">
    <h3 class="my-5">"Rivendel"</h1>
  </div>
  <div class="container">
    <div class="card border border-success">
      <img src="Images/Rivendel.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><strong>Rivendel</strong>, también conocido como Imladris en la lengua élfica, es un refugio élfico ubicado en las laderas de las Montañas Nubladas en la Tierra Media. Es un lugar de belleza incomparable, rodeado de naturaleza exuberante y paisajes pintorescos. Rivendel es conocido por su tranquilidad y su aura de misterio, siendo un refugio seguro para aquellos que buscan consejo, sanación y protección contra las fuerzas del mal. El corazón de Rivendel es la Casa de Elrond, el señor élfico que gobierna la región. La casa está construida con elegancia y gracia, fusionando la arquitectura élfica con la belleza natural del entorno. Los jardines de Rivendel están llenos de flores y árboles, creando un ambiente sereno y pacífico que invita a la reflexión y la contemplación. Rivendel es un lugar de reunión para las razas libres de la Tierra Media, donde se celebran consejos y se forjan alianzas en la lucha contra la oscuridad. Es aquí donde se forma la Comunidad del Anillo, un grupo diverso de seres que se unen en la misión de destruir el Anillo Único. Además, Rivendel es conocido por su sabiduría y conocimiento antiguo, y sus bibliotecas y salones albergan una vasta cantidad de registros y artefactos de la historia de la Tierra Media. En resumen, Rivendel es un refugio de paz y sabiduría, un lugar donde la belleza natural se entrelaza con la historia y la magia, proporcionando un respiro en medio de las amenazas y los peligros del mundo exterior.</p>
      </div>
    </div>
  </div>

  <div class="container text-center">
    <h3 class="my-5">"Moria"</h1>
  </div>
  <div class="container mb-5">
    <div class="card border border-success">
      <img src="Images/Moria.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><strong>Moria</strong>, también conocida como Khazad-dûm en la lengua de los enanos, es una antigua y legendaria ciudad subterránea ubicada en las profundidades de las Montañas Nubladas en la Tierra Media. Es famosa por su inmensa riqueza mineral y su magnífica arquitectura enana, pero también por su trágico destino. Antaño, Moria fue el hogar próspero y majestuoso de los enanos, donde se labraban las más maravillosas obras de arte y se extraían los más preciados metales y gemas. Sin embargo, su grandeza fue empañada por la llegada del Balrog, una criatura de fuego y sombra, que desencadenó una guerra en las profundidades de la tierra. Desde entonces, Moria se convirtió en una ciudad abandonada y maldita, envuelta en oscuridad y peligro. Cuando la Comunidad del Anillo emprende su viaje hacia Mordor, atraviesan Moria en su camino hacia el otro lado de las Montañas Nubladas. Lo que encuentran es un laberinto de túneles oscuros y cámaras olvidadas, habitados por orcos, trolls y el mismo Balrog que acabó con la gloria de la ciudad enana. Moria es un lugar de belleza y terror, un recordatorio de la grandeza perdida de los enanos y de la implacable naturaleza del mal en la Tierra Media. Su historia está llena de misterio y tragedia, y su mera presencia evoca un sentido de temor y asombro en aquellos que se aventuran en sus profundidades.</p>
      </div>
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
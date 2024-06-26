<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convergencia Literata</title>
    <link rel="stylesheet" href="CSS/Login/stylesLogin.css">
</head>
<body>
    <div id="divGeneral">
        <header>
            <nav>
                <img id="iconoDragon" src="Images/dragon.png" alt="DragonIcono">
                <ul>
                    <li><a href="IndexPrueba.html">Inicio</a></li>
                    <li><a href="NosotrosPrueba.html">Nosotros</a></li>
                    <li><a href="Login.html">Login</a></li>
                    <li><a href="FormularioPrueba.html">Registro</a></li>
                </ul>
            </nav>
        </header>
        <div id="divBanner">
            <img id="imagenBanner" src="Images/GOLDEN_HOUR.png" alt="Banner">
        </div>
    
    
        <div class="conteinerLogin">
    
            <h1>¡Bienvenido!</h1>
            <h3>Escribe tus credenciales</h3>
            <form action="">
                <div><label for="first">
                    Usuario:</label>
                    <input type="text"
                     id="first"
                     name="first"
                     placeholder="Escribe tu usuario" required>
                </div>
                <di><label for="password">
                        Contraseña:</label>
                        <input type="password"
                         id="password"
                         name="password"
                         placeholder="Escribe tu contraseña" required>
                </di>
                
     
                <div>
                    <br>
                    <button type="submit"
                            onclick="solve()">
                        Registrar
                    </button>
                </div>
            </form>
            <p>¿Aún no estás registrado? 
                  <a href="#">
                    Crea una cuenta
                </a>
            </p>
        </div>
    
        
    
    
        <footer id="footer">
            <div class="divFooter">
                <h1 class="tituloFooter">Divergencia Literata</h1>
                <p class="textoFooter">Divergencia Literata es un espacio perfecto para amantes de la literatura. Se exploran las
                    diferentes reviews de nuestros usuarios a partir de una gran cantidad de libros en nuestro catálogo.
               </p>
            </div>
            <div class="divFooter">
                <h1 class="tituloFooter">Tiendas Asociadas</h1>
                <p class="textoFooter"><a href="https://www.antartica.cl/" target="_blank">Antártica</a></p>
                <p class="textoFooter"><a href="https://feriachilenadellibro.cl/" target="_blank">Feria Chilena del Libro</a></p>
                <p class="textoFooter"><a href="https://contrapunto.cl/" target="_blank">Contrapunto</a></p>
            </div>
            <div class="divFooter">
                <a href="https://www.whatsapp.com/?lang=es_LA" target="_blank"><img class="logosFooter" src="Images/whatsappwhite.png" alt="Logo whatsapp"></a>
                <br>
                <a href="https://facebook.com/" target="_blank"><img class="logosFooter" src="Images/facebookwhite.png" alt="Logo facebook"></a>
                <br>
                <a href="https://instagram.com/" target="_blank"><img class="logosFooter" src="Images/instagramwhite.png" alt="Logo instagram"></a>
            </div>
            <div id="divAutor">
                <p><b>© 2024 Brandon Cubillos B.</b></p>
            </div>
        </footer>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convergencia Literata</title>
    <link rel="stylesheet" href="CSS/Formulario/stylesFormulario.css">
</head>
<body>
    <div id="divGeneral">
        <header>
            <nav>
                <img id="iconoDragon" src="Images/dragon.png" alt="DragonIcono">
                <ul>
                    <li><a href="Index2.html">Inicio</a></li>
                    <li><a href="Nosotros.html">Nosotros</a></li>
                    <li><a href="Login.html">Login</a></li>
                    <li><a href="Formulario.html">Registro</a></li>
                </ul>
            </nav>
        </header>
        <div id="divBanner">
            <img id="imagenBanner" src="Images/GOLDEN_HOUR.png" alt="Banner">
        </div>
    
        <form class="formulario">
            <div class="divFormulario">
                <div class="divLabel"><label class="labelFormulario" for="nombre">Nombre:</label></div>
                <div class="divInput"><input class="inputFormulario" id="nombre" name="name" type="text"></div>
                
            </div>
            <div class="divFormulario">
                <div class="divLabel"><label class="labelFormulario" for="apellido">Apellido:</label></div>
                <div class="divInput"><input class="inputFormulario" id="apellido" name="surname" type="text"></div>
            </div>
            <div class="divFormulario">
                <div class="divLabel"><label class="labelFormulario" for="usuario">Usuario:</label></div>
                <div class="divInput"><input class="inputFormulario" id="usuario" name="user" type="text"></div>
            </div>
            <div class="divFormulario">
                <div class="divLabel"><label class="labelFormulario" for="contrasenia">Contraseña:</label></div>
                <div class="divInput"><input class="inputFormulario contraseniaInput" id="contrasenia" name="pass" type="password"></div>
            </div>
            <div class="divFormulario">
                <div class="divLabel"><label class="labelFormulario" for="correo">Email:</label></div>
                <div class="divInput"><input class="inputFormulario" id="correo" name="email" type="email"></div>
            </div>
            <div class="divFormulario">
                <div class="divLabel"><label class="labelFormulario" for="direccion">Dirección:</label></div>
                <div class="divInput"><input class="inputFormulario" id="direccion" name="direction" type="text"></div>
            </div>
            <div class="divFormulario">
                <div class="divLabel"><label class="labelFormulario" for="fechanac" >Fecha de Nacimiento:</label></div>
                <div class="divInput"><input class="inputFormulario" id="fechanac" name="date" type="date"></div>
            </div>
            <div class="divFormulario">
                <div class="divLabel"><label class="labelFormulario" for="edad">Edad:</label></div>
                <div class="divInput"><input class="inputFormulario" id="edad" name="age" type="number"></div>
            </div>
            <div class="divFormulario">
                <div>
                    <div class="divLabel"><label class="labelFormulario" for="sexo">Sexo:</label></div>
                    <div class="divRadio divInput">
                        <input  id="sexo" name="sex" type="radio" value="Masculino"><span class="inputRadio">Masculino</span>
                        <br>
                        <input  id="sexo" name="sex" type="radio" value="Femenino"><span class="inputRadio">Femenino</span>
                        <br>
                        <input  id="sexo" name="sex" type="radio" value="Otros"><span class="inputRadio">Otros</span>
                    </div>
                </div>
            </div>
            <div class="divFormulario">
                <div>
                    <div class="divLabel"><label class="labelFormulario" for="areainteres">Área de Interés:</label></div>
                    <div class="divCheckbox divInput">
                        <input id="areainteres" name="area1" type="checkbox" value="Fantasia"><span class="inputCheckbox">Fantasía</span>
                        <br>
                        <input id="areainteres" name="area2" type="checkbox" value="Ficcion"><span class="inputCheckbox">Ficción</span>
                        <br>
                        <input id="areainteres" name="area3" type="checkbox" value="Ciencia-Ficcion"><span class="inputCheckbox">Ciencia Ficción</span>
                        <br>
                        <input id="areainteres" name="area4" type="checkbox" value="Misterio"><span class="inputCheckbox">Misterio</span>
                    </div>
                </div>
            </div>
            <div id="divButton" class="divFormulario">
                <button class="buttonFormulario" type="submit">Registrar</button>
            </div>
        </form>
    
    
    
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
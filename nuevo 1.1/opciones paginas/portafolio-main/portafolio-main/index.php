<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio | Mariana Arias Desarrolladora Web">
    <meta name="robots" content="index,follow">

    <title>Fallos comunes | DEPTO.INFORMATICA</title>

    <!-- Librerías -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="./assets/stylesheet/loader.css">
    <link rel="stylesheet" href="./assets/stylesheet/index.css">
    <link rel="stylesheet" href="./assets/stylesheet/tablet.css" media="screen and (min-width: 760px)">
    <link rel="stylesheet" href="./assets/stylesheet/desktop.css" media="screen and (min-width: 980px)">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/ae0fd6f99f.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>

<body>
    <div class="container--loader">
        <div class="loader"></div>
    </div>

    <header class="header">
        <img src="/images/logo-removebg-preview.png" alt="Logo Portafolio" class="logo__header">

        <nav class="nav_menu not-active">
            <a href="#home" class="active">Inicio</a>
            <a href="#sobreMi" data-section="menu" data-value="item2">Acerca de</a>
            <a href="#formacion" data-section="menu" data-value="item4">Prevencion</a>
            <a id="salir" href="/index1.php">Salir</a>




            <!-- Idiomas de la página -->
            <div id="flags" class="flags">
                <div class="flags__item" data-language="es">
                    <img src="./assets/images/icon-spain.png" alt="Español/Spain">
                </div>
                <div class="flags__item" data-language="en">
                    <img src="./assets/images/icon-en.png" alt="Inglés/English">
                </div>
            </div>
        </nav>

        <div id="button" class="btn not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <main>
        <!-- Home -->
        <section class="home" id="home">
            <picture class="container_image-home" data-aos="zoom-in">
                <img class="image_home" src="9741.png_860-removebg-preview.png" alt="Ilustración mujer y plantas">
            </picture>
            
            <div class="home_info">
                <div class="container_text-info">
                    <p class="home_text-1" data-section="home" data-value="home_text-1">FALLOS</p>
                    <p class="home_text-2">COMUNES</p>
                </div>

                <div>
                    <p class="home_text-3 text-type" data-section="home" data-value="home_text-3">DEPTO.INFORMATICA</p>
                </div>

                <div class="container_parrafo-info">
                    <p data-section="home" data-value="parrafo-info">"En esta página, te presentamos los fallos más comunes que pueden surgir en el ámbito de la informatica, especialmente enfocados en la seguridad de los datos y sistemas. Nuestro objetivo es no solo identificar estos problemas, sino también proporcionar posibles soluciones para prevenir y corregir estos errores.</p>
                </div>

                
                    
                </div>
            </div>

            
        </section>

        <!-- Sobre mí -->
        <section class="sobreMi" id="sobreMi">
            <h1 data-section="sobre-mi" data-value="title" data-aos="fade-up">Acerca de</h1>

            <div class="container_content-sobreMi" data-aos="fade-right">
                <div class="container_texto-sobreMi">
                    <span class="title_sobreMi">Fallos mas comunes en las computadoras</span>
                    <span class="texto_sobreMi" data-section="sobre-mi" data-value="texto_sobreMi">Los fallos en las computadoras pueden ser una verdadera molestia, interrumpiendo nuestras actividades diarias y afectando nuestra productividad.<br>Desde problemas con el arranque del sistema, hasta pantallas en blanco, pasando por el funcionamiento anómalo del software, el congelamiento de la pantalla, la lentitud de la computadora, ruidos extraños, Internet lento, sobrecalentamiento, caídas constantes de la conexión a Internet, y hasta la temida Pantalla Azul de la Muerte.</span>
                </div>
    
                <picture class="container_image-sobreMi">
                    <img class="image_sobreMi" src="2-removebg-preview.png" alt="Ilustración mujer y café">
                </picture>
            </div>
        </section>
        <!-- Formación -->
        <section class="formacion" id="formacion">
            <h1 data-section="formacion" data-value="title" data-aos="fade-up">Prevención</h1>

            <div class="cards_container--formacion">
                <div class="cards--formacion" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                    <img class="logo-unal" src="/opciones paginas/portafolio-main/portafolio-main/assets/Pantalla-negra.png" alt="Logo - Universidad Nacional de Colombia">
                    <div class="container_texto--formacion">
                        <p data-section="formacion" data-value="formacion1">Pantalla Negra</p>
                        <p data-section="formacion" data-value="tiempo-formacion1">No desconecte la PC ya que puede dañar los componentes</p>
                    </div>
                </div>

                <div class="cards--formacion" data-aos="fade-up" data-aos-duration="500">
                    <img class="logo-one" src="/opciones paginas/portafolio-main/portafolio-main/assets/images/pantalla-azul-windows-11-2651541.png" alt="Logo - ONE: Oracle Next Education">
                    <div class="container_texto--formacion">
                        <p data-section="formacion" data-value="formacion2">Pantalla Azul</p>
                        <p data-section="formacion" data-value="tiempo-formacion2">- No Forzar a apagarse a la maquina <br>- No intentar solucionar el problema <br>- Pedir ayuda al Depto.Informatica
                            
                        </p>
                    </div>
                </div>

                <div class="cards--formacion" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                    <img class="logo-sena" src="/opciones paginas/portafolio-main/portafolio-main/assets/images/ksy-06-why-is-my-computer-so-slow.png" alt="Logo - SENA">
                    <div class="container_texto--formacion">
                        <p data-section="formacion" data-value="formacion3">Computadora lenta</p>
                        <p>No forzar a la computadora <br>mejor llamar al Depto.Informatica</p>
                    </div>
                </div>
            </div>
        </section>

       
    <footer>
        <div class="contianer--footer">
            <div class="container_redes-footer">
                <a href="https://www.facebook.com/jhonycv768" target="_blank">
                    <img src="/opciones paginas/portafolio-main/portafolio-main/assets/images/facebook (1).png" alt="LinkedIn">
              
                <a href="https://www.instagram.com/jhoncv17?utm_source=qr&igsh=MWprZnVrNzFjOXM2cQ==" target="_blank">
                    <img src="./assets/images/icon-instagram.png" alt="Instagram">
                </a>
            </div>

            <div class="container_text--footer">
                <span>Copyright © | Coded with</span>
                <img src="/opciones paginas/portafolio-main/portafolio-main/assets/images/843331.png" alt="Corazón">
                <span>by</span>
                <span>Jhosmar Cuzco</span>
            </div>
        </div>
    </footer>

    <div class="go-top-container">
        <div class="go-top-button">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>

    <!-- Archivo Js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Librería de animaciones -->
    <script>
        AOS.init();
    </script>

    <!-- Mi script -->
    <script src="./script.js"></script>
</body>
</html>

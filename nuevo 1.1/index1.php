<?php
// Aquí puedes incluir archivos de configuración u otras lógicas PHP necesarias
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <title>DEPTO.INFORMATICA</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">DEPTO.INFORMATICA</h2>
            <nav>
                <a href="#" class="activo">Inicio</a>
                <a href="/opciones paginas/portafolio-main/portafolio-main/index.php">FALLO</a> <!-- Cambia "pagina2.html" por el nombre de tu otra página -->
                

            </nav>
        </div>
    </header>

    <main>
        <div class="pelicula-principal">
            <div class="contenedor">
                <h3 class="titulo">Reporte de fallos</h3>
                <p class="descripcion">
                    La página de reporte de fallos de nuestra entidad está diseñada para brindar a nuestros usuarios una forma sencilla y eficaz de informar sobre cualquier problema o fallo que puedan encontrar en nuestros servicios o plataformas. Nuestra plataforma de reporte de fallos ofrece un proceso claro y transparente para que los usuarios puedan comunicar de manera rápida y precisa cualquier incidencia que afecte su experiencia.
               </p>
                <button id="openReportFormButton" role="button" class="boton" onclick="redirectToReportes()"><i style="font-size:24px" class="fa">&#xf007;</i>Nuevo reporte</button>
 
<script>
    // Función para redirigir al usuario a la página de reportes.php
    function redirectToReportes() {
        window.location.href = "reportes.php";
    }
</script>

<button id="asistenciaPresencialButton" role="button" class="boton" onclick="redirigirWhatsApp()"><i class="fa fa-users"></i>Asistencia presencial</button>

<script>
    function redirigirWhatsApp() {
        // Mensaje predefinido
        var mensaje = "Buenos días ING, soy (Nombre de usuario) del área (aquí puedes agregar el área correspondiente). Solicito apoyo.";
        // Número de WhatsApp al que se enviará el mensaje
        var numeroWhatsApp = "918676480";
        // Generar el enlace de WhatsApp con el mensaje predefinido
        var enlaceWhatsApp = "https://api.whatsapp.com/send?phone=" + numeroWhatsApp + "&text=" + encodeURIComponent(mensaje);
        // Redirigir al enlace de WhatsApp
        window.location.href = enlaceWhatsApp;
    }
</script>

            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>

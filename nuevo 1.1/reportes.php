<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Fallos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="reportes.css">
</head>
<body>
    <h2>Reporte de Fallos</h2>
    <form action="ReportesFallas.php" method="POST">
        <input type="hidden" name="report_id" value="<?php echo sha1(uniqid(rand(), true)); ?>">
        <label for="area">Seleccione su área:</label>
        <select id="area" name="area" required>
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Alcaldia">Alcaldía</option>
            <option value="Secretaria General">Secretaría General</option>
            <option value="Gerencia">Gerencia</option>
            <option value="Secretaria de Gerencia">Secretaría de Gerencia</option>
            <option value="Abastecimientos">Abastecimientos</option>
            <option value="Tesorería">Tesorería</option>
            <option value="Rentas">Rentas</option>
            <option value="OPMI">OPMI</option>
            <option value="ATM">ATM</option>
            <option value="Gerencia de Infraestructura">Gerencia de Infraestructura</option>
            <option value="DEMUNA">DEMUNA</option>
            <option value="CATASTRO">CATASTRO</option>
            <option value="ALMACEN">ALMACEN</option>
            <option value="Desarrollo Social">Desarrollo Social</option>
            <option value="Archivo">Archivo</option>
            <option value="Patrimonio">Patrimonio</option>
            <option value="ULE">ULE</option>
            <option value="Recursos Humanos">Recursos Humanos</option>
        </select>
        <div>
            <label for="problema">Describa el problema o fallo que presenta:</label>
            <textarea id="problema" name="problema" rows="4" required></textarea>
        </div>
        <button type="submit">Enviar Reporte</button>
    </form>
    <script>
        // Obtener el icono de carga
        var uploadIcon = document.getElementById("upload-icon");

        // Obtener el elemento de entrada de tipo archivo
        var fileInput = document.getElementById("imagen");

        // Agregar un evento de clic al icono
        uploadIcon.addEventListener("click", function() {
            fileInput.click(); // Hacer clic en el input de tipo archivo cuando se hace clic en el icono
        });
    </script>
</body>
</html>

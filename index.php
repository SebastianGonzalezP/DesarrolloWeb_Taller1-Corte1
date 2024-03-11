<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Solicitudes</title>
</head>
<body>
    <form name="form-solicitudes" action="insert.php" onsubmit="return validarFormulario();" method="post">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" placeholder="Nombre completo" required>

        <label for="Correo">Correo electronico</label>
        <input type="text" name="Correo" placeholder="alguien@algo.com" required>

        <label for="Ciudad">Ciudad</label>
        <select name="Ciudad" id="Ciudad" required>
            <option>Elegir</option>
            <option value='1'>Leticia</option>
            <option value='2'>Medellín</option>
            <option value='3'>Arauca</option>
            <option value='4'>Barranquilla</option>
            <option value='5'>Bogotá</option>
            <option value='6'>Cartagena</option>
            <option value='7'>Tunja</option>
            <option value='8'>Manizales</option>
            <option value='9'>Florencia</option>
            <option value='10'>Yopal</option>
            <option value='11'>Popayán</option>
            <option value='12'>Valledupar</option>
            <option value='13'>Quibdó</option>
            <option value='14'>Montería</option>
            <option value='15'>Soacha</option>
            <option value='16'>Inírida</option>
            <option value='17'>San José del Guaviare</option>
            <option value='18'>Neiva</option>
            <option value='19'>Riohacha</option>
            <option value='20'>Santa Marta</option>
            <option value='21'>Villavicencio</option>
            <option value='22'>Pasto</option>
            <option value='23'>Cúcuta</option>
            <option value='24'>Mocoa</option>
            <option value='25'>Armenia</option>
            <option value='26'>Pereira</option>
            <option value='27'>San Andrés</option>
            <option value='28'>Bucaramanga</option>
            <option value='29'>Sincelejo</option>
            <option value='30'>Ibagué</option>
            <option value='31'>Cali</option>
            <option value='32'>Mitú</option>
            <option value='33'>Puerto Carreño</option>
        </select>

        <label for="Solicitud"></label>
        <textarea name="Solicitud" id="Solicitud" maxlength="255" placeholder="Tu solicitud, queja o reclamo...." required></textarea>
    
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
    </form>

    <h1>¿como enviar un correo con PHP?</h1>
    <p>Para enviar correos electrónicos con PHP, puedes emplear la función mail(). Primero, defines las variables para destinatario, asunto y mensaje. Luego, estableces cabeceras, como MIME-Version: 1.0, indicando que sigues las pautas de la versión 1.0 de MIME, que facilita la interpretación del formato del mensaje. Además, incluyes otras cabeceras como tipo de contenido y remitente. Finalmente, utilizas la función mail() con estas variables para enviar el correo. Es esencial configurar el servidor para el envío de correos y considerar el uso de librerías como PHPMailer para funcionalidades avanzadas y un mejor manejo de correos electrónicos</p>
    <h2>Ejemplo</h2>
    <p>
        $para = "destinatario@example.com";
        $asunto = "Asunto del correo";
        $mensaje = "Contenido del mensaje";

        // Cabeceras para especificar el formato y remitente
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: remitente@example.com' . "\r\n";

        // Enviar el correo
        mail($para, $asunto, $mensaje, $headers);
    </p>
</body>
</html>
<?php
echo '<script src="global/js/funciones.js"></script>';
?>
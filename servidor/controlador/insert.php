<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];
    $solicitud = $_POST["Solicitud"];

    // Aquí puedes validar o procesar los datos antes de guardarlos en la base de datos
}
?>
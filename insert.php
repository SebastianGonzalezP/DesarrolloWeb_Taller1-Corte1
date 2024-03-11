<?php

include "DbConection.php";

$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$ciudad = $_POST["Ciudad"];
$solicitud = $_POST["Solicitud"];

$query = "select id_quejas from quejas where correo_cliente = '$correo'";

$result = mysqli_query($conn,$query);

$html = "";

if(mysqli_num_rows($result) > 0){

    $html = "<div class='vertical-center-container framed'>
    <h1>Lo Siento</h1> <p>hola $nombre usted ya enviado una queja con antelación</p>
    </div>";

}else{
    
    $query = "insert into quejas(nombre_cliente,correo_cliente,id_ciudad,texto) values('$nombre','$correo','$ciudad','$solicitud')";
    
    $result = mysqli_query($conn,$query);

    $html = "<div class='vertical-center-container framed'>
    <h1>Perfecto</h1>
    <p>hola $nombre su solicitud fue guardada con exito</p>
    </div>";
    
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global/css/style.css">
    <title>Solicitud guardada</title>
</head>
<body>
    
    <?php echo $html ?>

    <div class="container">
        <button class="big-button interactuable" onclick="volver()">Volver</button>
    </div>

    <script>
        function volver(){
            window.history.back();
        }
    </script>
</body>
</html>
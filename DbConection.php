<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "quejas_acueducto_de_cerritos";
$port = "3306";

$conn = mysqli_connect($server,$user,$password,$database);

if(!$conn)
echo("Failled");

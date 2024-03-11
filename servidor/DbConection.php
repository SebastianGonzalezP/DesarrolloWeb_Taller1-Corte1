<?php

$server = "";
$user = "";
$password = "";
$database = "";
$port = "";

$conn = new mysqli($server, $user, $password, $database);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
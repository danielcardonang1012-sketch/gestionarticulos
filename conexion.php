<?php
$host = "mysql-cardonalan.alwaysdata.net";
$user = "cardonalan";
$password = "clase1234";
$database = "cardonalan_gestionarticulos";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
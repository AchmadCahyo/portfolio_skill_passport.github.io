<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "datasiswa";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("". mysqli_connect_error());
}
?>
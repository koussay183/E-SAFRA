<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'e-safra';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}

<?php
// systeme.php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'food_users';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}
?>

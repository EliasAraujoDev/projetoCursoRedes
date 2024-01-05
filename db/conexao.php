<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/projetocursoredes/configs/config.php";

$servername = DBLOCAL;
$username = USUARIO;
$password = SENHA;
$dbname = DBNOME;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}
?>

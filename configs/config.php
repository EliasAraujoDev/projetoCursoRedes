<?php
define('SGBD', 'mysql');
define('DBLOCAL', 'localhost');
define('DBNOME', 'projetoRede');
define('USUARIO', 'root');
define('SENHA', ''); // Sem senha para o usuário root

// Início da sessão
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


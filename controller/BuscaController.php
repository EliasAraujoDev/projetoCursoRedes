<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/projetocursoredes/configs/config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/projetocursoredes/db/conexao.php";

class BuscaController {
    public function buscarUsuarios($cpf) {
        global $conn;

        try {
            $sql = "SELECT * FROM usuarios WHERE cpf = :cpf";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar usuários: " . $e->getMessage();
            return array();
        }
    }
}
?>

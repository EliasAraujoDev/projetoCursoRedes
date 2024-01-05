<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/projeto/configs/config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/projeto/db/conexao.php";

class BuscaController {
    public function buscarUsuarios($cpf) {
        global $conn;

        try {
            $sql = "SELECT * FROM usuarios WHERE cpf = :cpf";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) > 0) {
                echo "<h3>Resultado da busca:</h3>";
                foreach ($result as $row) {
                    echo "Nome: " . $row['nome'] . "<br>";
                    echo "E-mail: " . $row['email'] . "<br>";
                    echo "CPF: " . $row['cpf'] . "<br><br>";
                }
            } else {
                echo "Nenhum usuário encontrado com o CPF informado.";
            }
        } catch (PDOException $e) {
            echo "Erro ao buscar usuários: " . $e->getMessage();
        }
    }
}
?>

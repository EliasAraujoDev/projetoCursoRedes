<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/projeto/configs/config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/projeto/db/conexao.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/projeto/model/usuario.php";

class CadastroController {
    public function cadastrarUsuario($nome, $email, $cpf) {
        global $conn;

        $usuario = new Usuario($nome, $email, $cpf);
        $sql = "INSERT INTO usuarios (nome, email, cpf) VALUES (:nome, :email, :cpf)";

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $usuario->nome);
            $stmt->bindParam(':email', $usuario->email);
            $stmt->bindParam(':cpf', $usuario->cpf);

            $stmt->execute();
            echo "Usuário cadastrado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
        }
    }
}
?>

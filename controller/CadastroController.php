<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/projetocursoredes/configs/config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/projetocursoredes/db/conexao.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/projetocursoredes/models/usuario.php";

class CadastroController {
    public function cadastrarUsuario($nome, $email, $cpf, $senha, $cad, $endereco, $complemento, $cidade, $cep) {
        global $conn;

        try {
            // Verifica se o CPF já está cadastrado
            $verificarCpf = $conn->prepare("SELECT cpf FROM usuarios WHERE cpf = :cpf");
            $verificarCpf->bindParam(':cpf', $cpf);
            $verificarCpf->execute();

            if ($verificarCpf->rowCount() > 0) {
                echo "CPF já cadastrado. Por favor, escolha outro.";
                return;
            }

            $usuario = new Usuario($nome, $email, $cpf, $senha, $cad, $endereco, $complemento, $cidade, $cep);
            $sql = "INSERT INTO usuarios (nome, email, cpf, senha, cad, endereco, complemento, cidade, cep) VALUES (:nome, :email, :cpf, :senha, :cad, :endereco, :complemento, :cidade, :cep)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $usuario->nome);
            $stmt->bindParam(':email', $usuario->email);
            $stmt->bindParam(':cpf', $usuario->cpf);
            $stmt->bindParam(':senha', $usuario->senha);
            $stmt->bindParam(':cad', $usuario->cad);
            $stmt->bindParam(':endereco', $usuario->endereco);
            $stmt->bindParam(':complemento', $usuario->complemento);
            $stmt->bindParam(':cidade', $usuario->cidade);
            $stmt->bindParam(':cep', $usuario->cep);

            $stmt->execute();
            echo "Usuário cadastrado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
        }
    }
}
?>

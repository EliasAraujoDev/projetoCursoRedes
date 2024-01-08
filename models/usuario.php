<?php
class Usuario {
    public $nome;
    public $email;
    public $cpf;
    public $senha; // Adicionado campo senha
    public $endereco; // Adicionado campo endereço
    public $complemento; // Adicionado campo complemento
    public $cidade; // Adicionado campo cidade
    public $cep; // Adicionado campo CEP

    public function __construct($nome, $email, $cpf, $senha, $endereco, $complemento, $cidade, $cep) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->endereco = $endereco;
        $this->complemento = $complemento;
        $this->cidade = $cidade;
        $this->cep = $cep;
    }
}
?>

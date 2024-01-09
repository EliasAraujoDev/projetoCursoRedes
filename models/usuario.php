<?php
class Usuario {
    public $nome;
    public $email;
    public $cpf;
    public $senha;
    public $cad; 
    public $endereco; 
    public $complemento; 
    public $cidade; 
    public $cep; 

    public function __construct($nome, $email, $cpf, $senha, $cad, $endereco, $complemento, $cidade, $cep) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->cad = $cad;
        $this->endereco = $endereco;
        $this->complemento = $complemento;
        $this->cidade = $cidade;
        $this->cep = $cep;
    }
}
?>

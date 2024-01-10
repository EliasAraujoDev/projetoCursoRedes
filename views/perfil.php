<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/cabecalho.php';
?>

<head>
    <link rel="stylesheet" href="/projetocursoredes/css/perfil.css">
</head>

<div id="perfil">


    <div class="container text-center">
        <h4>Bem vindo, João Silva!</h4>

        <br>
        <div id="titulo" >
            <h3>Configuração de seus serviços</h3>
        </div>
        <div class="row">
            <div class="col">
                <p><b>CÂMERAS</p></b>
                <button type="button" class="btn btn-primary">Ativar</button>
                <button type="button" class="btn btn-danger">Desativar</button>
                <button type="button" class="btn btn-warning">Suporte</button>


            </div>
            <div class="col">
                <b><p>DRONE</p></b>
                <button type="button" class="btn btn-primary">Ativar</button>
                <button type="button" class="btn btn-danger">Desativar</button>
                <button type="button" class="btn btn-warning">Suporte</button>

            </div>
            <div class="col">
                <b><p>INTERNET</p></b>

                <button type="button" class="btn btn-primary">Ativar</button>
                <button type="button" class="btn btn-danger">Desativar</button>
                <button type="button" class="btn btn-warning">Suporte</button>

            </div>
            <div class="col">
                <b><p> REPARO</p></b>

                <button type="button" class="btn btn-primary">Ativar</button>
                <button type="button" class="btn btn-danger">Desativar</button>
                <button type="button" class="btn btn-warning">Suporte</button>

            </div>
        </div>
    </div>













</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/rodape.php';
?>
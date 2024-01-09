<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/cabecalho.php';
?>

<head>
    <link rel="stylesheet" href="/projetocursoredes/css/perfil.css">
</head>

<div id="perfil">

   
    <div class="container text-center">

        <h4>Bem vindo, João Silva!</h4>

        <h6>Configuração de seus serviços</h6>
        <div class="row">
            <div class="col">
                <p>CÂMERAS</p>
                <button type="button" class="btn btn-primary">Ativar</button>
                <button type="button" class="btn btn-danger">Desativar</button>
                <button type="button" class="btn btn-warning">Suporte</button>


            </div>
            <div class="col">
                <p>DRONE</p>
                <button type="button" class="btn btn-primary">Ativar</button>
                <button type="button" class="btn btn-danger">Desativar</button>
                <button type="button" class="btn btn-warning">Suporte</button>

            </div>
            <div class="col">
                <p>INTERNET</p>

                <button type="button" class="btn btn-primary">Ativar</button>
                <button type="button" class="btn btn-danger">Desativar</button>
                <button type="button" class="btn btn-warning">Suporte</button>

            </div>
            <div class="col">
                <p> REPARO</p>

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
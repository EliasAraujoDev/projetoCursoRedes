<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/cabecalho.php';
?>

<head>
<link rel="stylesheet" href="/projetocursoredes/css/cliente.css">
</head>

<div id="cliente">

    <h1>Atendimento ao Cliente</h1>
    <form id="dados">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Pesquisar CPF</span>
            <input type="text" name="matricula" id="matricula" size="9" maxlength="9" />
            <button type="button" class="btn btn-primary" onclick="buscarCPF()">Buscar CPF</button>
        </div>


        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="basic-addon1">Nome do cliente</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>


        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="basic-addon1">Matricula</span>
            <input type="text" id="matricula" name="matricula"> <br>
        </div>


        <div class="input-group flex-nowrap">
            <span class="input-group-text"  id="email">E-mail</span>
            <input type="email" id="email" name="email"> <br>
        </div>

        <div class="input-group flex-nowrap">
        <span class="input-group-text"  id="endereco">endereço</span>
            <input type="text" id="endereço" name="endereco" step="0.01"><br>
        </div>


        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
        </div>



        <div class="btn-group">
            <a href="#" class="btn btn-primary active" aria-current="page">Finalizar Atendimento</a>
            <a href="#" class="btn btn-primary">Agendar visita</a>
            <a href="#" class="btn btn-primary">Consultar procotolo</a>
        </div>





    </form>

</div>



<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/rodape.php';
?>
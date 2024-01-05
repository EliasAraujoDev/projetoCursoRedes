<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/cabecalho.php';
?>

<head>
    <link rel="stylesheet" href="/projetocursoredes/css/atendimento.css">
</head>

<div id="atendimento">

    <h1>Central de atendimento ao Cliente</h1>


    <div class="container">
        <div class="customer-info">

            <h2>Informações do Cliente</h2>
            <div>
                <label for="cpf">Digite o CPF do cliente:</label>
                <input type="text" id="cpf" placeholder="Digite o CPF">
                <button onclick="searchByCPF()">Buscar por CPF</button>
            </div>
            <p>Nome: João da Silva</p>
            <p>CPF: 123.456.789-00</p>
            <p>Matrícula: 987654</p>

            <p>Endereço: Rua Exemplo, 123</p>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Adquirir produto
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Reparo de produto
                </label>
            </div>


            <label for="service-type">Tipo de Serviço:</label>
            <select id="service-type">
                <option value="internet">Internet</option>
                <option value="drone">Drone</option>
                <option value="cameras">Câmeras</option>
                <option value="fiber-repair">Reparo de Fibra Óptica</option>
            </select>
        </div>



        <div class="options">
            <button class="end-call" onclick="endCall()">Finalizar Atendimento</button>
            <button class="generate-protocol" onclick="generateProtocol()">Gerar Protocolo</button>
            <button class="generate-equipe" onclick="generateEquipe()">Equipe Técnica</button>

        </div>
    </div>


</div>


<!-- javascript -->
<script>
    function searchByCPF() {
        var cpfInput = document.getElementById('cpf');
        var cpf = cpfInput.value;

        alert('Buscando informações para o CPF: ' + cpf);
    }

    function endCall() {
        alert('Atendimento finalizado.');
    }

    function generateEquipe() {
        alert('Chamando Equipe Técnica.');
    }

    function generateProtocol() {
        alert('Protocolo gerado.');
    }
</script>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/rodape.php';
?>
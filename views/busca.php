<?php
include $_SERVER["DOCUMENT_ROOT"] . "/projetocursoredes/templates/cabecalho.php";
include $_SERVER["DOCUMENT_ROOT"] . "/projetocursoredes/controller/BuscaController.php";
?>

<head>
    <link rel="stylesheet" href="/projetocursoredes/css/atendimento.css">
</head>

<div id="atendimento">

    <h1>Central de atendimento ao Cliente</h1>


    <div class="container">
        <div class="customer-info">

            <h2>Informações do Cliente</h2>
            <form class="search-form" action="/projetocursoredes/views/busca.php" method="get">
                <input type="text" placeholder="Buscar CPF " name="busca" required>
                <input type="submit" class="btn btn-primary" value="Buscar">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $cpfBusca = $_GET["busca"];

                if (!empty($cpfBusca)) {
                    $controller = new BuscaController();
                    $users = $controller->buscarUsuarios($cpfBusca);

                    if (count($users) > 0) {
                        echo "<h3>Resultado da busca:</h3>";
                        echo '<div class="search-results">';
                        foreach ($users as $user) {
                            echo "<p>Nome: " . $user['nome'] . "<br>";
                            echo "E-mail: " . $user['email'] . "<br>";
                            echo "CPF: " . $user['cpf'] . "<br>";
                            echo "Endereço: " . $user['endereco'] . " " . $user['cidade'] . " CEP:" . $user['cep'] . "</p>";
                        }
                        echo '</div>';
                    } else {
                        echo "<p>Nenhum usuário encontrado com o CPF informado.</p>";
                    }
                } else {
                    echo "<p>Por favor, informe um CPF para buscar.</p>";
                }
            }
            ?>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Adquirir produto
            </label>

            <!--                 <label for="service-type">Tipo de Serviço:</label> -->
            <select id="service-type">
                <option value="internet">Selecione</option>

                <option value="internet">Internet</option>
                <option value="drone">Drone</option>
                <option value="cameras">Câmeras</option>
                <option value="fiber-repair">Reparo de Fibra Óptica</option>
            </select>

            <br>

        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Reparo de produto
            </label>


            <select id="service-type">
                <option value="internet">Selecione</option>

                <option value="internet">Internet</option>
                <option value="drone">Drone</option>
                <option value="cameras">Câmeras</option>
                <option value="fiber-repair">Reparo de Fibra Óptica</option>
            </select>

        </div>

        <div class="options">
            <button type="button" class="btn btn-primary" class="end-call" onclick="endCall()">Finalizar Atendimento</button>
            <button type="button" class="btn btn-primary" class="generate-protocol" onclick="generateProtocol()">Consultar Protocolo</button>
            <button type="button" class="btn btn-primary" class="generate-equipe" onclick="generateEquipe()">Equipe Técnica</button>

        </div>
    </div>




</div>


</div>



<script>
    function searchByCPF() {
        var cpfInput = document.getElementById('cpf');
        var cpf = cpfInput.value;

        alert('Cliente Localizado:  João da Silva ' + cpf);
    }

    function endCall() {
        alert('Atendimento finalizado.');
    }

    function generateEquipe() {
        alert('Chamando Equipe Técnica.');
    }

    function generateProtocol() {
        alert('Protocolo gerado: 025863549525.');
    }
</script>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/rodape.php';
?>
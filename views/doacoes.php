<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/cabecalho.php';
?>



<h1>Sistema de Pagamento Pix</h1>
    
    <form id="paymentForm">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="123.456.789-01"><br>

        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" step="0.01" required><br>

        <button type="button" onclick="realizarPagamentoPix()">Pagar com Pix</button>
    </form>



<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/rodape.php';
?>
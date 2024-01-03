<?php




$data = file_get_contents("php://input");
$dadosPagamento = json_decode($data, true);

if (isset($dadosPagamento['event']) && $dadosPagamento['event'] === 'cobranca.sucesso') {


    $statusPagamento = $dadosPagamento['status'];
    $codigoTransacao = $dadosPagamento['txid'];

    http_response_code(200);
} else {

    http_response_code(400);
    echo 'Evento não esperado';
}
?>

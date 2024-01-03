document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('pagarButton').addEventListener('click', function () {
        realizarPagamentoPix();
    });
});

function realizarPagamentoPix() {
    const pagSeguroSandboxApiKey = 'eliasaraujo1213@gmail.com';
    const endpoint = 'https://ws.sandbox.pagseguro.uol.com.br/pix/v1/cob';
    const urlCallback = '/projetocursoredes/views/callback_pagamento.php';

    const nome = document.getElementById('nome').value;
    const cpf = document.getElementById('cpf').value;
    const valor = parseFloat(document.getElementById('valor').value);

  
    const dadosPix = {
        chave: 'chave_pix_destinatario',
        valor: valor,
        descricao: 'Pagamento de ' + nome + ' (' + cpf + ')',
        txid: generateTxid(),
    };

    const headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + pagSeguroSandboxApiKey,
    };

    fetch(endpoint, {
        method: 'POST',
        headers: headers,
        body: JSON.stringify(dadosPix),
    })
    .then(response => response.json())
    .then(data => {


        window.location.href = data.location;
    })
    .catch(error => {
        console.error('Erro ao processar pagamento:', error);
    });
}

function generateTxid() {


    return 'txid_' + Math.random().toString(36).substr(2, 9);
}

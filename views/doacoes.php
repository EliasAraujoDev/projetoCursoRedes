<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/cabecalho.php';
?>

<style>

        *{
            margin: 0;
            padding: 0;
        }
        
        .hidden {
            display: none;
        }

        .pagamentos {
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: flex-end;
            border: solid black 0.5px;
            margin-top: 20rem;
        }

        .pagamentos div {
            margin: 1rem;
            width: 30rem;


        }

        #checkboxContainer {
            border-left: solid black 1px;
            padding: 6rem;
        }


        #optionsContainer {
            border: solid rgb(58, 55, 55) 0.5px;
            border-radius: 5px;
            background-color: rgba(0, 255, 255, 0.295);

        }
    </style>
</head>





    <div class="pagamentos">

        <div id="optionsContainer">
            <div id="pixDiv">
                <p>Pix</p>
            </div>
            <div id="boletoDiv">
                <p>Boleto</p>
            </div>
            <div id="cartaoDiv">
                <form action="">
                    <div>
                        <label for="">Nome do Portador</label> <br>
                        <input type="text" placeholder="Nome do Portador">
                    </div>

                    <div>
                        <label for="">Numero do Cartão</label><br>
                        <input type="number" placeholder="Numero do Cartão" width="100px">
                    </div>

                    <div>
                        <label for="">Data de Validade</label><br>
                        <input type="number" placeholder="MM">
                        <input type="number" placeholder="AA">
                    </div>

                    <div>
                        <label for="">CVC</label><br>
                        <input type="number" placeholder="000">
                    </div>
                </form>


            </div>
            <div id="paypalDiv">
                <p>Paypal</p>
            </div>
        </div>

        <div id="checkboxContainer">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                    onclick="toggleDiv('pixDiv')">
                <label class="form-check-label" for="flexRadioDefault1">
                    Pix
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                    onclick="toggleDiv('boletoDiv')">
                <label class="form-check-label" for="flexRadioDefault2">
                    Boleto
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3"
                    onclick="toggleDiv('cartaoDiv')">
                <label class="form-check-label" for="flexRadioDefault3">
                    Cartão
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4"
                    onclick="toggleDiv('paypalDiv')">
                <label class="form-check-label" for="flexRadioDefault4">
                    Paypal
                </label>
            </div>
        </div>

    </div>


<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/rodape.php';
?>
    
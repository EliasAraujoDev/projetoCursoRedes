
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/projeto/controller/CadastroController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];

    if (!empty($nome) && !empty($email) && !empty($cpf)) {
        $controller = new CadastroController();
        $controller->cadastrarUsuario($nome, $email, $cpf);
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>



<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/cabecalho.php';
?>

<head>
    <link rel="stylesheet" href="/projetocursoredes/css/cadastroUser.css">
</head>



<div id="cadastro">

    <div class="container form-container">
        <form action="/projeto/views/cadastro.php" method="post">
            <h1 class="text-center mt-5">Cadastro de Usuário</h1>

            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="inputName" class="form-label">Nome</label>
                    <input type="text" name="nome" id="inputName" class="form-control" placeholder="Nome" required>
                </div>
                <div class="col-md-6">
                    <label for="inputSurname" class="form-label">CPF</label>
                    <input type="number" name="cpf" class="form-control" id="inputSurname" placeholder="CPF" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Digite seu email" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="inputAddress" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Rua ou Av" required>
            </div>
            <div class="mb-3">
                <label for="inputAddress2" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, casa, sítio...">
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="inputCity" required>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="inputZip" required>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Estado</label>
                    <select id="inputState" class="form-select" required>
                        <option selected hidden>Escolha...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row" id="additionalFields" style="display:none;">
                <div class="col-md-6">
                    <label for="inputCPF" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="inputCPF" placeholder="CPF">
                </div>
                <div class="col-md-6">
                    <label for="inputProfilePic" class="form-label">Foto do Perfil</label>
                    <input type="file" class="form-control" id="inputProfilePic">
                </div>
                <div class="col-md-6">
                    <label for="inputContact" class="form-label">Contato</label>
                    <input type="text" class="form-control" id="inputContact" placeholder="Contato">
                </div>
                <div class="col-md-6">
                    <label for="inputArea" class="form-label">Área do Fotógrafo</label>
                    <input type="text" class="form-control" id="inputArea" placeholder="Área do Fotógrafo">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

</div>



<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/rodape.php';
?>

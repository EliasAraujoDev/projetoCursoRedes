<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/cabecalho.php';
?>



<div id="login">
  <form>
    <h1>Login</h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required>
      <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.
      </div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
    </div>

    <div class="esquecisenha">
      <a href="esquecisenha.html">Esqueceu a senha?</a>
    </div>
    <div class="mb-3 form-check" id="check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label" for="exampleCheck1">Não sou robô</label>
    </div>
    <button type="submit" class="btn btn-primary" id="entrar">Entrar</button>
  </form>
</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/rodape.php';
?>
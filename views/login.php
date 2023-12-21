<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/cabecalho.php';
?>

<style>
    
form{
    margin-top: 120px;
    border: solid black 0.5px; /* fazer a borda no formulario */
    border-radius: 10px;
    padding: 50px;
    box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.4);
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-direction: column;
    width: 25%;
    margin-bottom: 12.1%;
    background-color: white;
    position: relative;
    z-index: 1;
    
}

.esquecisenha{
text-align: center;

}
#chekc{
    display: flex;
    justify-content: center;
    align-items: center;
}
#entrar{
    display: flex;
    justify-content: center;
    align-items:center
}

h1{
    text-align: center;
    margin-bottom: 40px;
}


.mb-3{

position: relative;

}



footer {
    margin-top: 13%;
    background-color: black;
    color: white;
    text-align: center;

  }
</style>

    <form>
        <h1>Login</h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="E-mail" required>
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
      
      
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projetocursoredes/templates/rodape.php';
?>


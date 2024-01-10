<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainstorming</title>

    <link rel="shortcut icon" href="/projetocursoredes/imgs/brainstormer.png" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/projetocursoredes/css/index.css">
    <link rel="stylesheet" href="/projetocursoredes/css/login.css">
    <link rel="stylesheet" href="/projetocursoredes/css/footer.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <script src="/projetocursoredes/js/pix.js" defer></script>

</head>




<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a href="/projetocursoredes/index.php"><img src="/projetocursoredes/imgs/brainstormer.png" alt="" id="brainstorming" title="Brainstorming"><b>Brainstorming</b></a>
<!--             <a class="navbar-brand"  href="/projetocursoredes/index.php">Brainstorming</a> -->            
              <form class="d-flex" role="search">
                
<!--                 <a href="/projetocursoredes/views/doacoes.php"><button type="button" class="btn btn-light">Doações</button></a>-->   
              <a href="/projetocursoredes/views/login.php"><button type="button" class="btn btn-light">Login</button></a>
                <a href="/projetocursoredes/views/cadastro.php"><button type="button" class="btn btn-light">Cadastro</button></a>
              </form>
            </div>
          </div>
        </nav>
      </header> 
      
<style>
  .container-fluid{
    align-items: flex-end;

  }


  .container-fluid img{
    display: flex;
    align-items: center;
    height: 35px;
  }
  .container-fluid a{
    display: flex;
    align-items: flex-end;
    text-decoration: none;
    color: #000;

  }


  @media (max-width: 600px) {
    .container-fluid{
      display: flex;
      align-items: flex-end;
      padding: 0;

    }

    .bg-body-tertiary{
      align-items: flex-end;
    }

    .navbar-expand-lg{
      align-items: flex-end;

    }
    .container-fluid a{
      padding-bottom: 0;
      align-items: center;

    } 


  

  }

 
</style>
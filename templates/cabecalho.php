<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainstorming</title>
</head>


<style>
  body {
    background-color: rgb(21, 81, 140);
    color: white;
  }

  img{
    justify-content: center;
  }

  h1 {
    margin-top: 5%;
    margin-bottom: 5%;
    text-align: center;
  }

  .nav-link {
    color: white
  }

  #blocos {
    display: flex;
    width: 100%;
  }

  .row {
    margin: none;
    justify-content: space-between;
    gap: 30px;
    flex-wrap: initial;
  }

  .col {
    background-color:  rgb(21, 81, 140);

    height: 32rem;
    border: solid rgb(255, 255, 255) 0.5px;
    /* fazer a borda no formulario */
    border-radius: 5px;
    /* fazer a cantos no formulario */
    box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.4);
    /* fazer sonbreamento */
    justify-content: space-between;
    border-radius: 10px;
  }

  .col:hover {
    color: #fff;
    background-color: rgb(28, 131, 199);
  }

  .col-sm-6 {
    margin-top: 10%;
    width: 100%;
  }

  P{
    margin-top: 20px;
    margin-bottom: 10%;
    text-align: justify;
  }

  .container {
  padding: 6px;
  width: 350px;
  height: 450px;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
/*   overflow: hidden;
 */  border-radius: 10px;
/*   box-shadow: 0 0 20px 0 darkgrey;
 */}

form {
  transition: .5s;
  width: 300px;
}



img{
    overflow: hidden;
    display: flex;
    align-items: center;
    position: relative;
}

img{
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
    z-index: -1;
}

#drone {
  background-repeat: no-repeat;
  background-size: cover;

}





#reparo{
  background-repeat: no-repeat;
  background-size: cover;
}


input[type="text"], input[type="password"] {
  border: none;
  margin-top: 40px;
  border-radius: 60px;
  padding: 8px 0 8px 35px;
  outline: none;
  width: 100%;
}

button[type="submit"] {
  color: white;
  border-radius: 5px;
  width: 100%;
  border: none;
  outline: none;
  padding: 8px 0 8px 15px;
  font-size: 15px;
  cursor: pointer;
}

.divCheck {
  margin: 10px 0 0 5px;
  width: 80%;
  font-size: 13px;
}


#login{
  border: solid rgb(255, 255, 255) 0.5px;
  margin-top: 15%;
  margin-bottom: 5%;
  background-color:  rgb(21, 81, 140);

}

  footer {
    margin-top: 13%;
    background-color: black;
    color: white;
    text-align: center;

  }
  </style>



<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Brainstorming</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <form class="d-flex" role="search">
                
                <a href=""><button type="button" class="btn btn-light">Doações</button></a>
                <a href="/views/login.html"><button type="button" class="btn btn-light">Login</button></a>
                <a href="/views/cadastro.html"><button type="button" class="btn btn-light">Cadastro</button></a>
              </form>
            </div>
          </div>
        </nav>
      </header> 
    
</body>
</html>
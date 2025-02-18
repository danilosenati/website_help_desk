<?php

session_start();

/*
  PARA ACESSAR A PAGINA HOME DIGITANDO O ENDEREÇO NO NAVEGADOR É PRECISO FAZER LOGIN NO SITE.
  SE A SENHA OU USUÁRIO FOR INVALIDA, AO DIGITAR  home.php, O USUÁRIO SERÁ REDIRECIONADO PARA A PAGINA DE LOGIN.
*/

if(!isset($_SESSION["autenticado"]) ||$_SESSION["autenticado"] != "SIM" ){
  header('Location: index.php?login=erro2');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8"/>
  <title>Menu - Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-home {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-home">
        <div class="card">
          <div class="card-header">
            Menu
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6 d-flex justify-content-center">
                <img src="formulario_abrir_chamado.png" width="70" height="70">
              </div>
              <div class="col-6 d-flex justify-content-center">
                <img src="formulario_consultar_chamado.png" width="70" height="70">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
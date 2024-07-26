<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header('Location:login.php'); 
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sistem oficial da ótica Mundial">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/logo_empresa.JPG" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/botao.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Home</title>
    <style>
        .btn-danger{
    color: white;
    padding: 30px;
    font-weight: bold; 
    text-transform: uppercase;
    border-radius: 10px;
    padding: 50px;
}
.mudarcor{
    text-decoration: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1;
}
.b-cadastrar{
    padding: 20px;
}
.teste {
    background-color: #E3E3E3;
    padding: 5%;
    color: #DA101B;
    max-width: 100%; 
    border: 2px solid #DA101B;
    text-transform: uppercase;
    text-align: center;
    border-radius: 10px;
    font-size: 1.2em; 
}


.letras{
    text-transform: uppercase;
    color: #DA101B;
    font-size: 19px;
}
.letras:hover{
    color:#666;
}
.btn {
    width: 100%; 
    height: 100%;
}
.btn-lentes{
    border-color: #DA101B;
       border-radius: 5px;
       margin-top: 10px;
       width: 220px;
       padding: 3.5px;
}
    </style>
    
</head>
<body style=" background-color:#F3F3F3">
    <nav class="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo_empr2.JPG" alt="logo_empresa" width="50" height="24">&nbsp;&nbsp; <span>ÓTICA MUNDIAL</span>
          </a>
          </a>
            <button type="button" class="btn-close" style="background-color: white; color: #DA101B;" aria-label="Close"onclick="sair()" ></button>
        </div>
      </nav><br>
    <div class="container">
        <div class="row">
          <div class="col">
            <div id="cadastro-div" class="container">
        <div class="container teste">
                <button onclick="redirecionarParaCadastro()" class="btn b-cadastrar" > <strong> <span class="letras">Cadastrar Armação de Óculos</span></strong></button>
        </div>
    </div><br>
    <div class="container">
        <div class="container teste">
            <button onclick="cadastrar_lentes()" class="btn b-cadastrar">
            <strong> <span class="letras">Cadastrar Dados de Lentes</span></strong>
        </button>
        </div>
        
    </div><br>
    <div class="container">
        <div class="container teste">
            <button onclick="visualizar_lentes()" class="btn b-cadastrar">
            <strong> <span class="letras">Listar Dados cadastrados-Lentes</span></strong>
        </button>
        </div>
        
    </div><br>
          </div>
          <div class="col">
            <div class="container">
                <div class="container teste">
                   <button onclick="ListaArmacao()" class="btn b-cadastrar">  <span class="letras"><strong>Listar Dados cadastrados-Armação</strong></span></button> 
                </div>   
          </div><br>
          <div class="col">
            <div  class="container">
                <div class="container teste">
                        <button onclick="Pesquisar()" class="btn b-cadastrar"><strong> <span class="letras">Pesquisar Dados de Armação-Óculos</span></strong> </button></button>
                </div>
          </div>
        </div>
      </div>
      <script src="script.js"></script>
    <script>
        function redirecionarParaCadastro() {
            window.location.href = "cadastro.php"; 
        }
        function retornar() {
            window.location.href = "index.php"; 
        }
        function ListaArmacao() {
            window.location.href = "exibir_dados.php"; 
        }
        function Pesquisar() {
            window.location.href = "pesquisa.php"; 
        }
        function sair() {
            window.location.href = "logout.php"; 
        }
        function cadastrar_lentes() {
        window.location.href = "cadastro_lentes.php"; 
        }
        function visualizar_lentes() {
            window.location.href = "visualizar_lentes.php"; 
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>



<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header('Location: index.php'); // Redireciona para a página de login se o usuário não estiver autenticado
    exit;
}

// Agora, você pode exibir o conteúdo da página restrita
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Cadastro de Lentes</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="./css/botao_001.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo_empr2.JPG" alt="logo_empresa" width="50" height="24">&nbsp;&nbsp; <span>ÓTICA MUNDIAL</span>
          </a>
          <button type="button" style="background-color: white; color: #DA101B;" class="btn-close" aria-label="Close"onclick="retornar()" ></button>
        </div>
      </nav><br>
      <div class="container divisor">
    <h1 style="color:#DA101B; font-size: 25px; ">Cadastro de Lentes</h1>
    <form method="post" action="processar_cadastro.php">
        <label for="tipo_lentes"> <strong>Tipo de Lentes:</strong></label><br>
        <input type="radio" name="tipo_lentes" value="Visao Simples (Convencional)"> Visao Simples (Convencional)<br>
        <input type="radio" name="tipo_lentes" value="Visao Simples (Digital)"> Visão Simples (Digital)<br>
        <input type="radio" name="tipo_lentes" value="Bifocal (Convencional)"> Bifocal (Convencional)<br>
        <input type="radio" name="tipo_lentes" value="Bifocal (Digital)"> Bifocal (Digital)<br>
        <input type="radio" name="tipo_lentes" value="Multifocal (Convencional)"> Multifocal (Convencional)<br>
        <input type="radio" name="tipo_lentes" value="Multifocal (Digital)"> Multifocal (Digital)<br><br>
        <label for="fornecedor"> <strong>Fornecedor:</strong></label>
        <input type="text" name="fornecedor" required><br>

        <label for="material"> <strong>Material:</strong></label>
        <select name="material">
            <option value="1.49">1.49</option>
            <option value="1.50">1.50</option>
            <option value="1.56">1.56</option>
            <option value="1.59">1.59</option>
            <option value="1.67">1.67</option>
            <option value="1.74">1.74</option>
            <option value="1.80">1.80</option>
        </select><br>

        <label for="tratamento"><strong>Tratamento:</strong></label><br>
        <input type="checkbox" name="tratamentos[]" value="Incolor"> Incolor<br>
        <input type="checkbox" name="tratamentos[]" value="Anti-Reflexo"> Anti-Reflexo<br>
        <input type="checkbox" name="tratamentos[]" value="Foto-sensível"> Foto-sensível<br>

        <h2 style="color: #DA101B; font-size:25px;">Acessórios:</h2>
        <label> <strong>Nome:</strong></label><br>
        <input type="text" name="acessorio1_nome"><br>
        <label><strong>Cor:</strong></label><br>
        <input type="text" name="acessorio1_cor"><br>

        <input type="submit" value="Cadastrar Lentes"  style=" background-color:#DA101B; color:white;" class="btn botao_001">
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function retornar() {
            // Redireciona para a página de cadastro
            window.location.href = "inicial.php"; 
        }
    </script>
   
</body>
</html>
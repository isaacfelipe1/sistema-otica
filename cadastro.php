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
    <link rel="shortcut icon" href="./img/logo_empresa.JPG" type="image/x-icon">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="./css/botao_001.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <title>Cadastro</title>
</head>
<body style="background-color:#F3F3F3">
    <nav class="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo_empr2.JPG" alt="logo_empresa" width="50" height="24">&nbsp;&nbsp; <span>ÓTICA MUNDIAL</span>
          </a>
          <button type="button" style="background-color: white; color: #DA101B;" class="btn-close" aria-label="Close" onclick="retornar()"></button>
        </div>
    </nav><br>
    <div class="container template">
        <form action="inserir_no_bd.php" method="post" class="mb-3" autocomplete="on">
            <div class="container formulario">
                <h2 style="color:#DA101B;">CADASTRO DE ARMAÇÃO</h2><br>
                <fieldset class="grupo">
                    <div class="campo">  
                        <label for="numero_nota_fiscal" class="form-label"> <strong>Número da Nota Fiscal:</strong></label>
                        <input type="text" name="numero_nota_fiscal" id="numero_nota_fiscal"> 
                    </div>
                    <p>
                    <label for="data_nota_fiscal" class="form-label"> <strong>Data da Nota Fiscal:</strong></label>
                    <input type="date" name="data_nota_fiscal" id="data_nota_fiscal"> 
                    </p>      
                    <p>
                    <label for="fornecedor" class="form-label"><strong>Fornecedor:</strong></label>
                    <input type="text" name="fornecedor" id="fornecedor"> 
                    </p>
                </fieldset>
                <fieldset class="grupo">
                    <div class="campo">
                        <label for="marca" class="form-label"><strong>Marca:</strong></label>
                        <input type="text" name="marca" id="marca">
                        <label for="codigo" class="form-label"> <strong>Código:</strong></label>
                        <input type="text" name="codigo" id="codigo">
                        <label for="tamanho" class="form-label"> <strong>Tamanho:</strong></label>
                        <input type="text" name="tamanho" id="tamanho">
                        <label for="ponte" class="form-label"> <strong>Ponte:</strong></label>
                        <input type="number" name="ponte" id="ponte" step="0.01" required>
                        <label for="cor" class="form-label"> <strong>Cor:</strong></label>
                        <input type="text" name="cor" id="cor">
                    </div>
                </fieldset>
                <div class="campo">
                    <label for="tipo_receituario"> <strong>Tipo:</strong></label>
                    <select name="tipo_receituario" id="tipo_receituario" onchange="mostrarCamposEspecificos()">
                        <option value="Tipo Solar">Tipo Solar</option>
                        <option value="Tipo clipon">Tipo clipon</option>
                        <option value="Tipo EPI">Tipo EPI</option>
                        <option value="Tipo Receituário">Tipo Receituario</option>
                        <option value="Nenhum">Nenhum</option>
                    </select><br>
                    <div id="campos_especificos" style="display: none">
                        <div>
                            <label for="selecao_metal"> <strong>Metal</strong></label>
                            <select name="selecao_metal" id="selecao_metal">
                                <option value="-">-</option>
                                <option value="Fechado">(Metal)Fechado</option>
                                <option value="Nylon">(Metal)Nylon</option>
                                <option value="Parafusada"> (Metal)Parafusada</option>
                                <option value="Bucha">( Metal) Bucha</option>
                               
                            </select>
                        </div>
                        <div>
                            <label for="selecao_titanio"> <strong>Titânio</strong></label>
                            <select name="selecao_titanio" id="selecao_titanio">
                                <option value="-">-</option>
                                <option value="Fechado">(Titânio)Fechado</option>
                                <option value="Nylon">(Titânio)Nylon</option>
                                <option value="Parafusada">(Titânio)Parafusada</option>
                                <option value="Bucha">(Titânio)Bucha</option>
                            </select>
                        </div>
                        <div>
                            <label for="selecao_carbono"> <strong>Carbono</strong></label>
                            <select name="selecao_carbono" id="selecao_carbono">
                                <option value="-">-</option>
                                <option value="Fechado">(Carbono)Fechado</option>
                                <option value="Nylon">(Carbono)Nylon</option>
                                <option value="Parafusada">(Carbono)Parafusada</option>
                                <option value="Bucha">(Carbono)Bucha</option>
                                
                            </select>
                        </div>
                        <div>
                            <label for="selecao_aluminio"> <strong>Aluminio</strong></label>
                            <select name="selecao_aluminio" id="selecao_aluminio">
                                <option value="-">-</option>
                                <option value="Fechado">(Aluminio)Fechado</option>
                                <option value="Nylon">(Aluminio)Nylon</option>
                                <option value="Parafusada">(Aluminio)Parafusada</option>
                                <option value="Bucha">(Aluminio)Bucha</option>
                                
                            </select>
                        </div>
                        <div>
                            <label for="selecao_Acetado"> <strong>Acetado</strong></label>
                            <select name="selecao_Acetado" id="selecao_Acetado">
                                <option value="-">-</option>
                                <option value="Fechado">(Acetado)Fechado</option>
                                <option value="Nylon">(Acetado)Nylon</option>
                                <option value="metal">(Acetado)metal</option>
                               
                            </select>
                        </div>
                    </div>
                    
                </div>
            </div>
            <input type="submit" class="btn botao_001" value="Enviar" style="background-color:#DA101B; color:white;">
        </form>
    </div><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function retornar() {
            // Redireciona para a página de cadastro
            window.location.href = "inicial.php"; 
        }

        function mostrarCamposEspecificos() {
            var tipoReceituarioSelect = document.getElementById("tipo_receituario");
            var camposEspecificos = document.getElementById("campos_especificos");

            if (tipoReceituarioSelect.value === "Tipo Receituário") {
                camposEspecificos.style.display = "block";
            } else {
                camposEspecificos.style.display = "none";
            }
        }
    </script>
</body>
</html>

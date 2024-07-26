<?php
// editar.php

$servername = "xmysql.oticasmundialita.com";
$username = 'oticasmundialit';
$password = 'Lindabrao875@678';
$dbname = "oticasmundialita";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Recupera os dados do registro que você deseja editar
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/cadastro.css">
            <link rel="stylesheet" href="./css/botao_001.css">
            <link rel="stylesheet" href="css/nav.css">
            <link rel="stylesheet" href="./css/fonts.css">
            <title>Editar Dados</title>
        </head>
        <body style="background-color:#F3F3F3">

        <nav class="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo_empr2.JPG" alt="logo_empresa" width="50" height="24">&nbsp;&nbsp; <span>ÓTICA MUNDIAL</span>
          </a>
          </a>
            <button type="button" class="btn-close" style="background-color: white; color: #DA101B;" aria-label="Close"onclick="retornar()" ></button>
        </div>
      </nav><br>
            <div class="container template">
                <form action="processar_edicao.php" method="post" class="mb-3" autocomplete="on">
                    <div class="container formulario">
                        <h2 style="color:#DA101B;">EDITAR DADOS DE ARMAÇÃO</h2><br>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <label for="marca" class="form-label"> <strong>Marca:</strong></label>
                            <input type="text" name="marca" id="marca" value="<?php echo $row['marca']; ?>"><br>

                            <label for="codigo" class="form-label"> <strong>Código:</strong></label>
                            <input type="text" name="codigo" id="codigo" value="<?php echo $row['codigo']; ?>"><br>

                            <label for="numero_nota_fiscal" class="form-label"> <strong>Número da Nota Fiscal:</strong></label>
                            <input type="text" name="numero_nota_fiscal" id="numero_nota_fiscal" value="<?php echo $row['numero_nota_fiscal']; ?>"><br>

                            <label for="data_nota_fiscal" class="form-label"> <strong>Data da Nota Fiscal:</strong></label>
                            <input type="date" name="data_nota_fiscal" id="data_nota_fiscal" value="<?php echo $row['data_nota_fiscal']; ?>"><br>

                            <label for="fornecedor" class="form-label"><strong>Fornecedor:</strong></label>
                            <input type="text" name="fornecedor" id="fornecedor" value="<?php echo $row['fornecedor']; ?>" required><br>
                                                    <label for="tamanho" class="form-label"> <strong>Tamanho:</strong></label>
                            <input type="text" name="tamanho" id="tamanho" value="<?php echo $row['tamanho']; ?>"><br>

                            <label for="ponte" class="form-label"> <strong>Ponte:</strong></label>
                            <input type="text" name="ponte" id="ponte" value="<?php echo $row['ponte']; ?>"><br>

                            <label for="cor" class="form-label"> <strong>Cor:</strong></label>
                            <input type="text" name="cor" id="cor" value="<?php echo $row['cor']; ?>"><br>

                            <label for="tipo_receituario" class="form-label"> <strong>Tipo de Receituário:</strong></label>
                            <input type="text" name="tipo_receituario" id="tipo_receituario" value="<?php echo $row['tipo_receituario']; ?>"><br>

                            <label for="selecao_metal" class="form-label"> <strong>Seleção Metal:</strong></label>
                            <input type="text" name="selecao_metal" id="selecao_metal" value="<?php echo $row['selecao_metal']; ?>"><br>

                            <label for="selecao_titanio" class="form-label"> <strong>Seleção Titânio:</strong></label>
                            <input type="text" name="selecao_titanio" id="selecao_titanio" value="<?php echo $row['selecao_titanio']; ?>"><br>

                            <label for="selecao_carbono" class="form-label"> <strong>Seleção Carbono:</strong></label>
                            <input type="text" name="selecao_carbono" id="selecao_carbono" value="<?php echo $row['selecao_carbono']; ?>"><br>

                            <label for="selecao_aluminio" class="form-label"> <strong>Seleção Alumínio:</strong></label>
                            <input type="text" name="selecao_aluminio" id="selecao_aluminio" value="<?php echo $row['selecao_aluminio']; ?>"><br>

                            <label for="selecao_Acetado" class="form-label"> <strong>Seleção Acetado:</strong></label>
                            <input type="text" name="selecao_Acetado" id="selecao_Acetado" value="<?php echo $row['selecao_Acetado']; ?>"><br>
                        <!-- Adicione mais campos conforme necessário -->

                        <input type="submit" class="btn botao_001" value="Salvar Edições" style="background-color:#DA101B; color:white;">
                    </div>
                </form>
            </div><br>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script>
        function retornar() {
            // Redireciona para a página de cadastro
            window.location.href = "inicial.php"; 
        }
    </script>
        </body>
        </html>
        <?php
    } else {
        echo "Registro não encontrado.";
    }
}

$conn->close();
?>

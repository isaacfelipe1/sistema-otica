<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header('Location: index.php'); 
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo_empresa.JPG" type="image/x-icon">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <title>Lista de dados</title>
</head>
<body style=" background-color:#F3F3F3">
    <nav class="navbar ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo_empr2.JPG" alt="logo_empresa" width="50" height="24">&nbsp;&nbsp;<span>ÓTICA MUNDIAL</span>
            </a>
            <button type="button" style="background-color: white; color: #DA101B;" class="btn-close" aria-label="Close" onclick="retornar()"></button>
        </div>
    </nav><br>
    <?php
    $servername = "xmysql.oticasmundialita.com";
    $username = 'oticasmundialit';
    $password = 'Lindabrao875@678';
    $dbname = "oticasmundialita";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);
    ?>
<div class="container">
<h2 style=" color:#DA101B;">Dados Cadastrados</h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>N° Fiscal</th>
                <th>Dt Fiscal</th>
                <th>Fornecedor</th>
                <th>Marca</th>
                <th>Cód</th>
                <th>Tamanho</th>
                <th>Ponte</th>
                <th>Cor</th>
                <th>Tipo</th>
                <th>Metal</th>
                <th>Titânio</th>
                <th>Carbono</th>
                <th>Alumínio</th>
                <th>Acetado</th>
                <th>Excluir?</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['numero_nota_fiscal'] . "</td>";
                    echo "<td>" . $row['data_nota_fiscal'] . "</td>";
                    echo "<td>" . $row['fornecedor'] . "</td>";
                    echo "<td>" . $row['marca'] . "</td>";
                    echo "<td>" . $row['codigo'] . "</td>";
                    echo "<td>" . $row['tamanho'] . "</td>";
                    echo "<td>" . $row['ponte'] . "</td>";
                    echo "<td>" . $row['cor'] . "</td>";
                    echo "<td>" . $row['tipo_receituario'] . "</td>";
                    echo "<td>" . $row['selecao_metal'] . "</td>";
                    echo "<td>" . $row['selecao_titanio'] . "</td>";
                    echo "<td>" . $row['selecao_carbono'] . "</td>";
                    echo "<td>" . $row['selecao_aluminio'] . "</td>";
                    echo "<td>" . $row['selecao_Acetado'] . "</td>";
                    echo "<td>
                        <form action='excluir.php' method='POST'>
                            <input type='hidden' id='id' name='id' value='" . $row['id'] . "'>
                            <input type='submit' value='Excluir' >
                        </form>
                    
                    </td>";
                    echo "<td>
                    <form action='editar.php' method='POST' style='display:inline;'>
                    <input type='hidden' id='id' name='id' value='" . $row['id'] . "'>
                    <input type='submit' value='Editar' >
                </form>
                </td>";
                    echo "</tr>";
                    
                    echo "</tr>";
                }
                
            } else {
                echo "<tr><td colspan='16'>Nenhum dado encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</div>
<?php
    
    $conn->close();
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function retornar() {
           
            window.location.href = "inicial.php"; 
        }
    </script>
</body>
</html>

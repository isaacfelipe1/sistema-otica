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
    <link rel="stylesheet" href="./css/botao_001.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo_empresa.JPG" type="image/x-icon">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <title>Pesquisar dados Cadastrados</title>
</head>
<body style=" background-color:#F3F3F3">
<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo_empr2.JPG" alt="logo_empresa" width="50" height="24">&nbsp;&nbsp; <span>ÓTICA MUNDIAL</span> 
        </a>
        <button type="button" style="background-color: white; color: #DA101B;" class="btn-close" aria-label="Close" onclick="retornar()"></button>
    </div>
</nav><br>
<div class="container">
    <div class="py-5 text-center">
        <h1>Área de Pesquisa</h1>
        <div class="container-fluid">
            <form method="get" action="pesquisa.php">
                <div class="mb-3">
                    <input type="text" name="query" placeholder="Pesquise Aqui" class="botao_0011" required>
                    <input type="submit" value="Pesquisar" class="botao_001" required>
                    <input type="button" value="Limpar Pesquisa" onclick="location.href='pesquisa.php'" class="botao_001" required>
                </div>
            </form> 
        </div>
    </div>
</div>

<?php
if (isset($_GET['query'])) {
    $db = new mysqli("xmysql.oticasmundialita.com", "oticasmundialit", "Lindabrao875@678", "oticasmundialita");
    if ($db->connect_error) {
        die("Erro de conexão: " . $db->connect_error);
    }
    $search = $db->real_escape_string($_GET['query']);
    $sql = "SELECT numero_nota_fiscal, data_nota_fiscal, fornecedor, marca, codigo, tamanho, ponte, cor, tipo_receituario, selecao_metal, selecao_titanio, selecao_carbono, selecao_aluminio, selecao_Acetado FROM produtos WHERE 
        numero_nota_fiscal LIKE '%$search'
        OR data_nota_fiscal LIKE '%$search'
        OR fornecedor LIKE '%$search'
        OR marca LIKE '%$search'
        OR codigo LIKE '%$search'
        OR tamanho LIKE '%$search'
        OR ponte LIKE '%$search'
        OR cor LIKE '%$search'
        OR tipo_receituario LIKE '%$search'
        OR selecao_metal LIKE '%$search'
        OR selecao_titanio LIKE '%$search'
        OR selecao_carbono LIKE '%$search'
        OR selecao_aluminio LIKE '%$search'
        OR selecao_Acetado LIKE '%$search'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        echo "<h2 class='result-title' styles='color:red;'>Resultados da pesquisa:</h2>";
        echo "<div class='table-responsive'>";
        echo "<table class='result-table table'>";
        echo "<tr>";
        echo "<th>Número da Nota Fiscal</th>";
        echo "<th>Data da Nota Fiscal</th>";
        echo "<th>Fornecedor</th>";
        echo "<th>Marca</th>";
        echo "<th>Código</th>";
        echo "<th>Tamanho</th>";
        echo "<th>Ponte</th>";
        echo "<th>Cor</th>";
        echo "<th>Tipo Receituário</th>";
        echo "<th>Seleção Metal</th>";
        echo "<th>Seleção Titânio</th>";
        echo "<th>Seleção Carbono</th>";
        echo "<th>Seleção Alumínio</th>";
        echo "<th>Seleção Acetado</th>";
        echo "</tr>";

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
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>"; 
    } else {
        echo "<div class='no-results'>Nenhum resultado encontrado.</div>";
    }
    $db->close();
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    function retornar() {
        // Redireciona para a página de cadastro
        window.location.href = "inicial.php"; 
    }
</script>
</body>
</html>

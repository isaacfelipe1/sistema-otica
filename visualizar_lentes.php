<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header('Location:inicial.php'); // Redireciona para a página de login se o usuário não estiver autenticado
    exit;
}
?>

<?php
// Configurações do banco de dados
$servername = "mysql.oticasmundialita.com";
$username = "oticasmundialit";
$password = "Lindabrao875@678";
$dbname = "oticasmundialita";

// Conectar ao banco de dados
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Consulta SQL para recuperar os registros
$sql = "SELECT * FROM lentes";
$result = $conn->query($sql);

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

    <div class="container">
        <h2 style="color:#DA101B;">Dados Cadastrados</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Tipo de Lentes</th>
                        <th>Fornecedor</th>
                        <th>Material</th>
                        <th>Tratamentos</th>
                        <th>Acessório 1 - Nome</th>
                        <th>Acessório 1 - Cor</th>
                        <th>Excluir? </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" . $row["tipo_lentes"] . "</td>";
                            echo "<td>" . $row["fornecedor"] . "</td>";
                            echo "<td>" . $row["material"] . "</td>";
                            echo "<td>" . $row["tratamentos"] . "</td>";
                            echo "<td>" . $row["acessorio1_nome"] . "</td>";
                            echo "<td>" . $row["acessorio1_cor"] . "</td>";
                            echo "<td>
                        <form action='excluir_lentes.php' method='POST'>
                            <input type='hidden' id='id' name='id' value='" . $row['id'] . "'>
                            <input type='submit' value='Excluir' >
                        </form>
                    </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Nenhum registro encontrado.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
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
<?php
// Fechar a conexão com o banco de dados
$conn = null;
?>

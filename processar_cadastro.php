<?php
// Conexão com o banco de dados (substitua pelas suas informações)
$servername = "xmysql.oticasmundialita.com";
$username = "oticasmundialit";
$password = "Lindabrao875@678";
$dbname = "oticasmundialita";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}

// Processar os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_lentes = $_POST["tipo_lentes"];
    $fornecedor = $_POST["fornecedor"];
    $material = $_POST["material"];
    $acessorio1_nome = $_POST["acessorio1_nome"];
    $acessorio1_cor = $_POST["acessorio1_cor"];

    // Verifica se a variável "tratamentos" está definida no POST
    $tratamentos = isset($_POST["tratamentos"]) ? implode(', ', $_POST["tratamentos"]) : "";

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO lentes (tipo_lentes, fornecedor, material, tratamentos, acessorio1_nome, acessorio1_cor)
            VALUES ('$tipo_lentes', '$fornecedor', '$material', '$tratamentos', '$acessorio1_nome', '$acessorio1_cor')";

if ($conn->query($sql) === TRUE) {
    header("location:cadastro_lentes.php");
    echo "Lentes cadastradas com sucesso!";
} else {
    echo "Erro ao cadastrar as lentes: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();

}
?>

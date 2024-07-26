<?php
$servername = "xmysql.oticasmundialita.com";
$username = "oticasmundialit";
$password = "Lindabrao875@678";
$dbname = "oticasmundialita";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_lentes = $_POST["tipo_lentes"];
    $fornecedor = $_POST["fornecedor"];
    $material = $_POST["material"];
    $acessorio1_nome = $_POST["acessorio1_nome"];
    $acessorio1_cor = $_POST["acessorio1_cor"];

    $tratamentos = isset($_POST["tratamentos"]) ? implode(', ', $_POST["tratamentos"]) : "";

    $sql = "INSERT INTO lentes (tipo_lentes, fornecedor, material, tratamentos, acessorio1_nome, acessorio1_cor)
            VALUES ('$tipo_lentes', '$fornecedor', '$material', '$tratamentos', '$acessorio1_nome', '$acessorio1_cor')";

if ($conn->query($sql) === TRUE) {
    header("location:cadastro_lentes.php");
    echo "Lentes cadastradas com sucesso!";
} else {
    echo "Erro ao cadastrar as lentes: " . $conn->error;
}


$conn->close();

}
?>

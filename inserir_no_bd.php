<?php

$numero_nota_fiscal = $_POST['numero_nota_fiscal'];
$data_nota_fiscal = $_POST['data_nota_fiscal'];
$fornecedor = $_POST['fornecedor'];
$marca = $_POST['marca'];
$codigo = $_POST['codigo'];
$tamanho = $_POST['tamanho'];
$ponte = $_POST['ponte'];
$cor = $_POST['cor'];
$tipo_receituario = $_POST['tipo_receituario'];
$selecao_metal = $_POST['selecao_metal'];
$selecao_titanio = $_POST['selecao_titanio'];
$selecao_carbono = $_POST['selecao_carbono'];
$selecao_aluminio = $_POST['selecao_aluminio'];
$selecao_Acetado = $_POST['selecao_Acetado'];

$servername = "xmysql.oticasmundialita.com";
$username = "oticasmundialit";
$password = "Lindabrao875@678";
$dbname = "oticasmundialita";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
$sql = "INSERT INTO produtos (numero_nota_fiscal, data_nota_fiscal, fornecedor, marca, codigo, tamanho, ponte, cor, tipo_receituario,selecao_metal, selecao_titanio, selecao_carbono, selecao_aluminio, selecao_Acetado)
VALUES ('$numero_nota_fiscal', '$data_nota_fiscal', '$fornecedor', '$marca', '$codigo', '$tamanho', '$ponte', '$cor', '$tipo_receituario','$selecao_metal', '$selecao_titanio', '$selecao_carbono', '$selecao_aluminio', '$selecao_Acetado')";

if ($conn->query($sql) === TRUE) {
    $id_produto_inserido = $conn->insert_id;
    header("location:cadastro.php");
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}
$conn->close();
?>

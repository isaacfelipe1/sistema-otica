<?php
// processar_edicao.php
header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$servername ="xmysql.oticasmundialita.com";
$username = "oticasmundialit";
$password = "Lindabrao875@678";
$dbname = "oticasmundialita";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
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

    // Use declarações preparadas para evitar a injeção de SQL
    $sql = "UPDATE produtos SET 
            numero_nota_fiscal = ?,
            data_nota_fiscal = ?,
            fornecedor = ?,
            marca = ?,
            codigo = ?,
            tamanho = ?,
            ponte = ?,
            cor = ?,
            tipo_receituario = ?,
            selecao_metal = ?,
            selecao_titanio = ?,
            selecao_carbono = ?,
            selecao_aluminio = ?,
            selecao_Acetado = ?
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssssi", 
        $numero_nota_fiscal, 
        $data_nota_fiscal, 
        $fornecedor,
        $marca,
        $codigo,
        $tamanho,
        $ponte,
        $cor,
        $tipo_receituario,
        $selecao_metal,
        $selecao_titanio,
        $selecao_carbono,
        $selecao_aluminio,
        $selecao_Acetado,
        $id);

    if ($stmt->execute()) {
        header("location:exibir_dados.php");
        
    } else {
        echo "Erro na edição: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

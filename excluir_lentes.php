<?php 
$servername ="xmysql.oticasmundialita.com";
$username = "oticasmundialit";
$password = "Lindabrao875@678";
$dbname = "oticasmundialita";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $id_para_excluir = $_POST['id'];
    
    $sql = "DELETE FROM lentes WHERE id = $id_para_excluir";
    
    if ($conn->query($sql) === TRUE) {
        header("location:visualizar_lentes.php");
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }
} else {
    echo "ID do registro a ser excluído não especificado.";
}
$conn->close();
?>

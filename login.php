<?php
session_start();
$servidor_remoto = "xmysql.oticasmundialita.com";
$usuario = $_POST['nome'];
$senha = $_POST['senha'];
$banco = "oticasmundialita";
$conexao = mysqli_connect($servidor_remoto, $usuario, $senha, $banco);
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}
if ($usuario == $_POST['nome'] && $senha == $_POST['senha']) {
  $_SESSION['autenticado'] = true;
  header("location:inicial.php");
    exit;
  }else {
  
    echo "Nome de usuário ou senha inválidos.";
  mysqli_close($conexao);
  }
?>

   
   
   
   
   
   


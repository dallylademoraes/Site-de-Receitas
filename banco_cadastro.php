<?php
$servidor = "localhost"; 
$usuario = "root";
$senha = ""; 
$banco = "cadastro_usuarios"; 

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_errno) {
    echo "Conexão falhou: (" . $conn->connect_errno .")" . $conn->connect_errno;
}
/*
$nome_completo = $_POST['nome_completo'];
$nome_usuario = $_POST['nome_usuario'];
$email = $_POST['email'];
$senha = $_POST['senha']; 

$sql = "INSERT INTO usuarios (nome_completo, nome_usuario, email, senha) VALUES ('$nome_completo', '$nome_usuario', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();/*/
?>

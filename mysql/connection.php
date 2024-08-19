<?php
$servidor = "localhost";
$banco = "kidelicia";
$usuario = "root";
$senha = "";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_errno) {
    echo "Conexão falhou: (" . $conn->connect_errno .")" . $conn->connect_errno;
}
else
//    echo "Conectado";

?>
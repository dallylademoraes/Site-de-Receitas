<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_usuarios";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome_completo = $_POST['nome_completo'];
    $nome_usuario = $_POST['nome_usuario'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    // Verificando se o nome de usuário já existe
    $sql = "SELECT id FROM usuarios WHERE nome_usuario=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome_usuario);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "Nome de usuário já em uso.";
        exit();
    }

    // Verificando se o email já existe
    $sql = "SELECT id FROM usuarios WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "E-mail já em uso.";
        exit();
    }

    // Verificando se o nome completo já existe
    $sql = "SELECT id FROM usuarios WHERE nome_completo=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome_completo);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "Nome completo já em uso.";
        exit();
    }

    // Inserindo os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome_completo, nome_usuario, email, senha) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome_completo, $nome_usuario, $email, $senha);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }

    // Fechando a conexão
    $stmt->close();
    $conn->close();
}

?>

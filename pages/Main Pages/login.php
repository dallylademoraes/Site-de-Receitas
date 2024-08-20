<?php
        include_once('connection.php');

        if(isset($_POST['submit'])){
            if(strlen($_POST['username']) == 0){
                echo "Preencha seu nome de usuário";
            }else if(strlen($_POST['password']) == 0){
                echo "Preencha sua senha";
            }else{
                $username = $mysqli->real_escape_string($_POST['username']);
                $password = $mysqli->real_escape_string($_POST['password']);

                $sql_code = "SELECT * FROM usuarios WHERE nome_usuario = '$username' AND senha = '$password'";
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                $quantidade = $sql_query->num_rows;

                if($quantidade == 1){
                    $usuario = $sql_query->fetch_assoc();

                    session_start();

                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];

                    header("Location: listagem.php");
                }else {
                   echo "<script>alert('Falha ao logar! Nome de usuário ou senha incorretos');</script>";
                    //echo "Falha ao logar! Nome de usuário ou senha incorretos";
                }
            }
        }
        ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/ed615418ed.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="cabecalho">
        <div class="icon">
            <i class="fa-solid fa-utensils"></i>
        </div>
        <h1 class="h1">KiDelicia</h1>
    </header>

    <div class="apresentacao">
        <form class="caixa_fundo" method="POST" action="login.php">
            <h1 class="titulo">Login</h1>
            <h3 class="campos">Usuário:</h3>
            <input class="bordas" id="campo_nome" type="text" name="username" placeholder="Nome usuário" required>
            <h3 class="campos">Senha:</h3>
            <input class="bordas" id="campo_senha" type="password" name="password" placeholder="Senha" required>

            <div class="botoes">
                <input type="submit" name="submit" class="b1" >  
                <a class="b2" href="cadastro.php">Cadastrar</a>
            </div>   
        </form>
            </div>
</body>
</html>
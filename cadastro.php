<?php
    include_once('banco_cadastro.php');

    if(isset($_POST['submit'])) {
        $nome_completo = $_POST['nome_completo'];
        $nome_usuario = $_POST['nome_usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome_completo,nome_usuario,email,senha) VALUES ('$nome_completo','$nome_usuario','$email','$senha')");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KiDelicia</title>
    
    <link rel="stylesheet" href="style_cadastro.css">
    <script src="https://kit.fontawesome.com/ed615418ed.js" crossorigin="anonymous"></script>

</head>
        
<body> 
    <form action="cadastro.php" method="POST">
    <header class="cabecalho">
           <div class="icon">
                <i class="fa-solid fa-utensils"></i>
           </div> 
            <h1 class="h1">KiDelicia</h1>
    </header> 
    <main class="apresentacao">
        <h1 class="titulo">Cadastro</h1>
        <div class="itens">

                <h3 class="h3">Nome completo:</h3>
                <input type="text" class="entrada" id="nome_completo" name="nome_completo" placeholder="Nome completo" required>

                <h3 class="h3">Nome usuário:</h3>
                <input type="text" class="entrada" id="nome_usuario" name="nome_usuario" placeholder="Nome usuário" required>

                <h3 class="h3">Email:</h3>
                <input type="email" class="entrada" id="email" name="email" placeholder="Email" required>

                <h3 class="h3">Senha:</h3>
                <input type="senha" class="entrada" id="senha" name="senha" placeholder="Senha" required>

                <p class="dica">Use pelo menos 8 caracteres, incluindo: números, símbolos, letras maiúsculas e minúsculas </p>

                <input type="submit" name="submit" id="submit" class="botao">
            </form>
        
        </div>
    </main>
    <footer>
    </footer>   
</body>
</html>
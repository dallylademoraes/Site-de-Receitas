<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KiDelicia</title>
    
    <link rel="stylesheet" href="style_cadastro.css">
    <script src="https://kit.fontawesome.com/ed615418ed.js" crossorigin="anonymous"></script>
    <form action="banco_cadastro.php" method="POST">

</head>
        
<body> 
    <header class="cabecalho">
           <div class="icon">
                <i class="fa-solid fa-utensils"></i>
           </div> 
            <h1 class="h1">KiDelicia</h1>
    </header> 
    <main class="apresentacao">
        <h1 class="titulo">Cadastro</h1>
        <div class="itens">

            <form action="" method="POST">
                <h3 class="h3">Nome completo:</h3>
                <input type="text" class="entrada" id="nome_completo" name="nome_completo" placeholder="Nome completo" required>

                <h3 class="h3">Nome usuário:</h3>
                <input type="text" class="entrada" id="nome_usuario" name="nome_usuario" placeholder="Nome usuário" required>

                <h3 class="h3">Email:</h3>
                <input type="email" class="entrada" id="email" name="email" placeholder="Email" required>

                <h3 class="h3">Senha:</h3>
                <textarea class="entrada" id="senha" placeholder="Senha"></textarea>

                <p class="dica">Use pelo menos 8 caracteres, incluindo: números, símbolos, letras maiúsculas e minúsculas </p>

                <button type="submit" class="botao">Cadastrar</button>
            </form>
        
        </div>
    </main>
    <footer>
    </footer>   
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="style_login.css">
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
        <form class="caixa_fundo">
            <h1 class="titulo">Login</h1>
            <h3 class="campos">Usuário:</h3>
            <input class="bordas" id="campo_nome" type="text" placeholder="Nome usuário">
            <h3 class="campos">Senha:</h3>
            <input class="bordas" id="campo_senha" type="password" placeholder="Senha">

            <div class="botoes">
                <button class="b1">Fazer login</button>  
                <a class="b2" href="cadastro.html">Cadastrar</a>  
            </div>
        </form>
    </div>

</body>

</html>
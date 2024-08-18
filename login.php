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
        <form class="caixa_fundo" method="POST" action="">
            <h1 class="titulo">Login</h1>
            <h3 class="campos">Usuário:</h3>
            <input class="bordas" id="campo_nome" type="text" name="username" placeholder="Nome usuário" required>
            <h3 class="campos">Senha:</h3>
            <input class="bordas" id="campo_senha" type="password" name="password" placeholder="Senha" required>

            <div class="botoes">
                <button class="b1"type="submit">Fazer login</button>  
                <a class="b2" href="cadastro.html">Cadastrar</a> 
            </div>   
        </form>
        
        <?php
        //verifica se o form foi submetido
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //captura os dados enviados pelo form
            $username = $_POST['username'];
            $password = $_POST['password'];

            //senha e usuário para teste
            $user_valido = "admin";
            $senha_valida = "12345";

            //verificação
            if($username == $user_valido && $password == $senha_valida){
                echo "<p>Logado!</p>"
            }else{
                echo "<p>Usuário ou senha incorreto!</p>";
            }
        }
    </div>


</body>

</html>
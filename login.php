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
        //dados de conexao com o bd
        $servername = "localhost"
        $username_db = "root";
        $password_db = "";
        $dbname = "kidelicia";

        //cria conexao
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        //verifica se a conexao foi bem-sucedida
        if ($conn->connect_error){
            die("Falha na conexão: " . $conn->connect_error);
        }

        //verifica se o form foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST['username'];
            $password = $_POST['password'];

            //consulta sql p/ verificar o usuario e senha
            $sql = "SELECT * FROM usuarios WHERE username = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param($sql);
            $stmt->execute():
            $result = $stmt->get_result();

            //verifica se o usuario existe
            if ($result->num_rows > 0){
                $row = $result->fetch_assoc();
                //verifica se a senha esta correta
                if (password_verify($password, $row['password'])){
                    echo "<p>Login bem-sucedido!</p>";
                    //redireciona para outra pag
                } else{
                    echo "<p>Senha incorreta!</p>";
                }
            } else{
                echo "<p>Usuário não encontrado!</p>";
            }

            //fecha a declaração e a conexao
            $stmt->close();
        }

        //fecha a conexao
        $conn->close();

    </div>

</body>

</html>
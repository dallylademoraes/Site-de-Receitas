# Site-de-Receitas

### Aviso de Modificações 
O Ultimo Merge Pull Request feito na main eu alterei as seguintes coisas junto com a mara. 

Alteramos o connection.php para não dar conflito na hora de salvar as receitas no banco. É provável que na hora de cadastrar os usuarios para login vocês
precisem alterar algums coisinhas. 

``` php
<?php
$servidor = "localhost";
$banco = "kidelicia";
$usuario = "root";
$senha = "";

// Alteramos para conn
$conn = new mysqli($servidor, $usuario, $senha, $banco);


// Alteramos para conn
if ($conn->connect_errno) {
    echo "Conexão falhou: (" . $conn->connect_errno .")" . $conn->connect_errno;
}
else
    echo "Conectado";

?>
```

Mais uma coisa, o banco de dados sofreu uma atualização na tabela "receitas". <br>
![image](https://github.com/user-attachments/assets/f92e28a4-32c6-426a-a2bf-c6240deddaf9)

[Dallyla] - Não esquece de atualizar no seu.

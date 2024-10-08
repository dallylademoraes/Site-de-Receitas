<?php
include_once('connection.php');

// Obtenha o ID da receita da URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Defina a URL de redirecionamento
    $redirect_url = "http://localhost/Site-de-Receitas2/pagina-principal/listagem.php";

    // Redirecione para a página de listagem
    header("Location: $redirect_url");
    exit();
}

// Prepare e execute a consulta
$stmt = $conn->prepare("
    SELECT r.nome_receita, r.tempo_preparo, r.qtd_pessoas, r.autor, r.descricao, r.ingredientes, r.modo_preparo, r.categoria, i.path AS img_path
    FROM receitas r
    LEFT JOIN img i ON r.img_id = i.id
    WHERE r.idreceitas = ?
");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nome_receita, $tempo_preparo, $qtd_pessoas, $autor, $descricao, $ingredientes, $modo_preparo, $categoria, $img_path);
$stmt->fetch();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/bd4fd62cff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/individual-recipe.css">
    <title><?php echo htmlspecialchars($nome_receita); ?> - KiDelicia</title>
</head>
<body>
<header>
    <div class="header-container">
        <a href="listagem.php">
            <i class="fa-solid fa-utensils"></i>
        </a>
        <a href="listagem.php">
            <h1>KiDelicia</h1>
        </a>
    </div>
    <div class="search-bar">
        <form action="listagem.php" method="get">
            <input type="text" name="search" placeholder="Procure uma receita, um ingrediente, um tipo de prato ..." value="<?php echo isset($search_term) ? htmlspecialchars($search_term) : ''; ?>">
            <button class="btn-pesquisar" type="submit">Pesquisar</button>
        </form>
    </div>
    <div>
        <img class="people-img" style="margin-right: 40px;" src="../src/icon-acc.svg" alt="Account">
    </div>
</header>

<nav>
    <ul class="menu">
        <li><a href="listagem.php?category=bolos_tortas">Bolos e Tortas</a></li>
        <li><a href="listagem.php?category=carnes">Carnes</a></li>
        <li><a href="listagem.php?category=aves">Aves</a></li>
        <li><a href="listagem.php?category=peixes_frutosdomar">Peixes e Frutos do Mar</a></li>
        <li><a href="listagem.php?category=saladas">Saladas</a></li>
        <li><a href="listagem.php?category=sopas">Sopas</a></li>
        <li><a href="listagem.php?category=massas_molhos">Massas e Molhos</a></li>
        <li><a href="listagem.php?category=bebidas">Bebidas</a></li>
        <li><a href="listagem.php?category=doces_sobremesas">Doces e Sobremesas</a></li>
        <li><a href="listagem.php?category=todas_as_receitas">Todas as Receitas</a></li>
    </ul>
</nav>

<main>
    <article class="recipe">
        <div class="recipe-info">
            <h1 class="recipe-name"><?php echo htmlspecialchars($nome_receita); ?></h1>
            <p class="recipe-serves">
                Serve <?php echo htmlspecialchars($qtd_pessoas); ?> pessoas / <?php echo htmlspecialchars($tempo_preparo); ?> para preparar
            </p>
<!--            <p>-->
<!--                Autor: --><?php //echo htmlspecialchars($autor); ?>
<!--            </p>-->
            <div class="socials">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </div>
            <p class="recipe-description">
                <?php echo htmlspecialchars($descricao); ?>
            </p>
        </div>
        <!-- Exibindo a imagem da receita EM TAMANHO MAXIMIZADO-->
        <img class="recipe-image2" src="<?php echo htmlspecialchars($img_path); ?>" alt="Imagem da receita" onerror="this.src='default-image.jpg';">
    </article>

    <article>
        <div class="list">
            <h3>Ingredientes</h3>
            <ul class="recipe-ingredients">
                <?php
                $ingredientes_array = explode("\n", $ingredientes);
                foreach ($ingredientes_array as $ingrediente) {
                    echo '<li>' . htmlspecialchars($ingrediente) . '</li>';
                }
                ?>
            </ul>
        </div>
    </article>
    <article>
        <div class="recipe-preparation">
            <h3>Modo de Preparo</h3>
            <ol>
                <?php
                $modo_preparo_array = explode("\n", $modo_preparo);
                foreach ($modo_preparo_array as $passo) {
                    echo '<li>' . htmlspecialchars($passo) . '</li>';
                }
                ?>
            </ol>
        </div>
    </article>
</main>

<footer>
    <p>&copy; 2024 - Todos os direitos reservados</p>
    <p>www.kidelicia.com.br</p>
    <ul class="footer-ul">
    </ul>
</footer>
</body>
</html>

<?php
// Feche a conexão
$stmt->close();
$conn->close();
?>

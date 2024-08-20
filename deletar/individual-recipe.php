<?php
include_once('../mysql/connection.php');

// Obtenha o ID da receita da URL
$id = $_GET['id'];

// Prepare e execute a consulta
$stmt = $conn->prepare("SELECT nome_receita, tempo_preparo, qtd_pessoas, autor, descricao, ingredientes, modo_preparo, categoria FROM receitas WHERE idreceitas = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nome_receita, $tempo_preparo, $qtd_pessoas, $autor, $descricao, $ingredientes, $modo_preparo, $categoria);
$stmt->fetch();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/bd4fd62cff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/individual-recipe.css">
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
        <input type="text" placeholder="Procure uma receita, um ingrediente, um tipo de prato ...">
        <button class="btn-pesquisar">Pesquisar</button>
    </div>
    <div>
        <img class="people-img" style="margin-right: 40px;" src="src/icon-acc.svg" alt="Account">
    </div>
</header>
<nav>
    <ul class="menu">
        <li><a href="?category=bolos_e_tortas">Bolos e Tortas</a></li>
        <li><a href="?category=carnes">Carnes</a></li>
        <li><a href="?category=aves">Aves</a></li>
        <li><a href="?category=peixes_e_frutos_do_mar">Peixes e Frutos do Mar</a></li>
        <li><a href="?category=saladas">Saladas</a></li>
        <li><a href="?category=sopas">Sopas</a></li>
        <li><a href="?category=massas_e_molhos">Massas e Molhos</a></li>
        <li><a href="?category=bebidas">Bebidas</a></li>
        <li><a href="?category=doces_e_sobremesas">Doces e Sobremesas</a></li>
        <li><a href="?category=todas_as_receitas">Todas as Receitas</a></li>
    </ul>
</nav>
<main>
    <article class="recipe">
        <div class="recipe-info">
            <h1 class="recipe-name"><?php echo htmlspecialchars($nome_receita); ?></h1>
            <p class="recipe-serves">
                Serve <?php echo htmlspecialchars($qtd_pessoas); ?> pessoas / <?php echo htmlspecialchars($tempo_preparo); ?> minutos de preparo
            </p>
            <p>
                Autor: <?php echo htmlspecialchars($autor); ?>
            </p>
            <div class="socials">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </div>
            <p class="recipe-description">
                <?php echo htmlspecialchars($descricao); ?>
            </p>
        </div>
        <img class="recipe-image" src="src/bolo.png" alt="">
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

    <article id="discover-bottom">
        <h3 class="txt">Descobrir mais receitas</h3>
        <div class="discover-recipe">
            <div class="recipe-item">
                <img src="src/recipe-item/img.png" alt="" width="300px">
                <div class="bar">
                    <p><a>BOLO DE LARANJA</a></p>
                </div>
            </div>
            <div class="recipe-item">
                <img src="src/recipe-item/img.png" alt="" width="300px">
                <div class="bar">
                    <p><a>BOLO DE LARANJA</a></p>
                </div>
            </div>
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

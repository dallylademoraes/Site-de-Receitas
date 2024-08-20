<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KiDelicia</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/ed615418ed.js" crossorigin="anonymous"></script>
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
        <img style="margin-right: 40px;" src="src/icon-acc.svg" alt="Account">
    </div>
</header>
<nav>
    <ul class="menu">
        <li><a href="?category=bolos_tortas">Bolos e Tortas</a></li>
        <li><a href="?category=carnes">Carnes</a></li>
        <li><a href="?category=aves">Aves</a></li>
        <li><a href="?category=peixes_frutosdomar">Peixes e Frutos do Mar</a></li>
        <li><a href="?category=saladas">Saladas</a></li>
        <li><a href="?category=sopas">Sopas</a></li>
        <li><a href="?category=massas_molhos">Massas e Molhos</a></li>
        <li><a href="?category=bebidas">Bebidas</a></li>
        <li><a href="?category=doces_sobremesas">Doces e Sobremesas</a></li>
        <li><a href="?category=todas_as_receitas">Todas as Receitas</a></li>
    </ul>
</nav>
<div class="content">
    <?php
    include_once('../mysql/connection.php');

    // Mapeamento de categorias para nomes amigáveis
    $category_names = array(
        'bolos_tortas' => 'Bolos e Tortas',
        'carnes' => 'Carnes',
        'aves' => 'Aves',
        'peixes_frutosdomar' => 'Peixes e Frutos do Mar',
        'saladas' => 'Saladas',
        'sopas' => 'Sopas',
        'massas_molhos' => 'Massas e Molhos',
        'bebidas' => 'Bebidas',
        'doces_sobremesas' => 'Doces e Sobremesas',
        'todas_as_receitas' => 'Todas as Receitas'
    );

    // Obtém a categoria da URL
    $category = isset($_GET['category']) ? $_GET['category'] : '';

    // Condição para exibir mensagens padrão ou listas de receitas
    if (empty($category) || $category == 'todas_as_receitas') {
        if ($category != 'todas_as_receitas') {
            echo '<section class="welcome show">';
            echo '<h2>Bem-vindo ao KiDelicia!</h2>';
            echo '<p>Escolha uma categoria acima para começar a explorar nossas receitas deliciosas.</p>';
            echo '</section>';
        }

        if ($category == 'todas_as_receitas') {
            // Consulta para obter todas as receitas em ordem alfabética
            $sql = "SELECT idreceitas, nome_receita FROM receitas ORDER BY nome_receita ASC";
        } else {
            $sql = "";
        }
    } else {
        // Sanitização da variável para evitar SQL Injection
        $category = $conn->real_escape_string($category);

        // Consulta para obter receitas da categoria selecionada
        $sql = "SELECT idreceitas, nome_receita FROM receitas WHERE categoria='$category'";
    }

    if (!empty($sql)) {
        $result = $conn->query($sql);

        if ($conn->error) {
            echo '<p>Erro na consulta: ' . $conn->error . '</p>';
        }

        // Exibe o título da seção
        $section_title = isset($category_names[$category]) ? $category_names[$category] : ucfirst(str_replace('_', ' ', htmlspecialchars($category)));
        echo '<section id="' . htmlspecialchars($category) . '" class="show">';
        echo '<h2>' . htmlspecialchars($section_title) . '</h2>';
        echo '<div class="recipes-list">';

        if ($result->num_rows > 0) {
            // Exibe as receitas da categoria
            while ($row = $result->fetch_assoc()) {
                echo '<div class="recipe-item">';
                echo '<a href="individual-recipe.php?id=' . $row['idreceitas'] . '">' . htmlspecialchars($row['nome_receita']) . '</a>';
                echo '</div>';
            }
        } else {
            echo '<p>Nenhuma receita encontrada nesta categoria.</p>';
        }

        echo '</div></section>';

        // Fecha a conexão
        $conn->close();
    }
    ?>
</div>
</body>
</html>

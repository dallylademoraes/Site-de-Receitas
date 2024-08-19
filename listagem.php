<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Receitas</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/ed615418ed.js" crossorigin="anonymous"></script>
  </head>
<body>
  <header>
    <div class="header-container" >
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
      <img style="margin-right: 40px;" src="imagens/account_circle_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Account">
    </div>
  </header>
  <nav>
    <ul class="menu">
    <li><a href="?category=bolos e tortas">Bolos e Tortas</a></li>
    <li><a href="?category=carnes">Carnes</a></li>
    <li><a href="?category=aves">Aves</a></li>
    <li><a href="?category=peixes e frutos do mar">Peixes e Frutos do Mar</a></li>
    <li><a href="?category=saladas e molhos">Saladas e Molhos</a></li>
    <li><a href="?category=sopas">Sopas</a></li>
    <li><a href="?category=massas">Massas</a></li>
    <li><a href="?category=bebidas">Bebidas</a></li>
    <li><a href="?category=doces e sobremesas">Doces e Sobremesas</a></li>
    <li><a href="?category=todas as receitas">Todas as Receitas</a></li>
    </ul>
  </nav>
  <div class="content">
   <?php  

    include("conexao.php");

    $category = $_GET['category'] ?? '';

    if (empty($category)) {
      echo '<section class="welcome show">';
      echo '<h2>Bem-vindo ao KiDelicia!</h2>';
      echo '<p>Escolha uma categoria acima para começar a explorar nossas receitas deliciosas.</p>';
      echo '</section>';
    } 
      //teste com banco de dados
      if(!empty($category)){
        $sql = "SELECT nome_receita, tempo_preparo, qtd_pessoas, descricao, ingredientes, preparo, imagem FROM receitas WHERE categoria = ?";

        $stmt = $conn->prepare($sql); // preparando a consulta
        $stmt->bind_param("s", $category);

        $stmt->execute();

        $result = $stmt->get_result();

        echo '<section class="show">';
        echo '<h2>' . ucfirst($category) . '</h2>'; // nome da categoria
        echo '<div class="recipes-list">';
    
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            //informacoes da receita aqui
            echo '<div class="recipe">';
            // Exibição da imagem 
            if (!empty($row['imagem'])) {
              echo '<img src="' . htmlspecialchars($row['imagem']) . '" alt="Imagem de comida' . htmlspecialchars($row['nome_receita']) . '">';
            }
            echo '<h3>' . htmlspecialchars($row['nome_receita']) . '</h3>'; 
            echo '<p><strong>Tempo de Preparo:</strong> ' . htmlspecialchars($row['tempo_preparo']) . '</p>';  
            echo '<p><strong>Serve:</strong> ' . htmlspecialchars($row['qtd_pessoas']) . ' pessoas</p>'; 
            echo '<p><strong>Descrição:</strong> ' . htmlspecialchars($row['descricao']) . '</p>';
            echo '<p><strong>Ingredientes:</strong> ' . htmlspecialchars($row['ingredientes']) . '</p>';
            echo '<p><strong>Modo de Preparo:</strong> ' . htmlspecialchars($row['preparo']) . '</p>';  
            echo '</div>';
          }
        }else {
          echo '<p>Nenhuma receita encontrada para esta categoria.</p>';
        }
        echo '<div>';
        echo '</section>';
      }
    ?>
  </div>
</body>
</html>
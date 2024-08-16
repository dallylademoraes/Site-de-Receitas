<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Receitas</title>
  <link rel="stylesheet" href="style.css">
  </head>
<body>
  <header>
    <div>
      <h1 style="margin-left: 60px;"><a style="text-decoration: none; color: inherit" href="listagem.php">KiDelicia</a></h1>
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
      <li><a href="?category=bolosetortas">Bolos e Tortas</a></li>
      <li><a href="?category=carnes">Carnes</a></li>
      <li><a href="?category=aves">Aves</a></li>
      <li><a href="?category=peixesefrutosdomar">Peixes e Frutos do Mar</a></li>
      <li><a href="?category=saladasemolhos">Saladas e Molhos</a></li>
      <li><a href="?category=sopas">Sopas</a></li>
      <li><a href="?category=massas">Massas</a></li>
      <li><a href="?category=bebidas">Bebidas</a></li>
      <li><a href="?category=docesesobremesas">Doces e Sobremesas</a></li>
      <li><a href="?category=todasasreceitas">Todas as Receitas</a></li>
    </ul>
  </nav>
  <div class="content">
   <?php  
    // url
    $category = isset($_GET['category']) ? $_GET['category'] : '';

    if (empty($category)) {
      echo '<section class="welcome show">';
      echo '<h2>Bem-vindo ao KiDelicia!</h2>';
      echo '<p>Escolha uma categoria acima para começar a explorar nossas receitas deliciosas.</p>';
      echo '</section>';
    } elseif ($category === 'bolosetortas') {
      echo '<section id="bolosetortas" class="show">';
      echo '<h2>Bolos e Tortas</h2>';
      echo '<div class="recipes-list">';
      // Lista de receitas de bolos e tortas aqui
      echo '</div></section>';
    } elseif ($category === 'carnes') {
      echo '<section id="carnes" class="show">';
      echo '<h2>Carnes</h2>';
      echo '<div class="recipes-list">';
      // Lista de receitas de carnes aqui
      echo '</div></section>';
    } elseif ($category === 'aves') {
      echo '<section id="aves" class="show">';
      echo '<h2>Aves</h2>';
      echo '<div class="recipes-list">';
      // Lista de receitas de aves aqui
      echo '</div></section>';
    } elseif ($category === 'peixesefrutosdomar') {
      echo '<section id="peixesefrutosdomar" class="show">';
      echo '<h2>Peixes e Frutos do Mar</h2>';
      echo '<div class="recipes-list">';
      // Lista de receitas de peixes e frutos do mar aqui
      echo '</div></section>';
    } elseif ($category === 'saladasemolhos') {
      echo '<section id="saladasemolhos" class="show">';
      echo '<h2>Saladas e Molhos</h2>';
      echo '<div class="recipes-list">';
      // Lista de receitas de saladas e molhos aqui
      echo '</div></section>';
    } elseif ($category === 'sopas') {
      echo '<section id="sopas" class="show">';
      echo '<h2>Sopas</h2>';
      echo '<div class="recipes-list">';
      // Lista de receitas de sopas aqui
      echo '</div></section>';
    } elseif ($category === 'massas') {
      echo '<section id="massas" class="show">';
      echo '<h2>Massas</h2>';
      echo '<div class="recipes-list">';
      // Lista de receitas de massas aqui
      echo '</div></section>';
    } elseif ($category === 'bebidas') {
      echo '<section id="bebidas" class="show">';
      echo '<h2>Bebidas</h2>';
      echo '<div class="recipes-list">';
      // Lista de receitas de bebidas aqui
      echo '</div></section>';
    } elseif ($category === 'docesesobremesas') {
      echo '<section id="docesesobremesas" class="show">';
      echo '<h2>Doces e Sobremesas</h2>';
      echo '<div class="recipes-list">';
      // Lista de receitas de doces e sobremesas aqui
      echo '</div></section>';
    } elseif ($category === 'todasasreceitas') {
      echo '<section id="todasasreceitas" class="show">';
      echo '<h2>Todas as Receitas</h2>';
      echo '<div class="recipes-list">';
      // Lista de todas as receitas aqui
      echo '</div></section>';
    } else {
      echo '<section class="show">';
      echo '<h2>Bem-vindo! Selecione uma categoria para começar.</h2>';
      echo '</section>';
    }
    ?>
  </div>
</body>
</html>
<?php ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/bd4fd62cff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="individual-recipe.css">
    <title>KiDelicia</title>
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
            <img class="people-img" style="margin-right: 40px;" src="../imagens/account_circle_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Account">
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
   <main>
       <article class="recipe">
           <div class="recipe-info">
               <h1 class="recipe-name">Bolo de Cenoura</h1>
               <p class="recipe-serves">
                   Serve 5 pessoas / 40 Minutos de Preparo
               </p>
               <p>
                   Autor: Luís Gustavo
               </p>
               <div class="socials">
                   <i class="fa-brands fa-instagram"></i>
                   <i class="fa-brands fa-twitter"></i>
                   <i class="fa-brands fa-whatsapp"></i>
               </div>   
               <p class="recipe-description">
                   O bolo de cenoura é uma clássica sobremesa que combina a suavidade da cenoura com uma textura macia e fofinha. Seu sabor levemente adocicado é perfeitamente equilibrado pela cobertura de chocolate, que adiciona uma camada rica e cremosa ao topo do bolo. Além de ser uma receita simples e rápida de preparar, o bolo de cenoura é um sucesso garantido em qualquer ocasião, trazendo um toque de conforto e nostalgia a cada fatia. Ideal para acompanhar um café da tarde ou para adoçar o dia com um sabor caseiro e acolhedor.
               </p>
           </div>
           <img class="recipe-image" src="../imagens/bolo.png" alt="">
       </article>

       <article>
           <div class="list">
           <h3>Ingredientes</h3>
               <ul class="recipe-ingredients">
                   <li>2 laranjas pêra</li>
                   <li>2 ovos</li>
                   <li>1 xícara (chá) de óleo</li>
                   <li>2 xícaras (chá) de farinha de trigo</li>
                   <li>2 colheres (chá) de fermento em pó</li>
                   <li>Manteiga e Farinha de trigo para untar e polvilhar a forma.</li>
               </ul>
           </div>
       </article>
       <article>
           <div class="recipe-preparation">
               <h3>Modo de Preparo</h3>
               <ol>
                   <li>Preaqueça o forno a 180 °C (temperatura média). Com um pedaço de papel toalha, unte com manteiga uma fôrma com furo no meio de 24 cm de diâmetro – espalhe uma camada bem fina e uniforme. Polvilhe com farinha e chacoalhe bem para espalhar. Bata sobre a pia para retirar o excesso.</li>
                   <li>Descasque uma das laranjas, eliminando toda a parte branca. Lave bem a outra sob água corrente e corte e descarte as pontas, mantendo a casca (se preferir um sabor menos amargo, descasque e elimine a parte branca das duas laranjas). Corte as laranjas em quatro gomos. Descarte o miolo branco e os caroços, corte cada gomo em três pedaços e transfira para o liquidificador.</li>
                   <li>Numa tigela pequena quebre um ovo de cada vez e transfira para o liquidificador – se um estiver estragado você não perde a receita. Junte o óleo, o açúcar e bata bem até ficar liso.</li>
                   <li>Numa tigela média, misture a farinha com o fermento em pó.</li>
                   <li>Transfira a laranja batida com os líquidos para uma tigela grande e acrescente a farinha com o fermento aos poucos, passando pela peneira. Misture delicadamente com o batedor de arame a cada adição para incorporar.</li>
                   <li>Transfira a massa do bolo para a fôrma e leve ao forno para assar por cerca de 50 minutos. Para verificar se o bolo está pronto: espete um palito na massa, se sair limpo pode retirar do forno; caso contrário, deixe por mais alguns minutos, até que asse completamente.</li>
                   <li>Retire o bolo do forno e deixe esfriar por 30 minutos antes de desenformar – cuidado, o bolo pode rachar se estiver quente ao ser desenformado. Cubra a fôrma com um prato e vire de uma só vez para desenformar. Atenção: o bolo deve estar completamente frio antes de cobrir com o glacê.</li>
               </ol>
           </div>
       </article>

       <article id="discover-bottom">
           <h3 class="txt">Descobrir mais receitas</h3>
           <div class="discover-recipe">
               <div class="recipe-item">
                   <img src="../imagens/recipe-item/img.png" alt="" width="300px">
                   <div class="bar">
                        <p><a>BOLO DE LARANJA</a></p>
                   </div>
               </div>
               <div class="recipe-item">
                   <img src="../imagens/recipe-item/img.png" alt="" width="300px">
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
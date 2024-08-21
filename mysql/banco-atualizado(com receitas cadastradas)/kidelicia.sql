-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/08/2024 às 05:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kidelicia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `img`
--

INSERT INTO `img` (`id`, `path`) VALUES
(1, 'images/img (1).png'),
(2, 'images/imagem_2024-08-20_233758713.png'),
(3, 'images/imagem_2024-08-20_233930365.png'),
(4, 'images/imagem_2024-08-20_234037682.png'),
(5, 'images/imagem_2024-08-20_234143178.png'),
(6, 'images/imagem_2024-08-20_234232656.png'),
(7, 'images/imagem_2024-08-20_234350807.png'),
(8, 'images/imagem_2024-08-20_234424871.png'),
(9, 'images/imagem_2024-08-20_234609954.png'),
(10, 'images/imagem_2024-08-20_234715467.png'),
(11, 'images/imagem_2024-08-20_234825098.png'),
(12, 'images/imagem_2024-08-20_234915598.png'),
(13, 'images/imagem_2024-08-20_235022816.png'),
(14, 'images/imagem_2024-08-20_235109856.png'),
(15, 'images/imagem_2024-08-20_235222853.png'),
(16, 'images/imagem_2024-08-20_235329890.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `receitas`
--

CREATE TABLE `receitas` (
  `idreceitas` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `nome_receita` varchar(45) NOT NULL,
  `tempo_preparo` varchar(45) NOT NULL,
  `qtd_pessoas` int(11) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `ingredientes` varchar(600) NOT NULL,
  `modo_preparo` varchar(2000) NOT NULL,
  `categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `receitas`
--

INSERT INTO `receitas` (`idreceitas`, `img_id`, `nome_receita`, `tempo_preparo`, `qtd_pessoas`, `autor`, `descricao`, `ingredientes`, `modo_preparo`, `categoria`) VALUES
(1, 1, 'Bolo de Laranja', '50 minutos', 8, 'Luís Gustavo', 'Bolo macio e aromático com sabor refrescante de laranja.', '3 ovos\r\n1 xícara de açúcar\r\n1/2 xícara de óleo\r\n1 xícara de suco de laranja\r\n2 xícaras de farinha de trigo\r\n1 colher de sopa de fermento em pó\r\n1 pitada de sal\r\nRaspas de 1 laranja', 'Preaqueça o forno a 180°C.\r\nBata os ovos com o açúcar até formar um creme.\r\nAdicione o óleo e o suco de laranja, misture bem.\r\nIncorpore a farinha, o fermento, o sal e as raspas de laranja.\r\nDespeje a massa em uma forma untada.\r\nAsse por 30-40 minutos ou até dourar.\r\nDeixe esfriar antes de servir.', 'bolos_tortas'),
(2, 2, 'Torta de Frango', '1 horas e 10 minutos', 6, 'Luís Gustavo', 'Torta salgada com recheio cremoso de frango e queijo.', '2 xícaras de farinha de trigo\r\n1/2 xícara de manteiga\r\n1 ovo\r\n1/4 xícara de água gelada\r\n2 xícaras de frango desfiado\r\n1/2 xícara de cebola picada\r\n1/2 xícara de cenoura ralada\r\n1/2 xícara de milho\r\n1/2 xícara de ervilha\r\n1/2 xícara de creme de leite\r\n1/2 xícara de queijo ralado\r\nSal e pimenta a gosto\r\n1 colher de sopa de óleo', 'Preaqueça o forno a 180°C.\r\nMisture a farinha com a manteiga até formar uma farofa.\r\nAdicione o ovo e a água, misture até formar uma massa.\r\nAbra a massa e forre uma forma de torta.\r\nAqueça o óleo e refogue a cebola até dourar.\r\nAdicione o frango, cenoura, milho e ervilha, misture bem.\r\nIncorpore o creme de leite e o queijo, ajuste o sal e pimenta.\r\nRecheie a massa com o frango.\r\nCubra com outra camada de massa ou faça uma decoração com tiras.\r\nAsse por 30-40 minutos até dourar.', 'bolos_tortas'),
(3, 3, 'Carne de Panela', '1 horas e 30 minutos', 6, 'Luís Gustavo', 'Carne cozida com legumes em molho saboroso e consistente.', '1 kg de carne de peito ou coxão mole cortada em cubos\r\n2 colheres de sopa de óleo\r\n1 cebola picada\r\n3 dentes de alho picados\r\n2 tomates picados\r\n2 cenouras cortadas em rodelas\r\n2 batatas cortadas em cubos\r\n1 xícara de caldo de carne\r\n1/2 xícara de vinho tinto (opcional)\r\n1 folha de louro\r\nSal e pimenta a gosto\r\n1 colher de sopa de extrato de tomate', 'Aqueça o óleo em uma panela grande e doure a carne.\r\nAdicione a cebola e o alho, refogue até ficarem transparentes.\r\nAcrescente os tomates e o extrato de tomate, cozinhe por alguns minutos.\r\nAdicione o caldo de carne e o vinho (se usar), mexa bem.\r\nJunte a cenoura, batata e a folha de louro.\r\nTempere com sal e pimenta.\r\nCozinhe em fogo baixo com a panela tampada por cerca de 1 hora, mexendo ocasionalmente.\r\nVerifique o ponto da carne e dos legumes, ajuste o tempero se necessário.\r\nSirva quente.', 'carnes'),
(4, 4, 'Almôndegas ao Molho', '1 horas', 4, 'Luís Gustavo', 'Almôndegas suculentas em molho de tomate caseiro.', '500 g de carne moída\r\n1/2 xícara de pão ralado\r\n1/4 xícara de queijo parmesão ralado\r\n1 ovo\r\n2 colheres de sopa de salsinha picada\r\n1 dente de alho picado\r\nSal e pimenta a gosto\r\n1 colher de sopa de óleo para fritar\r\n1 lata de tomate pelado\r\n1 cebola picada\r\n2 dentes de alho picados\r\n1 colher de sopa de azeite\r\n1 colher de chá de açúcar\r\nSal e pimenta a gosto\r\nFolhas de manjericão (opcional)', 'Misture a carne moída, pão ralado, queijo parmesão, ovo, salsinha, alho, sal e pimenta.\r\nModele a mistura em bolinhos de tamanho uniforme.\r\nAqueça o óleo em uma frigideira e frite as almôndegas até dourarem, reserve.\r\nPara o molho, aqueça o azeite em uma panela e refogue a cebola e o alho até ficarem macios.\r\nAdicione os tomates, açúcar, sal e pimenta. Cozinhe por 10 minutos.\r\nAdicione as almôndegas ao molho e cozinhe em fogo baixo por 15-20 minutos.\r\nFinalize com manjericão se desejar e sirva quente.', 'carnes'),
(5, 5, 'Frango à Parmegiana', '1 horas', 3, 'Luís Gustavo', 'Frango empanado com molho de tomate e queijo derretido.', '4 peitos de frango\r\n1 xícara de farinha de trigo\r\n2 ovos batidos\r\n1 xícara de farinha de rosca\r\n1 xícara de queijo parmesão ralado\r\n2 xícaras de molho de tomate\r\n1 xícara de queijo muçarela fatiado\r\nSal e pimenta a gosto\r\nÓleo para fritar', 'Tempere os peitos de frango com sal e pimenta.\r\nPasse os peitos na farinha de trigo, depois nos ovos batidos e, por fim, na farinha de rosca misturada com parmesão.\r\nAqueça o óleo e frite os peitos de frango até dourarem e cozinharem por dentro.\r\nColoque os peitos em uma assadeira, cubra com o molho de tomate e coloque as fatias de muçarela por cima.\r\nLeve ao forno preaquecido a 180°C por 15-20 minutos até o queijo derreter e borbulhar.\r\nSirva quente.', 'aves'),
(6, 6, 'Frango com Creme de Milho', '40 minutos', 3, 'Luís Gustavo', 'Frango cozido em um creme de milho saboroso e cremoso.', '500 g de peito de frango cortado em cubos\r\n1 lata de milho verde (escorrido)\r\n1/2 xícara de creme de leite\r\n1/2 xícara de leite\r\n1 colher de sopa de amido de milho\r\n1 cebola picada\r\n2 dentes de alho picados\r\n2 colheres de sopa de óleo\r\nSal e pimenta a gosto\r\nSalsinha picada para decorar', 'Aqueça o óleo em uma panela e refogue a cebola e o alho até dourarem.\r\nAdicione o frango e cozinhe até dourar.\r\nEm um liquidificador, bata o milho com o creme de leite e o leite até formar um creme.\r\nAdicione o creme de milho ao frango, misture bem.\r\nDissolva o amido de milho em um pouco de leite e adicione à panela, mexendo até o creme engrossar.\r\nTempere com sal e pimenta a gosto.\r\nDecore com salsinha picada e sirva quente.', 'carnes'),
(7, 7, 'Peixe ao Forno com Ervas', '40 minutos', 4, 'Luís Gustavo', 'Peixe assado com ervas e limão, simples e saboroso.', '4 filés de peixe (como tilápia ou merluza)\r\n2 colheres de sopa de azeite\r\nSuco de 1 limão\r\n2 dentes de alho picados\r\n1 colher de chá de ervas secas (como tomilho, alecrim ou orégano)\r\nSal e pimenta a gosto\r\nRodelas de limão para decorar', 'Preaqueça o forno a 180°C.\r\nTempere os filés de peixe com sal, pimenta e ervas secas.\r\nColoque os filés em uma assadeira untada com azeite.\r\nRegue com o suco de limão e o azeite restante.\r\nDistribua o alho picado sobre os filés.\r\nAsse por 20-25 minutos, ou até o peixe estar cozido e opaco.\r\nDecore com rodelas de limão e sirva.', 'peixes_frutosdomar'),
(8, 8, 'Camarão ao Alho e Óleo', '20 minutos', 4, 'Luís Gustavo', 'Camarões salteados com alho e óleo, rápidos e deliciosos.', '500 g de camarões limpos e descascados\r\n4 colheres de sopa de azeite\r\n4 dentes de alho fatiados\r\n1 colher de chá de pimenta calabresa (opcional)\r\nSal e pimenta a gosto\r\nSalsinha picada para decorar', 'Aqueça o azeite em uma frigideira grande.\r\nAdicione o alho e refogue até começar a dourar.\r\nAcrescente os camarões e a pimenta calabresa (se usar).\r\nCozinhe os camarões por 2-3 minutos de cada lado, até ficarem rosados e opacos.\r\nTempere com sal e pimenta a gosto.\r\nDecore com salsinha picada e sirva imediatamente.', 'peixes_frutosdomar'),
(9, 9, 'Salada de Grão-de-Bico', '20 minutos', 4, 'Luís Gustavo', 'Salada refrescante e nutritiva com grão-de-bico, legumes e ervas.', '1 xícara de grão-de-bico cozido e escorrido\r\n1 pepino cortado em cubos\r\n1 tomate cortado em cubos\r\n1/2 cebola roxa picada\r\n1/4 xícara de azeitonas pretas fatiadas\r\n1/4 xícara de salsinha picada\r\nSuco de 1 limão\r\n3 colheres de sopa de azeite\r\nSal e pimenta a gosto', 'Em uma tigela grande, misture o grão-de-bico, pepino, tomate, cebola roxa e azeitonas.\r\nAdicione a salsinha picada.\r\nRegue com o suco de limão e o azeite.\r\nTempere com sal e pimenta a gosto.\r\nMisture bem e sirva imediatamente ou deixe na geladeira por 30 minutos para apurar os sabores.', 'saladas'),
(10, 10, 'Sopa de Abóbora', '40 minutos', 4, 'Luís Gustavo', 'Sopa cremosa e reconfortante de abóbora com especiarias.', '1 kg de abóbora descascada e cortada em cubos\r\n1 cebola picada\r\n2 dentes de alho picados\r\n1 cenoura picada\r\n1 batata picada\r\n1 litro de caldo de legumes\r\n1 colher de chá de cominho\r\n1 colher de chá de curry em pó\r\n2 colheres de sopa de azeite\r\nSal e pimenta a gosto\r\nCreme de leite para servir (opcional)', 'Aqueça o azeite em uma panela grande e refogue a cebola e o alho até ficarem macios.\r\nAdicione a cenoura, batata e abóbora, refogue por alguns minutos.\r\nAdicione o caldo de legumes, cominho e curry. Cozinhe até os legumes ficarem macios (cerca de 20 minutos).\r\nUse um liquidificador ou processador para bater a sopa até ficar cremosa.\r\nTempere com sal e pimenta a gosto.\r\nSirva quente, com um fio de creme de leite se desejar.', 'sopas'),
(11, 11, 'Spaghetti à Carbonara', '30 minutos', 4, 'Luís Gustavo', 'Spaghetti cremoso com molho de ovos, queijo e bacon.', '400 g de spaghetti\r\n200 g de bacon cortado em cubos\r\n2 ovos\r\n1/2 xícara de queijo parmesão ralado\r\n2 dentes de alho picados\r\nSal e pimenta a gosto\r\nSalsinha picada para decorar', 'Cozinhe o spaghetti conforme as instruções da embalagem.\r\nEm uma frigideira, frite o bacon até ficar crocante. Adicione o alho e refogue por 1 minuto.\r\nEm uma tigela, bata os ovos com o queijo parmesão e tempere com sal e pimenta.\r\nEscorra o spaghetti e adicione à frigideira com o bacon. Misture bem.\r\nRetire do fogo e acrescente a mistura de ovos, mexendo rapidamente para formar um molho cremoso.\r\nSirva quente, decorado com salsinha picada.', 'massas_molhos'),
(12, 12, 'Lasanha à Bolonhesa', '1 horas e 15 minutos', 6, 'Luís Gustavo', 'Lasanha com camadas de carne moída, molho de tomate e queijo.', '12 folhas de massa para lasanha\r\n500 g de carne moída\r\n1 cebola picada\r\n2 dentes de alho picados\r\n1 lata de tomate pelado\r\n1/2 xícara de molho de tomate\r\n1/2 xícara de vinho tinto (opcional)\r\n2 colheres de sopa de azeite\r\n1/2 xícara de queijo parmesão ralado\r\n1 xícara de queijo muçarela ralado\r\nSal e pimenta a gosto\r\n1 colher de chá de orégano seco', 'Preaqueça o forno a 180°C.\r\nEm uma panela, aqueça o azeite e refogue a cebola e o alho até dourarem.\r\nAdicione a carne moída e cozinhe até dourar. Incorpore o tomate pelado, molho de tomate e vinho (se usar). Cozinhe por 20 minutos, tempere com sal, pimenta e orégano.\r\nCozinhe as folhas de lasanha conforme as instruções da embalagem.\r\nEm uma forma, faça camadas alternadas de molho bolonhesa, folhas de lasanha e queijo muçarela. Finalize com queijo parmesão por cima.\r\nAsse por 30-40 minutos até a superfície estar dourada e borbulhante.\r\nDeixe descansar por 10 minutos antes de servir.', 'massas_molhos'),
(13, 13, 'Smoothie de Frutas Vermelhas', '10 minutos', 2, 'Luís Gustavo', 'Smoothie refrescante e saudável de frutas vermelhas.', '1 xícara de morangos congelados\r\n1 xícara de framboesas congeladas\r\n1 banana madura\r\n1/2 xícara de iogurte natural\r\n1/2 xícara de suco de laranja\r\n1 colher de sopa de mel (opcional)', 'Coloque todos os ingredientes no liquidificador.\r\nBata até obter uma mistura homogênea e cremosa.\r\nSirva imediatamente.', 'carnes'),
(14, 14, 'Limonada Clássica', '15 minutos', 4, 'Luís Gustavo', 'Limonada refrescante e cítrica, ideal para dias quentes.', 'Suco de 6 limões\r\n1 xícara de açúcar\r\n1 litro de água fria\r\nGelo a gosto\r\nFatias de limão para decorar', 'Em uma jarra, misture o suco de limão e o açúcar até o açúcar dissolver completamente.\r\nAdicione a água fria e mexa bem.\r\nSirva com gelo e decore com fatias de limão.', 'bebidas'),
(15, 15, 'Pudim de Leite Condensado', '1 horas e 10 minutos', 6, 'Luís Gustavo', 'Pudim clássico e cremoso, com caramelo e sabor suave de leite condensado.', '1 lata de leite condensado\r\n2 latas de leite (use a lata de leite condensado como medida)\r\n3 ovos\r\n1 xícara de açúcar (para o caramelo)\r\n1 colher de chá de essência de baunilha (opcional)', 'Preaqueça o forno a 180°C.\r\nPara o caramelo, derreta o açúcar em uma panela até obter um caramelo dourado. Despeje no fundo de uma forma de pudim.\r\nNo liquidificador, bata o leite condensado, o leite, os ovos e a baunilha até misturar bem.\r\nDespeje a mistura sobre o caramelo na forma.\r\nAsse em banho-maria por 50-60 minutos, ou até que o pudim esteja firme.\r\nDeixe esfriar completamente antes de desenformar. Leve à geladeira por pelo menos 4 horas antes de servir.', 'doces_sobremesas'),
(16, 16, 'Brownie de Chocolate', '40 minutos', 9, 'Luís Gustavo', 'Brownie de chocolate denso e fudgy, perfeito para os amantes de chocolate.', '200 g de chocolate meio amargo\r\n150 g de manteiga\r\n1 xícara de açúcar\r\n3 ovos\r\n1 colher de chá de essência de baunilha\r\n1/2 xícara de farinha de trigo\r\n1/4 colher de chá de sal\r\n1/2 xícara de nozes picadas (opcional)', 'Preaqueça o forno a 180°C e unte uma forma quadrada (20x20 cm) ou forre com papel manteiga.\r\nDerreta o chocolate e a manteiga em banho-maria ou no micro-ondas, mexendo até ficar homogêneo.\r\nMisture o açúcar ao chocolate derretido.\r\nAdicione os ovos, um de cada vez, mexendo bem após cada adição. Acrescente a baunilha.\r\nAdicione a farinha e o sal, misture até combinar.\r\nIncorpore as nozes, se usar.\r\nDespeje a massa na forma e alise a superfície.\r\nAsse por 25-30 minutos, ou até um palito sair com algumas migalhas úmidas.\r\nDeixe esfriar completamente antes de cortar em quadrados e servir.', 'doces_sobremesas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`idreceitas`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome_usuario` (`nome_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `idreceitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

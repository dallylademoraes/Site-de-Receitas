-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/08/2024 às 17:36
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
(6, 'images/bolo-de-chocolate.jpg'),
(7, 'images/picadinho-de-carne.jpg'),
(8, 'images/bolo-de-cenoura.jpg'),
(9, 'images/bife-a-milanesa.jpeg'),
(10, 'images/galinhada.jpeg'),
(11, 'images/frango-a-passarinho.jpg'),
(12, 'images/peixe-assado.jpeg'),
(13, 'images/file-de-peixe-com-camarao.jpg'),
(14, 'images/salada-simples.jpg'),
(15, 'images/sopa-de-carne-com-legumes-e-macarrao.jpg'),
(16, 'images/massa-italiana.jpg'),
(17, 'images/cha-de-maca.jpeg'),
(18, 'images/pudim.jpg');

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
(1, 6, 'Bolo de Chocolate', '45 horas e  minutos', 3, 'Luís Gustavo', 'Bolo delicioso', 'Massa\r\nOvo: 3 ovos\r\nAçúcar: 1 e 1/2 xícara (chá) de açúcar\r\nFarinha de Trigo: 2 xícaras (chá) de farinha de trigo\r\nChocolate em Pó: 1 xícara (chá) de chocolate em pó ou achocolatado\r\nÓleo: 1/2 xícara (chá) de óleo\r\nFermento em Pó Químico: 1 colher (sopa) de fermento em pó\r\nSal: 1 pitada de sal\r\nÁgua: 1 xícara (chá) de água quente\r\nCobertura\r\nLeite: 4 colheres (sopa) de leite\r\nChocolate em Pó: 1/2 xícara (chá) de chocolate em pó\r\nManteiga: 1 colher (sopa) de manteiga\r\nAçúcar: 1 xícara (chá) de açúcar\r\n', 'Massa\r\nEm um liquidificador, bata os ovos, o açúcar, o óleo, o achocolatado e a farinha de trigo.\r\nDespeje a massa em uma tigela e adicione a água quente e o fermento, misturando bem.\r\nDespeje a massa em uma forma untada e asse em forno médio-alto (200°C), preaquecido, por 40 minutos.\r\nDesenforme ainda quente.\r\nCobertura\r\nEm uma panela, leve todos os ingredientes ao fogo até levantar fervura.\r\nDespeje a cobertura ainda quente em cima do bolo.', 'bolos_tortas'),
(2, 7, 'Picadinho de Carne', '1 horas e  minutos', 10, 'Luís Gustavo', 'Prato que rende muito!', '1 colher (sopa) de óleo\r\n400 g de miolo da alcatra  cortado em cubos pequenos\r\n1/2 cebola pequena picada\r\n1 dente de alho picado\r\n1/2 tomate pequeno picado\r\n2,5 xícaras (chá) de água quente\r\n1 batata pequena cortada em cubos pequenos\r\n1 cenoura pequena cortada em cubos pequenos\r\n2 sachês de Tempero em Pó Knorr Zero Sal™ Carne', 'Em uma panela média, coloque o óleo e leve ao fogo alto para aquecer. Junte a carne e frite até dourar de todos os lados. Acrescente a cebola e o alho, e refogue até a cebola murchar.\r\nAdicione o tomate e deixe cozinhar em fogo baixo até começar a desmanchar. Regue com a água e deixe cozinhar em fogo médio, com a panela semitampada, por aproximadamente 20 minutos, ou até que a carne esteja completamente cozida.\r\nJunte os sachês do Tempero Knorr Zero Sal Carne e o sal. Acrescente a batata e a cenoura, e deixe cozinhar em fogo médio, com a panela semitampada, por mais 15 minutos, ou até os vegetais estarem macios.\r\nRetire do fogo e sirva em seguida.', 'carnes'),
(3, 8, 'Bolo de Cenoura', '50 minutos', 4, 'Luís Gustavo', 'Bolo rápido e fácil', '3 cenouras médias (descascadas e cortadas em pedaços)\r\n4 ovos\r\n1 xícara de óleo\r\n2 xícaras de açúcar\r\n2 e 1/2 xícaras de farinha de trigo\r\n1 colher de sopa de fermento em pó\r\n1 xícara de açúcar\r\n3 colheres de sopa de chocolate em pó ou achocolatado\r\n2 colheres de sopa de manteiga\r\n4 colheres de sopa de leite', 'Preaqueça o forno: Aqueça o forno a 180°C (temperatura média).\r\nPrepare as cenouras: Descasque e corte as cenouras em pedaços pequenos para facilitar na hora de bater.\r\nBata os ingredientes líquidos: No liquidificador, coloque as cenouras, os ovos e o óleo. Bata bem até obter uma mistura homogênea.\r\nAdicione o açúcar: Acrescente o açúcar e bata novamente até ficar tudo bem incorporado.\r\nMisture os ingredientes secos: Em uma tigela grande, peneire a farinha de trigo e o fermento em pó. Depois, adicione a mistura do liquidificador aos poucos, mexendo com uma espátula ou colher de pau até a massa ficar lisa e uniforme.\r\nAsse o bolo: Unte e enfarinhe uma forma retangular ou redonda. Despeje a massa na forma e leve ao forno preaquecido por cerca de 40 a 50 minutos. Para verificar se está pronto, faça o teste do palito: espete um palito de dente no centro do bolo, se sair limpo, o bolo está assado.\r\nDeixe esfriar: Retire o bolo do forno e deixe esfriar por alguns minutos antes de desenformar.\r\nMisture os ingredientes: Em uma panela, coloque o açúcar, o chocolate em pó, a manteiga e o leite.\r\nCozinhe a cobertura: Leve ao fogo médio, mexendo sempre, até ferver. Continue mexendo até a mistura começar a engrossar e atingir uma consistência cremosa.\r\nCubra o bolo: Com o bolo ainda morno, despeje a cobertura de chocolate sobre ele, espalhando uniformemente. Se desejar, faça furinhos no bolo com um garfo para que a cobertura penetre melhor.\r\nSirva: Deixe o bolo esfriar completamente para que a cobertura firme e, depois, corte em pedaços e sirva.', 'bolos_tortas'),
(4, 9, 'Bife à Milanesa', '1 horas', 4, 'Luís Gustavo', 'Receita de Bife à Milanesa crocante e delicioso feito com carne, MAGGI Gril, ovos, farinha de rosca e óleo', '500g de patinho, cortado em bifes finos\r\n1 colher (sopa) de MAGGI® Gril\r\n2 ovos batidos\r\n1 pitada de sal\r\n1 pitada de pimenta-do-reino\r\nmeia xícara (chá) de farinha de trigo\r\n2 xícaras (chá) de farinha de rosca', 'Em um recipiente, coloque os ovos e tempere com o sal e a pimenta-do-reino. Reserve.\r\nEm outro recipiente, tempere os bifes com o MAGGI Gril e passe-os, um a um, pela farinha de trigo, ovos reservados e farinha de rosca novamente. Repita o processo com todos os bifes.\r\nEm uma frigideira grande, aqueça óleo e frite os bifes, deixando-os totalmente cobertos pelo óleo.\r\nEscorra-os em papel absorvente e sirva a seguir.', 'carnes'),
(5, 10, 'Galinhada', '2 horas e  minutos', 7, 'Luís Gustavo', 'galinhada tradicional', '1 frango cortado a passarinho\r\n1½ xícara (chá) de arroz\r\n3 xícaras (chá) de água\r\n150 g de quiabo (cerca de 10 unidades)\r\n3 tomates maduros do tipo débora\r\n1 cebola\r\n2 dentes de alho\r\n4 ramos de tomilho\r\n8 talos de cebolinha\r\ncaldo de 1 limão\r\n1 colher (sopa) de cominho em pó\r\n1 colher (chá) de páprica doce\r\n1 colher (chá) de colorau\r\n1 folha de louro\r\n2 colheres (sopa) de azeite\r\nsal a gosto', 'Lave e seque todos os legumes e ervas. Descasque e pique fino os dentes de alho e a cebola. Debulhe o tomilho.\r\nLeve uma panela grande ao fogo médio. Quando aquecer, regue com o azeite e doure alguns pedaços de frango por vez – se colocar tudo de uma vez, vai cozinhar no próprio vapor; o resultado seria uma carne ressecada e pálida em vez de pedaços dourados e suculentos. Com uma pinça, vire cada pedaço para dourar de todos os lados. No total, você precisa temperar com 1 colher (sopa) de sal. (Dica: separe numa tigela e vá usando à medida que vira os pedaços.) Transfira para uma tigela e repita o procedimento com o restante.\r\nMantenha a panela em fogo médio, adicione a cebola e refogue por cerca de 2 minutos, até dourar (caso tenha formado muita gordura do frango, antes de refogar a cebola, retire um pouco com uma colher e descarte).\r\nQuando a cebola dourar, junte o colorau, a páprica, o cominho e 1 colher (chá) de sal. Misture bem. Acrescente o alho e mexa por apenas 1 minuto. Junte a folha de louro, o tomilho e misture bem.\r\nJunte ao refogado 3 xícaras (chá) de água e o caldo do limão. Misture com uma espátula, raspando bem o fundo da panela para dissolver os queimadinhos – eles dão sabor ao preparo. Aumente o fogo para alto.\r\nAssim que a água começar a ferver, abaixe o fogo, junte o arroz e o frango dourado na panela. Misture rapidamente e deixe cozinhar por 10 minutos, com a tampa entreaberta.\r\nEnquanto isso, retire as pontas e fatie o quiabo em rodelas de 1 cm. Após o cozimento inicial do arroz (10 minutos), junte o quiabo e misture. Deixe cozinhar por mais 10 minutos, ou até a água secar.\r\nEnquanto isso, corte os tomates ao meio, retire as sementes com o dedão e aperte cada metade contra a tábua (para aplainar); corte as metades aplainadas em tiras e as tiras, em cubos. Fatie fino os talos de cebolinha.\r\nDesligue o fogo e, abra a panela, junte metade do tomate e misture. Tampe a panela e deixe descansar por 5 minutos para o arroz terminar de cozinhar no própri', 'aves'),
(6, 11, 'Frango a passarinho', '1 horas e 30 minutos', 4, 'Luís Gustavo', 'Feito no forno', '1 kg de frango cortado à passarinho\r\n2 dentes de alho\r\n1½ colher (chá) de páprica doce\r\n1 colher (chá) de cominho\r\n1 colher (chá) de sal\r\n3 colheres (sopa) de azeite\r\n¼ de xícara (chá) de farinha de trigo\r\n8 ramos de salsinha\r\ngomos de limão para servir', 'Pré-aqueça o forno a 220 ºC (temperatura alta). Retire o frango da geladeira – ele não pode estar gelado na hora de assar (o frango gelado não fica crocante).\r\nNo pilão, bata o alho, o sal, a páprica e o cominho até formar uma pastinha. Por último, misture o azeite à pastinha.\r\nNuma tigela grande, tempere o frango com a pasta de alho e especiarias. Espalhe bem o tempero com as mãos, para envolver todos os pedaços. Polvilhe com a farinha e misture novamente – o aspecto é meio seco e grudento, é assim mesmo. A farinha ajuda a formar a casquinha crocante do frango, sem ressecar a carne.\r\nUnte uma assadeira grande com azeite e distribua os pedaços de frango, sem amontoar - quanto mais espaçado estiver, mais crocante fica. Leve ao forno para assar por cerca de 20 minutos, ou até a base dos pedaços dourarem. Com uma pinça, vire os pedaços e deixe assar por mais 20 minutos, até o frango à passarinho ficar bem crocante e dourado.\r\nEnquanto isso, lave, seque e pique a salsinha. Retire a assadeira do forno e, com a pinça, transfira os pedaços de frango para uma tigela. Misture a salsinha e sirva a seguir com gomos de limão.', 'aves'),
(7, 12, 'Peixe Assado Fácil', '15 minutos', 4, 'Luís Gustavo', 'receita rápida', '8 pedaços de filé de anchova limpa e com pele (1 kg)\r\n2 colheres (sopa) de suco de limão\r\n2 sachês de Tempero SAZÓN® Sabores do Nordeste\r\n2 pitadas de sal\r\n3 colheres (sopa) de Azeite de Oliva Tipo Único TERRANO®', 'Em uma assadeira grande, coloque o peixe com a pele virada para baixo, o suco de limão, salpique o Tempero SAZÓN® e o sal por toda a superfície. Regue com o Azeite TERRANO®. Cubra com papel-alumínio e deixe tomar gosto, na geladeira por 30 minutos.\r\nLeve ao forno médio (180 graus), preaquecido, por 10 minutos. Retire o papel e volte ao forno por mais 20 minutos.\r\nRetire do forno e sirva em seguida.', 'peixes_frutosdomar'),
(8, 13, 'Filé de Peixe com Camarão', '30 minutos', 7, 'Luís Gustavo', 'simples e fácil de fazer', '500 Grama(s) de filé de pescada\r\n1/2 Colher(es) de chá de sal\r\n2 Colher(es) de chá de azeite\r\n200 Grama(s) de camarão pequeno e limpo\r\n3 Colher(es) de sopa de vinho branco seco\r\n3 Colher(es) de sopa de queijo gorgonzola picado\r\n1/2 xícara de Maionese Hellmann\'s', 'Em uma tigela média, coloque os filés e tempere com o sal.\r\nReserve.\r\nEm uma frigideira grande (18 cm de diâmetro) aqueça 1 colher (sopa) de azeite e grelhe os filés reservados.\r\nColoque em uma travessa e reserve.\r\nEm uma panela média, aqueça o restante do azeite em fogo médio e refogue os camarões por 2 minutos ou até ficar avermelhados.\r\nJunte o vinho, o queijo e a maionese HELLMANN’S.\r\nCozinhe em fogo médio, mexendo sempre até aquecer.\r\nDespeje sobre os filés reservados e sirva em seguida.', 'peixes_frutosdomar'),
(9, 14, 'Salada Simples', '10 minutos', 4, 'Luís Gustavo', 'rápido e fácil', '1 alface americana\r\ncenoura\r\n2 cenouras raladas\r\n1 beterraba\r\n1 beterraba ralada\r\ntomate\r\n1 tomate sem pele e sem semente\r\ncebola\r\n1 cebola cortada em rodelas ou picada\r\n1 colher (chá) de sal\r\naçúcar\r\n1 pitada de açúcar\r\nazeite de oliva extravirgem\r\n1 colher (sopa) de azeite extra virgem de oliva\r\nvinagre\r\n2 a 3 colheres de vinagre\r\n', 'Rasgue as folhas do alface para que fiquem menores. Rale as cenouras e a beterraba. O tomate, após estar sem pele e semente, deve ser picado. A cebola pode ser cortada em pedacinhos ou em rodelas, como preferir. Junte tudo.\r\nJunte o açúcar, sal, azeite e vinagre em uma xícara.\r\nMisture bem com uma colher e despeje sobre a salada.\r\nPronto!', 'saladas'),
(10, 15, 'Sopa de Carne com Legumes e Macarrão', '1 horas', 20, 'Luís Gustavo', 'muito nutritiva', '500g de Coxão Mole Swift cortado em cubos\r\n2 Caldos Culinários de Carne Swift\r\n1L de água\r\n1 colher (sopa) de Páprica Picante Swift\r\n½ xícara (chá) de Cebola Picada Swift\r\n2 batatas cortadas em cubos\r\n1 chuchu cortado em cubos\r\n1 cenoura cortada em cubos\r\n1 xícara (chá) de macarrão para sopa\r\nSal a gosto\r\nCheiro-verde a gosto', 'Em uma panela de pressão, refogue os cubos de carne;\r\nAcrescente a cebola e refogue até ficar translúcida;\r\nColoque a páprica, o caldo de carne e a água;\r\nTampe a panela e, assim que pegar pressão, conte 20 minutos;\r\nTire a pressão e coloque os legumes, mantendo a tampa aberta. Cozinhe por 5 minutos;\r\nAdicione o macarrão, cozinhe por 3 minutos;\r\nAcerte o sal e salpique cheiro-verde.', 'sopas'),
(11, 16, 'Massa Italiana', ' horas e 30 minutos', 2, 'Luís Gustavo', 'o gosto da Itália', '500 g de farinha de trigo\r\n5 ovos\r\n100 g de semolina para polvilhar\r\nazeite\r\n1 colher sopa de azeite', 'Coloque a farinha de trigo em um recipiente, abra uma cavidade no centro da farinha e adicione os ovos.\r\nMisture a massa até ficar homogênea e elástica.\r\nEmbrulhe a massa em plástico filme e deixe descansar por uma hora na geladeira.\r\nRetire a massa e corte em pedaços, passe pelo rolo liso da máquina de macarrão até atingir a espessura de 2 mm, em seguida passe pelo cortador de macarrão da medida desejada.\r\nSe necessário polvilhe um pouco de semolina para que a massa não grude na máquina.\r\nColoque em uma panela água e uma colher de sopa de azeite, após a fervura coloque o macarrão, deixe o mesmo até atingir o ponto desejado.\r\nAdicione o molho de sua preferência e sirva.', 'massas_molhos'),
(12, 17, 'Chá de Maçã', ' horas e 7 minutos', 10, 'Luís Gustavo', 'Olha essa cor! E pensar que a lista de ingredientes leva maçã, canela e água… O chá fica perfumado – aquece até o coração da gente.', '3 maçãs gala\r\n2 ramas de canela\r\n1 litro de água', 'Lave, seque e corte as maçãs (com a casca) ao meio. Retire e descarte o miolo com as sementes. Corte cada metade em 4 partes.\r\nTransfira as maçãs para uma panela média, junte a canela, cubra com a água e leve ao fogo alto. Assim que ferver, diminua o fogo para baixo e deixe cozinhar por cerca de 1h30, até reduzir o líquido pela metade.\r\nDesligue o fogo e, sobre uma tigela, passe o chá por uma peneira para coar. Aperte bem as maçãs com uma espátula para extrair todo o líquido. Transfira para uma chaleira e sirva a seguir.', 'bebidas'),
(13, 0, 'Pudim de Geladeira', '3 horas e  minutos', 7, 'Luís Gustavo', 'pudim que não vai ao forno', '1 lata de leite condensado\r\ncreme de leite\r\n1 lata de creme de leite\r\n1 lata de leite (use a medida da lata de leite condensado)\r\ngelatina\r\n1 gelatina sem sabor\r\n2 xícaras de açúcar\r\n1 xícara de água', 'Dissolva a gelatina sem sabor de acordo com as instruções do fabricante.\r\nBata no liquidificador todos os ingredientes até obter uma massa lisa e homogênea.\r\nColoque o açúcar em uma forma redonda com fundo central e leve ao fogo até caramelizar.\r\nDespeje o líquido na forma e leve à geladeira até que fique bem firme.\r\nDesenforme e sirva.', 'doces_sobremesas');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `idreceitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

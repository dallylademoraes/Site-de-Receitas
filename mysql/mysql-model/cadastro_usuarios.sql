-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: kidelicia
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `img`
--

DROP TABLE IF EXISTS `img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img`
--

LOCK TABLES `img` WRITE;
/*!40000 ALTER TABLE `img` DISABLE KEYS */;
INSERT INTO `img` VALUES (1,'../images/1.png.jfif'),(2,'../images/4.jpg'),(3,'../images/renata-imagem-receitas-lasanha-a-bolonhesa-share.jpg');
/*!40000 ALTER TABLE `img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receitas`
--

DROP TABLE IF EXISTS `receitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receitas` (
  `idreceitas` int(11) NOT NULL AUTO_INCREMENT,
  `nome_receita` varchar(45) NOT NULL,
  `tempo_preparo` varchar(45) NOT NULL,
  `qtd_pessoas` int(11) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `ingredientes` varchar(600) NOT NULL,
  `modo_preparo` varchar(2000) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`idreceitas`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receitas`
--

LOCK TABLES `receitas` WRITE;
/*!40000 ALTER TABLE `receitas` DISABLE KEYS */;
INSERT INTO `receitas` VALUES (3,'aaaaaaaaaa','1 horas e  minutos',2,'Luís Gustavo','aaaaaaaaaaaaaaaaaaaa','aaaaaaaaaaaaaaaaaa','aaaaaaaaaaaaaaaaaaaa','carnes'),(4,'aaaaaaaaaaaaaa','1 horas e  minutos',10,'Luís Gustavo','aaaaaaaaaaaaaaaaa','111111111111','1111111111111111','carnes'),(5,'pudim','1 horas',10,'Luís Gustavo','aaaaaaaaaaaa','aaaaaaaaaaa','aaaaaaaaaaa','carnes'),(6,'lasanha','1 horas e 20 minutos',3,'Luís Gustavo','muito boa e gostosa','Carne: 500 g de carne molida de res (o una mezcla de res y cerdo).\r\nCebola : 1\r\nisto: 2 porções\r\nCenoura : 1\r\nSalsão :\r\nTomate: 400 g de puré de tomate (o 1 lata de tomate triturado).\r\nConcentrado de tomate :\r\nVinho tinto : 1\r\nAzeite :\r\nSal e pimenta : De qualquer forma\r\nErvas: 1 argumento','Carne: 500 g de carne molida de res (o una mezcla de res y cerdo).\r\nCebola : 1\r\nisto: 2 porções\r\nCenoura : 1\r\nSalsão :\r\nTomate: 400 g de puré de tomate (o 1 lata de tomate triturado).\r\nConcentrado de tomate :\r\nVinho tinto : 1\r\nAzeite :\r\nSal e pimenta : De qualquer forma\r\nErvas: 1 argumento','massas_molhos'),(7,'Bolo de Morango','1 horas e 2 minutos',2,'Luís Gustavo','Bolo de Murango','22222','2222222','bolos_tortas'),(8,'Macarrão','1 horas e 10 minutos',1,'Luís Gustavo','Um macarrão gostoso','Massa \r\nMassa','Massa \r\nMassa','massas_molhos'),(9,'lasanha ','1 horas e 20 minutos',4,'Luís Gustavo','muito gostosa','500g de carne moída (pode ser bovina, suína ou uma mistura)\r\n1 ceb\r\n2 o\r\n1 lata de molho de tomate (ou 400g de tomates pelados)\r\n1 co\r\n1 colher de chá de açúcar (opcional, para equilibrar a acidez)\r\nsobre\r\n1 colher de chá de orégano seco\r\n1 colher de chá de manjericão seco (opcional)\r\n2 colheres de sopa de óleo ou azeite','500g de carne moída (pode ser bovina, suína ou uma mistura)\r\n1 ceb\r\n2 o\r\n1 lata de molho de tomate (ou 400g de tomates pelados)\r\n1 co\r\n1 colher de chá de açúcar (opcional, para equilibrar a acidez)\r\nsobre\r\n1 colher de chá de orégano seco\r\n1 colher de chá de manjericão seco (opcional)\r\n2 colheres de sopa de óleo ou azeite','massas_molhos');
/*!40000 ALTER TABLE `receitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(255) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_usuario` (`nome_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-19 21:03:53

<?php

include_once('../mysql/connection.php');

if (isset($_POST['submit'])) {

    $recipe_name = $_POST['recipe-name'];
    $recipe_serve = $_POST['recipe-serve'];
    $recipe_author = 'Luís Gustavo';
    $recipe_description = isset($_POST['recipe-desc']) ? nl2br(htmlspecialchars($_POST['recipe-desc'])) : '';

    if ($_POST['recipe-hour'] == 0) {
        $recipe_time = $_POST['recipe-minute'] . ' minutos';
    } else if ($_POST['recipe-minute'] == 0) {
        $recipe_time = $_POST['recipe-hour'] . ' horas';
    } else {
        $recipe_time = $_POST['recipe-hour'] . ' horas e ' . $_POST['recipe-minute'] . ' minutos';
    }

    $ingredients = isset($_POST['ingredients']) ? nl2br(htmlspecialchars($_POST['ingredients'])) : '';
    $preparation = isset($_POST['preparation']) ? nl2br(htmlspecialchars($_POST['preparation'])) : '';


    $sql = "INSERT INTO receitas (nome_receita, tempo_preparo, qtd_pessoas, autor, descricao, ingredientes, modo_preparo) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Preparar a declaração
    if ($stmt = $conn->prepare($sql)) {
        // Vincular os parâmetros
        $stmt->bind_param('sssssss', $recipe_name, $recipe_time, $recipe_serve, $recipe_author, $recipe_description, $ingredients, $preparation);

        // Executar a declaração
        if ($stmt->execute()) {
            echo "Receita adicionada com sucesso!";
        } else {
            echo "Erro ao adicionar receita: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Receita</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
<header>
    <div class="banner">
        <button type="button" class="button">
            <div class="indicator">
                <svg width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                    <path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path>
                </svg>
            </div>
            <span>Voltar</span>
        </button>
    </div>
</header>

<form method="post" action="index.php">
    <main>
        <div class="left">
            <article>
                <div class="info">
                    <h1>ADICIONAR NOVA RECEITA</h1>
                    <hr style="border: 1px solid #000; width: 80%; margin: 15px 0px;">
                </div>
                <div class="about column form-child">
                    <div class="input-group">
                        <label class="label">Nome da Receita</label>
                        <input class="input-custom" autocomplete="off" name="recipe-name" id="recipe-name" type="text">
                    </div>

                    <div class="input-group">
                        <label class="label">Serve quantas pessoas</label>
                        <input class="input-custom" autocomplete="off" name="recipe-serve" id="recipe-name" type="number">
                    </div>
                    <div class="input-group">
                        <label class="label">Descrição da Receita</label>
                        <textarea name="recipe-desc" rows="3" cols="50"></textarea>
                    </div>
                </div>
                <label class="label">Tempo de Preparo</label>
                <div class="recipe-time column form-child">
                    <input name="recipe-hour" class="input-custom" type="number" placeholder="Horas" min="0" step="1">
                    <input name="recipe-minute" class="input-custom" type="number" placeholder="Minutos" min="0" max="59" step="1" >
                </div>
                <div class="ingredients column form-child">
                    <label class="label">Ingredientes</label>
                    <textarea id="ingredients" name="ingredients" rows="4" cols="50" ></textarea>
                </div>

                <div class="wayofpreparation column form-child">
                    <label class="label">Modo de Preparo</label>
                    <textarea id="preparation" name="preparation" rows="6" cols="50" ></textarea>
                </div>
            </article>
        </div>
        <div class="right">
            <form action="">
                <div class="upload column form-child">
                    <h3>Capa da Receita</h3>
                    <input type="file" accept="image/*" >
                    <div class="img-banner">
                        <p>Carregue uma imagem</p>
                    </div>
                </div>

                <button class="button2" type="submit" name="submit">Enviar Receita</button>
            </form>
        </div>
    </main>
</form>
</body>
</html>
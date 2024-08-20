<?php
//include_once('../mysql/connection.php');
include_once('connection.php');
if (isset($_POST['submit'])) {
    $recipe_name = $_POST['recipe-name'];
    $recipe_serve = $_POST['recipe-serve'];
    $recipe_author = 'Luís Gustavo';
    $recipe_description = isset($_POST['recipe-desc']) ? strip_tags($_POST['recipe-desc']) : '';

    if ($_POST['recipe-hour'] == 0) {
        $recipe_time = $_POST['recipe-minute'] . ' minutos';
    } else if ($_POST['recipe-minute'] == 0) {
        $recipe_time = $_POST['recipe-hour'] . ' horas';
    } else {
        $recipe_time = $_POST['recipe-hour'] . ' horas e ' . $_POST['recipe-minute'] . ' minutos';
    }

    $ingredients = isset($_POST['ingredients']) ? strip_tags($_POST['ingredients']) : '';
    $preparation = isset($_POST['preparation']) ? strip_tags($_POST['preparation']) : '';
    $categoria = $_POST['recipe-categorias'];

    $image_name = '';
    if (isset($_FILES['recipe_image']) && $_FILES['recipe_image']['error'] == 0) {
        $image_tmp_name = $_FILES['recipe_image']['tmp_name'];
        $image_name = basename($_FILES['recipe_image']['name']);
        $target_dir = "images/";
        $target_file = $target_dir . $image_name;

        if (move_uploaded_file($image_tmp_name, $target_file)) {
            $sql_img = "INSERT INTO img (path) VALUES (?)";
            if ($stmt_img = $conn->prepare($sql_img)) {
                $stmt_img->bind_param('s', $target_file);
                $stmt_img->execute();
                $stmt_img->close();
            } else {
                echo "Erro ao salvar o caminho da imagem: " . $conn->error;
                exit();
            }
        } else {
            echo "Erro ao fazer o upload da imagem.";
            exit();
        }
    }

    $sql = "INSERT INTO receitas (nome_receita, tempo_preparo, qtd_pessoas, autor, descricao, ingredientes, modo_preparo, categoria) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('ssssssss', $recipe_name, $recipe_time, $recipe_serve, $recipe_author, $recipe_description, $ingredients, $preparation, $categoria);

        if ($stmt->execute()) {
            echo "Receita adicionada com sucesso!";
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Erro ao adicionar receita: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Receita</title>
    <!--<link rel="stylesheet" href="css/addreceita.css">-->
    <link rel="stylesheet" href="../css/addreceita.css">
    <script src="../js/script.js"></script>
</head>
<body>
<header>
    <div class="banner">
    <a href="listagem.php" class="button">
    <div class="indicator">
        <svg width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
            <path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
            <path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path>
        </svg>
    </div>
    <span>Voltar</span>
    </a>
    </div>
</header>

<form method="post" action="addreceita.php" enctype="multipart/form-data">
    <main>
        <div class="left">
            <article>
                <div class="info">
                    <h1>ADICIONAR NOVA RECEITA</h1>
                    <hr style="border: 1px solid #000; width: 80%; margin: 15px;">
                </div>
                <div class="about column form-child">
                    <div class="input-group">
                        <label class="label">Nome da Receita</label>
                        <input class="input-custom" autocomplete="off" name="recipe-name" id="recipe-name" type="text" required>
                    </div>

                    <div class="input-group">
                        <label class="label">Serve quantas pessoas</label>
                        <input class="input-custom" autocomplete="off" name="recipe-serve" id="recipe-serve" type="number" required>
                    </div>
                    <div class="input-group">
                        <label class="label">Descrição da Receita</label>
                        <textarea name="recipe-desc" rows="3" cols="50"></textarea>
                    </div>
                </div>
                <label class="label">Tempo de Preparo</label>
                <div class="recipe-time column form-child">
                    <input name="recipe-hour" class="input-custom" type="number" placeholder="Horas" min="0" step="1">
                    <input name="recipe-minute" class="input-custom" type="number" placeholder="Minutos" min="0" max="59" step="1">
                </div>
                <div class="categoria">
                    <label class="label">Categoria da Receita</label>
                    <select id="opcoes" name="recipe-categorias">
                        <option value="carnes">Carnes</option>
                        <option value="aves">Aves</option>
                        <option value="peixes_frutosdomar">Peixes e Frutos do Mar</option>
                        <option value="saladas">Saladas</option>
                        <option value="sopas">Sopas</option>
                        <option value="massas_molhos">Massas e Molhos</option>
                        <option value="bebidas">Bebidas</option>
                        <option value="doces_sobremesas">Doces e Sobremesas</option>
                        <option value="bolos_tortas">Bolos e Tortas</option>
                    </select>
                </div>

                <div class="ingredients column form-child">
                    <label class="label">Ingredientes</label>
                    <textarea id="ingredients" name="ingredients" rows="4" cols="50"></textarea>
                </div>

                <div class="wayofpreparation column form-child">
                    <label class="label">Modo de Preparo</label>
                    <textarea id="preparation" name="preparation" rows="6" cols="50"></textarea>
                </div>
            </article>
        </div>
        <div class="right">
            <div class="upload column form-child">
                <h3>Capa da Receita</h3>
                <input type="file" name="recipe_image" accept="image/*" onchange="previewImage(this)">
                <div class="img-banner" id="imgBanner">
                    <p>Carregue uma imagem</p>
                </div>
                <button class="button2" type="submit" name="submit">Enviar Receita</button>
            </div>
        </div>
    </main>
</form>
</body>
</html>
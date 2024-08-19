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
                        <input class="input-custom" autocomplete="off" name="recipe-name" id="recipe-name" type="text">
                    </div>
                    <div class="input-group">
                        <label class="label">Descrição da Receita</label>
                        <textarea rows="3" cols="50" required></textarea>
                    </div>
                </div>
                    <label class="label">Tempo de Preparo</label>
                <div class="recipe-time column form-child">
                    <input class="input-custom" type="number" placeholder="Horas" min="0" step="1" required>
                    <input class="input-custom" type="number" placeholder="Minutos" min="0" max="59" step="1" required>
                </div>
                <div class="ingredients column form-child">
                    <label class="label">Ingredientes</label>
                    <textarea id="ingredients" name="ingredients" rows="4" cols="50" required></textarea>
                </div>

                <div class="wayofpreparation column form-child">
                    <label class="label">Modo de Preparo</label>
                    <textarea id="preparation" name="preparation" rows="6" cols="50" required></textarea>
                </div>
            </article>
        </div>
        <div class="right">
            <form action="">
                <div class="upload column form-child">
                    <h3>Capa da Receita</h3>
                    <input type="file" accept="image/*" required>
                    <div class="img-banner">
                        <p>Carregue uma imagem</p>
                    </div>
                </div>

                <button class="button2" type="submit">Enviar Receita</button>
            </form>
        </div>
    </main>

</body>
</html>

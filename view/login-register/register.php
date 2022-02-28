<?php 
    use Login\Register\Services\Routers;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php Routers::asset('assets/css/style.css'); ?>">
    <meta name="author" content="Rafael Vieira - github.com/rafaeldevcode">
    <title>Register</title>
</head>
<body>
    
    <main class="content">
        <section class="section-form">
            <div class="form-avatar">
                <i class="fa-solid fa-user-plus"></i>
            </div>

            <form action="/salvar-usuario" method="POST">
                <div class="inputs-group">
                    <input required class="input" type="text" name="name" id="name">
                    <label class="input-label" for="name">Nome</label>
                    <span class="underline"></span>
                </div>

                <div class="inputs-group">
                    <input required class="input" type="email" name="email" id="email">
                    <label class="input-label" for="email">Email</label>
                    <span class="underline"></span>
                </div>

                <div class="inputs-group">
                    <input required class="input" type="password" name="password" id="password" autocomplete="FALSE">
                    <label class="input-label" for="password">Password</label>
                    <span class="underline"></span>

                    <button type="button" title="Ver Senha" class="btn-eyes">
                        <i class="fa-solid fa-eye" id="eyes"></i>
                    </button>
                </div>

                <div class="inputs-group-btn">
                    <a href="/login" class="inputs-btn secondary" type="button" title="Ir para login">Fazer login</a>
                    <input class="inputs-btn" title="Fazer Login" type="submit" value="Registrar">
                </div>
            </form>
        </section>
    </main>

    <script type="text/javascript" src="https://kit.fontawesome.com/b0387bb217.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php Routers::asset('assets/js/funcoes.js') ?>"></script>
</body>
</html>
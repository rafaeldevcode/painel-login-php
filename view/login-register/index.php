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
    <title>Login | Register</title>
</head>
<body>
    
    <main class="conteudo-login">
        <section class="form-login">

            <div class="form-avatar">
                <!-- <i class="fa-solid fa-user-unlock"></i> -->
                <i class="fa-solid fa-user-lock"></i>
            </div>

            <form action="?" method="POST">
                <div class="inputs-group-login">
                    <input required class="input-login" type="email" name="email" id="email">
                    <label class="input-label-login" for="email">Email</label>
                    <span class="underline"></span>
                </div>

                <div class="inputs-group-login">
                    <input required class="input-login" type="password" name="password" id="password" autocomplete="FALSE">
                    <label class="input-label-login" for="password">Password</label>
                    <span class="underline"></span>

                    <button type="button" title="View Password" class="btn-eyes" id="btn-eyes">
                        <i class="fa-solid fa-eye" id="eyes"></i>
                        <!-- <i class="fa-solid fa-eye-slash"></i> -->
                    </button>
                </div>

                <div class="inputs-group-btn-login">
                    <span>
                        <input class="input-check-login" type="checkbox" id="remember" name="remember">
                        <label class="label-check-login" for="remember">Lembre-me</label>
                    </span>

                    <input class="inputs-btn-login" title="Fazer Login" type="submit" value="Logar">
                </div>
            </form>

            <span class="link-group-login">
                <a href="#">Esqueci minha senha</a>
                <a href="#">Registrar</a>
            </span>

        </section>
    </main>

    <script type="text/javascript" src="https://kit.fontawesome.com/b0387bb217.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php Routers::asset('asset/js/funcoes.js') ?>"></script>
</body>
</html>
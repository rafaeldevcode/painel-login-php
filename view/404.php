<?php 
    use Painel\Services\Routers;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php Routers::asset('assets/css/style.css'); ?>">
    <meta name="author" content="Rafael Vieira - github.com/rafaeldevcode">
    <title>Página não encontrada | 404</title>

</head>
<body>

    <header class="header">
        <section class="body-header">
            <span class="logo-header">
                Início
            </span>

            <span class="logout login">
                <a title="Voltar" href="/">Voltar</a>
            </span>
        </section>
    </header>

    <main class="content">
        <section class="welcome">
            <h1>Desculpe, mas não encontramos a página que você está procurando</h1>
        </section>

        <section class="emoji">
            <img src="<?php Routers::asset('assets/images/emoji-404.png') ?>" alt="Página não encontrada">
        </section>
    </main>

    <footer class="footer">
        <p>
            Developer | 
            <a title="Perfil GitHub" rel="noopener" target="_blank" href="https://github.com/rafaeldevcode">Rafael vieira <i class="fa-brands fa-github"></i> </a>
        </p>
    </footer>

    <script type="text/javascript" src="https://kit.fontawesome.com/b0387bb217.js" crossorigin="anonymous"></script>
</body>
</html>
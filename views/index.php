<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once __DIR__ . '/layouts/components/head.php'; ?>
</head>
<body>

    <?php require_once __DIR__ . '/layouts/components/header.php'; ?>

    <main class="content">
        <?php require_once __DIR__ . '/layouts/components/menu-aside.php'; ?>

        <section class="welcome">
            <h1>Desculpe, mas para continuar você precisa fazer login!</h1>
        </section>

        <section class="emoji">
            <img src="<?php asset('assets/images/emoji-login.png') ?>" alt="Ir para página de login">

            <div class="inputs-group-btn down">
                <a href="<?php route('/login') ?>" class="inputs-btn secondary margin-auto" title="Ir para login">Fazer login</a>
            </div>
        </section>
    </main>

    <?php require_once __DIR__ . '/layouts/components/footer.php'; ?>

    <script type="text/javascript" src="https://kit.fontawesome.com/b0387bb217.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php asset('assets/js/funcoes.js') ?>"></script>
    <script type="text/javascript">
        oppenMenu();
    </script>
</body>
</html>
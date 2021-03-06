<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once __DIR__ . '/../layouts/components/head.php'; ?>
</head>
<body>

    <?php require_once __DIR__ . '/../layouts/components/header.php' ?>
    
    <main class="content">
        <?php require_once __DIR__ . '/../layouts/components/menu-aside.php' ?>

        <section class="section-form">
            <div class="form-avatar">
                <i class="fa-solid fa-user-plus"></i>
            </div>

            <form action="<?php route('/save-user') ?>" method="POST">
                <div class="inputs-group down">
                    <input required class="input" type="text" name="name" id="name">
                    <label class="input-label" for="name">Nome</label>
                    <span class="underline"></span>
                    <span class="error"></span>
                </div>

                <div class="inputs-group down">
                    <input required class="input" type="email" name="email" id="email">
                    <label class="input-label" for="email">Email</label>
                    <span class="underline"></span>
                    <span class="error"></span>
                </div>

                <div class="inputs-group down">
                    <input required class="input" type="password" name="password" id="password" autocomplete="FALSE">
                    <label class="input-label" for="password">Password</label>
                    <span class="underline"></span>
                    <span class="error"></span>

                    <button type="button" title="Ver Senha" class="btn-eyes" id="btn-eyes">
                        <i class="fa-solid fa-eye" id="eyes"></i>
                    </button>
                </div>

                <div class="inputs-group-btn down">
                    <a href="<?php route('/login') ?>" class="inputs-btn secondary" type="button" title="Ir para login">Fazer login</a>
                    <input class="inputs-btn" title="Fazer Login" type="submit" value="Registrar">
                </div>
            </form>
        </section>
    </main>

    <?php require_once __DIR__ . '/../layouts/components/footer.php' ?>

    <script type="text/javascript" src="https://kit.fontawesome.com/b0387bb217.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php asset('assets/js/funcoes.js') ?>"></script>

    <script type="text/javascript">
        oppenMenu();
        getFields();
    </script>
</body>
</html>
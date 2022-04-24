<?php use Painel\Services\Login; ?>

<header class="header">
    <section class="body-header">
        <span class="logo-header">
            <h1><?php if(Login::auth() === true): echo $name; else: echo 'Início'; endif  ?></h1>
        </span>

        <?php require_once __DIR__ . '/menu.php';?>
    </section>
</header>
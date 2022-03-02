<header class="header">
    <section class="body-header">
        <span class="logo-header">
            <?php if(isset($name)): echo $name; else: echo 'Início'; endif; ?>
        </span>

        <?php 
            if(isset($_SESSION['logged'])){ ?>
                <span class="logout">
                    <a title="Fazer Logout" href="/logout">Sair</a>
                </span>
            <?php }
        ?>
    </section>
</header>
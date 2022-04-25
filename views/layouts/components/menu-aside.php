<?php use Painel\Services\Login; ?>

<aside class="menu-aside">
    <nav class="nav">
        <ul>
            <?php 
                if(Login::auth() === true){ ?>
                    <li>
                        <div class="icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <a title="Sessão 1" href="#">Sessão 1</a>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <a title="Sessão 2" href="#">Sessão 2</a>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <a title="Sessão 3" href="#">Sessão 3</a>
                    </li>
                    <li>
                        <details>
                            <summary>
                                <div class="icon">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                Sessão 4
                            </summary>
                            <ul>
                                <li>
                                    <a title="Item 1" href="#">Item 1</a>
                                </li>
                                <li>
                                    <a title="Item 2" href="#">Item 2</a>
                                </li>
                                <li>
                                    <a title="Item 3" href="#">Item 3</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <a title="Sessão 5" href="#">Sessão 5</a>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </div>
                        <a title="Sair" href="<?php route('/logout') ?>">Sair</a>
                    </li>
            <?php } else{ ?> 
                <li>
                    <div class="icon">
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </div>
                    <a title="Entrar" href="<?php route('/login') ?>">Entrar</a>
                </li>    
            <?php } ?>
        </ul>
    </nav>
</aside>
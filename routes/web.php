<?php

    namespace Painel\Routes;

    use Painel\Controller\DashboardController;
    use Painel\Controller\Login\{LoginController, LogoutController, RealizaLoginController};
    use Painel\Controller\Register\{CreateRegisterController, RegisterController};

    return [
        '/login'          => LoginController::class,
        '/register'       => RegisterController::class,
        '/dashboard'      => DashboardController::class,
        '/salvar-usuario' => CreateRegisterController::class,
        '/logout'         => LogoutController::class,
        '/realiza-login'  => RealizaLoginController::class,
    ];
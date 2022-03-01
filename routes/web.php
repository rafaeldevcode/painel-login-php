<?php

    namespace Painel\Routes;

    use Painel\Controller\{DashboardController, MainController, NotFoundController};
    use Painel\Controller\Login\{LoginController, LogoutController, RealizaLoginController};
    use Painel\Controller\Register\{CreateRegisterController, RegisterController};

    return [
        '/'               => MainController::class,
        '/not-found'      => NotFoundController::class,
        '/login'          => LoginController::class,
        '/register'       => RegisterController::class,
        '/dashboard'      => DashboardController::class,
        '/salvar-usuario' => CreateRegisterController::class,
        '/logout'         => LogoutController::class,
        '/realiza-login'  => RealizaLoginController::class,
    ];
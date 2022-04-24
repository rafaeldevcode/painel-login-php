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
        '/save-user'      => CreateRegisterController::class,
        '/logout'         => LogoutController::class,
        '/login-to'       => RealizaLoginController::class,
    ];
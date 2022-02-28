<?php

    namespace Login\Register\Routes;

    use Login\Register\Controller\DashboardController;
    use Login\Register\Controller\{CreateRegisterController, LoginController, LogoutController, RealizaLoginController, RegisterController};

    return [
        '/login'          => LoginController::class,
        '/register'       => RegisterController::class,
        '/dashboard'      => DashboardController::class,
        '/salvar-usuario' => CreateRegisterController::class,
        '/logout'         => LogoutController::class,
        '/realiza-login'  => RealizaLoginController::class,
    ];
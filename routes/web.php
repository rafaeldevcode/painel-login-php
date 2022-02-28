<?php

    namespace Login\Register\Routes;

    use Login\Register\Controller\DashboardController;
    use Login\Register\Controller\{LoginController, RegisterController};

    return [
        '/login'     => LoginController::class,
        '/register'  => RegisterController::class,
        '/dashboard' => DashboardController::class
    ];
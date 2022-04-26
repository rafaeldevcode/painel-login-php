<?php

    namespace Painel\Routes;

    use Painel\Controller\{IndexDashboardController, IndexMainController, IndexNotFoundController};
    use Painel\Controller\Login\{CreateLoginController, DeleteLoginController, StoreLoginController};
    use Painel\Controller\Register\{CreateRegisterController, StoreRegisterController};

    return [
        '/'                => IndexMainController::class,
        '/not-found/'      => IndexNotFoundController::class,
        '/login/'          => CreateLoginController::class,
        '/register/'       => CreateRegisterController::class,
        '/dashboard/'      => IndexDashboardController::class,
        '/save-user/'      => StoreRegisterController::class,
        '/logout/'         => DeleteLoginController::class,
        '/login-to/'       => StoreLoginController::class,
    ];
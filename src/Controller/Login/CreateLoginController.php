<?php

    namespace Painel\Controller\Login;

    use Psr\Http\Message\{ServerRequestInterface, ResponseInterface};
    use Psr\Http\Server\RequestHandlerInterface;
    use Nyholm\Psr7\Response;

    require_once __DIR__ . '/../../../vendor/autoload.php';

    class CreateLoginController implements RequestHandlerInterface
    {
        public function handle(ServerRequestInterface $request): ResponseInterface
        {
            $html = view('login/index', [
                'title' => 'Login',
            ]);

            return new Response(200, [], $html);
        }
    }
<?php

    namespace Painel\Controller\Register;

    use Psr\Http\Message\{ServerRequestInterface, ResponseInterface};
    use Psr\Http\Server\RequestHandlerInterface;
    use Nyholm\Psr7\Response;

    require_once __DIR__ . '/../../../vendor/autoload.php';

    class CreateRegisterController implements RequestHandlerInterface
    {
        public function handle(ServerRequestInterface $request): ResponseInterface
        {
            $html = view('register/index', [
                'title' => 'Register',
            ]);

            return new Response(200, [], $html);
        }
    }
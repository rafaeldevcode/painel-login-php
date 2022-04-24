<?php

    namespace Painel\Controller;

    use Psr\Http\Message\{ServerRequestInterface, ResponseInterface};
    use Psr\Http\Server\RequestHandlerInterface;
    use Nyholm\Psr7\Response;

    require_once __DIR__ . '/../../vendor/autoload.php';

    class MainController implements RequestHandlerInterface
    {
        public function handle(ServerRequestInterface $request): ResponseInterface
        {

            $html = route('index', [
                'title' => 'Início',
            ]);

            if(isset($_SESSION['logged'])){
                return new Response(302, ['location' => '/dashboard']);
            }

            return new Response(200, [], $html);
        }
    }
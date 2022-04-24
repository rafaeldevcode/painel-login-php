<?php

    namespace Painel\Controller;

    use Psr\Http\Message\{ServerRequestInterface, ResponseInterface};
    use Psr\Http\Server\RequestHandlerInterface;
    use Nyholm\Psr7\Response;

    require_once __DIR__ . '/../../vendor/autoload.php';

    class NotFoundController implements RequestHandlerInterface
    {
        public function handle(ServerRequestInterface $request): ResponseInterface
        {

            $html = route('404', [
                'title' => 'Página não encontrada | 404',
            ]);

            return new Response(200, [], $html);
        }
    }
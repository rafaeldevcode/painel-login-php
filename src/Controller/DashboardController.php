<?php

    namespace Painel\Controller;

    use Painel\Model\User;
    use Painel\Helper\EntityManagerFactory;
    use Painel\Services\Routers;
    use Psr\Http\Message\{ServerRequestInterface, ResponseInterface};
    use Psr\Http\Server\RequestHandlerInterface;
    use Nyholm\Psr7\Response;

    require_once __DIR__ . '/../../vendor/autoload.php';

    class DashboardController implements RequestHandlerInterface
    {
        private $entityManager;
        private $userRepository;

        public function __construct()
        {
            $entityManagerFactory = new EntityManagerFactory();
            $this->entityManager = $entityManagerFactory->getEntityManager();
            $this->userRepository = $this->entityManager->getRepository(User::class);
        }

        public function handle(ServerRequestInterface $request): ResponseInterface
        {
            /**
             * @var User $user
             */
            $user = $this->userRepository->findOneBy(['id' => $_SESSION['user_id']]);

            $html = route('dashboard', [
                'name'  => $user->getName(),
                'title' => 'Dashboard',
            ]);

            return new Response(200, [], $html);
        }
    }
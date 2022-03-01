<?php

    namespace Painel\Controller\Register;

    use Painel\Entity\User;
    use Painel\Helper\EntityManagerFactory;
    use Painel\Services\{Login, Routers};
    use Psr\Http\Message\{ServerRequestInterface, ResponseInterface};
    use Psr\Http\Server\RequestHandlerInterface;
    use Nyholm\Psr7\Response;

    require_once __DIR__ . '/../../../vendor/autoload.php';

    class CreateRegisterController implements RequestHandlerInterface
    {
        private $entityManager;

        use Routers;

        public function __construct()
        {
            $entityManagerFactory = new EntityManagerFactory();
            $this->entityManager = $entityManagerFactory->getEntityManager();
        }

        public function handle(ServerRequestInterface $request): ResponseInterface
        {
            $user = new User();
            $data = $request->getParsedBody();
            $passHash = password_hash($data['password'], PASSWORD_ARGON2I);

            $user->setName($data['name']);
            $user->setEmail($data['email']);
            $user->setPass($passHash);
            
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            
            Login::login($user->getId());

            return new Response(302, ['location' => '/dashboard']);
        }
    }
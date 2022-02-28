<?php

    namespace Login\Register\Controller;

    use Login\Register\Entity\User;
    use Login\Register\Helper\EntityManagerFactory;
    use Login\Register\Services\{Login, Routers};
    use Psr\Http\Message\{ServerRequestInterface, ResponseInterface};
    use Psr\Http\Server\RequestHandlerInterface;
    use Nyholm\Psr7\Response;

    require_once __DIR__ . '/../../vendor/autoload.php';

    class RealizaLoginController implements RequestHandlerInterface
    {
        private $entityManager;
        private $userRepository;

        use Routers, Login;

        public function __construct()
        {
            $entityManagerFactory = new EntityManagerFactory();
            $this->entityManager = $entityManagerFactory->getEntityManager();
            $this->userRepository = $this->entityManager->getRepository(User::class);
        }

        public function handle(ServerRequestInterface $request): ResponseInterface
        {
            $data = $request->getParsedBody();

            $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
            if((is_null($email)) || ($email === false)){

                Routers::session('danger', 'Email inválido!');
                return new Response(302, ['location' => '/login']);
            }

            $pass = filter_var($data['password'], FILTER_SANITIZE_STRING);
            if((is_null($pass)) || ($pass === false)){

                Routers::session('danger', 'Senha inválido!');
                return new Response(302, ['location' => '/login']);
            }

            /**
             * @var User $user
             */
            $user = $this->userRepository->findOneBy(['email' => $data['email']]);

            if((is_null($user)) || ($user->verifyPass($data['password'])) === false){
                Routers::session('danger', 'Usuário e/ou senha incorreta!');

                return new Response(302, ['location' => '/login']);
            }

            Login::login($user->getId());

            return new Response(302, ['location' => '/dashboard']);
        }
    }
<?php

    require_once __DIR__ . '/vendor/autoload.php';

    use Doctrine\ORM\Tools\Console\ConsoleRunner;
    use Login\Register\Helper\EntityManagerFactory;

    $entityManagerFactory = new EntityManagerFactory();
    $entityManager = $entityManagerFactory->getEntityManager();

    return ConsoleRunner::createHelperSet($entityManager);
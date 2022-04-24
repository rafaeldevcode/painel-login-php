<?php

    namespace Painel\Services;

    trait Routers
    {
        public static function session(string $typeMessage, $message)
        {
            session_start();

            $_SESSION['type_message'] = $typeMessage;
            $_SESSION['message'] = $message;

        }
    }
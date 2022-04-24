<?php

// Arquivo para configurar funções globais da aplicação

// Parar aplicação no momento de chamada da função
if(!function_exists('dd')):
    function dd(): void
    {
        echo '<pre>';
        array_map(function($x) {var_dump($x);}, func_get_args());
        die;
    }
endif;

// Retornar o caminho dos arquivos
if(!function_exists('asset')):
    function asset(string $path): void
    {
        $protocol = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on') ? 'https' : 'http');
        $host = $_SERVER['HTTP_HOST'];  
        
        echo "{$protocol}://{$host}/{$path}";
    }
endif;

// Retornar o html com todas as variaveis
if(!function_exists('route')):
    function route(string $path, array $data): string
    {
        // Extrair as os dados do array em variaveis individuais
        extract($data);

        // Retornar todo html em uma variaável
        ob_flush();
        require_once __DIR__ . "/../views/{$path}.php";
        $html = ob_get_clean();

        return $html;
    }
endif;
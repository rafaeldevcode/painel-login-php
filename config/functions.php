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
    function view(string $path, array $data): string
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

// Retornar o path da url a fim de especificar qual rota chamar
if(!function_exists('path')):
    function path(): string
    {
        $server_name = $_SERVER['SERVER_NAME'];

        // Definir se irá usar o 'REDIRECT_URL' ou 'PATH_INFO'
        // REDIRECT_URL Usado se estiver em produção
        // PATH_INFO Usado para desenvolvimento local
        if(($server_name === 'localhost') ||
        ($server_name === '127.0.0.1') ||
        ($server_name === '0.0.0.0')):
            $path = !isset($_SERVER['PATH_INFO']) ? '/' : $_SERVER['PATH_INFO'];
        else:
            $path = !isset($_SERVER['REDIRECT_URL']) ? '/' : $_SERVER['REDIRECT_URL'];
        endif;

        // Garantir que o ultimo caracter seja sempre um '/'
        $path = substr($path, -1, 1) === '/' ? $path : "{$path}/";

        return $path;
    }
endif;
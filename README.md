# Dependências 
- doctrine/orm
- symfony/cache
- doctrine/annotations
- psr/http-message
- psr/http-server-handler
- nyholm/psr7
- nyholm/psr7-server
- psr/container
- doctrine/migrations

##

# Ferramentas e linguagens utilizadas
- Php
- ORM Doctrine
- HTML5
- CSS3
- Javascript

<div align="center" style="display: inline-block;">
    <img align="center" alt="rafaeldevcode-PHP" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg">
    <img align="center" alt="rafaeldevcode-DOCTRINE" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/doctrine/doctrine-original.svg">
    <img align="center" alt="rafaeldevcode-HTML" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg">
    <img align="center" alt="rafaeldevcode-CSS" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg">
    <img align="center" alt="rafaeldevcode-Js" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-plain.svg">
</div>

##

# Instalando pacotes depois de baixar projeto

- composer install [Instala as dependências]
- vendor/bin/doctrine-migrations migrations:diff [Criar as tabelas no Banco de Dados]
- vendor/bin/doctrine-migrations migrations:migrate [Cria o versionanmento do Banco de Dados]

##

# Para rodar localmente com o servidor do php

- php -S localhost:8080 -t public


# Para rodar localmente em um servidor apache utilizando mamp, xampp ou qualquer outro software
- Adicionar em .haccess na raiz do projeto o path em que esta seu projeto, Ex:
    http://localhost/meu-projeto
    em .htaccess substitua 'RewriteBase /' => 'RewriteBase /meu-projeto'

##

# Projeto

Este é um projeto desenvolvido a fim de aprimorar conhecimentos e já deixar uma estrura php pronta para iniciar um novo projeto,
Com um painel de login pronto e várias outras configurações preparadas.

# Imagens

<div align="center" style="dispaly: inline-block;">
        <img align="center" alt="rafaeldevcode-login" height="auto" width="400" src="https://raw.githubusercontent.com/rafaeldevcode/painel-login/main/public/assets/images/painel-login.png">
        <img align="center" alt="rafaeldevcode-login" height="auto" width="400" src="https://raw.githubusercontent.com/rafaeldevcode/painel-login/main/public/assets/images/painel-register.png">
</div>

<div align="center">
    <img align="center" alt="rafaeldevcode-dashboard" height="auto" width="800" src="https://raw.githubusercontent.com/rafaeldevcode/painel-login/main/public/assets/images/dashboard.png">
</div>

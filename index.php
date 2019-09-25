<?php

/*
|--------------------------------------------------------------------------
| Regitrando o autoload
|--------------------------------------------------------------------------
|
| O Composer fornece um carregador de classe conveniente e gerado automaticamente para
| nossa aplicação.
|
*/
require __DIR__ . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Importação do arquivo de rotas
|--------------------------------------------------------------------------
|
| Aqui serão importadas todas as rotas do sistema.
|
*/
require __DIR__ . '/src/routes.php';

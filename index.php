<?php

declare(strict_types=1);
/**
 * https://docs.flightphp.com/pt/v3/install
 *  
 */

// Iniciando a sessão
session_start(); // isso aqui é essencial

require_once 'flight/Flight.php';

// Configurando o caminho absoluto da pasta de views
Flight::set('flight.views.path', __DIR__ . '/views');


require 'flight/autoload.php';

require_once 'models/UsuarioModel.php';

require_once 'controllers/UsuarioController.php';

require_once 'middleware/AuthMiddleware.php';

// Protegendo rotas com o middleware

AuthMiddleware::protegerRota([
    '/usuarios', 
    '/usuario', 
    '/home',
    "/logout",
    "/buscaUsuario",
    "/buscaUsuarioNome",
    "/inserirUsuario",
]);

// minhas rotas

Flight::route('/',['UsuarioController', 'index']);

Flight::route('/home',['UsuarioController', 'home'] );

Flight::route('POST /inserirUsuario', ['UsuarioController', 'inserirUsuario'] );

Flight::route('/usuarios',['UsuarioController', 'listaUsuarios'] );

// https://docs.flightphp.com/pt/v3/learn/responses
Flight::route('GET /buscaUsuario',['UsuarioController', 'buscaUsuario'] );


Flight::route('GET /buscaUsuarioNome',['UsuarioController', 'buscaUsuarioNome'] );

Flight::route('GET /excluir',['UsuarioController', 'excluirUsuario'] );

// https://docs.flightphp.com/pt/v3/learn/routing

Flight::route('POST /login', ['UsuarioController', 'loginUser'] );

Flight::route('/logout',['UsuarioController', 'logoutUser']);

Flight::start();

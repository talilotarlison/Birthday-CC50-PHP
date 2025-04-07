<?php

class AuthMiddleware
{
    public static function protegerRota($rotasProtegidas=[])
    {    
        // var_dump($rotasProtegidas);
        // Middleware: exige login para acessar certas rotas
        Flight::before('start', function (&$params, &$output)  use ($rotasProtegidas) {
            
            if (in_array(Flight::request()->url, $rotasProtegidas)) {
                if (!isset($_SESSION['usuario'])) {
                    Flight::redirect('/');
                    Flight::halt(401, 'Acesso não autorizado');
                }
            }
        });
    }
}
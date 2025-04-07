<?php

/**
 * https://docs.flightphp.com/pt/v3/install
 *  
 */ 

class Conexao {
    public static function conectar() {
        $pdo = new PDO('sqlite:' . __DIR__ . '/../usuarios.db');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}


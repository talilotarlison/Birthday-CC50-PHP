<?php
require_once __DIR__ . '/../database/conexao.php';

class UsuarioModel {
    public static function listarTodos() {
        $pdo = Conexao::conectar();
        $stmt = $pdo->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorId($id) {
        $pdo = Conexao::conectar();
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function inserir($nome, $idade) {
        $pdo = Conexao::conectar();
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, idade) VALUES (?, ?)");
        return $stmt->execute([$nome, $idade]);
    }

    public static function atualizar($id, $nome, $idade) {
        $pdo = Conexao::conectar();
        $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, idade = ? WHERE id = ?");
        return $stmt->execute([$nome, $idade, $id]);
    }

    public static function deletar($id) {
        $pdo = Conexao::conectar();
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public static function buscarPorNome($nome) {
        $pdo = Conexao::conectar();
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nome LIKE ?");
        $nome = "%".$nome."%";
     
        $stmt->execute([$nome]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}

class LoginModel {
    public static function inserir($nome, $senha) {
        $pdo = Conexao::conectar();
        $stmt = $pdo->prepare("INSERT INTO login (nome, senha) VALUES (?, ?)");
        return $stmt->execute([$nome, $senha]);
    }

    public static function buscarPorEmail($nome) {
        $pdo = Conexao::conectar();
        $stmt = $pdo->prepare("SELECT * FROM login WHERE nome = ?");
        $stmt->execute([$nome]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function buscarUsuarioCadastrado($nome, $senha) {
        $pdo = Conexao::conectar();
        $stmt = $pdo->prepare("SELECT * FROM login WHERE nome = ? AND senha = ?");
        $stmt->execute([$nome, $senha]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

/* https://github.com/danmadeira/sqlite-pdo?tab=readme-ov-file
* 
*  https://docs.flightphp.com/pt/v3/install
*/
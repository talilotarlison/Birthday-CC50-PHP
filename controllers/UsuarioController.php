<?php
// controlador de usuario
class UsuarioController{
    public static function index() {
        if (isset($_SESSION['usuario'])) {
            // Se o usuário já estiver logado, redireciona para a página inicial
            Flight::redirect('/home');
            Flight::halt(404);
            return;
        }
        // Renderizando a view de login
        include 'views/login.php';
    }

    public static function home() {
        if (!isset($_SESSION['usuario'])) {
            // Se o usuário não estiver logado, redireciona para a página inicial
            Flight::redirect('/');
            Flight::halt(404);
            return;
        }else{
            $usuario = $_SESSION['usuario'];
            Flight::render('home.php', ['usuario' => $usuario]);
        }
        
    }

    public static function inserirUsuario(){
        // metodo get
        //$query = Flight::request()->query;
        //$query = Flight::request()->query->getData();

        // metodo post
        $query = Flight::request()->data->getData();

        // trata dados caso nao venham no formato correto
        // $nome = isset($query['nome']) ? $query['nome'] : 'Desconhecido';
        // $idade = isset($query['idade']) ? $query['idade'] : 'N/A';
    
        if (isset($query['nome'])&& isset($query['idade'])) {
            $nome = $query['nome'];
            $idade = $query['idade'];
            UsuarioModel::inserir($nome, $idade);
        } else {
            // Se os parâmetros não estiverem definidos, redireciona para a página inicial
            Flight::redirect('../views/erro.php');
            Flight::halt(404);
            return;
        }
    
        // Renderizando a view com os dados do usuário
        Flight::render('sucesso.php', [
            'nome' => $nome,
            'idade' => $idade
        ]);
    }

     public static function listaUsuarios() {
        $usuarios = UsuarioModel::listarTodos();
    
        Flight::render('listaUsuarios.php', ['usuarios' => $usuarios]);
    }

    public static function buscaUsuario(){
        Flight::render('buscaUsuario.php');
    }

    public static function buscaUsuarioNome() {
        $query = Flight::request()->query->getData();
        $nome = $query['nome'] ?? null; // Se não houver id, será null
        
        if ($nome) {
            $usuario = UsuarioModel::buscarPorNome($nome);
            $todosUsuario = UsuarioModel::listarTodos();
            if ($usuario) {
                Flight::json($usuario);  
            }else{
                Flight::json($todosUsuario); 
            } 
        }else {
            Flight::json(['error' => 'Usuário não encontrado.']);
            return;
        }
  
    }
    
    public static function loginUser(){
        // metodo get
        // $query = Flight::request()->query;
        // metodo post
        $query = Flight::request()->data->getData();
      
        if(isset($query['nome']) && isset($query['senha'])) {
            $email = $query['nome'];
            $senha = $query['senha'];
    
            $usuarioCadastrado = LoginModel::buscarUsuarioCadastrado($email, $senha);
            
            if($usuarioCadastrado) {
                $_SESSION['usuario'] = $usuarioCadastrado;
                Flight::redirect('/home');
            } else {
                // Se o usuário não for encontrado, redireciona para a página de login
                Flight::redirect('/');
                Flight::halt(404);
                return;
            }
        } else {
            // Se os parâmetros não estiverem definidos, redireciona para a página inicial
            Flight::redirect('/');
            Flight::halt(404);
            return;
        }
        // Renderizando a view com os dados do usuário
    }

    public static function logoutUser(){
        session_destroy();
        echo "Logout feito com sucesso.";
        Flight::redirect('/');
        Flight::halt(404);
    }

    public static function excluirUsuario(){
        $query = Flight::request()->query->getData();
        $id = $query['id'] ?? null; // Se não houver id, será null
        
        if ($id) {
            UsuarioModel::deletar($id);
            Flight::redirect('/usuarios');
        }else {
            Flight::json(['error' => 'Usuário não encontrado.']);
            return;
        }
    }
    public static function editarUsuario(){
        $query = Flight::request()->query->getData();
        $id = $query['id'] ?? null; // Se não houver id, será null
        
        if ($id) {
            UsuarioModel::deletar($id);
            Flight::redirect('/usuarios');
        }else {
            Flight::json(['error' => 'Usuário não encontrado.']);
            return;
        }
    }
}

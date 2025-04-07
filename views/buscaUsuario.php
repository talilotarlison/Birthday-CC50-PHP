<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        header {
            text-align: center;
            display: flex;
            aline-itens: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        form {
            width: 70%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-size: 1.1rem;
            margin-right: 10px;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 1rem;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 50%;
        }

        ul {
            width: 70%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .error {
            color: red;
            font-size: 1rem;
        }

        .no-results {
            color: gray;
            font-size: 1rem;
        }
        a {
            font-size: 1rem;
            color: #4CAF50;
            text-decoration: none;
            margin: 0 10px;
            padding: 8px 15px;
            border: 2px solid #4CAF50;
            border-radius: 4px;
            transition: background-color 0.3s;
            margin-bottom: 30px;
        }

        a:hover {
            background-color: #4CAF50;
            color: white;
        }

        table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
}

th {
    background-color: #4CAF50;
    color: white;
}

td {
    background-color: #f9f9f9;
}

    </style>
</head>
<body>
    <header>
        <h1>Busca Usuário</h1>
        <div> 
            <a href="/home">Adicionar Usuario</a>
            <a href="/usuarios">Lista de Usuarios</a>
            <a href="/logout">Logout</a>
        </div>

    </header>
 
    <form id="formBuscaUsuario">
        <label for="nome">Nome por Usuario:</label>
        <input type="text" id="nome" name="nome" autocomplete="off">
    </form>
    <ul id="listaUsuarios">
        <!-- Lista de usuários será exibida aqui -->
    </ul>

    <script>
    document.getElementById('nome').addEventListener('keyup', function() {
        const nome = this.value;

        fetch('/buscaUsuarioNome?nome=' + nome, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            const listaUsuariosDiv = document.getElementById('listaUsuarios');
            listaUsuariosDiv.innerHTML = ''; // Limpa a tabela antes de adicionar novos resultados

            // Cria o cabeçalho da tabela
            const tabela = document.createElement('table');
            const thead = document.createElement('thead');
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
            `;
            thead.appendChild(tr);
            tabela.appendChild(thead);

            // Cria o corpo da tabela
            const tbody = document.createElement('tbody');
            if (Array.isArray(data) && data.length > 1  ) {
                data.forEach(usuario => {
                    const tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td>${usuario.id}</td>
                        <td>${usuario.nome}</td>
                        <td>${usuario.idade} anos</td>
                    `;
                    tbody.appendChild(tr);
                });
            } else if(data) {
                const tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td>${data.id ?? "ID"}</td>
                        <td>${data.nome ?? "Nome"}</td>
                        <td>${data.idade ?? "Idade "} anos</td>
                    `;
                    tbody.appendChild(tr);
            }else {
                // Caso nenhum usuário seja encontrado
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td colspan="3">Nenhum usuário encontrado</td>
                `;
                tbody.appendChild(tr);
            }
            tabela.appendChild(tbody);

            listaUsuariosDiv.appendChild(tabela);
        })
        .catch((error) => {
            console.error('Erro:', error);
            const listaUsuariosDiv = document.getElementById('listaUsuarios');
            listaUsuariosDiv.innerHTML = ''; // Limpa a tabela antes de adicionar novos resultados

            const tabela = document.createElement('table');
            const tbody = document.createElement('tbody');
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td colspan="3">Erro ao buscar usuários</td>
            `;
            tbody.appendChild(tr);
            tabela.appendChild(tbody);

            listaUsuariosDiv.appendChild(tabela);
        })
        .finally(() => {
            console.log('Requisição concluída');
        });
    });
</script>

</body>
</html>
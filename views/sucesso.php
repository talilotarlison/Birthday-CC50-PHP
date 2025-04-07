<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário Cadastrado</title>
    <style>
        /* Resetando margens e paddings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #4CAF50;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1rem;
            margin: 10px 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        .links {
            margin-top: 20px;
        }

        .links a {
            font-size: 1rem;
            color: #4CAF50;
            text-decoration: none;
            margin: 0 10px;
            padding: 8px 15px;
            border: 2px solid #4CAF50;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .links a:hover {
            background-color: #4CAF50;
            color: white;
        }

        .success-message {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #28a745;
        }

        .info {
            margin-top: 10px;
            background-color: #e9f7e9;
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #28a745;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Usuário Cadastrado com Sucesso</h1>
        <div class="success-message">
            <p>O usuário foi registrado com sucesso!</p>
        </div>
        
        <div class="info">
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
            <p><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?></p>
        </div>

        <div class="links">
            <a href="/">Voltar para o Cadastro</a>
            <a href="/usuarios">Ver todos os usuários</a>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro no Cadastro</title>
    <style>
        /* Resetando margens e paddings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #e74c3c;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
        }

        a {
            font-size: 1rem;
            color: #4CAF50;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #fff;
            border: 2px solid #4CAF50;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: #4CAF50;
            color: white;
            border-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Erro</h1>
        <p>Ocorreu um problema ao cadastrar o usuário. Por favor, tente novamente.</p>
        <a href="/home">Voltar para o Cadastro</a>
    </div>
</body>
</html>

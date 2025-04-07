<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday</title>
    <style>
        /* Reseta margens e paddings padrão */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        main {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Limita a largura do formulário */
        }

        h1 {
            font-size: 2rem;
            color: #333;
        }

        label {
            font-size: 1rem;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        footer {
            text-align: center;
            font-size: 0.9rem;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Birthday</h1> 
    </header>
    <main>
        <p>This is a simple HTML structure.</p>
        <form action="/login" method="post">
            <label for="nome">Name:</label>
            <input type="text" id="nome" name="nome" required>
            <br>
            <label for="senha">Password:</label>
            <input type="password" id="senha" name="senha" required>
            <br>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday - Home</title>
    <style>
        /* Reseta margens e paddings padrão */
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

        header {
            width: 90%;
            margin: 20px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        header h1 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        header div {
            margin-top: 10px;
        }

        header a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 1rem;
            
        }

        header a:hover {
            text-decoration: underline;
        }
        main > p, main h2{
            text-align: center;
        }
        main {
            
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
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
            color: #888;
        }

        footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .links a {
            font-size: 1rem;
            color: #4CAF50;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Birthday</h1>
        <div>
            <h2>Login: <?php echo htmlspecialchars($usuario["nome"]); ?></h2>
            <a href="/logout">Logout</a>
        </div>
    </header>

    <main>
        <p>This is a simple HTML structure.</p>
        <p>To register a user, please fill in the form below:</p>
        <form action="/inserirUsuario" method="post">
            <label for="nome">Name:</label>
            <input type="text" id="nome" name="nome" required>
            <br>
            <label for="idade">Age:</label>
            <input type="number" id="idade" name="idade" required>
            <br>
            <button type="submit">Submit</button>
        </form>
    </main>

    <div class="links">
        <a href="/usuarios">View all users</a>
        <a href="/buscaUsuario">Search for a user</a>
    </div>
    <footer >    
        <div class="links">
            <p><a href="/sobre">About</a></p>
            <p><a href="/contato">Contact</a></p>
            <p><a href="/termos">Terms of Service</a></p>  
            <p><a href="/privacidade">Privacy Policy</a></p>
            <p><a href="/ajuda">Help</a></p>
            <p><a href="/faq">FAQ</a></p>
        </div>
        <p>&copy; 2023 Birthday. All rights reserved.</p>
    </footer>
    </body>
</html>

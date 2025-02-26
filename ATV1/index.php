<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
        }
    </style>
</head>
<body>

    <form action="processa.php" method="get">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Telefone:</label>
        <input type="number" name="telefone" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Mensagem:</label>
        <textarea name="mensagem" rows="4" required></textarea>

        <button type="submit">Enviar via GET</button>
        <br><br>
        <a href="http://localhost/pw2/processa.php?nome=Gabriel+Rezni&telefone=47988585223&email=gabriel_renzi%40hotmail.com&mensagem=Ola+Mundo" target="_blank">Enviar Dados</a>
    </form>

        

    <br>

</body>
</html>

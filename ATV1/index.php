<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <form action="destino.php" method="get">
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

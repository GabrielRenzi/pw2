<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2>Preencha o formulário</h2>
    <form action="pdf.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>
        
        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Mensagem:</label>
        <textarea name="mensagem" required></textarea>
        <br><br>

        

        <button type="submit">Gerar PDF</button>
    </form>
</body>
</html>

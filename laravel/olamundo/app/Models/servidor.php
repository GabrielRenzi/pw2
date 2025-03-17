<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
</head>
<body>
    <h2>Resultado do IMC</h2>

    <?php if (isset($erro)): ?>
        <p style="color: red;"><?php echo $erro; ?></p>
    <?php else: ?>
        <p><strong>IMC:</strong> <?php echo $imc; ?></p>
        <p><strong>Classificação:</strong> <?php echo $interpretacao; ?></p>
    <?php endif; ?>

    <br>
    <a href="index.php">Calcular novamente</a>
</body>
</html>

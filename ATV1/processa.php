<?php
$dados = $_GET;

$cabecalhos = apache_request_headers();

$metodo = $_SERVER['REQUEST_METHOD'];

if (empty($_GET)) {
    echo "Nenhum dado foi recebido via GET.";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
</head>
<body>

    <div class="container">
        <h2>Dados Recebidos</h2>

        <h3>Dados Enviados:</h3>
        <pre><?php print_r($dados); ?></pre>

        <h3>Cabeçalhos da Requisição:</h3>
        <pre><?php print_r($cabecalhos); ?></pre>
    </div>

</body>
</html>

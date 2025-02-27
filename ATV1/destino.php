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
        <h1>Dados do Cadastro</h1>
        <p><?php print_r($dados); ?></p>

        <h1>Rquisição</h1>
        <p><?php print_r($cabecalhos); ?></p>
    </div>

</body>
</html>

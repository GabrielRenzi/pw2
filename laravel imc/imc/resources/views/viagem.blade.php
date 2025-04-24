<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo de Consumo</title>
    @extends('layouts.app')
</head>
<body>
     <div class="container">
        <div class="resultado-container">
            <h2>Resultado do Cálculo de Consumo</h2>
            <div class="gasto-info">
                <p>O valor total do gasto será de:</p>
                <p><strong>{{ $combustivel }}: R$ {{ $gastoTotal }}</strong></p>>
        </div>
</body>
</html>
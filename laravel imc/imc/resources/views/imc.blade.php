<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    @extends('layout.app')
</head>
<body id="layoutimc">
    <h2>Resultado do IMC</h2>

    <h3>Nome: {{$resultadoimc["nome"]}}</h3>
    <p>Peso: {{$resultadoimc["peso"]}}</p>
    <p>Altura: {{$resultadoimc["altura"]}}</p>
    <p>IMC: {{$resultadoimc["imc"]}} - {{$resultadoimc["classificacaoimc"]}}</p>
</body>
</html>

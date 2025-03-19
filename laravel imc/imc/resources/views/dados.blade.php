<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
  <title>Formulário de Peso e Altura</title>
  @extends('layout.app')
</head>
<body>

  <form action="{{ url('/imc') }}" method="get">

    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="peso">Peso (kg):</label>
    <input type="number" id="peso" name="peso" required><br><br>

    <label for="altura">Altura (Metros):</label>
    <input type="number" step="0.01" id="altura" name="altura" required><br><br>

    <button type="submit">Enviar</button>
  </form>

</body>
</html>

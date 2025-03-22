<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Sono</title>
  @extends('layout.app')
</head>
<body>

  <form action="{{ url('/sono') }}" method="get">

    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" required><br><br>

    <label for="horas">Horas de Sono: </label>
    <input type="number"  id="horas" name="horas" required><br><br>

    <button type="submit">Enviar</button>
  </form>

</body>
</html>

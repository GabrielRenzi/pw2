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

    <p id="aviso">>Para menores de 1 ano use 0.01 até 0.11</p><br/>
    <label for="idade">Idade:</label>
    <input type="number" step="0.01" id="idade" name="idade" required><br><br>

    <label id="horas" for="altura">Média de horas de sono:</label>
    <input type="number" name="horas" placeholder="Numero inteiro" required><br/>

    <button type="submit">Enviar</button>
  </form>

</body>
</html>

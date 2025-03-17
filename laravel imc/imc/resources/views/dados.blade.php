<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Peso e Altura</title>
</head>
<body>

  <h1>Informe seu peso e altura</h1>

  <form action="{{ url('/imc') }}" method="get">
    <label for="peso">Peso (kg):</label>
    <input type="number" id="peso" name="peso" required><br><br>

    <label for="altura">Altura (Metros):</label>
    <input type="number" step="0.01" id="altura" name="altura" required><br><br>

    <button type="submit">Enviar</button>
  </form>

</body>
</html>

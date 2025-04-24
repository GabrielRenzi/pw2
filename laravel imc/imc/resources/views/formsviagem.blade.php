<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Consumo de Combustível</title>
    @extends('layout.app')
</head>
<body>
    
    <div>
        <form action="{{ url('/viagem') }}" method="get">
            <div>
                <label for="combustivel">Combustível:</label>
                <select name="combustivel" id="combustivel">
                    <option value="Gasolina">Gasolina</option>
                    <option value="Álcool">Álcool</option>
                    <option value="Diesel">Diesel</option>
                </select>
            </div>

            <div>
                <label for="valor">Valor:</label>
                <input type="number" name="valor" id="valor" step="0.01" required>
            </div>

            <div>
                <label for="distancia">Distância em quilômetros a ser percorrida:</label>
                <input type="number" name="distancia" id="distancia" required>
            </div>

            <div>
                <label for="consumo">Consumo de combustível do veículo (km/l):</label>
                <input type="number" name="consumo" id="consumo" required>
            </div>

            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>
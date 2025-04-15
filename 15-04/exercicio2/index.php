<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>GErador Personalizado</title>
</head>
<body>
    <h1>Gerador de Nmeros Aleatorios</h1>
    <form action="calcular.php" method="post">
        <label for="limite">Digite um numero limite:</label>
        <input type="number" name="limite" id="limite" min="1" required>
        <button type="submit" name="gerar">Gerar Numero</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <form action="/calcular" method="post">
    @csrf
        <input type="number" name="num1" placeholder="Número 1">
    
        <select name="operador" id="operador">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">/</option>
        </select>
        
        <input type="number" name="num2" placeholder="Número 2"> 

        <button type="submit">Calcular</button>

    </form>
</body>
</html>
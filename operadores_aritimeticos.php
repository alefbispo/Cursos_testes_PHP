<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>
<body>
<?php
$a = 2;
$b = 4;
$c = 7;
echo "<h1> Operadores Aritiméticos</h1>";

# Usando operador de soma (+)
$resultado = $a + $b;
echo "Adição <br>";
echo "$a + $b = $resultado <br><br>";

# Usando subtração (-)
$resultado = $b - $a;
echo "Subtração <br>";
echo "$a - $b = $resultado <br><br>";

# Usando  ultiplicação (*)
$resultado = $a * $b;
echo "Multiplicação <br>";
echo "$a x $b = $resultado <br><br>";

# Usando  divisão (/)
$resultado = $b / $a;
echo "Divisão <br>";
echo "$a % $b = $resultado <br><br>";

# Usando resto da  divisão (%)
$resultado = $c % $a;
echo "Resto da divisão <br>";
echo "$c %% $a = $resultado <br><br>";
?>
    
</body>
</html>
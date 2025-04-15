<?php
$vetor = range(0, 99);

$numero = $vetor[rand(0, count($vetor) - 1)];

echo "<h1>Seu número da sorte é: $numero</h1>";
echo "<a href='index.php'>Gerar outro número</a>";
?>

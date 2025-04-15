<?php
// Vetor com cores e frases relacionadas
$cores = array(
    "Preto" => "Reviste seu bolso ou fique atento com algo de muito valor.",
    "Vermelho" => "Meu rabo após eu comer o atúm da escola!",
    "Verde" => "To com diarrêia.",
    "Amarelo" => "Quero mija!",
    "Roxo" => "É a cor da mulher apos não ter feito a janta."
);

// Sorteia uma chave aleatória (cor)
$corSorteada = array_rand($cores);
$frase = $cores[$corSorteada];

// Exibe resultado
echo "<h2>Cor sorteada: $corSorteada</h2>";
echo "<p>$frase</p>";
?>

<?php
$genero = $_POST['genero'] ?? '';

$frasesHomem = array(
    "Hoje é um bom pra carpi terreno.",
    "A Glock é a sua maior defensora",
    "A vida é como um jogo de basquete, faça um contrato milhionario e depois se lezhone",
);

$frasesMulher = array(
    "Não sei dirigi!.",
    "Se não queres apanhar, preapare-se para eu lhe usar",
    "Grandes louças requerem muita coragem e confiança."
);

if ($genero == "homem") {
    $frase = $frasesHomem[array_rand($frasesHomem)];
    echo "<h2>Vamo Trabaia(vulgo trampa), homem:</h2>";
    echo "<p>$frase</p>";
} elseif ($genero == "mulher") {
    $frase = $frasesMulher[array_rand($frasesMulher)];
    echo "<h2>Arrume a casa:</h2>";
    echo "<p>$frase</p>";
} else {
    echo "<p>Opção inválida. Volte e escolha um gênero válido.</p>";
}
?>

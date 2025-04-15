<?php
$time = $_POST['time'];

$frases = array(
    "Palmeiras" => array(
        "Olha o porco UUUHHHIUEDFCH!",
        "HULK ESMAGA!",
        "Vai tudo vira pururuca!"
    ),
    "Corinthians" => array(
        "VAI CURINTIAAAAAAAA!!!!!!",
        "È O TIMÂO PORRAAAA!",
        "Timão rumo à vitória!"
    ),
    "São Paulo" => array(
        "Ain paiin, paraah ai!",
        "Agora eu quero relaxa!",
        "Vaainn São pauluuuh!"
    ),
    "Santos" => array(
        "Nada Baleia!",
        "A velha guarda!",
        "O Alvinegro Praiano é tradição!"
    )
);

$fraseAleatoria = $frases[$time][array_rand($frases[$time])];

echo "<h2>Time escolhido: $time</h2>";
echo "<p>$fraseAleatoria</p>";
?>

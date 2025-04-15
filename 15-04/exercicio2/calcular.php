<?php
if (isset($_POST['gerar']) && isset($_POST['limite'])) {
    $limite = intval($_POST['limite']); 

    if ($limite > 0) {
        $vetor = range(0, $limite);
        $numero = $vetor[rand(0, count($vetor) - 1)];

        echo "<h1>Você escolheu o limite: $limite</h1>";
        echo "<h2>Número aleatório gerado: $numero</h2>";
    } else {
        echo "<p>Por favor, insira um número maior que zero.</p>";
    }
} else {
    echo "<p>Dados inválidos. Volte e tente novamente.</p>";
}
echo "<br><a href='index.php'>Voltar</a>";
?>

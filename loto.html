<?php

function generateRandomNumbers($max, $amount)
{
    $numbers = range(0, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $amount);
}

function generateQuinielaPoceada($numLines)
{
    $uniqueLines = [];
    while (count($uniqueLines) < $numLines) {
        $line = generateRandomNumbers(99, 8); // Numbers from 00 to 99
        sort($line);
        $uniqueLines[implode(',', $line)] = $line; // Using string as key to prevent duplicates
    }
    return array_values($uniqueLines);
}

function generateLotoPlus($numLines)
{
    $uniqueLines = [];
    while (count($uniqueLines) < $numLines) {
        $line = generateRandomNumbers(45, 6); // Numbers from 0 to 45
        sort($line);
        $uniqueLines[implode(',', $line)] = $line; // Using string as key to prevent duplicates
    }
    return array_values($uniqueLines);
}

// Main
$quinielaPoceadaLines = generateQuinielaPoceada(3);
$lotoPlusLines = generateLotoPlus(2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lottery Numbers Generator</title>
</head>

<body>
    <h1>QUINIELA POCEADA</h1>
    <?php foreach ($quinielaPoceadaLines as $line) : ?>
        <p><?= implode(', ', array_map(function ($num) {
                return sprintf("%02d", $num);
            }, $line)); ?></p>
    <?php endforeach; ?>

    <h1>Loto Plus</h1>
    <?php foreach ($lotoPlusLines as $line) : ?>
        <p><?= implode(', ', array_map(function ($num) {
                return sprintf("%02d", $num);
            }, $line)); ?></p>
    <?php endforeach; ?>
</body>

</html>
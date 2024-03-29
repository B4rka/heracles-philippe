<?php
require __DIR__ . '/src/Fighter.php';
// First Labour : Heracles vs Nemean Lion
// use your Figher class here

$heracles = new Fighter('Héraclès 🤨', 20, 6);

$nemean = new Fighter('Lion de Némée 🦁', 11, 13);
$round = 1;

while ($heracles->isAlive() && $nemean->isAlive()) {
    echo 'Round#'.$round.PHP_EOL;
    echo $heracles->fight($nemean).PHP_EOL;
    if (!$nemean->isAlive()){
        echo PHP_EOL;
        echo $nemean->name.' is dead !'. PHP_EOL;
        echo $heracles->name. ' wins ('.$heracles->life.')'. PHP_EOL;
        echo PHP_EOL;
        $heracles->victories++;
        break;
    }
    echo $nemean->fight($heracles).PHP_EOL;
    if (!$heracles->isAlive()){
        echo PHP_EOL;
        echo $heracles->name.' is dead !'. PHP_EOL;
        echo $nemean->name. ' wins ('.$nemean->life.')'. PHP_EOL;
        echo PHP_EOL;
        $nemean->victories++;
        break;
    }
    $round++;
}

echo 'Heracles\' wins : '.$heracles->victories.PHP_EOL ;
echo 'Nemean\'s lion\'s wins : '.$nemean->victories;

// var_dump($heracles);
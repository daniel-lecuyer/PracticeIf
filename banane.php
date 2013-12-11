<?php
function getText($bananas, $apples, $oranges, $kiwis) {
    if(($bananas > $apples) && ($bananas > $oranges) && ($bananas > $kiwis)) {
        return PHP_EOL."Il y a plus de bananes: ".$bananas.PHP_EOL;
    }
    if(($apples >$bananas) && ($apples >$oranges) && ($apples > $kiwis)) {
        return PHP_EOL."Il y a plus de pommes: ".$apples.PHP_EOL;
    }
    if(($oranges > $bananas) && ($oranges > $apples) && ($oranges > $kiwis)) {
        return PHP_EOL."Il y a plus d'oranges: ".$oranges.PHP_EOL;
    }   
    if(($kiwis > $bananas) && ($kiwis > $apples) && ($kiwis > $oranges)) {
        return PHP_EOL."Il y a plus de kiwis: ".$kiwis.PHP_EOL;
    }
}

$bananas = rand(1, 50);
$apples = rand(1, 50);
$oranges = rand(1, 50);
$kiwis = rand(1, 50);

$text = getText($bananas, $apples, $oranges, $kiwis);
echo $text;
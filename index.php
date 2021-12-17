<?php
function assorted_number() {
    $array = [];
    for($i = 1; $i <= 20; $i ++) {
        $number = rand(1,20);
        array_push($array, $number);
    }

    echo "Array sorteado = [" .join(", ", $array)."]<br>";
    echo "Os números que não se repetem são os " .join(', ', array_unique($array));
}

assorted_number();

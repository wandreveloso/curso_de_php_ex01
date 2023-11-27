<?php

    $var1 = 3; //int
    $var2 = 5.4; //float
    $soma = $var1 + $var2; //resultado da soma, ficará float
    echo "A soma de $var1 e $var2 é $soma<br>";
    if(is_float($soma)){
        echo "A soma é float, embora esteja somando um inteiro e um float!";
    }

?>
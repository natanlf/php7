<?php
    //todos os parametros precisam ser inteiros e passamos varios parametros do tipo inteiro e somamos e o tipo de retorno é string pois está tipado assim
    function soma(int ...$valores): string{ 
        return array_sum($valores);
    }

    echo var_dump(soma(2,2));
    echo "<br>";
    echo soma(25,33);
    echo "<br>";
    echo soma(1.5,3.9);
    echo "<br>";
?>
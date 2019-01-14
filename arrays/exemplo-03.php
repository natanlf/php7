<?php
    $pessoas = array();

    array_push( //adiciona ao array de pessoas outro array
        $pessoas, array(
            "nome" => "Mel",
            "idade" => 4
        )
    );

    array_push( //adiciona ao array de pessoas outro array
        $pessoas, array(
            "nome" => "Natan",
            "idade" => 27
        )
    );

    print_r($pessoas);
    echo "<br>";
    print_r($pessoas[0]["nome"])
?>
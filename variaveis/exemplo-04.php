<?php
    /* Se eu criar uma variável nesse arquivo, ela terá um escopo local,
    se eu procurar em outro arquivo não vou encontrar, é diferente de uma variável de sessão,
    pois ela é vista em várias páginas */

    $nome = "Luan";

    function teste(){ //escopo da função
        global $nome; //assim consigo pegar a variável, pois ela não foi defininida dentro do escopo da função
        echo $nome;
    }
    teste();

    function teste2(){
        $nome = "Natan";
        echo $nome;
    }
    teste2();
?>
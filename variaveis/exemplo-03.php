<?php
    //exemplo de chamada no browser: http://localhost/curso-udemy-php/variaveis/exemplo-03.php?s=param
    /* Por padrão o parametro que vem no get é string mas podemos converter caso haja necessidade.
    No nosso exemplo, recebemos um string e convertemos para int */

    /* uri + query string = url */

    $nome = (int)$_GET["s"]; //_GET é uma variável pré-definida pelo php
    //var_dump($nome);

    $ip = $_SERVER["REMOTE_ADDR"]; //pega ip do cliente
    //echo $ip;

    $dir = $_SERVER["SCRIPT_NAME"]; //diretório corrente
    echo $dir;
?>
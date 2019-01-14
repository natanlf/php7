<?php
    define("BANCO_DE_DADOS", [ //array com constante
        '127.0.0.1',
        'root',
        'password',
        'test'
    ], true); //esse true no final permite coloca a constante usando case sensitive, é melhor deixar tudo em caixa alta sem ser case sensitive, basta tirar o true para isso

    print_r(BANCO_DE_DADOS);
?>
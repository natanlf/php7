<?php
    /* DIFERENÇA ENTRE INCLUDE E REQUIRED
        require obriga que o arquivo exista e esteja funcionando corretamente
        include tenta funcionar mesmo que o arquivo não exista ou que tenha algum problema
        além de ter mais recursos como o include path

        temos o require once e include once pois é possível que chame uma função duas vezes
        pois o include pode chamar e um outro include também
    */

    include 'exemplo-01.php';
    echo soma(10, 10);
?>
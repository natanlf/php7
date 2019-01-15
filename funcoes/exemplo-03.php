<?php
    function ola(){
        $args = func_get_args();
        return $args;
    }

    var_dump(ola("Bom dia", 10));
?>
<?php
    require_once("config.php");
    session_regenerate_id(); //gera id de sessão
    echo session_id();
?>
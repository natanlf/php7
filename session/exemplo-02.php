<?php
    require_once ("config.php");
    session_unset($_SESSION["nome"]); //apaga a session
    session_destroy($_SESSION["nome"]);
    unset($_SESSION['nome']);
    echo $_SESSION["nome"];
?>
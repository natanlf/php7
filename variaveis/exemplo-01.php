<?php
$nome = "Natan";
$sobrenome = "Lara";
//echo $nome;
$anoNascimento = 1991;
$nomeCompleto = $nome." ".$sobrenome;
echo $nomeCompleto;
exit(); //executa até aqui

echo "<br>";
var_dump($nome);
echo "<br>";
unset($nome, $anoNascimento); //unset limpa o valor da variável

/* Verifica se a variável foi definida (se existe), caso exista então imprime na tela */
if(isset($anoNascimento)){
    echo $anoNascimento; 
}


?>
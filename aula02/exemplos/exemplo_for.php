<?php
    for ($i=01; $i <= 5; $i++) { 
        echo $i;
        echo "<br>";
    }
    echo "<hr>";
    $nomes = ['FULANO','CICLANO','BELTRANO','NEYMAR'];

    //$qtde = count($nomes);
    //echo "<hr>";
    //for ($i=0; $i <= $qtde -1 ; $i++) { 
    //    echo $nomes[$i];
    //    echo "<br>";
    //}
    echo "<hr>";

    foreach ($nomes as $indice => $nome) {
        echo $indice . " ==> $nome <br>";
        echo "<br>";
    }
?>
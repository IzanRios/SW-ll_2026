<?php
    $nota1 = 6;
    $nota2 = 7;
    $nota3 = 8;
        echo "Nota 1: $nota1<br>";
        echo "Nota 2: $nota2<br>";
        echo "Nota 3: $nota3<br><br>";
    $media = ($nota1 + $nota2 + $nota3) / 3;
    if ($media >= 6) {
        echo "Média: $media - Aprovado!";
    } else {
        echo "Média: $media - Reprovado!";
    }
?>

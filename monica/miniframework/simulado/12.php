<?php
    $x1 = 10;
    $y1 = 10;
    $x2 = (20 + 20) * -1;
    $y2 = 110 - 10/ $y1;

    if($x1 < $x2) {
        echo 'x1 a esquerda: ';
    }elseif($x1 == $x2) {
        echo 'Mesmo ponto horizontal: ';
    }else {
        echo 'x1 a direita: ';
    }

    if($y1 < $y2) {
        echo 'y1 acima';
    }elseif($y1 == $y2) {
        echo 'Mesmo ponto vertical: ';
    }else {
        echo 'y1 abaixo';
    }
?>
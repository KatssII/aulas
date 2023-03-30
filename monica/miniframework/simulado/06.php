<?php
    $N1 = 7;
    $N2 = 5;

    if (($N1>=0) && ($N1<=10) && ($N2>=0) && ($N2<=10) == true) {
        $media = ($N1 + $N2)/2;
        echo 'A media das notas e'. $media;
    }else{
        echo 'Uma das notas e invalida.';
    }
?>
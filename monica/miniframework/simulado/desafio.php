<?php
    $n1 = 9;
    $n2 = 10;
    $n3 = 10;
    $media = ($n1+$n2+$n3)/3;
    $media = round($media,2);

    if($media >=7 && ($media <10)) {
        echo ('Voce foi aprovado com a media '.$media.':)');
    }elseif($media <7) {
        echo ('Voce foi reprovado com a media '.$media.':(');
    }else{
        echo ('Voce foi aprovado com louvor com a media '.$media.'!!');
    }

?>
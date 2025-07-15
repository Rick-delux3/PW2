<?php
    $num = [
        0, 1, 3, 5, 0, 4, 0, 44, 0, 9
    ];
    $cont0 = 0;
    $contnum = 0;

    foreach ($num as $key => $value) {
        if($value ==0){
            $cont0++;
        }
        else{
            $contnum++;
        }
        
    };
    echo 'Existem ' . $cont0 .  ' zeros' . '<br>' . 'e ' . $contnum . ' números ' . 'são diferentes de zero';
    





?>
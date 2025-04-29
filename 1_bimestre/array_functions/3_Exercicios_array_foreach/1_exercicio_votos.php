<?php
    
    $pessoas[
        [
            'nome' => 'João';
            'idade' => 14;

        ],
        [
            'nome' => 'Pedro';
            'idade' => 17;

        ],
        [
            'nome' => 'Cleide';
            'idade' => 83;

        ]
    ]

    foreach ($pessoas as $key => $value) {
        if($value['idade'] > 70 || $value['idade'] < 18 && $value['idade'] >= 16){
            echo 'A pessoa' . $value['nome'] . 'Voto opcional!';
        }
        elseif($value['idade'] >= 18 && $value['idade'] < 70){
            echo 'A pessoa' . $value['nome'] . 'Voto Obrigatório!!';
        }
        else{
            echo 'A pessoa' . $value['nome'] . 'Voto Obrigatório!!';
        }

        
    }

















?>
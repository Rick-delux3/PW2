<?php
/** 
 * Crie um array no qual irá conter 3 pessoas (nome, idade).
 * Faça um foreach para exibir cada uma das pessoas, e exiba
 * se a pessoa pode votar ou não.
 * idade menor que 16 não pode votar
 * idade entre 16 e 18 voto opcional
 * idade entre 18 e 70 obrigatório
 * idade maior que 70 voto opcional
*/

    $pessoas = [
        [
            'nome' => 'Joaquim',
            'idade'=> 20
        ],
        [
            'nome' => 'Maria',
            'idade'=> 90
        ],
        [
            'nome' => 'Marquito',
            'idade'=> 14
        ],
    ];

    verificarVotacao($pessoas);

    function verificarVotacao($pessoas) {
        foreach ($pessoas as $key => $pessoa) {
            if ($pessoa['idade'] < 16) 
                echo 'Não pode votar';
            
            if ($pessoa['idade'] >= 16 && $pessoa['idade'] < 18) 
                echo 'Voto Opcional';
            
            if ($pessoa['idade'] >= 18 && $pessoa['idade'] < 70) 
                echo 'Voto Obrigatório';
            
            if ($pessoa['idade'] >= 70) 
                echo 'Voto Opcional';
    
            echo '<br>';
        }
    }

?>
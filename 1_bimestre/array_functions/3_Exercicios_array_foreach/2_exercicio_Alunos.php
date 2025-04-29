<?php
$alunos = [
    [
        'nome' => 'Luiz',
        'rm' => '20251234141',
        'phone' => '11996739102',
        'foto' => '',

    ],
    [
        'nome' => 'Pedro',
        'rm' => '20251232910',
        'phone' => '1199674455',
        'foto' => '',

    ],
    [
        'nome' => 'Gustavo',
        'rm' => '20251234144',
        'phone' => '1199673421',
        'foto' => '',

    ],
    [
        'nome' => 'Jacinto',
        'rm' => '20251222343',
        'phone' => '1199813412',
        'foto' => '',

    ],
    
    
];
    
    foreach ($alunos as $key => $value) {
        echo 'Aluno:' . $value['nome'] . '<br>';
        echo 'Rm:' . $value['rm'] . '<br>';
        echo 'Telefone:' . $value['phone'] . '<br>';
        echo 'Foto:' . $value['foto'] . '<br>';
        
    };
    














?>
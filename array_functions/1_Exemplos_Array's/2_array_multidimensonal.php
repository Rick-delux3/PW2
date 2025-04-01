<?php
$pessoa = ['nome'=> 'amaurizin',
    'sobrenome'=> 'verdiinho Marciano',
    'idade'=> 60
];
$funcionarios = [
    'pessoa1'=> [
        'nome'=> 'hipaminondas',
        'sobrenome'=> 'Silva',
        'idade'=> 20
    ],

    'pessoa2'=> [
        'nome' => 'Seleide',
        'sobrenome'=> 'Silva',
        'idade'=> 20
    ],
    'pessoa3'=> [
        $pessoa
    ]
];

echo '<pre>';
echo var_dump($funcionarios);
echo $funcionarios['pessoa1' ]['nome'];

?>
<?php
    $alunos = [
        'Seleide da Silva',
        'Pombinha Branca da Paz',
        'Jacarildo Silveiro Marciano'
    ];

    dizerOla($alunos);

    function dizerOla($estudantes){
        foreach ($estudantes as $index => $estudante) {
            echo "<h1>$estudante</h1>";
        }
    }


?>
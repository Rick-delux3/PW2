<?php
    $zoo = [
        [
            'animal' => 'Joaquim',
            'Espécie' => 'Chipanzé',
            'Raça' => 'chimpanzé-comum',
            'Cor' => 'Preto',
            'Peso' => '80 kg',
            'idade' => '7 anos',
            'foto' => 'https://veja.abril.com.br/wp-content/uploads/2016/05/imagens-do-dia-best-pictures-of-day-20131203-14-original1.jpeg?crop=1&resize=1212,909',
        ],
        [
            'animal' => 'Guilherme',
            'Espécie' => 'Elefante',
            'Raça' => 'elefante-asiático',
            'Cor' => 'Cinza',
            'Peso' => '3267 kg',
            'idade' => ' 20 anos',
            'foto' => 'https://www.infoescola.com/wp-content/uploads/2019/07/elefante-asiatico-767971579.jpg',
            

        ],
        [
            'animal' => 'Math',
            'Espécie' => 'Zebra',
            'Raça' => 'Zebra-das-planices',
            'Cor' => 'Branca com listras pretas',
            'Peso' => '83 kg',
            'idade' => '5 anos',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbrT8XoRYs9pxeUTixNm-Z6MuG74bH0j9TPQ&s',

        ],
        [
            'animal' => 'Simba',
            'Espécie' => 'Leão',
            'Raça' => 'Leão-Africano',
            'Cor' => 'marrom',
            'Peso' => '95 kg',
            'idade' => '4 anos',
            'foto' => 'https://www.petz.com.br/blog/wp-content/uploads/2022/01/curiosidades-sobre-leao.jpg',

        ],
    ];

    foreach ($zoo as $key => $animal) {
        echo 'Animal:' . $animal['animal'] . '<br>';
        echo 'Espécie:' . $animal['Espécie'] . '<br>';
        echo 'Raça:' . $animal['Raça'] . '<br>';
        echo 'Cor: ' . $animal['Cor'] . '<br>';
        echo 'Peso:' . $animal['Peso'] . '<br>';
        echo 'Idade:' . $animal['idade'] . '<br>';
        echo 'Foto:' . '<img src=">' . $animal['foto'] . ' "<br>';
        
    };





?>
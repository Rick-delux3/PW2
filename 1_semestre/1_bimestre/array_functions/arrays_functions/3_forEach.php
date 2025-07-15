<?php

    $estacionamento = [
        'Fusca',
        'Uno',
        'Ferrari'
    ];

    foreach ($estacionamento as $key => $value) {
        echo "<hr>";
        echo "<b>Veiculo " . $key . ": </b>" . $value;
    }

    $patio = [
        [
            'nome' => 'Fusca',
            'placa' => 'abc123',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREkvL_qpTmdaFtBXkAyqCUHUAswdZByt8J9Q&s'
        ],
        [
            'nome' => 'Fiurino',
            'placa' => 'dem666',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFQONp50xb_KUg-3eee1IVA-ej474C9bAtfQ&s'
        ],
        [
            'nome' => 'Ferrari',
            'placa' => 'bab696',
            'foto' => 'https://i.ytimg.com/vi/HW33tufetJI/maxresdefault.jpg'
        ]
    ];

    foreach ($patio as $key => $value) {
        echo "<br>Veiculo: " . $value["nome"];
        echo "<br>Placa: " . $value["placa"];
        echo "<br><img src='" . $value["foto"] ."' style='width: 300px;'>";
        echo "<hr>";
    }

?>
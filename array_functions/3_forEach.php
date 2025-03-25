<?php
$veiculos = [
    'fusca', 'ferrari', 'uno'
];

foreach ($veiculos as $key => $value) {
    echo 'chave:'. $key . '<br>';
    echo 'veículo:'. $value . '<br>';
}

$estacionamento = [
    [
        'nome'=> 'fusca',
        'placa'=> 'abc123',
        'foto'=> ''
    ],
    [
        'nome'=> 'uno',
        'placa'=> 'yxz321',
        'foto'=> ''
    ]

];
echo '<h1>Estacionamento batida feliz</h1>';
foreach ($estacionamento as $key => $veiculo) {
  echo 'veiculo:' . $veiculo['nome'] . '<br>';  
  echo 'placa:' . $veiculo['placa'] . '<br>';  
  echo '<img src="'  . $veiculo['foto'] . '<br>';
  echo '<hr>';  
};
?>
<?php
    // este é um array associativo. Ele tem uma associação entre chave valor
    $carro = [
        'fab' => 'Hyundai',
        'modelo' => 'HB20',
        'cor' => 'Prata',
        'portas' => 4,
        'segurado' => true
    ];
    echo "Agora imprimirei os dados do carro citado no código<br>";
    echo "Abaixo tem o array impresso com a função print_r<br>";
    print_r($carro);
    echo "<br>";
    $modelo = $carro['modelo'];
    echo "O modelo do carro é $modelo";
    echo "<br>";
    echo "Agora vou imprimir cada um dos valores com um for<br>";
    foreach($carro as $item){
        echo $item;
        echo "<br>";
    }

?>
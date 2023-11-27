<?php

    $pessoa = [
        'nome' => 'Maria',
        'idade' => 20,
        'estado civil' => 'Casado'
    ];
    $nome = $pessoa['nome'];
    echo "Agora vamos verificar se $nome é maior de idade<br>";
    if($pessoa['idade'] >= 18){
        echo "Sim, esta pessoa é maior de idade";
    }
    else{
        echo "Não, esta pessoa não é maior de idade";
    }

?>
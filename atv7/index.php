<?php

    $bebida= 1;
    switch ($bebida) {

        case 1:
            $bebida = "Água";
            $preço=  2.00;
           
            break;

        case 2:
            $bebida= "Refrigerante";
            $preço= 4.00;
           
            break;

        case 3: 
            $bebida= "Suco";
            $preço= 3.00;
            
            break;

        default:
        echo "Opção inválidaa";
        exit
    }

    echo "<p> Voce escolheu: $bebida</p>";
    echo "Preço: " . number_format($preço, 2, ',',',');

?>
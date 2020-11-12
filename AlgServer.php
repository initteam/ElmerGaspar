<?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if ($num1 != ""){
        if($num2 != ""){

            echo "Operacoes ente os numeros $num1 e $num2 <br><br>";

            $soma = $num1 + $num2;
            $sub = $num1 - $num2;
            $divisao = $num1 / $num2; 
            $multi = $num1 * $num2;

            echo "Soma = $soma <br>";
            
            echo "Subtracao = $sub <br>";

            echo "Divisao = $divisao <br>";

            echo "Multiplicacao = $multi <br>";
        }
    }

?>
<?php

    /* 
    
    receber 4 numeros e:
    
    1. Dizer qual é o maior; **Feito
    2. Dizer qual é o menor; ???????????????
    3. Dizer se há numeros iguais; ?????????????
    4. Apresensentae a soma, subtração, divisao e multiplicação; **Feito
    5. Colocar em ordem descrescente;
    6. Colocar em ordem descrescente;

    
    */

?>

<?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    
    //1. Dizer qual é o maior;
    if($num1==$num2){
        if($num3==$num4){
            if($num1==$num3){
                
                echo "Todos os numeros inseridos sao iguais <br><br>";
            }
            else if($num1>$num3){
                echo "O Maior numero e $num1 <br><br>";
            }
            else{
                echo "O Maior numero e $num3 <br><br>";
            }
        }
        else if($num1 == $num3){
            echo "Existem 3 numeros iguais a: $num1 <br><br>";
            if($num1 > $num4){
                echo "O Maior numero e $num1 <br><br>";
            }
            else{
                echo "O Maior numero e $num4 <br><br>";
            }
        }
        else if($num1 == $num4){
            echo "Existem 3 numeros iguais a: $num1 <br><br>";
            if($num1 > $num3){
                echo "O Maior numero e $num1 <br><br>";
            }
            else{
                echo "O Maior numero e $num3 <br><br>";
            }
        }
        else if($num1 > $num3){
            echo "Existem 2 numeros iguais a: $num1 <br><br>";
            if($num1 > $num4){
                echo "O Maior numero e $num1 <br><br>";
            }
            else{
                echo "O Maior numero e $num4 <br><br>";
            }

        }
        else if($num3 > $num4){
            echo "O Maior numero e $num3 <br><br>";
        }
        else{
            echo "O Maior numero e $num4 <br><br>";
        }
    }
    else if($num2 == $num3){ 
        if($num2 == $num4){
                echo "Existem 3 numeros iguais a: $num2 <br><br>";
            if($num3 > $num1){
                echo "O Maior Numero e: $num3 <br><br>";
            }
            else{
                echo "O Maior Numero e: $num1 <br><br>"; 
            }
        }
        else if($num2 > $num1){
            if($num2 > $num4){
                echo "O Maior Numero e: $num2 <br><br>";
            }
            else{
                echo "O Maior Numero e: $num4 <br><br>"; 
            } 
        }
        else if($num1 > $num4){
            echo "O Maior Numero e: $num1 <br><br>"; 
        }
        else{
            echo "O Maior Numero e: $num4 <br><br>";
        }   
    }
    else if($num3 == $num4){
        if($num3 == $num1){
            echo "Existem 3 numeros iguais a: $num3 <br><br>";
        }
        else if($num3 > $num1){
            if($num3 > $num2){
                echo "O Maior Numero e: $num3 <br><br>"; 
            }
            else if($num2 > $num1){
                echo "O Maior Numero e: $num2 <br><br>"; 
            }
            else{
                echo "O Maior Numero e: $num1 <br><br>"; 
            }
        }
        else if($num2 > $num1){
            echo "O Maior Numero e: $num2 <br><br>"; 
        }
        else{
            echo "O Maior Numero e: $num1 <br><br>"; 
        }
    }
    else if($num1 == $num3){
        if($num1 > $num2){
            if($num1 > $num4){
                echo "O Maior Numero e: $num1 <br><br>"; 
            }
            else{
                echo "O Maior Numero e: $num4 <br><br>"; 
            }
        }
        else if($num4 > $num2){
            echo "O Maior Numero e: $num4 <br><br>"; 
        }
        else{
            echo "O Maior Numero e: $num2 <br><br>"; 
        }
        
    }
    else if($num1 == $num4){
        if($num1 > $num2){
            if($num1 > $num3){
                echo "O Maior Numero e: $num1 <br><br>"; 
            }
            else{
                echo "O Maior Numero e: $num3 <br><br>";
            }
        }
        else if($num3 > $num2){
            echo "O Maior Numero e: $num3 <br><br>";
        }
        else{
            echo "O Maior Numero e: $num2 <br><br>";
        }
    }
    else if($num2 == $num4){
        if($num2 > $num1){
            if($num2 > $num3){
                echo "O Maior Numero e: $num2 <br><br>";
            }
            else{
                echo "O Maior Numero e: $num3 <br><br>";
            }
        }
        else if($num3 > $num1){
            echo "O Maior Numero e: $num3 <br><br>";
        }
        else{
            echo "O Maior Numero e: $num1 <br><br>";
        }

    }
    else{
        if($num1 > $num2){
            if($num1 > $num3){
                if($num1 > $num4){
                    echo "O Maior Numero e: $num1 <br><br>";
                }
                else{
                    echo "O Maior Numero e: $num4 <br><br>";
                }
            }
            else if($num3 > $num4){
                echo "O Maior Numero e: $num3 <br><br>";
            }
            else{
                echo "O Maior Numero e: $num4 <br><br>";
            }
        }
        else if($num2 > $num3){
            if($num2 > $num4){
                echo "O Maior Numero e: $num2 <br><br>";
            }
            else{
                echo "O Maior Numero e: $num4 <br><br>";
            }

        }
        else if($num3 > $num4){
            echo "O Maior Numero e: $num3 <br><br>";
        }
        else{
            echo "O Maior Numero e: $num4 <br><br>";
        }

    }
    
    //4. Apresensentae a soma, subtração, divisao e multiplicação
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

   // 5. Colocar em ordem descrescente e em ordem crescente;
   

?>
<DOCTYPE hmtl>
<html>

    <head>
        <title>Algoritimo Primeiro</title>
    </head>

    <body>

        <form method=post \ action="AlgServer.php" >  

            <div>
                <label for="tag"> Algoritimo 1 </label>
            </div>

            <br>
            </br>

            <!-- Inserir os valores-->
            <div>
                <label for=lab1> Primeiro Numero </label>
                <input type="text" name="num1" value="" size=10/>
            </div> 

            
            <div>
                <label for=lab2> Segundo Numero </label>
                <input type="text" name="num2" value="" size=10/>
            </div>
            

            <br>
            </br>

            <!-- botao para fazer os calculos -->

            <input type=submit name=sub value=Calcular>
            <!--
            <div class="button">
                <button type=submit value=Calc> Calcular Operacoes </button>
            </div>

            -->

        </form>

    </body>

</html>
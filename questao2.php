<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Questão 2</title>
    </head>
    <body>
        <?php
        
        $sm=200;
        $bonus=0;
        $salfinal=0;
        
        if ($sm<=1000) {
            $bonus==($sm*40)/100;
            $salfinal==$bonus+$sm;
            echo "Você ganhou um aumento de: " .$bonus;
            echo "Salário final: " .$salfinal;
        } else { 
            $bonus==($sm*30)/100;
            $salfinal==$bonus+$sm;
            echo "Você ganhou um aumento de: " .$bonus;
            echo "Salário final: " .$salfinal;
        }
        
  
        ?>
    </body>
</html>


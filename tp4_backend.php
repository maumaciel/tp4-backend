<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 4 - Backend</title>
</head>
<body>
    <h1>TP 4 - Estructuras de control</h1>
    <?php 
       echo("1. Mostrar los números del 1 al 100.<br><br>");
       for ($i=1; $i < 101; $i++) { 
        echo ("$i ");
       }
       echo ("<br><hr><br>");
    ?>

    <?php 
       echo("2. Mostrar los números del 100 al 1.<br><br>");
       for ($i=100; $i > 0; $i--) { 
        echo ("$i ");
       }
       echo ("<br><hr><br>");
    ?>

    <?php 
       echo ("3. Mostrar los números pares del 1 al 100.<br><br>");
       for ($i=1; $i < 101 ; $i++) { 
        if (($i % 2) == 0) {
            echo ("$i ");
        }
       }
       echo ("<br><hr><br>");
    ?>

    <?php 
       echo ("4. Mostrar los números impares del 1 al 100.<br><br>");
       for ($i=1; $i < 101 ; $i++) { 
        if (($i % 2) != 0) {
            echo ("$i ");
        }
       }
       echo ("<br><hr><br>");
    ?>

    <?php 
        echo ("5. Mostrar la suma de los números de 1 a 20.<br><br>");

        $suma= 0;
        for ($i=1; $i < 21; $i++) { 
            $suma += $i;
        }
        echo ("La suma total es $suma");
        echo ("<br><hr><br>");
    ?>

    <?php 
     echo ("6. Mostrar la suma de números pares de 1 a 20. <br><br>");
    
     $suma= 0;
     for ($i=1; $i < 21; $i++) { 
        if (($i % 2) == 0) {
           $suma += $i;
        }
     }
     echo ("La suma de los numeros pares es $suma");
     echo ("<br><hr><br>");
     
    ?>

</body>
</html>
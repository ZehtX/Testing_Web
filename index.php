<!DOCTYPE html>
<html lang="ES-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP</title>
</head>
<body>
    <h2>Script PHP</h2>

    <?php 
        echo"instruccion echo `Hola Mundo´"."<br><br>";
    ?>
    
    <h3>Declaracion y uso de variables</h3>

    <p>Creacion de variable que contiene el texto "mialulas.com"<br>
        y concatenandola al texto "I Love" con la sentencia echo
    </p>

    <?php
        $txt="milaulas.com";
        echo "I Love ".$txt."!";
    ?>

    <h4>Suma de dos Numeros</h4>

    <p>
        Para sumar se requieren de dos variables<br>
        y la operacion se hace dentro del echo <br>
        para que imprima el resultado directo <br>
    </p>

    <?php
        $a = 10;
        $b = -5;

        echo "$a + $b = ".$a+$b;
    ?>

    <h3>Alcance de una variable</h3>
    <p>Global</p>
    <?php
   $x = 5; // alcance global

   function myTest() {
     // usar x dentro de esta función generará un error
     echo "<p>Variable x la función interna es: $x</p>";
   }
   myTest();

   echo "<p>Variable x la función exterior es: $x</p>";
    ?>

   <p>Variable static</p>

<?php
  function Test_1() {
    static $x = 0;
    echo $x."<br>";
    $x++;
  }

  Test_1();
  Test_1();
  Test_1();
?>

  <h2>Test de Echo</h2>
  <?php
  $txt1 = "Learn PHP";
  $txt2 = "milaulas.com";
  $x = 5;
  $y = 4;

  echo "<h2>" . $txt1 . "</h2>";
  echo "Study PHP at " . $txt2 . "<br>";
  echo $x + $y;
?>

</body>
</html>
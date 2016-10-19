<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba 01</title>
  </head>
  <body>
    <?php
    //clase
 include 'Animal.php';
   $Animales = new Animal();
   $Animales->setAnimales("cienpies");
   echo "<br> El nombre del animal es: " .$Animales->getAnimales();
   $Patas = new Animal();
   $Patas->setPatas("100");
   echo "<br> Numero de patas: " .$Patas->getPatas();


  $Animales = new Animal();
  $Animales->setAnimales("araña");
  echo "<br> El nombre del animal es: " .$Animales->getAnimales();
  $Patas = new Animal();
  echo "<br> Numero de patas: " .$Patas->getPatas();

     ?>
  </body>
</html>

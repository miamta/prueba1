<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio if</title>
  </head>
  <body>
    <?php
    Class Animal{
//declaracion de atributos

public $Animales="perro";
public $Patas="4";

//Getters y Setters

public function setAnimales($nuevoAnimales){
  $this->Animales=$nuevoAnimales;
}
public function getAnimales(){
  return $this->Animales;
}

public function setPatas($nuevoPatas){
  $this->Patas=$nuevoPatas;
}
public function getPatas(){
  return $this->Patas;
}











    }

?>

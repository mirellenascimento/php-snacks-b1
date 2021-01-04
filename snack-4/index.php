<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta -->

<?php

$array = [];
for ($i=0; count($array) < 15; $i++) {
  $number = rand();
  if (!in_array($number, $array)) {
      $array[] = $number;
  };
  echo $i + 1 . ": " . $array[$i] . "<br>";
};



?>

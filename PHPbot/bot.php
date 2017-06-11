<?php

$file = fopen("/db.txt", "r");

$l1 = "";
$input = "";
$firstboot = TRUE;


if ($firstboot == TRUE) {
  echo "Hola, soy freebot, puedes hacerme cualquier pregunta.";
  $firstboot = FALSE;
}


?>
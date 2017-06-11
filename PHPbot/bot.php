<?php
$file = fopen("db.txt", "r");
$linea =  fgets($file);
$input = $_GET['comando'];
$firstboot = TRUE;


if ($firstboot == TRUE) {
  echo nl2br("El Bot libre!");
  $firstboot = FALSE;
}

list($pregunta, $respuesta) = explode('@', $linea);

if ($input == $pregunta){
	echo "<br>Tú: $input<br> $respuesta";
	fclose($file);
}
elseif ($input != $pregunta) {

	while (!feof($file)) { 

        $linea = fgets($file); 
        list($pregunta, $respuesta) = explode('@', $linea);

        if ($input == $pregunta){
	echo "<br>Tú: $input<br> $respuesta";
	fclose($file);
	break;
 }
}

}

?>
<form action="index.php" method="get">
<input type="text" name="comando">
<input type="submit" value="Enviar">
</form> 

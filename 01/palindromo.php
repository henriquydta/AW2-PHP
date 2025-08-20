<?php 
  if(isset($_POST['frase']))
    $frase_original = $_POST['frase'];

  $frase = strtolower($frase_original);
  $frase = str_replace(' ', '', $frase);


/*
  $acentos = array(
    'á'=>'a', 'à'=>'a', 'ã'=>'a', 'â'=>'a', 'ä'=>'a',
    'é'=>'e', 'è'=>'e', 'ê'=>'e', 'ë'=>'e',
    'í'=>'i', 'ì'=>'i', 'î'=>'i', 'ï'=>'i',
    'ó'=>'o', 'ò'=>'o', 'õ'=>'o', 'ô'=>'o', 'ö'=>'o',
    'ú'=>'u', 'ù'=>'u', 'û'=>'u', 'ü'=>'u',
    'ç'=>'c', 'ñ'=>'n'
  );
*/
  
  $frase = strtr($frase, $acentos);
  
//  $frase = preg_replace('/[^a-z0-9]/', '', $frase);

  $frase_invertida = strrev($frase);

  if($frase == $frase_invertida)
    echo 'A frase "' . $frase_original . '" é um palíndromo';
  else
    echo 'A frase "' . $frase_original . '" não é um palíndromo';
?>

<?php 
if(isset($_POST['numero_min'])) {
  $numero_min = $_POST['numero_min'];
}
  
if(isset($_POST['numero_max'])) {
  $numero_max = $_POST['numero_max'];
}

echo 'Intervalo: ' . $numero_min . ' - ' . $numero_max . '<br>';

echo 'Números pares e múltiplos de 3: <br>';
for($i = $numero_min; $i <= $numero_max; $i++){
  if($i % 2 == 0 && $i % 3 == 0)
    echo $i . ' ';
}
?>

<pre>
<?php
print_r($_POST);
print_r($_FILES);

$destino = "../img/";
$nomeFigura = $_FILES["fotinha"]["name"];

if(move_uploaded_file( 
  $_FILES["fotinha"]["tmp_name"], 
  $destino . $nomeFigura
  )){
    echo "Sucesso";
  } else {
    echo "ruim";
  }
?>
</pre>
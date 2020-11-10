<?php
include("conexion.php");
include("consulta.php");
?>

<html >
  <head>
    <title>Dashboard Pestelli</title>
  </head>
 <h1>Totales cobrados por venta de unidades en Septiembres 2020</h1>
 <h4><?php echo $result['sum(cd.total)'] ?></h4>
</html>
<?php include("conexion_close.php"); ?>

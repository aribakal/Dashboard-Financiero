<?php
include("conexion.php");

$consulta = mysqli_query($conexion, "SELECT sum(cd.total) from tesoreria.cobranzas_distribucion cd
left join tesoreria.cobranzas_cabe cc on cc.idcobranza = cd.idcobranza
where cd.idagrupamiento = 1 and month(cc.fecha) = 9 and year(cc.fecha) = 2020");

$result = mysqli_fetch_array($consulta);
?>

<html >
  <head>
    <title>Dashboard Pestelli</title>
  </head>
 <h1>Totales cobrados por venta de unidades en Septiembres 2020</h1>
 <h4><?php echo $result['sum(cd.total)'] ?></h4>
</html>
<?php include("conexion_close.php"); ?>

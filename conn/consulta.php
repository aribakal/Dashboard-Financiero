<?php

/*$consulta = mysqli_query($conexion, "SELECT sum(cd.total) from tesoreria.cobranzas_distribucion cd
left join tesoreria.cobranzas_cabe cc on cc.idcobranza = cd.idcobranza
where cd.idagrupamiento = 1 and month(cc.fecha) = 9 and year(cc.fecha) = 2020");
*/

function getD_M_Y( $conexion , $idgrupo , $dia, $mes , $anio ) {

  $consulta = mysqli_query($conexion, "SELECT sum(cd.total) as total , count(*) cantidad from tesoreria.cobranzas_distribucion cd
  left join tesoreria.cobranzas_cabe cc on cc.idcobranza = cd.idcobranza
  where cd.idagrupamiento = $idgrupo and day(cc.fecha) = $dia and month(cc.fecha) = $mes and year(cc.fecha) = $anio");

  $result = mysqli_fetch_array($consulta);

  return array( "total" => $result["total"] , "cantidad" => $result["cantidad"] ) ;

}

function getM_Y( $conexion , $idgrupo , $mes , $anio ) {

  $consulta = mysqli_query($conexion, "SELECT sum(cd.total) as total , count(*) cantidad from tesoreria.cobranzas_distribucion cd
  left join tesoreria.cobranzas_cabe cc on cc.idcobranza = cd.idcobranza
  where cd.idagrupamiento = $idgrupo and month(cc.fecha) = $mes and year(cc.fecha) = $anio");

  $result = mysqli_fetch_array($consulta);

  return array( "total" => $result["total"] , "cantidad" => $result["cantidad"] ) ;

}

function getY( $conexion , $idgrupo , $anio ) {

  $consulta = mysqli_query($conexion, "SELECT sum(cd.total) as total , count(*) cantidad from tesoreria.cobranzas_distribucion cd
  left join tesoreria.cobranzas_cabe cc on cc.idcobranza = cd.idcobranza
  where cd.idagrupamiento = $idgrupo and year(cc.fecha) = $anio");

  $result = mysqli_fetch_array($consulta);

  return array( "total" => $result["total"] , "cantidad" => $result["cantidad"] ) ;

}



//array( "enero" => getDato( 1 , 1 , 2020 ) , "febrero" => getDato( 1 , 2 , 2020 ))

//$result = mysqli_fetch_array($consulta);

?>

<?php

$consulta = mysqli_query($conexion, "SELECT sum(cd.total) from tesoreria.cobranzas_distribucion cd
left join tesoreria.cobranzas_cabe cc on cc.idcobranza = cd.idcobranza
where cd.idagrupamiento = 1 and month(cc.fecha) = 9 and year(cc.fecha) = 2020");

$result = mysqli_fetch_array($consulta);

?>

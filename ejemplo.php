<?php

$basededatos = 'instituto' ;
$tabla = 'notas' ;
$conexion=mysqli_connect('localhost','root','', $basededatos )


?>

<html> 

	<link type="text/css" rel="stylesheet" href="style.css" /> 
	
<body>

 	<script>
		
	function mostrar_nota( nota )
	{
		alert("Nota correspondiente a la materia: " + nota);
		
	}
		
	</script>
 

<h1>Base de datos: <?php echo $basededatos?></h1>
<h2>Tabla: <?php echo $tabla?> </h2>
	<table>
		<tr id="fila1">
			<td>idnota</td>
			<td>nivel</td>
			<td>curso</td>
			<td>materia</td>
			<td>apellido</td>
			<td>nombre</td>
			<td>nota</td>		
		</tr>
		
		<?php 
		
		$cantidad = $total = $aprovados = $desaprovados = 0 ;
		
		
		$res=mysqli_query($conexion, "SELECT * from $tabla" );

		while($mostrar = mysqli_fetch_array($res)){
		
			if ( $mostrar["nota"] < 4){
				$color = "FB6342";
			}
			else if ( $mostrar["nota"] <= 7){
				$color = "F7FE55";	
			}
			else{
				$color = "78F341";
			}
			
			if ( $mostrar["nota"] < 6)
				$desaprovados = $desaprovados + 1 ;
			else
				$aprovados = $aprovados + 1 ;
				
				
		$cantidad++; 
			
		$total += $mostrar["nota"];
		
		$nota = $mostrar['nota'];
		
		?>
		
		
		<tr>
			<td><?php echo $mostrar['idnota'] ?></td>
			<td><?php echo $mostrar['nivel'] ?></td>
			<td><?php echo $mostrar['curso'] ?></td>
			<td onclick="mostrar_nota(<?php echo $mostrar['nota'] ?>)"><?php echo $mostrar['materia']?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['nombre']?></td>
			<td id="nota" style="background-color:<?php echo $color?>;"><?php echo $mostrar["nota"] ?></td>
			
		</tr>
		
		<?php
		
		} 
		
		$promedio = number_format( $total / $cantidad , 2 , "." , "" );
		
		?>
		
		<tr>
			<td colspan=6 style="text-align:right;font-style:italic"><b>Promedio</b></td>
			<td id="res_promedio" style="text-align:center"><?php echo $promedio ?></td>
		</tr>
		<tr>
			<td colspan=6 style="text-align:right;font-style:italic"><b>Aprobados</b></td>
			<td style="text-align:center"><?php echo $aprovados ?></td>
		</tr>
		<tr>
			<td colspan=6 style="text-align:right;font-style:italic"><b>Desaprobados</b></td>
			<td style="text-align:center"><?php echo $desaprovados ?></td>
		</tr>
		<tr>
			<td colspan=7 style="text-align:right">Aprueba con (6)</td>
		</tr>
	</table>
</body>
</html> 




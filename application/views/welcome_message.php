<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CONSULTAS CON CODIGNITER</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container">
	<form action="http://localhost/pw/CodeIgniter/index.php/welcome/insert_to_db" method="post">
		<label>Correlativo: </label>
		<input type="num" name="id" />
		<label>Nombre</label>
		<input type="text" name="nombre" />
		<label>Apellido</label>
		<input type="text" name="apellido" />
		<label>Tipo de Pago a realizar: </label>
		<input type="text" name="tipopago" />
		<label>Mes a Pagar: </label>
		<input type="text" name="mespago" />
		<label>Total a Pagar: </label>
		<input type="text" name="totalpago" />
		
		<input type='submit'>
	</form>


	<h1>REGISTROS ENCONTRADOS  !</h1>

	<div id="body">
	<table  class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Tipo de Pago</th>
			<th>Mes</th>
			<th>Total Pagado</th>
		</tr>



<?php
        $consulta = $this->db->get('clientes');

        foreach ($consulta ->result() as $row){
			echo "<tr>";
				echo "<td>". $row->id . "</td>";
				echo "<td>". $row->Nombre . "</td>";
				echo "<td>". $row->Apellido . "</td>";
				echo "<td>". $row->TipoPago . "</td>";
				echo "<td>". $row->MesPago . "</td>";
				echo "<td>". $row->TotalPago . "</td>";
			echo "</tr>";
		}

?>

</table>
</div>

</body>
</html>
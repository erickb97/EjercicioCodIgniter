<?php
class Site_model extends CI_Model{
    			
	function insert_into_db(){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$tipopago = $_POST['tipopago'];
		$mespago = $_POST['mespago'];
		$totalpago = $_POST['totalpago'];

		$this->db->query("INSERT INTO clientes VALUES('$id','$nombre','$apellido', '$tipopago', '$mespago', '$totalpago')");
		echo'<script type="text/javascript">  alert("Ingresado Exitosamente."); window.location.href="http://localhost/pw/CodeIgniter/index.php";   </script>';
	}
}

?>
<?php 
include 'db.php';
$pais = $_POST['pais'];

	$tabla="SELECT  id_estado,
					estadonombre,
	 				id_p  
	 from estado 
	 where id_p = '$pais'";

	$resul=mysqli_query($conectar,$tabla);

	$cadenae="<label for='estado'>Estado</label> 
			<select name='Testado' id='Testado' type='text' class='form-control'>";
			
	while ($ver=mysqli_fetch_row($resul)) {
		$cadenae=$cadenae.'<option value='.$ver[2].'>'.utf8_encode($ver[1]).'</option>';
	}mysqli_free_result($resul);

	echo  $cadenae."</select>";
	

?>
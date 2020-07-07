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
			<select name='estado' id='estado' type='text' class='form-control'>";
			
	while ($ver=mysqli_fetch_assoc($resul)) {
		$cadenae=$cadenae.'<option value='. $ver["id_estado"].'>'.utf8_encode($ver["estadonombre"]).'</option>';
	}mysqli_free_result($resul);

	echo  $cadenae."</select>";
	

?>
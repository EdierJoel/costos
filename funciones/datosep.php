<?php 
include 'db.php';
$pais = $_POST['pais'];

	$tabla="SELECT  id_estado,
					estadonombre,
	 				id_p  
	 from estado 
	 where id_p = '$pais'";

	$resul=mysqli_query($conectar,$tabla);

	$cadenae="<label for='provedores'>Estado</label>
			<select name='estadoe' id='estadoe' type='text' class='form-control'>";
			
	while ($ver=mysqli_fetch_array($resul)) {
		$cadenae=$cadenae.'<option value='.$ver[0].'>'.$ver[1].'</option>';
	}

	echo  $cadenae."</select>";
	

?>
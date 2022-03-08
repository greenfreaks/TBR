<?php
	$query_perfil = "SELECT * FROM perfil_academico";
	$result_perfil = mysqli_query($conex, $query_perfil);

	while($fila = mysqli_fetch_array($result_perfil)){
		echo "<option value = '".$fila['id_perfilAcademico']."'>".$fila['nombre_perfilAcademico']."</option>";
	}
?>
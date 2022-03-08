<?php
	$query_areas_conocimiento = "SELECT * FROM areas_conocimiento";
	$result_areas_conocimiento = mysqli_query($conex, $query_areas_conocimiento);

	while($fila = mysqli_fetch_array($result_areas_conocimiento)){
		echo "<option value = '".$fila['nombre_area_conocimeinto']."'>".$fila['nombre_area_conocimiento']."</option>";
	}
?>
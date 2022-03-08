<!DOCTYPE html>
<html lang="es">
<body>
	<?php
		$peticionAjax=false;
		require_once "./controladores/vistasControlador.php";
		$IV = new vistasControlador();

		$vistas=$IV->obtener_vistas_controlador();

		if($vistas=="home" || $vistas=="404"){
			require_once "./vistas/contenidos/".$vistas."-view.php";

		}else{
	?>
		<!-- Page content -->
			<?php 
				include  $vistas;
				include "./vistas/inc/footer.php";
			?>
	<?php
		}
		include "./vistas/inc/scripts.php"; 
	?>
</body>
</html>
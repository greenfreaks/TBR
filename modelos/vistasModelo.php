<?php
	
	class vistasModelo{

		/*--------- Modelo obtener vistas ---------*/
		protected static function obtener_vistas_modelo($vistas){
			$listaBlanca=["home", "academia", "efidt", "gobierno", "industria", "pact", "phi3", "privacidad", "phi3-info-form", "phi3-info-form-fb", "phi3-info-list", "phi3-pdf"];
			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/contenidos/".$vistas."-view.php")){
					$contenido="./vistas/contenidos/".$vistas."-view.php";
				}else{
					$contenido="404";
				}
			}elseif($vistas=="home" || $vistas=="index"){
				$contenido="home";
			}else{
				$contenido="404";
			}
			return $contenido;
		}
	}
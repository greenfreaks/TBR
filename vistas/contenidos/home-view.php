<head>
<?php include "./vistas/inc/head.php";?>
    <!-- Home CSS -->
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/home.css">
</head>
<?php include "./vistas/inc/navbar1.php";?>

<div id="main-slider" class="slider slider1">
        <ul class="slides">
            <li class="">
                <a href="#"><img src="<?php echo SERVERURL?>vistas/assets/img/inicio/slides/BannerInicio01-GIF-2000x600.gif"></a>
                <!--<div class="caption center blanco-transparente round-corner">
                    <div class="row center">
                        <div class="col s12">
                            <h3 class="texto-azul-tbr">Convocatoria EFIDT 2019</h3>
                            <h5 class="black-text negrita">Estamos listos para apoyarte.</h5>
                            <a href="modulos/EFIDT2019/" class="waves-effect waves-light btn cta"><i class="material-icons left">contact_support</i>Leer más</a>
                        </div>
                    </div>

                </div>-->
            </li>
            <li class="">
                <a href="sections/phi3.html" target="_blank"><img src="<?php echo SERVERURL?>vistas/assets/img/inicio/slides/BannerIcono_PHI3_GIF.gif" alt=""></a>
                <!--<div class="caption center blanco-transparente round-corner">
                    <div class="row center">
                        <div class="col s12">
                            <h3 class="texto-azul-tbr">¿No sabes por dónde empezar?</h3>
                            <h5 class="black-text negrita">Toma nuestro test y descubre tu objetivo.</h5>
                            <a href="modulos/explora_como/test.html" class="waves-effect waves-light btn cta"><i class="material-icons left">contact_support</i>Comenzar test</a>
                        </div>
                    </div>

                </div>-->
            </li>
            <li>
                <a href="sections/pact.html" target="_blank"><img src="<?php echo SERVERURL?>vistas/assets/img/inicio/slides/BannerInicio03-PACT-2000x600.jpg"></a>
                <!-- random image -->
                <!--<div class="caption left-align texto-azul-tbr blanco-transparente round-corner">
                    <h3>Conoce a Empresa X</h3>
                    <h5 class="black-text negrita">De productor a laboratorista, conoce su historia y descubre tu camino.</h5>
                    <a class="waves-effect waves-light btn cta center"><i class="material-icons left">explore</i>Descubre más</a>
                </div>-->
            </li>
            <li>
                <a href="#"><img src="<?php echo SERVERURL?>vistas/assets/img/inicio/slides/BannerInicio04-Inventario-2000X600.jpg"></a>
                <!-- random image -->
                <!--<div class="caption right-align texto-azul-tbr blanco-transparente round-corner">
                    <h3>Recursos para innovadores</h3>
                    <h5 class="black-text negrita">Conoce todas las convocatorias abiertas en nuestro blog.</h5>
                    <a class="waves-effect waves-light btn cta"><i class="material-icons left">dashboard</i>Recursos</a>
                </div>-->
            </li>
        </ul>
    </div>

	<div class="flexslider">
		<ul class="slides">
			<li>
				<a href="#"><img src="<?php echo SERVERURL?>vistas/assets/img/inicio/slides/BannerInicio01-GIF-2000x600.gif"></a>
				<section class="flex-caption">
					<p></p>
				</section>
			</li>
			<li>
				<a href="sections/phi3.html" target="_blank"><img src="<?php echo SERVERURL?>vistas/assets/img/inicio/slides/BannerIcono_PHI3_GIF.gif" alt=""></a>
				<section class="flex-caption">
					<p></p>
				</section>
			</li>
			<li>
				<a href="sections/pact.html" target="_blank"><img src="<?php echo SERVERURL?>vistas/assets/img/inicio/slides/BannerInicio03-PACT-2000x600.jpg"></a>
				<section class="flex-caption">
					<p></p>
				</section>
			</li>
            <li>
                <a href="#"><img src="<?php echo SERVERURL?>vistas/assets/img/inicio/slides/BannerInicio04-Inventario-2000X600.jpg"></a>
                <section class="flex-caption">
                    <p></p>
                </section>
            </li>
		</ul>
	</div>

    <div class="content">

	<div id="nosotros"></div>

    <div class="tit_proposito">
        <h5 class="bold">Acerca de nosotros</h5>
        <hr style="width: 35%; height: 2px; background: var(--blue-tbr); border-radius: 10px;" class="left">
    </div>

    <section class="proposito center">
        <div class="proposito_I">
            <h5 class="left txt-blue-tbr bold">Nuestro propósito es convertir el conocimiento de personas y organizaciones en innovaciones</h5>
            <p class="left">Somos una organización que impulsa la transformación del conocimiento generado desde las ciencias, las tecnologías y las humanidades en innovaciones para mejorar la calidad de vida de la sociedad y las condiciones de nuestro entorno económico y ambiental. <br> <br> <br>
            Nuestra cultura de trabajo se basa en la honestidad y colaboración con empresas, gobiernos, instituciones académicas y personas dispuestas a adoptar la innovación como estrategia de crecimiento.</p>
        </div>

        <div class="proposito_II">
                <img src="<?php echo SERVERURL?>vistas/assets/img/inicio/Esquema_Nosotros_PNG.png">
        </div>
    </section>

    <section class="capacidades center">
        <div class="capacidades_I">
            <h5 class="txt-blue-tbr bold">Nuestras capacidades</h5>
            <p class="">Contamos con especialistas y alianzas con las que apoyamos a empresas, academia y gobierno, en todos los procesos necesarios para innovar, desde la estrategia hasta la operación, en los ámbitos científico y tecnológico, financiero y fiscal, administrativo y legal, marketing y comercial.</p>
        </div>

        <div class="capacidades_II video">
            <video class="capacidades_video" loop preload="none" muted="muted" poster="<?php echo SERVERURL?>vistas/assets/img/inicio/2Secuenciam2.png">
                <source src="<?php echo SERVERURL?>vistas/assets/img/inicio/diagrama_capacidades.mp4" type="video/mp4">
                <source src="<?php echo SERVERURL?>vistas/assets/img/inicio/diagrama_capacidades.mp4" type="video/mp4">
                            Su navegador no tiene soporte para la etiqueta de video.
            </video>
        </div>
    </section>

    <div id="servicios"></div>

    <div class="tit_servicios">
        <h5 class="bold">Nuestra propuesta de valor</h5>
        <hr style="width: 35%; height: 2px; background: var(--blue-tbr); border-radius: 10px;" class="left">
    </div>

    <section class="servicios">
        <div class="academia center">
            <img src="<?php echo SERVERURL?>vistas/assets/img/inicio/Academia.png">
            <h5 class="bold txt-blue-tbr">Academia</h5>
            <p class="justify">Ayudamos a estudiantes de posgrado e investigadores a colaborar con la industria, para crear oportunidades de desarrollo profesional, aprendizaje y atracción de recursos para investigación y desarrollo.</p>
            <div class = "serv_btn"> 
                <a href="<?php echo SERVERURL?>academia/" class="btn-blue-corner">Saber más</a>
            </div>
        </div>

        <div class="industria center">
            <img src="<?php echo SERVERURL?>vistas/assets/img/inicio/Industria.png">
            <h5 class="bold txt-blue-tbr">Industria</h5>
            <p class="justify">Ayudamos a las empresas a mejorar sus procesos de innovación, para aprovechar oportunidades de negocio mediante nuevos productos, servicios, tecnologías y los recursos necesarios para su desarrollo.</p>
            <div class = "serv_btn"> 
                <a href="<?php echo SERVERURL?>industria/" class="btn-blue-corner">Saber más</a>
            </div>
        </div>

        <div class="gobierno center">
            <img src="<?php echo SERVERURL?>vistas/assets/img/inicio/Gobierno.png">
            <h5 class="bold txt-blue-tbr">Gobierno</h5>
            <p class="justify">Ayudamos a instituciones de gobierno a desarrollar planes, programas y proyectos, para cumplir con sus objetivos de beneficiar a la sociedad, la economía y el ambiente a través de la innovación.</p>
            <div class = "serv_btn"> 
                <a href="<?php echo SERVERURL?>gobierno/" class="btn-blue-corner">Saber más</a> 
            </div>
        </div>

    </section>
    </div>
<?php include "./vistas/php/conexion.php" ;?>
<head>
    <?php include "./vistas/inc/head.php";?>
    <!-- PHI3 User Form CSS -->
    <link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/phi3_user_form.css">
</head>
<?php include "./vistas/inc/navbar2.php";?>
    <div class="content">
        <!-- CARD PHI 3 -->
        <div class="card yellow darken-3">
            <div class="card-content white-text">
                <span class="card-title">Información del PHI3.</span>
                <p>Conoce el Programa de Habilidades en Investigación e Innovación en la Industria (PHI3).</p>
            </div>
        </div>
        <div class="divider"></div>
        <form action="" class="col s12" method="POST">
            <h6 class="yellow-text text-darken-4 bold">1. Nombre(s).</h6>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Nombre..." id="name" type="text" class="validate" name="name" required>
                    <label for="name">Requerido</label>
                </div>
            </div>

            <h6 class="yellow-text text-darken-4 bold">2. Apellido paterno.</h6>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Apellido paterno..." id="ap_paterno" type="text" class="validate" name="ap_paterno" required>
                    <label for="ap_paterno">Requerido</label>
                </div>
            </div>

            <h6 class="yellow-text text-darken-4 bold">3. Apellido materno.</h6>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Apellido materno..." id="ap_materno" type="text" class="validate" name="ap_materno" required>
                    <label for="ap_materno">Requerido</label>
                </div>
            </div>

            <h6 class="yellow-text text-darken-4 bold">4. Institución de adscripción.</h6>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Institución..." id="institucion" type="text" class="validate" name="institucion" required>
                    <label for="institucion">Requerido</label>
                </div>
            </div>

            <h6  class="yellow-text text-darken-4 bold">5. Perfil</h6>
            <div class="input-field col s12">
                <select name="perfil" required>
                    <option value="" disabled selected>Elige el perfil que te corresponde</option>
                    <?php include "./vistas/php/fill/perfil_academico.php";?>
                </select>
                <label>Requerido</label>
            </div> <br>

            <h6 class="yellow-text text-darken-4 bold">6. Email.</h6>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Email..." id="email" type="email" class="validate email" name="email" required>
                    <label for="email">Requerido</label>
                </div>
            </div>

            <h6 class="yellow-text text-darken-4 bold">7. Número celular a 10 dígitos.</h6>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Teléfono..." id="tel" type="tel" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" minlength="10" maxlength="10" class="validate tel" name="tel" required>
                    <label for="tel">Requerido</label>
                </div>
            </div>

            <h6  class="yellow-text text-darken-4 bold">8. Línea de investigación o experiencia</h6>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Áreas..." id="linea_investigacion" type="text" class="validate linea_investigacion" name="linea_investigacion" required>
                    <label for="linea_investigacion">Requerido</label>
                </div>
            </div>

            <h6 class="yellow-text text-darken-4 bold">9. ¿Cómo te enteraste del programa?</h6>
            <p>
                <label>
                    <input type="radio" name="find_phi3" value="Página de Facebook" class="with-gap"/>
                    <span>Página de Facebook</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="radio" name="find_phi3" value="Publicación en Grupo" class="with-gap"/>
                    <span>Publicación en Grupo</span>
                </label>
            </p> <br> <br> 
    
            <div class="divider"></div>
            <p>
                <label>
                    <input type="checkbox" required/>
                    <span>He leído y acepto los términos del <a href="<?php echo SERVERURL;?>privacidad/" target="_blank">Aviso de privacidad</a></span>
                </label>
            </p> <br>
            <input type="submit" class="btn submit red darken-3 center" name="submit" value="Enviar">
            <?php include "./vistas/php/send_info_phi3.php";?>
        </form>
    </div>
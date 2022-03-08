<?php
require_once ("./libraries/PHPMailer/clsMail.php");

if(isset($_POST['submit'])){
    /* ------- Get Data from form -------- */
    $name = (trim($_POST['name']));
    $ap_paterno = (trim($_POST['ap_paterno']));
    $ap_materno = (trim($_POST['ap_materno']));    
    $institucion = (trim($_POST['institucion']));
    $perfil = ($_POST['perfil']);
    $email = (trim($_POST['email']));
    $tel = (trim($_POST['tel']) );
    $linea_investigacion = ($_POST['linea_investigacion']);
    $find_phi3 = ($_POST['find_phi3']);

    /* ------- Existing mail verification -------- */
    $queryUserExist = "SELECT * FROM info_form_phi3 WHERE email = '$email'";
    $verifyUserExist = mysqli_query($conex, $queryUserExist);
    $resultVerifyUser = mysqli_num_rows($verifyUserExist);

    /* ------- Preparing send mail to admin function -------- */
    $sendAdminMail = new clsMail();
    $bodyHTMLAdmin = "
    <h1>Alguien ha solicitado información sobre el PHI3</h1>
    <p>Nombre del / la solicitante: <b> {$name} {$ap_paterno} {$ap_materno}</b> </p>
    <p>Institución de adscripción: <b> {$institucion} </b> </p>
    <p>Email: <b> {$email} </b> </p>
    <p>Número celular: <b> {$tel} </b> </p>
    <p>Línea de investigación o experiencia: <b> {$linea_investigacion} </b> </p>
    ";

    /* ------- Preparing send mail to User function -------- */
    $sendUserMail = new clsMail();
    $bodyHTMLUser ="
    <style>
    .mailBtnRed{
        padding: 15px 25px;
        font-size: 15px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #DE4D4C;
        border-radius: 5px;
    }
    
    .mailBtnRed:hover {
        background-color: #991a1a;
    }
    </style>
    <h1>¡Hola " .$name. "!</h1>

    <p><br>¿Estas listo para incursionar en la industria?</br>.</p>

    <p>Soy Alejandro Ruiz y coordino el <b>Programa de Habilidades en Investigación e Innovación en la Industria PHI³.</b></p>

    <p>Un Programa donde lograras tener acercamientos con la industria que amplíen tus experiencias y oportunidades de desarrollo profesional, 
    contratos de servicios científicos y tecnológicos o alianzas para desarrollar o comercializar tecnologías.</p>

    <p>El primer módulo está a punto de abrirse este mes y aprenderás los siguientes temas:</p>

    <p><b>Módulo 1: Bases de la investigación y desarrollo en la industria.</b></p>

    <p>El objetivo es comprender los fundamentos de la investigación aplicada en la industria para analizar 
    empresas de base tecnológica y su capacidad de innovación.</p>

    <p><b>Temas:</b></p>
    <ol>
        <li>Estrategias de investigación y desarrollo en la industria.</li>
        <li>Fundamentos de innovación tecnológica.</li>
        <li>Análisis tecnoético de la ciencia, la tecnología y la innovación.</li>
        <li>Vigilancia tecnológica e inteligencia competitiva.</li>
    </ol>

    <p><b>¡Tenemos cupo limitado!</b></p>
    <p>Y ya quedan pocos lugares.</p>
    <p>¡No te quedes fuera, recuerda que es una gran oportunidad para crecer profesionalmente!</p>

    <p><b>Inversión</b> <br>
    El monto total por invertir para el primer módulo es de <b>$990 pesos*</b>, pero, si pagas el segundo módulo, te hacemos un <b>-20% de descuento.</b>
    </p>

    <p><b>¿Te interesa?</b> <br>
    Si estás interesado responde este correo para poder tener una asesoría personal contigo a través del medio que mejor te acomode.<br>
    Es un gusto saludarte ¡¡Por favor cuídate mucho y seguimos en contacto!!
    </p>


    <a target='_blank' class='mailBtnRed' href = 'https://techbusiness.com.mx/vistas/download/PHI3.pdf'>Descargar</a>
    ";

    if($resultVerifyUser == 1){?>
        <script>
            Swal.fire({
                icon: 'warning',
                showConfirmButton: true,
                showCloseButton: true,
                title: '¡Cuenta existente!',
                text: 'Anteriormente ya habías solicitado información sobre el PHI3'
            });
        </script>
    <?php
    }else{
        $query_form = "INSERT INTO info_form_phi3 
        (nombre,
        ap_paterno,
        ap_materno,
        institucion_adscripcion,
        fk_perfilAcademico,
        email, 
        tel, 
        linea_investigacion, 
        find_phi3) 
        VALUES 
        ('$name',
        '$ap_paterno',
        '$ap_materno', 
        '$institucion', 
        '$perfil', 
        '$email', 
        '$tel', 
        '$linea_investigacion', 
        '$find_phi3')";
        
        // $send_form = mysqli_query($conex, $query_form);

            /*------- Sending to Admin New User Request Notification  --------*/
        $userSent = $sendUserMail->metEnviarUser(
            "Solicitud de información del PHI3", 
            "Programa de Habilidades de Investigación en Innovación en la Industria (PHI3)",
            "Formulario PHI3",
            $email,
            $bodyHTMLUser);

        if($userSent){
            $send_form = mysqli_query($conex, $query_form);
            /*------- Sending to Admin New User Request Notification  --------*/
            $adminSent = $sendAdminMail->metEnviarAdmin(
                "Solicitud de información del PHI3", 
                "Alguien ha solicitado información sobre el ¨PHI3",
                "Formulario PHI3",
                "contacto@techbusiness.com.mx",
                $bodyHTMLAdmin);

            if($send_form && $adminSent){
                ?>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: '¡Datos Enviados correctamente!',
                            text: 'Da clic en el botón para obtener tu archivo, de igual forma te hemos enviado un correo en el que puedes descargarlo. NO OLVIDES REVISAR TU CARPETA DE SPAM',
                            allowOutsideClick: false,
                            footer: '<a target="_blank" class="btn red darken-3" href="<?php echo SERVERURL?>vistas/download/PHI3.pdf">Descargar</a> <a class="btn blue darken-3" href="<?php echo SERVERURL?>phi3/">Ir a la página de TBR</a>'
                        });
                    </script>
                <?php
                 }
        }else{?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        showConfirmButton: false,
                        title: '¡Correo no existente!',
                        text: 'Sin una dirección de correo válida no es posible enviarte más información sobre el PHI3',
                        showCloseButton: true
                    });
                </script>
        <?php
            }
    }
      
}


/* ---------------- Formulario desde Facebook-------------------------- */

if(isset($_POST['submit_fb'])){
    /* ------- Get Data from form -------- */
    $name = (trim($_POST['name']));
    $ap_paterno = (trim($_POST['ap_paterno']));
    $ap_materno = (trim($_POST['ap_materno']));    
    $institucion = (trim($_POST['institucion']));
    $perfil = ($_POST['perfil']);
    $email = (trim($_POST['email']));
    $tel = (trim($_POST['tel']) );
    $linea_investigacion = ($_POST['linea_investigacion']);
    $find_phi3 = ($_POST['find_phi3']);

    /* ------- Existing mail verification -------- */
    $queryUserExist = "SELECT * FROM info_form_phi3 WHERE email = '$email'";
    $verifyUserExist = mysqli_query($conex, $queryUserExist);
    $resultVerifyUser = mysqli_num_rows($verifyUserExist);

    /* ------- Preparing send mail to admin function -------- */
    $sendAdminMail = new clsMail();
    $bodyHTMLAdmin = "
    <h1>Alguien ha solicitado información sobre el PHI3</h1>
    <p>Nombre del / la solicitante: <b> {$name} {$ap_paterno} {$ap_materno}</b> </p>
    <p>Institución de adscripción: <b> {$institucion} </b> </p>
    <p>Email: <b> {$email} </b> </p>
    <p>Número celular: <b> {$tel} </b> </p>
    <p>Línea de investigación o experiencia: <b> {$linea_investigacion} </b> </p>
    ";

    /* ------- Preparing send mail to User function -------- */
    $sendUserMail = new clsMail();
    $bodyHTMLUser ="
    <style>
    .mailBtnRed{
        padding: 15px 25px;
        font-size: 15px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #DE4D4C;
        border-radius: 5px;
    }
    
    .mailBtnRed:hover {
        background-color: #991a1a;
    }
    </style>
    <h1>¡Hola " .$name. "!</h1>

    <p><br>¿Estas listo para incursionar en la industria?</br></p>

    <p>Soy Alejandro Ruiz y coordino el <b>Programa de Habilidades en Investigación e Innovación en la Industria PHI³.</b></p>

    <p>Un Programa donde lograras tener acercamientos con la industria que amplíen tus experiencias y oportunidades de desarrollo profesional, 
    contratos de servicios científicos y tecnológicos o alianzas para desarrollar o comercializar tecnologías.</p>

    <p>El primer módulo está a punto de abrirse este mes y aprenderás los siguientes temas:</p>

    <p><b>Módulo 1: Bases de la investigación y desarrollo en la industria.</b></p>

    <p>El objetivo es comprender los fundamentos de la investigación aplicada en la industria para analizar 
    empresas de base tecnológica y su capacidad de innovación.</p>

    <p><b>Temas:</b></p>
    <ol>
        <li>Estrategias de investigación y desarrollo en la industria.</li>
        <li>Fundamentos de innovación tecnológica.</li>
        <li>Análisis tecnoético de la ciencia, la tecnología y la innovación.</li>
        <li>Vigilancia tecnológica e inteligencia competitiva.</li>
    </ol>

    <p><b>¡Tenemos cupo limitado!</b></p>
    <p>Y ya quedan pocos lugares.</p>
    <p>¡No te quedes fuera, recuerda que es una gran oportunidad para crecer profesionalmente!</p>

    <p><b>Inversión</b> <br>
    El monto total por invertir para el primer módulo es de <b>$990 pesos*</b>, pero, si pagas el segundo módulo, te hacemos un <b>-20% de descuento.</b>
    </p>

    <p><b>¿Te interesa?</b> <br>
    Si estás interesado responde este correo para poder tener una asesoría personal contigo a través del medio que mejor te acomode.<br>
    Es un gusto saludarte ¡¡Por favor cuídate mucho y seguimos en contacto!!
    </p>


    <a target='_blank' class='mailBtnRed' href = 'https://techbusiness.com.mx/vistas/download/PHI3.pdf'>Descargar</a>
    ";

    if($resultVerifyUser == 1){?>
        <script>
            Swal.fire({
                icon: 'warning',
                showConfirmButton: true,
                showCloseButton: true,
                title: '¡Cuenta existente!',
                text: 'Anteriormente ya habías solicitado información sobre el PHI3'
            });
        </script>
    <?php
    }else{
        $query_form = "INSERT INTO info_form_phi3 
        (nombre,
        ap_paterno,
        ap_materno,
        institucion_adscripcion,
        fk_perfilAcademico,
        email, 
        tel, 
        linea_investigacion, 
        find_phi3) 
        VALUES 
        ('$name',
        '$ap_paterno',
        '$ap_materno', 
        '$institucion', 
        '$perfil', 
        '$email', 
        '$tel', 
        '$linea_investigacion', 
        '$find_phi3')";
        
        // $send_form = mysqli_query($conex, $query_form);

            /*------- Sending to Admin New User Request Notification  --------*/
        $userSent = $sendUserMail->metEnviarUser(
            "Solicitud de información del PHI3", 
            "Programa de Habilidades de Investigación en Innovación en la Industria (PHI3)",
            "Formulario PHI3",
            $email,
            $bodyHTMLUser);

        if($userSent){
            $send_form = mysqli_query($conex, $query_form);
            /*------- Sending to Admin New User Request Notification  --------*/
            $adminSent = $sendAdminMail->metEnviarAdmin(
                "Solicitud de información del PHI3", 
                "Alguien ha solicitado información sobre el ¨PHI3",
                "Formulario PHI3",
                "contacto@techbusiness.com.mx",
                $bodyHTMLAdmin);

            if($send_form && $adminSent){
                ?>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: '¡Datos Enviados correctamente!',
                            text: 'Da clic en el botón para obtener tu archivo, de igual forma te hemos enviado un correo en el que puedes descargarlo. NO OLVIDES REVISAR TU CARPETA DE SPAM',
                            allowOutsideClick: false,
                            footer: '<a target="_blank" class="btn red darken-3" href="<?php echo SERVERURL?>vistas/download/PHI3.pdf">Descargar</a> <a class="btn blue darken-3" href="https://www.facebook.com/">Finalizar</a>'
                        });
                    </script>
                <?php
                 }
        }else{?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        showConfirmButton: false,
                        title: '¡Correo no existente!',
                        text: 'Sin una dirección de correo válida no es posible enviarte más información sobre el PHI3',
                        allowOutsideClick: false,
                        footer: '<a class="btn red darken-3" href="<?php echo SERVERURL?>/vistas/phi3-info-form/">Intentar de nuevo</a> <a class="btn blue darken-3" href="https://www.facebook.com/">Finalizar</a>'
                    });
                </script>
        <?php
            }
    }
      
}
?>
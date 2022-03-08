<?php include "./modelos/phi3FormModel2.php";?>
<head>
    <?php include "./vistas/inc/head.php";?>
    <!-- PHI3 User Form CSS -->
    <link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/phi3_user_form.css">
</head>
<?php include "./vistas/inc/navbar2.php";?>
<div class="content">
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>ID del solicitante</th>
                    <th>Institución de adscripción</th>
                    <th>Perfil académico</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Línea de investigación o experiencia</th>
                    <th>¿Cómo se enteró del PHI3?</th>
                    <th>Invitaciones de TBR</th>
                    <th>Fecha de solicitud</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $obj= new infoForm();
                    if($obj->conectar()){
                        $info = $obj->getSentInfo();
                        foreach($info as $inf){?>
                            <tr>
                                <td><?php echo $inf['nombre']?></td>
                                <td><?php echo $inf['id_user']?></td>
                                <td><?php echo $inf['institucion_adscripcion']?></td>
                                <td><?php echo $inf['nombre_perfilAcademico']?></td>
                                <td><?php echo $inf['email']?></td>
                                <td><?php echo $inf['tel']?></td>
                                <td><?php echo $inf['linea_investigacion']?></td>
                                <td><?php echo $inf['find_phi3']?></td>
                                <td><?php echo $inf['permitir_invitaciones_tbr']?></td>
                                <td><?php echo $inf['createdAt']?></td>


                            </tr>
                        <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
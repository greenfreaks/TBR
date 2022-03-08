<?php
class phi3FormModel extends mainModel{
    private $conexion;

    public $nombre;
    public $email;
    public $tel;
    public $grado;
    public $areas_interes;
    public $find_phi3;
    public $permitir_invitaciones_tbr;

    public function __construct(){
        try{
            $this->conexion = mainModel::conectar();
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    /*--------Solicitar Información---------- */
    public function userRequest(phi3FormModel $data){
        try{
            $sql= "INSERT INTO form_phi3(nombre, email, tel, fk_grado, areas_interes, find_phi3, permitir_invitaciones_tbr)
            VALUES(?, ?, ?, ?, ?, ?, ?)";
            $this->conexion->prepare($sql)->execute(
                array(
                    $data->nombre,
                    $data->email,
                    $data->tel,
                    $data->grado,
                    $data->areas_interes,
                    $data->find_phi3,
                    $data->permitir_invitaciones_tbr
                    
                )
            );
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>
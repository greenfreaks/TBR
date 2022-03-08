<?php
class infoForm{
    private $conector;
    private $BaseDatos;
    private $Servidor;
    private $Usuario;
    private $Clave;

    function getSentInfo(){
        $sql = "SELECT * FROM info_form_phi3 info
        INNER JOIN perfil_academico perfil ON info.fk_perfilAcademico = perfil.id_perfilAcademico
        ORDER BY nombre";
        $datos = array();

        if($rs = $this->conector->query($sql)){
            while($fila = $rs->fetch_assoc()){
                $datos[] = $fila;
            }
        }
        return $datos;
    }

    function __construct(){
        $this->BaseDatos = "tbr_phi3";
        $this->Servidor = "localhost";
        $this->Usuario = "root";
        $this->Clave = "";
        // $this->Usuario = "tecnotr1_webmstr";
        // $this->Clave = "Oa?*&2#Bzuqt";
    }

    function conectar(){
        $this->conector = new mysqli($this->Servidor,$this->Usuario,$this->Clave, $this->BaseDatos);
        if($this->conector->connect_errno){
            return 0;
        }else{
            $this->conector->set_charset('utf8');
            return 1;
        }
    }
}
?>
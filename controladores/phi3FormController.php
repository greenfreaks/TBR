<?php
require_once "modelos/phi3FormModel.php";
class phi3FormController{
    private $model;
    public function __construct(){
        $this->model = new phi3FormModel();

    }
}
?>
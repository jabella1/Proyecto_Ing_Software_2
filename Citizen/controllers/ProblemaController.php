<?php
require_once 'models/problema.php';
class ProblemaController{
    public function reportar(){
         require_once 'views/problema/reporte.php'; //carga la vista para reportar problema
    }
    
    public function guardar(){
        if(isset($_POST)){
            $problema= new problema();
            $problema->setDireccion($_POST['direccion']);
            $problema->setDescripcion($_POST['descripcion']);
            $problema->setPrioridad($_POST['prioridad']);
            $problema->setCod_Ciudad($_POST['ciudad']);
           
            $guardar = $problema->guardar();
            
            if($guardar){
                $_SESSION['problema'] = "COMPLETADO";
            } else {
                $_SESSION['problema'] = "FALLIDO";
            }
        }else{
            $_SESSION['problema'] = "FALLIDO";
        }
        header("Location:".base_url.'Problema/reportar'); /* para volver a la pagina de reporte*/
    }
    
}

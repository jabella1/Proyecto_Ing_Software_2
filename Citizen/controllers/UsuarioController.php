<?php

require_once 'models/usuario.php';

class UsuarioController{
    public function index(){
        require_once 'views/layout/central.php';
    }
     public function registro(){
         require_once 'views/usuario/registro.php'; //carga la vista del registro usuario
    }
    public function guardar(){
        if(isset($_POST)){
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setCorreo($_POST['correo']);
            $usuario->setPassword($_POST['password']);
            $usuario->setCedula($_POST['cedula']);
            $usuario->setCiudad($_POST['ciudad']);
            
            $guardar = $usuario->guardar();
            
            if($guardar){
                $_SESSION['registro'] = "COMPLETADO";
            } else {
                $_SESSION['registro'] = "FALLIDO";
            }
        }else{
            $_SESSION['registro'] = "FALLIDO";
        }
        header("Location:".base_url.'usuario/registro'); /* para volver a la pagina de registro*/
    }
    
    public function IniciarSesion() {
        if(isset($_POST)){
            //identificar al usuario
            //consulta a la base de datos
            $usuario = new Usuario();
            $usuario->setCorreo($_POST['correo']);
            $usuario->setPassword($_POST['contraseña']);
            $identidad = $usuario->IniciarSesion();
            
            // para mantener activa la sesion
            if($identidad && is_object($identidad)){
                $_SESSION['identidad'] = $identidad;
                
                // aqui se le podria dar permisos de admin
            }else{
                $_SESSION['Error_Login'] = 'Identificacion Fallida...';
            }
        }
        header("Location:".base_url);
    }
    
    public function CerrarSesion() {
        if(isset($_SESSION['identidad'])){
            unset($_SESSION['identidad']); // cierra la sesion
        }
        // en caso de que el usuario sea admin aqui se tiene que desactivar
        
        header("Location:".base_url);
    }
}

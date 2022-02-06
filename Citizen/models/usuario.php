<?php

class Usuario {

    private $cod_usuario;
    private $nombre;
    private $apellidos;
    private $correo;
    private $password;
    private $cedula;
    private $ciudad;
    private $db;
    
    public function __construct(){
        $this->db = Database::conectar();
    }

    public function getCod_usuario() {
        return $this->cod_usuario;
    }

    public function getNombre() {
        return $this->db->real_escape_string($this->nombre);
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getCorreo() {
       return $this->correo;
    }

    public function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT,['cost'=>4] );
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function setCod_usuario($cod_usuario): void {
        $this->cod_usuario = $this->db->real_escape_string($cod_usuario);
    }

    public function setNombre($nombre): void {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    public function setCorreo($correo): void {
        $this->correo = $this->db->real_escape_string($correo);
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setCedula($cedula): void {
        $this->cedula = $this->db->real_escape_string($cedula);
    }

    public function setCiudad($ciudad): void {
        $this->ciudad = $ciudad;
    }
    
    public function guardar() {
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getCorreo()}', '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getPassword()}', '{$this->getCedula()}', '{$this->getCiudad()}');";
        $guardar = $this->db->query($sql);
        
        $SeGuardo = false;
        if ($guardar) {
           $SeGuardo =true;
        }
        return $SeGuardo;
        }
        
        public function IniciarSesion() {
            $SeEncontroElUsuario = false;   
            $correo = $this->correo;
            $password = $this->password;
            
            //comprobar si existe el usuario
            $sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
            $login = $this->db->query($sql);
            
            if($login && $login->num_rows == 1){
                $usuario = $login->fetch_object();
                    
                //verificar la contraseña
                if(password_verify($password , $usuario->password)){
                    $SeEncontroElUsuario = $usuario;
                }
               
            }
            return $SeEncontroElUsuario;
        }

}

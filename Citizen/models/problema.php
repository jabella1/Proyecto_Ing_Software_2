<?php

class problema {

    private $cod_Problema;
    private $direccion;
    private $descripcion;
    private $prioridad;
    private $EstadoProblema;
    private $cod_Supervisor;
    private $cod_ServidorPublico;
    private $cod_Ciudad;
    private $db;

    public function __construct(){
        $this->db = Database::conectar();
        $this->EstadoProblema = "nuevo";
        $this->cod_Supervisor = 1;
        $this->cod_ServidorPublico = 2;
    }
    
    public function getCod_Problema() {
        return $this->cod_Problema;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrioridad() {
        return $this->prioridad;
    }

    public function getEstadoProblema() {
        return $this->EstadoProblema;
    }

    public function getCod_Supervisor() {
        return $this->cod_Supervisor;
    }

    public function getCod_ServidorPublico() {
        return $this->cod_ServidorPublico;
    }

    public function getCod_Ciudad() {
        return $this->cod_Ciudad;
    }

    public function setCod_Problema($cod_Problema): void {
        $this->cod_Problema = $cod_Problema;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setPrioridad($prioridad): void {
        $this->prioridad = $prioridad;
    }

    public function setEstadoProblema($EstadoProblema): void {
        $this->EstadoProblema = $EstadoProblema;
    }

    public function setCod_Supervisor($cod_Supervisor): void {
        $this->cod_Supervisor = $cod_Supervisor;
    }

    public function setCod_ServidorPublico($cod_ServidorPublico): void {
        $this->cod_ServidorPublico = $cod_ServidorPublico;
    }

    public function setCod_Ciudad($cod_Ciudad): void {
        $this->cod_Ciudad = $cod_Ciudad;
    }
    
    public function guardar() {
        $sql = "INSERT INTO problema VALUES(NULL, '{$this->getDireccion()}', '{$this->getDescripcion()}', '{$this->getPrioridad()}', '{$this->getEstadoProblema()}', '{$this->getCod_Supervisor()}', '{$this->getCod_ServidorPublico()}', '{$this->getCod_Ciudad()}');";
        $guardar = $this->db->query($sql);
        
        $SeGuardo = false;
        if ($guardar) {
           $SeGuardo =true;
        }
        return $SeGuardo;
        }

}

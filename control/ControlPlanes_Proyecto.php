<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlPlanes_Proyecto
 *
 * @author kenyi
 */
class ControlPlanes_Proyecto {
    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarPlanes_ProyectoxCod($codigo)  {
        return $this->objD->listarPlanes_ProyectoxCod($codigo) ;
    }

    public function listarPlanes_Proyecto() {
        return $this->objD->listarPlanes_Proyecto();
    }
    
    public function codAutPlanes_Proyecto() {
        return $this->objD->codAutPlanes_Proyecto();
    }
    
    public function registrarPlanes_Proyecto($ID_PLANES_PROYECTO,$ID_TIPO_PLAN,$ID_PROYECTO) {
        return $this->objD->registrarPlanes_Proyecto($ID_PLANES_PROYECTO,$ID_TIPO_PLAN,$ID_PROYECTO);
    }
    
    public function actualizarPlanes_Proyecto($ID_PLANES_PROYECTO,$ID_TIPO_PLAN,$ID_PROYECTO) {
        return $this->objD->actualizarPlanes_Proyecto($ID_PLANES_PROYECTO,$ID_TIPO_PLAN,$ID_PROYECTO);
    }
    
    
}

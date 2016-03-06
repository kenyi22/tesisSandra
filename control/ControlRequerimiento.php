<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlRequerimiento
 *
 * @author kenyi
 */
class ControlRequerimiento {
    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarRequerimientoxCod($codigo) {
        return $this->objD->listarRequerimientoxCod($codigo);
    }

    public function listarRequerimiento() {
        return $this->objD->listarRequerimiento();
    }
    
    public function codAutRequerimiento() {
        return $this->objD->codAutRequerimiento();
    }
    
    public function registrarRequerimiento($ID_REQUERIMIENTO,$ID_PROYECTO,$NOMBRE,$DESCRIPCION,$ESTADO) {
        return $this->objD->registrarRequerimiento($ID_REQUERIMIENTO,$ID_PROYECTO,$NOMBRE,$DESCRIPCION,$ESTADO);
    }
    
    public function actualizarRequerimiento($ID_REQUERIMIENTO,$ID_PROYECTO,$NOMBRE,$DESCRIPCION,$ESTADO) {
        return $this->objD->actualizarRequerimiento($ID_REQUERIMIENTO,$ID_PROYECTO,$NOMBRE,$DESCRIPCION,$ESTADO);
    }
    
    
}

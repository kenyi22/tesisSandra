<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlActividad_Requerimiento
 *
 * @author kenyi
 */
require_once '../dao/DaoActividad_Requerimiento.php';

class ControlActividad_Requerimiento {
    function __construct() {
        $this->objD = new DaoActividad_Requerimiento();
    }

    public function listarActividadxCod($codigo) {
        return $this->objD->listarActividadxCod($codigo);
    }
    
    public function listarActividad_Requerimiento() {
        return $this->objD->listarActividad_Requerimiento();
    }
    
    public function codAutActividad_Requerimiento() {
        return $this->objD->codAutActividad_Requerimiento();
    }
    
    public function registrarActividad_Requerimiento($ID_ACTIVIDAD_REQUERIMIENTOS,$ESTADO) {
        return $this->objD->registrarActividad_Requerimiento($ID_ACTIVIDAD_REQUERIMIENTOS,$ESTADO);
    }
    
    public function actualizarActividad_Requerimiento($ID_ACTIVIDAD_REQUERIMIENTOS,$ESTADO) {
        return $this->objD->actualizarActividad($ID_ACTIVIDAD_REQUERIMIENTOS,$ESTADO);
    }
    
    
}

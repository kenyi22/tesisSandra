<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlTipo_Gasto
 *
 * @author kenyi
 */
require_once '../dao/DaoTipo_Gasto.php';

class ControlTipo_Gasto {
    function __construct() {
        $this->objD = new DaoTipo_Gasto();
    }
    
    public function listarTipo_GastoxCod($codigo) {
        return $this->objD->listarTipo_GastoxCod($codigo);
    }

    public function listarTipo_Gasto() {
        return $this->objD->listarTipo_Gasto();
    }
    
    public function codAutTipo_Gasto() {
        return $this->objD->codAutTipo_Gasto();
    }
    
    public function registrarTipo_Gasto($ID_TIPO_GASTO,$NOMBRE) {
        return $this->objD->registrarTipo_Gasto($ID_TIPO_GASTO,$NOMBRE);
    }
    
    public function actualizarTipo_Gasto($ID_TIPO_GASTO,$NOMBRE) {
        return $this->objD->actualizarTipo_Gasto($ID_TIPO_GASTO,$NOMBRE);
    }
    
    
}

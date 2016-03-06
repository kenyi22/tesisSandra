<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlGasto
 *
 * @author kenyi
 */
class ControlGasto {
    function __construct() {
        $this->objD = new daoNegocio();
    }

    public function listarGastoxCod($codigo) {
        return $this->objD->listarGastoxCod($codigo);
    }
    
    public function listarGasto() {
        return $this->objD->listarGasto();
    }
    
    public function codAutGasto() {
        return $this->objD->codAutGasto();
    }
    
    public function registrarGasto($ID_GASTO,$ID_TIPO_GASTO,$PROYECTO) {
        return $this->objD->registrarGasto($ID_GASTO,$ID_TIPO_GASTO,$PROYECTO);
    }
    
    public function actualizarActividad($ID_GASTO,$ID_TIPO_GASTO,$PROYECTO) {
        return $this->objD->actualizarGasto($ID_GASTO,$ID_TIPO_GASTO,$PROYECTO);
    }
    
    
}

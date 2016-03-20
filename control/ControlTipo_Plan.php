<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlTipo_Plan
 *
 * @author kenyi
 */
require_once '../dao/DaoTipo_Plan.php';

class ControlTipo_Plan {
    function __construct() {
        $this->objD = new DaoTipo_Plan();
    }
    
    public function listarTipo_PlanxCod($codigo) {
        return $this->objD->listarTipo_PlanxCod($codigo);
    }

    public function listarTipo_Plan() {
        return $this->objD->listarTipo_Plan();
    }
    
    public function codAutTipo_Plan() {
        return $this->objD->codAutTipo_Plan();
    }
    
    public function registrarTipo_Plan($ID_TIPO_PLAN,$NOMBRE,$ESTADO) {
        return $this->objD->registrarTipo_Plan($ID_TIPO_PLAN,$NOMBRE,$ESTADO);
    }
    
    public function actualizarTipo_Plan($ID_TIPO_PLAN,$NOMBRE,$ESTADO) {
        return $this->objD->actualizarTipo_Plan($ID_TIPO_PLAN,$NOMBRE,$ESTADO);
    }
    
    
}

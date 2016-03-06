<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlPersona
 *
 * @author kenyi
 */
class ControlPersona {
   function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarPersonaxCod($codigo) {
        return $this->objD-listarPersonaxCod($codigo);
    }

    public function listarPersona() {
        return $this->objD->listarPersona();
    }
    
    public function codAutPersona() {
        return $this->objD->codAutAPersona();
    }
    
    public function registrarPersona($ID_PERSONA,$NOMBRE,$APEPATERNO,$APEMATERNO,$DNI,$RUC,$CORREO,$TELEFONO,$ESTADO,$FECHA_REGISTRO) {
        return $this->objD->registrarPersona($ID_PERSONA,$NOMBRE,$APEPATERNO,$APEMATERNO,$DNI,$RUC,$CORREO,$TELEFONO,$ESTADO,$FECHA_REGISTRO);
    }
    
    public function actualizarPersona($ID_PERSONA,$NOMBRE,$APEPATERNO,$APEMATERNO,$DNI,$RUC,$CORREO,$TELEFONO,$ESTADO,$FECHA_REGISTRO) {
        return $this->objD->actualizarPersona($ID_PERSONA,$NOMBRE,$APEPATERNO,$APEMATERNO,$DNI,$RUC,$CORREO,$TELEFONO,$ESTADO,$FECHA_REGISTRO);
    }
    
    
}

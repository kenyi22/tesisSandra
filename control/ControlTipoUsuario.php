<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlTipoUsuario
 *
 * @author kenyi
 */
class ControlTipoUsuario {
    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarTipoUsuarioxCod($codigo) {
        return $this->objD->listarTipoUsuarioxCod($codigo);
    }

    public function listarTipoUsuario() {
        return $this->objD->listarTipoUsuario();
    }
    
    public function codAutTipoUsuario() {
        return $this->objD->codAutTipoUsuario();
    }
    
    public function registrarTipoUsuario($ID_USUARIO,$ID_PERSONA,$NOMBRE_USUARIO,$CONTRASENNA) {
        return $this->objD->registrarTipoUsuario($ID_USUARIO,$ID_PERSONA,$NOMBRE_USUARIO,$CONTRASENNA);
    }
    
    public function actualizarTipoUsuario($ID_USUARIO,$ID_PERSONA,$NOMBRE_USUARIO,$CONTRASENNA) {
        return $this->objD->actualizarTipoUsuario($ID_USUARIO,$ID_PERSONA,$NOMBRE_USUARIO,$CONTRASENNA);
    }
    
    
}

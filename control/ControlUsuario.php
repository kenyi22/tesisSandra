<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlUsuario
 *
 * @author kenyi
 */
require_once '../dao/DaoUsuario.php';

class ControlUsuario {
    function __construct() {
        $this->objD = new DaoUsuario();
    }
    
    public function listarUsuarioxCod($codigo) {
        return $this->objD->listarUsuarioxCod($codigo);
    }

    public function listarUsuario() {
        return $this->objD->listarUsuario();
    }
    
    public function codAutUsuario() {
        return $this->objD->codAutUsuario();
    }
    
    public function registrarUsuario($ID_USUARIO,$NOMBRE,$ESTADO) {
        return $this->objD->registrarUsuario($ID_USUARIO,$NOMBRE,$ESTADO);
    }
    
    public function actualizarUsuario($ID_USUARIO,$NOMBRE,$ESTADO) {
        return $this->objD->actualizarUsuario($ID_USUARIO,$NOMBRE,$ESTADO);
    }
    
    
}

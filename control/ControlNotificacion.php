<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlNotificacion
 *
 * @author kenyi
 */
class ControlNotificacion {
    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarNotificacionxCod($codigo) {
        return $this->objD->listarNotificacionxCod($codigo);
    }

    public function listarNotificacion() {
        return $this->objD->listarNotificacion();
    }
    
    public function codAutNotificacion() {
        return $this->objD->codAutNotificacion();
    }
    
    public function registrarNotificacion($ID_NOTIFICACION,$ID_TIPO_NOTIFICACION,$ID_PROYECTO,$ESTADO,$LEIDO,$FECHA,$HORA) {
        return $this->objD->registrarNotificacion($ID_NOTIFICACION,$ID_TIPO_NOTIFICACION,$ID_PROYECTO,$ESTADO,$LEIDO,$FECHA,$HORA);
    }
    
    public function actualizarNotificacion($ID_NOTIFICACION,$ID_TIPO_NOTIFICACION,$ID_PROYECTO,$ESTADO,$LEIDO,$FECHA,$HORA) {
        return $this->objD->actualizarNotificacion($ID_NOTIFICACION,$ID_TIPO_NOTIFICACION,$ID_PROYECTO,$ESTADO,$LEIDO,$FECHA,$HORA);
    }
    
    
}

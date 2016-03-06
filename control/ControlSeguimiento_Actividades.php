<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlSeguimiento_Actividades
 *
 * @author kenyi
 */
class ControlSeguimiento_Actividades {

    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarSeguimiento_ActividadesxCod($codigo) {
        return $this->objD->listarSeguimiento_ActividadesxCod($codigo);
    }

    public function listarSeguimiento_Actividades() {
        return $this->objD->listarSeguimiento_Actividades();
    }

    public function codAutSeguimiento_Actividades() {
        return $this->objD->codAutSeguimiento_Actividades();
    }

    public function registrarSeguimiento_Actividades($ID_SEGUIMIENTO,$ID_ACTIVIDAD,$ID_USUARIO,$ACCION,$PORCENTAJE,$FECHA,$HORA,$DETALLE) {
        return $this->objD->registrarSeguimiento_Actividades($ID_SEGUIMIENTO,$ID_ACTIVIDAD,$ID_USUARIO,$ACCION,$PORCENTAJE,$FECHA,$HORA,$DETALLE);
    }

    public function actualizarSeguimiento_Actividades($ID_SEGUIMIENTO,$ID_ACTIVIDAD,$ID_USUARIO,$ACCION,$PORCENTAJE,$FECHA,$HORA,$DETALLE) {
        return $this->objD->actualizarSeguimiento_Actividades($ID_SEGUIMIENTO,$ID_ACTIVIDAD,$ID_USUARIO,$ACCION,$PORCENTAJE,$FECHA,$HORA,$DETALLE);
    }
    
    

}

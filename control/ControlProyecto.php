<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlProyecto
 *
 * @author kenyi
 */
require_once '../dao/DaoProyecto.php';

class ControlProyecto {
    function __construct() {
        $this->objD = new DaoProyecto();
    }
    
    public function listarProyectoxCod($codigo) {
        return $this->objD->listarProyectoxCod($codigo);
    }

    public function listarProyecto() {
        return $this->objD->listarlProyecto();
    }
    
    public function codAutProyecto() {
        return $this->objD->codAutlProyecto();
    }
    
    public function registrarProyecto($ID_PROYECTO,$NOMBRE,$FECHA_INICIO,$FECHA_FIN,$DESCRIPCION,$COSTO,$PRECIO,$FECHA_REGISTRO,$ESTADO) {
        return $this->objD->registrarActividad($ID_PROYECTO,$NOMBRE,$FECHA_INICIO,$FECHA_FIN,$DESCRIPCION,$COSTO,$PRECIO,$FECHA_REGISTRO,$ESTADO);
    }
    
    public function actualizarProyecto($ID_PROYECTO,$NOMBRE,$FECHA_INICIO,$FECHA_FIN,$DESCRIPCION,$COSTO,$PRECIO,$FECHA_REGISTRO,$ESTADO) {
        return $this->objD->actualizarActividad($ID_PROYECTO,$NOMBRE,$FECHA_INICIO,$FECHA_FIN,$DESCRIPCION,$COSTO,$PRECIO,$FECHA_REGISTRO,$ESTADO);
    }
    
    
}

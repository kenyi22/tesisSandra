<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo_Notificacion
 *
 * @author kenyi
 */
class Tipo_Notificacion {
    PRIVATE $ID_TIPO_NOTIFICACION;
    PRIVATE $ESTADO;
    PRIVATE $NOMBRE;
    
    function __construct($ID_TIPO_NOTIFICACION, $ESTADO, $NOMBRE) {
        $this->ID_TIPO_NOTIFICACION = $ID_TIPO_NOTIFICACION;
        $this->ESTADO = $ESTADO;
        $this->NOMBRE = $NOMBRE;
    }
    
    function getID_TIPO_NOTIFICACION() {
        return $this->ID_TIPO_NOTIFICACION;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function setID_TIPO_NOTIFICACION($ID_TIPO_NOTIFICACION) {
        $this->ID_TIPO_NOTIFICACION = $ID_TIPO_NOTIFICACION;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }



}

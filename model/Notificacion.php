<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Notificacion
 *
 * @author kenyi
 */
class Notificacion {
    PRIVATE $ID_NOTIFICACION;
    PRIVATE $ID_TIPO_NOTIFICACION;
    PRIVATE $ID_PROYECTO;
    PRIVATE $ESTADO;
    PRIVATE $LEIDO;
    PRIVATE $FECHA;
    PRIVATE $HORA;
    
    function __construct($ID_NOTIFICACION, $ID_TIPO_NOTIFICACION, $ID_PROYECTO, $ESTADO, $LEIDO, $FECHA, $HORA) {
        $this->ID_NOTIFICACION = $ID_NOTIFICACION;
        $this->ID_TIPO_NOTIFICACION = $ID_TIPO_NOTIFICACION;
        $this->ID_PROYECTO = $ID_PROYECTO;
        $this->ESTADO = $ESTADO;
        $this->LEIDO = $LEIDO;
        $this->FECHA = $FECHA;
        $this->HORA = $HORA;
    }
    
    function getID_NOTIFICACION() {
        return $this->ID_NOTIFICACION;
    }

    function getID_TIPO_NOTIFICACION() {
        return $this->ID_TIPO_NOTIFICACION;
    }

    function getID_PROYECTO() {
        return $this->ID_PROYECTO;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getLEIDO() {
        return $this->LEIDO;
    }

    function getFECHA() {
        return $this->FECHA;
    }

    function getHORA() {
        return $this->HORA;
    }

    function setID_NOTIFICACION($ID_NOTIFICACION) {
        $this->ID_NOTIFICACION = $ID_NOTIFICACION;
    }

    function setID_TIPO_NOTIFICACION($ID_TIPO_NOTIFICACION) {
        $this->ID_TIPO_NOTIFICACION = $ID_TIPO_NOTIFICACION;
    }

    function setID_PROYECTO($ID_PROYECTO) {
        $this->ID_PROYECTO = $ID_PROYECTO;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setLEIDO($LEIDO) {
        $this->LEIDO = $LEIDO;
    }

    function setFECHA($FECHA) {
        $this->FECHA = $FECHA;
    }

    function setHORA($HORA) {
        $this->HORA = $HORA;
    }



}

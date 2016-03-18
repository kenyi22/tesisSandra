<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Seguimiento_Actividades
 *
 * @author kenyi
 */
class Seguimiento_Actividades {
    PRIVATE $ID_SEGUIMIENTO;
    PRIVATE $ID_ACTIVIDAD;
    PRIVATE $ID_USUARIO;
    PRIVATE $ACCION;
    PRIVATE $PORCENTAJE;
    PRIVATE $FECHA;
    PRIVATE $HORA;
    PRIVATE $DETALLE;
    
    function __construct($ID_SEGUIMIENTO=null, $ID_ACTIVIDAD=null, $ID_USUARIO=null, $ACCION=null, $PORCENTAJE=null, $FECHA=null, $HORA=null, $DETALLE=null) {
        $this->ID_SEGUIMIENTO = is_null($ID_SEGUIMIENTO) ? $this->ID_SEGUIMIENTO : $ID_SEGUIMIENTO;
        $this->ID_ACTIVIDAD = is_null($ID_ACTIVIDAD) ? $this->ID_ACTIVIDAD : $ID_ACTIVIDAD;
        $this->ID_USUARIO = is_null($ID_USUARIO) ? $this->ID_USUARIO : $ID_USUARIO;
        $this->ACCION = is_null($ACCION) ? $this->ACCION : $ACCION;
        $this->PORCENTAJE = is_null($PORCENTAJE) ? $this->PORCENTAJE : $PORCENTAJE;
        $this->FECHA = is_null($FECHA) ? $this->FECHA : $FECHA;
        $this->HORA = is_null($HORA) ? $this->HORA : $HORA;
        $this->DETALLE = is_null($DETALLE) ? $this->DETALLE : $DETALLE;

    }
    
    function getID_SEGUIMIENTO() {
        return $this->ID_SEGUIMIENTO;
    }

    function getID_ACTIVIDAD() {
        return $this->ID_ACTIVIDAD;
    }

    function getID_USUARIO() {
        return $this->ID_USUARIO;
    }

    function getACCION() {
        return $this->ACCION;
    }

    function getPORCENTAJE() {
        return $this->PORCENTAJE;
    }

    function getFECHA() {
        return $this->FECHA;
    }

    function getHORA() {
        return $this->HORA;
    }

    function getDETALLE() {
        return $this->DETALLE;
    }

    function setID_SEGUIMIENTO($ID_SEGUIMIENTO) {
        $this->ID_SEGUIMIENTO = $ID_SEGUIMIENTO;
    }

    function setID_ACTIVIDAD($ID_ACTIVIDAD) {
        $this->ID_ACTIVIDAD = $ID_ACTIVIDAD;
    }

    function setID_USUARIO($ID_USUARIO) {
        $this->ID_USUARIO = $ID_USUARIO;
    }

    function setACCION($ACCION) {
        $this->ACCION = $ACCION;
    }

    function setPORCENTAJE($PORCENTAJE) {
        $this->PORCENTAJE = $PORCENTAJE;
    }

    function setFECHA($FECHA) {
        $this->FECHA = $FECHA;
    }

    function setHORA($HORA) {
        $this->HORA = $HORA;
    }

    function setDETALLE($DETALLE) {
        $this->DETALLE = $DETALLE;
    }



}

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
    
    function __construct($ID_SEGUIMIENTO, $ID_ACTIVIDAD, $ID_USUARIO, $ACCION, $PORCENTAJE, $FECHA, $HORA, $DETALLE) {
        $this->ID_SEGUIMIENTO = $ID_SEGUIMIENTO;
        $this->ID_ACTIVIDAD = $ID_ACTIVIDAD;
        $this->ID_USUARIO = $ID_USUARIO;
        $this->ACCION = $ACCION;
        $this->PORCENTAJE = $PORCENTAJE;
        $this->FECHA = $FECHA;
        $this->HORA = $HORA;
        $this->DETALLE = $DETALLE;
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

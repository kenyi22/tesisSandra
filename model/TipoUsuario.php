<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoUsuario
 *
 * @author kenyi
 */
class TipoUsuario {
    PRIVATE $ID_USUARIO;
    PRIVATE $ID_PERSONA;
    PRIVATE $NOMBRE_USUARIO;
    PRIVATE $CONTRASENNA;
    
    function __construct($ID_USUARIO, $ID_PERSONA, $NOMBRE_USUARIO, $CONTRASENNA) {
        $this->ID_USUARIO = $ID_USUARIO;
        $this->ID_PERSONA = $ID_PERSONA;
        $this->NOMBRE_USUARIO = $NOMBRE_USUARIO;
        $this->CONTRASENNA = $CONTRASENNA;
    }

    function getID_USUARIO() {
        return $this->ID_USUARIO;
    }

    function getID_PERSONA() {
        return $this->ID_PERSONA;
    }

    function getNOMBRE_USUARIO() {
        return $this->NOMBRE_USUARIO;
    }

    function getCONTRASENNA() {
        return $this->CONTRASENNA;
    }

    function setID_USUARIO($ID_USUARIO) {
        $this->ID_USUARIO = $ID_USUARIO;
    }

    function setID_PERSONA($ID_PERSONA) {
        $this->ID_PERSONA = $ID_PERSONA;
    }

    function setNOMBRE_USUARIO($NOMBRE_USUARIO) {
        $this->NOMBRE_USUARIO = $NOMBRE_USUARIO;
    }

    function setCONTRASENNA($CONTRASENNA) {
        $this->CONTRASENNA = $CONTRASENNA;
    }


}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author kenyi
 */
class Usuario {
    
    
    PRIVATE $ID_USUARIO;
    PRIVATE $NOMBRE;
    PRIVATE $ESTADO;

    function __construct($ID_USUARIO=null, $NOMBRE=null, $ESTADO=null) {
        $this->ID_USUARIO = is_null($ID_USUARIO) ? $this->ID_USUARIO : $ID_USUARIO;
        $this->NOMBRE = is_null($NOMBRE) ? $this->NOMBRE : $NOMBRE;
        $this->ESTADO = is_null($ESTADO) ? $this->ESTADO : $ESTADO;
    }
    
    function getID_USUARIO() {
        return $this->ID_USUARIO;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_USUARIO($ID_USUARIO) {
        $this->ID_USUARIO = $ID_USUARIO;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



    
}

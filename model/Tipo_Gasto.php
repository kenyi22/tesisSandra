<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo_Gasto
 *
 * @author kenyi
 */
class Tipo_Gasto {
    PRIVATE $ID_TIPO_GASTO;
    PRIVATE $NOMBRE;
    
    function __construct($ID_TIPO_GASTO, $NOMBRE) {
        $this->ID_TIPO_GASTO = $ID_TIPO_GASTO;
        $this->NOMBRE = $NOMBRE;
    }
    
    function getID_TIPO_GASTO() {
        return $this->ID_TIPO_GASTO;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function setID_TIPO_GASTO($ID_TIPO_GASTO) {
        $this->ID_TIPO_GASTO = $ID_TIPO_GASTO;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }



}

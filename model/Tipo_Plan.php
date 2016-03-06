<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo_Plan
 *
 * @author kenyi
 */
class Tipo_Plan {
    PRIVATE $ID_TIPO_PLAN;
    PRIVATE $NOMBRE;
    PRIVATE $ESTADO;
    
    function __construct($ID_TIPO_PLAN, $NOMBRE, $ESTADO) {
        $this->ID_TIPO_PLAN = $ID_TIPO_PLAN;
        $this->NOMBRE = $NOMBRE;
        $this->ESTADO = $ESTADO;
    }
    
    function getID_TIPO_PLAN() {
        return $this->ID_TIPO_PLAN;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_TIPO_PLAN($ID_TIPO_PLAN) {
        $this->ID_TIPO_PLAN = $ID_TIPO_PLAN;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



}

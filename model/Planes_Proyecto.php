<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Planes_Proyecto
 *
 * @author kenyi
 */
class Planes_Proyecto {
    PRIVATE $ID_PLANES_PROYECTO;
    PRIVATE $ID_TIPO_PLAN;
    PRIVATE $ID_PROYECTO;
    
    function __construct($ID_PLANES_PROYECTO, $ID_TIPO_PLAN, $ID_PROYECTO) {
        $this->ID_PLANES_PROYECTO = $ID_PLANES_PROYECTO;
        $this->ID_TIPO_PLAN = $ID_TIPO_PLAN;
        $this->ID_PROYECTO = $ID_PROYECTO;
    }
    
    function getID_PLANES_PROYECTO() {
        return $this->ID_PLANES_PROYECTO;
    }

    function getID_TIPO_PLAN() {
        return $this->ID_TIPO_PLAN;
    }

    function getID_PROYECTO() {
        return $this->ID_PROYECTO;
    }

    function setID_PLANES_PROYECTO($ID_PLANES_PROYECTO) {
        $this->ID_PLANES_PROYECTO = $ID_PLANES_PROYECTO;
    }

    function setID_TIPO_PLAN($ID_TIPO_PLAN) {
        $this->ID_TIPO_PLAN = $ID_TIPO_PLAN;
    }

    function setID_PROYECTO($ID_PROYECTO) {
        $this->ID_PROYECTO = $ID_PROYECTO;
    }



}

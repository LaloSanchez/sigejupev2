<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 DAOS
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/apelacioncateos/ApelacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ApelacioncateosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertApelacioncateos($apelacioncateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblapelacioncateos(";
        if ($apelacioncateosDto->getIdApelacionCateo() != "") {
            $sql.="idApelacionCateo";
            if (($apelacioncateosDto->getIdCateo() != "") || ($apelacioncateosDto->getAgravios() != "") || ($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getIdCateo() != "") {
            $sql.="idCateo";
            if (($apelacioncateosDto->getAgravios() != "") || ($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getAgravios() != "") {
            $sql.="agravios";
            if (($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getEscritoApelacion() != "") {
            $sql.="escritoApelacion";
            if (($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaEscritoApelacion() != "") {
            $sql.="fechaEscritoApelacion";
            if (($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getAcuerdo() != "") {
            $sql.="acuerdo";
            if (($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaAcuerdo() != "") {
            $sql.="fechaAcuerdo";
            if (($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getResolucionSala() != "") {
            $sql.="resolucionSala";
            if (($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaResolucion() != "") {
            $sql.="fechaResolucion";
            if (($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveSentido() != "") {
            $sql.="cveSentido";
            if (($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") {
            $sql.="cveEstatusSolicitudCateo";
            if (($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveUsuarioMP() != "") {
            $sql.="cveUsuarioMP";
            if (($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveUsuarioSecretario() != "") {
            $sql.="cveUsuarioSecretario";
            if (($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveSala() != "") {
            $sql.="cveSala";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($apelacioncateosDto->getIdApelacionCateo() != "") {
            $sql.="'" . $apelacioncateosDto->getIdApelacionCateo() . "'";
            if (($apelacioncateosDto->getIdCateo() != "") || ($apelacioncateosDto->getAgravios() != "") || ($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getIdCateo() != "") {
            $sql.="'" . $apelacioncateosDto->getIdCateo() . "'";
            if (($apelacioncateosDto->getAgravios() != "") || ($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getAgravios() != "") {
            $sql.="'" . $apelacioncateosDto->getAgravios() . "'";
            if (($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getEscritoApelacion() != "") {
            $sql.="'" . $apelacioncateosDto->getEscritoApelacion() . "'";
            if (($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaEscritoApelacion() != "") {
            $sql.="'" . $apelacioncateosDto->getFechaEscritoApelacion() . "'";
            if (($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getAcuerdo() != "") {
            $sql.="'" . $apelacioncateosDto->getAcuerdo() . "'";
            if (($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaAcuerdo() != "") {
            $sql.="'" . $apelacioncateosDto->getFechaAcuerdo() . "'";
            if (($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getResolucionSala() != "") {
            $sql.="'" . $apelacioncateosDto->getResolucionSala() . "'";
            if (($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaResolucion() != "") {
            $sql.="'" . $apelacioncateosDto->getFechaResolucion() . "'";
            if (($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveSentido() != "") {
            $sql.="'" . $apelacioncateosDto->getCveSentido() . "'";
            if (($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") {
            $sql.="'" . $apelacioncateosDto->getCveEstatusSolicitudCateo() . "'";
            if (($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveUsuarioMP() != "") {
            $sql.="'" . $apelacioncateosDto->getCveUsuarioMP() . "'";
            if (($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveUsuarioSecretario() != "") {
            $sql.="'" . $apelacioncateosDto->getCveUsuarioSecretario() . "'";
            if (($apelacioncateosDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveSala() != "") {
            $sql.="'" . $apelacioncateosDto->getCveSala() . "'";
        }
        if ($apelacioncateosDto->getFechaRegistro() != "") {
            
        }
        if ($apelacioncateosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ApelacioncateosDTO();
            $tmp->setidApelacionCateo($this->_proveedor->lastID());
            $tmp = $this->selectApelacioncateos($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function updateApelacioncateos($apelacioncateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblapelacioncateos SET ";
        if ($apelacioncateosDto->getIdApelacionCateo() != "") {
            $sql.="idApelacionCateo='" . $apelacioncateosDto->getIdApelacionCateo() . "'";
            if (($apelacioncateosDto->getIdCateo() != "") || ($apelacioncateosDto->getAgravios() != "") || ($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getAceptada() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getIdCateo() != "") {
            $sql.="idCateo='" . $apelacioncateosDto->getIdCateo() . "'";
            if (($apelacioncateosDto->getAgravios() != "") || ($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getAceptada() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getAgravios() != "") {
            $sql.="agravios='" . $apelacioncateosDto->getAgravios() . "'";
            if (($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getAceptada() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getEscritoApelacion() != "") {
            $sql.="escritoApelacion='" . $apelacioncateosDto->getEscritoApelacion() . "'";
            if (($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getAceptada() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaEscritoApelacion() != "") {
            $sql.="fechaEscritoApelacion='" . $apelacioncateosDto->getFechaEscritoApelacion() . "'";
            if (($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getAceptada() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getAcuerdo() != "") {
            $sql.="acuerdo='" . $apelacioncateosDto->getAcuerdo() . "'";
            if (($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getAceptada() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaAcuerdo() != "") {
            $sql.="fechaAcuerdo='" . $apelacioncateosDto->getFechaAcuerdo() . "'";
            if (($apelacioncateosDto->getAceptada() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getAceptada() != "") {
            $sql.="aceptada='" . $apelacioncateosDto->getAceptada() . "'";
            if (($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getResolucionSala() != "") {
            $sql.="resolucionSala='" . $apelacioncateosDto->getResolucionSala() . "'";
            if (($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaResolucion() != "") {
            $sql.="fechaResolucion='" . $apelacioncateosDto->getFechaResolucion() . "'";
            if (($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveSentido() != "") {
            $sql.="cveSentido='" . $apelacioncateosDto->getCveSentido() . "'";
            if (($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") {
            $sql.="cveEstatusSolicitudCateo='" . $apelacioncateosDto->getCveEstatusSolicitudCateo() . "'";
            if (($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveUsuarioMP() != "") {
            $sql.="cveUsuarioMP='" . $apelacioncateosDto->getCveUsuarioMP() . "'";
            if (($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveUsuarioSecretario() != "") {
            $sql.="cveUsuarioSecretario='" . $apelacioncateosDto->getCveUsuarioSecretario() . "'";
            if (($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getCveSala() != "") {
            $sql.="cveSala='" . $apelacioncateosDto->getCveSala() . "'";
            if (($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $apelacioncateosDto->getFechaRegistro() . "'";
            if (($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelacioncateosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $apelacioncateosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idApelacionCateo='" . $apelacioncateosDto->getIdApelacionCateo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ApelacioncateosDTO();
            $tmp->setidApelacionCateo($apelacioncateosDto->getIdApelacionCateo());
            $tmp = $this->selectApelacioncateos($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function deleteApelacioncateos($apelacioncateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblapelacioncateos  WHERE idApelacionCateo='" . $apelacioncateosDto->getIdApelacionCateo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = true;
        } else {
            $tmp = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectApelacioncateos($apelacioncateosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idApelacionCateo,idCateo,agravios,escritoApelacion,fechaEscritoApelacion,acuerdo,fechaAcuerdo,resolucionSala,fechaResolucion,cveSentido,cveEstatusSolicitudCateo,cveUsuarioMP,cveUsuarioSecretario,cveSala,fechaRegistro,fechaActualizacion FROM tblapelacioncateos ";
        if (($apelacioncateosDto->getIdApelacionCateo() != "") || ($apelacioncateosDto->getIdCateo() != "") || ($apelacioncateosDto->getAgravios() != "") || ($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($apelacioncateosDto->getIdApelacionCateo() != "") {
            $sql.="idApelacionCateo='" . $apelacioncateosDto->getIdApelacionCateo() . "'";
            if (($apelacioncateosDto->getIdCateo() != "") || ($apelacioncateosDto->getAgravios() != "") || ($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getIdCateo() != "") {
            $sql.="idCateo='" . $apelacioncateosDto->getIdCateo() . "'";
            if (($apelacioncateosDto->getAgravios() != "") || ($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getAgravios() != "") {
            $sql.="agravios='" . $apelacioncateosDto->getAgravios() . "'";
            if (($apelacioncateosDto->getEscritoApelacion() != "") || ($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getEscritoApelacion() != "") {
            $sql.="escritoApelacion='" . $apelacioncateosDto->getEscritoApelacion() . "'";
            if (($apelacioncateosDto->getFechaEscritoApelacion() != "") || ($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getFechaEscritoApelacion() != "") {
            $sql.="fechaEscritoApelacion='" . $apelacioncateosDto->getFechaEscritoApelacion() . "'";
            if (($apelacioncateosDto->getAcuerdo() != "") || ($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getAcuerdo() != "") {
            $sql.="acuerdo='" . $apelacioncateosDto->getAcuerdo() . "'";
            if (($apelacioncateosDto->getFechaAcuerdo() != "") || ($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getFechaAcuerdo() != "") {
            $sql.="fechaAcuerdo='" . $apelacioncateosDto->getFechaAcuerdo() . "'";
            if (($apelacioncateosDto->getResolucionSala() != "") || ($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getResolucionSala() != "") {
            $sql.="resolucionSala='" . $apelacioncateosDto->getResolucionSala() . "'";
            if (($apelacioncateosDto->getFechaResolucion() != "") || ($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getFechaResolucion() != "") {
            $sql.="fechaResolucion='" . $apelacioncateosDto->getFechaResolucion() . "'";
            if (($apelacioncateosDto->getCveSentido() != "") || ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getCveSentido() != "") {
            $sql.="cveSentido='" . $apelacioncateosDto->getCveSentido() . "'";
            if (($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") || ($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getCveEstatusSolicitudCateo() != "") {
            $sql.="cveEstatusSolicitudCateo='" . $apelacioncateosDto->getCveEstatusSolicitudCateo() . "'";
            if (($apelacioncateosDto->getCveUsuarioMP() != "") || ($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getCveUsuarioMP() != "") {
            $sql.="cveUsuarioMP='" . $apelacioncateosDto->getCveUsuarioMP() . "'";
            if (($apelacioncateosDto->getCveUsuarioSecretario() != "") || ($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getCveUsuarioSecretario() != "") {
            $sql.="cveUsuarioSecretario='" . $apelacioncateosDto->getCveUsuarioSecretario() . "'";
            if (($apelacioncateosDto->getCveSala() != "") || ($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getCveSala() != "") {
            $sql.="cveSala='" . $apelacioncateosDto->getCveSala() . "'";
            if (($apelacioncateosDto->getFechaRegistro() != "") || ($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $apelacioncateosDto->getFechaRegistro() . "'";
            if (($apelacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelacioncateosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $apelacioncateosDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ApelacioncateosDTO();
                    $tmp[$contador]->setIdApelacionCateo($row["idApelacionCateo"]);
                    $tmp[$contador]->setIdCateo($row["idCateo"]);
                    $tmp[$contador]->setAgravios($row["agravios"]);
                    $tmp[$contador]->setEscritoApelacion($row["escritoApelacion"]);
                    $tmp[$contador]->setFechaEscritoApelacion($row["fechaEscritoApelacion"]);
                    $tmp[$contador]->setAcuerdo($row["acuerdo"]);
                    $tmp[$contador]->setFechaAcuerdo($row["fechaAcuerdo"]);
                    $tmp[$contador]->setResolucionSala($row["resolucionSala"]);
                    $tmp[$contador]->setFechaResolucion($row["fechaResolucion"]);
                    $tmp[$contador]->setCveSentido($row["cveSentido"]);
                    $tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
                    $tmp[$contador]->setCveUsuarioMP($row["cveUsuarioMP"]);
                    $tmp[$contador]->setCveUsuarioSecretario($row["cveUsuarioSecretario"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectSolicitudesCateosmp($solicitudescateosDto, $cateosDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select SC.idSolicitudCateo,SC.numero,SC.anio,SC.cveJuzgado,SC.cveCatAudiencia,SC.cveJuzgadoDesahoga,SC.idReferencia,SC.fechaEnvio,SC.cveTipoCarpeta,";
            $sql .= "SC.carpetaInv,SC.nuc,SC.cveUsuario,SC.cveAdscripcionSolicita,SC.cveEstatusSolicitudCateo,SC.observaciones,SC.fechaRegistro,SC.fechaActualizacion ";
            $sql .= "from tbljuzgadorescateos as JC, tblsolicitudescateos as SC, tblcateos as C ";
            $sql .= "where JC.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            if ($solicitudescateosDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudescateosDto->getcveUsuario() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . "";
            }
        } else {
            $sql = "select count(SC.idSolicitudCateo) as totalCount ";
            $sql .= "from tbljuzgadorescateos as JC, tblsolicitudescateos as SC, tblcateos as C ";
            $sql .= "where JC.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            if ($solicitudescateosDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudescateosDto->getcveUsuario() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . " ";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND SC.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND SC.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }
        if ($param["paginacion"] == "true") {
            if ($param["pag"] > 0) {
                $inicial = ($param["pag"] - 1) * $param["cantxPag"];
            } else {
                $inicial = 0;
            }
        }

        $sql .= " $orden ORDER BY SC.fechaRegistro DESC ";

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        error_log("sql => " . $sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new SolicitudescateosDTO();
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $contador++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectSolicitudesCateosApelacion($solicitudescateosDto, $cateosDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select SC.idSolicitudCateo,SC.numero,SC.anio,SC.cveJuzgado,SC.cveCatAudiencia,SC.cveJuzgadoDesahoga,SC.idReferencia,SC.fechaEnvio,SC.cveTipoCarpeta,";
            $sql .= "SC.carpetaInv,SC.nuc,SC.cveUsuario,SC.cveAdscripcionSolicita,SC.cveEstatusSolicitudCateo,SC.observaciones,SC.fechaRegistro,SC.fechaActualizacion ";
            $sql .= "from tbljuzgadoresapelacateos as JC, tblsolicitudescateos as SC, tblcateos as C, tblapelacioncateos as AC ";
            $sql .= "where JC.idApelacionCateo = AC.idApelacionCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and AC.idCateo = C.idCateo ";
            if ($solicitudescateosDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudescateosDto->getcveUsuario() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . "";
            }
        } else {
            $sql = "select count(SC.idSolicitudCateo) as totalCount ";
            $sql .= "from tbljuzgadoresapelacateos as JC, tblsolicitudescateos as SC, tblcateos as C, tblapelacioncateos as AC ";
            $sql .= "where JC.idApelacionCateo = AC.idApelacionCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and AC.idCateo = C.idCateo ";
            if ($solicitudescateosDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudescateosDto->getcveUsuario() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . " ";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " AND AC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND AC.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " AND AC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND AC.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }
        if ($param["paginacion"] == "true") {
            if ($param["pag"] > 0) {
                $inicial = ($param["pag"] - 1) * $param["cantxPag"];
            } else {
                $inicial = 0;
            }
        }

        $sql .= " $orden ORDER BY SC.fechaRegistro DESC ";

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        error_log("sql => " . $sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new SolicitudescateosDTO();
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $contador++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function consultaDetalleApelacionJuzgadoAdmon($param, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "SELECT AC.idCateo ";
            $sql .= "FROM tblapelacioncateos AC ";
            $sql .= "INNER JOIN tblcateos  C ";
            $sql .= "ON (AC.idCateo = C.idCateo) ";
            $sql .= "INNER JOIN tblsolicitudescateos SC ";
            $sql .= "ON (C.idSolicitudCateo = SC.idSolicitudCateo) ";
            $sql .= "WHERE SC.cveEstatusSolicitudCateo IN (" . $param["in"] . " ";
            if ($param["idJuzgado"] != "" && $param["idJuzgado"] != 0) {
                $sql .= "AND SC.cveJuzgadoDesahoga = '" . $param["idJuzgado"] . "'";
            }
            if ($param["numeroCateo"] != "" && $param["numeroCateo"] != 0) {
                $sql.= " AND C.numeroCateo = '" . $param["numeroCateo"] . "' ";
            }
            if ($param["anioCateo"] != "" && $param["anioCateo"] != 0) {
                $sql.= " AND C.anioCateo = '" . $param["anioCateo"] . "' ";
            }
            $sql .= ")";
        } else {
            $sql = "SELECT COUNT(AC.idCateo) as totalCount ";
            $sql .= "FROM tblapelacioncateos AC ";
            $sql .= "INNER JOIN tblcateos  C ";
            $sql .= "ON (AC.idCateo = C.idCateo) ";
            $sql .= "INNER JOIN tblsolicitudescateos SC ";
            $sql .= "ON (C.idSolicitudCateo = SC.idSolicitudCateo) ";
            $sql .= " WHERE SC.cveEstatusSolicitudCateo IN (" . $param["in"] . " ";
            if ($param["idJuzgado"] != "" && $param["idJuzgado"] != 0) {
                $sql .= "AND SC.cveJuzgadoDesahoga = '" . $param["idJuzgado"] . "'";
            }
            if ($param["numeroCateo"] != "" && $param["numeroCateo"] != 0) {
                $sql.= " AND C.numeroCateo = '" . $param["numeroCateo"] . "' ";
            }
            if ($param["anioCateo"] != "" && $param["anioCateo"] != 0) {
                $sql.= " AND C.anioCateo = '" . $param["anioCateo"] . "' ";
            }
            $sql .= ")";
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " AND AC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND AC.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " AND AC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND AC.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }
        if ($param["paginacion"] == "true") {
            if ($param["pag"] > 0) {
                $inicial = ($param["pag"] - 1) * $param["cantxPag"];
            } else {
                $inicial = 0;
            }
        }

        $sql .= " ORDER BY AC.fechaRegistro DESC ";

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if (isset($param["fields"]) == "") {
                        $tmp[$contador] = $row["idCateo"];
                        $contador++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }

        unset($contador);
        unset($sql);
        return $tmp;
    }

}

?>
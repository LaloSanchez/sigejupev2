<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DAOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TrataspersonascarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTrataspersonascarpetas($trataspersonascarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltrataspersonascarpetas(";
        if ($trataspersonascarpetasDto->getidTrataPersonaCarpeta() != "") {
            $sql.="idTrataPersonaCarpeta";
            if (($trataspersonascarpetasDto->getCveEstadoDestino() != "") || ($trataspersonascarpetasDto->getCveMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveEstadoDestino() != "") {
            $sql.="cveEstadoDestino";
            if (($trataspersonascarpetasDto->getCveMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveMunicipioDestino() != "") {
            $sql.="cveMunicipioDestino";
            if (($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcvePaisDestino() != "") {
            $sql.="cvePaisDestino";
            if (($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getestadoDestino() != "") {
            $sql.="estadoDestino";
            if (($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getmunicipioDestino() != "") {
            $sql.="municipioDestino";
            if (($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveEstadoOrigen() != "") {
            $sql.="cveEstadoOrigen";
            if (($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveMunicipioOrigen() != "") {
            $sql.="cveMunicipioOrigen";
            if (($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcvePaisOrigen() != "") {
            $sql.="cvePaisOrigen";
            if (($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getestadoOrigen() != "") {
            $sql.="estadoOrigen";
            if (($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getmunicipioOrigen() != "") {
            $sql.="municipioOrigen";
            if (($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveTipoTrata() != "") {
            $sql.="cveTipoTrata";
            if (($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveTrasportacion() != "") {
            $sql.="cveTrasportacion";
            if (($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getactivo() != "") {
            $sql.="activo";
            if (($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getidImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($trataspersonascarpetasDto->getidTrataPersonaCarpeta() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getidTrataPersonaCarpeta() . "'";
            if (($trataspersonascarpetasDto->getCveEstadoDestino() != "") || ($trataspersonascarpetasDto->getCveMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveEstadoDestino() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getcveEstadoDestino() . "'";
            if (($trataspersonascarpetasDto->getCveMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveMunicipioDestino() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getcveMunicipioDestino() . "'";
            if (($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcvePaisDestino() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getcvePaisDestino() . "'";
            if (($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getestadoDestino() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getestadoDestino() . "'";
            if (($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getmunicipioDestino() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getmunicipioDestino() . "'";
            if (($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveEstadoOrigen() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getcveEstadoOrigen() . "'";
            if (($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveMunicipioOrigen() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getcveMunicipioOrigen() . "'";
            if (($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcvePaisOrigen() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getcvePaisOrigen() . "'";
            if (($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getestadoOrigen() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getestadoOrigen() . "'";
            if (($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getmunicipioOrigen() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getmunicipioOrigen() . "'";
            if (($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveTipoTrata() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getcveTipoTrata() . "'";
            if (($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveTrasportacion() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getcveTrasportacion() . "'";
            if (($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getactivo() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getactivo() . "'";
            if (($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getidImpOfeDelCarpeta() != "") {
            $sql.="'" . $trataspersonascarpetasDto->getidImpOfeDelCarpeta() . "'";
        }
        if ($trataspersonascarpetasDto->getfechaRegistro() != "") {
            
        }
        if ($trataspersonascarpetasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TrataspersonascarpetasDTO();
            $tmp->setidTrataPersonaCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectTrataspersonascarpetas($tmp, "", $this->_proveedor);
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

    public function updateTrataspersonascarpetas($trataspersonascarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltrataspersonascarpetas SET ";
        if ($trataspersonascarpetasDto->getidTrataPersonaCarpeta() != "") {
            $sql.="idTrataPersonaCarpeta='" . $trataspersonascarpetasDto->getidTrataPersonaCarpeta() . "'";
            if (($trataspersonascarpetasDto->getCveEstadoDestino() != "") || ($trataspersonascarpetasDto->getCveMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveEstadoDestino() != "") {
            $sql.="cveEstadoDestino='" . $trataspersonascarpetasDto->getcveEstadoDestino() . "'";
            if (($trataspersonascarpetasDto->getCveMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveMunicipioDestino() != "") {
            $sql.="cveMunicipioDestino='" . $trataspersonascarpetasDto->getcveMunicipioDestino() . "'";
            if (($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcvePaisDestino() != "") {
            $sql.="cvePaisDestino='" . $trataspersonascarpetasDto->getcvePaisDestino() . "'";
            if (($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getestadoDestino() != "") {
            $sql.="estadoDestino='" . $trataspersonascarpetasDto->getestadoDestino() . "'";
            if (($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getmunicipioDestino() != "") {
            $sql.="municipioDestino='" . $trataspersonascarpetasDto->getmunicipioDestino() . "'";
            if (($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveEstadoOrigen() != "") {
            $sql.="cveEstadoOrigen='" . $trataspersonascarpetasDto->getcveEstadoOrigen() . "'";
            if (($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveMunicipioOrigen() != "") {
            $sql.="cveMunicipioOrigen='" . $trataspersonascarpetasDto->getcveMunicipioOrigen() . "'";
            if (($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcvePaisOrigen() != "") {
            $sql.="cvePaisOrigen='" . $trataspersonascarpetasDto->getcvePaisOrigen() . "'";
            if (($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getestadoOrigen() != "") {
            $sql.="estadoOrigen='" . $trataspersonascarpetasDto->getestadoOrigen() . "'";
            if (($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getmunicipioOrigen() != "") {
            $sql.="municipioOrigen='" . $trataspersonascarpetasDto->getmunicipioOrigen() . "'";
            if (($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveTipoTrata() != "") {
            $sql.="cveTipoTrata='" . $trataspersonascarpetasDto->getcveTipoTrata() . "'";
            if (($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getcveTrasportacion() != "") {
            $sql.="cveTrasportacion='" . $trataspersonascarpetasDto->getcveTrasportacion() . "'";
            if (($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getactivo() != "") {
            $sql.="activo='" . $trataspersonascarpetasDto->getactivo() . "'";
            if (($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getidImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $trataspersonascarpetasDto->getidImpOfeDelCarpeta() . "'";
            if (($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $trataspersonascarpetasDto->getfechaRegistro() . "'";
            if (($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonascarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $trataspersonascarpetasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idTrataPersonaCarpeta='" . $trataspersonascarpetasDto->getidTrataPersonaCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TrataspersonascarpetasDTO();
            $tmp->setidTrataPersonaCarpeta($trataspersonascarpetasDto->getidTrataPersonaCarpeta());
            $tmp = $this->selectTrataspersonascarpetas($tmp, "", $this->_proveedor);
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

    public function deleteTrataspersonascarpetas($trataspersonascarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltrataspersonascarpetas  WHERE idTrataPersonaCarpeta='" . $trataspersonascarpetasDto->getidTrataPersonaCarpeta() . "'";
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

    public function selectTrataspersonascarpetas($trataspersonascarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTrataPersonaCarpeta,cveEstadoDestino,cveMunicipioDestino,cvePaisDestino,estadoDestino,municipioDestino,cveEstadoOrigen,cveMunicipioOrigen,cvePaisOrigen,estadoOrigen,municipioOrigen,cveTipoTrata,cveTrasportacion,activo,idImpOfeDelCarpeta,fechaRegistro,fechaActualizacion FROM tbltrataspersonascarpetas ";
        if (($trataspersonascarpetasDto->getidTrataPersonaCarpeta() != "") || ($trataspersonascarpetasDto->getcveEstadoDestino() != "") || ($trataspersonascarpetasDto->getcveMunicipioDestino() != "") || ($trataspersonascarpetasDto->getcvePaisDestino() != "") || ($trataspersonascarpetasDto->getestadoDestino() != "") || ($trataspersonascarpetasDto->getmunicipioDestino() != "") || ($trataspersonascarpetasDto->getcveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getcveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getcvePaisOrigen() != "") || ($trataspersonascarpetasDto->getestadoOrigen() != "") || ($trataspersonascarpetasDto->getmunicipioOrigen() != "") || ($trataspersonascarpetasDto->getcveTipoTrata() != "") || ($trataspersonascarpetasDto->getcveTrasportacion() != "") || ($trataspersonascarpetasDto->getactivo() != "") || ($trataspersonascarpetasDto->getidImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getfechaRegistro() != "") || ($trataspersonascarpetasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($trataspersonascarpetasDto->getidTrataPersonaCarpeta() != "") {
            $sql.="idTrataPersonaCarpeta='" . $trataspersonascarpetasDto->getIdTrataPersonaCarpeta() . "'";
            if (($trataspersonascarpetasDto->getCveEstadoDestino() != "") || ($trataspersonascarpetasDto->getCveMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getcveEstadoDestino() != "") {
            $sql.="cveEstadoDestino='" . $trataspersonascarpetasDto->getCveEstadoDestino() . "'";
            if (($trataspersonascarpetasDto->getCveMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getcveMunicipioDestino() != "") {
            $sql.="cveMunicipioDestino='" . $trataspersonascarpetasDto->getCveMunicipioDestino() . "'";
            if (($trataspersonascarpetasDto->getCvePaisDestino() != "") || ($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getcvePaisDestino() != "") {
            $sql.="cvePaisDestino='" . $trataspersonascarpetasDto->getCvePaisDestino() . "'";
            if (($trataspersonascarpetasDto->getEstadoDestino() != "") || ($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getestadoDestino() != "") {
            $sql.="estadoDestino='" . $trataspersonascarpetasDto->getEstadoDestino() . "'";
            if (($trataspersonascarpetasDto->getMunicipioDestino() != "") || ($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getmunicipioDestino() != "") {
            $sql.="municipioDestino='" . $trataspersonascarpetasDto->getMunicipioDestino() . "'";
            if (($trataspersonascarpetasDto->getCveEstadoOrigen() != "") || ($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getcveEstadoOrigen() != "") {
            $sql.="cveEstadoOrigen='" . $trataspersonascarpetasDto->getCveEstadoOrigen() . "'";
            if (($trataspersonascarpetasDto->getCveMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getcveMunicipioOrigen() != "") {
            $sql.="cveMunicipioOrigen='" . $trataspersonascarpetasDto->getCveMunicipioOrigen() . "'";
            if (($trataspersonascarpetasDto->getCvePaisOrigen() != "") || ($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getcvePaisOrigen() != "") {
            $sql.="cvePaisOrigen='" . $trataspersonascarpetasDto->getCvePaisOrigen() . "'";
            if (($trataspersonascarpetasDto->getEstadoOrigen() != "") || ($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getestadoOrigen() != "") {
            $sql.="estadoOrigen='" . $trataspersonascarpetasDto->getEstadoOrigen() . "'";
            if (($trataspersonascarpetasDto->getMunicipioOrigen() != "") || ($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getmunicipioOrigen() != "") {
            $sql.="municipioOrigen='" . $trataspersonascarpetasDto->getMunicipioOrigen() . "'";
            if (($trataspersonascarpetasDto->getCveTipoTrata() != "") || ($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getcveTipoTrata() != "") {
            $sql.="cveTipoTrata='" . $trataspersonascarpetasDto->getCveTipoTrata() . "'";
            if (($trataspersonascarpetasDto->getCveTrasportacion() != "") || ($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getcveTrasportacion() != "") {
            $sql.="cveTrasportacion='" . $trataspersonascarpetasDto->getCveTrasportacion() . "'";
            if (($trataspersonascarpetasDto->getActivo() != "") || ($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getactivo() != "") {
            $sql.="activo='" . $trataspersonascarpetasDto->getActivo() . "'";
            if (($trataspersonascarpetasDto->getIdImpOfeDelCarpeta() != "") || ($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getidImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $trataspersonascarpetasDto->getIdImpOfeDelCarpeta() . "'";
            if (($trataspersonascarpetasDto->getFechaRegistro() != "") || ($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $trataspersonascarpetasDto->getFechaRegistro() . "'";
            if (($trataspersonascarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonascarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $trataspersonascarpetasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TrataspersonascarpetasDTO();
                    $tmp[$contador]->setIdTrataPersonaCarpeta($row["idTrataPersonaCarpeta"]);
                    $tmp[$contador]->setCveEstadoDestino($row["cveEstadoDestino"]);
                    $tmp[$contador]->setCveMunicipioDestino($row["cveMunicipioDestino"]);
                    $tmp[$contador]->setCvePaisDestino($row["cvePaisDestino"]);
                    $tmp[$contador]->setEstadoDestino($row["estadoDestino"]);
                    $tmp[$contador]->setMunicipioDestino($row["municipioDestino"]);
                    $tmp[$contador]->setCveEstadoOrigen($row["cveEstadoOrigen"]);
                    $tmp[$contador]->setCveMunicipioOrigen($row["cveMunicipioOrigen"]);
                    $tmp[$contador]->setCvePaisOrigen($row["cvePaisOrigen"]);
                    $tmp[$contador]->setEstadoOrigen($row["estadoOrigen"]);
                    $tmp[$contador]->setMunicipioOrigen($row["municipioOrigen"]);
                    $tmp[$contador]->setCveTipoTrata($row["cveTipoTrata"]);
                    $tmp[$contador]->setCveTrasportacion($row["cveTrasportacion"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setIdImpOfeDelCarpeta($row["idImpOfeDelCarpeta"]);
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

}

?>
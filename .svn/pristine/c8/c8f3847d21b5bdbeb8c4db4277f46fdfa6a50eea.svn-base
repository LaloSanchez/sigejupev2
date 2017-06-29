<?php

include_once(dirname(__FILE__) . "/../../../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../dto/arbol/ArbolDTO.Class.php");

class _ArbolDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function _Arbol($param, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "CALL _Arbol('" . $param['numCarpeta'] . "', '" . $param['aniCarpeta'] . "', '" . $param['cveTipoCarpeta'] . "', '" . $param['cveJuzgado'] . "', '" . $param['carpetaInv'] . "', '" . $param['NUC'] . "', '" . $param['idCarpeta'] . "')";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ArbolDTO();
                    $tmp[$contador]->setIdArbol($row["idArbol"]);
                    $tmp[$contador]->setIdPadre($row["idPadre"]);
                    $tmp[$contador]->setIdHijo($row["idHijo"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
                    $tmp[$contador]->setActivo($row["activo"]);
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

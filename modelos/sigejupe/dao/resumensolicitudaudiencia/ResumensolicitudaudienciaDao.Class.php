<?php

include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ResumensolicitudaudienciaDao {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    /**
     * selecciona el listado de trata de personas por el idimpofesolicitud
     * @param $idImpOfeDelSolicitud
     * @param string $orden
     * @param null $proveedor
     * @return array
     */
    public function selectTrataPersonas($idImpOfeDelSolicitud, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT
                a.idTrataPersona,a.idImpOfeDelSolicitud,a.cvePaisOrigen,po.desPais as PaisOrigen, a.estadoOrigen, a.cveEstadoOrigen, a.municipioOrigen,
                a.cveMunicipioOrigen, eo.desEstado as desEstadoOrigen,mo.desMunicipio as desMunicipioOrigen,
                a.cvePaisDestino,pd.desPais as PaisDestino, a.estadoDestino, a.cveEstadoDestino, a.municipioDestino, a.cveMunicipioDestino,
                ed.desEstado as desEstadoDestino, md.desMunicipio as desMunicipioDestino,
                tt.desTipoTrata,t.desTrasportacion
                FROM tbltrataspersonas a
                JOIN tblpaises po ON a.cvePaisOrigen = po.cvePais
                LEFT JOIN tblestados eo ON a.cveEstadoOrigen = eo.cveEstado
                LEFT JOIN tblmunicipios mo ON a.cveMunicipioOrigen = mo.cveMunicipio
                JOIN tblpaises pd ON a.cvePaisDestino = pd.cvePais
                LEFT JOIN tblestados ed ON a.cveEstadoDestino = ed.cveEstado
                LEFT JOIN tblmunicipios md ON a.cveMunicipioDestino = md.cveMunicipio
                JOIN tbltipostratas tt ON a.cveTipoTrata = tt.cveTipoTrata
                JOIN tbltrasportaciones t ON a.cveTrasportacion = t.cveTrasportacion
                WHERE a.activo = 'S'
                AND a.idImpOfeDelSolicitud = $idImpOfeDelSolicitud";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador]['idTrataPersona'] = $row['idTrataPersona'];
                    $tmp[$contador]['idImpOfeDelSolicitud'] = $row['idImpOfeDelSolicitud'];
                    $tmp[$contador]['paisOrigen'] = $row['PaisOrigen'];
                    $tmp[$contador]['cvePaisOrigen'] = $row['cvePaisOrigen'];
                    if ($row['cvePaisOrigen'] == 119) {
                        $estadoOrigen = $row['desEstadoOrigen'];
                        $municipioOrigen = $row['desMunicipioOrigen'];
                    } else {
                        $estadoOrigen = $row['estadoOrigen'];
                        $municipioOrigen = $row['municipioOrigen'];
                    }


                    $tmp[$contador]['estadoOrigen'] = $estadoOrigen;
                    $tmp[$contador]['cveEstadoOrigen'] = $row['cveEstadoOrigen'];
                    $tmp[$contador]['municipioOrigen'] = $municipioOrigen;
                    $tmp[$contador]['cveMunicipioOrigen'] = $row['cveMunicipioOrigen'];

                    $tmp[$contador]['paisDestino'] = $row['PaisDestino'];

                    if ($row['cvePaisDestino'] == 119) {
                        $estadoDestino = $row['desEstadoDestino'];
                        $municipioDestino = $row['desMunicipioDestino'];
                    } else {
                        $estadoDestino = $row['estadoDestino'];
                        $municipioDestino = $row['municipioDestino'];
                    }
                    $tmp[$contador]['estadoDestino'] = $estadoDestino;
                    $tmp[$contador]['cveEstadoDestino'] = $row['cveEstadoDestino'];
                    if($estadoDestino == null){
                        $estadoDestino = 'no especificado';
                    }
                    if($municipioDestino == null){
                        $municipioDestino = 'no especificado';
                    }
                    $tmp[$contador]['estadoDestino'] = $estadoDestino;
                    $tmp[$contador]['municipioDestino'] = $municipioDestino;
                    $tmp[$contador]['cveMunicipioDestino'] = $row['cveMunicipioDestino'];
                    $tmp[$contador]['tipoTrata'] = $row['desTipoTrata'];
                    $tmp[$contador]['transportacion'] = $row['desTrasportacion'];

                    $contador ++;
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

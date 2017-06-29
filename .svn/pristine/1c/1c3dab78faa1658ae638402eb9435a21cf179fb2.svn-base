<?php

include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class EliminarsolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function selectSolicitudesSinAudiencia($solicitudAudienciaDto, $orden = "", $proveedor = null)
    {

        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT sa.idSolicitudAudiencia, sa.carpetaInv, sa.nuc, j.desJuzgado, DATE_FORMAT(CAST(sa.fechaRegistro as DATE),'%d/%m/%Y') as fechaRegistro FROM tblsolicitudesaudiencias sa
                JOIN tbljuzgados j ON sa.cveJuzgado = j.cveJuzgado
                WHERE sa.activo = 'S'
                AND sa.idSolicitudAudiencia NOT IN (SELECT idSolicitudAudiencia FROM tblaudiencias WHERE activo = 'S')";


        if ($solicitudAudienciaDto->nuc != '') {
            $sql .= ' AND sa.nuc = ' . $solicitudAudienciaDto->nuc;
        }

        if ($solicitudAudienciaDto->carpetaInv != '') {
            $sql .= ' AND sa.carpetaInv = ' . $solicitudAudienciaDto->carpetaInv;
        }

        $sql .= " AND (CAST(sa.fechaRegistro as DATE) BETWEEN '" . $solicitudAudienciaDto->fechaInicial . "' AND '" . $solicitudAudienciaDto->fechaFinal . "')";

        $sql .= ' ORDER BY sa.fechaRegistro ASC';

        $this->_proveedor->execute($sql);
        
        $totalRegistros = $this->_proveedor->rows($this->_proveedor->stmt);

        $pagina = $solicitudAudienciaDto->pagina;

        $sql .= ' LIMIT 15 OFFSET ' . $solicitudAudienciaDto->offset;
        
        $this->_proveedor->execute($sql);
        
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {

                    $tmp[$contador] = new stdClass();
                    $tmp[$contador]->idSolicitudAudiencia = utf8_encode($row['idSolicitudAudiencia']);
                    $tmp[$contador]->carpetaInv = utf8_encode($row['carpetaInv']);
                    $tmp[$contador]->nuc = utf8_encode($row['nuc']);
                    $tmp[$contador]->desJuzgado = utf8_encode($row['desJuzgado']);
                    $tmp[$contador]->fechaRegistro = utf8_encode($row['fechaRegistro']);

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

        return [
            'total'     => $totalRegistros,
            'pagina'    => $pagina,
            'registros' => $tmp
        ];

    }
}

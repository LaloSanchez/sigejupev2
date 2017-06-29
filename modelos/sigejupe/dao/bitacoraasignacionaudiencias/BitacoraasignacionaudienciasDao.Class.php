<?php

include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class BitacoraasignacionesaudienciasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function selectBitacoraasignacionesaudiencias($bitacorasignacionesDto, $orden = "", $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }


        $sql = "SELECT ba.idBitacoraAsignacion, sa.cveJuzgado,tc.desTipoCarpeta, sa.carpetaInv, sa.fechaRegistro, CONCAT_WS('/',sa.numero,sa.anio) as causa, sa.nuc,
                DATE_FORMAT(CAST(sa.fechaRegistro as DATETIME),'%d/%m/%Y %r') as fechaIngreso,
                DATE_FORMAT(CAST(ba.fechaInicial as DATETIME),'%d/%m/%Y %r') as fechaInicial,
                DATE_FORMAT(CAST(ba.fechaMovimiento as DATETIME),'%d/%m/%Y %r') as fechaMovimiento,
                DATE_FORMAT(CAST(ba.fechaFinal as DATETIME),'%d/%m/%Y %r') as fechaFinal, ba.observaciones,
                CONCAT_WS(' ', j.titulo, j.nombre, j.paterno, j.materno) as juzgador,
                s.desSala
                FROM tblsolicitudesaudiencias sa
                LEFT JOIN tbltiposcarpetas tc ON sa.cveTipoCarpeta = tc.cveTipoCarpeta
                JOIN tblbitacoraasignaciones ba ON sa.idSolicitudAudiencia = ba.idSolicitudAudiencia
                LEFT JOIN tbljuzgadores j ON ba.idJuzgador = j.idJuzgador
                LEFT JOIN tblsalas s ON ba.cveSala = s.cveSala
                WHERE (CAST(ba.fechaMovimiento as DATE) >= '" . $bitacorasignacionesDto->fechaInicial . "' AND CAST(ba.fechaMovimiento as DATE) <= '" . $bitacorasignacionesDto->fechaFinal . "')";

        if ($bitacorasignacionesDto->cveJuzgado != '') {
            $sql .= " AND sa.cveJuzgado = " . $bitacorasignacionesDto->cveJuzgado;
        }

        if ($bitacorasignacionesDto->numero != '') {
            $sql .= ' AND sa.numero = ' . $bitacorasignacionesDto->numero;
        }

        if ($bitacorasignacionesDto->anio != '') {
            $sql .= ' AND sa.anio = ' . $bitacorasignacionesDto->anio;
        }

        if ($bitacorasignacionesDto->cveTipoCarpeta != '') {
            $sql .= ' AND sa.cveTipoCarpeta = ' . $bitacorasignacionesDto->cveTipoCarpeta;
        }

        if ($bitacorasignacionesDto->carpetaInv != '') {
            $sql .= ' AND sa.carpetaInv = ' . $bitacorasignacionesDto->carpetaInv;
        }

        if ($bitacorasignacionesDto->nuc != '') {
            $sql .= ' AND sa.nuc = ' . '"' . $bitacorasignacionesDto->nuc . '"';
        }

        $this->_proveedor->execute($sql);

        $totalRegistros = $this->_proveedor->rows($this->_proveedor->stmt);

        $pagina = $bitacorasignacionesDto->pagina;

        $sql .= ' ORDER BY sa.fechaRegistro ASC LIMIT ' . $bitacorasignacionesDto->porPagina . ' OFFSET ' . $bitacorasignacionesDto->offset;


        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new stdClass();
                    $tmp[$contador]->idBitacoraAsignacion = utf8_encode($row['idBitacoraAsignacion']);
                    $tmp[$contador]->cveJuzgado = utf8_encode($row['cveJuzgado']);
                    $tmp[$contador]->desTipoCarpeta = utf8_encode($row['desTipoCarpeta']);
                    $tmp[$contador]->carpetaInv = utf8_encode($row['carpetaInv']);
                    $tmp[$contador]->causa = utf8_encode($row['causa']);
                    $tmp[$contador]->nuc = utf8_encode($row['nuc']);
                    $tmp[$contador]->fechaIngreso = utf8_encode($row['fechaIngreso']);
                    $tmp[$contador]->fechaInicial = utf8_encode($row['fechaInicial']);
                    $tmp[$contador]->fechaMovimiento = utf8_encode($row['fechaMovimiento']);
                    $tmp[$contador]->fechaFinal = utf8_encode($row['fechaFinal']);
                    $tmp[$contador]->observaciones = utf8_encode($row['observaciones']);
                    $tmp[$contador]->juzgador = utf8_encode($row['juzgador']);
                    $tmp[$contador]->sala = utf8_encode($row['desSala']);
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
            'total' => $totalRegistros,
            'pagina' => $pagina,
            'registros' => $tmp
        ];
    }

}

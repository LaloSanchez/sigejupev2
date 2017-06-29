<?php

ini_set('max_execution_time', 300); //300 seconds = 5 minutes

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class reportes {

    protected $_proveedor;

    public function __construct() {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    // Funcion para conectarse a una Base de Datos
    public function _conexion() {
        $this->_proveedor->connect();
    }

    ########

    public function getOrdenesHorasControl($fechaInicial, $fechaFinal) {
        $this->_conexion();


        #OBTENEMOS FECHA ACTUAL
        $audiencias = array("60", "61", "74");
        $horasMes = array();

        foreach ($audiencias as $audiencia) {
            $fecha = array();
            $contador = 0;
            $sql = "select fechaInicial, fechaFinal from tblaudiencias where cveCatAudiencia = " . $audiencia . " and fechaInicial >= '" . $fechaInicial . " 00:00:00' and fechaInicial <= '" . $fechaFinal . " 23:59:59' and activo = 'S' and cveEstatusAudiencia = 2 ;";
            $this->_proveedor->execute($sql);
            if (!$this->_proveedor->error()) {
                if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                    while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                        $fecha[$contador]["fechaInicial"] = $row["fechaInicial"];
                        $fecha[$contador]["fechaFinal"] = $row["fechaFinal"];
                        $contador++;
                    }
                }
            }

            $minutosMesTotoal = 0;
            $minutosMes = 0;
            foreach ($fecha as $fech) {
                $minutosMes = round((strtotime($fech["fechaFinal"]) - strtotime($fech["fechaInicial"])) / 60);
                $minutosMesTotoal += $minutosMes;
            }
            $horasMes[$audiencia] = ceil($minutosMesTotoal / 60);
        }
        return $horasMes;
    }

    public function getOrdenesJuzgadorControl($fechaInicial, $fechaFinal) {
        $this->_conexion();


        #OBTENEMOS FECHA ACTUAL
        $audiencias = array("60", "61", "74");
        $horasMes = array();

        foreach ($audiencias as $audiencia) {
            $fecha = array();
            $contador = 0;
            $sql = "select j.idjuzgador
                    from tblaudiencias a, 
                    tblaudienciasjuzgador j
                    where a.idAudiencia = j.idAudiencia and j.activo ='S' and
                    a.fechaInicial >= '" . $fechaInicial . " 00:00:00' and a.fechaInicial <= '" . $fechaFinal . " 23:59:59' and a.activo = 'S' 
                    and a.cveEstatusAudiencia = 2 and a.cveCatAudiencia =" . $audiencia . " group by j.idJuzgador;";
            $this->_proveedor->execute($sql);
            if (!$this->_proveedor->error()) {
                if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                    while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                        $fecha[$contador]["idjuzgador"] = $row["idjuzgador"];
                        $contador++;
                    }
                }
            }
            $horasMes[$audiencia] = count($fecha);
        }
        return $horasMes;
    }

    public function getOrdenesMpControl($fechaInicial, $fechaFinal) {
        $this->_conexion();

        #OBTENEMOS FECHA ACTUAL
        $audiencias = array("60", "61", "74");

        $horasMes = array();

        foreach ($audiencias as $audiencia) {
            $fecha = array();
            $contador = 0;
            $sql = "select  cveUsuario
                from tblaudiencias where fechaInicial >= '" . $fechaInicial . " 00:00:00' and fechaInicial <= '" . $fechaFinal . " 23:59:59' and activo = 'S' and cveEstatusAudiencia = 2 and cveCatAudiencia = " . $audiencia . " group by cveUsuario;";
            $this->_proveedor->execute($sql);
            if (!$this->_proveedor->error()) {
                if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                    while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                        $fecha[$contador]["idjuzgador"] = $row["cveUsuario"];
                        $contador++;
                    }
                }
            }
            $horasMes[$audiencia] = count($fecha);
        }

        return $horasMes;
    }

    public function getOrdenesSolicitudControl($fechaInicial, $fechaFinal) {
        $this->_conexion();

        #OBTENEMOS FECHA ACTUAL
        $audiencias = array("60", "61", "74");
        $horasMes = array();

        foreach ($audiencias as $audiencia) {
            $fecha = array();
            $contador = 0;
            $sql = "select  cveUsuario
                from tblaudiencias where fechaInicial >= '" . $fechaInicial . " 00:00:00' and fechaInicial <= '" . $fechaFinal . " 23:59:59' and activo = 'S' and cveEstatusAudiencia = 2 and cveCatAudiencia = " . $audiencia . ";";
            $this->_proveedor->execute($sql);
            if (!$this->_proveedor->error()) {
                if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                    while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                        $fecha[$contador]["idjuzgador"] = $row["cveUsuario"];
                        $contador++;
                    }
                }
            }
            $horasMes[$audiencia] = count($fecha);
        }
        return $horasMes;
    }

    ########

    public function getOrdenesHorasLinea($fechaInicial, $fechaFinal) {
        $this->_conexion();
        #OBTENEMOS FECHA ACTUAL
        $horasMes = "";

        $fecha = array();
        $contado = 0;
        $sql = "select o.fechaRespuesta, o.fechaRegistro from tblsolicitudesordenes s, tblordenes o "
                . "where s.idSolicitudOrden = o.idSolicitudOrden and s.cveEstatusSolicitudOrden=3 and o.fechaRegistro >= '" . $fechaInicial . " 00:00:00' and o.fechaRegistro <= '" . $fechaFinal . " 23:59:59';";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["fechaInicial"] = $row["fechaRegistro"];
                    $fecha[$contador]["fechaFinal"] = $row["fechaRespuesta"];
                    $contador++;
                }
            }
        }


        $minutosMesTotoal = 0;
        $minutosMes = 0;
        foreach ($fecha as $fech) {

            $minutosMes = round((strtotime($fech["fechaFinal"]) - strtotime($fech["fechaInicial"])) / 60);
            $minutosMesTotoal += $minutosMes;
        }
        return $horasMes = ceil($minutosMesTotoal / 60);
    }

    public function getJuzgadorOrdenesLinea($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";

        $fecha = array();
        $contador = 0;
        $sql = "select  j.idJuzgador
            from tblsolicitudesordenes s, tblordenes o, tbljuzgadoresordenes j
            where s.idSolicitudOrden = o.idSolicitudOrden and s.cveEstatusSolicitudOrden=3 and o.fechaRegistro >= '" . $fechaInicial . " 00:00:00' 
            and o.fechaRegistro <= '" . $fechaFinal . " 23:59:59' and j.idsolicitudOrden = s.idsolicitudOrden group by j.idJuzgador;";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["idjuzgador"] = $row["idJuzgador"];
                    $contador++;
                }
            }
            $horasMes = count($fecha);
        }
        return $horasMes;
    }

    public function getMpOrdenesLinea($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";


        $fecha = array();
        $contador = 0;
        $sql = "select  
                cveUsuario
                from tblsolicitudesordenes 
                where fechaRegistro >= '" . $fechaInicial . " 00:00:00' and fechaRegistro <= '" . $fechaFinal . " 23:59:59' AND cveEstatusSolicitudOrden=3 group by cveUsuario";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["idjuzgador"] = $row["cveUsuario"];
                    $contador++;
                }
            }
        }
        $horasMes = count($fecha);

        return $horasMes;
    }

    public function getSolicitudOrdenLinea($fechaInicial, $fechaFinal) {
        $this->_conexion();

        #OBTENEMOS FECHA ACTUAL
        $horasMes = "";

        $fecha = array();
        $contador = 0;
        $sql = "select  
                    cveUsuario
                from tblsolicitudesordenes 
                where fechaRegistro >= '" . $fechaInicial . " 00:00:00' and fechaRegistro <= '" . $fechaFinal . " 23:59:59' AND cveEstatusSolicitudOrden=3";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["fechaInicial"] = $row["fechaRegistro"];
                    $contador++;
                }
            }
        }
        $horasMes = count($fecha);

        return $horasMes;
    }

    ########

    public function getCateosHorasControl($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";

        $fecha = array();
        $contado = 0;
        $sql = "select o.fechaRespuesta, o.fechaRegistro from tblsolicitudescateos s, tblcateos o "
                . "where s.idSolicitudCateo = o.idSolicitudCateo and (s.cveEstatusSolicitudCateo=3 or s.cveEstatusSolicitudCateo>=5) "
                . "and o.fechaRegistro >= '" . $fechaInicial . " 00:00:00' and o.fechaRegistro <= '" . $fechaFinal . " 23:59:59';";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["fechaInicial"] = $row["fechaRegistro"];
                    $fecha[$contador]["fechaFinal"] = $row["fechaRespuesta"];
                    $contador++;
                }
            }
        }


        $minutosMesTotoal = 0;
        $minutosMes = 0;
        foreach ($fecha as $fech) {
            $minutosMes = round((strtotime($fech["fechaFinal"]) - strtotime($fech["fechaInicial"])) / 60);
            $minutosMesTotoal += $minutosMes;
        }
        $horasMes = ceil($minutosMesTotoal / 60);

        return $horasMes;
    }

    public function getJuzgadorCateosControl($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";

        $fecha = array();
        $contador = 0;
        $sql = "select j.idJuzgador
            from tblsolicitudescateos s, tblcateos o, tbljuzgadorescateos j
            where s.idSolicitudCateo = o.idSolicitudCateo and s.cveEstatusSolicitudCateo=3 and o.fechaRegistro >= '" . $fechaInicial . " 00:00:00' 
            and o.fechaRegistro <= '" . $fechaFinal . " 23:59:59' and j.idsolicitudCateo = s.idsolicitudCateo AND (s.cveEstatusSolicitudCateo=3 or s.cveEstatusSolicitudCateo>=5) group by j.idJuzgador";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["idjuzgador"] = $row["idJuzgador"];
                    $contador++;
                }
            }
        }

        $horasMes = count($fecha);
        return $horasMes;
    }

    public function getMpCateoControl($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";


        $fecha = array();
        $contador = 0;
        $sql = "select  
                    cveUsuario
                from tblsolicitudescateos 
                where fechaRegistro >= '" . $fechaInicial . " 00:00:00' and fechaRegistro <= '" . $fechaFinal . " 23:59:59' AND (cveEstatusSolicitudCateo=3 or cveEstatusSolicitudCateo>=5) group by cveUsuario";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["idjuzgador"] = $row["cveUsuario"];
                    $contador++;
                }
            }
        }
        $horasMes = count($fecha);

        return $horasMes;
    }

    public function getSolicitudCateoControl($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";

        $fecha = array();
        $contador = 0;
        $sql = "select  
                    cveUsuario
                from tblsolicitudescateos 
                where fechaRegistro >= '" . $fechaInicial . " 00:00:00' and fechaRegistro <= '" . $fechaFinal . " 23:59:59' AND (cveEstatusSolicitudCateo=3 or cveEstatusSolicitudCateo>=5)";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["cveUsuario"] = $row["cveUsuario"];
                    $contador++;
                }
            }
        }

        $horasMes = count($fecha);

        return $horasMes;
    }

    ########

    public function getCateosHorasLinea($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";

        $fecha = array();
        $contado = 0;
        $sql = "select o.fechaRespuesta, o.fechaRegistro from tblsolicitudescateos s, tblcateos o "
                . "where s.idSolicitudCateo = o.idSolicitudCateo and (s.cveEstatusSolicitudCateo=3 or s.cveEstatusSolicitudCateo>=5) "
                . "and o.fechaRegistro >= '" . $fechaInicial . " 00:00:00' and o.fechaRegistro <= '" . $fechaFinal . " 23:59:59';";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["fechaInicial"] = $row["fechaRegistro"];
                    $fecha[$contador]["fechaFinal"] = $row["fechaRespuesta"];
                    $contador++;
                }
            }
        }

        $minutosMesTotoal = 0;
        $minutosMes = 0;
        foreach ($fecha as $fech) {

            $minutosMes = round((strtotime($fech["fechaFinal"]) - strtotime($fech["fechaInicial"])) / 60);
            $minutosMesTotoal += $minutosMes;
        }
        $horasMes = ceil($minutosMesTotoal / 60);

        return $horasMes;
    }

    public function getJuzgadorCateosLinea($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";

        $fecha = array();
        $contador = 0;
        $sql = "select j.idJuzgador
            from tblsolicitudescateos s, tblcateos o, tbljuzgadorescateos j
            where s.idSolicitudCateo = o.idSolicitudCateo and s.cveEstatusSolicitudCateo=3 and o.fechaRegistro >= '" . $fechaInicial . " 00:00:00' 
            and o.fechaRegistro <= '" . $fechaFinal . " 23:59:59' and j.idsolicitudCateo = s.idsolicitudCateo AND (s.cveEstatusSolicitudCateo=3 or s.cveEstatusSolicitudCateo>=5) group by j.IdJuzgador";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["idjuzgador"] = $row["idJuzgador"];
                    $contador++;
                }
            }
        }

        $horasMes = count($fecha);
        return $horasMes;
    }

    public function getMpCateoLinea($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";


        $fecha = array();
        $contador = 0;
        $sql = "select  cveUsuario
                from tblsolicitudescateos 
                where fechaRegistro >= '" . $fechaInicial . " 00:00:00' and fechaRegistro <= '" . $fechaFinal . " 23:59:59' AND (cveEstatusSolicitudCateo=3 or cveEstatusSolicitudCateo>=5) group by cveUsuario";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["idjuzgador"] = $row["cveUsuario"];
                    $contador++;
                }
            }
        }

        $horasMes = count($fecha);

        return $horasMes;
    }

    public function getSolicitudCateoLnea($fechaInicial, $fechaFinal) {
        $this->_conexion();

        $horasMes = "";

        $fecha = array();
        $contador = 0;
        $sql = "select  
                    cveUsuario
                from tblsolicitudescateos 
                where fechaRegistro >= '" . $fechaInicial . " 00:00:00' and fechaRegistro <= '" . $fechaFinal . " 23:59:59' AND (cveEstatusSolicitudCateo=3 or cveEstatusSolicitudCateo>=5)";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha[$contador]["cveUsuario"] = $row["cveUsuario"];
                    $contador++;
                }
            }
        }

        $horasMes = count($fecha);

        return $horasMes;
    }

}

@$action = $_POST["action"];
@$fechaInicial = $_POST["fechaInicial"];
@$fechaFinal = $_POST["fechaFinal"];
$reportes = new reportes();
if ($action == "1") {
    $json = '';
    $json .= '{';
    $json .= '"datos":{';
    $json .= '"ordenesHorasControl":';
    $json .= json_encode($reportes->getOrdenesHorasControl($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"ordenesJuzgadoresControl":';
    $json .= json_encode($reportes->getOrdenesJuzgadorControl($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"ordenesMpsControl":';
    $json .= json_encode($reportes->getOrdenesMpControl($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"ordenesSolicitudesControl":';
    $json .= json_encode($reportes->getOrdenesSolicitudControl($fechaInicial, $fechaFinal));
    $json .= '}';
    $json .= '}';
    echo $json;
} else if ($action == "2") {
    $json = '';
    $json .= '{';
    $json .= '"datos":{';
    $json .= '"ordenesHorasEspecializado":';
    $json .= json_encode($reportes->getOrdenesHorasLinea($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"ordenesJuzgadoresEspecializado":';
    $json .= json_encode($reportes->getJuzgadorOrdenesLinea($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"ordenesMpsEspecializado":';
    $json .= json_encode($reportes->getMpOrdenesLinea($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"ordenesSolicitudesEspecializado":';
    $json .= json_encode($reportes->getSolicitudOrdenLinea($fechaInicial, $fechaFinal));
    $json .= '}';
    $json .= '}';
    echo $json;
} else if ($action == "3") {
    $json = '';
    $json .= '{';
    $json .= '"datos":{';
    $json .= '"cateosHorasControl":';
    $json .= json_encode($reportes->getCateosHorasControl($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"cateosJuzgadoresControl":';
    $json .= json_encode($reportes->getJuzgadorCateosControl($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"cateosMpsControl":';
    $json .= json_encode($reportes->getMpCateoControl($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"cateosSolicitudesControl":';
    $json .= json_encode($reportes->getSolicitudCateoControl($fechaInicial, $fechaFinal));
    $json .= '}';
    $json .= '}';
    echo $json;
} else if ($action == "4") {
    $json = '';
    $json .= '{';
    $json .= '"datos":{';
    $json .= '"cateosHorasEspecializado":';
    $json .= json_encode($reportes->getCateosHorasLinea($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"cateosJuzgadoresEspecializado":';
    $json .= json_encode($reportes->getJuzgadorCateosLinea($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"cateosMpsEspecializado":';
    $json .= json_encode($reportes->getMpCateoLinea($fechaInicial, $fechaFinal));
    $json .= ',';
    $json .= '"cateosSolicitudesEspecializado":';
    $json .= json_encode($reportes->getSolicitudCateoLnea($fechaInicial, $fechaFinal));
    $json .= '}';
    $json .= '}';
    echo $json;
}
?>

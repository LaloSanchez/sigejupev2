<?php

class AutoRadicacionEjecucionDao {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function selectSentencias($actuacionesDto, $orden = '', $proveedor = null)
    {

        $tmp = "";
        $contador = 0;

        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        /*
         * se seleccionan las sentencia que el tipo de sentencia sea condenatoria o mixta (1 o 3)
         */
        $sql = "SELECT a.idActuacion, a.Sintesis, s.desTipoSentencia, a.fechaSentencia, a.fechaEjecutoria, a.fechaRegistro";
        $sql .= " FROM  tblactuaciones a";
        $sql .= " LEFT JOIN  tbltipossentencias s ON a.cveTipoSentencia = s.cveTipoSentencia";
        $sql .= " JOIN tblactuacionesestatus ae ON a.idActuacion = ae.idActuacion";
        $sql .= " JOIN tblestatus e ON ae.cveEstatus = e.cveEstatus";
        $sql .= " WHERE a.idActuacion IN (SELECT idActuacion FROM tblimputadossentencias WHERE activo = 'S')";
        $sql .= " AND (a.cveTipoSentencia = 1 OR a.cveTipoSentencia = 3)";
        $sql .= " AND ae.cveEstatus = 12 and ae.activo = 'S'";
        $sql .= " AND e.cveTipoEstatus = 7 AND e.activo = 'S'";

        if ($actuacionesDto->getCveTipoActuacion() != '' || $actuacionesDto->getCveTipoCarpeta() != '' || $actuacionesDto->getNumero() != '' || $actuacionesDto->getAnio() != '' || $actuacionesDto->getActivo() != '' || $actuacionesDto->getCveJuzgado() != '') {
            $sql .= ' AND ';
        }

        if ($actuacionesDto->getCveTipoActuacion() != '') {
            $sql .= "a.cveTipoActuacion = '" . $actuacionesDto->getCveTipoActuacion() . "'";
            if ($actuacionesDto->getCveTipoCarpeta() != '' || $actuacionesDto->getNumero() != '' || $actuacionesDto->getAnio() != '' || $actuacionesDto->getActivo() != '') {
                $sql .= " AND ";
            }
        }

        if ($actuacionesDto->getCveTipoCarpeta() != '') {
            $sql .= "a.cveTipoCarpeta = '" . $actuacionesDto->getCveTipoCarpeta() . "'";
            if ($actuacionesDto->getNumero() != '' || $actuacionesDto->getAnio() != '' || $actuacionesDto->getActivo() != '') {
                $sql .= " AND ";
            }
        }

        if ($actuacionesDto->getNumero() != '') {
            $sql .= "a.numero = '" . $actuacionesDto->getNumero() . "'";
            if ($actuacionesDto->getAnio() != '' || $actuacionesDto->getActivo() != '') {
                $sql .= " AND ";
            }
        }

        if ($actuacionesDto->getAnio() != '') {
            $sql .= "a.anio = '" . $actuacionesDto->getAnio() . "'";
            if ($actuacionesDto->getActivo() != '') {
                $sql .= " AND ";
            }
        }

        if ($actuacionesDto->getActivo() != '') {
            $sql .= "a.activo = '" . $actuacionesDto->getActivo() . "'";
            if ($actuacionesDto->getCveJuzgado() != '') {
                $sql .= " AND ";
            }
        }

        if ($actuacionesDto->getCveJuzgado() != '') {
            $sql .= "a.cveJuzgado = '" . $actuacionesDto->getCveJuzgado() . "'";
        }


        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        /*print_r($sql);
        die;*/
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                $numField = mysqli_num_fields($this->_proveedor->stmt);

                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = [];
                    $tmp[$contador]['idActuacion'] = $row["idActuacion"];
                    $tmp[$contador]['Sintesis'] = utf8_encode($row["Sintesis"]);
                    $tmp[$contador]['desTipoSentencia'] = $row["desTipoSentencia"];
                    $tmp[$contador]['fechaSentencia'] = date_format(date_create($row["fechaSentencia"]), 'd/m/Y');
                    $tmp[$contador]['fechaEjecutoria'] = date_format(date_create($row["fechaEjecutoria"]), 'd/m/Y');
                    $tmp[$contador]['fechaRegistro'] = $row["fechaRegistro"];
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
        //echo $sql;
        error_log($sql);
        unset($contador);
        unset($sql);

        return $tmp;

    }

    public function selectImputadosDeSentencia($actuacionesDto, $orden = '', $proveedor = null)
    {
        $tmp = "";
        $contador = 0;

        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT a.idActuacion,ise.idImpOfeDelCarpeta, imfd.idImputadoCarpeta, ic.cveTipoPersona, CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) as nombreFisica, ic.nombreMoral , a.fechaSentencia, a.fechaEjecutoria
                FROM tblimputadossentencias ise
                JOIN tblactuaciones a ON ise.idActuacion = a.idActuacion
                JOIN tblimpofedelcarpetas imfd ON imfd.idImpOfeDelCarpeta = ise.idImpOfeDelCarpeta
                JOIN tblimputadoscarpetas ic ON ic.idImputadoCarpeta = imfd.idImputadoCarpeta
                WHERE ise.activo = 'S'
                AND imfd.activo = 'S'
                AND ic.activo = 'S'";

        $sql .= " AND ise.idActuacion = " . $actuacionesDto->getIdActuacion();
        $sql .= " AND ise.idImpOfeDelCarpeta NOT IN(SELECT idImpOfeDelCarpeta FROM tblimputadosejecsentencias WHERE activo = 'S')";
        $sql .= " GROUP BY imfd.idImputadoCarpeta";
        $sql .= " ORDER BY nombreFisica ASC, nombreMoral ASC";


        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                $numField = mysqli_num_fields($this->_proveedor->stmt);

                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = [];
                    $tmp[$contador]['idActuacion'] = $row["idActuacion"];
                    $tmp[$contador]['idImpOfeDelCarpeta'] = $row["idImpOfeDelCarpeta"];
                    $tmp[$contador]['idImputadoCarpeta'] = $row["idImputadoCarpeta"];
                    $tmp[$contador]['cveTipoPersona'] = $row["cveTipoPersona"];
                    $tmp[$contador]['nombreFisica'] = utf8_encode($row["nombreFisica"]);
                    $tmp[$contador]['nombreMoral'] = utf8_encode($row["nombreMoral"]);
                    $tmp[$contador]['fechaSentencia'] = date_format(date_create($row["fechaSentencia"]), 'd/m/Y');
                    $tmp[$contador]['fechaEjecutoria'] = date_format(date_create($row["fechaEjecutoria"]), 'd/m/Y');
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
        //echo $sql;
        error_log($sql);
        unset($contador);
        unset($sql);

        return $tmp;

    }

    public function selectImputadosDeSentenciaByIdImputadoSentencia($idActuacion, $orden = '', $proveedor = null)
    {
        $tmp = "";
        $contador = 0;

        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT a.idActuacion,ise.idImpOfeDelCarpeta, imfd.idImputadoCarpeta, ic.cveTipoPersona, CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) as nombreFisica, ic.nombreMoral , a.fechaSentencia, a.fechaEjecutoria
                FROM tblimputadossentencias ise
                JOIN tblactuaciones a ON ise.idActuacion = a.idActuacion
                JOIN tblimpofedelcarpetas imfd ON imfd.idImpOfeDelCarpeta = ise.idImpOfeDelCarpeta
                JOIN tblimputadoscarpetas ic ON ic.idImputadoCarpeta = imfd.idImputadoCarpeta
                WHERE ise.activo = 'S'
                AND imfd.activo = 'S'";

        $sql .= " AND ise.idActuacion = " . $idActuacion;

        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                $numField = mysqli_num_fields($this->_proveedor->stmt);

                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = [];
                    $tmp[$contador]['idActuacion'] = $row["idActuacion"];
                    $tmp[$contador]['idImpOfeDelCarpeta'] = $row["idImpOfeDelCarpeta"];
                    $tmp[$contador]['idImputadoCarpeta'] = $row["idImputadoCarpeta"];
                    $tmp[$contador]['cveTipoPersona'] = $row["cveTipoPersona"];
                    $tmp[$contador]['nombreFisica'] = utf8_encode($row["nombreFisica"]);
                    $tmp[$contador]['nombreMoral'] = utf8_encode($row["nombreMoral"]);
                    $tmp[$contador]['fechaSentencia'] = date_format(date_create($row["fechaSentencia"]), 'd/m/Y');
                    $tmp[$contador]['fechaEjecutoria'] = date_format(date_create($row["fechaEjecutoria"]), 'd/m/Y');
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
        //echo $sql;
        error_log($sql);
        unset($contador);
        unset($sql);

        return $tmp;

    }

    public function selectAutosRadicacionEjecucionSentencias($dataDto, $orden, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;

        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT imfd.idImputadoCarpeta, ic.cveTipoPersona, CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) as nombreFisica, ic.nombreMoral , CONCAT_WS('/', a.numero, a.anio) as causa, a.fechaSentencia, a.fechaEjecutoria, ise.numExp, ise.AniExp
               FROM tblimputadosejecsentencias ise
               JOIN tblactuaciones a ON ise.idActuacion = a.idActuacion
               JOIN tblimpofedelcarpetas imfd ON imfd.idImpOfeDelCarpeta = ise.idImpOfeDelCarpeta
               JOIN tblimputadoscarpetas ic ON ic.idImputadoCarpeta = imfd.idImputadoCarpeta
               WHERE ise.activo = 'S'
               ";

        if ($dataDto->idActuacion != '') {
            $sql .= " AND a.idActuacion = " . $dataDto->idActuacion;
        }

        if ($dataDto->numerocausa != '') {
            $sql .= " AND a.numero = " . $dataDto->numerocausa;
        }

        if ($dataDto->aniocausa != '') {
            $sql .= " AND a.anio = " . $dataDto->aniocausa;
        }

        if ($dataDto->numeroExpediente != '') {
            $sql .= " AND ise.numExp = " . $dataDto->numeroExpediente;
        }

        if ($dataDto->anioExpediente != '') {
            $sql .= " AND ise.AniExp = " . $dataDto->anioExpediente;
        }

        if ($dataDto->nombreImputado != '') {
            $sql .= " AND IF(ic.cveTipoPersona = '1',CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno), ic.nombreMoral) LIKE '%" . $dataDto->nombreImputado . "%'";
        }

        if ($dataDto->fechaInicio != '' && $dataDto->fechaFin != '') {
            $sql .= " AND DATE(ise.fechaRegistro) BETWEEN '" . $dataDto->fechaInicio . "' AND '" . $dataDto->fechaFin . "'";
        }

        $pagina = $dataDto->pagina;

        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        $this->_proveedor->execute($sql);

        $totalRegistros = $this->_proveedor->rows($this->_proveedor->stmt);

        $sql .= ' ORDER BY numExp DESC, AniExp DESC LIMIT ' . $dataDto->porPagina . ' OFFSET ' . $dataDto->offset;


        $this->_proveedor->execute($sql);


        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                $numField = mysqli_num_fields($this->_proveedor->stmt);

                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = [];
                    $tmp[$contador]['idImputadoCarpeta'] = $row["idImputadoCarpeta"];
                    $tmp[$contador]['cveTipoPersona'] = $row["cveTipoPersona"];
                    $tmp[$contador]['nombreFisica'] = utf8_encode($row["nombreFisica"]);
                    $tmp[$contador]['nombreMoral'] = utf8_encode($row["nombreMoral"]);
                    $tmp[$contador]['causa'] = utf8_encode($row['causa']);
                    $tmp[$contador]['fechaSentencia'] = date_format(date_create($row["fechaSentencia"]), 'd/m/Y');
                    $tmp[$contador]['fechaEjecutoria'] = date_format(date_create($row["fechaEjecutoria"]), 'd/m/Y');
                    $tmp[$contador]['numExp'] = utf8_encode($row["numExp"]);
                    $tmp[$contador]['aniExp'] = utf8_encode($row["AniExp"]);

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
        //echo $sql;
        error_log($sql);
        unset($contador);
        unset($sql);


        $response = [
            'total'     => $totalRegistros,
            'pagina'    => $pagina,
            'registros' => $tmp
        ];

        return $response;


    }

}
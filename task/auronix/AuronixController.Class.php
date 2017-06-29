<?php

error_reporting(0);

class AuronixController {

    private $ulrAuronix;

    public function __construct() {
        
    }

    public function getDetalleAudiencia($IdAudiencia, $url, $conexion, $proceso = "automatico") {
        $this->urlAuronix = $url;
        #obtiene información de:
        #audiencia registrada#juzgado#tipo de audiencia#jueces#ofendidos#defensor ofendido#imputado#defensor imputado#delitos
        $arrayDetalleAudiencias = Array();
        $arrayReturn = array();
        $arrayAudiencias = Array();
        $sql = "select A.idAudiencia,A.idSolicitudAudiencia,";
        $sql .= "A.fechaInicial,A.fechaFinal,A.idAudienciaAuronix,";
        $sql .= "A.cveJuzgadoDesahoga,J.desJuzgado, JA.descJuzgadoAuronix,";
        $sql .= "A.cveSala,S.desSala,";
        $sql .= "A.cveCatAudiencia, CA.desCatAudiencia ";
        $sql .= "from tblaudiencias A, tbljuzgados J, tblsalas S, tblcataudiencias CA, tbljuzgadosauronix as JA ";
        $sql .= "where A.idAudiencia = " . $IdAudiencia . " ";
        $sql .= "and A.cveJuzgadoDesahoga = J.cveJuzgado ";
        $sql .= "and A.cveSala = S.cveSala  ";
        $sql .= "and A.cveCatAudiencia = CA.cveCatAudiencia  ";
        $sql .= "and J.CveJuzgado = JA.cveJuzgadoDepende ";

        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                $index = 0;
                while ($rowsAudiencias = $conexion->fetch_array($conexion->stmt, 0)) {
                    $arrayAudiencias[$index]["idAudiencia"] = utf8_encode($rowsAudiencias["idAudiencia"]);
                    $arrayAudiencias[$index]["idSolicitudAudiencia"] = utf8_encode($rowsAudiencias["idSolicitudAudiencia"]);
                    $arrayAudiencias[$index]["fechaInicial"] = utf8_encode($rowsAudiencias["fechaInicial"]);
                    $arrayAudiencias[$index]["fechaFinal"] = utf8_encode($rowsAudiencias["fechaFinal"]);
                    $arrayAudiencias[$index]["idAudienciaAuronix"] = utf8_encode($rowsAudiencias["idAudienciaAuronix"]);
                    $arrayAudiencias[$index]["cveJuzgadoDesahoga"] = utf8_encode($rowsAudiencias["cveJuzgadoDesahoga"]);
                    $arrayAudiencias[$index]["desJuzgado"] = utf8_encode($rowsAudiencias["desJuzgado"]);
                    $arrayAudiencias[$index]["descJuzgadoAuronix"] = utf8_encode($rowsAudiencias["descJuzgadoAuronix"]);
                    $arrayAudiencias[$index]["cveSala"] = utf8_encode($rowsAudiencias["cveSala"]);
                    $arrayAudiencias[$index]["desSala"] = utf8_encode($rowsAudiencias["desSala"]);
                    $arrayAudiencias[$index]["cveCatAudiencia"] = utf8_encode($rowsAudiencias["cveCatAudiencia"]);
                    $arrayAudiencias[$index]["desCatAudiencia"] = utf8_encode($rowsAudiencias["desCatAudiencia"]);
                    $index++;
                }
            }
        }

        if ($arrayAudiencias != "" && count($arrayAudiencias) > 0) {
            foreach ($arrayAudiencias as $arrayAudiencia) {
                $arrayJueces = array();
                $arraySolicitud = array();
                $arrayOfendidos = array();
                $arrayDefensoresOfendidos = array();
                $arrayImputados = array();
                $arrayDefensoresImputados = array();
                $arrayDelitos = array();

                $sql = "select AJ.idAudienciaJuez, AJ.idAudiencia, AJ.idJuzgador, J.cveTipoJuzgador, J.numEMpleado, J.nombre, J.paterno, J.materno ";
                $sql .= "from tblaudienciasjuzgador as AJ, tbljuzgadores as J ";
                $sql .= "where AJ.idAudiencia = " . $arrayAudiencia["idAudiencia"] . " ";
                $sql .= "and  AJ.idJuzgador =  J.idJuzgador ";

                $conexion->execute($sql);
                if (!$conexion->error()) {
                    if ($conexion->rows($conexion->stmt) > 0) {
                        $index = 0;
                        while ($rowsJueces = $conexion->fetch_array($conexion->stmt, 0)) {
                            $arrayJueces[$index]["idAudienciaJuez"] = utf8_encode($rowsJueces["idAudienciaJuez"]);
                            $arrayJueces[$index]["idAudiencia"] = utf8_encode($rowsJueces["idAudiencia"]);
                            $arrayJueces[$index]["idJuzgador"] = utf8_encode($rowsJueces["idJuzgador"]);
                            $arrayJueces[$index]["cveTipoJuzgador"] = utf8_encode($rowsJueces["cveTipoJuzgador"]);
                            $arrayJueces[$index]["numEMpleado"] = utf8_encode($rowsJueces["numEMpleado"]);
                            $arrayJueces[$index]["nombre"] = utf8_encode($rowsJueces["nombre"]);
                            $arrayJueces[$index]["paterno"] = utf8_encode($rowsJueces["paterno"]);
                            $arrayJueces[$index]["materno"] = utf8_encode($rowsJueces["materno"]);
                            $index++;
                        }
                    }
                }

                $sql = "select idSolicitudAudiencia,cveTipoCarpeta,numero,anio,carpetaInv,nuc,cveNaturaleza ";
                $sql .= "from tblsolicitudesaudiencias ";
                $sql .= "where idSolicitudAudiencia = " . $arrayAudiencia["idSolicitudAudiencia"] . " ";
                $conexion->execute($sql);
                if (!$conexion->error()) {
                    if ($conexion->rows($conexion->stmt) > 0) {
                        while ($rowsSolicitud = $conexion->fetch_array($conexion->stmt, 0)) {
                            $arraySolicitud["idSolicitudAudiencia"] = utf8_encode($rowsSolicitud["idSolicitudAudiencia"]);
                            $arraySolicitud["cveTipoCarpeta"] = utf8_encode($rowsSolicitud["cveTipoCarpeta"]);
                            $arraySolicitud["numero"] = utf8_encode($rowsSolicitud["numero"]);
                            $arraySolicitud["anio"] = utf8_encode($rowsSolicitud["anio"]);
                            $arraySolicitud["carpetaInv"] = utf8_encode($rowsSolicitud["carpetaInv"]);
                            $arraySolicitud["nuc"] = utf8_encode($rowsSolicitud["nuc"]);
                            $arraySolicitud["cveNaturaleza"] = utf8_encode($rowsSolicitud["cveNaturaleza"]);
                        }
                    }
                }

                $sql = "Select idOfendidoSolicitud,idSolicitudAudiencia,nombre,paterno,materno,cveTipoPersona,nombreMoral ";
                $sql .= "from tblofendidossolicitudes ";
                $sql .= "where idSolicitudAudiencia = " . $arrayAudiencia["idSolicitudAudiencia"] . " ";
                $conexion->execute($sql);
                if (!$conexion->error()) {
                    if ($conexion->rows($conexion->stmt) > 0) {
                        $index = 0;
                        while ($rowsOfendidos = $conexion->fetch_array($conexion->stmt, 0)) {
                            $arrayOfendidos[$index]["idOfendidoSolicitud"] = utf8_encode($rowsOfendidos["idOfendidoSolicitud"]);
                            $arrayOfendidos[$index]["idSolicitudAudiencia"] = utf8_encode($rowsOfendidos["idSolicitudAudiencia"]);
                            $arrayOfendidos[$index]["nombre"] = utf8_encode($rowsOfendidos["nombre"]);
                            $arrayOfendidos[$index]["paterno"] = utf8_encode($rowsOfendidos["paterno"]);
                            $arrayOfendidos[$index]["materno"] = utf8_encode($rowsOfendidos["materno"]);
                            $arrayOfendidos[$index]["cveTipoPersona"] = utf8_encode($rowsOfendidos["cveTipoPersona"]);
                            $arrayOfendidos[$index]["nombreMoral"] = utf8_encode($rowsOfendidos["nombreMoral"]);
                            $index++;
                        }
                    }
                }

                if ($arrayOfendidos != "" && count($arrayOfendidos) > 0) {
                    $index = 0;
                    foreach ($arrayOfendidos as $arrayOfendido) {
                        $sql = "Select idDefensorOfendidoSolicitud,idOfendidoSolicitud,nombre ";
                        $sql .= "from tbldefensoresofendidossolicitudes ";
                        $sql .= "where idOfendidoSolicitud = " . $arrayOfendido["idOfendidoSolicitud"] . " ";
                        $conexion->execute($sql);
                        if (!$conexion->error()) {
                            if ($conexion->rows($conexion->stmt) > 0) {
                                while ($rowsDefensoresOfendidos = $conexion->fetch_array($conexion->stmt, 0)) {
                                    $arrayDefensoresOfendidos[$index]["idDefensorOfendidoSolicitud"] = utf8_encode($rowsDefensoresOfendidos["idDefensorOfendidoSolicitud"]);
                                    $arrayDefensoresOfendidos[$index]["idOfendidoSolicitud"] = utf8_encode($rowsDefensoresOfendidos["idOfendidoSolicitud"]);
                                    $arrayDefensoresOfendidos[$index]["nombre"] = utf8_encode($rowsDefensoresOfendidos["nombre"]);
                                    $index++;
                                }
                            }
                        }
                    }
                }

                $sql = "Select idImputadoSolicitud,idSolicitudAudiencia,nombre,paterno,materno,cveTipoPersona,nombreMoral ";
                $sql .= "from tblimputadossolicitudes ";
                $sql .= "where idSolicitudAudiencia = " . $arrayAudiencia["idSolicitudAudiencia"] . " and activo = 'S' ";
                $conexion->execute($sql);
                if (!$conexion->error()) {
                    if ($conexion->rows($conexion->stmt) > 0) {
                        $index = 0;
                        while ($rowsImputados = $conexion->fetch_array($conexion->stmt, 0)) {
                            $arrayImputados[$index]["idImputadoSolicitud"] = utf8_encode($rowsImputados["idImputadoSolicitud"]);
                            $arrayImputados[$index]["idSolicitudAudiencia"] = utf8_encode($rowsImputados["idSolicitudAudiencia"]);
                            $arrayImputados[$index]["nombre"] = utf8_encode($rowsImputados["nombre"]);
                            $arrayImputados[$index]["paterno"] = utf8_encode($rowsImputados["paterno"]);
                            $arrayImputados[$index]["materno"] = utf8_encode($rowsImputados["materno"]);
                            $arrayImputados[$index]["cveTipoPersona"] = utf8_encode($rowsImputados["cveTipoPersona"]);
                            $arrayImputados[$index]["nombreMoral"] = utf8_encode($rowsImputados["nombreMoral"]);
                            $index++;
                        }
                    }
                }

                if ($arrayImputados != "" && count($arrayImputados) > 0) {
                    $index = 0;
                    foreach ($arrayImputados as $arrayImputado) {
                        $sql = "Select idDefensorImputadoSolicitud,idImputadoSolicitud,nombre ";
                        $sql .= "from tbldefensoresimputadossolicitudes ";
                        $sql .= "where idImputadoSolicitud = " . $arrayImputado["idImputadoSolicitud"] . " ";
                        $conexion->execute($sql);
                        if (!$conexion->error()) {
                            if ($conexion->rows($conexion->stmt) > 0) {
                                while ($rowsDefensoresImputados = $conexion->fetch_array($conexion->stmt, 0)) {
                                    $arrayDefensoresImputados[$index]["idDefensorImputadoSolicitud"] = utf8_encode($rowsDefensoresImputados["idDefensorImputadoSolicitud"]);
                                    $arrayDefensoresImputados[$index]["idImputadoSolicitud"] = utf8_encode($rowsDefensoresImputados["idImputadoSolicitud"]);
                                    $arrayDefensoresImputados[$index]["nombre"] = utf8_encode($rowsDefensoresImputados["nombre"]);
                                    $index++;
                                }
                            }
                        }
                    }
                }

                $sql = "Select DS.idDelitoSolicitud, DS.cveDelito, DS.idSolicitudAudiencia, D.desDelito ";
                $sql .= "from tbldelitossolicitudes as DS, tbldelitos as D ";
                $sql .= "where DS.idSolicitudAudiencia = " . $arrayAudiencia["idSolicitudAudiencia"] . " ";
                $sql .= "and DS.CveDelito = d.CveDelito ";
                $conexion->execute($sql);
                if (!$conexion->error()) {
                    if ($conexion->rows($conexion->stmt) > 0) {
                        $index = 0;
                        while ($rowsDelitos = $conexion->fetch_array($conexion->stmt, 0)) {
                            $arrayDelitos[$index]["idDelitoSolicitud"] = utf8_encode($rowsDelitos["idDelitoSolicitud"]);
                            $arrayDelitos[$index]["cveDelito"] = utf8_encode($rowsDelitos["cveDelito"]);
                            $arrayDelitos[$index]["idSolicitudAudiencia"] = utf8_encode($rowsDelitos["idSolicitudAudiencia"]);
                            $arrayDelitos[$index]["desDelito"] = utf8_encode($rowsDelitos["desDelito"]);
                            $index++;
                        }
                    }
                }

                $arrayDetalleAudiencias["audiencia"] = $arrayAudiencia;
                $arrayDetalleAudiencias["solicitud"] = $arraySolicitud;
                $arrayDetalleAudiencias["jueces"] = $arrayJueces;
                $arrayDetalleAudiencias["ofendidos"] = $arrayOfendidos;
                $arrayDetalleAudiencias["ofendidosDefensor"] = $arrayDefensoresOfendidos;
                $arrayDetalleAudiencias["imputados"] = $arrayImputados;
                $arrayDetalleAudiencias["imputadosDefensor"] = $arrayDefensoresImputados;
                $arrayDetalleAudiencias["delitos"] = $arrayDelitos;

                if ($arrayAudiencia["idAudienciaAuronix"] === "" || $arrayAudiencia["idAudienciaAuronix"] === "0") {
                    $arrayReturn = $this->insertAudiencia($arrayDetalleAudiencias, $conexion, $proceso);
                } else {
                    $arrayReturn = $this->updateAudiencia($arrayDetalleAudiencias, $conexion, $proceso);
                }
            }
        }
        return $arrayReturn;
    }

    public function selectTodasAudiencias() {
        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, "http://187.163.162.238:8090/SASA/index.php?r=api/hearings");
        curl_setopt($ch, CURLOPT_URL, $this->urlAuronix . "/index.php?r=api/hearings");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "sigejupe:BsKfxi2REvKS");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $output = curl_exec($ch);
        $output = json_decode($output, true);
        curl_close($ch);
        return $output;
    }

    public function selectTodasAudienciasFechas($fecha, $juzgado = null, $conexion) {
        $sql = "SELECT UNIX_TIMESTAMP('" . $fecha . " 00:00:00') as FechaAudienciasInicio";
        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                while ($rowsFecha = $conexion->fetch_array($conexion->stmt, 0)) {
                    $fechaInicio = $rowsFecha["FechaAudienciasInicio"];
                }
            }
        }

        $sql = "SELECT UNIX_TIMESTAMP('" . $fecha . " 23:59:59') as FechaAudienciasFin";
        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                while ($rowsFecha = $conexion->fetch_array($conexion->stmt, 0)) {
                    $fechaFinal = $rowsFecha["FechaAudienciasFin"];
                }
            }
        }
        if ($juzgado != null) {
            $this->urlAuronix = $juzgado;
        }
        echo "<br>FECHAS DE CONSULTA: starttime=" . $fechaInicio . "&endtime=" . $fechaFinal . "<br>";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->urlAuronix . "/index.php?r=api/hearings&starttime=" . $fechaInicio . "&endtime=" . $fechaFinal);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "sigejupe:BsKfxi2REvKS");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $output = curl_exec($ch);
        echo $output;
        $output = json_decode($output, true);
        curl_close($ch);
        return $output;
    }

    public function selectDetalleAudiencia($idAudienciaAuronix, $juzgado = null, $conexion, $idAudiencia) {
        $paramsReturn = array();
        $paramsReturn["recording"] = "";
        $paramsReturn["mensaje"] = "";

        $paramsBitacora = array();
        $paramsBitacora["descAccion"] = "4"; #CONSULTA DETALLE
        $paramsBitacora["idAudiencia"] = $idAudiencia;
        $paramsBitacora["idAuronix"] = $idAudienciaAuronix;
        $paramsBitacora["descEnvio"] = "";

        if ($juzgado != null) {
            $this->urlAuronix = $juzgado;
        }
        ob_start();
        try {
            $paramsBitacora["descEnvio"] = "CONSULTA: URL DEL CURL:" . $this->urlAuronix . "/index.php?r=api/hearing&id=" . $idAudienciaAuronix . "<br>DATOS ENVIADOS:" . $idAudienciaAuronix . "<br>";
            $output = "";

            try {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $this->urlAuronix . "/index.php?r=api/hearing&id=" . $idAudienciaAuronix);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERPWD, "sigejupe:BsKfxi2REvKS");
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                $outputJson = curl_exec($ch);
                curl_close($ch);
                $paramsBitacora["descRespuesta"] = "RESPUESTA CURL:" . $output;
                $output = json_decode($outputJson, true);
            } catch (Exception $e) {
                $output = "";
                $paramsBitacora["descRespuesta"] = "ERROR EN TRY:" . $e;
            }

            if ($output != "") {
                if (array_key_exists('hearing', $output)) {
                    if (array_key_exists('id', $output["hearing"])) {
                        if (array_key_exists('recordings', $output["hearing"])) {
                            if ($output["hearing"]["recordings"] == "true") {
                                $paramsBitacora["descRespuesta"] .= " -> CORRECTO: " . $outputJson;
                                $paramsReturn["mensaje"] = "LA AUDIENCIA CUENTA CON VIDEOGRABACIONES";
                                $paramsReturn["recording"] = $output["hearing"]["recordings"];
                            } else {
                                $paramsBitacora["descRespuesta"] .= " -> CORRECTO: " . $outputJson;
                                $paramsReturn["mensaje"] = "LA AUDIENCIA NO TIENE VIDEOGRABACIONES";
                                $paramsReturn["recording"] = $output["hearing"]["recordings"];
                            }
                        } else {
                            $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO TRAJO EL RECORDING DE AUDIENCIAAURONIX";
                            $paramsReturn["mensaje"] = "ERROR: Consultar en AURONIX->NO SE OBTUBO IDRECORDING AURONIX";
                            $paramsReturn["recording"] = "";
                        }
                    } else {
                        $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO TRAJO EL ID DE AUDIENCIAAURONIX";
                        $paramsReturn["mensaje"] = "ERROR: Consultar en AURONIX->NO SE OBTUBO ID AURONIX";
                        $paramsReturn["recording"] = "";
                    }
                } else {
                    $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO TRAJO EL ID DE AUDIENCIAAURONIX";
                    $paramsReturn["mensaje"] = "ERROR: Consultar en AURONIX->NO SE OBTUBO ID AURONIX";
                    $paramsReturn["recording"] = "";
                }
            } else {
                $paramsBitacora["descRespuesta"] .= "NO SE ENCONTRO INFORMACIÖN EN AURONIX";
                $paramsReturn["mensaje"] = "ERROR: NO SE ENCONTRO INFORMACIÖN EN AURONIX";
                $paramsReturn["recording"] = "";
            }
            $this->insetBitacoraAuronix($paramsBitacora, $conexion);
        } catch (Exception $e) {
            ob_end_clean();
            $response = "{\"error\":\"" . $e->getMessage() . "\"}";
            $textError = $response;
        }
        return $paramsReturn;
    }

    public function insertAudiencia($arrayDetalleAudiencias, $conexion, $proceso = "automatico") {
        $paramsReturn = array();
        $paramsReturn["idAudiencia"] = "";
        $paramsReturn["idAuronix"] = "";
        $paramsBitacora = array();
        $paramsBitacora["descAccion"] = "1"; #INSERTA
        $paramsBitacora["idAudiencia"] = $arrayDetalleAudiencias["audiencia"]["idAudiencia"];
        $paramsBitacora["idAuronix"] = "";
        $paramsBitacora["descEnvio"] = "";
        $paramsBitacora["descRespuesta"] = "";
        $paramsBitacora["fechaRegistro"] = "";
        $paramsReturn["idAudiencia"] = "";
        $paramsReturn["idAuronix"] = "";
        $paramsReturn["mensaje"] = "";

        $sql = "SELECT UNIX_TIMESTAMP('" . $arrayDetalleAudiencias["audiencia"]["fechaInicial"] . "') as fechaInicial";
        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                while ($rowsFecha = $conexion->fetch_array($conexion->stmt, 0)) {
                    $arrayDetalleAudiencias["audiencia"]["fechaInicial"] = $rowsFecha["fechaInicial"];
                }
            }
        }

        $sql = "SELECT UNIX_TIMESTAMP('" . $arrayDetalleAudiencias["audiencia"]["fechaFinal"] . "') as fechaFinal";
        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                while ($rowsFecha = $conexion->fetch_array($conexion->stmt, 0)) {
                    $arrayDetalleAudiencias["audiencia"]["fechaFinal"] = $rowsFecha["fechaFinal"];
                }
            }
        }

        $sql = "SELECT NOW() as FechaRegistro";
        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                while ($rowsFecha = $conexion->fetch_array($conexion->stmt, 0)) {
                    $paramsBitacora["fechaRegistro"] = $rowsFecha["FechaRegistro"];
                }
            }
        }

        $tipoCausa = "";
        switch ($arrayDetalleAudiencias["solicitud"]["cveTipoCarpeta"]) {
            case 1:
                $tipoCausa = "AUXILIAR";
                break;
            case 2:
                $tipoCausa = "CONTROL";
                break;
            case 3:
                $tipoCausa = "JUICIO";
                break;
            case 4:
                $tipoCausa = "TRIBUNAL";
                break;
            case 5:
                $tipoCausa = "EXPEDIENTE";
                break;
            default:
                $tipoCausa = "CAUSA";
        }

        if ($arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] == "1") { #si es publica cambia a cero para auronix
            $arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] = "0";
        } else { //si es privada cambia a uno para auronix
            $arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] = "1";
        }

        $requestString = "hearing[case]=" . $arrayDetalleAudiencias["solicitud"]["numero"] . "/" . $arrayDetalleAudiencias["solicitud"]["anio"] . "/" . $tipoCausa . "&";
        $requestString .= "hearing[starttime]=" . $arrayDetalleAudiencias["audiencia"]["fechaInicial"] . "&";
        $requestString .= "hearing[endtime]=" . $arrayDetalleAudiencias["audiencia"]["fechaFinal"] . "&";
        $requestString .= "hearing[court]=" . $arrayDetalleAudiencias["audiencia"]["descJuzgadoAuronix"] . "&";
        $requestString .= "hearing[room]=" . $arrayDetalleAudiencias["audiencia"]["desSala"] . "&";
        $requestString .= "hearing[hearing_type]=" . $arrayDetalleAudiencias["audiencia"]["desCatAudiencia"] . "&";
        $requestString .= "hearing[trial_type]=Penal&";
        $requestString .= "hearing[NUC]=" . $arrayDetalleAudiencias["solicitud"]["nuc"] . "&";
        $requestString .= "hearing[private]=" . $arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] . "&";

        if ($arrayDetalleAudiencias["jueces"] != "" && count($arrayDetalleAudiencias["jueces"]) > 0) {
            $stringJuzgadores = "";
            foreach ($arrayDetalleAudiencias["jueces"] as $juzgadores) {
                $stringJuzgadores .= $juzgadores["nombre"] . " " . $juzgadores["paterno"] . " " . $juzgadores["materno"] . ",";
            }
            $requestString .= "hearing[judge][]=" . substr($stringJuzgadores, 0, -1) . "&";
        }

        if ($arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] == "0") { //si es publica envia  datos de ofendidos, victimas y defensores
            if ($arrayDetalleAudiencias["ofendidos"] != "" && count($arrayDetalleAudiencias["ofendidos"]) > 0) {
                $stringOfendidos = "";
                foreach ($arrayDetalleAudiencias["ofendidos"] as $ofendidos) {
                    if ($ofendidos["cveTipoPersona"] == "1") {
                        $stringOfendidos .= $ofendidos["nombre"] . " " . $ofendidos["paterno"] . " " . $ofendidos["materno"] . ",";
                    } else {
                        $stringOfendidos .= $ofendidos["nombreMoral"] . ",";
                    }
                }
                $requestString .= "hearing[plaintiff][]=" . substr($stringOfendidos, 0, -1) . "&";
            }

            if ($arrayDetalleAudiencias["ofendidosDefensor"] != "" && count($arrayDetalleAudiencias["ofendidosDefensor"]) > 0) {
                $stringOfendidosDefensores = "";
                foreach ($arrayDetalleAudiencias["ofendidosDefensor"] as $ofendidosDefensores) {
                    $stringOfendidosDefensores .= $ofendidosDefensores["nombre"] . ",";
                }
                $requestString .= "hearing[plaintiffAdvocate][]=" . substr($stringOfendidosDefensores, 0, -1) . "&";
            }

            if ($arrayDetalleAudiencias["imputados"] != "" && count($arrayDetalleAudiencias["imputados"]) > 0) {
                $stringImputados = "";
                foreach ($arrayDetalleAudiencias["imputados"] as $imputados) {
                    if ($imputados["cveTipoPersona"] == "1") {
                        $stringImputados .= $imputados["nombre"] . " " . $imputados["paterno"] . " " . $imputados["materno"] . ",";
                    } else {
                        $stringImputados .= $imputados["nombreMoral"] . ",";
                    }
                }
                $requestString .= "hearing[defendant][]=" . substr($stringImputados, 0, -1) . "&";
            }

            if ($arrayDetalleAudiencias["imputadosDefensor"] != "" && count($arrayDetalleAudiencias["imputadosDefensor"]) > 0) {
                $stringImputadosDefensores = "";
                foreach ($arrayDetalleAudiencias["imputadosDefensor"] as $imputadosDefensores) {
                    $stringImputadosDefensores .= $imputadosDefensores["nombre"] . ",";
                }
                $requestString .= "hearing[defendantAdvocate][]=" . substr($stringImputadosDefensores, 0, -1) . "&";
            }

            if ($arrayDetalleAudiencias["delitos"] != "" && count($arrayDetalleAudiencias["delitos"]) > 0) {
                $stringDelitos = "";
                foreach ($arrayDetalleAudiencias["delitos"] as $delitos) {
                    $stringDelitos .= $delitos["desDelito"] . ",";
                }
                $requestString .= "hearing[offense]=" . substr($stringDelitos, 0, -1) . "&";
            }
        }

        ob_start();
        try {
            $requestString = substr($requestString, 0, -1);
            $paramsBitacora["descEnvio"] = "INSERTA " . $proceso . " : URL DEL CURL:" . $this->urlAuronix . "<br>DATOS ENVIADOS:" . $requestString . "<br>";
            $output = "";
            try {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $this->urlAuronix . "/index.php?r=api/hearings");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERPWD, "sigejupe:BsKfxi2REvKS");
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString);
                $output = curl_exec($ch);
                curl_close($ch);
                $paramsBitacora["descRespuesta"] = "RESPUESTA CURL:" . $output;
                $output = json_decode($output, true);
            } catch (Exception $e) {
                $output = "";
                $paramsBitacora["descRespuesta"] = "ERROR EN TRY:" . $e;
            }

            if ($output != "") {
                if (array_key_exists('errors', $output)) {
                    $paramsBitacora["descRespuesta"] .= " ->ERRORES:" . $output["errors"];
                    $paramsReturn["mensaje"] = "ERROR: Actualizar en AURONIX";
                } else {
                    if (array_key_exists('hearing', $output)) {
                        if (array_key_exists('id', $output["hearing"])) {
                            $paramsBitacora["idAuronix"] = $output["hearing"]["id"];
                            $sql = "UPDATE tblaudiencias Set idAudienciaAuronix='" . $output["hearing"]["id"] . "' Where idAudiencia='" . $arrayDetalleAudiencias["audiencia"]["idAudiencia"] . "'";
                            $conexion->execute($sql);
                            if (!$conexion->error()) {
                                $paramsBitacora["descRespuesta"] .= " -> CORRECTO: INSERTO AUDIENCIA AURONIX CORRECTAMENTE";
                                $paramsReturn["idAudiencia"] = $arrayDetalleAudiencias["audiencia"]["idAudiencia"];
                                $paramsReturn["idAuronix"] = $output["hearing"]["id"];
                                $paramsReturn["mensaje"] = "Inserto correctaremente en AURONIX";
                            } else {
                                $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO AL ACTUALIZAR ID AURONIX EN TBLAUDIENCIAS";
                                $paramsReturn["mensaje"] = "ERROR: al insertar registro de AURONIX en audiencias";
                            }
                        } else {
                            $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO TRAJO EL ID DE AUDIENCIAAURONIX";
                            $paramsReturn["mensaje"] = "ERROR: Insertar en AURONIX->NO SE OBTUBO ID AURONIX";
                        }
                    } else {
                        $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO TRAJO EL ID DE AUDIENCIAAURONIX";
                        $paramsReturn["mensaje"] = "ERROR: Insertar en AURONIX->NO SE OBTUBO ID AURONIX";
                    }
                }
            } else {
                $paramsBitacora["descRespuesta"] .= " ->ERRORES:SIN RESPUESTA DEL CURL";
                $paramsReturn["mensaje"] = "ERROR: Actualizar en AURONIX->NO SE OBTUBO RESPUESTA AURONIX";
            }
            $this->insetBitacoraAuronix($paramsBitacora, $conexion);
        } catch (Exception $e) {
            ob_end_clean();
            $response = "{\"error\":\"" . $e->getMessage() . "\"}";
            $textError = $response;
        }
        return $paramsReturn;
    }

    public function updateAudiencia($arrayDetalleAudiencias, $conexion, $proceso = "automatico") {
        $paramsReturn = array();
        $paramsReturn["idAudiencia"] = "";
        $paramsReturn["idAuronix"] = "";
        $paramsBitacora = array();
        $paramsBitacora["descAccion"] = "2"; #ACTUALIZA
        $paramsBitacora["idAudiencia"] = $arrayDetalleAudiencias["audiencia"]["idAudiencia"];
        $paramsBitacora["idAuronix"] = $arrayDetalleAudiencias["audiencia"]["idAudienciaAuronix"];
        $paramsBitacora["descEnvio"] = "";
        $paramsBitacora["descRespuesta"] = "";
        $paramsBitacora["fechaRegistro"] = "";
        $paramsReturn["idAudiencia"] = "";
        $paramsReturn["idAuronix"] = "";
        $paramsReturn["mensaje"] = "";


        $sql = "SELECT UNIX_TIMESTAMP('" . $arrayDetalleAudiencias["audiencia"]["fechaInicial"] . "') as fechaInicial";
        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                while ($rowsFecha = $conexion->fetch_array($conexion->stmt, 0)) {
                    $arrayDetalleAudiencias["audiencia"]["fechaInicial"] = $rowsFecha["fechaInicial"];
                }
            }
        }

        $sql = "SELECT UNIX_TIMESTAMP('" . $arrayDetalleAudiencias["audiencia"]["fechaFinal"] . "') as fechaFinal";
        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                while ($rowsFecha = $conexion->fetch_array($conexion->stmt, 0)) {
                    $arrayDetalleAudiencias["audiencia"]["fechaFinal"] = $rowsFecha["fechaFinal"];
                }
            }
        }

        $sql = "SELECT NOW() as FechaRegistro";
        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                while ($rowsFecha = $conexion->fetch_array($conexion->stmt, 0)) {
                    $paramsBitacora["fechaRegistro"] = $rowsFecha["FechaRegistro"];
                }
            }
        }

        $tipoCausa = "";
        switch ($arrayDetalleAudiencias["solicitud"]["cveTipoCarpeta"]) {
            case 1:
                $tipoCausa = "AUXILIAR";
                break;
            case 2:
                $tipoCausa = "CONTROL";
                break;
            case 3:
                $tipoCausa = "JUICIO";
                break;
            case 4:
                $tipoCausa = "TRIBUNAL";
                break;
            case 5:
                $tipoCausa = "EXPEDIENTE";
                break;
            default:
                $tipoCausa = "CAUSA";
        }

        if ($arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] == "1") { #si es publica cambia a cero para auronix
            $arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] = "0";
        } else { //si es privada cambia a uno para auronix
            $arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] = "1";
        }

        $requestString = "hearing[case]=" . $arrayDetalleAudiencias["solicitud"]["numero"] . "/" . $arrayDetalleAudiencias["solicitud"]["anio"] . "/" . $tipoCausa . "&";
        $requestString .= "hearing[starttime]=" . $arrayDetalleAudiencias["audiencia"]["fechaInicial"] . "&";
        $requestString .= "hearing[endtime]=" . $arrayDetalleAudiencias["audiencia"]["fechaFinal"] . "&";
        $requestString .= "hearing[court]=" . $arrayDetalleAudiencias["audiencia"]["descJuzgadoAuronix"] . "&";
        $requestString .= "hearing[room]=" . $arrayDetalleAudiencias["audiencia"]["desSala"] . "&";
        $requestString .= "hearing[hearing_type]=" . $arrayDetalleAudiencias["audiencia"]["desCatAudiencia"] . "&";
        $requestString .= "hearing[trial_type]=Penal&";
        $requestString .= "hearing[NUC]=" . $arrayDetalleAudiencias["solicitud"]["nuc"] . "&";
        $requestString .= "hearing[private]=" . $arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] . "&";

        if ($arrayDetalleAudiencias["jueces"] != "" && count($arrayDetalleAudiencias["jueces"]) > 0) {
            $stringJuzgadores = "";
            foreach ($arrayDetalleAudiencias["jueces"] as $juzgadores) {
                $stringJuzgadores .= $juzgadores["nombre"] . " " . $juzgadores["paterno"] . " " . $juzgadores["materno"] . ",";
            }
            $requestString .= "hearing[judge][]=" . substr($stringJuzgadores, 0, -1) . "&";
        }

        if ($arrayDetalleAudiencias["solicitud"]["cveNaturaleza"] == "0") { //si es publica envia  datos de ofendidos, victimas y defensores
            if ($arrayDetalleAudiencias["ofendidos"] != "" && count($arrayDetalleAudiencias["ofendidos"]) > 0) {
                $stringOfendidos = "";
                foreach ($arrayDetalleAudiencias["ofendidos"] as $ofendidos) {
                    if ($ofendidos["cveTipoPersona"] == "1") {
                        $stringOfendidos .= $ofendidos["nombre"] . " " . $ofendidos["paterno"] . " " . $ofendidos["materno"] . ",";
                    } else {
                        $stringOfendidos .= $ofendidos["nombreMoral"] . ",";
                    }
                }
                $requestString .= "hearing[plaintiff][]=" . substr($stringOfendidos, 0, -1) . "&";
            }

            if ($arrayDetalleAudiencias["ofendidosDefensor"] != "" && count($arrayDetalleAudiencias["ofendidosDefensor"]) > 0) {
                $stringOfendidosDefensores = "";
                foreach ($arrayDetalleAudiencias["ofendidosDefensor"] as $ofendidosDefensores) {
                    $stringOfendidosDefensores .= $ofendidosDefensores["nombre"] . ",";
                }
                $requestString .= "hearing[plaintiffAdvocate][]=" . substr($stringOfendidosDefensores, 0, -1) . "&";
            }

            if ($arrayDetalleAudiencias["imputados"] != "" && count($arrayDetalleAudiencias["imputados"]) > 0) {
                $stringImputados = "";
                foreach ($arrayDetalleAudiencias["imputados"] as $imputados) {
                    if ($imputados["cveTipoPersona"] == "1") {
                        $stringImputados .= $imputados["nombre"] . " " . $imputados["paterno"] . " " . $imputados["materno"] . ",";
                    } else {
                        $stringImputados .= $imputados["nombreMoral"] . ",";
                    }
                }
                $requestString .= "hearing[defendant][]=" . substr($stringImputados, 0, -1) . "&";
            }

            if ($arrayDetalleAudiencias["imputadosDefensor"] != "" && count($arrayDetalleAudiencias["imputadosDefensor"]) > 0) {
                $stringImputadosDefensores = "";
                foreach ($arrayDetalleAudiencias["imputadosDefensor"] as $imputadosDefensores) {
                    $stringImputadosDefensores .= $imputadosDefensores["nombre"] . ",";
                }
                $requestString .= "hearing[defendantAdvocate][]=" . substr($stringImputadosDefensores, 0, -1) . "&";
            }

            if ($arrayDetalleAudiencias["delitos"] != "" && count($arrayDetalleAudiencias["delitos"]) > 0) {
                $stringDelitos = "";
                foreach ($arrayDetalleAudiencias["delitos"] as $delitos) {
                    $stringDelitos .= $delitos["desDelito"] . ",";
                }
                $requestString .= "hearing[offense]=" . substr($stringDelitos, 0, -1) . "&";
            }
        }

        ob_start();
        try {
            $requestString = substr($requestString, 0, -1);
            $paramsBitacora["descEnvio"] = "ACTUALIZACION " . $proceso . " : URL DEL CURL:" . $this->urlAuronix . "/index.php?r=api/hearing&id=" . $arrayDetalleAudiencias["audiencia"]["idAudienciaAuronix"] . "<br>DATOS ENVIADOS:" . $requestString . "<br>";
            $output = "";
            try {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $this->urlAuronix . "/index.php?r=api/hearing&id=" . $arrayDetalleAudiencias["audiencia"]["idAudienciaAuronix"] . "");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERPWD, "sigejupe:BsKfxi2REvKS");
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString);
                $output = curl_exec($ch);
                curl_close($ch);
                $paramsBitacora["descRespuesta"] = "RESPUESTA CURL:" . $output;
                $output = json_decode($output, true);
            } catch (Exception $e) {
                $output = "";
                $paramsBitacora["descRespuesta"] = "ERROR EN TRY:" . $e;
            }

            $correcto = false;
            if ($output != "") {
                if (array_key_exists('errors', $output)) {
                    $paramsBitacora["descRespuesta"] .= " ->ERRORES:" . $output["errors"];
                    $paramsReturn["mensaje"] = "ERROR: Actualizar en AURONIX";
                } else {
                    if (array_key_exists('hearing', $output)) {
                        if (array_key_exists('id', $output["hearing"])) {
                            $correcto = true;
                        }
                    } else if (array_key_exists('result_message', $output)) {
                        if ($output["result_message"] == "Already up to date" || $output["result_message"] == "Already to date") {
                            $correcto = true;
                        }
                    }

                    if ($correcto) {
                        $paramsBitacora["descRespuesta"] .= " -> CORRECTO: ACTUALIZO AUDIENCIA AURONIX CORRECTAMENTE";
                        $paramsReturn["idAudiencia"] = $arrayDetalleAudiencias["audiencia"]["idAudiencia"];
                        $paramsReturn["idAuronix"] = $arrayDetalleAudiencias["audiencia"]["idAudienciaAuronix"];
                        $paramsReturn["mensaje"] = "Actualizo correctaremente en AURONIX";
                    } else {
                        $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO TRAJO EL ID DE AUDIENCIAAURONIX";
                        $paramsReturn["mensaje"] = "ERROR: Actualizar en AURONIX->NO SE OBTUBO ID AURONIX";
                    }
                }
            } else {
                $paramsBitacora["descRespuesta"] .= " ->ERRORES:SIN RESPUESTA DEL CURL";
                $paramsReturn["mensaje"] = "ERROR: Actualizar en AURONIX->NO SE OBTUBO RESPUESTA AURONIX";
            }
            $this->insetBitacoraAuronix($paramsBitacora, $conexion);
        } catch (Exception $e) {
            ob_end_clean();
        }
        return $paramsReturn;
    }

    public function deleteAudiencia($idAudienciaAuronix, $cveJuzgado = "", $conexion, $idAudiencia = "", $tipoProceso = "automatico") {
        $paramsReturn = array();
        $paramsReturn["idAudiencia"] = "";
        $paramsReturn["idAuronix"] = "";
        $paramsReturn["mensaje"] = "";
        $paramsBitacora = array();
        $paramsBitacora["descAccion"] = "3"; #ELIMINA
        $paramsBitacora["idAudiencia"] = $idAudiencia;
        $paramsBitacora["idAuronix"] = $idAudienciaAuronix;
        $paramsBitacora["descEnvio"] = "";
        $paramsBitacora["descRespuesta"] = "";
        $paramsBitacora["fechaRegistro"] = "";

        if ($cveJuzgado != "") {
            $this->urlAuronix = $cveJuzgado;
        }

        if ($tipoProceso == "manual") {
            $forzarEliminacion = "&force=true";
        } else {
            $recording = $this->selectDetalleAudiencia($idAudienciaAuronix, $this->urlAuronix, $conexion, $idAudiencia);
            if ($recording != "") {
                if (array_key_exists('recording', $recording)) {
                    if ($recording["recordings"] == "true") {
                        $forzarEliminacion = "&force=false";
                        $sql = "INSERT INTO tbleliminaauronix (idAudienciaAuronix, idAudiencia, eliminar) VALUE ('" . $idAudienciaAuronix . "', '" . $idAudiencia . "', 'N' )";
                        echo $sql;
                        $conexion->execute($sql);
                        if (!$conexion->error()) {
//                            $paramsBitacora["descRespuesta"] .= " -> CORRECTO: Elimino Audiencia Auronix -  actualizo de forma correcta la audiencia en sigejupe";
//                            $paramsReturn["mensaje"] = "Elimino correctaremente en AURONIX";
                        } else {
//                            $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO BORRO CLAVE AURONIX DE LA AUDIENCIA AUDIENCIA DE AURONIX";
//                            $paramsReturn["mensaje"] = " ->ERRORES:NO BORRO CLAVE AURONIX DE LA AUDIENCIA AUDIENCIA DE AURONIX";
                        }
                    } else {
//                        $forzarEliminacion = "&force=true"; QUITAR COMENARIO ENP PRODUCCION
                        $forzarEliminacion = "&force=false";
                    }
                } else {
                    $forzarEliminacion = "&force=false";
                }
            } else {
                $forzarEliminacion = "&force=false";
            }
        }


        $sql = "SELECT NOW() as FechaRegistro";
        $conexion->execute($sql);
        if (!$conexion->error()) {
            if ($conexion->rows($conexion->stmt) > 0) {
                while ($rowsFecha = $conexion->fetch_array($conexion->stmt, 0)) {
                    $paramsBitacora["fechaRegistro"] = $rowsFecha["FechaRegistro"];
                }
            }
        }
        ob_start();
        try {
            $output = "";
            $paramsBitacora["descEnvio"] = "ELIMINA " . $tipoProceso . " : URL DEL CURL:" . $this->urlAuronix . "/index.php?r=api/hearing&id=" . $idAudienciaAuronix . $forzarEliminacion . "<br>DATOS ENVIADOS:IDAURONIX" . $idAudienciaAuronix . "<br>IDAUDIENCIASIGEJUPE:" . $idAudiencia;
            try {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $this->urlAuronix . "/index.php?r=api/hearing&id=" . $idAudienciaAuronix . $forzarEliminacion);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERPWD, "sigejupe:BsKfxi2REvKS");
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                $output = curl_exec($ch);
                curl_close($ch);
                $paramsBitacora["descRespuesta"] = "RESPUESTA CURL:" . $output;
                $output = json_decode($output, true);
            } catch (Exception $e) {
                $output = "";
                $paramsBitacora["descRespuesta"] = "ERROR EN TRY:" . $e;
            }

            if ($output != "") {
                if (array_key_exists('errors', $output)) {
                    $paramsBitacora["descRespuesta"] .= " ->ERRORES:" . $output["errors"];
                    $paramsReturn["mensaje"] = "ERROR: Actualizar en AURONIX";
                } else {
                    if (array_key_exists('status', $output)) {
                        if ($output["status"] == "OK") {
                            $sql = "UPDATE tblaudiencias Set idAudienciaAuronix='0' Where idAudienciaAuronix='" . $idAudienciaAuronix . "'";
                            $conexion->execute($sql);
                            if (!$conexion->error()) {
                                $paramsBitacora["descRespuesta"] .= " -> CORRECTO: Elimino Audiencia Auronix -  actualizo de forma correcta la audiencia en sigejupe";
                                $paramsReturn["mensaje"] = "Elimino correctaremente en AURONIX";
                            } else {
                                $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO BORRO CLAVE AURONIX DE LA AUDIENCIA AUDIENCIA DE AURONIX";
                                $paramsReturn["mensaje"] = " ->ERRORES:NO BORRO CLAVE AURONIX DE LA AUDIENCIA AUDIENCIA DE AURONIX";
                            }
                        } else {
                            $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO BORRO AUDIENCIA DE AURONIX";
                            $paramsReturn["mensaje"] = " ->ERRORES:NO BORRO AUDIENCIA DE AURONIX";
                        }
                    } else {
                        $paramsBitacora["descRespuesta"] .= " ->ERRORES:NO TRAJO EL ID DE AUDIENCIAAURONIX";
                        $paramsReturn["mensaje"] = "ERROR: Actualizar en AURONIX->NO SE OBTUBO ID AURONIX";
                    }
                }
            } else {
                $paramsBitacora["descRespuesta"] .= " ->ERRORES:SIN RESPUESTA DEL CURL";
                $paramsReturn["mensaje"] = "ERROR: Actualizar en AURONIX->NO SE OBTUBO RESPUESTA AURONIX";
            }
            $this->insetBitacoraAuronix($paramsBitacora, $conexion);
        } catch (Exception $e) {
            ob_end_clean();
        }
        return $paramsReturn;
    }

    public function insetBitacoraAuronix($params = null, $conexion) {
        if ($params != null && $params != "") {
            $sql = "INSERT INTO tblbitacoraauronix(descAccion,idAudiencia,idAuronix,descEnvio,descRespuesta,fechaRegistro) ";
            $sql .= "values('" . $params["descAccion"] . "','" . $params["idAudiencia"] . "','" . $params["idAuronix"] . "',";
            $sql .= "'" . $params["descEnvio"] . "','" . $params["descRespuesta"] . "','" . $params["fechaRegistro"] . "')";
            $conexion->execute($sql);
            if (!$conexion->error()) {
                return "INSERTO CORRECTAMENTE LA INFORMACIÓN DE LA AUDIENCIA EN LA BITACORA";
            } else {
                return "ERROR AL INSERTAR EN BITACORA";
            }
        }
    }

    public function eliminaTodoFechas($fecha = null, $juzgado = null, $conexion) {
        $this->urlAuronix = $juzgado;
        $audienciasAuronix = $this->selectTodasAudienciasFechas($fecha, $this->urlAuronix, $conexion);
        print_r($audienciasAuronix);
        foreach ($audienciasAuronix["hearings"] as $audAuronix) {
            print_r($this->deleteAudiencia($audAuronix["id"], $this->urlAuronix, $conexion, "automatico"));
        }
    }

}

//$auronixController = new AuronixController();
//$auronixController->eliminaTodoFechas("6141234626540082567");
//$auronixController->selectTodasAudiencias();
?>

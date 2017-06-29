<?php

ini_set('max_execution_time', 900); //300 seconds = 5 minutes

include_once(dirname(__FILE__) . "/../../tribunal/connect/Proveedor.Class.php");

class EliminarTocasPruebas {

    protected $_proveedorElectronico;
    protected $_proveedorSigejupe;

    public function __construct() {
        $this->_proveedorSigejupe = new Proveedor('mysql', 'sigejupe');
    }

    // Funcion para conectarse a una Base de Datos
    public function _conexionSigejupe() {
        $this->_proveedorSigejupe->connect();
    }

    public function deleteTocasPruebas() {
        $this->_conexionSigejupe();
        $this->_proveedorSigejupe->execute("BEGIN");
        $encontroError = false;
        $mensajeError = "";

        #OBTENEMOS LAS TOCAS REGISTRADAS EN SIGEJUPE EN DONDE EL NUMERO DE TOCA SEA MAYOR A 1000
        $arrayTocas = array();
        $sql = "select * from tblcarpetasjudiciales ";
        $sql .= "where cveTipoCarpeta = '6' and numero >= 1000 and anio = 2017 ";
//        $sql .= "and idCarpetaJudicial = 151704";
        $this->_proveedorSigejupe->execute($sql);
        if (!$this->_proveedorSigejupe->error()) {
            if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                $index = 0;
                while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                    $arrayTocas[$index]["idCarpetaJudicial"] = ($row["idCarpetaJudicial"]);
                    $arrayTocas[$index]["cveEtapaProcesal"] = ($row["cveEtapaProcesal"]);
                    $arrayTocas[$index]["cveConsignacion"] = ($row["cveConsignacion"]);
                    $arrayTocas[$index]["cveTipoCarpeta"] = ($row["cveTipoCarpeta"]);
                    $arrayTocas[$index]["cveConsignacionA"] = ($row["cveConsignacionA"]);
                    $arrayTocas[$index]["numero"] = ($row["numero"]);
                    $arrayTocas[$index]["anio"] = ($row["anio"]);
                    $arrayTocas[$index]["fechaRadicacion"] = ($row["fechaRadicacion"]);
                    $arrayTocas[$index]["fechaRegistro"] = ($row["fechaRegistro"]);
                    $arrayTocas[$index]["fechaActualizacion"] = ($row["fechaActualizacion"]);
                    $arrayTocas[$index]["activo"] = ($row["activo"]);
                    $arrayTocas[$index]["cveJuzgado"] = ($row["cveJuzgado"]);
                    $arrayTocas[$index]["carpetaInv"] = ($row["carpetaInv"]);
                    $arrayTocas[$index]["nuc"] = ($row["nuc"]);
                    $arrayTocas[$index]["cveUsuario"] = ($row["cveUsuario"]);
                    $arrayTocas[$index]["observaciones"] = ($row["observaciones"]);
                    $arrayTocas[$index]["numImputados"] = ($row["numImputados"]);
                    $arrayTocas[$index]["numOfendidos"] = ($row["numOfendidos"]);
                    $arrayTocas[$index]["numDelitos"] = ($row["numDelitos"]);
                    $arrayTocas[$index]["cveEstatusCarpeta"] = ($row["cveEstatusCarpeta"]);
                    $arrayTocas[$index]["incompetencia"] = ($row["incompetencia"]);
                    $arrayTocas[$index]["cveTipoIncompetencia"] = ($row["cveTipoIncompetencia"]);
                    $arrayTocas[$index]["acumulado"] = ($row["acumulado"]);
                    $arrayTocas[$index]["numAcumulado"] = ($row["numAcumulado"]);
                    $arrayTocas[$index]["fechaTermino"] = ($row["fechaTermino"]);
                    $arrayTocas[$index]["cveConclucion"] = ($row["cveConclucion"]);
                    $arrayTocas[$index]["ponderacion"] = ($row["ponderacion"]);
                    $index++;
                }
            }
        } else {
            $encontroError = true;
            $mensajeError .= "ERROR AL CONSULTAR LAS TOCAS";
        }

        #OBTENEMOS RODAS LAS TOCAS RADICADAS Y QUE NO TENGAN AUDIENCIAS
        $sql = "select c.* ";
        $sql .= "from tblcarpetasjudiciales as C ";
        $sql .= "	left join tblaudiencias as A on C.numero = A.numero and C.anio = A.anio and C.cveJuzgado = A.cveJuzgado and C.cveTipoCarpeta = A.cveTipoCarpeta ";
        $sql .= "where C.cveTipoCarpeta = 6 ";
        $sql .= "and C.numero < 1000 ";
        $sql .= "and C.anio = 2017 ";
        $sql .= "and A.idAudiencia is null ";

        $this->_proveedorSigejupe->execute($sql);
        if (!$this->_proveedorSigejupe->error()) {
            if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                    $arrayTocas[$index]["idCarpetaJudicial"] = ($row["idCarpetaJudicial"]);
                    $arrayTocas[$index]["cveEtapaProcesal"] = ($row["cveEtapaProcesal"]);
                    $arrayTocas[$index]["cveConsignacion"] = ($row["cveConsignacion"]);
                    $arrayTocas[$index]["cveTipoCarpeta"] = ($row["cveTipoCarpeta"]);
                    $arrayTocas[$index]["cveConsignacionA"] = ($row["cveConsignacionA"]);
                    $arrayTocas[$index]["numero"] = ($row["numero"]);
                    $arrayTocas[$index]["anio"] = ($row["anio"]);
                    $arrayTocas[$index]["fechaRadicacion"] = ($row["fechaRadicacion"]);
                    $arrayTocas[$index]["fechaRegistro"] = ($row["fechaRegistro"]);
                    $arrayTocas[$index]["fechaActualizacion"] = ($row["fechaActualizacion"]);
                    $arrayTocas[$index]["activo"] = ($row["activo"]);
                    $arrayTocas[$index]["cveJuzgado"] = ($row["cveJuzgado"]);
                    $arrayTocas[$index]["carpetaInv"] = ($row["carpetaInv"]);
                    $arrayTocas[$index]["nuc"] = ($row["nuc"]);
                    $arrayTocas[$index]["cveUsuario"] = ($row["cveUsuario"]);
                    $arrayTocas[$index]["observaciones"] = ($row["observaciones"]);
                    $arrayTocas[$index]["numImputados"] = ($row["numImputados"]);
                    $arrayTocas[$index]["numOfendidos"] = ($row["numOfendidos"]);
                    $arrayTocas[$index]["numDelitos"] = ($row["numDelitos"]);
                    $arrayTocas[$index]["cveEstatusCarpeta"] = ($row["cveEstatusCarpeta"]);
                    $arrayTocas[$index]["incompetencia"] = ($row["incompetencia"]);
                    $arrayTocas[$index]["cveTipoIncompetencia"] = ($row["cveTipoIncompetencia"]);
                    $arrayTocas[$index]["acumulado"] = ($row["acumulado"]);
                    $arrayTocas[$index]["numAcumulado"] = ($row["numAcumulado"]);
                    $arrayTocas[$index]["fechaTermino"] = ($row["fechaTermino"]);
                    $arrayTocas[$index]["cveConclucion"] = ($row["cveConclucion"]);
                    $arrayTocas[$index]["ponderacion"] = ($row["ponderacion"]);
                    $index++;
                }
            }
        } else {
            $encontroError = true;
            $mensajeError .= "ERROR AL CONSULTAR LAS TOCAS";
        }

        if (!$encontroError) {
            if (count($arrayTocas) > 0 && $arrayTocas != "") {
                foreach ($arrayTocas as $toca) {
                    #ELIMINA LA TOCA
                    $sql = "update tblcarpetasjudiciales ";
                    $sql .= " set activo = 'N', observaciones = 'REGISTRO DE PRUEBA ELIMINADO --- " . $toca["observaciones"] . "'  ";
                    $sql .= " where idCarpetaJudicial = '" . $toca["idCarpetaJudicial"] . "' ";
                    $this->_proveedorSigejupe->execute($sql);
                    if (!$this->_proveedorSigejupe->error()) {
                        echo "TOCA ELIMINADA:" . $toca["idCarpetaJudicial"];
                        echo "<br>";
                    } else {
                        $encontroError = true;
                        $mensajeError .= " --ERROR AL ELIMINAR LA TOCA: " . $toca["idCarpetaJudicial"];
                        break;
                    }


                    #ELIMINAS ACTUACIONES RELACIONADAS A LA TOCA
                    if (!$encontroError) {
                        $arrayActuacionesTocas = array();
                        $sql = "select * from tblactuaciones ";
                        $sql .= "where cveTipoCarpeta = '6' and idReferencia = " . $toca["idCarpetaJudicial"];
                        $this->_proveedorSigejupe->execute($sql);
                        if (!$this->_proveedorSigejupe->error()) {
                            if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                                $index = 0;
                                while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                                    $arrayActuacionesTocas[$index]["idActuacion"] = ($row["idActuacion"]);
                                    $arrayActuacionesTocas[$index]["numActuacion"] = ($row["numActuacion"]);
                                    $arrayActuacionesTocas[$index]["aniActuacion"] = ($row["aniActuacion"]);
                                    $arrayActuacionesTocas[$index]["cveTipoActuacion"] = ($row["cveTipoActuacion"]);
                                    $arrayActuacionesTocas[$index]["idReferencia"] = ($row["idReferencia"]);
                                    $arrayActuacionesTocas[$index]["numero"] = ($row["numero"]);
                                    $arrayActuacionesTocas[$index]["anio"] = ($row["anio"]);
                                    $arrayActuacionesTocas[$index]["noFojas"] = ($row["noFojas"]);
                                    $arrayActuacionesTocas[$index]["cveTipoCarpeta"] = ($row["cveTipoCarpeta"]);
                                    $arrayActuacionesTocas[$index]["cveJuzgado"] = ($row["cveJuzgado"]);
                                    $arrayActuacionesTocas[$index]["Sintesis"] = ($row["Sintesis"]);
                                    $arrayActuacionesTocas[$index]["observaciones"] = ($row["observaciones"]);
                                    $arrayActuacionesTocas[$index]["cveUsuario"] = ($row["cveUsuario"]);
                                    $arrayActuacionesTocas[$index]["activo"] = ($row["activo"]);
                                    $arrayActuacionesTocas[$index]["fechaRegistro"] = ($row["fechaRegistro"]);
                                    $arrayActuacionesTocas[$index]["fechaActualizacion"] = ($row["fechaActualizacion"]);
                                    $arrayActuacionesTocas[$index]["cveEstado"] = ($row["cveEstado"]);
                                    $arrayActuacionesTocas[$index]["cveJuzgadoDestino"] = ($row["cveJuzgadoDestino"]);
                                    $arrayActuacionesTocas[$index]["juzgadoDestino"] = ($row["juzgadoDestino"]);
                                    $arrayActuacionesTocas[$index]["cveTipoNotificacion"] = ($row["cveTipoNotificacion"]);
                                    $arrayActuacionesTocas[$index]["cveTipoSentencia"] = ($row["cveTipoSentencia"]);
                                    $arrayActuacionesTocas[$index]["cveTipoAuto"] = ($row["cveTipoAuto"]);
                                    $arrayActuacionesTocas[$index]["cveTipoResolucion"] = ($row["cveTipoResolucion"]);
                                    $arrayActuacionesTocas[$index]["idJuzgadorAcuerdo"] = ($row["idJuzgadorAcuerdo"]);
                                    $arrayActuacionesTocas[$index]["cveTipoOrden"] = ($row["cveTipoOrden"]);
                                    $arrayActuacionesTocas[$index]["cveTipoProcedimiento"] = ($row["cveTipoProcedimiento"]);
                                    $arrayActuacionesTocas[$index]["fechaSentencia"] = ($row["fechaSentencia"]);
                                    $arrayActuacionesTocas[$index]["fechaEjecutoria"] = ($row["fechaEjecutoria"]);
                                    $arrayActuacionesTocas[$index]["secreto"] = ($row["secreto"]);
                                    $index++;
                                }
                            }
                        } else {
                            $encontroError = true;
                            $mensajeError .= "ERROR AL CONSULTAR LAS ACTUACIONES DE LA TOCA:" . $toca["idCarpetaJudicial"];
                            break;
                        }

                        if (count($arrayActuacionesTocas) > 0 && $arrayActuacionesTocas != "") {
                            foreach ($arrayActuacionesTocas as $actuacionToca) {
                                $sql = "update tblactuaciones ";
                                $sql .= " set activo = 'N', observaciones = 'REGISTRO DE PRUEBA ELIMINADO --- " . $actuacionToca["observaciones"] . "'  ";
                                $sql .= " where idActuacion = '" . $actuacionToca["idActuacion"] . "' ";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    echo "ACTUACION ELIMINADA:" . $actuacionToca["idActuacion"];
                                    echo "<br>";
                                } else {
                                    $encontroError = true;
                                    $mensajeError .= " ERROR AL ELIMINAR LA ACTUACION: " . $actuacionToca["idActuacion"];
                                    break 2;
                                }

                                #ELIMINA ACTUACIONE ESTATUS
                                $sql = "update tblactuacionesestatus ";
                                $sql .= " set activo = 'N' ";
                                $sql .= " where idActuacion = '" . $actuacionToca["idActuacion"] . "' ";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    echo "ESTATUS ACTUACION ELIMINADO:" . $actuacionToca["idActuacion"];
                                    echo "<br>";
                                } else {
                                    $encontroError = true;
                                    $mensajeError .= " ERROR AL ELIMINAR EL ESTATUS DE LA ACTUACION: " . $actuacionToca["idActuacion"];
                                    break 2;
                                }

                                #ELIMINA LOS ANTECEDENTES DE LAS ACTUACIONES COMO PADRE 
                                $sql = "update tblantecedesactuaciones ";
                                $sql .= " set activo = 'N' ";
                                $sql .= " where idActuacionPadre =  '" . $actuacionToca["idActuacion"] . "' ";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    echo "ANTECEDE ACTUACION PADRE ELIMINADA:" . $actuacionToca["idActuacion"];
                                    echo "<br>";
                                } else {
                                    $encontroError = true;
                                    $mensajeError .= " ERROR AL ELIMINAR  ANTECEDE ACTUACION PADRE: " . $actuacionToca["idActuacion"];
                                    break 2;
                                }

                                #ELIMINA LOS ANTECEDENTES DE LAS ACTUACIONES COMO HIJA 
                                $sql = "update tblantecedesactuaciones ";
                                $sql .= " set activo = 'N' ";
                                $sql .= " where idActuacionHija =  '" . $actuacionToca["idActuacion"] . "' ";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    echo "ANTECEDE ACTUACION HIJA ELIMINADA:" . $actuacionToca["idActuacion"];
                                    echo "<br>";
                                } else {
                                    $encontroError = true;
                                    $mensajeError .= " ERROR AL ELIMINAR  ANTECEDE ACTUACION HIA: " . $actuacionToca["idActuacion"];
                                    break 2;
                                }
                            }
                        }
                    }


                    #ELIMINAS ANTECEDES DE LA TOCA
                    if (!$encontroError) {
                        $arrayAntecedesTocas = array();
                        $sql = "select * from tblantecedescarpetas ";
                        $sql .= "where cveTipoCarpeta = '6' and idCarpetaHija = " . $toca["idCarpetaJudicial"];
                        $this->_proveedorSigejupe->execute($sql);
                        if (!$this->_proveedorSigejupe->error()) {
                            if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                                $index = 0;
                                while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                                    $arrayAntecedesTocas[$index]["idAntecedeCarpeta"] = ($row["idAntecedeCarpeta"]);
                                    $arrayAntecedesTocas[$index]["idCarpetaPadre"] = ($row["idCarpetaPadre"]);
                                    $arrayAntecedesTocas[$index]["idCarpetaHija"] = ($row["idCarpetaHija"]);
                                    $arrayAntecedesTocas[$index]["cveTipoCarpeta"] = ($row["cveTipoCarpeta"]);
                                    $arrayAntecedesTocas[$index]["activo"] = ($row["activo"]);
                                    $arrayAntecedesTocas[$index]["fechaRegistro"] = ($row["fechaRegistro"]);
                                    $arrayAntecedesTocas[$index]["fechaActualizacion"] = ($row["fechaActualizacion"]);
                                    $index++;
                                }
                            }
                        } else {
                            $encontroError = true;
                            $mensajeError .= "ERROR AL CONSULTAR LOS ANTECEDENTES DE LA TOCA HIJA:" . $toca["idCarpetaJudicial"];
                            break;
                        }

                        if (count($arrayAntecedesTocas) > 0 && $arrayAntecedesTocas != "") {
                            foreach ($arrayAntecedesTocas as $antecedeToca) {
                                #ELIMINA LA TOCA
                                $sql = "update tblantecedescarpetas ";
                                $sql .= " set activo = 'N' ";
                                $sql .= " where idAntecedeCarpeta = '" . $antecedeToca["idAntecedeCarpeta"] . "'";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    echo "ANTECEDE DE TOCA ELIMINADO:" . $antecedeToca["idAntecedeCarpeta"];
                                    echo "<br>";
                                } else {
                                    $encontroError = true;
                                    $mensajeError .= " ERROR AL ELIMINAR EL ANTECEDE DE LA TOCA: " . $antecedeToca["idAntecedeCarpeta"];
                                    break 2;
                                }
                            }
                        }
                    }

                    #ELIMINAS IMPUTADOS DE LA TOCA
                    if (!$encontroError) {
                        $arrayImputadosTocas = array();
                        $sql = "select * from tblimputadoscarpetas ";
                        $sql .= "where idCarpetaJudicial = " . $toca["idCarpetaJudicial"];
                        $this->_proveedorSigejupe->execute($sql);
                        if (!$this->_proveedorSigejupe->error()) {
                            if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                                $index = 0;
                                while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                                    $arrayImputadosTocas[$index]["idImputadoCarpeta"] = ($row["idImputadoCarpeta"]);
                                    $index++;
                                }
                            }
                        } else {
                            $encontroError = true;
                            $mensajeError .= "ERROR AL CONSULTAR LOS IMPUTADOS DE LA TOCA:" . $toca["idCarpetaJudicial"];
                            break;
                        }

                        if (count($arrayImputadosTocas) > 0 && $arrayImputadosTocas != "") {
                            foreach ($arrayImputadosTocas as $imputadoToca) {
                                $sql = "update tblimputadoscarpetas ";
                                $sql .= " set activo = 'N' ";
                                $sql .= " where idImputadoCarpeta = '" . $imputadoToca["idImputadoCarpeta"] . "'";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    echo "IMPUTADO DE TOCA ELIMINADO:" . $imputadoToca["idImputadoCarpeta"];
                                    echo "<br>";
                                } else {
                                    $encontroError = true;
                                    $mensajeError .= " ERROR AL ELIMINAR EL IMPUTADO DE LA TOCA: " . $imputadoToca["idImputadoCarpeta"];
                                    break 2;
                                }
                            }
                        }
                    }

                    #ELIMINAS OFENDIDOS DE LA TOCA
                    if (!$encontroError) {
                        $arrayOfendidosTocas = array();
                        $sql = "select * from tblofendidoscarpetas ";
                        $sql .= "where idCarpetaJudicial = " . $toca["idCarpetaJudicial"];
                        $this->_proveedorSigejupe->execute($sql);
                        if (!$this->_proveedorSigejupe->error()) {
                            if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                                $index = 0;
                                while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                                    $arrayOfendidosTocas[$index]["idOfendidoCarpeta"] = ($row["idOfendidoCarpeta"]);
                                    $index++;
                                }
                            }
                        } else {
                            $encontroError = true;
                            $mensajeError .= "ERROR AL CONSULTAR LOS OFENDIDOS DE LA TOCA:" . $toca["idCarpetaJudicial"];
                            break;
                        }

                        if (count($arrayOfendidosTocas) > 0 && $arrayOfendidosTocas != "") {
                            foreach ($arrayOfendidosTocas as $ofendidoToca) {
                                $sql = "update tblofendidoscarpetas ";
                                $sql .= " set activo = 'N' ";
                                $sql .= " where idOfendidoCarpeta = '" . $ofendidoToca["idOfendidoCarpeta"] . "'";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    echo "OFENDIDO DE TOCA ELIMINADO:" . $ofendidoToca["idOfendidoCarpeta"];
                                    echo "<br>";
                                } else {
                                    $encontroError = true;
                                    $mensajeError .= " ERROR AL ELIMINAR EL OFENDIDO DE LA TOCA: " . $ofendidoToca["idOfendidoCarpeta"];
                                    break 2;
                                }
                            }
                        }
                    }

                    #ELIMINAS APELANTES DE LA TOCA
                    if (!$encontroError) {
                        $arrayApelantesTocas = array();
                        $sql = "select * from tblapelantescarpetas ";
                        $sql .= "where idCarpetaJudicial = " . $toca["idCarpetaJudicial"];
                        $this->_proveedorSigejupe->execute($sql);
                        if (!$this->_proveedorSigejupe->error()) {
                            if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                                $index = 0;
                                while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                                    $arrayApelantesTocas[$index]["idApelanteCarpeta"] = ($row["idApelanteCarpeta"]);
                                    $index++;
                                }
                            }
                        } else {
                            $encontroError = true;
                            $mensajeError .= "ERROR AL CONSULTAR LOS APELANTES DE LA TOCA:" . $toca["idCarpetaJudicial"];
                            break;
                        }

                        if (count($arrayApelantesTocas) > 0 && $arrayApelantesTocas != "") {
                            foreach ($arrayApelantesTocas as $apelanteToca) {
                                $sql = "update tblapelantescarpetas ";
                                $sql .= " set activo = 'N' ";
                                $sql .= " where idApelanteCarpeta = '" . $apelanteToca["idApelanteCarpeta"] . "'";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    echo "APELANTE DE TOCA ELIMINADO:" . $apelanteToca["idApelanteCarpeta"];
                                    echo "<br>";
                                } else {
                                    $encontroError = true;
                                    $mensajeError .= " ERROR AL ELIMINAR EL APELANTE DE LA TOCA: " . $apelanteToca["idApelanteCarpeta"];
                                    break 2;
                                }
                            }
                        }
                    }




                    echo "<br>";
                    echo "------------------------------------------------------";
                    echo "<br>";
                    echo "<br>";
                }
            } else {
                $mensajeError .= " NO SE ENCONTRO NINGUNA TOCA EN EL SIGEJUPE MAYOR A MIL";
            }
        }


        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "<br>";
        #ELIMINAS TOCAS TRADICIONALES
        if (!$encontroError) {
            $arrayTocasTradicionales = array();
            $sql = "select * from tbltocastradicionales ";
            $this->_proveedorSigejupe->execute($sql);
            if (!$this->_proveedorSigejupe->error()) {
                if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                    $index = 0;
                    while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                        $arrayTocasTradicionales[$index]["idTocaTradicionales"] = ($row["idTocaTradicionales"]);
                        $index++;
                    }
                }
            } else {
                $encontroError = true;
                $mensajeError .= "ERROR AL CONSULTAR TOCAS TRADICIONALES";
            }

            if (count($arrayTocasTradicionales) > 0 && $arrayTocasTradicionales != "") {
                foreach ($arrayTocasTradicionales as $tocaTradicional) {
                    $sql = "update tbltocastradicionales ";
                    $sql .= " set activo = 'N' ";
                    $sql .= " where idTocaTradicionales = '" . $tocaTradicional["idTocaTradicionales"] . "'";
                    $this->_proveedorSigejupe->execute($sql);
                    if (!$this->_proveedorSigejupe->error()) {
                        echo "TOCA TRADICIONAL ELIMINADA:" . $tocaTradicional["idTocaTradicionales"];
                        echo "<br>";
                    } else {
                        $encontroError = true;
                        $mensajeError .= " ERROR AL ELIMINAR LA TOCA TRADICIONAL: " . $tocaTradicional["idTocaTradicionales"];
                        break;
                    }
                }
            }
        }

        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "<br>";
        #ELIMINAS REMISIONES DE APELACION
        if (!$encontroError) {
            $arrayRemisionesApelacion = array();
            $sql = "select * from tblremisionapelaciones ";
            $this->_proveedorSigejupe->execute($sql);
            if (!$this->_proveedorSigejupe->error()) {
                if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                    $index = 0;
                    while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                        $arrayRemisionesApelacion[$index]["idRemisionApelacion"] = ($row["idRemisionApelacion"]);
                        $index++;
                    }
                }
            } else {
                $encontroError = true;
                $mensajeError .= "ERROR AL CONSULTAR REMISIONES DE APELACION";
            }

            if (count($arrayRemisionesApelacion) > 0 && $arrayRemisionesApelacion != "") {
                foreach ($arrayRemisionesApelacion as $remisionApelacion) {
                    $sql = "update tblremisionapelaciones ";
                    $sql .= " set activo = 'N' ";
                    $sql .= " where idRemisionApelacion = '" . $remisionApelacion["idRemisionApelacion"] . "'";
                    $this->_proveedorSigejupe->execute($sql);
                    if (!$this->_proveedorSigejupe->error()) {
                        echo "REMISION DE APELACION ELIMINADA:" . $remisionApelacion["idRemisionApelacion"];
                        echo "<br>";
                    } else {
                        $encontroError = true;
                        $mensajeError .= " ERROR AL ELIMINAR LA REMISION DE APELACION: " . $remisionApelacion["idRemisionApelacion"];
                        break;
                    }
                }
            }
        }

        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "<br>";
        #ELIMINAS REMISIONES DE APELACION IMPUTADOS
        if (!$encontroError) {
            $arrayRemisionesApelacionImputados = array();
            $sql = "select * from tblremisionapelacionesimputados ";
            $this->_proveedorSigejupe->execute($sql);
            if (!$this->_proveedorSigejupe->error()) {
                if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                    $index = 0;
                    while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                        $arrayRemisionesApelacionImputados[$index]["idRemisionApelacionImp"] = ($row["idRemisionApelacionImp"]);
                        $index++;
                    }
                }
            } else {
                $encontroError = true;
                $mensajeError .= "ERROR AL CONSULTAR REMISIONES DE APELACION IMPUTADOS";
            }

            if (count($arrayRemisionesApelacionImputados) > 0 && $arrayRemisionesApelacionImputados != "") {
                foreach ($arrayRemisionesApelacionImputados as $remisionApelacionImputado) {
                    $sql = "update tblremisionapelacionesimputados ";
                    $sql .= " set activo = 'N' ";
                    $sql .= " where idRemisionApelacionImp = '" . $remisionApelacionImputado["idRemisionApelacionImp"] . "'";
                    $this->_proveedorSigejupe->execute($sql);
                    if (!$this->_proveedorSigejupe->error()) {
                        echo "REMISION DE APELACION IMPUTADO ELIMINADO:" . $remisionApelacionImputado["idRemisionApelacionImp"];
                        echo "<br>";
                    } else {
                        $encontroError = true;
                        $mensajeError .= " ERROR AL ELIMINAR LA REMISION DE APELACION IMPUTADO: " . $remisionApelacionImputado["idRemisionApelacionImp"];
                        break;
                    }
                }
            }
        }

        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "<br>";
        #ELIMINAS REASIGNACION DE TOCAS
        if (!$encontroError) {
            $arrayReasignacionTocas = array();
            $sql = "select * from tblreasignaciontocas ";
            $this->_proveedorSigejupe->execute($sql);
            if (!$this->_proveedorSigejupe->error()) {
                if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                    $index = 0;
                    while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                        $arrayReasignacionTocas[$index]["idReasignacionToca"] = ($row["idReasignacionToca"]);
                        $index++;
                    }
                }
            } else {
                $encontroError = true;
                $mensajeError .= "ERROR AL CONSULTAR REASIGNACION TOCAS";
            }

            if (count($arrayReasignacionTocas) > 0 && $arrayReasignacionTocas != "") {
                foreach ($arrayReasignacionTocas as $reasignacionToca) {
                    $sql = "update tblreasignaciontocas ";
                    $sql .= " set activo = 'N' ";
                    $sql .= " where idReasignacionToca = '" . $reasignacionToca["idReasignacionToca"] . "'";
                    $this->_proveedorSigejupe->execute($sql);
                    if (!$this->_proveedorSigejupe->error()) {
                        echo "REASIGNACION DE TOCA ELIMINADA:" . $reasignacionToca["idReasignacionToca"];
                        echo "<br>";
                    } else {
                        $encontroError = true;
                        $mensajeError .= " ERROR AL ELIMINAR LA REASIGNACION DE LA TOCA: " . $reasignacionToca["idReasignacionToca"];
                        break;
                    }
                }
            }
        }

        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "<br>";
        #ELIMINAS SENTENCIAS TOCAS
        if (!$encontroError) {
            $arraySentenciasTocas = array();
            $sql = "select * from tblsentenciastocas ";
            $this->_proveedorSigejupe->execute($sql);
            if (!$this->_proveedorSigejupe->error()) {
                if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                    $index = 0;
                    while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                        $arraySentenciasTocas[$index]["idsentenciatoca"] = ($row["idsentenciatoca"]);
                        $index++;
                    }
                }
            } else {
                $encontroError = true;
                $mensajeError .= "ERROR AL CONSULTAR SENTENCIAS TOCAS";
            }

            if (count($arraySentenciasTocas) > 0 && $arraySentenciasTocas != "") {
                foreach ($arraySentenciasTocas as $sentenciaToca) {
                    $sql = "update tblsentenciastocas ";
                    $sql .= " set activo = 'N' ";
                    $sql .= " where idsentenciatoca = '" . $sentenciaToca["idsentenciatoca"] . "'";
                    $this->_proveedorSigejupe->execute($sql);
                    if (!$this->_proveedorSigejupe->error()) {
                        echo "SENTENCIA TOCA ELIMINADA:" . $sentenciaToca["idsentenciatoca"];
                        echo "<br>";
                    } else {
                        $encontroError = true;
                        $mensajeError .= " ERROR AL ELIMINAR SENTENCIA DE LA TOCA: " . $sentenciaToca["idsentenciatoca"];
                        break;
                    }
                }
            }
        }

        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "<br>";
        #ESTATUS BANDEJAS TOCAS
        if (!$encontroError) {
            $arrayBandejasTocas = array();
            $sql = "select * from tblestatustocasbandejas ";
            $this->_proveedorSigejupe->execute($sql);
            if (!$this->_proveedorSigejupe->error()) {
                if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                    $index = 0;
                    while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                        $arrayBandejasTocas[$index]["idEstatusTocaBandeja"] = ($row["idEstatusTocaBandeja"]);
                        $index++;
                    }
                }
            } else {
                $encontroError = true;
                $mensajeError .= "ERROR AL CONSULTAR SENTENCIAS TOCAS";
            }

            if (count($arrayBandejasTocas) > 0 && $arrayBandejasTocas != "") {
                foreach ($arrayBandejasTocas as $bandejaToca) {
                    $sql = "update tblestatustocasbandejas ";
                    $sql .= " set activo = 'N' ";
                    $sql .= " where idEstatusTocaBandeja = '" . $bandejaToca["idEstatusTocaBandeja"] . "'";
                    $this->_proveedorSigejupe->execute($sql);
                    if (!$this->_proveedorSigejupe->error()) {
                        echo "BANDEJA TOCA ELIMINADA:" . $bandejaToca["idEstatusTocaBandeja"];
                        echo "<br>";
                    } else {
                        $encontroError = true;
                        $mensajeError .= " ERROR AL ELIMINAR BANDEJA DE LA TOCA: " . $bandejaToca["idEstatusTocaBandeja"];
                        break;
                    }
                }
            }
        }

        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "<br>";
        #ASIGNACION RECURSOS
        if (!$encontroError) {
            $arrayAsignacionRecursos = array();
            $sql = "select * from tblasignarecursos ";
            $this->_proveedorSigejupe->execute($sql);
            if (!$this->_proveedorSigejupe->error()) {
                if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                    $index = 0;
                    while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                        $arrayAsignacionRecursos[$index]["idAsignaRecurso"] = ($row["idAsignaRecurso"]);
                        $index++;
                    }
                }
            } else {
                $encontroError = true;
                $mensajeError .= "ERROR AL CONSULTAR ASIGNACION DE RECURSOS";
            }

            if (count($arrayAsignacionRecursos) > 0 && $arrayAsignacionRecursos != "") {
                foreach ($arrayAsignacionRecursos as $asignaRecurso) {
                    $sql = "update tblasignarecursos ";
                    $sql .= " set activo = 'N' ";
                    $sql .= " where idAsignaRecurso = '" . $asignaRecurso["idAsignaRecurso"] . "'";
                    $this->_proveedorSigejupe->execute($sql);
                    if (!$this->_proveedorSigejupe->error()) {
                        echo "ASIGNACION DE RECURSO ELIMINADO:" . $asignaRecurso["idAsignaRecurso"];
                        echo "<br>";
                    } else {
                        $encontroError = true;
                        $mensajeError .= " ERROR AL ELIMINAR ASIGNACION DE RECURSO: " . $asignaRecurso["idAsignaRecurso"];
                        break;
                    }
                }
            }
        }

        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "#################################################################";
        echo "<br>";
        echo "<br>";
        #ELIMINA ACTUACIONES ESTATUS RADICACION
        if (!$encontroError) {
            $arrayActuacionesEstatusRad = array();
            $sql = "select * from tblactuacionesestatusrad ";
            $this->_proveedorSigejupe->execute($sql);
            if (!$this->_proveedorSigejupe->error()) {
                if ($row = $this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                    $index = 0;
                    while ($row = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                        $arrayActuacionesEstatusRad[$index]["idActuacionesEstatusRad"] = ($row["idActuacionesEstatusRad"]);
                        $index++;
                    }
                }
            } else {
                $encontroError = true;
                $mensajeError .= "ERROR AL CONSULTAR ACTUACIONES ESTATUS RAD";
            }

            if (count($arrayActuacionesEstatusRad) > 0 && $arrayActuacionesEstatusRad != "") {
                foreach ($arrayActuacionesEstatusRad as $actuacionEstatusRad) {
                    $sql = "update tblactuacionesestatusrad ";
                    $sql .= " set activo = 'N' ";
                    $sql .= " where idActuacionesEstatusRad = '" . $actuacionEstatusRad["idActuacionesEstatusRad"] . "'";
                    $this->_proveedorSigejupe->execute($sql);
                    if (!$this->_proveedorSigejupe->error()) {
                        echo "ACTUACION ESTATUS RADICACION ELIMINADA:" . $actuacionEstatusRad["idActuacionesEstatusRad"];
                        echo "<br>";
                    } else {
                        $encontroError = true;
                        $mensajeError .= " ERROR AL ELIMINAR ACTUACION ESTATUS RADICACION : " . $actuacionEstatusRad["idActuacionesEstatusRad"];
                        break;
                    }
                }
            }
        }
        
        if (!$encontroError) {
            $this->_proveedorSigejupe->execute("COMMIT");
//            $this->_proveedorSigejupe->execute("ROLLBACK");
        } else {
            echo $mensajeError;
            $this->_proveedorSigejupe->execute("ROLLBACK");
        }
        $this->_proveedorSigejupe->close();
    }

}

$EliminarTocasPruebas = new EliminarTocasPruebas();
$EliminarTocasPruebas->deleteTocasPruebas();
?>

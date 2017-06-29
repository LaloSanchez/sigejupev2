<?php

ini_set('max_execution_time', 300); //300 seconds = 5 minutes

include_once(dirname(__FILE__) . "/../../tribunal/connect/Proveedor.Class.php");

class MigracionTocasFacade {

    protected $_proveedorElectronico;
    protected $_proveedorSigejupe;

    public function __construct() {
        $this->_proveedorElectronico = new Proveedor('mysql', 'electronico');
        $this->_proveedorSigejupe = new Proveedor('mysql', 'sigejupe');
    }

    // Funcion para conectarse a una Base de Datos
    public function _conexionElectronico() {
        $this->_proveedorElectronico->connect();
    }

    // Funcion para conectarse a una Base de Datos
    public function _conexionSigejupe() {
        $this->_proveedorSigejupe->connect();
    }

    public function getMigrarTocas() {
        $this->_conexionElectronico();

        #OBTENEMOS LAS TOCAS DEL ELECTONICO(CARPETAS JUDICIALES)
        $arrayTocasElectronico = "";
        $sql = "select * from tblcarpetasjudiciales where cveTipoNumero = 10 and activo = 'S' and cveMateria = 3 ";
        $sql .= " and idCarpetaJudicial = 1715847"; #QUITAR
//        $sql .= " and cveAdscripcion = 10215  and anio = 2015 "; #QUITAR
//        $sql .= " limit 0,1;";
        $this->_proveedorElectronico->execute($sql);
        if (!$this->_proveedorElectronico->error()) {
            if ($this->_proveedorElectronico->rows($this->_proveedorElectronico->stmt) > 0) {
                $index = 0;
                while ($row = $this->_proveedorElectronico->fetch_array($this->_proveedorElectronico->stmt, 0)) {
                    $arrayTocasElectronico[$index]["idCarpetaJudicial"] = utf8_encode($row["idCarpetaJudicial"]);
                    $arrayTocasElectronico[$index]["numero"] = utf8_encode($row["numero"]);
                    $arrayTocasElectronico[$index]["anio"] = utf8_encode($row["anio"]);
                    $arrayTocasElectronico[$index]["cveTipoNumero"] = utf8_encode($row["cveTipoNumero"]);
                    $arrayTocasElectronico[$index]["nvaInstancia"] = utf8_encode($row["nvaInstancia"]);
                    $arrayTocasElectronico[$index]["cveAdscripcion"] = utf8_encode($row["cveAdscripcion"]);
                    $arrayTocasElectronico[$index]["cveMateria"] = utf8_encode($row["cveMateria"]);
                    $arrayTocasElectronico[$index]["fechaRegistro"] = utf8_encode($row["fechaRegistro"]);
                    $arrayTocasElectronico[$index]["fechaRadicacion"] = utf8_encode($row["fechaRadicacion"]);
                    $arrayTocasElectronico[$index]["cveUsuario"] = utf8_encode($row["cveUsuario"]);
                    $arrayTocasElectronico[$index]["observaciones"] = utf8_encode($row["observaciones"]);
                    $arrayTocasElectronico[$index]["cveEstatus"] = utf8_encode($row["cveEstatus"]);
                    $arrayTocasElectronico[$index]["cveFase"] = utf8_encode($row["cveFase"]);
                    $arrayTocasElectronico[$index]["carpetaInv"] = utf8_encode($row["carpetaInv"]);
                    $arrayTocasElectronico[$index]["activo"] = utf8_encode($row["activo"]);
                    $arrayTocasElectronico[$index]["idSecretariaJuzgado"] = utf8_encode($row["idSecretariaJuzgado"]);
                    $arrayTocasElectronico[$index]["cveTipoAmparo"] = utf8_encode($row["cveTipoAmparo"]);
                    $arrayTocasElectronico[$index]["fechaTermino"] = utf8_encode($row["fechaTermino"]);
                    $arrayTocasElectronico[$index]["fechaSuspencion"] = utf8_encode($row["fechaSuspencion"]);
                    $arrayTocasElectronico[$index]["numAmparo"] = utf8_encode($row["numAmparo"]);
                    $arrayTocasElectronico[$index]["AutoridadFederal"] = utf8_encode($row["AutoridadFederal"]);
                    $arrayTocasElectronico[$index]["detenido"] = utf8_encode($row["detenido"]);
                    $arrayTocasElectronico[$index]["cveAdscripcionOrigen"] = utf8_encode($row["cveAdscripcionOrigen"]);
                    $arrayTocasElectronico[$index]["cveEstado"] = utf8_encode($row["cveEstado"]);
                    $arrayTocasElectronico[$index]["nomAdscripcionOrigen"] = utf8_encode($row["nomAdscripcionOrigen"]);
                    $arrayTocasElectronico[$index]["numeroOrigen"] = utf8_encode($row["numeroOrigen"]);
                    $arrayTocasElectronico[$index]["numeroOficio"] = utf8_encode($row["numeroOficio"]);
                    $arrayTocasElectronico[$index]["fechaActualizacion"] = utf8_encode($row["fechaActualizacion"]);
                    $arrayTocasElectronico[$index]["descCarpetaJudicial"] = utf8_encode($row["descCarpetaJudicial"]);
                    $arrayTocasElectronico[$index]["fojas"] = utf8_encode($row["fojas"]);
                    $arrayTocasElectronico[$index]["numTocaRel"] = utf8_encode($row["numTocaRel"]);
                    $arrayTocasElectronico[$index]["aniTocaRel"] = utf8_encode($row["aniTocaRel"]);
                    $arrayTocasElectronico[$index]["sintesis"] = utf8_encode($row["sintesis"]);
                    $arrayTocasElectronico[$index]["fechaDevolucion"] = utf8_encode($row["fechaDevolucion"]);
                    $arrayTocasElectronico[$index]["numOficioEnvio"] = utf8_encode($row["numOficioEnvio"]);
                    $arrayTocasElectronico[$index]["cveOficialia"] = utf8_encode($row["cveOficialia"]);
                    $arrayTocasElectronico[$index]["presentaObj"] = utf8_encode($row["presentaObj"]);
                    $arrayTocasElectronico[$index]["numPromIni"] = utf8_encode($row["numPromIni"]);
                    $arrayTocasElectronico[$index]["aniPromIni"] = utf8_encode($row["aniPromIni"]);
                    $arrayTocasElectronico[$index]["tocasCarpetasJud"] = "";
                    $arrayTocasElectronico[$index]["partesTocas"] = "";
                    $index++;
                }
            }
        }

        #OBTENEMOS EL DETALLE DE LA TOCA(TOCAS CARPETAS JUDICIALES)
        $index = 0;
        foreach ($arrayTocasElectronico as $tocasElectronico) {
            $sql = "select * from tbltocascarpetasjud where idCarpetaJudicial = '" . $tocasElectronico["idCarpetaJudicial"] . "' and activo = 'S' ;";
            $this->_proveedorElectronico->execute($sql);
            if (!$this->_proveedorElectronico->error()) {
                if ($this->_proveedorElectronico->rows($this->_proveedorElectronico->stmt) > 0) {
                    while ($rowTocasCarpetas = $this->_proveedorElectronico->fetch_array($this->_proveedorElectronico->stmt, 0)) {
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["idTocaCarpetaJud"] = utf8_encode($rowTocasCarpetas["idTocaCarpetaJud"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["cveTipoApelacion"] = utf8_encode($rowTocasCarpetas["cveTipoApelacion"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["cveTipoRecurso"] = utf8_encode($rowTocasCarpetas["cveTipoRecurso"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["CveParteApela"] = utf8_encode($rowTocasCarpetas["CveParteApela"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["colegiada"] = utf8_encode($rowTocasCarpetas["colegiada"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["legislacion"] = utf8_encode($rowTocasCarpetas["legislacion"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["numero"] = utf8_encode($rowTocasCarpetas["numero"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["anio"] = utf8_encode($rowTocasCarpetas["anio"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["activo"] = utf8_encode($rowTocasCarpetas["activo"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["fechaRegistro"] = utf8_encode($rowTocasCarpetas["fechaRegistro"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["fechaActualizacion"] = utf8_encode($rowTocasCarpetas["fechaActualizacion"]);
                        $arrayTocasElectronico[$index]["tocasCarpetasJud"]["idCarpetaJudicial"] = utf8_encode($rowTocasCarpetas["idCarpetaJudicial"]);
                    }
                }
            }

            $arrayLitisCarpetas = "";
            $indexLitisCarpetas = 0;
            $sql = "select * from tbllitiscarpetasjud where idCarpetaJudicial = '" . $tocasElectronico["idCarpetaJudicial"] . "' group by idMateriaLiti ;";
            $this->_proveedorElectronico->execute($sql);
            if (!$this->_proveedorElectronico->error()) {
                if ($this->_proveedorElectronico->rows($this->_proveedorElectronico->stmt) > 0) {
                    while ($rowLitisCarpetas = $this->_proveedorElectronico->fetch_array($this->_proveedorElectronico->stmt, 0)) {
                        $arrayTocasElectronico[$index]["litisCarpetasJud"][$indexLitisCarpetas]["idLitiCarpetaJud"] = utf8_encode($rowLitisCarpetas["idLitiCarpetaJud"]);
                        $arrayTocasElectronico[$index]["litisCarpetasJud"][$indexLitisCarpetas]["idCarpetaJudicial"] = utf8_encode($rowLitisCarpetas["idCarpetaJudicial"]);
                        $arrayTocasElectronico[$index]["litisCarpetasJud"][$indexLitisCarpetas]["idMateriaLiti"] = utf8_encode($rowLitisCarpetas["idMateriaLiti"]);
                        $arrayTocasElectronico[$index]["litisCarpetasJud"][$indexLitisCarpetas]["idModalidadLiti"] = utf8_encode($rowLitisCarpetas["idModalidadLiti"]);
                        $arrayTocasElectronico[$index]["litisCarpetasJud"][$indexLitisCarpetas]["fechaActualizacion"] = utf8_encode($rowLitisCarpetas["fechaActualizacion"]);
                        $arrayTocasElectronico[$index]["litisCarpetasJud"][$indexLitisCarpetas]["fechaRegistro"] = utf8_encode($rowLitisCarpetas["fechaRegistro"]);
                        $arrayTocasElectronico[$index]["litisCarpetasJud"][$indexLitisCarpetas]["otroJuicioDelito"] = utf8_encode($rowLitisCarpetas["otroJuicioDelito"]);
                        $indexLitisCarpetas++;
                    }
                }
            }


            #OBTENEMOS A LAS PARTES DE LAS TOCAS(PARTES TOCAS)
            $arrayPartesCarpetas = "";
            $indexPartesCarpetas = 0;
            $sql = "select * from tblpartescarpetasjud where idCarpetaJudicial = '" . $tocasElectronico["idCarpetaJudicial"] . "';";
            $this->_proveedorElectronico->execute($sql);
            if (!$this->_proveedorElectronico->error()) {
                if ($this->_proveedorElectronico->rows($this->_proveedorElectronico->stmt) > 0) {
                    while ($rowPartesCarpetas = $this->_proveedorElectronico->fetch_array($this->_proveedorElectronico->stmt, 0)) {
                        $arrayPartesCarpetas[$indexPartesCarpetas]["idParteCarpeta"] = utf8_encode($rowPartesCarpetas["idParteCarpeta"]);
                        $arrayPartesCarpetas[$indexPartesCarpetas]["idParte"] = utf8_encode($rowPartesCarpetas["idParte"]);
                        $arrayPartesCarpetas[$indexPartesCarpetas]["idCarpetaJudicial"] = utf8_encode($rowPartesCarpetas["idCarpetaJudicial"]);
                        $arrayPartesCarpetas[$indexPartesCarpetas]["cveTipoParte"] = utf8_encode($rowPartesCarpetas["cveTipoParte"]);
                        $arrayPartesCarpetas[$indexPartesCarpetas]["fechaActualizacion"] = utf8_encode($rowPartesCarpetas["fechaActualizacion"]);
                        $arrayPartesCarpetas[$indexPartesCarpetas]["fechaRegistro"] = utf8_encode($rowPartesCarpetas["fechaRegistro"]);
                        $indexPartesCarpetas++;
                    }
                }
            }

            if ($arrayPartesCarpetas != "") {
                #OBTENEMOS A DETALLE DE LAS PARETES
                $indexPartes = 0;
                foreach ($arrayPartesCarpetas as $partesCarpetas) {
                    $sql = "select * from tblpartes where idParte = '" . $partesCarpetas["idParte"] . "' and activo = 'S';";
                    $this->_proveedorElectronico->execute($sql);
                    if (!$this->_proveedorElectronico->error()) {
                        if ($this->_proveedorElectronico->rows($this->_proveedorElectronico->stmt) > 0) {
                            while ($rowPartes = $this->_proveedorElectronico->fetch_array($this->_proveedorElectronico->stmt, 0)) {
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["idParte"] = utf8_encode($rowPartes["idParte"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["nombre"] = utf8_encode($rowPartes["nombre"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["paterno"] = utf8_encode($rowPartes["paterno"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["materno"] = utf8_encode($rowPartes["materno"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["edad"] = utf8_encode($rowPartes["edad"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["fechaNacimiento"] = utf8_encode($rowPartes["fechaNacimiento"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["CURP"] = utf8_encode($rowPartes["CURP"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["cveGenero"] = utf8_encode($rowPartes["cveGenero"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["activo"] = utf8_encode($rowPartes["activo"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["fechaRegistro"] = utf8_encode($rowPartes["fechaRegistro"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["detenido"] = utf8_encode($rowPartes["detenido"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["fechaActualizacion"] = utf8_encode($rowPartes["fechaActualizacion"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["cveTipoPersona"] = utf8_encode($rowPartes["cveTipoPersona"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["nombrePersonaMoral"] = utf8_encode($rowPartes["nombrePersonaMoral"]);
                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["cveTipoParte"] = utf8_encode($partesCarpetas["cveTipoParte"]);
//                                $arrayTocasElectronico[$index]["partesTocas"][$indexPartes]["litis"] = "";
                                $indexPartes++;
                            }
                        }
                    }
                }
            }
            $index++;
        }
        $this->_proveedorElectronico->close();
        $this->_conexionSigejupe();
        $contador = 1;
        $encontroError = false;
        $mensajeError = "";
        foreach ($arrayTocasElectronico as $tocaElectronico) {



            #OBTENEMOS LAS TOCAS DEL ELECTONICO(CARPETAS JUDICIALES)
            $existeTocaSigejupe = false;
            $sql = "select * from tblcarpetasjudiciales ";
            $sql .= "where numero = '" . $tocaElectronico["numero"] . "' and anio = '" . $tocaElectronico["anio"] . "' ";
            $sql .= " and cveJuzgado = '" . $tocaElectronico["cveAdscripcion"] . "' and activo = 'S' and cveTipoCarpeta = 6 ;";
            $this->_proveedorSigejupe->execute($sql);
            if (!$this->_proveedorSigejupe->error()) {
                if ($this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                    $existeTocaSigejupe = true;
                }
            } else {
                $encontroError = true;
                $mensajeError .= " --SE ECNONTRO EERROR EN LA CONSULTA PARA VERIRIFICAR SI EXISTE LA TOCA EN SIGEJUPE ";
            }

            if (!$encontroError) {
                if (!$existeTocaSigejupe) {
                    $arrayImputados = array();
                    $arrayOfendidos = array();
                    $arrayDelitos = array();
                    $idTocaSigejupe = 0;
                    if ($contador == 1) {
                        $numeroImputados = 0;
                        $numeroOfendidos = 0;
                        $numeroDelitos = 0;
                        $arrayDelitos = array();

                        if ($tocaElectronico["partesTocas"] != "" && count($tocaElectronico["partesTocas"]) > 0) {
                            foreach ($tocaElectronico["partesTocas"] as $partesTocas) {
                                if ($partesTocas["cveTipoParte"] == "2") {
                                    $numeroOfendidos++;
                                } else if ($partesTocas["cveTipoParte"] == "14") {
                                    $numeroImputados++;
                                }
//                                if ($partesTocas["litis"] != "" && count($partesTocas["litis"]) > 0) {
//                                    foreach ($partesTocas["litis"] as $delitosTocas) {
//                                        if (!in_array($delitosTocas["idMateriaLiti"], $arrayDelitos)) {
//                                            $arrayDelitos[] = $delitosTocas["idMateriaLiti"];
//                                            $numeroDelitos++;
//                                        }
//                                    }
//                                }
                            }
                            foreach ($tocaElectronico["litisCarpetasJud"] as $litis) {
                                $numeroDelitos++;
                            }
                        }

                        $sql = "insert into tblcarpetasjudiciales ";
                        $sql .= " (cveEtapaProcesal,cveConsignacion,cveTipoCarpeta,cveConsignacionA,numero,anio,fechaRadicacion,";
                        $sql .= " fechaRegistro,fechaActualizacion,activo,cveJuzgado,carpetaInv,nuc,";
                        $sql .= " cveUsuario,observaciones,numImputados,numOfendidos,numDelitos,";
                        $sql .= " cveEstatusCarpeta,incompetencia,cveTipoIncompetencia,acumulado,numAcumulado,";
                        $sql .= "fechaTermino,cveConclucion,ponderacion) ";
                        $sql .= " values ('6','4','6','1','" . $tocaElectronico["numero"] . "','" . $tocaElectronico["anio"] . "','" . $tocaElectronico["fechaRegistro"] . "', ";
                        $sql .= " '" . $tocaElectronico["fechaRadicacion"] . "','" . $tocaElectronico["fechaActualizacion"] . "','S','" . $tocaElectronico["cveAdscripcion"] . "',null,null, ";
                        $sql .= " '" . $tocaElectronico["cveUsuario"] . "','" . $tocaElectronico["observaciones"] . "','" . $numeroImputados . "','" . $numeroOfendidos . "','" . $numeroDelitos . "',";
                        $sql .= " '1','N',null,null,null,";
                        $sql .= " null,null,'3')";

                        $this->_proveedorSigejupe->execute($sql);
                        if (!$this->_proveedorSigejupe->error()) {
                            $idTocaSigejupe = $this->_proveedorSigejupe->lastID();
                            echo "ID REGISTRADO SIGEJUPE:" . $this->_proveedorSigejupe->lastID();
                            echo "-";
                            echo "ID ELECTRONICO:" . $tocaElectronico["idCarpetaJudicial"];
                            echo '<br>';
                            ////SE REGISTRAN LAS PARTES OFENDIDO; IMPUTADO Y APELANTE
                            foreach ($tocaElectronico["partesTocas"] as $partesTocasAux) {
                                if ($partesTocasAux["cveTipoParte"] == "14") {
                                    $sqlImp = "insert into tblimputadoscarpetas ";
                                    $sqlImp .= "(idCarpetaJudicial,activo,fechaRegistro,fechaActualizacion,detenido,nombre,paterno,materno,rfc,curp,cveTipoDetencion,";
                                    $sqlImp .= "LegalDetencion,cveGenero,cveTipoReligion,alias,fechaDeclaracion,cvePaisNacimiento,cveEstadoNacimiento,cveMunicipioNacimiento,";
                                    $sqlImp .= "fechaNacimiento,edad,cveTipoPersona,nombreMoral,cveNivelInstruccion,cveEstadoCivil,cveEspanol,cveAlfabetismo,cveDialectoIndigena,";
                                    $sqlImp .= "cveTipoFamiliaLinguistica,cveOcupacion,cveInterprete,cveEstadoPsicofisico,fechaImputacion,fechaControlDet,fecTerminoCons,fecCierreInv,";
                                    $sqlImp .= "estadoNacimiento,municipioNacimiento,relacionMoral,personaMoral,cveCereso,cveEtapaProcesal,cveTipoReincidencia,ingresoMensual,cveGrupoEdnico,";
                                    $sqlImp .= "TieneSobreseimiento,FechaSobreseimiento)";
                                    $sqlImp .= " values ('" . $idTocaSigejupe . "','S','" . $partesTocasAux["fechaRegistro"] . "',now(), 'N', '" . $partesTocasAux["nombre"] . "','" . $partesTocasAux["paterno"] . "', '" . $partesTocasAux["materno"] . "','Actualizame', 'Actualizame','4', ";
                                    $sqlImp .= "'N','3','8','Actualizame',null, '119', '15',null, ";
                                    $sqlImp .= "null,null,'" . $partesTocasAux["cveTipoPersona"] . "','" . $partesTocasAux["nombrePersonaMoral"] . "', '11','3','4','4','3', ";
                                    $sqlImp .= "'15','15','3','6', null,null,null,null,";
                                    $sqlImp .= "'Actualizame', 'Actualizame',null,'Actualizame','1','6','5',null,'72', ";
                                    $sqlImp .= "'N', null)";
                                    $this->_proveedorSigejupe->execute($sqlImp);
                                    if (!$this->_proveedorSigejupe->error()) {
                                        $arrayImputados[] = $this->_proveedorSigejupe->lastID();
                                        $idDefensor = $this->_proveedorSigejupe->lastID();
                                        $sqlImp = "insert into tblnacionalidadesimputadoscarpetas ";
                                        $sqlImp .= "(cvePais,activo,fechaRegistro,fechaActualizacion,idImputadoCarpeta)";
                                        $sqlImp .= " values('119', 'S', now(),now(),'" . $idDefensor . "')";
                                        $this->_proveedorSigejupe->execute($sqlImp);
                                        $sqlImp = "insert into tbldefensoresimputadoscarpetas ";
                                        $sqlImp .= "(idImputadoCarpeta,cveTipoDefensor,nombre,activo,fechaRegistro,fechaActualizacion)";
                                        $sqlImp .= " values('" . $idDefensor . "','5','Actualizame','S',now(),now())";
                                        $this->_proveedorSigejupe->execute($sqlImp);
                                    } else {
                                        $existeTocaSigejupe = false;
                                        $mensajeError .= " --SE ECNONTRO ERROR EN LA INSERCION DE IMPUATADOS EN SIGEJUPE ";
                                    }
                                } else if ($partesTocasAux["cveTipoParte"] == "2") {
                                    $sqlOfen = "insert into tblofendidoscarpetas ";
                                    $sqlOfen .= "(idCarpetaJudicial,activo,fechaRegistro,fechaActualizacion,nombre,paterno,materno,rfc,curp,";
                                    $sqlOfen .= "cveOcupacion,cveTipoPersona,cveGenero,cveTipoParte,cveTipoReligion,fechaNacimiento,edad,cvePaisNacimiento,";
                                    $sqlOfen .= "cveEstadoNacimiento,estadoNacimiento,cveMunicipioNacimiento,municipioNacimiento,cveEstadoCivil,cveAlfabetismo,";
                                    $sqlOfen .= "cveNivelInstruccion,cveEspanol,cveDialectoIndigena,cveTipoFamiliaLinguistica,cveInterprete,cveOrdenProteccion,";
                                    $sqlOfen .= "cveEstadoPsicofisico,nombreMoral,cveVictimaDeLaDelincuenciaOrganizada,cveVictimaDeViolenciaDeGenero,cveVictimaDeTrata,";
                                    $sqlOfen .= "cveVictimaDeAcoso,desaparecido,numHijos,embarazada,cveGrupoEdnico)";
                                    $sqlOfen .= " values ('" . $idTocaSigejupe . "','S','" . $partesTocasAux["fechaRegistro"] . "',now(), '" . $partesTocasAux["nombre"] . "','" . $partesTocasAux["paterno"] . "', '" . $partesTocasAux["materno"] . "','Actualizame', 'Actualizame', ";
                                    $sqlOfen .= "'15','" . $partesTocasAux["cveTipoPersona"] . "','3','2','8',null,null,'119',";
                                    $sqlOfen .= "'15','Actualizame',null,'Actualizame','3','4',";
                                    $sqlOfen .= "'11','4','3','15','3','8',";
                                    $sqlOfen .= "'6','" . $partesTocasAux["nombrePersonaMoral"] . "','3','3','3',";
                                    $sqlOfen .= "'3',null,null,null,'72')";

                                    $this->_proveedorSigejupe->execute($sqlOfen);
                                    if (!$this->_proveedorSigejupe->error()) {
                                        $arrayOfendidos[] = $this->_proveedorSigejupe->lastID();
                                        $idOfendido = $this->_proveedorSigejupe->lastID();
                                        $sqlOfen = "insert into tblnacionalidadesofendidoscarpetas ";
                                        $sqlOfen .= "(cvePais,activo,fechaRegistro,fechaActualizacion,idofendidoCarpeta)";
                                        $sqlOfen .= " values('119', 'S', now(),now(),'" . $idOfendido . "')";
                                        $this->_proveedorSigejupe->execute($sqlOfen);
                                        $sqlImp = "insert into tbldefensoresofendidoscarpetas ";
                                        $sqlImp .= "(idOfendidoCarpeta,cveTipoDefensor,nombre,activo,fechaRegistro,fechaActualizacion)";
                                        $sqlImp .= " values('" . $idOfendido . "','5','Actualizame','S',now(),now())";
                                        $this->_proveedorSigejupe->execute($sqlImp);
                                    } else {
                                        $existeTocaSigejupe = false;
                                        $mensajeError .= " --SE ECNONTRO ERROR EN LA INSERCION DE OFENDIDOS EN SIGEJUPE ";
                                    }
                                } else if ($partesTocasAux["cveTipoParte"] == "13") {
                                    $sqlApel = "insert into tblapelantescarpetas ";
                                    $sqlApel .= "(idCarpetaJudicial,nombre,paterno,materno,cveGenero,cveTipoPersona,";
                                    $sqlApel .= " nombreMoral,cveTipoApelante,domicilio,email,activo,fechaRegistro,fechaActualizacion)";
                                    $sqlApel .= " values ('" . $idTocaSigejupe . "','" . $partesTocasAux["nombre"] . "','" . $partesTocasAux["paterno"] . "', '" . $partesTocasAux["materno"] . "','3', '" . $partesTocasAux["cveTipoPersona"] . "', ";
                                    $sqlApel .= " '" . $partesTocasAux["nombrePersonaMoral"] . "','" . $tocaElectronico["tocasCarpetasJud"]["CveParteApela"] . "', 'Actualizame', 'Actualizame','S', '" . $partesTocasAux["fechaRegistro"] . "',now()) ";
                                    $this->_proveedorSigejupe->execute($sqlApel);
                                    if (!$this->_proveedorSigejupe->error()) {
                                        
                                    } else {
                                        $existeTocaSigejupe = false;
                                        $mensajeError .= " --SE ECNONTRO ERROR EN LA INSERCION DE APELANTES EN SIGEJUPE ";
                                    }
                                }
                            }

                            //FIN DE INSERCION DE LAS PARTES
                            ///INSERCION DE DELITOS
                            foreach ($tocaElectronico["litisCarpetasJud"] as $litis) {
//                                print_r($litis);
                                $delitoSige = 0;
                                $sql = "select * from delitoselectronico where idMateriaLiti = '" . $litis["idMateriaLiti"] . "' and activo = 'S' ;";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    if ($this->_proveedorSigejupe->rows($this->_proveedorSigejupe->stmt) > 0) {
                                        while ($rowDelitoSige = $this->_proveedorSigejupe->fetch_array($this->_proveedorSigejupe->stmt, 0)) {
                                            $delitoSige = utf8_encode($rowDelitoSige["cveDelito"]);
                                        }
                                    }
                                }
                                $sql = "insert into tbldelitoscarpetas";
                                $sql .= "(cveDelito,activo,fechaRegistro,fechaActualizacion,idCarpetaJudicial)";
                                $sql .= " values('" . $delitoSige . "', 'S', '" . $litis["fechaRegistro"] . "',now(),'" . $idTocaSigejupe . "')";
                                $this->_proveedorSigejupe->execute($sql);
                                if (!$this->_proveedorSigejupe->error()) {
                                    $arrayDelitos[] = $this->_proveedorSigejupe->lastID();
                                } else {
                                    $existeTocaSigejupe = false;
                                    $mensajeError .= " --SE ECNONTRO ERROR EN LA INSERCION DE DELITOS EN SIGEJUPE ";
                                }
                            }
                            ///FIN INSERCION DE DELITOS
                            ////DEFINICION DE RELACIONES
                            foreach ($arrayImputados as $imputado) {
                                foreach ($arrayOfendidos as $ofendido) {
                                    foreach ($arrayDelitos as $delito) {
                                        $sql = "insert into tblimpofedelcarpetas";
                                        $sql .= "(idCarpetaJudicial,idImputadoCarpeta,idOfendidoCarpeta,idDelitoCarpeta,cveModalidad,";
                                        $sql .= " cveComision,cveConcurso,cveClasificacionDelitoOrden,cveElementoComision,";
                                        $sql .= "cveClasificacionDelito,cveMunicipio,cveEntidad,cveFormaAccion,cveConsumacion,cveGradoParticipacion,";
                                        $sql .= "cveRelacionImpOfe,CveTerminacion,activo,fechaDelito,direccion,colonia,numInterior,numExterior,cp,fechaRegistro,fechaActualizacion)";
                                        $sql .= " values('" . $idTocaSigejupe . "','" . $imputado . "','" . $ofendido . "','" . $delito . "','7',";
                                        $sql .= " '4','4','5', '6',";
                                        $sql .= " '4',null,null,'4','4','10',";
                                        $sql .= " '10','1','S',now(),null,null,null,null,null,now(),now())";
                                        $this->_proveedorSigejupe->execute($sql);
                                        if (!$this->_proveedorSigejupe->error()) {
                                            $arrayDelitos[] = $this->_proveedorSigejupe->lastID();
                                        } else {
                                            $existeTocaSigejupe = false;
                                            $mensajeError .= " --SE ECNONTRO ERROR EN LA INSERCION DE RELACIONES EN SIGEJUPE ";
                                        }
                                    }
                                }
                            }
                        } else {
                            $existeTocaSigejupe = false;
                            $mensajeError .= " --SE ECNONTRO EERROR EN LA INSERCION DE LA TOCA EN SIGEJUPE ";
                            echo "ID ELECTRONICO NO REGISTRADA :" . $tocaElectronico["idCarpetaJudicial"];
                            echo '<br>';
                        }

                        if (!$encontroError) {
                            
                        }
                    }
                    $contador++;
                }
            }
        }
        $this->_proveedorSigejupe->close();
    }

    public function setAudienciaIndividual($idAudiencia, $urlAuronix) {
        $this->_conexionSigejupe();
        $auronixController = new AuronixController();
        $respuetsaAuronix = $auronixController->getDetalleAudiencia($idAudiencia, $urlAuronix, $this->_proveedorSigejupe, "manual");
        $this->_proveedorSigejupe->close();
        return $respuetsaAuronix;
    }

    public function deleteAudienciaIndividual($idAudienciaAuronix, $urlAuronix, $idAudiencia) {
        $this->_conexionSigejupe();
        $auronixController = new AuronixController();
        $respuetsaAuronix = $auronixController->deleteAudiencia($idAudienciaAuronix, $urlAuronix, $this->_proveedorSigejupe, $idAudiencia, "manual");
        $this->_proveedorSigejupe->close();
        return $respuetsaAuronix;
    }

    public function consultaDetalleAudienciaAuronix($idAudienciaAuronix, $urlAuronix, $idAudiencia) {
        $this->_conexionSigejupe();
        $auronixController = new AuronixController();
        $respuetsaAuronix = $auronixController->selectDetalleAudiencia($idAudienciaAuronix, $urlAuronix, $this->_proveedorSigejupe, $idAudiencia, "manual");
        $this->_proveedorSigejupe->close();
        return $respuetsaAuronix;
    }

}

?>

<?php

//ihs
/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

    class ReporteofendidosFacade {

        private $proveedor;
        private $camposNumDelitos = "";

        public function __construct() {
            
        }

        public function validarReporteOfendidos($datos) {
            $datos["numero"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["numero"], "utf8") : strtoupper($datos["numero"]))))));
            $datos["anio"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["anio"], "utf8") : strtoupper($datos["anio"]))))));
            $datos["cveJuzgado"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveJuzgado"], "utf8") : strtoupper($datos["cveJuzgado"]))))));
            $datos["cveTipoCarpeta"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveTipoCarpeta"], "utf8") : strtoupper($datos["cveTipoCarpeta"]))))));
            $datos["cveRegion"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveRegion"], "utf8") : strtoupper($datos["cveRegion"]))))));
            $datos["cveDistrito"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveDistrito"], "utf8") : strtoupper($datos["cveDistrito"]))))));
            $datos["nivel"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["nivel"], "utf8") : strtoupper($datos["nivel"]))))));
            $datos["cveTipoJuzgado"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveTipoJuzgado"], "utf8") : strtoupper($datos["cveTipoJuzgado"]))))));
            $datos["porGenero"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["porGenero"], "utf8") : strtoupper($datos["porGenero"]))))));
            $datos["cveGenero"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveGenero"], "utf8") : strtoupper($datos["cveGenero"]))))));
            $datos["intervaloEdad"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["intervaloEdad"], "utf8") : strtoupper($datos["intervaloEdad"]))))));
            $datos["detalles"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["detalles"], "utf8") : strtoupper($datos["detalles"]))))));
            $datos["edadMin"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["edadMin"], "utf8") : strtoupper($datos["edadMin"]))))));
            $datos["edadMax"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["edadMax"], "utf8") : strtoupper($datos["edadMax"]))))));
            $datos["relacionImputado"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["relacionImputado"], "utf8") : strtoupper($datos["relacionImputado"]))))));
            $datos["porDelito"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["porDelito"], "utf8") : strtoupper($datos["porDelito"]))))));
            $datos["cveDelito"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveDelito"], "utf8") : strtoupper($datos["cveDelito"]))))));
            $datos["porMes"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["porMes"], "utf8") : strtoupper($datos["porMes"]))))));
            $datos["porMunicipio"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["porMunicipio"], "utf8") : strtoupper($datos["porMunicipio"]))))));
            $datos["cveMunicipio"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveMunicipio"], "utf8") : strtoupper($datos["cveMunicipio"]))))));
            $datos["porOcupacion"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["porOcupacion"], "utf8") : strtoupper($datos["porOcupacion"]))))));
            $datos["cveOcupacion"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveOcupacion"], "utf8") : strtoupper($datos["cveOcupacion"]))))));
            $datos["porNumDelitos"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["porNumDelitos"], "utf8") : strtoupper($datos["porNumDelitos"]))))));
            $datos["cveRelacionImpOfe"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveRelacionImpOfe"], "utf8") : strtoupper($datos["cveRelacionImpOfe"]))))));
            $datos["rangoVictimas"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["rangoVictimas"], "utf8") : strtoupper($datos["rangoVictimas"]))))));
            $datos["cveTipoPersona"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveTipoPersona"], "utf8") : strtoupper($datos["cveTipoPersona"]))))));
            $datos["cveTipoParte"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveTipoParte"], "utf8") : strtoupper($datos["cveTipoParte"]))))));
            $datos["idOfendidoCarpeta"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["idOfendidoCarpeta"], "utf8") : strtoupper($datos["idOfendidoCarpeta"]))))));
            $datos["cveModalidad"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveModalidad"], "utf8") : strtoupper($datos["cveModalidad"]))))));
            $datos["cveNivelInstruccion"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveNivelInstruccion"], "utf8") : strtoupper($datos["cveNivelInstruccion"]))))));
            return $datos;
        }

        private function agregarCondicionPorTipoViolencia($params, $datos) {
            switch ($datos["cveTipoViolencia"]) {
                case 1: $params["conditions"].=" AND oc.cveVictimaDeAcoso=1";
                    break;
                case 2: $params["conditions"].=" AND oc.cveVictimaDeLaDelincuenciaOrganizada =1";
                    break;
                case 3: $params["conditions"].=" AND oc.cveVictimaDeTrata=1";
                    break;
                case 4: $params["conditions"].=" AND oc.cveVictimaDeViolenciaDeGenero=1";
                    break;
            }
            return $params;
        }

        private function agregarPorTipoViolencia($params) {
            $params["fields"] = " sum(CASE WHEN (oc.cveVictimaDeTrata =1) THEN 1 ELSE 0 END) vTrata,
            sum(CASE WHEN (oc.cveVictimaDeLaDelincuenciaOrganizada =1) THEN 1 ELSE 0 END) vDelincuencia,
            sum(CASE WHEN (oc.cveVictimaDeViolenciaDeGenero =1) THEN 1 ELSE 0 END) vViolencia,
            sum(CASE WHEN (oc.cveVictimaDeAcoso =1) THEN 1 ELSE 0 END) vAcoso," . $params["fields"];
            return $params;
        }

        private function obtenerCamposSubQuery($subCampos) {
            $campos = "";
            if ($subCampos != "") {
                $vecCampos = explode(",", $subCampos);
                $total = count($vecCampos);
                for ($i = 0; $i < $total; $i++) {
                    $auxVecCampos = explode(".", $vecCampos[$i]);
                    if (count($auxVecCampos) > 1) {
                        $campos.=",consulta." . $auxVecCampos[1];
                    } else {
                        $campos.=",consulta." . $vecCampos[$i];
                    }
                }
                $campos = substr($campos, 1);
            }
            return $campos;
        }

        private function agregarIntervaloEdad($params) {
            $params["fields"] = " CASE WHEN (oc.edad BETWEEN 1 AND 6) THEN 'De 1 a 6' ELSE
            CASE WHEN (oc.edad BETWEEN 7 AND 12) THEN 'De 7 a 12' ELSE
            CASE WHEN (oc.edad BETWEEN 13 AND 18) THEN 'De 13 a 18' ELSE
            CASE WHEN (oc.edad BETWEEN 19 AND 24) THEN 'De 19 a 24' ELSE
            CASE WHEN (oc.edad BETWEEN 25 AND 30) THEN 'De 25 a 30' ELSE
            CASE WHEN (oc.edad BETWEEN 31 AND 36) THEN 'De 31 a 36' ELSE
            CASE WHEN (oc.edad BETWEEN 37 AND 42) THEN 'De 37 a 42' ELSE
            CASE WHEN (oc.edad >= 43) THEN 'De 43 o m�s' ELSE
            CASE WHEN (oc.edad is null OR oc.edad=0) THEN 'No identificada'
            END END END END END END END END END rangoEdad," . $params["fields"];
            $params["groups"] = $this->agregarGroupBy($params["groups"], "rangoEdad");
            $this->camposNumDelitos.=",consulta.rangoEdad";
            return $params;
        }

        private function agregarCondicionIntervaloEdad($params, $datos) {
            $auxCampos = " CASE WHEN (oc.edad ";
            if ($datos["intervaloEdad"] == "N") {
                $params["conditions"].=" AND (oc.edad=0 OR oc.edad is null)";
                $auxCampos .="is null OR oc.edad=0) THEN 'No identificada'";
            } else {
                if ($datos["intervaloEdad"] != "43") {
                    $edadMax = $datos["intervaloEdad"] + 6;
                    $params["conditions"].=" AND oc.edad>=" . $datos["intervaloEdad"] . " AND oc.edad<" . $edadMax;
                    $auxCampos .="BETWEEN " . $datos["intervaloEdad"] . " AND " . $edadMax . ") THEN 'De " . $datos["intervaloEdad"] . " a " . $edadMax . "'";
                } else {
                    $params["conditions"].=" AND oc.edad>=" . $datos["intervaloEdad"];
                    $auxCampos .=">= " . $datos["intervaloEdad"] . ") THEN 'De " . $datos["intervaloEdad"] . " o m�s'";
                }
            }
            $params["fields"] = $auxCampos . " END rangoEdad," . $params["fields"];
            return $params;
        }

        private function agregarGroupBy($group, $grupo) {
            if ($group != "") {
                $group.="," . $grupo;
            } else {
                $group = $grupo;
            }
            return $group;
        }

        public function reporteOfendidos($datos, $paginacion) {
            $datos = $this->validarReporteOfendidos($datos);
            $params = array();
            $params["fields"] = " count(oc.idOfendidoCarpeta) as totalCount,oc.idOfendidoCarpeta";
            $params["orders"] = " totalCount DESC";
            $params["tables"] = "tblcarpetasjudiciales cj,tblofendidoscarpetas oc,tbljuzgados j 
                INNER JOIN tbldistritos d ON(j.cveDistrito=d.cveDistrito)
                INNER JOIN tblregiones r ON(j.cveRegion=r.cveRegion)";
            $params["conditions"] = "cj.activo='S' AND oc.activo='S' AND j.cveJuzgado=cj.cveJuzgado 
            AND d.activo='S' AND r.activo='S' AND cj.idCarpetajudicial=oc.idCarpetajudicial AND j.activo='S'
            AND cj.cveEstatusCarpeta=1";
            $params["groups"] = "";
            switch ($datos["nivel"]) {
                case 1: break;
                case 2: $params["groups"] = "r.cveRegion";
                    $params["fields"] .= ",r.cveRegion,r.desRegion";
                    $this->camposNumDelitos.=",consulta.cveRegion,consulta.desRegion";
                    break;
                case 3: $params["groups"] = "d.cveDistrito";
                    $params["fields"] .= ",d.cveDistrito,d.desDistrito";
                    $this->camposNumDelitos.=",consulta.cveDistrito,consulta.desDistrito";
                    break;
                case 4: $params["groups"] = "j.cveJuzgado";
                    $params["fields"] .= ",j.cveJuzgado,j.desJuzgado";
                    $this->camposNumDelitos.=",consulta.cveJuzgado,consulta.desJuzgado";
                    break;
                case 5:
                    $params["groups"] = "oc.idOfendidoCarpeta";
                    $params["fields"] .= ",oc.nombre,oc.paterno,oc.materno,oc.nombreMoral,oc.cveTipoPersona
                    ,cj.numero,cj.anio,tc.desTipoCarpeta";
                    $this->camposNumDelitos .= ",consulta.idOfendidoCarpeta,consulta.nombre,consulta.paterno,consulta.materno,
                        consulta.nombreMoral,consulta.cveTipoPersona,consulta.numero,consulta.anio,consulta.desTipoCarpeta";
                    $params["tables"].=",tbltiposcarpetas tc";
                    $params["conditions"].=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta AND tc.activo='S'";
                    $params["orders"] = "oc.nombre,oc.nombreMoral DESC";
                    break;
                case 6: $params["fields"] = "oc.idOfendidoCarpeta,oc.nombre,oc.paterno,oc.materno,oc.nombreMoral,oc.edad,ic.nombre as icnombre,ic.paterno as icpaterno,ic.materno as icmaterno,ic.nombreMoral as icnombreMoral
                    ,oc.cveTipoPersona,ic.cveTipoPersona as iccveTipoPersona,iodc.cveRelacionImpOfe
                    ,cj.numero,cj.anio,iodc.fechaRegistro as iodcfechaRegistro,tc.desTipoCarpeta,de.desDelito
                    ,oc.cveVictimaDeTrata as vTrata,oc.cveVictimaDeLaDelincuenciaOrganizada as vDelincuencia
                    ,oc.cveVictimaDeViolenciaDeGenero as vViolencia,oc.cveVictimaDeAcoso as vAcoso";
                    $params["tables"].=",tbltiposcarpetas tc,tblimpofedelcarpetas iodc,tblimputadoscarpetas ic
                       ,tbldelitoscarpetas dc,tbldelitos de";
                    $params["conditions"].=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta AND tc.activo='S'
                       AND iodc.idOfendidoCarpeta=oc.idOfendidoCarpeta AND iodc.activo='S'
                       AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta AND ic.activo='S'
                       AND iodc.idDelitoCarpeta=dc.idDelitoCarpeta AND dc.cveDelito=de.cveDelito 
                       AND dc.activo='S' AND de.activo='S'";
                    $params["orders"] = "cj.anio,cj.numero DESC";
                    break;
            }
            if ($datos["cveRegion"] != "") {
                $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
            }
            if ($datos["cveDistrito"] != "") {
                $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
            }
            if ($datos["cveJuzgado"] != "") {
                $params["conditions"].=" AND cj.cveJuzgado=" . $datos["cveJuzgado"];
            }
            if ($datos["numero"] != "") {
                $params["conditions"].=" AND cj.numero=" . $datos["numero"];
            }
            if ($datos["porMes"] != "") {
                $mesAnio = explode("/", $datos["porMes"]);
                if ($mesAnio[0] != "") {
                    $params["conditions"] .= " AND (month(cj.fechaRadicacion)=$mesAnio[0])";
                }
                if ($mesAnio[1] != "") {
                    $params["conditions"].=" AND (year(cj.fechaRadicacion)=$mesAnio[1]) ";
                }
            }
            if ($datos["anio"] != "") {
                $params["conditions"].=" AND cj.anio=" . $datos["anio"];
            }
            if ($datos["edadMin"] != "") {
                $params["conditions"].=" AND oc.edad>=" . $datos["edadMin"];
            }
            if ($datos["edadMax"] != "") {
                $params["conditions"].=" AND oc.edad<=" . $datos["edadMax"];
            }
            if ($datos["cveTipoCarpeta"] != "") {
                $params["conditions"].=" AND cj.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
            }
            if ($datos["cveTipoJuzgado"] != "") {
                $params["conditions"].=" AND j.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
            }
            if ($datos["cveTipoPersona"] != "") {
                $params["conditions"].=" AND oc.cveTipoPersona=" . $datos["cveTipoPersona"];
            }
            if ($datos["porGenero"] == "S") {
                $params["fields"].=",oc.cveGenero";
                $this->camposNumDelitos.=",consulta.cveGenero";
                if ($datos["cveGenero"] != "") {
                    $params["conditions"].=" AND oc.cveGenero=" . $datos["cveGenero"];
                } else {
                    $params["groups"] = $this->agregarGroupBy($params["groups"], "oc.cveGenero");
                }
            }
            if ($datos["intervaloEdad"] == "S") {
                $params = $this->agregarIntervaloEdad($params);
            } else {
                if ($datos["intervaloEdad"] != "") {
                    $params = $this->agregarCondicionIntervaloEdad($params, $datos);
                }
            }
            if ($datos["cveTipoParte"] != "") {
                $params["conditions"].=" AND oc.cveTipoParte=" . $datos["cveTipoParte"];
            } else {
                $params["conditions"].=" AND (oc.cveTipoParte=2 OR oc.cveTipoParte=4)";
            }
            if ($datos["porOcupacion"] == "S") {
                $params["fields"] .= ",oc.cveOcupacion";
                $this->camposNumDelitos.=",consulta.cveOcupacion";
                if ($datos["cveOcupacion"] != "") {
                    $params["conditions"].=" AND oc.cveOcupacion=" . $datos["cveOcupacion"];
                } else {
                    $params["groups"] = $this->agregarGroupBy($params["groups"], "oc.cveOcupacion");
                }
            }
            if ($datos["idOfendidoCarpeta"] != "") {
                $params["conditions"].=" AND oc.idOfendidoCarpeta=" . $datos["idOfendidoCarpeta"];
            }
            if ((($datos["relacionImputado"] == "S") || ($datos["porNumDelitos"] == "S") || ($datos["porDelito"] == "S") || ($datos["porTipoViolencia"] == "S") || ($datos["porModalidad"] == "S")) && ($datos["detalles"] == "")) {
                $params["tables"] .= ",tblimpofedelcarpetas iodc";
                $params["conditions"] .= " AND iodc.idOfendidoCarpeta=oc.idOfendidoCarpeta AND iodc.activo='S'";
            }
            if ($datos["relacionImputado"] == "S") {
                $params["fields"] .=",trio.cveRelacionImpOfe";
                $this->camposNumDelitos.=",consulta.cveRelacionImpOfe";
                $params["tables"] .= ",tbltiposrelimpofe trio";
                $params["conditions"] .= " AND trio.cveRelacionImpOfe=iodc.cveRelacionImpOfe AND trio.activo='S'";
                if ($datos["cveRelacionImpOfe"] != "") {
                    $params["conditions"] .=" AND iodc.cveRelacionImpOfe=" . $datos["cveRelacionImpOfe"];
                } else {
                    $params["groups"] = $this->agregarGroupBy($params["groups"], "trio.cveRelacionImpOfe");
                }
            }
            if (($datos["porDelito"] == "S") && ($datos["detalles"] == "")) {
                $params["fields"] .=",dc.cveDelito";
                $params["tables"] .=",tbldelitoscarpetas dc";
                $params["conditions"] .=" AND iodc.idDelitoCarpeta=dc.idDelitoCarpeta AND dc.activo='S'";
                if ($datos["cveDelito"] == "") {
                    $params["groups"] = $this->agregarGroupBy($params["groups"], "dc.cveDelito");
                }
            }
            if ($datos["cveDelito"] != "") {
                $params["conditions"] .=" AND dc.cveDelito=" . $datos["cveDelito"];
            }
            if (($datos["porTipoViolencia"] == "S") && ($datos["detalles"] == "")) {
                $params = $this->agregarPorTipoViolencia($params);
                if ($datos["cveTipoViolencia"] == "") {
                    $params["conditions"].=" AND (oc.cveVictimaDeAcoso=1 OR oc.cveVictimaDeTrata=1
                OR oc.cveVictimaDeLaDelincuenciaOrganizada=1 OR oc.cveVictimaDeViolenciaDeGenero=1)";
                }
            }
            if ($datos["cveTipoViolencia"] != "") {
                $params = $this->agregarCondicionPorTipoViolencia($params, $datos);
            }
            if ($datos["porModalidad"] == "S") {
                $params["fields"] .= ",iodc.cveModalidad";
                $this->camposNumDelitos.=",consulta.cveModalidad";
                if ($datos["cveModalidad"] != "") {
                    $params["conditions"].=" AND iodc.cveModalidad=" . $datos["cveModalidad"];
                } else {
                    $params["groups"] = $this->agregarGroupBy($params["groups"], "iodc.cveModalidad");
                }
            }
            if ($datos["porEscolaridad"] == "S") {
                $params["fields"] .= ",oc.cveNivelInstruccion";
                $this->camposNumDelitos.=",consulta.cveNivelInstruccion";
                if ($datos["cveNivelInstruccion"] != "") {
                    $params["conditions"] .= " AND oc.cveNivelInstruccion=" . $datos["cveNivelInstruccion"];
                } else {
                    $params["groups"] = $this->agregarGroupBy($params["groups"], "oc.cveNivelInstruccion");
                }
            }
            if ($paginacion["fechaDesde"] != "") {
                $fechaInicio = explode("/", $paginacion["fechaDesde"]);
                $params["conditions"].= " AND oc.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($paginacion["fechaHasta"] != "") {
                    $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                    $params["conditions"].=" AND  oc.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59' ";
                }
            }
            if (($datos["porNumDelitos"] == "S") && ($datos["detalles"] == "")) {
                $group = $this->obtenerCamposSubQuery($params["groups"]);
                $fields = "count(consulta.idOfendidoCarpeta) as totalCount,";
                if ($group != "") {
                    $group = " GROUP BY rangoVictimas," . $group;
                } else {
                    $group = " GROUP BY rangoVictimas";
                }
                if ($datos["nivel"] == 5) {
                    $group = "";
                    $fields = "consulta.idOfendidoCarpeta as totalCount,";
                }
                $params["fields"].=",dc.cveDelito";
                $params["tables"].=",tbldelitoscarpetas dc";
                $params["conditions"].=" AND iodc.idDelitoCarpeta=dc.idDelitoCarpeta AND dc.activo='S'";
                $campos = $fields . "CASE WHEN (consulta.totalCount=1) THEN 'V�ctimas de 1 delito' ELSE
                CASE WHEN (consulta.totalCount=2) THEN 'V�ctimas de 2 delitos' ELSE
                CASE WHEN (consulta.totalCount=3) THEN 'V�ctimas de 3 delitos' ELSE
                CASE WHEN (consulta.totalCount=4) THEN 'V�ctimas de 4 delitos' ELSE
                CASE WHEN (consulta.totalCount=5) THEN 'V�ctimas de 5 delitos' ELSE
                CASE WHEN (consulta.totalCount>5) THEN 'V�ctimas de 6 o m�s delitos'
                END END END END END END rangoVictimas" . $this->camposNumDelitos;
                $params["fields"] = $campos . " FROM(SELECT " . $params["fields"];
                if ($datos["rangoVictimas"] != "") {
                    $vecRangoVictimas = explode(" ", $datos["rangoVictimas"]);
                    $params["orders"].=") AS consulta WHERE consulta.totalCount";
                    if ($vecRangoVictimas[2] == 6) {
                        $params["orders"].=" >5";
                    } else {
                        $params["orders"].=" =" . $vecRangoVictimas[2];
                    }
                    $params["orders"].=$group;
                } else {
                    $params["orders"].=") AS consulta" . $group;
                }
                $params["orders"].=" ORDER BY totalCount DESC";
                if ($datos["nivel"] != 5) {                                     //oc.idOfendidoCarpeta
                    $params["groups"] = $this->agregarGroupBy($params["groups"], "iodc.idCarpetaJudicial,iodc.idOfendidoCarpeta,iodc.idDelitoCarpeta");
                }
            }
            if ($datos["detalles"] == "DETALLE") {
                $params["groups"] = "";
            }
            if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
                $aux = "count(x.totalCount) as totalCount";
                if (($datos["detalles"] == "DETALLE")) {
                    $aux = "count(x.idOfendidoCarpeta) as totalCount";
                }
                $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
                $params["orders"].=") as x";
            }
            $SelectDao = new SelectDAO();
            return $SelectDao->selectDAO($params, null, $paginacion);
        }

    }

    @$accion = $_POST["accion"];

//------------Param Paginaci�n
    $param = array();
    @$param["pag"] = $_POST['pag'];
    $param["pag"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($param["pag"], "utf8") : strtoupper($param["pag"]))))));
    @$param["cantxPag"] = $_POST['cantxPag'];
    $param["cantxPag"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($param["cantxPag"], "utf8") : strtoupper($param["cantxPag"]))))));
    @$param["paginacion"] = $_POST['paginacion'];
    @$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
    $param["fechaDesde"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($param["fechaDesde"], "utf8") : strtoupper($param["fechaDesde"]))))));
    @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
    $param["fechaHasta"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($param["fechaHasta"], "utf8") : strtoupper($param["fechaHasta"]))))));
//----------------------------

    $reporteofendidosFacade = new ReporteofendidosFacade();

    if ($accion == "consultar_ofendidosCarpetas_Reporte") {
        $datos = array();
        @$datos["numero"] = $_POST["numero"];
        @$datos["anio"] = $_POST["anio"];
        @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datos["cveTipoCarpeta"] = $_POST["cveTipoCarpeta"];
        @$datos["cveRegion"] = $_POST["cveRegion"];
        @$datos["cveDistrito"] = $_POST["cveDistrito"];
        @$datos["nivel"] = $_POST["nivel"];
        @$datos["cveTipoJuzgado"] = $_POST["cveTipoJuzgado"];
        @$datos["porGenero"] = $_POST["porGenero"];
        @$datos["cveGenero"] = $_POST["cveGenero"];
        @$datos["intervaloEdad"] = $_POST["intervaloEdad"];
        @$datos["detalles"] = $_POST["detalles"];
        @$datos["edadMin"] = $_POST["edadMin"];
        @$datos["edadMax"] = $_POST["edadMax"];
        @$datos["relacionImputado"] = $_POST["relacionImputado"];
        @$datos["porDelito"] = $_POST["porDelito"];
        @$datos["cveDelito"] = $_POST["cveDelito"];
        @$datos["porMes"] = $_POST["porMes"];
        @$datos["porMunicipio"] = $_POST["porMunicipio"];
        @$datos["cveMunicipio"] = $_POST["cveMunicipio"];
        @$datos["porOcupacion"] = $_POST["porOcupacion"];
        @$datos["cveOcupacion"] = $_POST["cveOcupacion"];
        @$datos["porNumDelitos"] = $_POST["porNumDelitos"];
        @$datos["cveRelacionImpOfe"] = $_POST["cveRelacionImpOfe"];
        @$datos["rangoVictimas"] = $_POST["rangoVictimas"];
        @$datos["cveTipoPersona"] = $_POST["cveTipoPersona"];
        @$datos["cveTipoParte"] = $_POST['cmbTipoParteMoral'];
        @$datos["idOfendidoCarpeta"] = $_POST["idOfendidoCarpeta"];
        @$datos["porTipoViolencia"] = $_POST["porTipoViolencia"];
        @$datos["cveTipoViolencia"] = $_POST["cveTipoViolencia"];
        @$datos["porModalidad"] = $_POST["porModalidad"];
        @$datos["cveModalidad"] = $_POST["cveModalidad"];
        @$datos["porEscolaridad"] = $_POST["porEscolaridad"];
        @$datos["cveNivelInstruccion"] = $_POST["cveNivelInstruccion"];
        echo $reporteofendidosFacade->reporteOfendidos($datos, $param);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//Tipos Carpeta
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//Violencia de genero carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");
//violencia factores sociales carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");
//violencia homicidios dolosos carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");

class ReporteCausasViolenciaGeneroController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarOfendidoscarpetas($causasDto) {
        return $causasDto;
    }

    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    public function reporteCausasViolenciaGeneroPrevio($causasDto, $datos, $paginacion) {
        $consulta = "";
        switch ($datos["nivel"]) {
            case 1:
                $datos["groups"] = "";
                break;
            case 2:
                $datos["groups"] = "r.desRegion";
                break;
            case 3:
                $datos["groups"] = "d.desDistrito";
                break;
            case 4:
                $datos["groups"] = "j.desJuzgado";
                break;
            case 5:
                $datos["groups"] = "cj.idCarpetaJudicial";
                break;
            case 6:
                $datos["groups"] = "cj.idCarpetaJudicial,e.cveEfecto,de.cveDetalleEfecto,fc.cveFactorCultural,hd.cveHomicidioDoloso";
                break;
        }
        $consulta = $this->reporteCausasViolenciaGenero($causasDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteCausasViolenciaGenero($causasDto, $datos, $paginacion) {
        $causasDto = $this->validarOfendidoscarpetas($causasDto);
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " COUNT(DISTINCT (cj.idCarpetaJudicial)) AS totalCount,";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "detalle") {
            $params["fields"] = "";
            $params["orders"] = "cj.anio DESC,cj.numero ASC,oc.nombre ASC,oc.paterno ASC,oc.materno ASC,ic.nombre ASC,ic.paterno ASC,ic.materno ASC,e.cveEfecto,de.cveDetalleEfecto,fc.cveFactorCultural,hd.cveHomicidioDoloso";
        }
        $params["fields"] .= "cj.idCarpetaJudicial,cj.numero,cj.anio,cj.fechaRadicacion,
            tc.desTipoCarpeta,
            oc.idOfendidoCarpeta,oc.nombre,oc.paterno,oc.materno,oc.fechaRegistro,oc.nombreMoral,oc.cveTipoPersona,
            tj.cveTipoJuzgado,tj.desTipoJuzgado,
            j.cveJuzgado,j.desJuzgado,
            d.cveDistrito,d.desDistrito,r.cveRegion,r.desRegion,
            ic.idImputadoCarpeta,ic.nombre nombreI,ic.paterno paternoI,ic.materno maternoI,ic.nombreMoral nombreMoralI,ic.cveTipoPersona cveTipoPersonaI,
            e.cveEfecto,e.desEfecto,
            de.cveDetalleEfecto,de.desDetalleEfecto,
            fc.cveFactorCultural,fc.desFactorCultural,
            hd.cveHomicidioDoloso,hd.desHomicidioDoloso";
        $params["tables"] = "tblcarpetasjudiciales cj 
            INNER JOIN tblimpofedelcarpetas ioc ON cj.idCarpetaJudicial = ioc.idCarpetaJudicial 
            INNER JOIN tblofendidoscarpetas oc ON ioc.idOfendidoCarpeta = oc.idOfendidoCarpeta 
            INNER JOIN tblimputadoscarpetas ic ON ioc.idImputadoCarpeta = ic.idImputadoCarpeta 
            INNER JOIN tblviolenciadegenerocarpetas vdgc ON ioc.idImpOfeDelCarpeta = vdgc.idImpOfeDelCarpeta 
            LEFT JOIN tblefectos e ON vdgc.cveEfecto = e.cveEfecto 
            LEFT JOIN tbldetallesefectos de ON e.cveEfecto=de.cveEfecto
            LEFT JOIN tblefectosofendidoscarpetas eoc ON de.cveDetalleEfecto=eoc.cveDetalleEfecto
            LEFT JOIN tblviolenciafactoressocialescarpetas fsc ON vdgc.idViolenciaDeGeneroCarpeta = fsc.idViolenciaDeGeneroCarpeta 
            LEFT JOIN tblfactoresculturales fc ON fsc.cveFactorCultural = fc.cveFactorCultural 
            LEFT JOIN tblviolenciahomicidiosdolososcarpetas vhdc ON vdgc.idViolenciaDeGeneroCarpeta = vhdc.idViolenciaDeGeneroCarpeta 
            LEFT JOIN tblhomicidiosdolosos hd ON vhdc.cveHomicidioDoloso = hd.cveHomicidioDoloso 
            INNER JOIN tbltiposcarpetas tc ON cj.cveTipoCarpeta = tc.cveTipoCarpeta 
            INNER JOIN tbljuzgados j ON cj.cveJuzgado = j.cveJuzgado 
            INNER JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado 
            INNER JOIN tbldistritos d ON j.cveDistrito = d.cveDistrito 
            INNER JOIN tblregiones r ON j.cveRegion = r.cveRegion ";
        //Se coloco que el imputado es tipo de persona 1, es decir solo persona fisica porque esta es detenida.
        $params["conditions"] = "eoc.idImpOfeDelCarpeta=ioc.idImpOfeDelCarpeta AND oc.cveVictimaDeViolenciaDeGenero = 1 AND cj.activo = 'S' AND oc.activo = 'S' 
            AND ic.activo = 'S' AND ioc.activo = 'S' AND tc.cveTipoCarpeta = cj.cveTipoCarpeta 
            AND j.cveJuzgado = cj.cveJuzgado AND d.activo = 'S' AND r.activo = 'S' AND tj.activo = 'S' 
            AND cj.idCarpetajudicial = oc.idCarpetajudicial AND tc.activo = 'S' AND j.activo = 'S' 
            AND tj.cveTipoJuzgado = j.cveTipoJuzgado AND (tc.cveTipoCarpeta BETWEEN 1 AND 5) AND ic.cveTipoPersona=1";
        $params["conditions"] .= " AND vdgc.activo='S' AND e.activo='S' AND de.activo='S' 
            AND fsc.activo='S' AND fc.activo='S' AND vhdc.activo='S' AND hd.activo='S' AND eoc.activo='S' AND vdgc.idViolenciaDeGeneroCarpeta=eoc.IdReferencia"; 
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["numero"] != "") {
            $params["conditions"].=" AND cj.numero=" . $datos["numero"];
        }
        if ($datos["idCarpetaJudicial"] != "") {
            $params["conditions"].=" AND cj.idCarpetaJudicial=" . $datos["idCarpetaJudicial"];
        }
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND cj.anio=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(cj.fechaRadicacion)=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(cj.fechaRadicacion)=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND cj.fechaRadicacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND  cj.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND cj.cveJuzgado=" . $datos["cveJuzgado"];
        }
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }

        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        if ($datos["groups"] != "") {
            $params["groups"] = $datos["groups"];
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
            $aux = "count(x.totalCount) as totalCount";
            if ($datos["detalles"] == "detalle") {
                $aux = "count(x.idCarpetaJudicial) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x";
        }
        $SelectDao = new SelectDAO();
        return $SelectDao->selectDAO($params, null, $paginacion);
    }

    public function jsonCausas($causasDto, $datos, $paginacion) {
        $consulta = new ReporteCausasViolenciaGeneroController();
        $consulta->reporteCausasViolenciaGeneroPrevio($causasDto, $datos, $paginacion);
        $decode = json_decode($consulta->reporteCausasViolenciaGeneroPrevio($causasDto, $datos, $paginacion));
        $a = [];

//        if ($causas != "") {
//            $json = "";
//            $json .= '{"type":"OK",';
//            $json .= '"totalCount":"' . count($IngresosceresosDto) . '",';
//            $json .= '"data":[';
//            $x = 1;
//        }
        for ($i = 0; $i < count($decode->resultados); $i++) {
            $b=[];
//            var_dump($decode->resultados[$i]->idCarpetaJudicial);
            //var_dump("ofendioooo ".$a[$i]=$decode->resultados[$i]->idOfendidoCarpeta);
            if (in_array($decode->resultados[$i]->idOfendidoCarpeta, $a)) {
                $x = array_search($decode->resultados[$i]->idOfendidoCarpeta, $a);
                $b = $a[$x+1];
                array_push($b, $decode->resultados[$i]);
                $a[$x + 1] = $b;
                //unset($b);
                
            } else {
                if (count($a) == 0) {
                    $a[0] = $decode->resultados[$i]->idOfendidoCarpeta;
                    array_push($b, $decode->resultados[$i]);
                    $a[1] = $b;
                    //unset($b);
                } else {
                    $y = count($a);
                    $a[$y] = $decode->resultados[$i]->idOfendidoCarpeta;
                    array_push($b, $decode->resultados[$i]);
                    $a[$y + 1] = $b;
                }
            }
        }
//        var_dump($a);
        return json_encode($a);
        //var_dump("soyoooo".json_encode($a));
        
    }

}

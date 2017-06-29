<?php
//session_start();
//Imputados carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
//carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
//Regiones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/regiones/RegionesDTO.Class.php");
//Distritos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
//juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
//Domicilios imputados carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
//paises
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
//municipios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
//Tipo juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgados/TiposjuzgadosDTO.Class.php");
//Grado participacion
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gradoparticipaciones/GradoparticipacionesDTO.Class.php");
//Select dao
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReporteimputadosController {
    private $proveedor;
    public function __construct() {
    }
    
    public function reporteGlobalImputados($carpetasJudicialesDto, $consultarPor, $param) {
        $SelectDAO = new SelectDAO();
        $campos = "";
        $tablas = " tblcarpetasjudiciales cj
                   INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'";
        if( $param["desgloseGenero"] == "S" ) {
            $tablas .= " 
                    INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
        }
        $group = "";
        switch ($consultarPor) {
            case 1: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, alf.cveAlfabetismo, alf.desAlfabetismo";
                    $tablas .= " 
                            INNER JOIN tblalfabetismo alf ON alf.cveAlfabetismo = ic.cveAlfabetismo";
                    $group .= " 
                            alf.cveAlfabetismo";
                break;
            case 2: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, esp.cveEspanol, esp.desEspanol";
                    $tablas .= " 
                            INNER JOIN tblespanol esp ON esp.cveEspanol = ic.cveEspanol";
                    $group .= " 
                            esp.cveEspanol";
                break;
            case 3: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, de.cveDelito, de.desDelito";
                    $tablas .= " 
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                            INNER JOIN tbldelitoscarpetas dc ON dc.idDelitoCarpeta = impo.idDelitoCarpeta
                                AND dc.idCarpetaJudicial = cj.idCarpetaJudicial AND dc.activo='S'
                            INNER JOIN tbldelitos de ON de.cveDelito = dc.cveDelito AND de.activo='S'";
                    $group .= " 
                            de.cveDelito";
                break;
            case 4: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, tfl.cveTipoFamiliaLinguistica, tfl.desTipoFamiliaLinguistica";
                    $tablas .= " 
                            INNER JOIN tbltipofamilialinguistica tfl ON tfl.cveTipoFamiliaLinguistica = ic.cveTipoFamiliaLinguistica";
                    $group .= " 
                            tfl.cveTipoFamiliaLinguistica";
                break;
            case 5: $campos .= " count(ic.idImputadoCarpeta) AS totalImputados, g.cveGenero, g.desGenero";
                    $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
                    $group .= " g.cveGenero";
                break;
            case 6: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, ni.cveNivelInstruccion, ni.desNivelInstruccion";
                    $tablas .= " 
                            INNER JOIN tblnivelesinstrucciones ni ON ni.cveNivelInstruccion = ic.cveNivelInstruccion";
                    $group .= " 
                            ni.cveNivelInstruccion";
                break;
            case 7: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, gp.cveGradoParticipacion, gp.desGradoParticipacion";
                    $tablas .= " 
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                            INNER JOIN tblgradoparticipaciones gp ON gp.cveGradoParticipacion = impo.cveGradoParticipacion";
                    $group .= " gp.cveGradoParticipacion";
                break;
            case 8: $campos .= " CASE WHEN (dic.cvePais = 119 AND dic.cveEstado = 15 AND dic.recidenciaHabitual='S' ) THEN '1' ELSE
                                 CASE WHEN (dic.cvePais = 119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S') THEN '2' ELSE
                                 CASE WHEN (dic.cvePais = 118 AND dic.recidenciaHabitual='S') THEN '3' ELSE
                                 CASE WHEN (dic.cvePais = 117 AND dic.recidenciaHabitual='S') THEN '4' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=5 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '5' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=6 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '6' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '7' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=7 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '8' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=3 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '9' ELSE
                                 CASE WHEN (dic.cvePais NOT IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2,3,4,5,6,7) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '10' ELSE
                                 CASE WHEN (dic.recidenciaHabitual = 'N' OR dic.recidenciaHabitual IS NULL) THEN '11'
                                 END END END END END END END END END END END cveResidenciaHabitual,
                                 COUNT(DISTINCT(dic.idDomicilioImputadoCarpeta)) AS totalImputados";
                    $tablas .= " 
                            INNER JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta AND dic.activo='S'
                            INNER JOIN tblpaises p ON p.cvePais = dic.cvePais AND p.activo='S'
                            INNER JOIN tblregionesmundiales rm ON rm.cveRegionMundial = p.cveRegionMundial AND rm.activo='S'
                            LEFT JOIN tblestados e ON e.cveEstado = dic.cveEstado AND e.activo='S'";
                    $group .= " cveResidenciaHabitual";
                break;
            case 9: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, p.cvePais, p.desPais";
                    $tablas .= " 
                            INNER JOIN tblnacionalidadesimputadoscarpetas nic ON nic.idImputadoCarpeta = ic.idImputadoCarpeta AND nic.activo='S'
                            INNER JOIN tblpaises p ON p.cvePais = nic.cvePais";
                    $group .= " 
                            p.cvePais";
                break;
            case 10: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, o.cveOcupacion, o.desOcupacion";
                    $tablas .= " 
                            INNER JOIN tblocupaciones o ON o.cveOcupacion = ic.cveOcupacion";
                    $group .= " 
                            o.cveOcupacion";
                break;
            default : $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados";
                    //$group .= " cj.anio";
                break;
        }
        $condiciones = " cj.activo='S' ";
        if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " 
                        AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
            } else {
                $condiciones .= " 
                        AND cj.anio = " . $carpetasJudicialesDto->getAnio();
            }
            
        }
        /*
         * Consulta por tipo de violencia
         */
        if ( $param["mostrarTipoViolencia"] == "S" ) {
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                             AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tblofendidoscarpetas oc ON oc.idOfendidoCarpeta = impo.idOfendidoCarpeta AND oc.activo='S'";
            $condiciones .= " AND oc.cveTipoParte=4";
            switch( $param["cveTipoViolencia"] ) {
                case 0: $campos = " SUM(CASE WHEN (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3) THEN 1 ELSE 0 END) AS victimasDeDelincuencia,
                                    SUM(CASE WHEN (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3) THEN 1 ELSE 0 END) AS victimasDeViolenciadeGenero,
                                    SUM(CASE WHEN (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3) THEN 1 ELSE 0 END) AS victimasDeTrata,
                                    SUM(CASE WHEN (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3) THEN 1 ELSE 0 END) AS victimasDeAcoso,
                                    COUNT(*) AS totalImputados";
                    break;
                case 1: $campos .= " ,oc.cveVictimaDeLaDelincuenciaOrganizada AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3)";
                    break;
                case 2: $campos .= " ,oc.cveVictimaDeViolenciaDeGenero AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3)";
                    break;
                case 3: $campos .= " ,oc.cveVictimaDeTrata AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3)";
                    break;
                case 4: $campos .= " ,oc.cveVictimaDeAcoso AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3)";
                    break;
            }
            
        }
        /*
         * Consultar imputados con sentencia
         */
        if ($param["consultarSentenciados"] == "S" ) {
            $condiciones .= " AND cj.cveEstatusCarpeta=2";
            if ( $consultarPor != 3 && $consultarPor != 7 && $consultarPor != 11 ) {
            
                $tablas .= " 
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            } else {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            
            /*
             * consulta sentenciados por tipo de sentencia
             */
            if ( $consultarPor == 15 ) {
                $tablas .= "
                            INNER JOIN tbltipossentencias ts ON ts.cveTipoSentencia = act.cveTipoSentencia AND ts.activo='S'";
                $campos .= " ,ts.cveTipoSentencia, ts.desTipoSentencia";
                $group .= " ts.cveTipoSentencia";
            }
            /*
             * Consulta sentenciados por medio de procedimiento abreviado
             */
            if ( $consultarPor == 16 ) {
                $campos .= " , tpp.cveTipoProcedimiento, tpp.desTipoProcedimiento";
                $tablas .= " INNER JOIN tbltiposprocedimientos tpp ON tpp.cveTipoProcedimiento = act.cveTipoProcedimiento";
                $group .= " tpp.cveTipoProcedimiento";
                $condiciones .= " AND tpp.cveTipoProcedimiento=2";
            }
        }
        
        if ( $param["rangoEdad"] == "S" ) {
            $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                         CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                         CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                         CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                         CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                         CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                         CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                         CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                         CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                         CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                         END END END END END END END END END END rangoEdad";
            if ( $group != "" ) {
                $group .= " ,rangoEdad";
            } else {
                $group .= " rangoEdad";
            }
        }
        
        if ( $param["desgloseGenero"] == "S" ) {
            $campos .= " ,g.cveGenero, g.desGenero";
            if ( $group != "" ) {
                $group .= " ,g.cveGenero";
            } else {
                $group .= " 
                        g.cveGenero";
            }
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            $tablas .= " 
                        INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado 
                        INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipoJuzgado";
            if ( $group != "" ) {
                $group .= " ,tj.cveTipoJuzgado";
            } else {
                $group .= " 
                        tj.cveTipoJuzgado";
            }
            
        }
        

        if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= "
                         AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
            } else {
                $condiciones .= " 
                        AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
            }
            
        }
        if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
            $fechaInicio = explode("/", $param["fechaInicial"]);
            $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
            $fechaFin = explode("/", $param["fechaFinal"]);
            $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " 
                        AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
                        AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            } else {
                $condiciones .= " 
                        AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
                        AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            }
            
        }
        if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
            $condiciones .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $condiciones .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
        }
        //filtro por tipo de persona
        if ( (int)$param["cveTipoPersona"] > 0 ) {
            $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
        }
        
        /*
         * Consulta por modalidad de violencia
         */
        if ( $param["mostrarModalidaViolencia"] == "S" ) {
            $campos .= " ,mo.cveModalidadAcoso, mo.desModalidadAcoso";
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                          INNER JOIN tblsexualescarpetas sc ON sc.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta AND sc.activo='S'
                          INNER JOIN tblmodalidadesacosos mo ON mo.cveModalidadAcoso = sc.cveModalidadAcoso AND mo.activo='S'";
            if ( $group != "" ) {
                $group .= " ,mo.cveModalidadAcoso";
            } else {
                $group .= " mo.cveModalidadAcoso";
            }
            if ( (int)$param["cveModalidadViolencia"] > 0 ) {
                $condiciones .= " AND mo.cveModalidadAcoso = " . $param["cveModalidadViolencia"];
            }
        }
        
        /*
         * Si se elige el tipo de consulta por numero de delitos
         */
        if ( $consultarPor == 11 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.Delitos = 1) THEN '1' ELSE
                        CASE WHEN (consulta.Delitos = 2) THEN '2' ELSE
                        CASE WHEN (consulta.Delitos = 3) THEN '3' ELSE
                        CASE WHEN (consulta.Delitos = 4) THEN '4' ELSE
                        CASE WHEN (consulta.Delitos = 5) THEN '5' ELSE
                        CASE WHEN (consulta.Delitos >= 6) THEN '6'
                        END END END END END END rangoDelitos, COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(DISTINCT(impo.idDelitoCarpeta)) AS Delitos";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta ";
            $group = " rangoDelitos";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
        }
        
        /*
         * Consulta por multa
         */
        if ( $consultarPor == 12 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadMulta <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadMulta > 50000) THEN '50000'
                        END END END END END END END END END END END multa, COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadMulta) AS cantidadMulta";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " 
                    multa";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " 
                            consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " 
                            consulta.cveTipoJuzgado";
                }
            }
            
        }
        
        /*
         * Consultar sentenciados por monto de reparacion del da�o
         */
        if ( $consultarPor == 13 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadReparacion <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadReparacion > 50000) THEN '50000'
                        END END END END END END END END END END END sancion, COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadReparacion) AS cantidadReparacion";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=3";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " sancion";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " 
                            consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " 
                            consulta.cveTipoJuzgado";
                }
            }
            
        }
        
        /*
         * Consulta sentenciados por tiempo en prision
         */
        if ( $consultarPor == 14 ) {
            $condiciones = "";
            $campos = " CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) < 6 ) THEN '6' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11 ) THEN '11' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23 ) THEN '12' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35 ) THEN '24' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47 ) THEN '36' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59 ) THEN '48' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119 ) THEN '72' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179 ) THEN '120' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239 ) THEN '180' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299 ) THEN '240' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300 ) THEN '300'
                         END END END END END END END END END END END tiempoPrision, COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas = " tblcarpetasjudiciales cj
                        INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                        INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                        INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta AND ims.activo='S'
                        INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia AND imsa.activo='S'
                        INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $condiciones = " cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $condiciones .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $condiciones .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " AND cj.cveEstatusCarpeta=2
                                  AND imsa.cveTipoSancion=1 
                                  AND imsa.fechaInicio<>''";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $group = " tiempoPrision";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,g.cveGenero";
                } else {
                    $group .= " 
                            g.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , tj.cveTipoJuzgado";
                } else {
                    $group .= " 
                            tj.cveTipoJuzgado";
                }
            }
        }
        
        /*
         * Consulta de sentenciados por numero de penas
         */
        if ( $consultarPor == 17 ) {
            
            $campos = " CASE WHEN (consulta.idImputadoSancion = 1) THEN '1' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 2) THEN '2' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 3) THEN '3' END END END numeroPenas, 
                        COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(imsa.idImputadoSancion) AS idImputadoSancion";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion IN(1,2,3)";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " numeroPenas";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " 
                            consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " 
                            consulta.cveTipoJuzgado";
                }
            }
            $condiciones = " consulta.idImputadoSancion > 0
                             AND consulta.idImputadoSancion < 4";
        }
        
        $params["fields"] = $campos;
        $params["tables"] = $tablas;
        if ( $consultarPor != 11 && $consultarPor != 12 && $consultarPor != 13 ) {
            $params["conditions"] = $condiciones;
        }
        $params["groups"] = $group;
        $params["orders"] = " totalImputados DESC";
        $paginacion["paginacion"] = true;
        $paginacion["pag"] = $param["pag"];
        $paginacion["cantxPag"] = $param["cantxPag"];
        $rs = $SelectDAO->selectDAO($params, null, $paginacion);
        return $rs;
        
    }
    
    /*
     * Calcular el numero de p�ginas de la consulta general
     */
    public function getPaginas($carpetasJudicialesDto, $consultarPor, $param) {
        $SelectDAO = new SelectDAO();
        $campos = "";
        $tablas = " tblcarpetasjudiciales cj
                   INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'";
        if( $param["desgloseGenero"] == "S" ) {
            $tablas .= " 
                    INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
        }
        $group = "";
        switch ($consultarPor) {
            case 1: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, alf.cveAlfabetismo, alf.desAlfabetismo";
                    $tablas .= " 
                            INNER JOIN tblalfabetismo alf ON alf.cveAlfabetismo = ic.cveAlfabetismo";
                    $group .= " 
                            alf.cveAlfabetismo";
                break;
            case 2: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, esp.cveEspanol, esp.desEspanol";
                    $tablas .= " 
                            INNER JOIN tblespanol esp ON esp.cveEspanol = ic.cveEspanol";
                    $group .= " 
                            esp.cveEspanol";
                break;
            case 3: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, de.cveDelito, de.desDelito";
                    $tablas .= " 
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                            INNER JOIN tbldelitoscarpetas dc ON dc.idDelitoCarpeta = impo.idDelitoCarpeta
                                AND dc.idCarpetaJudicial = cj.idCarpetaJudicial AND dc.activo='S'
                            INNER JOIN tbldelitos de ON de.cveDelito = dc.cveDelito AND de.activo='S'";
                    $group .= " 
                            de.cveDelito";
                break;
            case 4: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, tfl.cveTipoFamiliaLinguistica, tfl.desTipoFamiliaLinguistica";
                    $tablas .= " 
                            INNER JOIN tbltipofamilialinguistica tfl ON tfl.cveTipoFamiliaLinguistica = ic.cveTipoFamiliaLinguistica";
                    $group .= " 
                            tfl.cveTipoFamiliaLinguistica";
                break;
            case 5: $campos .= " count(ic.idImputadoCarpeta) AS totalImputados, g.cveGenero, g.desGenero";
                    $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
                    $group .= " g.cveGenero";
                break;
            case 6: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, ni.cveNivelInstruccion, ni.desNivelInstruccion";
                    $tablas .= " 
                            INNER JOIN tblnivelesinstrucciones ni ON ni.cveNivelInstruccion = ic.cveNivelInstruccion";
                    $group .= " 
                            ni.cveNivelInstruccion";
                break;
            case 7: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, gp.cveGradoParticipacion, gp.desGradoParticipacion";
                    $tablas .= " 
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                            INNER JOIN tblgradoparticipaciones gp ON gp.cveGradoParticipacion = impo.cveGradoParticipacion";
                    $group .= " gp.cveGradoParticipacion";
                break;
            case 8: $campos .= " CASE WHEN (dic.cvePais = 119 AND dic.cveEstado = 15 AND dic.recidenciaHabitual='S' ) THEN '1' ELSE
                                 CASE WHEN (dic.cvePais = 119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S') THEN '2' ELSE
                                 CASE WHEN (dic.cvePais = 118 AND dic.recidenciaHabitual='S') THEN '3' ELSE
                                 CASE WHEN (dic.cvePais = 117 AND dic.recidenciaHabitual='S') THEN '4' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=5 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '5' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=6 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '6' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '7' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=7 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '8' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=3 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '9' ELSE
                                 CASE WHEN (dic.cvePais NOT IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2,3,4,5,6,7) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '10' ELSE
                                 CASE WHEN (dic.recidenciaHabitual = 'N' OR dic.recidenciaHabitual IS NULL) THEN '11'
                                 END END END END END END END END END END END cveResidenciaHabitual,
                                 COUNT(DISTINCT(dic.idDomicilioImputadoCarpeta)) AS totalImputados";
                    $tablas .= " 
                            INNER JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta AND dic.activo='S'
                            INNER JOIN tblpaises p ON p.cvePais = dic.cvePais AND p.activo='S'
                            INNER JOIN tblregionesmundiales rm ON rm.cveRegionMundial = p.cveRegionMundial AND rm.activo='S'
                            LEFT JOIN tblestados e ON e.cveEstado = dic.cveEstado AND e.activo='S'";
                    $group .= " cveResidenciaHabitual";
                break;
            case 9: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, p.cvePais, p.desPais";
                    $tablas .= " 
                            INNER JOIN tblnacionalidadesimputadoscarpetas nic ON nic.idImputadoCarpeta = ic.idImputadoCarpeta AND nic.activo='S'
                            INNER JOIN tblpaises p ON p.cvePais = nic.cvePais";
                    $group .= " 
                            p.cvePais";
                break;
            case 10: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, o.cveOcupacion, o.desOcupacion";
                    $tablas .= " 
                            INNER JOIN tblocupaciones o ON o.cveOcupacion = ic.cveOcupacion";
                    $group .= " 
                            o.cveOcupacion";
                break;
            default : $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados";
                    //$group .= " cj.anio";
                break;
        }
        $condiciones = " cj.activo='S' ";
        if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
            } else {
		$condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
            }
        }
        /*
         * Consulta por tipo de violencia
         */
        if ( $param["mostrarTipoViolencia"] == "S" ) {
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                             AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tblofendidoscarpetas oc ON oc.idOfendidoCarpeta = impo.idOfendidoCarpeta AND oc.activo='S'";
            $condiciones .= " AND oc.cveTipoParte=4";
            switch( $param["cveTipoViolencia"] ) {
                case 0: $campos = " SUM(CASE WHEN (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3) THEN 1 ELSE 0 END) AS victimasDeDelincuencia,
                                    SUM(CASE WHEN (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3) THEN 1 ELSE 0 END) AS victimasDeViolenciadeGenero,
                                    SUM(CASE WHEN (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3) THEN 1 ELSE 0 END) AS victimasDeTrata,
                                    SUM(CASE WHEN (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3) THEN 1 ELSE 0 END) AS victimasDeAcoso,
                                    COUNT(*) AS totalImputados";
                    break;
                case 1: $campos .= " ,oc.cveVictimaDeLaDelincuenciaOrganizada AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3)";
                    break;
                case 2: $campos .= " ,oc.cveVictimaDeViolenciaDeGenero AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3)";
                    break;
                case 3: $campos .= " ,oc.cveVictimaDeTrata AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3)";
                    break;
                case 4: $campos .= " ,oc.cveVictimaDeAcoso AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3)";
                    break;
            }
            
        }
        /*
         * Consultar imputados con sentencia
         */
        if ($param["consultarSentenciados"] == "S" ) {
            $condiciones .= " AND cj.cveEstatusCarpeta=2";
            if ( $consultarPor != 3 && $consultarPor != 7 && $consultarPor != 11 ) {
            
                $tablas .= " 
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            } else {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            
            /*
             * consulta sentenciados por tipo de sentencia
             */
            if ( $consultarPor == 15 ) {
                $tablas .= " 
                            INNER JOIN tbltipossentencias ts ON ts.cveTipoSentencia = act.cveTipoSentencia AND ts.activo='S'";
                $campos .= " ,ts.cveTipoSentencia, ts.desTipoSentencia";
                $group .= " ts.cveTipoSentencia";
            }
            /*
             * Consulta sentenciados por medio de procedimiento abreviado
             */
            if ( $consultarPor == 16 ) {
                $campos .= " , tpp.cveTipoProcedimiento, tpp.desTipoProcedimiento";
                $tablas .= " INNER JOIN tbltiposprocedimientos tpp ON tpp.cveTipoProcedimiento = act.cveTipoProcedimiento";
                $group .= " tpp.cveTipoProcedimiento";
                $condiciones .= " AND tpp.cveTipoProcedimiento=2";
            }
        }
        
        if ( $param["rangoEdad"] == "S" ) {
            $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                         CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                         CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                         CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                         CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                         CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                         CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                         CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                         CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                         CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                         END END END END END END END END END END rangoEdad";
            if ( $group != "" ) {
                $group .= " ,rangoEdad";
            } else {
                $group .= " rangoEdad";
            }
        }
        
        if ( $param["desgloseGenero"] == "S" ) {
            $campos .= " ,g.cveGenero, g.desGenero";
            if ( $group != "" ) {
                $group .= " ,g.cveGenero";
            } else {
                $group .= " 
                        g.cveGenero";
            }
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            $tablas .= " 
                        INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado 
                        INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipoJuzgado";
            if ( $group != "" ) {
                $group .= " ,tj.cveTipoJuzgado";
            } else {
                $group .= " 
                        tj.cveTipoJuzgado";
            }
            
        }
        

        if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
            } else {
		$condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
            }
        }
        if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
            $fechaInicio = explode("/", $param["fechaInicial"]);
            $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
            $fechaFin = explode("/", $param["fechaFinal"]);
            $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
            
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            } else {
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            }
        }
        if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
            $condiciones .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $condiciones .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
        }
        //filtro por tipo de persona
        if ( (int)$param["cveTipoPersona"] > 0 ) {
            $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
        }
        
        /*
         * Consulta por modalidad de violencia
         */
        if ( $param["mostrarModalidaViolencia"] == "S" ) {
            $campos .= " ,mo.cveModalidadAcoso, mo.desModalidadAcoso";
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                          INNER JOIN tblsexualescarpetas sc ON sc.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta AND sc.activo='S'
                          INNER JOIN tblmodalidadesacosos mo ON mo.cveModalidadAcoso = sc.cveModalidadAcoso AND mo.activo='S'";
            if ( $group != "" ) {
                $group .= " ,mo.cveModalidadAcoso";
            } else {
                $group .= " mo.cveModalidadAcoso";
            }
            if ( (int)$param["cveModalidadViolencia"] > 0 ) {
                $condiciones .= " AND mo.cveModalidadAcoso = " . $param["cveModalidadViolencia"];
            }
        }
        
        /*
         * Si se elige el tipo de consulta por numero de delitos
         */
        if ( $consultarPor == 11 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.Delitos = 1) THEN '1' ELSE
                        CASE WHEN (consulta.Delitos = 2) THEN '2' ELSE
                        CASE WHEN (consulta.Delitos = 3) THEN '3' ELSE
                        CASE WHEN (consulta.Delitos = 4) THEN '4' ELSE
                        CASE WHEN (consulta.Delitos = 5) THEN '5' ELSE
                        CASE WHEN (consulta.Delitos >= 6) THEN '6'
                        END END END END END END rangoDelitos, COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(DISTINCT(impo.idDelitoCarpeta)) AS Delitos";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta ";
            $group = " 
                    rangoDelitos";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
        }
        
        /*
         * Consulta por multa
         */
        if ( $consultarPor == 12 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadMulta <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadMulta > 50000) THEN '50000'
                        END END END END END END END END END END END multa, COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadMulta) AS cantidadMulta";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " 
                    multa";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " 
                            consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " 
                            consulta.cveTipoJuzgado";
                }
            }
            
        }
        
        /*
         * Consultar sentenciados por monto de reparacion del da�o
         */
        if ( $consultarPor == 13 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadReparacion <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadReparacion > 50000) THEN '50000'
                        END END END END END END END END END END END sancion, COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadReparacion) AS cantidadReparacion";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=3";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " sancion";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " 
                            consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " 
                            consulta.cveTipoJuzgado";
                }
            }
            
        }
        
        /*
         * Consulta sentenciados por tiempo en prision
         */
        if ( $consultarPor == 14 ) {
            $condiciones = "";
            $campos = " CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) < 6 ) THEN '6' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11 ) THEN '11' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23 ) THEN '12' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35 ) THEN '24' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47 ) THEN '36' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59 ) THEN '48' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119 ) THEN '72' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179 ) THEN '120' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239 ) THEN '180' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299 ) THEN '240' ELSE
                         CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300 ) THEN '300'
                         END END END END END END END END END END END tiempoPrision, COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas = " tblcarpetasjudiciales cj
                        INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                        INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                        INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta AND ims.activo='S'
                        INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia AND imsa.activo='S'
                        INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $condiciones = " cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $condiciones .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $condiciones .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " AND cj.cveEstatusCarpeta=2
                                  AND imsa.cveTipoSancion=1 
                                  AND imsa.fechaInicio<>''";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $group = " tiempoPrision";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,g.cveGenero";
                } else {
                    $group .= " 
                            g.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , tj.cveTipoJuzgado";
                } else {
                    $group .= " 
                            tj.cveTipoJuzgado";
                }
            }
        }
        
        /*
         * Consulta de sentenciados por numero de penas
         */
        if ( $consultarPor == 17 ) {
            
            $campos = " CASE WHEN (consulta.idImputadoSancion = 1) THEN '1' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 2) THEN '2' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 3) THEN '3' END END END numeroPenas, 
                        COUNT(*) AS totalImputados";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(imsa.idImputadoSancion) AS idImputadoSancion";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion IN(1,2,3)";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " numeroPenas";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " 
                            consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " 
                            consulta.cveTipoJuzgado";
                }
            }
            $condiciones = " consulta.idImputadoSancion > 0
                             AND consulta.idImputadoSancion < 4";
        }
        
        
        $params["fields"] = $campos;
        $params["tables"] = $tablas;
        if ( $consultarPor != 11 && $consultarPor != 12 && $consultarPor != 13 ) {
            $params["conditions"] = $condiciones;
        }
        $params["groups"] = $group;
        $params["orders"] = "";
        $paginacion["paginacion"] = false;
        $paginacion["pag"] = $param["pag"];
        $paginacion["cantxPag"] = $param["cantxPag"];
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        //print_r($params);
        $rs = $SelectDAO->selectDAO($params, $this->proveedor);
        
        $datos = json_decode($rs);
        //print_r($datos);
        if ( (int)$datos->totalCount > 0 ) {
            $totalRegistros = (int)$datos->totalCount;
        } else {
            $totalRegistros = 0;
        }
        $Pages = (int) $totalRegistros / $param["cantxPag"];
        $restoPages = $totalRegistros % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $totalRegistros . '",';
        $json .= '"data":[';
        $x = 1;
        //var_dump($totPages);
        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index++) {

                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x++;
                if ($x <= ($totPages )) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"' . ($index - 1) . '"';
            $json .= "}";
        }
        //print_r($json).'Jsonnn';
        return $json;
    }
    
    public function reporteImputadosRegion($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $consultarPor, $param) {
        //var_dump($imputadoscarpetasDto);
        $SelectDAO = new SelectDAO();
        $campos = "";
        $tablas = " tblcarpetasjudiciales cj
                    INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                    INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                    INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                    LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
        $group = "";
        if( $param["desgloseGenero"] == "S" ) {
            $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
        }
        $condiciones = " cj.activo='S'";
        if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
            } else {
                $condiciones .= " 
                                AND cj.anio = " . $carpetasJudicialesDto->getAnio();
            }
        }
        switch ($consultarPor) {
            case 1: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, alf.cveAlfabetismo, alf.desAlfabetismo";
                    $tablas .= " INNER JOIN tblalfabetismo alf ON alf.cveAlfabetismo = ic.cveAlfabetismo";
                    $group .= " r.cveRegion, alf.cveAlfabetismo";
                    $condiciones .= " AND alf.cveAlfabetismo=" . $imputadoscarpetasDto->getCveAlfabetismo();
                break;
            case 2: $campos .= "  COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                  r.cveRegion, r.desRegion, esp.cveEspanol, esp.desEspanol";
                    $tablas .= " INNER JOIN tblespanol esp ON esp.cveEspanol = ic.cveEspanol";
                    $condiciones .= " AND esp.cveEspanol=" . $imputadoscarpetasDto->getCveEspanol();
                    $group .= " r.cveRegion,esp.cveEspanol";
                break;
            case 3: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, de.cveDelito, de.desDelito,e.desEstado, 
                                 ic.estadoNacimiento, r.cveRegion, r.desRegion";
                    $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                    AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                                  INNER JOIN tbldelitoscarpetas dc ON dc.idDelitoCarpeta = impo.idDelitoCarpeta
                                    AND dc.idCarpetaJudicial = cj.idCarpetaJudicial AND dc.activo='S'
                                  INNER JOIN tbldelitos de ON de.cveDelito = dc.cveDelito AND de.activo='S'";
                    $condiciones .= " AND de.cveDelito = " . $param["cveDelito"];
                    $group .= " r.cveRegion,de.cveDelito";
                break;
            case 4: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, tfl.cveTipoFamiliaLinguistica, tfl.desTipoFamiliaLinguistica";
                    $tablas .= " INNER JOIN tbltipofamilialinguistica tfl ON tfl.cveTipoFamiliaLinguistica = ic.cveTipoFamiliaLinguistica";
                    $condiciones .= " AND tfl.cveTipoFamiliaLinguistica=" . $imputadoscarpetasDto->getCveTipoFamiliaLinguistica();
                    $group .= " r.cveRegion,tfl.cveTipoFamiliaLinguistica";
                break;
            case 5: $campos .= " COUNT(ic.idImputadoCarpeta) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, g.cveGenero, g.desGenero";
                    $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
                    $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
                    $group .= " r.cveRegion, g.cveGenero";
                break;
            case 6: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, ni.cveNivelInstruccion, ni.desNivelInstruccion";
                    $tablas .= " INNER JOIN tblnivelesinstrucciones ni ON ni.cveNivelInstruccion = ic.cveNivelInstruccion";
                    $condiciones .= " AND ni.cveNivelInstruccion=" . $imputadoscarpetasDto->getCveNivelInstruccion();
                    $group .= " r.cveRegion, ni.cveNivelInstruccion";
                break;
            case 7: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, gp.cveGradoParticipacion, gp.desGradoParticipacion";
                    $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                    AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                                 INNER JOIN tblgradoparticipaciones gp ON gp.cveGradoParticipacion = impo.cveGradoParticipacion";
                    $condiciones .= " AND gp.cveGradoParticipacion=" . $gradoParticipacionDto->getCveGradoParticipacion();
                    $group .= " r.cveRegion, gp.cveGradoParticipacion";
                break;
            case 8: $campos .= " CASE WHEN (dic.cvePais = 119 AND dic.cveEstado = 15 AND dic.recidenciaHabitual='S' ) THEN '1' ELSE
                                 CASE WHEN (dic.cvePais = 119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S') THEN '2' ELSE
                                 CASE WHEN (dic.cvePais = 118 AND dic.recidenciaHabitual='S') THEN '3' ELSE
                                 CASE WHEN (dic.cvePais = 117 AND dic.recidenciaHabitual='S') THEN '4' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=5 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '5' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=6 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '6' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '7' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=7 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '8' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=3 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '9' ELSE
                                 CASE WHEN (dic.cvePais NOT IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2,3,4,5,6,7) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '10' ELSE
                                 CASE WHEN (dic.recidenciaHabitual = 'N' OR dic.recidenciaHabitual IS NULL) THEN '11'
                                 END END END END END END END END END END END cveResidenciaHabitual,
                                 COUNT(DISTINCT(dic.idDomicilioImputadoCarpeta)) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion";
                    $tablas .= " INNER JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta AND dic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = dic.cvePais AND p.activo='S'
                                 INNER JOIN tblregionesmundiales rm ON rm.cveRegionMundial = p.cveRegionMundial AND rm.activo='S'
                                 LEFT JOIN tblestados ed ON ed.cveEstado = dic.cveEstado AND ed.activo='S'";
                    //$condiciones .= " AND con.cveConvivencia=" . $domiciliosImputadosDto->getCveConvivencia();
                    $group .= " r.cveRegion, cveResidenciaHabitual";
                break;
            case 9: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, p.cvePais, p.desPais";
                    $tablas .= " INNER JOIN tblnacionalidadesimputadoscarpetas nic ON nic.idImputadoCarpeta = ic.idImputadoCarpeta AND nic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = nic.cvePais";
                    $condiciones .= " AND p.cvePais=" . $imputadoscarpetasDto->getCvePaisNacimiento();
                    $group .= " r.cveRegion, p.cvePais";
                break;
            case 10: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                  r.cveRegion, r.desRegion, o.cveOcupacion, o.desOcupacion";
                    $tablas .= " INNER JOIN tblocupaciones o ON o.cveOcupacion = ic.cveOcupacion";
                    $condiciones .= " AND o.cveOcupacion=" . $imputadoscarpetasDto->getCveOcupacion();
                    $group .= " r.cveRegion, o.cveOcupacion";
                break;
            default : $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.desEstado, ic.estadoNacimiento, 
                                   r.cveRegion, r.desRegion";
                    $group .= " r.cveRegion";
                break;
        }
        /*
         * Consulta por tipo de violencia
         */
        if ( $param["mostrarTipoViolencia"] == "S" ) {
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                             AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tblofendidoscarpetas oc ON oc.idOfendidoCarpeta = impo.idOfendidoCarpeta AND oc.activo='S'";
            $condiciones .= " AND oc.cveTipoParte=4";
            switch( $param["cveTipoViolencia"] ) {
                case 0: $campos = " SUM(CASE WHEN (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3) THEN 1 ELSE 0 END) AS victimasDeDelincuencia,
                                    SUM(CASE WHEN (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3) THEN 1 ELSE 0 END) AS victimasDeViolenciadeGenero,
                                    SUM(CASE WHEN (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3) THEN 1 ELSE 0 END) AS victimasDeTrata,
                                    SUM(CASE WHEN (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3) THEN 1 ELSE 0 END) AS victimasDeAcoso,
                                    COUNT(*) AS totalImputados,e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                    r.desRegion";
                    break;
                case 1: $campos .= " ,oc.cveVictimaDeLaDelincuenciaOrganizada AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3)";
                    break;
                case 2: $campos .= " ,oc.cveVictimaDeViolenciaDeGenero AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3)";
                    break;
                case 3: $campos .= " ,oc.cveVictimaDeTrata AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3)";
                    break;
                case 4: $campos .= " ,oc.cveVictimaDeAcoso AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3)";
                    break;
            }
            
        }
        
        if ( $param["rangoEdad"] == "S" ) {
            $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                         CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                         CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                         CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                         CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                         CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                         CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                         CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                         CASE WHEN (ic.edad >= 60) THEN 'De 60 o mas' ELSE
                         CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                         END END END END END END END END END END rangoEdad";
            if (array_key_exists("edad", $param) ) {
                switch( $param["edad"] ) {
                    case 18: $condiciones .= " AND ic.edad BETWEEN 18 AND 24";
                        break;
                    case 25: $condiciones .= " AND ic.edad BETWEEN 25 AND 29";
                        break;
                    case 30: $condiciones .= " AND ic.edad BETWEEN 30 AND 34";
                        break;
                    case 35: $condiciones .= " AND ic.edad BETWEEN 35 AND 39";
                        break;
                    case 40: $condiciones .= " AND ic.edad BETWEEN 40 AND 44";
                        break;
                    case 45: $condiciones .= " AND ic.edad BETWEEN 45 AND 49";
                        break;
                    case 50: $condiciones .= " AND ic.edad BETWEEN 50 AND 54";
                        break;
                    case 55: $condiciones .= " AND ic.edad BETWEEN 55 AND 59";
                        break;
                    case 60: $condiciones .= " AND ic.edad >= 60";
                        break;
                    case 0: $condiciones .= " AND (ic.edad IS NULL OR ic.edad = 0)";
                        break;
                }
            }
        }
        
        if ($param["consultarSentenciados"] == "S" ) {
            $condiciones .= " AND cj.cveEstatusCarpeta=2";
            if ( $consultarPor != 3 && $consultarPor != 7 && $consultarPor != 11 ) {
            
                $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            } else {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( $consultarPor == 15 ) {
                $tablas .= "
                            INNER JOIN tbltipossentencias ts ON ts.cveTipoSentencia = act.cveTipoSentencia AND ts.activo='S'";
                $campos .= " ,ts.cveTipoSentencia, ts.desTipoSentencia";
                $condiciones .= " AND ts.cveTipoSentencia=" . $param["cveTipoSentencia"];
                $group .= " ,ts.cveTipoSentencia";
            }
            /*
             * Consulta sentenciados por medio de procedimiento abreviado
             */
            if ( $consultarPor == 16 ) {
                $campos .= " , tpp.cveTipoProcedimiento, tpp.desTipoProcedimiento";
                $tablas .= " INNER JOIN tbltiposprocedimientos tpp ON tpp.cveTipoProcedimiento = act.cveTipoProcedimiento";
                $group .= " ,tpp.cveTipoProcedimiento";
                $condiciones .= " AND tpp.cveTipoProcedimiento = " . $param["cveConclusion"];
            }
        }
        if ( $param["desgloseGenero"] == "S" ) {
            $campos .= " ,g.cveGenero, g.desGenero";
            if ( $group != "" ) {
                $group .= " ,g.cveGenero";
            } else {
                $group .= " g.cveGenero";
            }
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            $tablas .= " INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipoJuzgado";
            if ( $group != "" ) {
                $group .= " ,tj.cveTipoJuzgado";
            } else {
                $group .= " tj.cveTipoJuzgado";
            }
        }
        
        if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
            } else {
		$condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
            }
        }
        if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
            $fechaInicio = explode("/", $param["fechaInicial"]);
            $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
            $fechaFin = explode("/", $param["fechaFinal"]);
            $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
            
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            } else {
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            }
        }
        if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
            $condiciones .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $condiciones .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
        }
        if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
            $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
        }
        if ( $consultarPor == 8 ) {
            switch ( $param["cveResidenciaHabitual"] ) {
                case 1: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado=15 AND dic.recidenciaHabitual='S'";
                    break;
                case 2: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S'";
                    break;
                case 3: $condiciones .= " AND p.cvePais=118 AND dic.recidenciaHabitual='S'";
                    break;
                case 4: $condiciones .= " AND p.cvePais=117 AND dic.recidenciaHabitual='S'";
                    break;
                case 5: $condiciones .= " AND rm.cveRegionMundial=5 AND dic.recidenciaHabitual='S'";
                    break;
                case 6: $condiciones .= " AND rm.cveRegionMundial=6 AND dic.recidenciaHabitual='S'";
                    break;
                case 7: $condiciones .= " AND rm.cveRegionMundial IN(1,2) AND dic.recidenciaHabitual='S'";
                    break;
                case 8: $condiciones .= " AND rm.cveRegionMundial=7 AND dic.recidenciaHabitual='S'";
                    break;
                case 9: $condiciones .= " AND rm.cveRegionMundial=3 AND dic.recidenciaHabitual='S'";
                    break;
                case 10: $condiciones .= " AND p.cveRegionMundial NOT IN(1,2,3,4,5,6,7) AND dic.recidenciaHabitual='S'";
                    break;
                case 11: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
                default: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
            }
        }
        
        if ( (int)$param["cveTipoPersona"] > 0 ) {
            $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
        }
        
        /*
         * Consulta por modalidad de violencia
         */
        if ( $param["mostrarModalidaViolencia"] == "S" ) {
            $campos .= " ,mo.cveModalidadAcoso, mo.desModalidadAcoso";
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                          INNER JOIN tblsexualescarpetas sc ON sc.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta AND sc.activo='S'
                          INNER JOIN tblmodalidadesacosos mo ON mo.cveModalidadAcoso = sc.cveModalidadAcoso AND mo.activo='S'";
            if ( $group != "" ) {
                $group .= " ,mo.cveModalidadAcoso";
            } else {
                $group .= " mo.cveModalidadAcoso";
            }
            if ( (int)$param["cveModalidadViolencia"] > 0 ) {
                $condiciones .= " AND mo.cveModalidadAcoso = " . $param["cveModalidadViolencia"];
            }
        }
        
        /*
         * Si se elige el tipo de consulta por numero de delitos
         */
        if ( $consultarPor == 11 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.Delitos = 1) THEN '1' ELSE
                        CASE WHEN (consulta.Delitos = 2) THEN '2' ELSE
                        CASE WHEN (consulta.Delitos = 3) THEN '3' ELSE
                        CASE WHEN (consulta.Delitos = 4) THEN '4' ELSE
                        CASE WHEN (consulta.Delitos = 5) THEN '5' ELSE
                        CASE WHEN (consulta.Delitos >= 6) THEN '6'
                        END END END END END END rangoDelitos, COUNT(*) AS totalImputados,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(DISTINCT(impo.idDelitoCarpeta)) AS Delitos,e.desEstado, 
                       ic.estadoNacimiento, r.cveRegion, r.desRegion";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveRegion, rangoDelitos";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("rangoDelitos", $param) ) {
                $condiciones = " consulta.Delitos=" . $param["rangoDelitos"];
            }
            
        }
        
        /*
         * Consulta de sentenciados por multa
         */
        if ( $consultarPor == 12 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadMulta <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadMulta > 50000) THEN '50000'
                        END END END END END END END END END END END multa, COUNT(*) AS totalImputados,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadMulta) AS cantidadMulta
                      ,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                            LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveRegion,multa";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " 
                            consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " 
                            consulta.cveTipoJuzgado";
                }
            }
            if (array_key_exists("multa", $param) ) {
                switch( $param["multa"] ) {
                    case 5000: $condiciones .= " consulta.cantidadMulta <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadMulta BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadMulta BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadMulta BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadMulta BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadMulta BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadMulta BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadMulta BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadMulta > 50000";
                        break;
                }
            }
        }
        
        /*
         * Consulta sentenciados por monto de reparacion de da�o
         */
        if ( $consultarPor == 13 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadReparacion <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadReparacion > 50000) THEN '50000'
                        END END END END END END END END END END END sancion, COUNT(*) AS totalImputados,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadReparacion) AS cantidadReparacion
                      ,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                            LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=3";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveRegion,sancion";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " 
                            consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " 
                            consulta.cveTipoJuzgado";
                }
            }
            if (array_key_exists("sancion", $param) ) {
                switch( $param["sancion"] ) {
                    case 5000: $condiciones .= " consulta.cantidadReparacion <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadReparacion BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadReparacion BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadReparacion BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadReparacion BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadReparacion BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadReparacion BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadReparacion BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadReparacion > 50000";
                        break;
                }
            }
        }
        
        /*
         * Consulta sentenciados por tiempo en prision
         */
        if ( $consultarPor == 14 ) {
            $condiciones = "";
            $campos = " CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) < 6 ) THEN '6' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11 ) THEN '11' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23 ) THEN '12' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35 ) THEN '24' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47 ) THEN '36' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59 ) THEN '48' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119 ) THEN '72' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179 ) THEN '120' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239 ) THEN '180' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299 ) THEN '240' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300 ) THEN '300'
                        END END END END END END END END END END END tiempoPrision, COUNT(*) AS totalImputados,
                        e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas = " tblcarpetasjudiciales cj
                        INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                        INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                        INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                        INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                        LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $condiciones = " cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
                    	AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $condiciones .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $condiciones .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " AND cj.cveEstatusCarpeta=2
                                  AND imsa.cveTipoSancion=1 
                                  AND imsa.fechaInicio<>''";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $group = " r.cveRegion,tiempoPrision";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,g.cveGenero";
                } else {
                    $group .= " 
                            g.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , tj.cveTipoJuzgado";
                } else {
                    $group .= " 
                            tj.cveTipoJuzgado";
                }
            }
            if (array_key_exists("tiempoPrision", $param) ) {
                switch( $param["tiempoPrision"] ) {
                    case 6: $condiciones .= " AND TIMESTAMPDIFF(MONTH, imsa.fechaInicio, imsa.fechaTermina) < 6";
                        break;
                    case 11: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11";
                        break;
                    case 12: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23";
                        break;
                    case 24: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35";
                        break;
                    case 36: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47";
                        break;
                    case 48: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59";
                        break;
                    case 72: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119";
                        break;
                    case 120: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179";
                        break;
                    case 180: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239";
                        break;
                    case 240: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299";
                        break;
                    case 300: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300";
                        break;
                }
            }
        }
        
        /*
         * Consulta sentenciados por numero de penas
         */
        if ( $consultarPor == 17 ) {
            
            $campos = " CASE WHEN (consulta.idImputadoSancion = 1) THEN '1' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 2) THEN '2' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 3) THEN '3' END END END numeroPenas, 
                        COUNT(*) AS totalImputados,consulta.desEstado, consulta.estadoNacimiento, 
                        consulta.cveRegion, consulta.desRegion";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(imsa.idImputadoSancion) AS idImputadoSancion
                      ,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                              CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                              CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                              CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                              CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '44' ELSE
                              CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                              CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                              CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                              CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                              CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                              END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " 
                        FROM tblcarpetasjudiciales cj
                            INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                            INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                            LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                            INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                            INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " 
                        AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                        AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion IN(1,2,3)";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  
                        GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveRegion,numeroPenas";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " 
                            consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " 
                            consulta.cveTipoJuzgado";
                }
            }
            $condiciones = " consulta.idImputadoSancion > 0
                             AND consulta.idImputadoSancion < 4";
            if (array_key_exists("numeroPenas", $param) ) {
                $condiciones .= " AND consulta.idImputadoSancion = " . $param["numeroPenas"];
            }
        }
        
        $params["fields"] = $campos;
        $params["tables"] = $tablas;
        if ( $condiciones != "" ) {
            $params["conditions"] = $condiciones;
        }
        $params["groups"] = $group;
        $params["orders"] = " totalImputados DESC";
        $paginacion["paginacion"] = false;
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $rs = $SelectDAO->selectDAO($params, $this->proveedor);
        return $rs;
    }
    
    public function reporteImputadosDistrito($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $regionesDto, $consultarPor, $param) {
        $SelectDAO = new SelectDAO();
        $campos = "";
        $tablas = " tblcarpetasjudiciales cj
                              INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                              INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                              INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                              INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                              LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
        $group = "";
        if( $param["desgloseGenero"] == "S" ) {
            $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
        }
        $condiciones = " cj.activo='S' ";
        
        switch ($consultarPor) {
            case 1: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, alf.cveAlfabetismo, alf.desAlfabetismo";
                    $tablas .= " INNER JOIN tblalfabetismo alf ON alf.cveAlfabetismo = ic.cveAlfabetismo";
                    $condiciones .= " AND alf.cveAlfabetismo=" . $imputadoscarpetasDto->getCveAlfabetismo();
                    $group .= " d.cveDistrito, alf.cveAlfabetismo";
                break;
            case 2: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, esp.cveEspanol, esp.desEspanol";
                    $tablas .= " INNER JOIN tblespanol esp ON esp.cveEspanol = ic.cveEspanol";
                    $condiciones .= " AND esp.cveEspanol=" . $imputadoscarpetasDto->getCveEspanol();
                    $group .= " d.cveDistrito, esp.cveEspanol";
                break;
            case 3: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, de.cveDelito, de.desDelito";
                    $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                    AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                                  INNER JOIN tbldelitoscarpetas dc ON dc.idDelitoCarpeta = impo.idDelitoCarpeta
                                    AND dc.idCarpetaJudicial = cj.idCarpetaJudicial AND dc.activo='S'
                                  INNER JOIN tbldelitos de ON de.cveDelito = dc.cveDelito AND de.activo='S'";
                    $condiciones .= " AND de.cveDelito = " . $param["cveDelito"];
                    $group .= " d.cveDistrito,de.cveDelito";
                break;
            case 4: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, tfl.cveTipoFamiliaLinguistica, tfl.desTipoFamiliaLinguistica";
                    $tablas .= " INNER JOIN tbltipofamilialinguistica tfl ON tfl.cveTipoFamiliaLinguistica = ic.cveTipoFamiliaLinguistica";
                    $condiciones .= " AND tfl.cveTipoFamiliaLinguistica=" . $imputadoscarpetasDto->getCveTipoFamiliaLinguistica();
                    $group .= " d.cveDistrito, tfl.cveTipoFamiliaLinguistica";
                break;
            case 5: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, g.cveGenero,g.desGenero";
                    $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero AND g.activo='S'";
                    $group .= " d.cveDistrito,g.cveGenero";
                    $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
                break;
            case 6: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, ni.cveNivelInstruccion, ni.desNivelInstruccion";
                    $tablas .= " INNER JOIN tblnivelesinstrucciones ni ON ni.cveNivelInstruccion = ic.cveNivelInstruccion";
                    $condiciones .= " AND ni.cveNivelInstruccion=" . $imputadoscarpetasDto->getCveNivelInstruccion();
                    $group .= " d.cveDistrito, ni.cveNivelInstruccion";
                break;
            case 7: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, gp.cveGradoParticipacion, gp.desGradoParticipacion";
                    $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                    AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                                 INNER JOIN tblgradoparticipaciones gp ON gp.cveGradoParticipacion = impo.cveGradoParticipacion";
                    $condiciones .= " AND gp.cveGradoParticipacion=" . $gradoParticipacionDto->getCveGradoParticipacion();
                    $group .= " d.cveDistrito, gp.cveGradoParticipacion";
                break;
            case 8: $campos .= " CASE WHEN (dic.cvePais = 119 AND dic.cveEstado = 15 AND dic.recidenciaHabitual='S' ) THEN '1' ELSE
                                 CASE WHEN (dic.cvePais = 119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S') THEN '2' ELSE
                                 CASE WHEN (dic.cvePais = 118 AND dic.recidenciaHabitual='S') THEN '3' ELSE
                                 CASE WHEN (dic.cvePais = 117 AND dic.recidenciaHabitual='S') THEN '4' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=5 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '5' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=6 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '6' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '7' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=7 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '8' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=3 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '9' ELSE
                                 CASE WHEN (dic.cvePais NOT IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2,3,4,5,6,7) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '10' ELSE
                                 CASE WHEN (dic.recidenciaHabitual = 'N' OR dic.recidenciaHabitual IS NULL) THEN '11'
                                 END END END END END END END END END END END cveResidenciaHabitual,
                                 COUNT(DISTINCT(dic.idDomicilioImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito";
                    $tablas .= " INNER JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta AND dic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = dic.cvePais AND p.activo='S'
                                 INNER JOIN tblregionesmundiales rm ON rm.cveRegionMundial = p.cveRegionMundial AND rm.activo='S'
                                 LEFT JOIN tblestados de ON de.cveEstado = dic.cveEstado AND de.activo='S'";
//                    $condiciones .= " AND con.cveConvivencia=" . $domiciliosImputadosDto->getCveConvivencia();
//                    $condiciones .= " AND dic.recidenciaHabitual='S'";
                    $group .= " d.cveDistrito, cveResidenciaHabitual";
                break;
            case 9: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                 r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, p.cvePais, p.desPais";
                    $tablas .= " INNER JOIN tblnacionalidadesimputadoscarpetas nic ON nic.idImputadoCarpeta = ic.idImputadoCarpeta AND nic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = nic.cvePais";
                    $condiciones .= " AND p.cvePais=" . $imputadoscarpetasDto->getCvePaisNacimiento();
                    $group .= " d.cveDistrito, p.cvePais";
                break;
            case 10: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                  r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, o.cveOcupacion, o.desOcupacion";
                    $tablas .= " INNER JOIN tblocupaciones o ON o.cveOcupacion = ic.cveOcupacion";
                    $condiciones .= " AND o.cveOcupacion=" . $imputadoscarpetasDto->getCveOcupacion();
                    $group .= " d.cveDistrito, o.cveOcupacion";
                break;
            default : $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                  r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito";
                    $group .= " d.cveDistrito";
                break;
        }
        
        /*
         * Consulta por tipo de violencia
         */
        if ( $param["mostrarTipoViolencia"] == "S" ) {
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                             AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tblofendidoscarpetas oc ON oc.idOfendidoCarpeta = impo.idOfendidoCarpeta AND oc.activo='S'";
            $condiciones .= " AND oc.cveTipoParte=4";
            switch( $param["cveTipoViolencia"] ) {
                case 0: $campos = " SUM(CASE WHEN (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3) THEN 1 ELSE 0 END) AS victimasDeDelincuencia,
                                    SUM(CASE WHEN (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3) THEN 1 ELSE 0 END) AS victimasDeViolenciadeGenero,
                                    SUM(CASE WHEN (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3) THEN 1 ELSE 0 END) AS victimasDeTrata,
                                    SUM(CASE WHEN (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3) THEN 1 ELSE 0 END) AS victimasDeAcoso,
                                    COUNT(*) AS totalImputados,e.cveEstado,e.desEstado,ic.estadoNacimiento, 
                                    r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito";
                    break;
                case 1: $campos .= " ,oc.cveVictimaDeLaDelincuenciaOrganizada AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3)";
                    break;
                case 2: $campos .= " ,oc.cveVictimaDeViolenciaDeGenero AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3)";
                    break;
                case 3: $campos .= " ,oc.cveVictimaDeTrata AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3)";
                    break;
                case 4: $campos .= " ,oc.cveVictimaDeAcoso AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3)";
                    break;
            }
            
        }
        
        if ( $param["rangoEdad"] == "S" ) {
            $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                         CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                         CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                         CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                         CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                         CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                         CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                         CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                         CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                         CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                         END END END END END END END END END END rangoEdad";
            if (array_key_exists("edad", $param) ) {
                switch( $param["edad"] ) {
                    case 18: $condiciones .= " AND ic.edad BETWEEN 18 AND 24";
                        break;
                    case 25: $condiciones .= " AND ic.edad BETWEEN 25 AND 29";
                        break;
                    case 30: $condiciones .= " AND ic.edad BETWEEN 30 AND 34";
                        break;
                    case 35: $condiciones .= " AND ic.edad BETWEEN 35 AND 39";
                        break;
                    case 40: $condiciones .= " AND ic.edad BETWEEN 40 AND 44";
                        break;
                    case 45: $condiciones .= " AND ic.edad BETWEEN 45 AND 49";
                        break;
                    case 50: $condiciones .= " AND ic.edad BETWEEN 50 AND 54";
                        break;
                    case 55: $condiciones .= " AND ic.edad BETWEEN 55 AND 59";
                        break;
                    case 60: $condiciones .= " AND ic.edad >= 60";
                        break;
                    case 0: $condiciones .= " AND (ic.edad IS NULL OR ic.edad = 0)";
                        break;
                }
            }
        }
        
        if ($param["consultarSentenciados"] == "S" ) {
            $condiciones .= " AND cj.cveEstatusCarpeta=2";
            if ( $consultarPor != 3 && $consultarPor != 7 && $consultarPor != 11 ) {
            
                $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            } else {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( $consultarPor == 15 ) {
                $tablas .= " 
                            INNER JOIN tbltipossentencias ts ON ts.cveTipoSentencia = act.cveTipoSentencia AND ts.activo='S'";
                $campos .= " ,ts.cveTipoSentencia, ts.desTipoSentencia";
                $condiciones .= " AND ts.cveTipoSentencia=" . $param["cveTipoSentencia"];
                $group .= " ,ts.cveTipoSentencia";
            }
            /*
             * Consulta sentenciados por medio de procedimiento abreviado
             */
            if ( $consultarPor == 16 ) {
                $campos .= " , tpp.cveTipoProcedimiento, tpp.desTipoProcedimiento";
                $tablas .= " INNER JOIN tbltiposprocedimientos tpp ON tpp.cveTipoProcedimiento = act.cveTipoProcedimiento";
                $group .= " ,tpp.cveTipoProcedimiento";
                $condiciones .= " AND tpp.cveTipoProcedimiento=" . $param["cveConclusion"];
            }
        }
        if ( $param["desgloseGenero"] == "S" ) {
            $campos .= " ,g.cveGenero, g.desGenero";
            if ( $group != "" ) {
                $group .= " ,g.cveGenero";
            } else {
                $group .= " g.cveGenero";
            }
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            $tablas .= " INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipoJuzgado";
            if ( $group != "" ) {
                $group .= " ,tj.cveTipoJuzgado";
            } else {
                $group .= " tj.cveTipoJuzgado";
            }
        }
        
        if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
            } else {
		$condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
            }
        }
        if ( $regionesDto->getCveRegion() != "" ) {
            $condiciones .= " AND d.cveRegion=" . $regionesDto->getCveRegion();
        }
        
        if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
            } else {
		$condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
            }
        }
        if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
            $fechaInicio = explode("/", $param["fechaInicial"]);
            $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
            $fechaFin = explode("/", $param["fechaFinal"]);
            $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
            
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            } else {
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            }
        }
        if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
            $condiciones .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $condiciones .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
        }
        if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
            $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
        }
        if ( $consultarPor == 8 ) {
            switch ( $param["cveResidenciaHabitual"] ) {
                case 1: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado=15 AND dic.recidenciaHabitual='S'";
                    break;
                case 2: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S'";
                    break;
                case 3: $condiciones .= " AND p.cvePais=118 AND dic.recidenciaHabitual='S'";
                    break;
                case 4: $condiciones .= " AND p.cvePais=117 AND dic.recidenciaHabitual='S'";
                    break;
                case 5: $condiciones .= " AND rm.cveRegionMundial=5 AND dic.recidenciaHabitual='S'";
                    break;
                case 6: $condiciones .= " AND rm.cveRegionMundial=6 AND dic.recidenciaHabitual='S'";
                    break;
                case 7: $condiciones .= " AND rm.cveRegionMundial IN(1,2) AND dic.recidenciaHabitual='S'";
                    break;
                case 8: $condiciones .= " AND rm.cveRegionMundial=7 AND dic.recidenciaHabitual='S'";
                    break;
                case 9: $condiciones .= " AND rm.cveRegionMundial=3 AND dic.recidenciaHabitual='S'";
                    break;
                case 10: $condiciones .= " AND p.cveRegionMundial NOT IN(1,2,3,4,5,6,7) AND dic.recidenciaHabitual='S'";
                    break;
                case 11: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
                default: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
            }
        }
        
        if ( (int)$param["cveTipoPersona"] > 0 ) {
            $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
        }
        
        /*
         * Consulta por modalidad de violencia
         */
        if ( $param["mostrarModalidaViolencia"] == "S" ) {
            $campos .= " ,mo.cveModalidadAcoso, mo.desModalidadAcoso";
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                          INNER JOIN tblsexualescarpetas sc ON sc.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta AND sc.activo='S'
                          INNER JOIN tblmodalidadesacosos mo ON mo.cveModalidadAcoso = sc.cveModalidadAcoso AND mo.activo='S'";
            if ( $group != "" ) {
                $group .= " ,mo.cveModalidadAcoso";
            } else {
                $group .= " mo.cveModalidadAcoso";
            }
            if ( (int)$param["cveModalidadViolencia"] > 0 ) {
                $condiciones .= " AND mo.cveModalidadAcoso = " . $param["cveModalidadViolencia"];
            }
        }
        
        /*
         * Si se elige el tipo de consulta por numero de delitos
         */
        if ( $consultarPor == 11 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.Delitos = 1) THEN '1' ELSE
                        CASE WHEN (consulta.Delitos = 2) THEN '2' ELSE
                        CASE WHEN (consulta.Delitos = 3) THEN '3' ELSE
                        CASE WHEN (consulta.Delitos = 4) THEN '4' ELSE
                        CASE WHEN (consulta.Delitos = 5) THEN '5' ELSE
                        CASE WHEN (consulta.Delitos >= 6) THEN '6'
                        END END END END END END rangoDelitos, COUNT(*) AS totalImputados,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion
                        , consulta.cveDistrito, consulta.desDistrito";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(DISTINCT(impo.idDelitoCarpeta)) AS Delitos,e.desEstado, 
                       ic.estadoNacimiento, r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $regionesDto->getCveRegion() != "" ) {
                $tablas .= " AND d.cveRegion=" . $regionesDto->getCveRegion();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveDistrito, rangoDelitos";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("rangoDelitos", $param) ) {
                $condiciones = " consulta.Delitos=" . $param["rangoDelitos"];
            }
            
        }
        
        /*
         * Sentenciados por multa
         */
        if ( $consultarPor == 12 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadMulta <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadMulta > 50000) THEN '50000'
                        END END END END END END END END END END END multa, COUNT(*) AS totalImputados,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion
                        , consulta.cveDistrito, consulta.desDistrito";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadMulta) AS cantidadMulta,e.desEstado, 
                       ic.estadoNacimiento, r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $regionesDto->getCveRegion() != "" ) {
                $tablas .= " AND d.cveRegion=" . $regionesDto->getCveRegion();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveDistrito, multa";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("multa", $param) ) {
                switch( $param["multa"] ) {
                    case 5000: $condiciones .= " consulta.cantidadMulta <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadMulta BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadMulta BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadMulta BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadMulta BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadMulta BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadMulta BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadMulta BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadMulta > 50000";
                        break;
                }
            }
            
        }
        
        /*
         * Consultar sentenciados por monto de reparacion del da�o
         */
        if ( $consultarPor == 13 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadReparacion <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadReparacion > 50000) THEN '50000'
                        END END END END END END END END END END END sancion, COUNT(*) AS totalImputados,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion
                        , consulta.cveDistrito, consulta.desDistrito";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadReparacion) AS cantidadReparacion,e.desEstado, 
                       ic.estadoNacimiento, r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $regionesDto->getCveRegion() != "" ) {
                $tablas .= " AND d.cveRegion=" . $regionesDto->getCveRegion();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=3";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveDistrito, sancion";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("sancion", $param) ) {
                switch( $param["sancion"] ) {
                    case 5000: $condiciones .= " consulta.cantidadReparacion <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadReparacion BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadReparacion BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadReparacion BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadReparacion BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadReparacion BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadReparacion BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadReparacion BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadReparacion > 50000";
                        break;
                }
            }
            
        }
        
        /*
         * Consultar sentenciados por tiempo en prision
         */
        if ( $consultarPor == 14 ) {
            $condiciones = "";
            $campos = " CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) < 6 ) THEN '6' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11 ) THEN '11' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23 ) THEN '12' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35 ) THEN '24' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47 ) THEN '36' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59 ) THEN '48' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119 ) THEN '72' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179 ) THEN '120' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239 ) THEN '180' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299 ) THEN '240' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300 ) THEN '300'
                        END END END END END END END END END END END tiempoPrision, COUNT(*) AS totalImputados,
                        e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion
                        , d.cveDistrito, d.desDistrito";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas = " tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $condiciones = " cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $condiciones .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $condiciones .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $regionesDto->getCveRegion() != "" ) {
                $condiciones .= " AND d.cveRegion=" . $regionesDto->getCveRegion();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " AND cj.cveEstatusCarpeta=2
                                  AND imsa.cveTipoSancion=1 
                                  AND imsa.fechaInicio<>''";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $group = " d.cveDistrito, tiempoPrision";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,g.cveGenero";
                } else {
                    $group .= " g.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , tj.cveTipoJuzgado";
                } else {
                    $group .= " tj.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("tiempoPrision", $param) ) {
                switch( $param["tiempoPrision"] ) {
                    case 6: $condiciones .= " AND TIMESTAMPDIFF(MONTH, imsa.fechaInicio, imsa.fechaTermina) < 6";
                        break;
                    case 11: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11";
                        break;
                    case 12: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23";
                        break;
                    case 24: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35";
                        break;
                    case 36: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47";
                        break;
                    case 48: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59";
                        break;
                    case 72: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119";
                        break;
                    case 120: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179";
                        break;
                    case 180: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239";
                        break;
                    case 240: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299";
                        break;
                    case 300: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300";
                        break;
                }
            }
            
        }
        
        /*
         * Consulta sentenciados por numero de penas
         */
        if ( $consultarPor == 17 ) {
            
            $campos = " CASE WHEN (consulta.idImputadoSancion = 1) THEN '1' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 2) THEN '2' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 3) THEN '3' END END END numeroPenas, 
                        COUNT(*) AS totalImputados,consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, 
                        consulta.desRegion, consulta.cveDistrito, consulta.desDistrito";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(imsa.idImputadoSancion) AS idImputadoSancion,e.desEstado, 
                       ic.estadoNacimiento, r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $regionesDto->getCveRegion() != "" ) {
                $tablas .= " AND d.cveRegion=" . $regionesDto->getCveRegion();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion IN(1,2,3)";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveDistrito, numeroPenas";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            $condiciones = " consulta.idImputadoSancion > 0
                             AND consulta.idImputadoSancion < 4";
            if (array_key_exists("numeroPenas", $param) ) {
                $condiciones .= " AND consulta.idImputadoSancion = " . $param["numeroPenas"];
            }
            
        }
        
        $params["fields"] = $campos;
        $params["tables"] = $tablas;
        if ( $condiciones != "" ) {
            $params["conditions"] = $condiciones;
        }
        $params["groups"] = $group;
        $params["orders"] = " totalImputados DESC";
        $paginacion["paginacion"] = false;
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $rs = $SelectDAO->selectDAO($params, $this->proveedor);
        return $rs;
    }
    
    public function reporteImputadosJuzgado($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $distritosDto, $consultarPor, $param) {
        $SelectDAO = new SelectDAO();
        $campos = "";
        $tablas = " tblcarpetasjudiciales cj
                    INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                    INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                    INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                    INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                    LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
        $group = "";
        if( $param["desgloseGenero"] == "S" ) {
            $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
        }
        $condiciones = " cj.activo='S' ";
        if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
            } else {
		$condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
            }
        }
        if ( $distritosDto->getCveDistrito() != "" ) {
            $condiciones .= " AND j.cveDistrito=" . $distritosDto->getCveDistrito();
        }
        
        switch ($consultarPor) {
            case 1: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                 r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, alf.cveAlfabetismo, alf.desAlfabetismo";
                    $tablas .= " INNER JOIN tblalfabetismo alf ON alf.cveAlfabetismo = ic.cveAlfabetismo";
                    $condiciones .= " AND alf.cveAlfabetismo=" . $imputadoscarpetasDto->getCveAlfabetismo();
                    $group .= " j.cveJuzgado, alf.cveAlfabetismo";
                break;
            case 2: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                 r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, esp.cveEspanol, esp.desEspanol";
                    $tablas .= " INNER JOIN tblespanol esp ON esp.cveEspanol = ic.cveEspanol";
                    $condiciones .= " AND esp.cveEspanol=" . $imputadoscarpetasDto->getCveEspanol();
                    $group .= " j.cveJuzgado, esp.cveEspanol";
                break;
            case 3: $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                 r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, de.cveDelito, de.desDelito";
                    $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                    AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                                  INNER JOIN tbldelitoscarpetas dc ON dc.idDelitoCarpeta = impo.idDelitoCarpeta
                                    AND dc.idCarpetaJudicial = cj.idCarpetaJudicial AND dc.activo='S'
                                  INNER JOIN tbldelitos de ON de.cveDelito = dc.cveDelito AND de.activo='S'";
                    $condiciones .= " AND de.cveDelito = " . $param["cveDelito"];
                    $group .= " j.cveJuzgado,de.cveDelito";
                break;
            case 4: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                 r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, tfl.cveTipoFamiliaLinguistica, tfl.desTipoFamiliaLinguistica";
                    $tablas .= " INNER JOIN tbltipofamilialinguistica tfl ON tfl.cveTipoFamiliaLinguistica = ic.cveTipoFamiliaLinguistica";
                    $condiciones .= " AND tfl.cveTipoFamiliaLinguistica=" . $imputadoscarpetasDto->getCveTipoFamiliaLinguistica();
                    $group .= " j.cveJuzgado, tfl.cveTipoFamiliaLinguistica";
                break;
            case 5: $campos .= " COUNT(ic.idImputadoCarpeta) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                 r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, g.cveGenero,g.desGenero";
                    $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero AND g.activo='S'";
                    $group .= " j.cveJuzgado,g.cveGenero";
                    $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
                break;
            case 6: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                 r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, ni.cveNivelInstruccion, ni.desNivelInstruccion";
                    $tablas .= " INNER JOIN tblnivelesinstrucciones ni ON ni.cveNivelInstruccion = ic.cveNivelInstruccion";
                    $condiciones .= " AND ni.cveNivelInstruccion=" . $imputadoscarpetasDto->getCveNivelInstruccion();
                    $group .= " j.cveJuzgado, ni.cveNivelInstruccion";
                break;
            case 7: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                 r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, gp.cveGradoParticipacion, gp.desGradoParticipacion";
                    $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                    AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                                 INNER JOIN tblgradoparticipaciones gp ON gp.cveGradoParticipacion = impo.cveGradoParticipacion";
                    $condiciones .= " AND gp.cveGradoParticipacion=" . $gradoParticipacionDto->getCveGradoParticipacion();
                    $group .= " j.cveJuzgado, gp.cveGradoParticipacion";
                break;
            case 8: $campos .= " CASE WHEN (dic.cvePais = 119 AND dic.cveEstado = 15 AND dic.recidenciaHabitual='S' ) THEN '1' ELSE
                                 CASE WHEN (dic.cvePais = 119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S') THEN '2' ELSE
                                 CASE WHEN (dic.cvePais = 118 AND dic.recidenciaHabitual='S') THEN '3' ELSE
                                 CASE WHEN (dic.cvePais = 117 AND dic.recidenciaHabitual='S') THEN '4' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=5 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '5' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=6 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '6' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '7' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=7 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '8' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=3 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '9' ELSE
                                 CASE WHEN (dic.cvePais NOT IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2,3,4,5,6,7) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '10' ELSE
                                 CASE WHEN (dic.recidenciaHabitual = 'N' OR dic.recidenciaHabitual IS NULL) THEN '11'
                                 END END END END END END END END END END END cveResidenciaHabitual,
                                 COUNT(DISTINCT(dic.idDomicilioImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                 r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado";
                    $tablas .= " INNER JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta AND dic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = dic.cvePais AND p.activo='S'
                                 INNER JOIN tblregionesmundiales rm ON rm.cveRegionMundial = p.cveRegionMundial AND rm.activo='S'
                                 LEFT JOIN tblestados de ON de.cveEstado = dic.cveEstado AND de.activo='S'";
                    //$condiciones .= " AND con.cveConvivencia=" . $domiciliosImputadosDto->getCveConvivencia();
                    $group .= " j.cveJuzgado, cveResidenciaHabitual";
                break;
            case 9: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                 r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, p.cvePais, p.desPais";
                    $tablas .= " INNER JOIN tblnacionalidadesimputadoscarpetas nic ON nic.idImputadoCarpeta = ic.idImputadoCarpeta AND nic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = nic.cvePais";
                    $condiciones .= " AND p.cvePais=" . $imputadoscarpetasDto->getCvePaisNacimiento();
                    $group .= " j.cveJuzgado, p.cvePais";
                break;
            case 10: $campos .= " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                  r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, o.cveOcupacion, o.desOcupacion";
                    $tablas .= " INNER JOIN tblocupaciones o ON o.cveOcupacion = ic.cveOcupacion";
                    $condiciones .= " AND o.cveOcupacion=" . $imputadoscarpetasDto->getCveOcupacion();
                    $group .= " j.cveJuzgado, o.cveOcupacion";
                break;
            default : $campos .= " count(DISTINCT(ic.idImputadoCarpeta)) AS totalImputados, e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                   r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado";
                    $group .= " j.cveJuzgado";
                break;
        }
        
        /*
         * Consulta por tipo de violencia
         */
        if ( $param["mostrarTipoViolencia"] == "S" ) {
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                             AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tblofendidoscarpetas oc ON oc.idOfendidoCarpeta = impo.idOfendidoCarpeta AND oc.activo='S'";
            $condiciones .= " AND oc.cveTipoParte=4";
            switch( $param["cveTipoViolencia"] ) {
                case 0: $campos = " SUM(CASE WHEN (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3) THEN 1 ELSE 0 END) AS victimasDeDelincuencia,
                                    SUM(CASE WHEN (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3) THEN 1 ELSE 0 END) AS victimasDeViolenciadeGenero,
                                    SUM(CASE WHEN (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3) THEN 1 ELSE 0 END) AS victimasDeTrata,
                                    SUM(CASE WHEN (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3) THEN 1 ELSE 0 END) AS victimasDeAcoso,
                                    COUNT(*) AS totalImputados,e.desEstado, ic.estadoNacimiento, r.cveRegion, 
                                    r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado";
                    break;
                case 1: $campos .= " ,oc.cveVictimaDeLaDelincuenciaOrganizada AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3)";
                    break;
                case 2: $campos .= " ,oc.cveVictimaDeViolenciaDeGenero AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3)";
                    break;
                case 3: $campos .= " ,oc.cveVictimaDeTrata AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3)";
                    break;
                case 4: $campos .= " ,oc.cveVictimaDeAcoso AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3)";
                    break;
            }
            
        }
        
        if ( $param["rangoEdad"] == "S" ) {
            $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                         CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                         CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                         CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                         CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                         CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                         CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                         CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                         CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                         CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                         END END END END END END END END END END rangoEdad";
            if (array_key_exists("edad", $param) ) {
                switch( $param["edad"] ) {
                    case 18: $condiciones .= " AND ic.edad BETWEEN 18 AND 24";
                        break;
                    case 25: $condiciones .= " AND ic.edad BETWEEN 25 AND 29";
                        break;
                    case 30: $condiciones .= " AND ic.edad BETWEEN 30 AND 34";
                        break;
                    case 35: $condiciones .= " AND ic.edad BETWEEN 35 AND 39";
                        break;
                    case 40: $condiciones .= " AND ic.edad BETWEEN 40 AND 44";
                        break;
                    case 45: $condiciones .= " AND ic.edad BETWEEN 45 AND 49";
                        break;
                    case 50: $condiciones .= " AND ic.edad BETWEEN 50 AND 54";
                        break;
                    case 55: $condiciones .= " AND ic.edad BETWEEN 55 AND 59";
                        break;
                    case 60: $condiciones .= " AND ic.edad >= 60";
                        break;
                    case 0: $condiciones .= " AND (ic.edad IS NULL OR ic.edad = 0)";
                        break;
                }
            }
        }
        
        if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
            } else {
		$condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
            }
        }
        if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
            $fechaInicio = explode("/", $param["fechaInicial"]);
            $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
            $fechaFin = explode("/", $param["fechaFinal"]);
            $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
            
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            } else {
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            }
        }
        if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
            $condiciones .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $condiciones .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
        }
        if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
            $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
        }
        
        if ($param["consultarSentenciados"] == "S" ) {
            $condiciones .= " AND cj.cveEstatusCarpeta=2";
            if ( $consultarPor != 3 && $consultarPor != 7 && $consultarPor != 11 ) {
            
                $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            } else {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( $consultarPor == 15 ) {
                $tablas .= " 
                            INNER JOIN tbltipossentencias ts ON ts.cveTipoSentencia = act.cveTipoSentencia AND ts.activo='S'";
                $campos .= " ,ts.cveTipoSentencia, ts.desTipoSentencia";
                $condiciones .= " AND ts.cveTipoSentencia=" . $param["cveTipoSentencia"];
                $group .= " ,ts.cveTipoSentencia";
            }
            /*
             * Consulta sentenciados por medio de procedimiento abreviado
             */
            if ( $consultarPor == 16 ) {
                $campos .= " , tpp.cveTipoProcedimiento, tpp.desTipoProcedimiento";
                $tablas .= " INNER JOIN tbltiposprocedimientos tpp ON tpp.cveTipoProcedimiento = act.cveTipoProcedimiento";
                $group .= " ,tpp.cveTipoProcedimiento";
                $condiciones .= " AND tpp.cveTipoProcedimiento=" . $param["cveConclusion"];
            }
        }
        
        if ( $param["desgloseGenero"] == "S" ) {
            $campos .= " ,g.cveGenero, g.desGenero";
            if ( $group != "" ) {
                $group .= " ,g.cveGenero";
            } else {
                $group .= " g.cveGenero";
            }
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            $tablas .= " INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipoJuzgado";
            if ( $group != "" ) {
                $group .= " ,tj.cveTipoJuzgado";
            } else {
                $group .= " tj.cveTipoJuzgado";
            }
        }
        
        if ( $consultarPor == 8 ) {
            switch ( $param["cveResidenciaHabitual"] ) {
                case 1: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado=15 AND dic.recidenciaHabitual='S'";
                    break;
                case 2: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S'";
                    break;
                case 3: $condiciones .= " AND p.cvePais=118 AND dic.recidenciaHabitual='S'";
                    break;
                case 4: $condiciones .= " AND p.cvePais=117 AND dic.recidenciaHabitual='S'";
                    break;
                case 5: $condiciones .= " AND rm.cveRegionMundial=5 AND dic.recidenciaHabitual='S'";
                    break;
                case 6: $condiciones .= " AND rm.cveRegionMundial=6 AND dic.recidenciaHabitual='S'";
                    break;
                case 7: $condiciones .= " AND rm.cveRegionMundial IN(1,2) AND dic.recidenciaHabitual='S'";
                    break;
                case 8: $condiciones .= " AND rm.cveRegionMundial=7 AND dic.recidenciaHabitual='S'";
                    break;
                case 9: $condiciones .= " AND rm.cveRegionMundial=3 AND dic.recidenciaHabitual='S'";
                    break;
                case 10: $condiciones .= " AND p.cveRegionMundial NOT IN(1,2,3,4,5,6,7) AND dic.recidenciaHabitual='S'";
                    break;
                case 11: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
                default: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
            }
        }
        
        if ( (int)$param["cveTipoPersona"] > 0 ) {
            $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
        }
        
        /*
         * Consulta por modalidad de violencia
         */
        if ( $param["mostrarModalidaViolencia"] == "S" ) {
            $campos .= " ,mo.cveModalidadAcoso, mo.desModalidadAcoso";
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                          INNER JOIN tblsexualescarpetas sc ON sc.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta AND sc.activo='S'
                          INNER JOIN tblmodalidadesacosos mo ON mo.cveModalidadAcoso = sc.cveModalidadAcoso AND mo.activo='S'";
            if ( $group != "" ) {
                $group .= " ,mo.cveModalidadAcoso";
            } else {
                $group .= " mo.cveModalidadAcoso";
            }
            if ( (int)$param["cveModalidadViolencia"] > 0 ) {
                $condiciones .= " AND mo.cveModalidadAcoso = " . $param["cveModalidadViolencia"];
            }
        }
        
        /*
         * Si se elige el tipo de consulta por numero de delitos
         */
        if ( $consultarPor == 11 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.Delitos = 1) THEN '1' ELSE
                        CASE WHEN (consulta.Delitos = 2) THEN '2' ELSE
                        CASE WHEN (consulta.Delitos = 3) THEN '3' ELSE
                        CASE WHEN (consulta.Delitos = 4) THEN '4' ELSE
                        CASE WHEN (consulta.Delitos = 5) THEN '5' ELSE
                        CASE WHEN (consulta.Delitos >= 6) THEN '6'
                        END END END END END END rangoDelitos, COUNT(*) AS totalImputados,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion
                        , consulta.cveDistrito, consulta.desDistrito, consulta.cveJuzgado, consulta.desJuzgado";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(DISTINCT(impo.idDelitoCarpeta)) AS Delitos,e.desEstado, 
                       ic.estadoNacimiento, r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito,
                       j.cveJuzgado, j.desJuzgado";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $distritosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $distritosDto->getCveDistrito();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveJuzgado, rangoDelitos";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("rangoDelitos", $param) ) {
                $condiciones = " consulta.Delitos=" . $param["rangoDelitos"];
            }
            
        }
        
        /*
         * Consulta sentenciados por multa
         */
        if ( $consultarPor == 12 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadMulta <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadMulta > 50000) THEN '50000'
                        END END END END END END END END END END END multa, COUNT(*) AS totalImputados,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion
                        , consulta.cveDistrito, consulta.desDistrito, consulta.cveJuzgado, consulta.desJuzgado";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadMulta) AS cantidadMulta,e.desEstado, 
                       ic.estadoNacimiento, r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito,
                       j.cveJuzgado, j.desJuzgado";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $distritosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $distritosDto->getCveDistrito();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveJuzgado, multa";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("multa", $param) ) {
                switch( $param["multa"] ) {
                    case 5000: $condiciones .= " consulta.cantidadMulta <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadMulta BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadMulta BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadMulta BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadMulta BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadMulta BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadMulta BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadMulta BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadMulta > 50000";
                        break;
                }
            }
            
        }
        
        /*
         * Consultar sentencuiados por monto de reparacion del da�o
         */
        if ( $consultarPor == 13 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadReparacion <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadReparacion > 50000) THEN '50000'
                        END END END END END END END END END END END sancion, COUNT(*) AS totalImputados,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion
                        , consulta.cveDistrito, consulta.desDistrito, consulta.cveJuzgado, consulta.desJuzgado";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadReparacion) AS cantidadReparacion,e.desEstado, 
                       ic.estadoNacimiento, r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito,
                       j.cveJuzgado, j.desJuzgado";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '60'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $distritosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $distritosDto->getCveDistrito();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion=3";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveJuzgado, sancion";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("sancion", $param) ) {
                switch( $param["sancion"] ) {
                    case 5000: $condiciones .= " consulta.cantidadReparacion <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadReparacion BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadReparacion BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadReparacion BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadReparacion BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadReparacion BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadReparacion BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadReparacion BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadReparacion > 50000";
                        break;
                }
            }
            
        }
        
        /*
         * Consultar sentenciados por tiempo en prision
         */
        if ( $consultarPor == 14 ) {
            $condiciones = "";
            $campos = " CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) < 6 ) THEN '6' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11 ) THEN '11' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23 ) THEN '12' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35 ) THEN '24' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47 ) THEN '36' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59 ) THEN '48' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119 ) THEN '72' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179 ) THEN '120' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239 ) THEN '180' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299 ) THEN '240' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300 ) THEN '300'
                        END END END END END END END END END END END tiempoPrision, COUNT(*) AS totalImputados,
                        e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion
                        , d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas = " tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $condiciones = " cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $condiciones .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $condiciones .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $distritosDto->getCveDistrito() != "" ) {
                $condiciones .= " AND j.cveDistrito=" . $distritosDto->getCveDistrito();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " AND cj.cveEstatusCarpeta=2
                                  AND imsa.cveTipoSancion=1 
                                  AND imsa.fechaInicio<>''";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $group = " j.cveJuzgado, tiempoPrision";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,g.cveGenero";
                } else {
                    $group .= " g.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , tj.cveTipoJuzgado";
                } else {
                    $group .= " tj.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("tiempoPrision", $param) ) {
                switch( $param["tiempoPrision"] ) {
                    case 6: $condiciones .= " AND TIMESTAMPDIFF(MONTH, imsa.fechaInicio, imsa.fechaTermina) < 6";
                        break;
                    case 11: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11";
                        break;
                    case 12: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23";
                        break;
                    case 24: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35";
                        break;
                    case 36: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47";
                        break;
                    case 48: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59";
                        break;
                    case 72: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119";
                        break;
                    case 120: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179";
                        break;
                    case 180: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239";
                        break;
                    case 240: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299";
                        break;
                    case 300: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300";
                        break;
                }
            }
            
        }
        
        /*
         * Consulta sentenciados por numero de penas
         */
        if ( $consultarPor == 17 ) {
            
            $campos = " CASE WHEN (consulta.idImputadoSancion = 1) THEN '1' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 2) THEN '2' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 3) THEN '3' END END END numeroPenas, 
                        COUNT(*) AS totalImputados, consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, 
                        consulta.desRegion, consulta.cveDistrito, consulta.desDistrito, consulta.cveJuzgado, 
                        consulta.desJuzgado";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(imsa.idImputadoSancion) AS idImputadoSancion,e.desEstado, 
                       ic.estadoNacimiento, r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito,
                       j.cveJuzgado, j.desJuzgado";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '60'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $distritosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $distritosDto->getCveDistrito();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion IN(1,2,3)";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveJuzgado, numeroPenas";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            $condiciones = " consulta.idImputadoSancion > 0
                             AND consulta.idImputadoSancion < 4";
            if (array_key_exists("numeroPenas", $param) ) {
                $condiciones .= " AND consulta.idImputadoSancion = " . $param["numeroPenas"];
            }
            
        }
        
        $params["fields"] = $campos;
        $params["tables"] = $tablas;
        $params["conditions"] = $condiciones;
        $params["groups"] = $group;
        $params["orders"] = " totalImputados DESC";
        $paginacion["paginacion"] = false;
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $rs = $SelectDAO->selectDAO($params, $this->proveedor);
        return $rs;
    }
    
    public function reporteImputadosGeneralDesglosado($carpetasJudicialesDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $juzgadosDto, $param, $consultarPor) {
        $SelectDAO = new SelectDAO();
        if ( $consultarPor == 8 ) {
            $campos = " distinct(dic.idDomicilioImputadoCarpeta) AS idDomicilioImputadoCarpeta,ic.idImputadoCarpeta, 
                        cj.numero, cj.anio, tc.desTipoCarpeta, e.cveEstado,e.desEstado, r.cveRegion, 
                        r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, ic.nombre, 
                        ic.paterno, ic.materno, ic.nombreMoral, ic.cveTipoPersona, ic.edad";
        } else {
            $campos = " DISTINCT(ic.idImputadoCarpeta) AS idImputadoCarpeta, cj.numero, cj.anio, tc.desTipoCarpeta, e.cveEstado,e.desEstado, r.cveRegion, 
                        r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, ic.nombre, 
                        ic.paterno, ic.materno, ic.nombreMoral, ic.cveTipoPersona, ic.edad";
        }
        
        $tablas = " tblcarpetasjudiciales cj
                    INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                    INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                    INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                    INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                    INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                    LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento
                    
                    ";
        if( $param["desgloseGenero"] == "S" ) {
            $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
        }
        $condiciones = " cj.activo='S' 
                         ";
        $group = "";
        if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
            } else {
		$condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
            }
        }
        if ( $juzgadosDto->getCveDistrito() != "" ) {
            $condiciones .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
        }
        if ( $juzgadosDto->getCveJuzgado() != "" ) {
            $condiciones .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
        }
        switch ($consultarPor) {
            case 1: $campos .= " , alf.cveAlfabetismo, alf.desAlfabetismo";
                    $tablas .= " INNER JOIN tblalfabetismo alf ON alf.cveAlfabetismo = ic.cveAlfabetismo";
                    $group .= " ";
                    $condiciones .= " AND alf.cveAlfabetismo=" . $imputadoscarpetasDto->getCveAlfabetismo();
                break;
            case 2: $campos .= " , esp.cveEspanol, esp.desEspanol";
                    $tablas .= " INNER JOIN tblespanol esp ON esp.cveEspanol = ic.cveEspanol";
                    $condiciones .= " AND esp.cveEspanol=" . $imputadoscarpetasDto->getCveEspanol();
                break;
            case 3: $campos .= " , de.cveDelito, de.desDelito";
                    $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                    AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                                  INNER JOIN tbldelitoscarpetas dc ON dc.idDelitoCarpeta = impo.idDelitoCarpeta
                                    AND dc.idCarpetaJudicial = cj.idCarpetaJudicial AND dc.activo='S'
                                  INNER JOIN tbldelitos de ON de.cveDelito = dc.cveDelito AND de.activo='S'";
                    $condiciones .= " AND de.cveDelito = " . $param["cveDelito"];
                    //$group .= " de.cveDelito";
                break;
            case 4: $campos .= " , tfl.cveTipoFamiliaLinguistica, tfl.desTipoFamiliaLinguistica";
                    $tablas .= " INNER JOIN tbltipofamilialinguistica tfl ON tfl.cveTipoFamiliaLinguistica = ic.cveTipoFamiliaLinguistica";
                    $condiciones .= " AND tfl.cveTipoFamiliaLinguistica=" . $imputadoscarpetasDto->getCveTipoFamiliaLinguistica();
                break;
            case 5: $campos .= " , g.cveGenero, g.desGenero";
                    $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
                    $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
                break;
            case 6: $campos .= " , ni.cveNivelInstruccion, ni.desNivelInstruccion";
                    $tablas .= " INNER JOIN tblnivelesinstrucciones ni ON ni.cveNivelInstruccion = ic.cveNivelInstruccion";
                    $condiciones .= " AND ni.cveNivelInstruccion=" . $imputadoscarpetasDto->getCveNivelInstruccion();
                break;
            case 7: $campos .= " , gp.cveGradoParticipacion, gp.desGradoParticipacion";
                    $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                    AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                                 INNER JOIN tblgradoparticipaciones gp ON gp.cveGradoParticipacion = impo.cveGradoParticipacion";
                    $condiciones .= " AND gp.cveGradoParticipacion=" . $gradoParticipacionDto->getCveGradoParticipacion();
                break;
            case 8: $campos .= " , CASE WHEN (dic.cvePais = 119 AND dic.cveEstado = 15 AND dic.recidenciaHabitual='S' ) THEN '1' ELSE
                                 CASE WHEN (dic.cvePais = 119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S') THEN '2' ELSE
                                 CASE WHEN (dic.cvePais = 118 AND dic.recidenciaHabitual='S') THEN '3' ELSE
                                 CASE WHEN (dic.cvePais = 117 AND dic.recidenciaHabitual='S') THEN '4' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=5 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '5' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=6 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '6' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '7' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=7 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '8' ELSE
                                 CASE WHEN (dic.cvePais IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial=3 AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '9' ELSE
                                 CASE WHEN (dic.cvePais NOT IN (SELECT cvePais FROM tblpaises WHERE cveRegionMundial IN(1,2,3,4,5,6,7) AND activo='S') AND dic.recidenciaHabitual='S' ) THEN '10' ELSE
                                 CASE WHEN (dic.recidenciaHabitual = 'N' OR dic.recidenciaHabitual IS NULL) THEN '11'
                                 END END END END END END END END END END END cveResidenciaHabitual";
                    $tablas .= " INNER JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta AND dic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = dic.cvePais AND p.activo='S'
                                 INNER JOIN tblregionesmundiales rm ON rm.cveRegionMundial = p.cveRegionMundial AND rm.activo='S'
                                 LEFT JOIN tblestados de ON de.cveEstado = dic.cveEstado AND de.activo='S'";
                    
                    //$condiciones .= " AND con.cveConvivencia=" . $domiciliosImputadosDto->getCveConvivencia();
                break;
            case 9: $campos .= " , p.cvePais, p.desPais";
                    $tablas .= " INNER JOIN tblnacionalidadesimputadoscarpetas nic ON nic.idImputadoCarpeta = ic.idImputadoCarpeta AND nic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = nic.cvePais";
                    $condiciones .= " AND p.cvePais=" . $imputadoscarpetasDto->getCvePaisNacimiento();
                break;
            case 10: $campos .= " , o.cveOcupacion, o.desOcupacion";
                    $tablas .= " INNER JOIN tblocupaciones o ON o.cveOcupacion = ic.cveOcupacion";
                    $condiciones .= " AND o.cveOcupacion=" . $imputadoscarpetasDto->getCveOcupacion();
                break;
            default : $campos .= "";
                    $group .= " ";
                break;
        }
        
        /*
         * Consulta por tipo de violencia
         */
        if ( $param["mostrarTipoViolencia"] == "S" ) {
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                             AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tblofendidoscarpetas oc ON oc.idOfendidoCarpeta = impo.idOfendidoCarpeta AND oc.activo='S'
                         INNER JOIN tbldelitoscarpetas dc ON dc.idDelitoCarpeta = impo.idDelitoCarpeta AND dc .activo='S'
                         INNER JOIN tbldelitos de ON de.cveDelito = dc.cveDelito AND de.activo='S'";
            $condiciones .= " AND oc.cveTipoParte=4";
            switch( $param["cveTipoViolencia"] ) {
                case 0: $campos = " CASE WHEN (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3) THEN 1 ELSE 0 END AS victimasDeDelincuencia,
                                    CASE WHEN (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3) THEN 1 ELSE 0 END AS victimasDeViolenciadeGenero,
                                    CASE WHEN (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3) THEN 1 ELSE 0 END AS victimasDeTrata,
                                    CASE WHEN (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3) THEN 1 ELSE 0 END AS victimasDeAcoso,
                                    ic.idImputadoCarpeta, cj.numero, cj.anio, tc.desTipoCarpeta, e.cveEstado,e.desEstado, r.cveRegion, 
                                    r.desRegion, d.cveDistrito, d.desDistrito, j.cveJuzgado, j.desJuzgado, ic.nombre, 
                                    ic.paterno, ic.materno, ic.nombreMoral, ic.cveTipoPersona, ic.edad,
                                    oc.idOfendidoCarpeta, oc.nombre AS nombreOfendido, oc.cveTipoPersona AS tipoPersonaOfendido,
                                    oc.paterno AS paternoofendido,oc.materno AS maternoOfendido,
                                    oc.nombreMoral AS nombreMoralOfendido,de.cveDelito, de.desDelito";
                    break;
                case 1: $campos .= " ,oc.cveVictimaDeLaDelincuenciaOrganizada AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3)";
                    break;
                case 2: $campos .= " ,oc.cveVictimaDeViolenciaDeGenero AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3)";
                    break;
                case 3: $campos .= " ,oc.cveVictimaDeTrata AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3)";
                    break;
                case 4: $campos .= " ,oc.cveVictimaDeAcoso AS tipoViolencia";
                        $condiciones .= " AND (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3)";
                    break;
            }
            
        }
        
        if ( $param["rangoEdad"] == "S" ) {
            $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                         CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                         CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                         CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                         CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                         CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                         CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                         CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                         CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                         CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                         END END END END END END END END END END rangoEdad";
            if (array_key_exists("edad", $param) ) {
                switch( $param["edad"] ) {
                    case 18: $condiciones .= " AND ic.edad BETWEEN 18 AND 24";
                        break;
                    case 25: $condiciones .= " AND ic.edad BETWEEN 25 AND 29";
                        break;
                    case 30: $condiciones .= " AND ic.edad BETWEEN 30 AND 34";
                        break;
                    case 35: $condiciones .= " AND ic.edad BETWEEN 35 AND 39";
                        break;
                    case 40: $condiciones .= " AND ic.edad BETWEEN 40 AND 44";
                        break;
                    case 45: $condiciones .= " AND ic.edad BETWEEN 45 AND 49";
                        break;
                    case 50: $condiciones .= " AND ic.edad BETWEEN 50 AND 54";
                        break;
                    case 55: $condiciones .= " AND ic.edad BETWEEN 55 AND 59";
                        break;
                    case 60: $condiciones .= " AND ic.edad >= 60";
                        break;
                    case 0: $condiciones .= " AND (ic.edad IS NULL OR ic.edad = 0)";
                        break;
                }
            }
        }
        
        if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
            } else {
		$condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
            }
        }
        if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
            $fechaInicio = explode("/", $param["fechaInicial"]);
            $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
            $fechaFin = explode("/", $param["fechaFinal"]);
            $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            } else {
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            }
        }
        if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
            $condiciones .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $condiciones .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
        }
        if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
            $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
        }
        if ($param["consultarSentenciados"] == "S" ) {
            $condiciones .= " AND cj.cveEstatusCarpeta=2";
            if ( $consultarPor != 3 && $consultarPor != 7 && $consultarPor != 11 ) {
            
                $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            } else {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( $consultarPor == 15 ) {
                $tablas .= " 
                            INNER JOIN tbltipossentencias ts ON ts.cveTipoSentencia = act.cveTipoSentencia AND ts.activo='S'";
                $campos .= " ,ts.cveTipoSentencia, ts.desTipoSentencia";
                $condiciones .= " AND ts.cveTipoSentencia=" . $param["cveTipoSentencia"];
            }
            /*
             * Consulta sentenciados por medio de procedimiento abreviado
             */
            if ( $consultarPor == 16 ) {
                $campos .= " , tpp.cveTipoProcedimiento, tpp.desTipoProcedimiento";
                $tablas .= " INNER JOIN tbltiposprocedimientos tpp ON tpp.cveTipoProcedimiento = act.cveTipoProcedimiento";
                $condiciones .= " AND tpp.cveTipoProcedimiento=" . $param["cveConclusion"];
            }
        }
        
        if ( $param["desgloseGenero"] == "S" ) {
            $campos .= " ,g.cveGenero, g.desGenero";
//            if ( $group != "" ) {
//                $group .= " ,g.cveGenero";
//            } else {
//                $group .= " g.cveGenero";
//            }
        }
        
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            $tablas .= " INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipoJuzgado";
//            if ( $group != "" ) {
//                $group .= " ,tj.cveTipoJuzgado";
//            } else {
//                $group .= " tj.cveTipoJuzgado";
//            }
        }
        
        if ( $consultarPor == 8 ) {
            switch ( $param["cveResidenciaHabitual"] ) {
                case 1: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado=15 AND dic.recidenciaHabitual='S'";
                    break;
                case 2: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S'";
                    break;
                case 3: $condiciones .= " AND p.cvePais=118 AND dic.recidenciaHabitual='S'";
                    break;
                case 4: $condiciones .= " AND p.cvePais=117 AND dic.recidenciaHabitual='S'";
                    break;
                case 5: $condiciones .= " AND rm.cveRegionMundial=5 AND dic.recidenciaHabitual='S'";
                    break;
                case 6: $condiciones .= " AND rm.cveRegionMundial=6 AND dic.recidenciaHabitual='S'";
                    break;
                case 7: $condiciones .= " AND rm.cveRegionMundial IN(1,2) AND dic.recidenciaHabitual='S'";
                    break;
                case 8: $condiciones .= " AND rm.cveRegionMundial=7 AND dic.recidenciaHabitual='S'";
                    break;
                case 9: $condiciones .= " AND rm.cveRegionMundial=3 AND dic.recidenciaHabitual='S'";
                    break;
                case 10: $condiciones .= " AND p.cveRegionMundial NOT IN(1,2,3,4,5,6,7) AND dic.recidenciaHabitual='S'";
                    break;
                case 11: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
                default: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
            }
        }
        
        if ( (int)$param["cveTipoPersona"] > 0 ) {
            $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
        }
        
        /*
         * Consulta por modalidad de violencia
         */
        if ( $param["mostrarModalidaViolencia"] == "S" ) {
            $campos .= " ,mo.cveModalidadAcoso, mo.desModalidadAcoso";
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                          INNER JOIN tblsexualescarpetas sc ON sc.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta AND sc.activo='S'
                          INNER JOIN tblmodalidadesacosos mo ON mo.cveModalidadAcoso = sc.cveModalidadAcoso AND mo.activo='S'";
            if ( (int)$param["cveModalidadViolencia"] > 0 ) {
                $condiciones .= " AND mo.cveModalidadAcoso = " . $param["cveModalidadViolencia"];
            }
        }
        
        /*
         * Si se elige el tipo de consulta por numero de delitos
         */
        if ( $consultarPor == 11 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.Delitos = 1) THEN '1' ELSE
                        CASE WHEN (consulta.Delitos = 2) THEN '2' ELSE
                        CASE WHEN (consulta.Delitos = 3) THEN '3' ELSE
                        CASE WHEN (consulta.Delitos = 4) THEN '4' ELSE
                        CASE WHEN (consulta.Delitos = 5) THEN '5' ELSE
                        CASE WHEN (consulta.Delitos >= 6) THEN '6'
                        END END END END END END rangoDelitos, consulta.idImputadoCarpeta, 
                        consulta.numero, consulta.anio, consulta.desTipoCarpeta,consulta.desEstado, consulta.estadoNacimiento, 
                        consulta.cveRegion, consulta.desRegion, consulta.cveDistrito, consulta.desDistrito, 
                        consulta.cveJuzgado, consulta.desJuzgado, consulta.nombre, consulta.paterno, consulta.materno, 
                        consulta.nombreMoral, consulta.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(DISTINCT(impo.idDelitoCarpeta)) AS Delitos,ic.idImputadoCarpeta, 
                       cj.numero, cj.anio, tc.desTipoCarpeta,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion, 
                       d.cveDistrito, d.desDistrito,j.cveJuzgado, j.desJuzgado, ic.nombre, ic.paterno, ic.materno, 
                       ic.nombreMoral, ic.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $tablas .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             ";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveDistrito, rangoDelitos";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("rangoDelitos", $param) ) {
                $condiciones = " consulta.Delitos=" . $param["rangoDelitos"];
            }
            
        }
        
        /*
         * Consultar sentenciados por multa
         */
        if ( $consultarPor == 12 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadMulta <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadMulta BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadMulta > 50000) THEN '50000'
                        END END END END END END END END END END END multa, consulta.cantidadMulta, consulta.idImputadoCarpeta, 
                        consulta.numero, consulta.anio, consulta.desTipoCarpeta,consulta.desEstado, consulta.estadoNacimiento, 
                        consulta.cveRegion, consulta.desRegion, consulta.cveDistrito, consulta.desDistrito, 
                        consulta.cveJuzgado, consulta.desJuzgado, consulta.nombre, consulta.paterno, consulta.materno, 
                        consulta.nombreMoral, consulta.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadMulta) AS cantidadMulta,ic.idImputadoCarpeta, 
                       cj.numero, cj.anio, tc.desTipoCarpeta,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion, 
                       d.cveDistrito, d.desDistrito,j.cveJuzgado, j.desJuzgado, ic.nombre, ic.paterno, ic.materno, 
                       ic.nombreMoral, ic.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $tablas .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2 
                             AND imsa.cveTipoSancion=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveDistrito, multa";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("multa", $param) ) {
                switch( $param["multa"] ) {
                    case 5000: $condiciones .= " consulta.cantidadMulta <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadMulta BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadMulta BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadMulta BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadMulta BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadMulta BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadMulta BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadMulta BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadMulta > 50000";
                        break;
                }
            }
            
        }
        
        /*
         * Consultar sentenciados por monto de reparacion del da�o
         */
        if ( $consultarPor == 13 ) {
            $condiciones = "";
            $campos = " CASE WHEN (consulta.cantidadReparacion <= 5000) THEN '5000' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 5001 AND 10000) THEN '5001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 10001 AND 15000) THEN '10001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 15001 AND 20000) THEN '15001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 20001 AND 25000) THEN '20001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 25001 AND 30000) THEN '25001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 30001 AND 35000) THEN '30001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 35001 AND 40000) THEN '35001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 40001 AND 45000) THEN '40001' ELSE
                        CASE WHEN (consulta.cantidadReparacion BETWEEN 45001 AND 50000) THEN '45001' ELSE
                        CASE WHEN (consulta.cantidadReparacion > 50000) THEN '50000'
                        END END END END END END END END END END END sancion, consulta.cantidadReparacion, consulta.idImputadoCarpeta, 
                        consulta.numero, consulta.anio, consulta.desTipoCarpeta,consulta.desEstado, consulta.estadoNacimiento, 
                        consulta.cveRegion, consulta.desRegion, consulta.cveDistrito, consulta.desDistrito, 
                        consulta.cveJuzgado, consulta.desJuzgado, consulta.nombre, consulta.paterno, consulta.materno, 
                        consulta.nombreMoral, consulta.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT SUM(imsa.cantidadReparacion) AS cantidadReparacion,ic.idImputadoCarpeta, 
                       cj.numero, cj.anio, tc.desTipoCarpeta,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion, 
                       d.cveDistrito, d.desDistrito,j.cveJuzgado, j.desJuzgado, ic.nombre, ic.paterno, ic.materno, 
                       ic.nombreMoral, ic.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $tablas .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2 
                             AND imsa.cveTiposancion=3";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveDistrito, sancion";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("sancion", $param) ) {
                switch( $param["sancion"] ) {
                    case 5000: $condiciones .= " consulta.cantidadReparacion <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadReparacion BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadReparacion BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadReparacion BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadReparacion BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadReparacion BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadReparacion BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadReparacion BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadReparacion > 50000";
                        break;
                }
            }
            
        }
        
        /*
         * Consultar sentenciados por tiempo en prision
         */
        if ( $consultarPor == 14 ) {
            $condiciones = "";
            $campos = " CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) < 6 ) THEN '6' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11 ) THEN '11' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23 ) THEN '12' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35 ) THEN '24' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47 ) THEN '36' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59 ) THEN '48' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119 ) THEN '72' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179 ) THEN '120' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239 ) THEN '180' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299 ) THEN '240' ELSE
                        CASE WHEN ( TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300 ) THEN '300'
                        END END END END END END END END END END END tiempoPrision, ic.idImputadoCarpeta, 
                        cj.numero, cj.anio, tc.desTipoCarpeta,e.desEstado, ic.estadoNacimiento, 
                        r.cveRegion, r.desRegion, d.cveDistrito, d.desDistrito, 
                        j.cveJuzgado, j.desJuzgado, ic.nombre, ic.paterno, ic.materno, 
                        ic.nombreMoral, ic.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas = " tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $condiciones = " cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $condiciones .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $condiciones .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $condiciones .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $condiciones .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " AND cj.cveEstatusCarpeta=2 
                                  AND imsa.cveTiposancion=1 
                                  AND imsa.fechaInicio<>''";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $group = " d.cveDistrito, tiempoPrision";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,g.cveGenero";
                } else {
                    $group .= " g.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            
            if (array_key_exists("tiempoPrision", $param) ) {
                switch( $param["tiempoPrision"] ) {
                    case 6: $condiciones .= " AND TIMESTAMPDIFF(MONTH, imsa.fechaInicio, imsa.fechaTermina) < 6";
                        break;
                    case 11: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11";
                        break;
                    case 12: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23";
                        break;
                    case 24: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35";
                        break;
                    case 36: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47";
                        break;
                    case 48: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59";
                        break;
                    case 72: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119";
                        break;
                    case 120: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179";
                        break;
                    case 180: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239";
                        break;
                    case 240: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299";
                        break;
                    case 300: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300";
                        break;
                }
            }
            
        }
        
        /*
         * Consulta sentenciados por numero de penas
         */
        if ( $consultarPor == 17 ) {
            
            $campos = " CASE WHEN (consulta.idImputadoSancion = 1) THEN '1' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 2) THEN '2' ELSE
                        CASE WHEN (consulta.idImputadoSancion = 3) THEN '3' END END END numeroPenas, 
                        consulta.idImputadoCarpeta, consulta.numero, consulta.anio, consulta.desTipoCarpeta,
                        consulta.desEstado, consulta.estadoNacimiento, consulta.cveRegion, consulta.desRegion, 
                        consulta.cveDistrito, consulta.desDistrito, consulta.cveJuzgado, consulta.desJuzgado, 
                        consulta.nombre, consulta.paterno, consulta.materno, consulta.nombreMoral, 
                        consulta.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $campos .= " , consulta.cveGenero, consulta.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $campos .= " , consulta.cveTipoJuzgado, consulta.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $campos .= " , rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $campos .= " ,consulta.cveTipoPersona, consulta.desTipoPersona";
            }
            $tablas = " 
                      (SELECT COUNT(imsa.idImputadoSancion) AS idImputadoSancion,ic.idImputadoCarpeta, 
                       cj.numero, cj.anio, tc.desTipoCarpeta,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion, 
                       d.cveDistrito, d.desDistrito,j.cveJuzgado, j.desJuzgado, ic.nombre, ic.paterno, ic.materno, 
                       ic.nombreMoral, ic.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $tablas .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2 
                             AND imsa.cveTipoSancion IN(1,2,3)";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $group = " consulta.cveDistrito, numeroPenas";
            if ( $param["desgloseGenero"] == "S" ) {
                if ( $group != "" ) {
                    $group .= " ,consulta.cveGenero";
                } else {
                    $group .= " consulta.cveGenero";
                }
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                if ( $group != "" ) {
                    $group .= " , consulta.cveTipoJuzgado";
                } else {
                    $group .= " consulta.cveTipoJuzgado";
                }
            }
            $condiciones = " consulta.idImputadoSancion > 0
                             AND consulta.idImputadoSancion < 4";
            if (array_key_exists("numeroPenas", $param) ) {
                $condiciones .= " AND consulta.idImputadoSancion = " . $param["numeroPenas"];
            }
            
        }
        
        $params["fields"] = $campos;
        $params["tables"] = $tablas;
        $params["conditions"] = $condiciones;
        $params["groups"] = "";
        $params["orders"] = " anio, numero, nombre, nombreMoral";
        $paginacion["paginacion"] = true;
        $paginacion["pag"] = $param["pag"];
        $paginacion["cantxPag"] = $param["cantxPag"];
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $rs = $SelectDAO->selectDAO($params, $this->proveedor, $paginacion);
        return $rs;
    }
    
    public function paginasImputadosDesglose($carpetasJudicialesDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $juzgadosDto, $param, $consultarPor) {
        $SelectDAO = new SelectDAO();
        if ( $consultarPor == 8 ) {
            $campos = " COUNT(distinct(dic.idDomicilioImputadoCarpeta)) AS total";
        } else {
            $campos = " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS total";
        }
        
        $tablas = " tblcarpetasjudiciales cj
                    INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                    INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                    INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                    INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                    INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                    LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento
                    ";
        if( $param["desgloseGenero"] == "S" ) {
            $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
        }
        $condiciones = " cj.activo='S' 
                         ";
        $group = "";
        if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
            } else {
		$condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
            }
        }
        if ( $juzgadosDto->getCveDistrito() != "" ) {
            $condiciones .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
        }
        if ( $juzgadosDto->getCveJuzgado() != "" ) {
            $condiciones .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
        }
        switch ($consultarPor) {
            case 1: $tablas .= " INNER JOIN tblalfabetismo alf ON alf.cveAlfabetismo = ic.cveAlfabetismo";
                    $condiciones .= " AND alf.cveAlfabetismo=" . $imputadoscarpetasDto->getCveAlfabetismo();
                break;
            case 2: $tablas .= " INNER JOIN tblespanol esp ON esp.cveEspanol = ic.cveEspanol";
                    $condiciones .= " AND esp.cveEspanol=" . $imputadoscarpetasDto->getCveEspanol();
                break;
            case 3: $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                                    AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                                  INNER JOIN tbldelitoscarpetas dc ON dc.idDelitoCarpeta = impo.idDelitoCarpeta
                                    AND dc.idCarpetaJudicial = cj.idCarpetaJudicial AND dc.activo='S'
                                  INNER JOIN tbldelitos de ON de.cveDelito = dc.cveDelito AND de.activo='S'";
                    $condiciones .= " AND de.cveDelito = " . $param["cveDelito"];
                break;
            case 4: $tablas .= " INNER JOIN tbltipofamilialinguistica tfl ON tfl.cveTipoFamiliaLinguistica = ic.cveTipoFamiliaLinguistica";
                    $condiciones .= " AND tfl.cveTipoFamiliaLinguistica=" . $imputadoscarpetasDto->getCveTipoFamiliaLinguistica();
                break;
            case 5: $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero"; 
                    $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
                break;
            case 6: $tablas .= " INNER JOIN tblnivelesinstrucciones ni ON ni.cveNivelInstruccion = ic.cveNivelInstruccion";
                    $condiciones .= " AND ni.cveNivelInstruccion=" . $imputadoscarpetasDto->getCveNivelInstruccion();
                break;
            case 7: $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                    AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                                 INNER JOIN tblgradoparticipaciones gp ON gp.cveGradoParticipacion = impo.cveGradoParticipacion";
                    $condiciones .= " AND gp.cveGradoParticipacion=" . $gradoParticipacionDto->getCveGradoParticipacion();
                break;
            case 8: $tablas .= " INNER JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta AND dic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = dic.cvePais AND p.activo='S'
                                 INNER JOIN tblregionesmundiales rm ON rm.cveRegionMundial = p.cveRegionMundial AND rm.activo='S'
                                 LEFT JOIN tblestados de ON de.cveEstado = dic.cveEstado AND de.activo='S'";
                    //$condiciones .= " AND con.cveConvivencia=" . $domiciliosImputadosDto->getCveConvivencia();
                break;
            case 9: $tablas .= " INNER JOIN tblnacionalidadesimputadoscarpetas nic ON nic.idImputadoCarpeta = ic.idImputadoCarpeta AND nic.activo='S'
                                 INNER JOIN tblpaises p ON p.cvePais = nic.cvePais";
                    $condiciones .= " AND p.cvePais=" . $imputadoscarpetasDto->getCvePaisNacimiento();
                break;
            case 10: $tablas .= " INNER JOIN tblocupaciones o ON o.cveOcupacion = ic.cveOcupacion";
                    $condiciones .= " AND o.cveOcupacion=" . $imputadoscarpetasDto->getCveOcupacion();
                break;
            default : $group .= "";
                break;
        }
        
        /*
         * Consulta por tipo de violencia
         */
        if ( $param["mostrarTipoViolencia"] == "S" ) {
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                             AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tblofendidoscarpetas oc ON oc.idOfendidoCarpeta = impo.idOfendidoCarpeta AND oc.activo='S'";
            $condiciones .= " AND oc.cveTipoParte=4";
            switch( $param["cveTipoViolencia"] ) {
                case 0: $campos = "COUNT(*) AS total";
                        $condiciones .= " AND ( oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3
                                          OR oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3
                                          OR oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3
                                          OR oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3)";
                    break;
                case 1: $condiciones .= " AND (oc.cveVictimaDeLaDelincuenciaOrganizada = 1 OR oc.cveVictimaDeLaDelincuenciaOrganizada = 3)";
                    break;
                case 2: $condiciones .= " AND (oc.cveVictimaDeViolenciaDeGenero = 1 OR oc.cveVictimaDeViolenciaDeGenero = 3)";
                    break;
                case 3: $condiciones .= " AND (oc.cveVictimaDeTrata = 1 OR oc.cveVictimaDeTrata = 3)";
                    break;
                case 4: $condiciones .= " AND (oc.cveVictimaDeAcoso = 1 OR oc.cveVictimaDeAcoso = 3)";
                    break;
            }
            
        }
        
        if ( $param["desgloseGenero"] == "S" ) {
            //$campos .= " ,g.cveGenero, g.desGenero";
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            //$campos .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            $tablas .= " INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipoJuzgado";
        }
        if ($param["consultarSentenciados"] == "S" ) {
            $condiciones .= " AND cj.cveEstatusCarpeta=2";
            if ( $consultarPor != 3 && $consultarPor != 7 && $consultarPor != 11 ) {
            
                $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta
                                AND impo.idCarpetaJudicial = cj.idCarpetaJudicial AND impo.activo='S'
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            } else {
                $tablas .= " 
                            INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                            INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( $consultarPor == 15 ) {
                $tablas .= " 
                            INNER JOIN tbltipossentencias ts ON ts.cveTipoSentencia = act.cveTipoSentencia AND ts.activo='S'";
                $condiciones .= " AND ts.cveTipoSentencia=" . $param["cveTipoSentencia"];
            }
            /*
             * Consulta sentenciados por medio de procedimiento abreviado
             */
            if ( $consultarPor == 16 ) {
                $tablas .= " INNER JOIN tbltiposprocedimientos tpp ON tpp.cveTipoProcedimiento = act.cveTipoProcedimiento";
                $condiciones .= " AND tpp.cveTipoProcedimiento=" . $param["cveConclusion"];
            }
        }
        
        if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
            if ($param["consultarSentenciados"] == "S" ) {
		$condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
            } else {
		$condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
            }
        }
        if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
            $fechaInicio = explode("/", $param["fechaInicial"]);
            $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
            $fechaFin = explode("/", $param["fechaFinal"]);
            $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
            
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            } else {
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
            }
        }
        if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
            $condiciones .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
        }
        if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
            $condiciones .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
        }
        if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
            $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
        }
        if ( $param["rangoEdad"] == "S" ) {
            if (array_key_exists("edad", $param) ) {
                switch( $param["edad"] ) {
                    case 18: $condiciones .= " AND ic.edad BETWEEN 18 AND 24";
                        break;
                    case 25: $condiciones .= " AND ic.edad BETWEEN 25 AND 29";
                        break;
                    case 30: $condiciones .= " AND ic.edad BETWEEN 30 AND 34";
                        break;
                    case 35: $condiciones .= " AND ic.edad BETWEEN 35 AND 39";
                        break;
                    case 40: $condiciones .= " AND ic.edad BETWEEN 40 AND 44";
                        break;
                    case 45: $condiciones .= " AND ic.edad BETWEEN 45 AND 49";
                        break;
                    case 50: $condiciones .= " AND ic.edad BETWEEN 50 AND 54";
                        break;
                    case 55: $condiciones .= " AND ic.edad BETWEEN 55 AND 59";
                        break;
                    case 60: $condiciones .= " AND ic.edad >= 60";
                        break;
                    case 0: $condiciones .= " AND (ic.edad IS NULL OR ic.edad = 0)";
                        break;
                }
            }
        }
        if ( $consultarPor == 8 ) {
            switch ( $param["cveResidenciaHabitual"] ) {
                case 1: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado=15 AND dic.recidenciaHabitual='S'";
                    break;
                case 2: $condiciones .= " AND dic.cvePais=119 AND dic.cveEstado <> 15 AND dic.recidenciaHabitual='S'";
                    break;
                case 3: $condiciones .= " AND p.cvePais=118 AND dic.recidenciaHabitual='S'";
                    break;
                case 4: $condiciones .= " AND p.cvePais=117 AND dic.recidenciaHabitual='S'";
                    break;
                case 5: $condiciones .= " AND rm.cveRegionMundial=5 AND dic.recidenciaHabitual='S'";
                    break;
                case 6: $condiciones .= " AND rm.cveRegionMundial=6 AND dic.recidenciaHabitual='S'";
                    break;
                case 7: $condiciones .= " AND rm.cveRegionMundial IN(1,2) AND dic.recidenciaHabitual='S'";
                    break;
                case 8: $condiciones .= " AND rm.cveRegionMundial=7 AND dic.recidenciaHabitual='S'";
                    break;
                case 9: $condiciones .= " AND rm.cveRegionMundial=3 AND dic.recidenciaHabitual='S'";
                    break;
                case 10: $condiciones .= " AND p.cveRegionMundial NOT IN(1,2,3,4,5,6,7) AND dic.recidenciaHabitual='S'";
                    break;
                case 11: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
                default: $condiciones .= " AND (dic.recidenciaHabitual='N' OR dic.recidenciaHabitual IS NULL)";
                    break;
            }
        }
        
        if ( (int)$param["cveTipoPersona"] > 0 ) {
            $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
        }
        
        /*
         * Consulta por modalidad de violencia
         */
        if ( $param["mostrarModalidaViolencia"] == "S" ) {
            $tablas .= " INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                            AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                          INNER JOIN tblsexualescarpetas sc ON sc.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta AND sc.activo='S'
                          INNER JOIN tblmodalidadesacosos mo ON mo.cveModalidadAcoso = sc.cveModalidadAcoso AND mo.activo='S'";
            if ( (int)$param["cveModalidadViolencia"] > 0 ) {
                $condiciones .= " AND mo.cveModalidadAcoso = " . $param["cveModalidadViolencia"];
            }
        }
        
        /*
         * Si se elige el tipo de consulta por numero de delitos
         */
        if ( $consultarPor == 11 ) {
            $condiciones = "";
            $campos = " COUNT(*) AS total";
            $tablas = " 
                      (SELECT COUNT(DISTINCT(impo.idDelitoCarpeta)) AS Delitos,ic.idImputadoCarpeta, 
                       cj.numero, cj.anio, tc.desTipoCarpeta,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion, 
                       d.cveDistrito, d.desDistrito,j.cveJuzgado, j.desJuzgado, ic.nombre, ic.paterno, ic.materno, 
                       ic.nombreMoral, ic.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '60'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoPersona, tp.desTipoPersona";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $tablas .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            
            if (array_key_exists("rangoDelitos", $param) ) {
                $condiciones = " consulta.Delitos=" . $param["rangoDelitos"];
            }
            
        }
        
        /*
         * Consulta sentenciados por multa
         */
        if ( $consultarPor == 12 ) {
            $condiciones = "";
            $campos = " COUNT(*) AS total";
            $tablas = " 
                      (SELECT SUM(imsa.cantidadMulta) AS cantidadMulta,ic.idImputadoCarpeta, 
                       cj.numero, cj.anio, tc.desTipoCarpeta,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion, 
                       d.cveDistrito, d.desDistrito,j.cveJuzgado, j.desJuzgado, ic.nombre, ic.paterno, ic.materno, 
                       ic.nombreMoral, ic.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoJuzgado, tp.desTipoJuzgado";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $tablas .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2 AND imsa.cveTipoSancion=2";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            
            if (array_key_exists("multa", $param) ) {
                switch( $param["multa"] ) {
                    case 5000: $condiciones .= " consulta.cantidadMulta <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadMulta BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadMulta BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadMulta BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadMulta BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadMulta BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadMulta BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadMulta BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadMulta BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadMulta > 50000";
                        break;
                }
            }
            
        }
        
        /*
         * Consultar sentenciados por monto de reparacion del da�o
         */
        if ( $consultarPor == 13 ) {
            $condiciones = "";
            $campos = " COUNT(*) AS total";
            $tablas = " 
                      (SELECT SUM(imsa.cantidadReparacion) AS cantidadReparacion,ic.idImputadoCarpeta, 
                       cj.numero, cj.anio, tc.desTipoCarpeta,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion, 
                       d.cveDistrito, d.desDistrito,j.cveJuzgado, j.desJuzgado, ic.nombre, ic.paterno, ic.materno, 
                       ic.nombreMoral, ic.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoJuzgado, tp.desTipoJuzgado";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $tablas .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2 AND imsa.cveTipoSancion=3";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            
            if (array_key_exists("sancion", $param) ) {
                switch( $param["sancion"] ) {
                    case 5000: $condiciones .= " consulta.cantidadReparacion <= 5000";
                        break;
                    case 5001: $condiciones .= " consulta.cantidadReparacion BETWEEN 5001 AND 10000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 10001 AND 15000";
                        break;
                    case 15001: $condiciones .= " consulta.cantidadReparacion BETWEEN 15001 AND 20000";
                        break;
                    case 20001: $condiciones .= " consulta.cantidadReparacion BETWEEN 20001 AND 25000";
                        break;
                    case 25001: $condiciones .= " consulta.cantidadReparacion BETWEEN 25001 AND 30000";
                        break;
                    case 30001: $condiciones .= " consulta.cantidadReparacion BETWEEN 30001 AND 35000";
                        break;
                    case 10001: $condiciones .= " consulta.cantidadReparacion BETWEEN 35001 AND 40000";
                        break;
                    case 40001: $condiciones .= " consulta.cantidadReparacion BETWEEN 40001 AND 45000";
                        break;
                    case 45001: $condiciones .= " consulta.cantidadReparacion BETWEEN 45001 AND 50000";
                        break;
                    case 50000: $condiciones .= " consulta.cantidadReparacion > 50000";
                        break;
                }
            }
            
        }
        
        /*
         * Paginas sentenciados por tiempo en prision
         */
        if ( $consultarPor == 14 ) {
            $condiciones = "";
            $campos = " COUNT(*) AS total";
            
            $tablas = " tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $condiciones = " cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $condiciones .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $condiciones .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $condiciones .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $condiciones .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $condiciones .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $condiciones .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $condiciones .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $condiciones .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $condiciones .= " AND cj.cveEstatusCarpeta=2 
                                  AND imsa.cveTipoSancion=1 
                                  AND imsa.fechaInicio<>''";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $condiciones .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            if (array_key_exists("tiempoPrision", $param) ) {
                switch( $param["tiempoPrision"] ) {
                    case 6: $condiciones .= " AND TIMESTAMPDIFF(MONTH, imsa.fechaInicio, imsa.fechaTermina) < 6";
                        break;
                    case 11: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 6 AND 11";
                        break;
                    case 12: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 12 AND 23";
                        break;
                    case 24: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 24 AND 35";
                        break;
                    case 36: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 36 AND 47";
                        break;
                    case 48: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 48 AND 59";
                        break;
                    case 72: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 60 AND 119";
                        break;
                    case 120: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 120 AND 179";
                        break;
                    case 180: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 180 AND 239";
                        break;
                    case 240: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) BETWEEN 240 AND 299";
                        break;
                    case 300: $condiciones .= " AND TIMESTAMPDIFF(MONTH, fechaInicio, fechaTermina) >= 300";
                        break;
                }
            }
            
        }
        
        /*
         * Paginas sentenciados por numero de penas
         */
        if ( $consultarPor == 17 ) {
            
            $campos = " COUNT(*) AS total";
            $tablas = " 
                      (SELECT COUNT(imsa.idImputadoSancion) AS idImputadoSancion,ic.idImputadoCarpeta, 
                       cj.numero, cj.anio, tc.desTipoCarpeta,e.desEstado, ic.estadoNacimiento, r.cveRegion, r.desRegion, 
                       d.cveDistrito, d.desDistrito,j.cveJuzgado, j.desJuzgado, ic.nombre, ic.paterno, ic.materno, 
                       ic.nombreMoral, ic.cveTipoPersona";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " , g.cveGenero, g.desGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " , tj.cveTipoJuzgado, tj.desTipoJuzgado";
            }
            if ( $param["rangoEdad"] == "S" ) {
                $tablas .= " ,CASE WHEN (ic.edad BETWEEN 18 AND 24) THEN '18' ELSE
                             CASE WHEN (ic.edad BETWEEN 25 AND 29) THEN '25' ELSE
                             CASE WHEN (ic.edad BETWEEN 30 AND 34) THEN '30' ELSE
                             CASE WHEN (ic.edad BETWEEN 35 AND 39) THEN '35' ELSE
                             CASE WHEN (ic.edad BETWEEN 40 AND 44) THEN '40' ELSE
                             CASE WHEN (ic.edad BETWEEN 45 AND 49) THEN '45' ELSE
                             CASE WHEN (ic.edad BETWEEN 50 AND 54) THEN '50' ELSE
                             CASE WHEN (ic.edad BETWEEN 55 AND 59) THEN '55' ELSE
                             CASE WHEN (ic.edad >= 60) THEN '60' ELSE
                             CASE WHEN (ic.edad is null OR ic.edad=0) THEN '0'
                             END END END END END END END END END END rangoEdad";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " ,tp.cveTipoJuzgado, tp.desTipoJuzgado";
            }
            $tablas .= " FROM tblcarpetasjudiciales cj
                         INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                         INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial AND ic.activo='S'
                         INNER JOIN tblimpofedelcarpetas impo ON impo.idCarpetaJudicial = cj.idCarpetaJudicial
                           AND impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                         INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                         INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                         INNER JOIN tbldistritos d ON d.cveDistrito = j.cveDistrito AND d.activo='S'
                         LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento";
            if ( $param["desgloseGenero"] == "S" ) {
                $tablas .= " INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " 
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado";
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " INNER JOIN tblimputadossentencias ims ON ims.idImpOfeDelCarpeta = impo.idImpOfeDelCarpeta
                                AND ims.activo='S'
                             INNER JOIN tblimputadossanciones imsa ON imsa.idImputadoSentencia = ims.idImputadoSentencia
                                AND imsa.activo='S'
                             INNER JOIN tblactuaciones act ON act.idActuacion = ims.idActuacion AND act.activo='S'";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " INNER JOIN tbltipospersonas tp ON tp.cveTipoPersona = ic.cveTipoPersona";
            }
            $tablas .= " 
                        WHERE cj.activo='S'";
            if ( $carpetasJudicialesDto->getAnio() != "" && (int)$carpetasJudicialesDto->getAnio() > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
				AND YEAR(CAST(act.fechaSentencia AS DATE)) = " . $carpetasJudicialesDto->getAnio();
                } else {
                    $tablas .= " 
				AND cj.anio = " . $carpetasJudicialesDto->getAnio();
                }
            }
            if ( $param["cveMes"] != "" && (int)$param["cveMes"] > 0 ) {
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= "
				 AND MONTH(CAST(act.fechaSentencia AS DATE)) = " . $param["cveMes"];
                } else {
                    $tablas .= " 
				AND MONTH(CAST(cj.fechaRadicacion AS DATE)) = " . $param["cveMes"];
                }
            }
            if ( $param["fechaInicial"] != "" && $param["fechaFinal"] != "" ) {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $fechaInicial = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0];
                $fechaFin = explode("/", $param["fechaFinal"]);
                $fechaFinal = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0];
                
                if ($param["consultarSentenciados"] == "S" ) {
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(act.fechaSentencia AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                } else {
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) >= CAST('" . $fechaInicial . "' AS DATE)";
                    $tablas .= " 
			AND CAST(cj.fechaRadicacion AS DATE) <= CAST('" . $fechaFinal . "' AS DATE)";
                }
            }
            if ( $param["edadMinima"] != "" && $param["edadMaxima"] != "" ) {
                $tablas .= " AND ic.edad >= '" . $param["edadMinima"] . "' AND ic.edad <= '" . $param["edadMaxima"] . "'";
            }
            if ( $param["cveTipoJuzgado"] != "" && (int)$param["cveTipoJuzgado"] > 0 ) {
                $tablas .= " AND tj.cveTipoJuzgado=" . $param["cveTipoJuzgado"];
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $tablas .= " AND g.cveGenero=" . $imputadoscarpetasDto->getCveGenero();
            }
            if ( $juzgadosDto->getCveDistrito() != "" ) {
                $tablas .= " AND j.cveDistrito=" . $juzgadosDto->getCveDistrito();
            }
            if ( $juzgadosDto->getCveJuzgado() != "" ) {
                $tablas .= " AND j.cveJuzgado=" . $juzgadosDto->getCveJuzgado();
            }
            if ($param["consultarSentenciados"] == "S" ) {
                $tablas .= " AND cj.cveEstatusCarpeta=2
                             AND imsa.cveTipoSancion IN(1,2,3)";
            }
            if ( (int)$param["cveTipoPersona"] > 0 ) {
                $tablas .= " AND ic.cveTipoPersona = " . $param["cveTipoPersona"];
            }
            $tablas .= "  GROUP BY ic.idImputadoCarpeta";
            $tablas .= ") AS consulta";
            $condiciones = " consulta.idImputadoSancion > 0
                             AND consulta.idImputadoSancion < 4";
            if (array_key_exists("numeroPenas", $param) ) {
                $condiciones .= " AND consulta.idImputadoSancion = " . $param["numeroPenas"];
            }
            
        }
        
        $params["fields"] = $campos;
        $params["tables"] = $tablas;
        $params["conditions"] = $condiciones;
        $params["groups"] = "";
        $params["orders"] = "";
        $paginacion["paginacion"] = false;
        $paginacion["pag"] = $param["pag"];
        $paginacion["cantxPag"] = $param["cantxPag"];
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $rs = $SelectDAO->selectDAO($params, $this->proveedor);
        
        $datos = json_decode($rs);
        //print_r($datos);
        if ( (int)$datos->totalCount > 0 ) {
            $totalRegistros = (int)$datos->resultados[0]->total;
        } else {
            $totalRegistros = 0;
        }
        $Pages = (int) $totalRegistros / $param["cantxPag"];
        $restoPages = $totalRegistros % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $totalRegistros . '",';
        $json .= '"data":[';
        $x = 1;
        //var_dump($totPages);
        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index++) {

                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x++;
                if ($x <= ($totPages )) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"' . ($index - 1) . '"';
            $json .= "}";
        }
        //print_r($json).'Jsonnn';
        return $json;
    }
    
    public function reporteImputadosDesglose($carpetasJudicialesDto, $juzgadosDto, $desglosado) {
        //var_dump($carpetasJudicialesDto);
        //var_dump($juzgadosDto);
        $SelectDAO = new SelectDAO();
        $campos = " COUNT(ic.idImputadoCarpeta) AS totalImputados, r.cveRegion, 
                    r.desRegion, dis.cveDistrito, dis.desDistrito, j.cveJuzgado, j.desJuzgado, 
                    p.cvePais, p.desPais, e.desEstado,ic.estadoNacimiento, g.desGenero";
        if ( $desglosado == 1 ) {
            $campos .= " ,alf.cveAlfabetismo,alf.desAlfabetismo";
        }
        if ( $desglosado == 2 ) {
            
        }
        if ( $desglosado == 3 ) {
            $campos .= " ,esp.cveEspanol, esp.desEspanol";
        }
        if ( $desglosado == 4 ) {
            $campos .= " ,ic.edad";
        }
        if ( $desglosado == 5 ) {
            $campos .= " ,tfl.cveTipoFamiliaLinguistica, tfl.desTipoFamiliaLinguistica";
        }
        if ( $desglosado == 6 ) {
            $campos .= " ,ni.cveNivelInstruccion, ni.desNivelInstruccion";
        }
        if ( $desglosado == 7 ) {
            
        }
        if ( $desglosado == 8 ) {
            $campos .= " ,con.cveConvivencia,con.desConvivencia";
        }
        
        if ( $desglosado == 11 ) {
            $campos .= " ,oc.cveOcupacion, oc.desOcupacion";
        }
        $tablas = " tblimputadoscarpetas ic
                    INNER JOIN tblcarpetasjudiciales cj ON cj.idCarpetaJudicial = ic.idCarpetaJudicial
                    INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                    INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                    INNER JOIN tblregiones r ON r.cveRegion = j.cveRegion AND r.activo='S'
                    INNER JOIN tbldistritos dis ON dis.cveDistrito = j.cveDistrito AND dis.activo='S'
                    INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado
                    LEFT JOIN tblgeneros g ON g.cveGenero = ic.cveGenero
                    INNER JOIN tblpaises p ON p.cvePais  = ic.cvePaisNacimiento
                    LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento
                    LEFT JOIN tblmunicipios m ON m.cveMunicipio = ic.cveMunicipioNacimiento";
        if ( $desglosado == 1 ) {
            $tablas .= " LEFT JOIN tblalfabetismo alf ON alf.cveAlfabetismo = ic.cveAlfabetismo";
        }
        if ( $desglosado == 2 ) {
            
        }
        if ( $desglosado == 3 ) {
            $tablas .= " LEFT JOIN tblespanol esp ON esp.cveEspanol = ic.cveEspanol";
        }
        if ( $desglosado == 5 ) {
            $tablas .= " LEFT JOIN tbltipofamilialinguistica tfl ON tfl.cveTipoFamiliaLinguistica = ic.cveTipoFamiliaLinguistica";
        }
        if ( $desglosado == 6 ) {
            $tablas .= " LEFT JOIN tblnivelesinstrucciones ni ON ni.cveNivelInstruccion = ic.cveNivelInstruccion";
        }
        if ( $desglosado == 7 ) {
            
        }
        if ( $desglosado == 8 ) {
            $tablas .= " INNER JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta AND dic.activo='S'
                         INNER JOIN tblconvivencias con ON con.cveConvivencia = dic.cveConvivencia";
        }
        
        if ( $desglosado == 11 ) {
            $tablas .= " INNER JOIN tblocupaciones oc ON oc.cveOcupacion = ic.cveOcupacion";
        }
        $params["fields"] = $campos;
        $params["tables"] = $tablas;
        $condiciones = " cj.activo = 'S'
                         AND ic.activo = 'S'";
        if ( $carpetasJudicialesDto->getAnio() != "" ) {
            $condiciones .= " AND cj.anio = " . $carpetasJudicialesDto->getAnio();
        }
        if ( $juzgadosDto->getCveJuzgado() != "" ) {
            $condiciones .= " AND j.cveJuzgado = " . $juzgadosDto->getCveJuzgado();
        }
        
        $agrupado = "";
        switch ( $desglosado ) {
            case 1: $agrupado = " alf.cveAlfabetismo, g.cveGenero"; break;
            case 2: $agrupado = " d.cveDelito, g.cveGenero"; break;
            case 3: $agrupado = " esp.cveEspanol, g.cveGenero"; break;
            case 4: $agrupado = " ic.edad, g.cveGenero"; break;
            case 5: $agrupado = " tfl.cveTipoFamiliaLinguistica, g.cveGenero"; break;
            case 6: $agrupado = " ni.cveNivelInstruccion, g.cveGenero"; break;
            case 7: $agrupado = " gp.cveGradoParticipacion, g.cveGenero"; break;
            case 8: $agrupado = " con.cveConvivencia, g.cveGenero"; break;
            case 9: $agrupado = " ic.cvePaisNacimiento, g.cveGenero"; break;
            case 10 : $agrupado = " "; break;
            case 11 : $agrupado = " oc.cveOcupacion, g.cveGenero"; break;
            default: $agrupado = " g.cveGenero"; break;
        }
        
        $orden = " totalImputados DESC";
        $params["conditions"] = $condiciones;
        $params["groups"] = $agrupado;
        $params["orders"] = $orden;
        $paginacion["paginacion"] = false;
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $rs = $SelectDAO->selectDAO($params, $this->proveedor);
        return $rs;
    }
    
    public function reporteImputadosNacionalidad($imputadoscarpetasDto, $tipoJuzgadosDto, $param) {
//        var_dump($imputadoscarpetasDto);
//        var_dump($tipoJuzgadosDto);
        $SelectDAO = new SelectDAO();
        $params["fields"] = "  COUNT(ic.idImputadoCarpeta) AS totalImputados, tj.cveTipoJuzgado, tj.desTipoJuzgado, 
                               p.cvePais, p.desPais, e.desEstado,ic.estadoNacimiento, g.desGenero, 
                               gp.desGradoParticipacion, ni.desNivelInstruccion, alf.desAlfabetismo, 
                               esp.desEspanol, tfl.desTipoFamiliaLinguistica, oc.desOcupacion, dic.recidenciaHabitual,
                               d.desDelito";
        $params["tables"] = " tblimputadoscarpetas ic
                                INNER JOIN tblcarpetasjudiciales cj ON cj.idCarpetaJudicial = ic.idCarpetaJudicial
                                INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                                INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                                INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado
                                LEFT JOIN tblgeneros g ON g.cveGenero = ic.cveGenero
                                INNER JOIN tblpaises p ON p.cvePais  = ic.cvePaisNacimiento
                                LEFT JOIN tblestados e ON e.cveEstado = ic.cveEstadoNacimiento
                                LEFT JOIN tblmunicipios m ON m.cveMunicipio = ic.cveMunicipioNacimiento
                                LEFT JOIN tblimpofedelcarpetas impo ON impo.idImputadoCarpeta = ic.idImputadoCarpeta AND impo.activo='S'
                                INNER JOIN tblgradoparticipaciones gp ON gp.cveGradoParticipacion = impo.cveGradoParticipacion
                                LEFT JOIN tbldelitoscarpetas dc ON dc.idDelitoCarpeta = impo.idDelitoCarpeta AND dc.activo='S'
                                INNER JOIN tbldelitos d ON d.cveDelito = dc.cveDelito 
                                LEFT JOIN tblnivelesinstrucciones ni ON ni.cveNivelInstruccion = ic.cveNivelInstruccion
                                LEFT JOIN tblalfabetismo alf ON alf.cveAlfabetismo = ic.cveAlfabetismo
                                LEFT JOIN tblespanol esp ON esp.cveEspanol = ic.cveEspanol
                                LEFT JOIN tbltipofamilialinguistica tfl ON tfl.cveTipoFamiliaLinguistica = ic.cveTipoFamiliaLinguistica
                                LEFT JOIN tblocupaciones oc ON oc.cveOcupacion = ic.cveOcupacion
                                LEFT JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta AND dic.activo='S'";
        $condiciones = " cj.activo = 'S'
                         AND ic.activo = 'S'";
        if ( $imputadoscarpetasDto->getCvePaisNacimiento() != "" && (int)$imputadoscarpetasDto->getCvePaisNacimiento() > 0 ) {
            $condiciones .= " AND dic.cvePais = '" . $imputadoscarpetasDto->getCvepaisNacimiento() . "'";
        }
        if ( $imputadoscarpetasDto->getCveEstadoNacimiento() != "" && (int)$imputadoscarpetasDto->getCveEstadoNacimiento() > 0 ) {
            $condiciones .= " AND dic.cveEstado = '" . $imputadoscarpetasDto->getCveEstadoNacimiento() . "'";
        }
        if ( $imputadoscarpetasDto->getCveMunicipioNacimiento() != "" && (int)$imputadoscarpetasDto->getCveMunicipioNacimiento() > 0 ) {
            $condiciones .= " AND dic.cveMunicipio = '" . $imputadoscarpetasDto->getCveMunicipioNacimiento() . "'";
        }
        if ( $tipoJuzgadosDto->getCveTipoJuzgado() != "" && (int)$tipoJuzgadosDto->getCveTipoJuzgado() > 0 ) {
            $condiciones .= " AND tj.cveTipoJuzgado = '" . $tipoJuzgadosDto->getCveTipoJuzgado() . "'";
        }
        if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
            $condiciones .= " AND g.cveGenero = '" . $imputadoscarpetasDto->getCveGenero() . "'";
        }
        if ( $imputadoscarpetasDto->getEdad() != "" && (int)$imputadoscarpetasDto->getEdad() != "0" ) {
            if ( $imputadoscarpetasDto->getEdad() != "62" ) {
                $edades = explode("-", $imputadoscarpetasDto->getEdad());
                $condiciones .= " AND ic.edad BETWEEN '" . $edades[0] . "' AND '" . $edades[1] . "'";
            } else {
                $condiciones .= " AND ic.edad > '" . $imputadoscarpetasDto->getEdad() . "'";
            }
            
        }
        $desglosado = $param["desglosado"];
        $agrupado = "";
        switch ( $desglosado ) {
            case 1: $agrupado = " gp.cveGradoParticipacion, g.cveGenero, e.cveEstado"; break;
            case 2: $agrupado = " ni.cveNivelInstruccion, g.cveGenero, e.cveEstado"; break;
            case 3: $agrupado = " p.cvePais, g.cveGenero, e.cveEstado"; break;
            case 4: $agrupado = " alf.cveAlfabetismo, g.cveGenero, e.cveEstado"; break;
            case 5: $agrupado = " esp.cveEspanol, g.cveGenero, e.cveEstado"; break;
            case 6: $agrupado = " tfl.cveTipoFamiliaLinguistica, g.cveGenero, e.cveEstado"; break;
            case 7: $agrupado = " oc.cveOcupacion, g.cveGenero, e.cveEstado"; break;
            case 8: $agrupado = " dic.recidenciaHabitual, g.cveGenero, e.cveEstado"; break;
            case 9: $agrupado = " d.cveDelito, g.cveGenero, e.cveEstado"; break;
            default: $agrupado = " tj.cveTipoJuzgado, g.cveGenero, e.cveEstado"; break;
        }
        
        $orden = " totalImputados DESC";
        $params["conditions"] = $condiciones;
        $params["groups"] = $agrupado;
        $params["orders"] = $orden;
        $paginacion["paginacion"] = true;
        $paginacion["pag"] = $param["pagina"];
        $paginacion["cantxPag"] = $param["registros"];
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $rs = $SelectDAO->selectDAO($params, $this->proveedor);
        return $rs;
    }
    
    public function getPaginasImputadosNacionalidad($imputadoscarpetasDto, $tipoJuzgadosDto, $registrosPagina) {
        //$selectDao = new SelectDAO();
        $SelectDAO = new SelectDAO();
        $params["fields"] = "  count(dic.idDomicilioImputadoCarpeta) AS totalCount";
        $params["tables"] = "tblcarpetasjudiciales cj
                             INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                             INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado
                             INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial
                             INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero
                             LEFT JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta
                             INNER JOIN tblpaises p ON p.cvePais  = dic.cvePais
                             LEFT JOIN tblestados e ON e.cveEstado = dic.cveEstado
                             LEFT JOIN tblmunicipios m ON m.cveMunicipio = dic.cveMunicipio";
        $condiciones = " cj.activo = 'S'
                         AND ic.activo = 'S'";
        if ( $imputadoscarpetasDto->getCvePaisNacimiento() != "" && (int)$imputadoscarpetasDto->getCvePaisNacimiento() > 0 ) {
            $condiciones .= " AND dic.cvePais = '" . $imputadoscarpetasDto->getCvepaisNacimiento() . "'";
        }
        if ( $imputadoscarpetasDto->getCveEstadoNacimiento() != "" && (int)$imputadoscarpetasDto->getCveEstadoNacimiento() > 0 ) {
            $condiciones .= " AND dic.cveEstado = '" . $imputadoscarpetasDto->getCveEstadoNacimiento() . "'";
        }
        if ( $imputadoscarpetasDto->getCveMunicipioNacimiento() != "" && (int)$imputadoscarpetasDto->getCveMunicipioNacimiento() > 0 ) {
            $condiciones .= " AND dic.cveMunicipio = '" . $imputadoscarpetasDto->getCveMunicipioNacimiento() . "'";
        }
        if ( $tipoJuzgadosDto->getCveTipoJuzgado() != "" && (int)$tipoJuzgadosDto->getCveTipoJuzgado() > 0 ) {
            $condiciones .= " AND tj.cveTipoJuzgado = '" . $tipoJuzgadosDto->getCveTipoJuzgado() . "'";
        }
        if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
            $condiciones .= " AND g.cveGenero = '" . $imputadoscarpetasDto->getCveGenero() . "'";
        }
        if ( $imputadoscarpetasDto->getCveNivelInstruccion() != "" && (int)$imputadoscarpetasDto->getCveNivelInstruccion() > 0 ) {
            $condiciones .= " AND ic.cveNivelInstruccion = '" . $imputadoscarpetasDto->getCveNivelInstruccion() . "'";
        }
        if ( $imputadoscarpetasDto->getEdad() != "" && (int)$imputadoscarpetasDto->getEdad() > 0 ) {
            if ( $imputadoscarpetasDto->getEdad() != "62" ) {
                $edades = explode("-", $imputadoscarpetasDto->getEdad());
                $condiciones .= " AND ic.edad BETWEEN '" . $edades[0] . "' AND '" . $edades[1] . "'";
            } else {
                $condiciones .= " AND ic.edad > '" . $imputadoscarpetasDto->getEdad() . "'";
            }
            
        }
        $condiciones .= " GROUP BY ic.idImputadoCarpeta";
        if ( $imputadoscarpetasDto->getCveNivelInstruccion() == 0
            && $imputadoscarpetasDto->getEdad() == 0) {
            $condiciones .= " UNION ALL
                            (
                              SELECT count(iex.idImputadoExhorto) AS totalCount
                              FROM tblexhortos exh
                                  INNER JOIN tbljuzgados j ON j.cveJuzgado = exh.cveJuzgado
                                  INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado
                                  INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = exh.cveTipoCarpeta
                                  INNER JOIN tblimputadosexhortos iex ON iex.idExhorto = exh.idExhorto
                                  INNER JOIN tblgeneros g ON g.cveGenero = iex.cveGenero
                                  INNER JOIN tblpaises p ON p.cvePais = iex.cvePais
                                  LEFT JOIN tblestados e ON e.cveEstado = iex.cveEstado
                                  LEFT JOIN tblmunicipios m ON m.cveMunicipio = iex.cveMunicipio
                              WHERE exh.activo = 'S'
                              AND iex.activo = 'S'";
            if ( $imputadoscarpetasDto->getCvePaisNacimiento() != "" && (int)$imputadoscarpetasDto->getCvePaisNacimiento() > 0 ) {
                $condiciones .= " AND iex.cvePais = '" . $imputadoscarpetasDto->getCvepaisNacimiento() . "'";
            }
            if ( $imputadoscarpetasDto->getCveEstadoNacimiento() != "" && (int)$imputadoscarpetasDto->getCveEstadoNacimiento() > 0 ) {
                $condiciones .= " AND iex.cveEstado = '" . $imputadoscarpetasDto->getCveEstadoNacimiento() . "'";
            }
            if ( $imputadoscarpetasDto->getCveMunicipioNacimiento() != "" && (int)$imputadoscarpetasDto->getCveMunicipioNacimiento() > 0 ) {
                $condiciones .= " AND iex.cveMunicipio = '" . $imputadoscarpetasDto->getCveMunicipioNacimiento() . "'";
            }
            if ( $tipoJuzgadosDto->getCveTipoJuzgado() != "" && (int)$tipoJuzgadosDto->getCveTipoJuzgado() > 0 ) {
                $condiciones .= " AND tj.cveTipoJuzgado = '" . $tipoJuzgadosDto->getCveTipoJuzgado() . "'";
            }
            if ( $imputadoscarpetasDto->getCveGenero() != "" && (int)$imputadoscarpetasDto->getCveGenero() > 0 ) {
                $condiciones .= " AND g.cveGenero = '" . $imputadoscarpetasDto->getCveGenero() . "'";
            }
            $condiciones .= " group BY iex.idImputadoExhorto";
            $condiciones .= ")";
        }
        
        
        $params["conditions"] = $condiciones;
        $params["groups"] = "";
        $params["orders"] = "";
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $rs = $SelectDAO->selectDAO($params,$this->proveedor);
        $datos = json_decode($rs);
//        echo "<pre>";
//        print_r($datos);
//        echo "</pre>";
        $numTot = 0;
        
        foreach ( $datos->resultados as $resultado ) {
            $numTot += (int)$resultado->totalCount;
        }
        
//        echo "<br>Total: " .  $numTot;
        
        $json = "";
        $Pages = (int) $numTot / $registrosPagina;
        $restoPages = $numTot % $registrosPagina;
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        //echo $totPages.'-pags-';
    
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot . '",';
        $json .= '"data":[';
        $x = 1;
    
        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index++) {

                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x++;
                if ($x <= ($totPages )) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"' . ($index - 1) . '"';
            $json .= "}";
        }
        else
        {
            $index=0;
            $json .= "],";
                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
            $json .= '"estatus":"Error",';
            $json .= '"mensaje":"SIN RESULTADOS A MOSTRAR",';
            $json .= '"pagina":' . json_encode(($index)) . "";
            $json .= '"total":"' . ($index) . '"';
            $json .= "}";
        }
        
        return $json;
        
    }
    
    public function datosImputado($imputadoscarpetasDto, $proveedor = null) {
        $SelectDAO = new SelectDAO();
        $params["fields"] = "  count(dic.idDomicilioImputadoCarpeta) AS totalCount";
        $params["tables"] = "tblcarpetasjudiciales cj
                             INNER JOIN tbltiposcarpetas tc ON tc.cveTipoCarpeta = cj.cveTipoCarpeta
                             INNER JOIN tbljuzgados j ON j.cveJuzgado = cj.cveJuzgado
                             INNER JOIN tbltiposjuzgados tj ON tj.cveTipoJuzgado = j.cveTipojuzgado
                             INNER JOIN tblimputadoscarpetas ic ON ic.idCarpetaJudicial = cj.idCarpetaJudicial
                             INNER JOIN tblgeneros g ON g.cveGenero = ic.cveGenero
                             LEFT JOIN tbldomiciliosimputadoscarpetas dic ON dic.idImputadoCarpeta = ic.idImputadoCarpeta
                             INNER JOIN tblpaises p ON p.cvePais  = dic.cvePais
                             LEFT JOIN tblestados e ON e.cveEstado = dic.cveEstado
                             LEFT JOIN tblmunicipios m ON m.cveMunicipio = dic.cveMunicipio";
        $condiciones = " cj.activo = 'S'
                         AND ic.activo = 'S'";
        $params["conditions"] = $condiciones;
        $params["groups"] = "";
        $params["orders"] = "";
        $paginacion["paginacion"] = false;
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $rs = $SelectDAO->selectDAO($params, $this->proveedor);
        return $rs;
    }
    
}

//$carpetasJudicialesDto = new CarpetasjudicialesDTO();
//$carpetasJudicialesDto->setAnio(2016);
//$consultarPor = 11;
//$param["pag"] = 1;
//$param["cantxPag"] = 10;
//
//$param["cveDelito"] = 0;
//$param["cveMes"] = 0;
//$param["fechaInicial"] = "";
//$param["fechaFinal"] = "";
//$param["cveTipoJuzgado"] = 0;
//$param["desgloseGenero"] = "S";
//$param["edadMinima"] = "";
//$param["edadMaxima"] = "";
//$param["rangoEdad"] = "";
//$param["rangoDelitos"] = "";
//$param["consultarSentenciados"] = "N";
//$param["cveTipoSentencia"] = 0;
//$param["edad"] = "";
//$param["cveResidenciaHabitual"] = 0;
//$param["multa"] = 0;
//$param["sancion"] = "";
//$param["tiempoPrision"] = "";
//$param["cveConclusion"] = "";
//$param["numeroPenas"] = "";
//$param["cveTipoPersona"] = 0;
//$param["mostrarTipoViolencia"] = "N";
//$param["mostrarModalidaViolencia"] = "N";
//$param["cveTipoViolencia"] = 0;
//$param["cveModalidadViolencia"] = 0;
//
//$reporte = new ReporteimputadosController();
//$datos = $reporte->getPaginas($carpetasJudicialesDto, $consultarPor, $param);
//echo "<pre>";
//print_r($datos);
//echo "</pre>";
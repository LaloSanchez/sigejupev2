<?php
if (!isset($_SESSION) || $_SESSION == '') {
   session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    //ini_set("error_log", dirname(__FILE__)."/../../../logs/arbol-error.log");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/storedprocedures/_arbol/_ArbolDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");
    //include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

    include_once (dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

    //include_once '';
    //include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/antecedescarpetas/AntecedescarpetasController.Class.php");

    class ArbolFacade {

        public function __construct() {
            ;
        }

        public function selectTree($params, $proveedor = null, $paginacion = null) {
            $SelectDAO = new SelectDAO();
            return $SelectDAO->selectDAO($params, $proveedor, $paginacion);
        }

        public function selectPrincipal($params, $proveedor = null, $paginacion = null) {
            $SelectDAO = new SelectDAO();
            return $SelectDAO->selectDAO($params, $proveedor, $paginacion, true);
        }

        public function getTree($param) {
            $_arbol = new _ArbolDAO();
            return $_arbol->_Arbol($param);
        }

        public function initializeTiposCarpetas()
        {
            global $rsTiposcarpetas;
            $TiposcarpetasDto = new TiposcarpetasDTO();
            $TiposcarpetasController = new TiposcarpetasController();
            $rsTiposcarpetas = $TiposcarpetasController->selectTiposcarpetas($TiposcarpetasDto);
        }

        public function initializeTiposActuaciones()
        {
            global $rsTiposactuaciones;
            $TiposActuacionesDto = new TiposactuacionesDTO();
            $TiposactuacionesDao = new TiposactuacionesDAO();
            $rsTiposactuaciones = $TiposactuacionesDao->selectTiposactuaciones($TiposActuacionesDto);
        }

        public function getTiposActuacionesName($cveTipoActuacion) {
            global $rsTiposactuaciones;
            $totalCount = count($rsTiposactuaciones);
            for ($i = 0; $i < $totalCount; $i++) {
                if ($rsTiposactuaciones[$i]->getCveTipoActuacion() === $cveTipoActuacion) {
                    return $rsTiposactuaciones[$i]->getDesTipoActuacion();
                    break;
                }
            }
        }

        public function getTiposCarpetasName($cveTipoCarpeta) {
            global $rsTiposcarpetas;
            $totalCount = count($rsTiposcarpetas);
            for ($i = 0; $i < $totalCount; $i++) {
                if ($rsTiposcarpetas[$i]->getCveTipoCarpeta() === $cveTipoCarpeta) {
                    return $rsTiposcarpetas[$i]->getDesTipoCarpeta();
                    break;
                }
            }
        }

        public function getCarpetaBase($cveJuzgado, $cveTipoCarpeta, $numero, $anio, $nuc = '', $numCarpInv = '') {
            $arbolFacade = new ArbolFacade();
            $arbolFacade->initializeTiposActuaciones();
            $arbolFacade->initializeTiposCarpetas();
            switch ($cveTipoCarpeta) {
                case 7:
                    # EXHORTO
                    $params = '';
                    $params["fields"] = 'idExhorto as idCarpeta,numExhorto as numero,aniExhorto as anio,nuc,carpetaInv,fechaRegistro,cveTipoCarpeta,cveJuzgado';
                    $params["orders"] = 'fechaRegistro DESC';

                    // tablas
                    $params["tables"] = 'tblexhortos';

                    // condiciones
                    $conditions = '( (cveJuzgado = "' . $cveJuzgado . '") ';
                    if ($numero != 0) {
                        $conditions .= ' AND (numExhorto = "' . $numero . '") ';
                    }
                    if ($anio != 0) {
                        $conditions .= ' AND (aniExhorto = "' . $anio . '") ';
                    }
                    $conditions .= ' AND (activo = "S") )';

                    $params["conditions"] = $conditions;
                    $params["groups"] = '';

                    $base_json = $arbolFacade->selectTree($params);
                    $base_obj = json_decode($base_json);
                    // debe haber solo una carpeta con las condiciones anteriores
                    if ($base_obj->totalCount == 1) {
                        // todo bien, regresa la carpeta base, adicionando campos nombre nuc y carpeta investigacion (si no los tiene)
                        $base_obj->resultados[0]->name_carpeta = "EXHORTO";
                        $base_obj->resultados[0]->cveTipoCarpeta = "7";
                        return $base_obj->resultados[0];
                    } else if ($base_obj->totalCount == 0) {
                        // no se encontro ningun resultado
                        $json = '{"estatus" : "fail","mnj":"No se encontraron resultados"}';
                        echo $json;
                        exit();
                    } else {
                        $json = '{"estatus" : "fail","mnj":"No se puede mostrar el arbol, la carpeta esta duplicada en la base de datos"}';
                        echo $json;
                        exit();
                    }
                    break;
                case 8:
                    # AMPARO
                    $params = '';
                    $params["fields"] = 'idAmparo as idCarpeta,idCarpetaJudicial ,numAmparo as numero,aniAmparo as anio,carpetaInv,cveJuzgado,fechaRegistro';
                    $params["orders"] = 'fechaRegistro DESC';

                    // tablas
                    $params["tables"] = 'tblamparos';

                    // condiciones
                    $conditions = '( (cveJuzgado = "' . $cveJuzgado . '") ';
                    if ($numero != 0) {
                        $conditions .= ' AND (numAmparo = "' . $numero . '") ';
                    }
                    if ($anio != 0) {
                        $conditions .= ' AND (aniAmparo = "' . $anio . '") ';
                    }
                    $conditions .= ' AND (activo = "S") )';
                    $params["conditions"] = $conditions;

                    $params["groups"] = '';

                    $base_json = $arbolFacade->selectTree($params);
                    $base_obj = json_decode($base_json);
                    // debe haber solo una carpeta con las condiciones anteriores
                    if ($base_obj->totalCount == 1) {
                        // todo bien, regresa la carpeta base, adicionando campos nombre nuc y carpeta investigacion (si no los tiene)
                        $base_obj->resultados[0]->name_carpeta = "AMPARO";
                        $base_obj->resultados[0]->cveTipoCarpeta = "8";
                        return $base_obj->resultados[0];
                    } else if ($base_obj->totalCount == 0) {
                        // no se encontro ningun resultado
                        $json = '{"estatus" : "fail","mnj":"No se encontraron resultados"}';
                        echo $json;
                        exit();
                    } else {
                        $json = '{"estatus" : "fail","mnj":"No se puede mostrar el arbol, la carpeta esta duplicada en la base de datos"}';
                        echo $json;
                        exit();
                    }
                    break;
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    // CARPETAS JUDICIALES
                    $params = '';
                    $params["fields"] = 'idCarpetaJudicial as idCarpeta,numero,anio,nuc,carpetaInv,fechaRegistro,cveTipoCarpeta,cveJuzgado';
                    $params["orders"] = 'fechaRegistro DESC';

                    // tabla origen
                    $params["tables"] = 'tblcarpetasjudiciales';

                    // condiciones
                    $conditions = '( (cveJuzgado = "' . $cveJuzgado . '") AND (cveTipoCarpeta = "' . $cveTipoCarpeta . '") ';
                    if ($numero != 0) {
                        $conditions .= ' AND (numero = "' . $numero . '") ';
                    }
                    if ($anio != 0) {
                        $conditions .= ' AND (anio = "' . $anio . '") ';
                    }
                    if ($nuc != '') {
                        $conditions .= ' AND (nuc = "' . $nuc . '") ';
                    }
                    if ($numCarpInv != '') {
                        $conditions .= ' AND (carpetaInv = "' . $numCarpInv . '") ';
                    }
                    $conditions .= ' AND (activo = "S") )';
                    $params["conditions"] = $conditions;

                    $params["groups"] = '';

                    $base_json = $arbolFacade->selectTree($params);
                    $base_obj = json_decode($base_json);
                    // debe haber solo una carpeta con las condiciones anteriores
                    if ($base_obj->totalCount == 1) {
                        // todo bien, regresa la carpeta base, adicionando campos nombre nuc y carpeta investigacion (si no los tiene)
                        $base_obj->resultados[0]->name_carpeta = htmlspecialchars($arbolFacade->getTiposCarpetasName($base_obj->resultados[0]->cveTipoCarpeta));
                        return $base_obj->resultados[0];
                    } else if ($base_obj->totalCount == 0) {
                        // no se encontro ningun resultado
                        $json = '{"estatus" : "fail","mnj":"No se encontraron resultados"}';
                        echo $json;
                        exit();
                    } else {
                        $json = '{"estatus" : "fail","mnj":"No se puede mostrar el arbol, la carpeta esta duplicada en la base de datos"}';
                        echo $json;
                        exit();
                    }
                    break;
                default:
                    $json = '{"estatus" : "fail","mnj":"No se puede iniciar una busqueda desde el tipo de carpeta '.$cveTipoCarpeta.'"}';
                    echo $json;
                    exit();
                    break;
            }
        }

        public function getCarpetasHijas($idPadre) {
            $arbolFacade = new ArbolFacade();

            //$hijas = array();

            $params = '';
            $params["fields"] = 'idAntecedeCarpeta,idCarpetaPadre,idCarpetaHija,cveTipoCarpeta';
            $params["orders"] = 'fechaRegistro DESC';
            $params["tables"] = 'tblantecedescarpetas';
            $params["conditions"] = 'idCarpetaPadre = ' . $idPadre . ' AND activo = "S" ';
            $params["groups"] = '';
            $antecedes_json = $arbolFacade->selectTree($params);
            $antecedes_obj = json_decode($antecedes_json);

            $arbol = array();
            $i = 0;
            if ($antecedes_obj->totalCount > 0) {
                foreach ($antecedes_obj->resultados as $antecede) {
                    $arbol[$i] = array();
                    $arbol[$i]['idAntecedeCarpeta'] = $antecede->idAntecedeCarpeta;
                    $arbol[$i]['idCarpetaPadre'] = $antecede->idCarpetaPadre;
                    $arbol[$i]['idCarpetaHija'] = $antecede->idCarpetaHija;
                    $arbol[$i]['cveTipoCarpeta'] = $antecede->cveTipoCarpeta;
                    $arbol[$i]['childs'] = $arbolFacade->getCarpetasHijas($antecede->idCarpetaHija);
                    $i++;
                }
            }
            return $arbol;
        }

        public function convertToNode($tree, $parent_id, $parentfound = false, $list = array()) {
            $arbolFacade = new ArbolFacade();
            foreach ($tree as $k => $v) {
                if ($parentfound || $v['idCarpetaPadre'] == $parent_id) {
                    $rowdata = array();
                    foreach ($v as $field => $value) {
                        if ($field != 'childs')
                            $rowdata[$field] = $value;
                    }
                    $list[] = $rowdata;
                    if ($v['childs'])
                        $list = array_merge($list, $arbolFacade->convertToNode($v['childs'], $parent_id, true));
                }
                elseif ($v['childs'])
                    $list = array_merge($list, $arbolFacade->convertToNode($v['childs'], $parent_id));
            }
            return $list;
        }

        public function getIconoTipoActuacion($cveTipoCarpeta) {
            switch ($cveTipoCarpeta) {
                case '1': return "icon-promocion";
                    break;
                case '2': case '33': return "icon-acuerdo";
                    break;
                case '3': return "icon-sentencia";
                    break;
                case '4': return "icon-orden";
                    break;
                case '5': return "icon-autosdeApertura";
                    break;
                case '6': return "icon-actaMinima";
                    break;
                case '7': return "icon-oficio";
                    break;
                case '8': return "icon-exhGenerado";
                    break;
                case '9': return "icon-medidaCautelarOk";
                    break;
                case '11': return "icon-certificacion";
                    break;
                case '12': return "icon-cateo";
                    break;
                case '14': return "icon-medidasProteccion";
                    break;
                case '15': return "icon-ordenAprehension";
                    break;
                case '16': return "icon-comparecer";
                    break;
                case '17': return "icon-carpeta";
                    break;
                case '18': return "icon-peritos";
                    break;
                case '19': return "icon-forImputacion";
                    break;
                case '20': return "icon-notificacion";
                    break;
                case '21': return "icon-email";
                    break;
                case '22': return "icon-radicacionEjecucionSentencias";
                    break;
                case '25': return "icon-tomaDeMuestras";
                    break;
                case '26': return "icon-casos-relevantes";
                    break;
                case '32': return "icon-remision-apelacion";
                    break;
                case '34': return "icon-resolucion-apelacion";
                    break;
                case '35': return "icon-revision-extraordinaria";
                    break;
                default: return "icon-arbol";
                    break;
            }
        }

        public function getUrlTipoActuacion($cveTipoActuacion,$cveTipoCarpetapeta) {
            if ($cveTipoCarpetapeta == 6) {
                // es una TOCA (segunda instancia)
                $segundaInstancia =  true;
            }else{
                $segundaInstancia =  false;
            }
            switch ($cveTipoActuacion) {
                case 1: /* PROMOCIONES */ 
                    // se muestran diferentes url's dependiendo el tipo de juzgado
                    if ($segundaInstancia) {
                        $url = 'sigejupe/promociones/frmPromociones.php?origen=1';
                    }else{
                        $url = 'sigejupe/promociones/frmPromociones.php';
                    }
                    break;
                case 2: /* ACUERDOS */ 
                    // se muestran diferentes url's dependiendo el tipo de juzgado
                    if ($segundaInstancia) {
                        $url = 'sigejupe/acuerdos/frmAcuerdos.php?origen=1';
                    }else{
                        $url = 'sigejupe/acuerdos/frmAcuerdos.php';
                    }
                    break;
                case 3: /* SENTENCIAS */ $url = 'sigejupe/sentencias/frmSentencias.php';
                    break;
                case 4: /* ORDENES */ $url = 'sigejupe/ordenes/frmOrdenesAprehension.php';
                    break;
                case 5: /* AUTOS */ $url = 'sigejupe/autosvinculacionproceso/frmAutosvinculacionproceso.php';
                    break;
                case 6: /* ACTAS MINIMAS */ $url = 'sigejupe/actaminima/frmActaminima.php';
                    break;
                case 7: /* OFICIOS */ 
                    // se muestran diferentes url's dependiendo el tipo de juzgado
                    if ($segundaInstancia) {
                        $url = 'sigejupe/oficios/frmOficios.php?origen=1';
                    }else{
                        $url = 'sigejupe/oficios/frmOficios.php';
                    }
                    break;
                case 8: /* EXHORTOS GENERADOS */ $url = 'sigejupe/exhortos/frmExhortos.php?exhorto=1';
                    break;
                case 9: 
                    /* MEDIDAS CAUTELARES */ 
                    // se muestran diferentes url's dependiendo el tipo de juzgado
                    if ($segundaInstancia) {
                        $url = 'sigejupe/medidascautelares/frmMedidascautelares.php?origen=1';
                    }else{
                        $url = 'sigejupe/medidascautelares/frmMedidascautelares.php';
                    }
                    break;
                case 10: /* MEDIOS DE CONSIGNACION */ $url = '#noir';
                    break;
                case 11: /* CERTIFICACIONES */ $url = 'sigejupe/certificaciones/frmCertificaciones.php';
                    break;
                case 12: /* CATEO */ $url = 'sigejupe/consultasCateos/frmConsultasSolicitudesCateosView.php';
                    break;
                case 13: /* PROMOCIONES DE TERMINO */ $url = 'sigejupe/promocionestermino/frmPromocionestermino.php';
                    break;
                case 14: /* MEDIDAS DE PROTECCION */ $url = 'sigejupe/medidasprotecciones/frmMedidasprotecciones.php';
                    break;        
                case 15: /* ORDEN DE APREHENSION */ $url = 'sigejupe/ordenes/frmOrdenesAprehension.php';
                    break;
                case 16: /* COMPARECENCIAS */ $url = 'sigejupe/comparecencias/frmComparecencias.php';
                    break;
                case 17: /* PROMOCIONES QUE GENERAN CARPETA JUDICIALIZADA */ $url = 'sigejupe/promocionesgenerancpj/frmPromocionesGeneranCPJ.php';
                    break;
                case 18: /* SOLICITUD DE PERITO */ $url = 'sigejupe/peritos/frmPeritos.php';
                    break;
                case 19: /* FORMULACION DE IMPUTACION */ $url = 'sigejupe/formulacionimputaciones/frmFormulacionImputacion.php';
                    break;
                case 20:
                case 21: /* NOTIFICACION ELECTRONICA */ $url = 'sigejupe/notificaciones/frmNotificaciones.php';
                    break;
                case 22: /* AUTO DE RADICACION DE EJECUCION DE SENTENCIAS */ $url = 'sigejupe/ejecucionsentenciasimputados/frmEjecucionSentenciasImputados.php';
                    break;
                case 23: /* AUTO JUICIO ORAL */ $url = 'sigejupe/autojuiciooral/frmAutojuiciooral.php';
                    break;
                case 24: /* SUSPENSION CONDICIONAL */ $url = 'sigejupe/suspensioncondicional/frmSuspensionCondicional.php';
                    break;
                case 27: /* PROMOCIONES DE QUEJA */ $url = 'sigejupe/promocionesqueja/frmPromocionesQueja.php';
                    break;
                case 26: /* CASOS RELEVANTES */ $url = 'sigejupe/casosrelevantes/frmCasosRelevantes.php';
                    break;
                case 31: /* SENTENCIA PUBLICA */ $url = 'sigejupe/sentenciaspublicas/frmSentenciaspublicas.php';
                    break;
                case 32: /* REMISION DE APELACION */ 
                    // se muestran diferentes url's dependiendo el tipo de carpeta (TOCA para segunda instancia)
                    if ($segundaInstancia) {
                        $url = 'sigejupe/remisionapelacion/frmRemisionApelacion.php';
                    }else{
                        $url = 'sigejupe/remision/frmRemisionApelacion.php';
                    }
                    break;
                case 33: /* ACUERDO DE RADICACION */ $url = 'sigejupe/acuerdos/frmAcuerdosRadicacion.php';
                    break;
                case 34: /* RESOLUCION DE APELACION */ 
                    // se muestran diferentes url's dependiendo el tipo de carpeta (TOCA para segunda instancia)
                    if ($segundaInstancia) {
                        $url = 'sigejupe/resolucionapelacion/frmResolucionApelacion.php?origen=1';
                    }else{
                        $url = 'sigejupe/resolucionapelacion/frmResolucionApelacion.php';
                    }
                    break;
                case 36: /* RECONOCIMIENTO DE INOCENCIA */
                case 37: /* ANULACION DE SENTENCIA */ 
                case 35: /* REVISION EXTRAORDINARIA */ 
                    // se muestran diferentes url's dependiendo el tipo de carpeta (TOCA para segunda instancia)
                    if ($segundaInstancia) {
                        $url = 'sigejupe/revisionextraordinaria/frmRevisionExtraOrdinaria.php?origen=1';
                    }else{
                        $url = 'sigejupe/revisionextraordinaria/frmRevisionExtraOrdinaria.php';
                    }
                    break;
                default:
                    $url = 'sigejupe/page404.php';
                    break;
            }
            return $url;
        }

        public function getBaseCarpetaById($idCarpeta) {
            $arbolFacade = new ArbolFacade();
            // campos
            $params["fields"] = 'idCarpetaJudicial as idCarpeta,numero,anio,nuc,carpetaInv,fechaRegistro,cveTipoCarpeta,cveJuzgado';
            $params["orders"] = '';

            // tablas
            $params["tables"] = 'tblcarpetasjudiciales';
            $params["conditions"] = 'idCarpetaJudicial = ' . $idCarpeta . ' AND activo = "S"';
            $params["groups"] = '';

            $base_json = $arbolFacade->selectTree($params);
            $base_obj = json_decode($base_json);
            if ($base_obj->totalCount > 0) {
                // es una carpeta judicial, buscar el nombre
                $base_obj->resultados[0]->name_carpeta = $arbolFacade->getTiposCarpetasName($base_obj->resultados[0]->cveTipoCarpeta);
            }

            return $base_obj->resultados[0];
        }

        public function getBaseCarpetaJudicial($idCarpetaJudicial, $idPadre = 0) {
            // regresa la carpeta judicial con el id recibido
            $arbolFacade = new ArbolFacade();
            // campos
            $params["fields"] = 'idCarpetaJudicial as idCarpeta,numero,anio,nuc,carpetaInv,fechaRegistro,cveTipoCarpeta,cveJuzgado';
            $params["orders"] = '';

            // tablas
            $params["tables"] = 'tblcarpetasjudiciales';
            $params["conditions"] = 'idCarpetaJudicial = ' . $idCarpetaJudicial . ' AND activo = "S"';
            $params["groups"] = '';

            $base_json = $arbolFacade->selectTree($params);
            $base_obj = json_decode($base_json);
            if ($base_obj->totalCount > 0) {
                // es una carpeta judicial, buscar el nombre
                $base_obj->resultados[0]->name_carpeta = $arbolFacade->getTiposCarpetasName($base_obj->resultados[0]->cveTipoCarpeta);
                if ($idPadre != 0) {
                    $base_obj->resultados[0]->parent = $idPadre;
                } else {
                    $base_obj->resultados[0]->parent = '#';
                }
            }

            return $base_obj;
        }

        public function getBaseAmparo($idAmparo, $idPadre = 0) {
            // regresa la carpeta judicial con el id recibido
            $arbolFacade = new ArbolFacade();
            // campos
            $params["fields"] = 'idAmparo as idCarpeta,numAmparo as numero,aniAmparo as anio,carpetaInv,cveJuzgado,fechaRegistro';
            $params["orders"] = '';

            // tablas
            $params["tables"] = 'tblamparos';
            $params["conditions"] = 'idAmparo = ' . $idAmparo . ' AND activo = "S"';
            $params["groups"] = '';

            $base_json = $arbolFacade->selectTree($params);
            $base_obj = json_decode($base_json);
            if ($base_obj->totalCount > 0) {
                // como sabemos que es un amparo, para la descripcion se debe colocar "AMPARO" y la clave tipo carpeta 8
                $base_obj->resultados[0]->name_carpeta = "AMPARO";
                $base_obj->resultados[0]->cveTipoCarpeta = "8";
                if ($idPadre != 0) {
                    $base_obj->resultados[0]->parent = $idPadre;
                } else {
                    $base_obj->resultados[0]->parent = '#';
                }
            }

            return $base_obj;
        }

        public function getBaseExhorto($idExhorto, $idPadre = 0) {
            // regresa la carpeta judicial con el id recibido
            $arbolFacade = new ArbolFacade();
            // campos
            $params["fields"] = 'idExhorto as idCarpeta,numExhorto as numero,aniExhorto as anio,nuc,carpetaInv,fechaRegistro,cveTipoCarpeta,cveJuzgado';
            $params["orders"] = '';

            // tablas
            $params["tables"] = 'tblexhortos';
            $params["conditions"] = 'idExhorto = ' . $idExhorto . ' AND activo = "S"';
            $params["groups"] = '';

            $base_json = $arbolFacade->selectTree($params);
            $base_obj = json_decode($base_json);
            if ($base_obj->totalCount > 0) {
                // como sabemos que es un exhorto, para la descripcion se debe colocar "EXHORTO" y la clave de tipo carpeta 7
                $base_obj->resultados[0]->name_carpeta = "EXHORTO";
                $base_obj->resultados[0]->cveTipoCarpeta = "7";
                if ($idPadre != 0) {
                    $base_obj->resultados[0]->parent = $idPadre;
                } else {
                    $base_obj->resultados[0]->parent = '#';
                }
            }

            return $base_obj;
        }

        public function getBaseAprehension($idSolicitudOrden, $idPadre = 0) {
            $arbolFacade = new ArbolFacade();
            // regresa la orden de aprehension con el id de solicitud recibido

            // obtener data general del aprehension
            $base_aprehension = $arbolFacade->getGralDataAprehension($idSolicitudOrden);

            if ($base_aprehension->totalCount > 0 ) {
                // existe la aprehension y tiene estatus mayor o igual a 3
                // obtener datos completos de la tabla tblcateos
                $arbolFacade = new ArbolFacade();
                // campos
                $params["fields"] = 'idOrden as idCarpeta, numeroOrden as numero, numeroEspecializadoOrden, anioOrden as anio,fechaRegistro';
                $params["orders"] = '';

                // tablas
                $params["tables"] = 'tblordenes';
                // se muestran ordenes con estatus mayor o igual a 3
                $params["conditions"] = 'idSolicitudOrden = ' . $base_aprehension->resultados[0]->idSolicitudOrden;
                $params["groups"] = '';

                $base_json = $arbolFacade->selectTree($params);
                $base_obj = json_decode($base_json);
                if ($base_obj->totalCount > 0) {
                    // como sabemos que es una Orden de aprehesion, para la descripcion se debe colocar "ORDEN DE APREHENSION" y la clave de tipo carpeta 10
                    $base_obj->resultados[0]->name_carpeta = "ORDEN DE APREHENSION";
                    $base_obj->resultados[0]->cveTipoCarpeta = "10";
                    if ($idPadre != 0) {
                        $base_obj->resultados[0]->parent = $idPadre;
                    } else {
                        $base_obj->resultados[0]->parent = '#';
                    }
                }

                return $base_obj;
            }
        }

        public function getBaseCateo($idSolicitudCateo, $idPadre = 0) {
            $arbolFacade = new ArbolFacade();
            // regresa la orden de cateo con el id de solicitud recibido

            // obtener data general del cateo
            $base_cateo = $arbolFacade->getGralDataCateo($idSolicitudCateo);

            if ($base_cateo->totalCount > 0 ) {
                // existe el cateo y tiene estatus mayor o igual a 3
                // obtener datos completos de la tabla tblcateos
                $arbolFacade = new ArbolFacade();
                // campos
                $params["fields"] = 'idCateo as idCarpeta, numeroCateo as numero, numeroEspecializadoCateo, anioCateo as anio,fechaRegistro';
                $params["orders"] = '';

                // tablas
                $params["tables"] = 'tblcateos';
                // se muestran cateos con estatus mayor o igual a 3
                $params["conditions"] = 'idSolicitudCateo = ' . $base_cateo->resultados[0]->idSolicitudCateo;
                $params["groups"] = '';

                $base_json = $arbolFacade->selectTree($params);
                $base_obj = json_decode($base_json);
                if ($base_obj->totalCount > 0) {
                    // como sabemos que es una Orden de cateo, para la descripcion se debe colocar "ORDEN DE CATEO" y la clave de tipo carpeta 9
                    $base_obj->resultados[0]->name_carpeta = "ORDEN DE CATEO";
                    $base_obj->resultados[0]->cveTipoCarpeta = "9";
                    if ($idPadre != 0) {
                        $base_obj->resultados[0]->parent = $idPadre;
                    } else {
                        $base_obj->resultados[0]->parent = '#';
                    }
                }

                return $base_obj;
            }
        }

        public function getResolucionFromAcuerdo($cveTipoResolucion) {
            // regresa la resolucion de un acuerdo con el tipo de clave recibido
            $arbolFacade = new ArbolFacade();
            // campos
            $params["fields"] = 'desTipoResolucion';
            $params["orders"] = '';

            // tablas
            $params["tables"] = 'tbltiposresoluciones';
            $params["conditions"] = 'cveTipoResolucion = ' . $cveTipoResolucion;
            $params["groups"] = '';

            $base_json = $arbolFacade->selectTree($params);
            $base_obj = json_decode($base_json);
            if ($base_obj->totalCount > 0) {
                return $base_obj->resultados[0]->desTipoResolucion;
            } else {
                return "";
            }
        }

        public function getDesCatAudiencia($cveCatAudiencia) {
            // regresa la resolucion de un acuerdo con el tipo de clave recibido
            $arbolFacade = new ArbolFacade();
            // campos
            $params["fields"] = 'desCatAudiencia';
            $params["orders"] = '';

            // tablas
            $params["tables"] = 'tblcataudiencias';
            $params["conditions"] = 'cveCatAudiencia = ' . $cveCatAudiencia;
            $params["groups"] = '';

            $base_json = $arbolFacade->selectTree($params);
            $base_obj = json_decode($base_json);
            if ($base_obj->totalCount > 0) {
                return $base_obj->resultados[0]->desCatAudiencia;
            } else {
                return "";
            }
        }

        public function getGralDataCateo($idSolicitudCateo) {
            // regresa los datos generales de cateo solo si el status es mayor o igual a 3
            $arbolFacade = new ArbolFacade();
            // campos
            $params["fields"] = 'idSolicitudCateo, cveEstatusSolicitudCateo';
            $params["orders"] = '';

            // tablas
            $params["tables"] = 'tblsolicitudescateos';
            $params["conditions"] = 'idSolicitudCateo = ' . $idSolicitudCateo .' AND cveEstatusSolicitudCateo >= 3 ';
            $params["groups"] = '';

            $base_json = $arbolFacade->selectTree($params);
            $base_obj = json_decode($base_json);
            
            return $base_obj;
        }

        public function getGralDataAprehension($idSolicitudOrden) {
            // regresa los datos generales de cateo solo si el status es mayor o igual a 3
            $arbolFacade = new ArbolFacade();
            // campos
            $params["fields"] = 'idSolicitudOrden, cveEstatusSolicitudOrden';
            $params["orders"] = '';

            // tablas
            $params["tables"] = 'tblsolicitudesordenes';
            $params["conditions"] = 'idSolicitudOrden = ' . $idSolicitudOrden .' AND cveEstatusSolicitudOrden >= 3 ';
            $params["groups"] = '';

            $base_json = $arbolFacade->selectTree($params);
            $base_obj = json_decode($base_json);
            
            return $base_obj;
        }

        public function ordenar_padres_e_hijos($a, $b) {
            if ($a->parent == $b->parent) {
                return 0;
            }
            return ($a->parent < $b->parent) ? -1 : 1;
        }

        public function getHojas($idReferencia, $cveTipoCarpeta) {

            $rs = "";
            if ($idReferencia != '' || $cveTipoCarpeta != "") {
                if ($cveTipoCarpeta == 7) {
                    //exhorto
                    $ActuacionesDTO = new ActuacionesDTO();
    //                echo "idReferencia: " . $idReferencia . "...";
    //                echo "cveTipoCarpeta: " . $cveTipoCarpeta . " <--";
                    $ActuacionesDTO->setIdReferencia($idReferencia);
                    $ActuacionesDTO->setCveTipoCarpeta($cveTipoCarpeta);
                    $ActuacionesDTO->setActivo("S");

                    $ActuacionesDAO = new ActuacionesDAO();
                    $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, null, " ORDER BY fechaRegistro DESC ");

                    if ($ActuacionesDTO !== "") {
                        $rs = $ActuacionesDTO;
                    }
                } else if ($cveTipoCarpeta == 8) {
                    //amparo
                    $ActuacionesDTO = new ActuacionesDTO();
    //                echo "idReferencia: " . $idReferencia . "...";
    //                echo "cveTipoCarpeta: " . $cveTipoCarpeta . " <--";
                    $ActuacionesDTO->setIdReferencia($idReferencia);
                    $ActuacionesDTO->setCveTipoCarpeta($cveTipoCarpeta);
                    $ActuacionesDTO->setActivo("S");

                    $ActuacionesDAO = new ActuacionesDAO();
                    $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, null, " ORDER BY fechaRegistro DESC ");

                    if ($ActuacionesDTO !== "") {
                        $rs = $ActuacionesDTO;
                    }
                } else {
                    $ActuacionesDTO = new ActuacionesDTO();
    //                echo "idReferencia: " . $idReferencia . "...";
    //                echo "cveTipoCarpeta: " . $cveTipoCarpeta . " <--";
                    $ActuacionesDTO->setIdReferencia($idReferencia);
                    $ActuacionesDTO->setCveTipoCarpeta($cveTipoCarpeta);
                    $ActuacionesDTO->setActivo("S");

                    $ActuacionesDAO = new ActuacionesDAO();
                    $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, null, " ORDER BY fechaRegistro DESC ");
                    if ($ActuacionesDTO !== "") {
                        $rs = $ActuacionesDTO;
                    }
                }
            }
            return $rs;
        }

        public function getGroupHojas($idReferencia, $cveTipoCarpeta) {

            $rs = "";
            if ($cveTipoCarpeta !== "") {

                if ($cveTipoCarpeta === 7) {
                    $ActuacionesDTO = new ActuacionesDTO();
    //                echo "idReferencia: " . $idReferencia . "...";
    //                echo "cveTipoCarpeta: " . $cveTipoCarpeta . " <--";
                    $ActuacionesDTO->setIdReferencia($idReferencia);
                    $ActuacionesDTO->setCveTipoCarpeta($cveTipoCarpeta);
                    $ActuacionesDTO->setActivo("S");

                    $ActuacionesDAO = new ActuacionesDAO();
                    $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, null, "GROUP BY cveTipoActuacion ORDER BY cveTipoActuacion ");

                    if ($ActuacionesDTO !== "") {
                        $rs = $ActuacionesDTO;
                    }
                } else if ($cveTipoCarpeta === 8) {
                    $ActuacionesDTO = new ActuacionesDTO();
    //                echo "idReferencia: " . $idReferencia . "...";
    //                echo "cveTipoCarpeta: " . $cveTipoCarpeta . " <--";
                    $ActuacionesDTO->setIdReferencia($idReferencia);
                    $ActuacionesDTO->setCveTipoCarpeta($cveTipoCarpeta);
                    $ActuacionesDTO->setActivo("S");

                    $ActuacionesDAO = new ActuacionesDAO();
                    $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, null, "GROUP BY cveTipoActuacion ORDER BY cveTipoActuacion ");

                    if ($ActuacionesDTO !== "") {
                        $rs = $ActuacionesDTO;
                    }
                } else {
                    $ActuacionesDTO = new ActuacionesDTO();
    //                echo "idReferencia: " . $idReferencia . "...";
    //                echo "cveTipoCarpeta: " . $cveTipoCarpeta . " <--";
                    $ActuacionesDTO->setIdReferencia($idReferencia);
                    $ActuacionesDTO->setCveTipoCarpeta($cveTipoCarpeta);
                    $ActuacionesDTO->setActivo("S");

                    $ActuacionesDAO = new ActuacionesDAO();
                    $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, null, "GROUP BY cveTipoActuacion ORDER BY cveTipoActuacion ");

                    if ($ActuacionesDTO !== "") {
                        $rs = $ActuacionesDTO;
                    }
                }
            }
            return $rs;
        }

    }

    @$accion = $_POST["accion"];
    @$activo = $_POST["activo"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$tipoJuzgado = $_POST["tipoJuzgado"];
    @$idCarpeta = $_POST["idCarpeta"];
    @$numero = $_POST["numero"];
    @$anio = $_POST["anio"];
    @$nuc = $_POST["nuc"];
    @$numCarpInv = $_POST["numCarpInv"];
    @$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
    @$tiposCarpetasDeJuzgado = $_POST["tiposCarpetasDeJuzgado"];

    switch ($accion) {
        case "selectTree":

            $param = array(
                'cveJuzgado' => $cveJuzgado,
                'numCarpeta' => $numero,
                'aniCarpeta' => $anio,
                'NUC' => $nuc,
                'carpetaInv' => $numCarpInv,
                'cveTipoCarpeta' => $cveTipoCarpeta,
                'idCarpeta' => $idCarpeta
            );

            $ArbolFacade = new ArbolFacade();
            $rsResponse = $ArbolFacade->getTree($param);

            $json = "";

    //        var_dump($rsResponse);

            if ($rsResponse !== "") {
                $ArbolFacade->initializeTiposCarpetas();
                $ArbolFacade->initializeTiposActuaciones();
                $json .= '{"estatus":"ok",';
                $json .= '"resultados":[';
                $ActuacionesDTO = new ActuacionesDTO();
                foreach ($rsResponse as $rs) {
                    $json .= '{';
                    if ($rs->getIdPadre() === "0") {
                        $json .= '"idPadre":' . json_encode(utf8_encode($rs->getIdHijo())) . ",";
                        $json .= '"idHijo":' . json_encode(utf8_encode("0")) . ",";
                        $CarpetasjudicialesDAO = new CarpetasjudicialesDAO();
                        $CarpetasJudicialesDTO = new CarpetasjudicialesDTO();
                        $CarpetasJudicialesDTO->setIdCarpetaJudicial($rs->getIdHijo());
                        $CarpetasJudicialesDTO = $CarpetasjudicialesDAO->selectCarpetasjudiciales($CarpetasJudicialesDTO);
                        $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getIdCarpetaJudicial())) . ",";
                        $json .= '"cveEtapaProcesal":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveEtapaProcesal())) . ",";
                        $json .= '"cveConsignacion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveConsignacion())) . ",";
                        $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveTipoCarpeta())) . ",";
                        $json .= '"numero":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumero())) . ",";
                        $json .= '"anio":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getAnio())) . ",";
                        $json .= '"nuc":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNuc())) . ",";
                        $json .= '"cveJuzgado":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveJuzgado())) . ",";
                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getFechaRegistro())) . ",";
                        $json .= '"fechaRadicacion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getFechaRadicacion())) . ",";
                        $json .= '"fechaActualizacion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getFechaActualizacion())) . ",";
                        $json .= '"activo":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getActivo())) . ",";
                        $json .= '"carpetaInv":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCarpetaInv())) . ",";
                        $json .= '"cveUsuario":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveUsuario())) . ",";
                        $json .= '"numDelitos":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumDelitos())) . ",";
                        $json .= '"numImputados":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumImputados())) . ",";
                        $json .= '"numAcumulado":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumAcumulado())) . ",";
                        $json .= '"numOfendidos":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumOfendidos())) . ",";
                        $json .= '"Ponderacion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getPonderacion())) . ",";
                        $json .= '"observaciones":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getObservaciones())) . ",";
                        $json .= '"cveEstatusCarpeta":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveEstatusCarpeta())) . ",";
                        $json .= '"incompetencia":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getIncompetencia())) . ",";
                        $json .= '"cveTipoIncompetencia":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveTipoIncompetencia())) . ",";
                        $json .= '"acumulado":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getAcumulado())) . ",";
                        $json .= '"fechaTermino":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getFechaTermino())) . ",";
                        $json .= '"cveConclucion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveConclucion())) . ",";
                        $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($rs->getCveTipoCarpeta())) . ",";
                        $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($ArbolFacade->getTiposCarpetasName($rs->getCveTipoCarpeta()))) . ",";
                        $json .= '"actuaciones":[';
                        $rsActuacion = $ArbolFacade->getHojas($rs->getIdHijo(), $rs->getCveTipoCarpeta());
                        if ($rsActuacion !== "") {
                            foreach ($rsActuacion as $actuacion) {
                                $json .= '{';
                                $json .= '"idActuacion":' . json_encode(utf8_encode($actuacion->getIdActuacion())) . ",";
                                $json .= '"idAudiencia":' . json_encode(utf8_encode($actuacion->getIdAudiencia())) . ",";
                                $json .= '"numActuacion":' . json_encode(utf8_encode($actuacion->getNumActuacion())) . ",";
                                $json .= '"aniActuacion":' . json_encode(utf8_encode($actuacion->getAniActuacion())) . ",";
                                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacion->getCveTipoActuacion())) . ",";
                                $json .= '"urlActuacion":' . json_encode(utf8_encode($ArbolFacade->getUrlTipoActuacion($actuacion->getCveTipoActuacion()))) . ",";
                                $json .= '"desTipoActuacion":' . json_encode(utf8_encode($ArbolFacade->getTiposActuacionesName($actuacion->getCveTipoActuacion()))) . ",";
                                $json .= '"idReferencia":' . json_encode(utf8_encode($actuacion->getIdReferencia())) . ",";
                                $json .= '"numero":' . json_encode(utf8_encode($actuacion->getNumero())) . ",";
                                $json .= '"anio":' . json_encode(utf8_encode($actuacion->getAnio())) . ",";
                                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacion->getCveJuzgado())) . ",";
                                $json .= '"sintesis":' . json_encode(utf8_encode($actuacion->getSintesis())) . ",";
                                $json .= '"observaciones":' . json_encode(utf8_encode($actuacion->getObservaciones())) . ",";
                                $json .= '"cveUsuario":' . json_encode(utf8_encode($actuacion->getCveUsuario())) . ",";
                                $json .= '"activo":' . json_encode(utf8_encode($actuacion->getActivo())) . ",";
                                $json .= '"fechaRegistro":' . json_encode(utf8_encode($actuacion->getFechaRegistro())) . ",";
                                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($actuacion->getFechaActualizacion())) . ",";
                                $json .= '"cveEstado":' . json_encode(utf8_encode($actuacion->getCveEstado())) . ",";
                                $json .= '"cveJuzgadoDestino":' . json_encode(utf8_encode($actuacion->getCveJuzgadoDestino())) . ",";
                                $json .= '"juzgadoDestino":' . json_encode(utf8_encode($actuacion->getJuzgadoDestino())) . ",";
                                $json .= '"cveTipoNotificacion":' . json_encode(utf8_encode($actuacion->getCveTipoNotificacion())) . ",";
                                $json .= '"cveTipoSentencia":' . json_encode(utf8_encode($actuacion->getCveTipoSentencia())) . ",";
                                $json .= '"cveTipoAuto":' . json_encode(utf8_encode($actuacion->getCveTipoAuto())) . ",";
                                $json .= '"cveTipoResolucion":' . json_encode(utf8_encode($actuacion->getCveTipoResolucion())) . ",";
                                $json .= '"cveTipoOrden":' . json_encode(utf8_encode($actuacion->getCveTipoOrden())) . ",";
                                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($actuacion->getCveTipoCarpeta())) . ",";
                                $json .= '"cveTipoProcedimiento":' . json_encode(utf8_encode($actuacion->getCveTipoProcedimiento())) . ",";
                                $json .= '"fechaSentencia":' . json_encode(utf8_encode($actuacion->getFechaSentencia())) . ",";
                                $json .= '"fechaEjecutoria":' . json_encode(utf8_encode($actuacion->getFechaEjecutoria())) . ",";
                                $json .= '"cveCatAudiencia":' . json_encode(utf8_encode($actuacion->getCveCatAudiencia())) . ",";
                                $json .= '"desCatAudiencia":' . json_encode(utf8_encode($actuacion->getDesCatAudiencia())) . ",";
                                $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($actuacion->getDesTipoCarpeta())) . ",";
                                $json .= '"fechaRegistroAudiencia":' . json_encode(utf8_encode($actuacion->getfechaRegistroAudiencia())) . ",";
                                $json .= '"rangoFechas":' . json_encode(utf8_encode($actuacion->getRangoFechas())) . "";
                                $json .= '},';
                            }
                            $json = substr($json, 0, -1);
                        }
                        $json .= '],';
                        $json .= '"actuacionesGroup":[';
                        $rsGroupActuacion = $ArbolFacade->getGroupHojas($rs->getIdHijo(), $rs->getCveTipoCarpeta());
                        if ($rsGroupActuacion != "") {
                            foreach ($rsGroupActuacion as $actuacionGrupo) {
                                $json .= '{';
                                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacionGrupo->getCveTipoActuacion())) . ",";
                                $json .= '"desTipoActuacion":' . json_encode(utf8_encode($ArbolFacade->getTiposActuacionesName($actuacionGrupo->getCveTipoActuacion()))) . "";
                                $json .= '},';
                            }
                            $json = substr($json, 0, -1);
                        }
                        $json .= ']';
                    } else {
                        $json .= '"idPadre":' . json_encode(utf8_encode($rs->getIdPadre())) . ",";
                        $json .= '"idHijo":' . json_encode(utf8_encode($rs->getIdHijo())) . ",";

                        $CarpetasjudicialesDAO = new CarpetasjudicialesDAO();
                        $CarpetasJudicialesDTO = new CarpetasjudicialesDTO();
                        $CarpetasJudicialesDTO->setIdCarpetaJudicial($rs->getIdHijo());
                        $CarpetasJudicialesDTO = $CarpetasjudicialesDAO->selectCarpetasjudiciales($CarpetasJudicialesDTO);


                        $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getIdCarpetaJudicial())) . ",";
                        $json .= '"cveEtapaProcesal":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveEtapaProcesal())) . ",";
                        $json .= '"cveConsignacion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveConsignacion())) . ",";
                        $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveTipoCarpeta())) . ",";
                        $json .= '"numero":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumero())) . ",";
                        $json .= '"anio":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getAnio())) . ",";
                        $json .= '"nuc":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNuc())) . ",";
                        $json .= '"cveJuzgado":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveJuzgado())) . ",";
                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getFechaRegistro())) . ",";
                        $json .= '"fechaRadicacion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getFechaRadicacion())) . ",";
                        $json .= '"fechaActualizacion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getFechaActualizacion())) . ",";
                        $json .= '"activo":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getActivo())) . ",";
                        $json .= '"carpetaInv":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCarpetaInv())) . ",";
                        $json .= '"cveUsuario":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveUsuario())) . ",";
                        $json .= '"numDelitos":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumDelitos())) . ",";
                        $json .= '"numImputados":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumImputados())) . ",";
                        $json .= '"numAcumulado":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumAcumulado())) . ",";
                        $json .= '"numOfendidos":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getNumOfendidos())) . ",";
                        $json .= '"Ponderacion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getPonderacion())) . ",";
                        $json .= '"observaciones":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getObservaciones())) . ",";
                        $json .= '"cveEstatusCarpeta":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveEstatusCarpeta())) . ",";
                        $json .= '"incompetencia":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getIncompetencia())) . ",";
                        $json .= '"cveTipoIncompetencia":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveTipoIncompetencia())) . ",";
                        $json .= '"acumulado":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getAcumulado())) . ",";
                        $json .= '"fechaTermino":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getFechaTermino())) . ",";
                        $json .= '"cveConclucion":' . json_encode(utf8_encode($CarpetasJudicialesDTO[0]->getCveConclucion())) . ",";

                        $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($rs->getCveTipoCarpeta())) . ",";
                        $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($ArbolFacade->getTiposCarpetasName($rs->getCveTipoCarpeta()))) . ",";
                        $json .= '"actuaciones":[';
                        $rsActuacion = $ArbolFacade->getHojas($rs->getIdHijo(), $rs->getCveTipoCarpeta());
                        if ($rsActuacion !== "") {
                            foreach ($rsActuacion as $actuacion) {
                                $json .= '{';
                                $json .= '"idActuacion":' . json_encode(utf8_encode($actuacion->getIdActuacion())) . ",";
                                $json .= '"idAudiencia":' . json_encode(utf8_encode($actuacion->getIdAudiencia())) . ",";
                                $json .= '"numActuacion":' . json_encode(utf8_encode($actuacion->getNumActuacion())) . ",";
                                $json .= '"aniActuacion":' . json_encode(utf8_encode($actuacion->getAniActuacion())) . ",";
                                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacion->getCveTipoActuacion())) . ",";
                                $json .= '"urlActuacion":' . json_encode(utf8_encode($ArbolFacade->getUrlTipoActuacion($actuacion->getCveTipoActuacion()))) . ",";
                                $json .= '"desTipoActuacion":' . json_encode(utf8_encode($ArbolFacade->getTiposActuacionesName($actuacion->getCveTipoActuacion()))) . ",";
                                $json .= '"idReferencia":' . json_encode(utf8_encode($actuacion->getIdReferencia())) . ",";
                                $json .= '"numero":' . json_encode(utf8_encode($actuacion->getNumero())) . ",";
                                $json .= '"anio":' . json_encode(utf8_encode($actuacion->getAnio())) . ",";
                                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacion->getCveJuzgado())) . ",";
                                $json .= '"sintesis":' . json_encode(utf8_encode($actuacion->getSintesis())) . ",";
                                $json .= '"observaciones":' . json_encode(utf8_encode($actuacion->getObservaciones())) . ",";
                                $json .= '"cveUsuario":' . json_encode(utf8_encode($actuacion->getCveUsuario())) . ",";
                                $json .= '"activo":' . json_encode(utf8_encode($actuacion->getActivo())) . ",";
                                $json .= '"fechaRegistro":' . json_encode(utf8_encode($actuacion->getFechaRegistro())) . ",";
                                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($actuacion->getFechaActualizacion())) . ",";
                                $json .= '"cveEstado":' . json_encode(utf8_encode($actuacion->getCveEstado())) . ",";
                                $json .= '"cveJuzgadoDestino":' . json_encode(utf8_encode($actuacion->getCveJuzgadoDestino())) . ",";
                                $json .= '"juzgadoDestino":' . json_encode(utf8_encode($actuacion->getJuzgadoDestino())) . ",";
                                $json .= '"cveTipoNotificacion":' . json_encode(utf8_encode($actuacion->getCveTipoNotificacion())) . ",";
                                $json .= '"cveTipoSentencia":' . json_encode(utf8_encode($actuacion->getCveTipoSentencia())) . ",";
                                $json .= '"cveTipoAuto":' . json_encode(utf8_encode($actuacion->getCveTipoAuto())) . ",";
                                $json .= '"cveTipoResolucion":' . json_encode(utf8_encode($actuacion->getCveTipoResolucion())) . ",";
                                $json .= '"cveTipoOrden":' . json_encode(utf8_encode($actuacion->getCveTipoOrden())) . ",";
                                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($actuacion->getCveTipoCarpeta())) . ",";
                                $json .= '"cveTipoProcedimiento":' . json_encode(utf8_encode($actuacion->getCveTipoProcedimiento())) . ",";
                                $json .= '"fechaSentencia":' . json_encode(utf8_encode($actuacion->getFechaSentencia())) . ",";
                                $json .= '"fechaEjecutoria":' . json_encode(utf8_encode($actuacion->getFechaEjecutoria())) . ",";
                                $json .= '"cveCatAudiencia":' . json_encode(utf8_encode($actuacion->getCveCatAudiencia())) . ",";
                                $json .= '"desCatAudiencia":' . json_encode(utf8_encode($actuacion->getDesCatAudiencia())) . ",";
                                $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($actuacion->getDesTipoCarpeta())) . ",";
                                $json .= '"fechaRegistroAudiencia":' . json_encode(utf8_encode($actuacion->getfechaRegistroAudiencia())) . ",";
                                $json .= '"rangoFechas":' . json_encode(utf8_encode($actuacion->getRangoFechas())) . "";
                                $json .= '},';
                            }
                            $json = substr($json, 0, -1);
                        }
                        $json .= '],';
                        $json .= '"actuacionesGroup":[';
                        $rsGroupActuacion = $ArbolFacade->getGroupHojas($rs->getIdHijo(), $rs->getCveTipoCarpeta());
                        if ($rsGroupActuacion != "") {
                            foreach ($rsGroupActuacion as $actuacionGrupo) {
                                $json .= '{';
                                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacionGrupo->getCveTipoActuacion())) . ",";
                                $json .= '"desTipoActuacion":' . json_encode(utf8_encode($ArbolFacade->getTiposActuacionesName($actuacionGrupo->getCveTipoActuacion()))) . "";
                                $json .= '},';
                            }
                            $json = substr($json, 0, -1);
                        }
                        $json .= ']';
                    }
                    $rs->getIdPadre();
                    $rs->getIdHijo();
                    $rs->getCveTipoCarpeta();
                    $rs->getCveTipoActuacion();
                    $rs->getActivo();
                    $rs->getFechaRegistro();
                    $rs->getFechaActualizacion();
                    $json .= '},';
                }
                $json = substr($json, 0, -1);
                $json .= ']';
                $json .= '}';
            } else {
                $json = '{"estatus":"fail","mnj":"Sin resultados"}';
            }
            echo $json;
            break;

        case "getFullTree":
            //error_log('************** INICIA CONSULTA DE EXPEDIENTE PENAL *************************');
            $arbolFacade = new ArbolFacade();
            $arbolFacade->initializeTiposActuaciones();
            $arbolFacade->initializeTiposCarpetas();
            if ($cveTipoCarpeta != 1 && $cveTipoCarpeta != 2 && $cveTipoCarpeta != 3 && $cveTipoCarpeta != 4 && $cveTipoCarpeta != 5 && $cveTipoCarpeta != 6 && $cveTipoCarpeta != 7 && $cveTipoCarpeta != 8) {
                $json = '{"estatus" : "fail","mnj":"No se puede iniciar la busqueda en el expediente penal con el tipo de carpeta seleccionado"}';
                echo $json;
                exit();
            }
            // obtener la carpeta base
            $base_obj = $arbolFacade->getCarpetaBase($cveJuzgado, $cveTipoCarpeta, $numero, $anio, $nuc, $numCarpInv);
            // guardar el id de la carpeta buscada inicialmente para luego mostrarla abierta y seleccionada en el arbol
            $busqueda_inicial_id = $base_obj->idCarpeta;
            // inicialmente se buscaran hijas de la carpeta 
            $buscar_hijas = true;

            // si es amparo, obtener el padre con el id de la carpeta judicial, si este es diferente de null
            if ($base_obj->cveTipoCarpeta == 8) {
                if ($base_obj->idCarpetaJudicial != null) {
                    // obtener padre más alto con el id de carpeta judicial
                    $params_tmp["procedure"] = '_Principal(' . $base_obj->idCarpetaJudicial . ')';
                    // ejecutar procedimiento '_Principal'
                    $principal = $arbolFacade->selectPrincipal($params_tmp);
                    $principal_tmp = json_decode($principal);
                    if ($principal_tmp->Estatus == "ok") {
                        if ($principal_tmp->resultados[0]->idPadre == 0) {
                            // el padre mayor es la carpeta judicial de la que se desprende el amparo
                            $principal = '{"Estatus":"ok" , "resultados":[{"idPadre":"0"}]}';
                            // se reemplaza el objeto inicial de la busqueda, es como si se ubiera buscado la carpeta judicial. El amparo se busca despues
                            $base_obj = $arbolFacade->getBaseCarpetaById($base_obj->idCarpetaJudicial);
                        } else {
                            // se encontro un padre mayor
                            // se reemplaza el objeto inicial de la busqueda, con el padre mayor es como si se ubiera buscado la carpeta judicial. El amparo se busca despues
                            $base_obj = $arbolFacade->getBaseCarpetaById($principal_tmp->resultados[0]->idPadre);
                        }
                    } else if ($principal_tmp->Estatus == "Fail") {
                        // ocurrio un error al obtener la carpeta padre mayor (procedure call _principal)
                        $json = '{"estatus" : "fail","mnj":"' . $principal_tmp->mnj . '"}';
                        echo $json;
                        exit();
                    }
                } else {
                    // el campo carpetaJudicial esta en 'null', no buscar hijas
                    $buscar_hijas = false;
                    // debe ser el padre mayor
                    $principal = '{"Estatus":"ok" , "resultados":[{"idPadre":"0"}]}';
                }
            } else if ($base_obj->cveTipoCarpeta == 7) {
                // se busco un exhorto, en este caso no se debe obtener antecedes (DEBE ser el padre mayor)
                $principal = '{"Estatus":"ok" , "resultados":[{"idPadre":"0"}]}';
                // al exhorto no se le van a buscar hijas mas adelante
                $buscar_hijas = false;
            } else if($base_obj->cveTipoCarpeta == 1 || $base_obj->cveTipoCarpeta == 2 || $base_obj->cveTipoCarpeta == 3 || $base_obj->cveTipoCarpeta == 4 || $base_obj->cveTipoCarpeta == 5 || $base_obj->cveTipoCarpeta == 6){
                // carpeta judicial
                // obtener padre más alto con id normal
                $params["procedure"] = '_Principal(' . $base_obj->idCarpeta . ')';
                // ejecutar procedimiento '_Principal'
                $principal = $arbolFacade->selectPrincipal($params);
            }else{
                $json = '{"estatus" : "fail","mnj":"No se puede iniciar una busqueda desde el tipo de carpeta '.$base_obj->cveTipoCarpeta.'"}';
                echo $json;
                exit();
            }

            $principal = json_decode($principal);

            if ($principal->Estatus == "ok") {
                if ($principal->resultados[0]->idPadre == 0) {
                    // no hay padre, significa que esta carpeta es padre de todas
                    $padre_mayor_id = $base_obj->idCarpeta;
                    $padre_mayor_cveTipoCarpeta = $base_obj->cveTipoCarpeta;
                } else {
                    // hay un padre mayor y no es la carpeta inicial
                    $padre_mayor_id = $principal->resultados[0]->idPadre;
                    $padre_mayor_cveTipoCarpeta = $base_obj->cveTipoCarpeta;
                }
                // a partir del padre mayor, se obtienen hijas (hacia abajo) SOLO si la carpeta es diferente de exhorto (tblantecedescarpetas)
                if ($buscar_hijas == true) {
                    $hijas_array = $arbolFacade->getCarpetasHijas($padre_mayor_id);
                } else {
                    $hijas_array = array();
                }

                if (sizeof($hijas_array) > 0) {
                    // se obtuvo el arbol completo
                    // convertir arreglo a nodos 
                    $tree = $arbolFacade->convertToNode($hijas_array, $padre_mayor_id);
                    $carpeta_unica = false;
                } else {
                    // la carpeta no tiene arbol, es una sola
                    $carpeta_unica = true;
                    $tree = array();
                    $tree[0]['cveTipoCarpeta'] = $base_obj->cveTipoCarpeta;
                    $tree[0]['idCarpetaHija'] = $base_obj->idCarpeta;
                    $tree[0]['idCarpetaPadre'] = 0;
                }
                $tree_carpetas = array();
                $tmp = 0;
                foreach ($tree as $carpeta) {
                    switch ($carpeta['cveTipoCarpeta']) {
                        case 7:
                            # EXHORTO
                            $carpeta_base = $arbolFacade->getBaseExhorto($carpeta['idCarpetaHija'], $carpeta['idCarpetaPadre']);
                            array_push($tree_carpetas, $carpeta_base->resultados[0]);
                            break;
                        case 8:
                            # AMPARO
                            $carpeta_base = $arbolFacade->getBaseAmparo($carpeta['idCarpetaHija'], $carpeta['idCarpetaPadre']);
                            array_push($tree_carpetas, $carpeta_base->resultados[0]);
                            break;
                        /*
                        case 9:
                            # CATEO
                            $carpeta_base = getBaseCateo($carpeta['idCarpetaHija'], $carpeta['idCarpetaPadre']);
                            if ($carpeta_base->totalCount > 0) {
                                array_push($tree_carpetas, $carpeta_base->resultados[0]);
                            }
                            break;
                        case 10:
                            # ORDEN DE APREHENSION
                            $carpeta_base = getBaseAprehension($carpeta['idCarpetaHija'], $carpeta['idCarpetaPadre']);
                            if ($carpeta_base->totalCount > 0) {
                                array_push($tree_carpetas, $carpeta_base->resultados[0]);
                            }
                            break;
                        */
                        case 1:
                        case 2:
                        case 3:
                        case 4:
                        case 5:
                        case 6:
                        case 11:
                        case 13:
                        case 14:
                        case 15:
                            # CARPETAS JUDICIALES
                            $carpeta_base = $arbolFacade->getBaseCarpetaJudicial($carpeta['idCarpetaHija'], $carpeta['idCarpetaPadre']);
                            array_push($tree_carpetas, $carpeta_base->resultados[0]);
                            // obtener amparos (si existen)
                            $params = '';
                            $params["fields"] = 'idAmparo';
                            $params["orders"] = 'fechaRegistro DESC';
                            $params["tables"] = 'tblamparos';
                            $params["conditions"] = ' idCarpetaJudicial = "' . $carpeta_base->resultados[0]->idCarpeta . '" AND activo ="S" ';
                            $params["groups"] = '';
                            $amparos_json = $arbolFacade->selectTree($params);
                            $amparos_obj = json_decode($amparos_json);
                            if ($amparos_obj->totalCount > 0) {
                                // se encontro amparo(s)
                                foreach ($amparos_obj->resultados as $amparo) {
                                    $carpeta_base_amparo = $arbolFacade->getBaseAmparo($amparo->idAmparo, $carpeta_base->resultados[0]->idCarpeta);
                                    array_push($tree_carpetas, $carpeta_base_amparo->resultados[0]);
                                }
                            }
                            if ($carpeta['cveTipoCarpeta'] == 1 || $carpeta['cveTipoCarpeta'] == 2) {
                                // en numero auxiliar (1) y causa de control (2) se buscan cateos y ordenes de aprehension
                                // obtener CATEOS (si existen)
                                $params = '';
                                $params["fields"] = 'idSolicitudCateo';
                                $params["orders"] = 'fechaRegistro DESC';
                                $params["tables"] = 'tblsolicitudescateos';
                                $params["conditions"] = ' idReferencia = "' . $carpeta_base->resultados[0]->idCarpeta . '" AND cveJuzgado = '.$cveJuzgado.' AND cveEstatusSolicitudCateo >= 3';
                                $params["groups"] = '';
                                $cateos_json = $arbolFacade->selectTree($params);
                                $cateos_obj = json_decode($cateos_json);
                                if ($cateos_obj->totalCount > 0) {
                                    // se encontro cateo(s)
                                    foreach ($cateos_obj->resultados as $cateo) {
                                        $carpeta_base_cateo = $arbolFacade->getBaseCateo($cateo->idSolicitudCateo, $carpeta_base->resultados[0]->idCarpeta);
                                        array_push($tree_carpetas, $carpeta_base_cateo->resultados[0]);
                                    }
                                }

                                // obtener ORDENES DE APREHENSION (si existen)
                                $params = '';
                                $params["fields"] = 'idSolicitudOrden';
                                $params["orders"] = 'fechaRegistro DESC';
                                $params["tables"] = 'tblsolicitudesordenes';
                                $params["conditions"] = ' idReferencia = "' . $carpeta_base->resultados[0]->idCarpeta . '" AND cveJuzgado = '.$cveJuzgado.' AND cveEstatusSolicitudOrden >= 3';
                                $params["groups"] = '';
                                $ordenes_json = $arbolFacade->selectTree($params);
                                $ordenes_obj = json_decode($ordenes_json);
                                if ($ordenes_obj->totalCount > 0) {
                                    // se encontro orden (es) de aprehension
                                    foreach ($ordenes_obj->resultados as $orden) {
                                        $carpeta_base_orden = $arbolFacade->getBaseAprehension($orden->idSolicitudOrden, $carpeta_base->resultados[0]->idCarpeta);
                                        array_push($tree_carpetas, $carpeta_base_orden->resultados[0]);
                                    }
                                }
                            }
                            break;
                        default:
                            // debug de la tabla antecedescarpetas, no debe existir ni cateos ni ordenes
                            if ($carpeta['cveTipoCarpeta'] == 9 || $carpeta['cveTipoCarpeta'] == 10) {
                                $tmp_tipo_carpeta = ($carpeta['cveTipoCarpeta'] == 9) ? 'Cateo' : 'Orden de aprehension';
                                // si no es produccion mostrar error para debug
                                if ( $_SERVER['HTTP_HOST'] != "sigejupe2.pjedomex.gob.mx") {
                                    $json = '{"estatus" : "fail","mnj":"Existe un tipo de antecedente activo que no debe estar en la tabla tblantecedescarpetas ('.$tmp_tipo_carpeta.')."}';
                                    echo $json;
                                    exit();
                                }
                            }
                            break;
                    }
                    if ($tmp == 0 && !$carpeta_unica) {
                        // colocar al padre inicial con sus hijas
                        switch ($padre_mayor_cveTipoCarpeta) {
                            case 7:
                                # EXHORTO
                                $carpeta_padre = $arbolFacade->getBaseExhorto($padre_mayor_id);
                                break;
                            case 8:
                                # AMPARO
                                $carpeta_padre = $arbolFacade->getBaseAmparo($padre_mayor_id);
                                break;
                            case 1:
                            case 2:
                            case 3:
                            case 4:
                            case 5:
                            case 6:
                            case 11:
                            case 13:
                            case 14:
                            case 15:
                                # CARPETAS JUDICIALES
                                $carpeta_padre = $arbolFacade->getBaseCarpetaJudicial($padre_mayor_id);
                                // obtener amparos (si existen)
                                $params = '';
                                $params["fields"] = 'idAmparo';
                                $params["orders"] = 'fechaRegistro DESC';
                                $params["tables"] = 'tblamparos';
                                $params["conditions"] = ' idCarpetaJudicial = "' . $carpeta_padre->resultados[0]->idCarpeta . '" AND activo ="S" ';
                                $params["groups"] = '';
                                $amparos_json = $arbolFacade->selectTree($params);
                                $amparos_obj = json_decode($amparos_json);
                                if ($amparos_obj->totalCount > 0) {
                                    // se encontro amparo(s)
                                    foreach ($amparos_obj->resultados as $amparo) {
                                        $carpeta_base_amparo = $arbolFacade->getBaseAmparo($amparo->idAmparo, $carpeta_padre->resultados[0]->idCarpeta);
                                        array_push($tree_carpetas, $carpeta_base_amparo->resultados[0]);
                                    }
                                }
                                if ($padre_mayor_cveTipoCarpeta == 1 || $padre_mayor_cveTipoCarpeta == 2) {
                                    // en numero auxiliar (1) y causa de control (2) se buscan cateos y ordenes de aprehension
                                    // obtener CATEOS (si existen)
                                    $params = '';
                                    $params["fields"] = 'idSolicitudCateo';
                                    $params["orders"] = 'fechaRegistro DESC';
                                    $params["tables"] = 'tblsolicitudescateos';
                                    $params["conditions"] = ' idReferencia = "' . $carpeta_padre->resultados[0]->idCarpeta . '" AND cveJuzgado = '.$cveJuzgado.' AND cveEstatusSolicitudCateo >= 3';
                                    $params["groups"] = '';
                                    $cateos_json = $arbolFacade->selectTree($params);
                                    $cateos_obj = json_decode($cateos_json);
                                    if ($cateos_obj->totalCount > 0) {
                                        // se encontro cateo(s)
                                        foreach ($cateos_obj->resultados as $cateo) {
                                            $carpeta_base_cateo = $arbolFacade->getBaseCateo($cateo->idSolicitudCateo, $carpeta_padre->resultados[0]->idCarpeta);
                                            array_push($tree_carpetas, $carpeta_base_cateo->resultados[0]);
                                        }
                                    }

                                    // obtener ORDENES DE APREHENSION (si existen)
                                    $params = '';
                                    $params["fields"] = 'idSolicitudOrden';
                                    $params["orders"] = 'fechaRegistro DESC';
                                    $params["tables"] = 'tblsolicitudesordenes';
                                    $params["conditions"] = ' idReferencia = "' . $carpeta_padre->resultados[0]->idCarpeta . '" AND cveJuzgado = '.$cveJuzgado.' AND cveEstatusSolicitudOrden >= 3';
                                    $params["groups"] = '';
                                    $ordenes_json = $arbolFacade->selectTree($params);
                                    $ordenes_obj = json_decode($ordenes_json);
                                    if ($ordenes_obj->totalCount > 0) {
                                        // se encontro orden (es) de aprehension
                                        foreach ($ordenes_obj->resultados as $orden) {
                                            $carpeta_base_orden = $arbolFacade->getBaseAprehension($orden->idSolicitudOrden, $carpeta_padre->resultados[0]->idCarpeta);
                                            array_push($tree_carpetas, $carpeta_base_orden->resultados[0]);
                                        }
                                    }
                                }
                                break;
                            default:
                                // debug de la tabla antecedescarpetas, no debe existir ni cateos ni ordenes
                                if ($padre_mayor_cveTipoCarpeta == 9 || $padre_mayor_cveTipoCarpeta == 10) {
                                    $tmp_tipo_carpeta = ($padre_mayor_cveTipoCarpeta == 9) ? 'Cateo' : 'Orden de aprehension';
                                    // si no es produccion mostrar error para debug
                                    if ( $_SERVER['HTTP_HOST'] != "sigejupe2.pjedomex.gob.mx") {
                                        $json = '{"estatus" : "fail","mnj":"Existe un tipo de antecedente activo que no debe estar en la tabla tblantecedescarpetas ('.$tmp_tipo_carpeta.')."}';
                                        echo $json;
                                        exit();
                                    }
                                }
                                break;
                        }
                        array_push($tree_carpetas, $carpeta_padre->resultados[0]);
                        $tmp++;
                    }
                }

                // ordenar carpetas poniendo al padre seguido de sus hijos
                usort($tree_carpetas, array($arbolFacade, 'ordenar_padres_e_hijos'));

                // Buscar las actuaciones de cada carpeta
                $tree_actuaciones_json = '';
                $all_actuaciones = array();
                $tree_audiencias_json = '';
                $all_audiencias = array();
                $notificaciones_en_actas = array();
                $acuerdos_multi_promo = array();

                foreach ($tree_carpetas as $keyBase => $carpetaBase) {
                    if ($carpetaBase->idCarpeta <= 0 || $carpetaBase->cveTipoCarpeta <= 0) {
                        $json = '{"estatus" : "fail","mnj":"No se recibio idCarpeta o cveTipoCarpeta para obtener las actuaciones, intentalo nuevamente"}';
                        echo $json;
                        exit();
                    }else{
                        $actuaciones = $arbolFacade->getHojas($carpetaBase->idCarpeta, $carpetaBase->cveTipoCarpeta);
                    }
                    if ($actuaciones != 0) {
                        $json = '[';
                        foreach ($actuaciones as $key => $actuacion) {
                            // mandar cveJuzgado a las actuaciones que se desprendan de las TOCAS (cveTipoCarpeta = 6)
                            if ($carpetaBase->cveTipoCarpeta == 6) {
                                $cveActuacionJuzgadoToca = $actuacion->getCveJuzgado();
                            }else{
                                $cveActuacionJuzgadoToca = '0';
                            }
                            // las actuaciones tipo 6 (actas minimas) se obtienen mediante las audiencias
                            if ($actuacion->getCveTipoActuacion() != 6) {
                                $json .= '{';
                                $json .= '"id" : "' . $actuacion->getIdActuacion() . '_ac" ,';
                                $json .= '"actuacion_id": "' . $actuacion->getIdActuacion() . '" ,';
                                if ($actuacion->getCveTipoActuacion() == 2 || $actuacion->getCveTipoActuacion() == 33) {
                                    // es un acuerdo, se muestra la resolucion como sintesis
                                    $sintesis = htmlentities($arbolFacade->getResolucionFromAcuerdo($actuacion->getCveTipoResolucion()));
                                } else {
                                    $sintesis = htmlentities($actuacion->getSintesis());
                                }

                                $acTipoActuacionName = utf8_encode($arbolFacade->getTiposActuacionesName($actuacion->getCveTipoActuacion()));
                                $date = explode(" ", $actuacion->getFechaRegistro());
                                $date = htmlentities(str_replace("-", "/", $date[0]));
                                $date = explode('/', $date);
                                $dateFormat = $date[2] . '/' . $date[1] . '/' . $date[0];
                                $numAnioActuacion = htmlentities('[ ' . $actuacion->getNumActuacion() . '/' . $actuacion->getAniActuacion());
                                $icono = htmlentities($arbolFacade->getIconoTipoActuacion($actuacion->getCveTipoActuacion()));
                                $url = $arbolFacade->getUrlTipoActuacion($actuacion->getCveTipoActuacion(),$carpetaBase->cveTipoCarpeta);
                                $json .= '"text": ' . json_encode($dateFormat . ' -- ' . $numAnioActuacion . ' ' . $acTipoActuacionName . ' ] -- ' . $sintesis) . ' ,';
                                $text_tooltip = json_encode($dateFormat . ' -- ' . $numAnioActuacion . ' ' . $acTipoActuacionName . ' ] -- ' . html_entity_decode($sintesis));
                                $json .= '"li_attr": { "dataActuacionName":"' . $acTipoActuacionName . '", "dataIdCarpeta":"' . $carpetaBase->idCarpeta . '", "dataIdActuacion":"' . $actuacion->getIdActuacion() . '", "dataCveTipoCarpeta":"' . $carpetaBase->cveTipoCarpeta . '", "dataCveJuzgado":"' . $cveJuzgado . '", "dataFechaOrden":' . json_encode($date[0] . $date[1] . $date[2]) . ' },';
                                $json .= '"icon":  ' . json_encode($icono) . ' ,';
                                $json .= '"parent":  "' . $carpetaBase->idCarpeta . '" ,';
                                $json .= '"a_attr": {"onclick":"loadFormActuacion(' . "'" . '' . $url . '' . "'" . ',' . $actuacion->getIdActuacion() . ',' . $actuacion->getIdReferencia() . ',' . $actuacion->getCveTipoCarpeta() . ',' . $cveActuacionJuzgadoToca . ')" , "title":' .$text_tooltip. '}';
                                $json .= '},';
                                // para las actuaciones de tipo SENTENCIA obtener los BENEFICIOS
                                if ($actuacion->getCveTipoActuacion() == 3) {
                                    $params = '';
                                    $params["fields"] = 'BE.idBeneficioEs,BE.idActuacion,BE.fechaRegistro,BT.desTipoBeneficioES,IM.cveTipoPersona,IM.nombreMoral,IM.nombre,IM.paterno,IM.materno';
                                    $params["orders"] = 'BE.fechaRegistro DESC';
                                    $params["tables"] = 'tblbeneficioses BE LEFT JOIN tbltiposbeneficioses BT ON (BE.cveTipoBeneficioES = BT.cveTipoBeneficioES) INNER JOIN tblimputadoscarpetas IM ON (BE.idImputadoCarpeta = IM.idImputadoCarpeta)';
                                    $params["conditions"] = 'BE.idActuacion = ' . $actuacion->getIdActuacion() . ' AND BE.activo = "S"';
                                    $params["groups"] = '';
                                    $beneficios_json = $arbolFacade->selectTree($params);
                                    $beneficios_obj = json_decode($beneficios_json);
                                    if ($beneficios_obj->totalCount > 0) {
                                        foreach ($beneficios_obj->resultados as $beneficio) {
                                            $json .= '{';
                                            $idBeneficioEs = $beneficio->idBeneficioEs . '_be';
                                            $json .= '"id": ' . json_encode(htmlentities($idBeneficioEs)) . ' ,';
                                            //$json .= '"actuacion_id": ' . json_encode( htmlentities($beneficio->idBeneficioEs) ) .' ,';
                                            $date = explode(" ", $beneficio->fechaRegistro);
                                            $date = htmlentities(str_replace("-", "/", $date[0]));
                                            $date = explode('/', $date);
                                            $dateFormat = $date[2] . '/' . $date[1] . '/' . $date[0];
                                            //$numAnioActuacion = htmlentities('[ '.$actuacion->getNumActuacion().'/'.$actuacion->getAniActuacion());
                                            $url = "sigejupe/beneficios/frmBeneficios.php";
                                            // Nombre del imputado
                                            if ($beneficio->cveTipoPersona == 1) {
                                                // persona fisica
                                                $nombreImputado = $beneficio->nombre . ' ' . $beneficio->paterno . ' ' . $beneficio->materno;
                                            } else if ($beneficio->cveTipoPersona == 2 || $beneficio->cveTipoPersona == 3) {
                                                // persona moral o del tipo "otra"
                                                $nombreImputado = $beneficio->nombreMoral;
                                            } else {
                                                $nombreImputado = 'IDENTIDAD RESGUARDADA';
                                            }
                                            $sintesis = htmlentities($beneficio->desTipoBeneficioES . ' - ' . $nombreImputado);
                                            $json .= '"text": ' . json_encode($dateFormat . ' -- ' . '[ BENEFICIOS ]' . ' -- ' . $sintesis) . ' ,';
                                            $text_tooltip = json_encode($dateFormat . ' -- ' . '[ BENEFICIOS ]' . ' -- ' . html_entity_decode($sintesis));
                                            $json .= '"li_attr": { "dataIdCarpeta":"' . $carpetaBase->idCarpeta . '", "dataIdActuacion":"' . $beneficio->idBeneficioEs . '", "dataCveTipoCarpeta":"' . $carpetaBase->cveTipoCarpeta . '", "dataCveJuzgado":"' . $cveJuzgado . '" },';
                                            $json .= '"icon":  "icon-arbol" ,';
                                            $json .= '"parent":  "' . $actuacion->getIdActuacion() . '_ac" ,';
                                            $json .= '"a_attr": {"onclick":"loadFormActuacion(' . "'" . '' . $url . '' . "'" . ',' . $beneficio->idBeneficioEs . ',' . $actuacion->getIdReferencia() . ',' . $actuacion->getCveTipoCarpeta() . ',' . $cveActuacionJuzgadoToca . ')" , "title":' .$text_tooltip. '}';
                                            $json .= '},';
                                        }
                                    }
                                }
                            }
                        }
                        $json = substr($json, 0, -1);
                        $json .= ']';

                        $actuaciones_obj = json_decode($json);
                        // RELACIONAR LAS ACTUACIONES PADRES Y ACTUACIONES HIJAS
                        // Se obtienen en el mismo ciclo los acuerdos que aplican a varias promociones
                        if ($actuaciones_obj != '') {
                            foreach ($actuaciones_obj as $key => $actuacion) {
                                if (isset($actuacion->actuacion_id)) {
                                    $params = '';
                                    $params["fields"] = 'idActuacionPadre';
                                    $params["tables"] = 'tblantecedesactuaciones';
                                    $params["conditions"] = 'idActuacionHija = ' . $actuacion->actuacion_id . ' AND activo = "S"';
                                    $ac_padre = $arbolFacade->selectTree($params);
                                    $ac_padre = json_decode($ac_padre);
                                    if ($ac_padre->totalCount > 0) {
                                        // tiene padre, se busca si la actuacion padre existe y se asigna en el campo "parent"
                                        $padre_encontrado = 'false';
                                        foreach ($actuaciones_obj as $key2 => $value2) {
                                            if (isset($value2->actuacion_id) && $value2->id == $ac_padre->resultados[0]->idActuacionPadre . '_ac') {
                                                $padre_encontrado = 'true';
                                            }
                                        }
                                        if ($padre_encontrado == 'true') {
                                            $actuaciones_obj[$key]->parent = $ac_padre->resultados[0]->idActuacionPadre . '_ac';
                                        } else {
                                            $actuaciones_obj[$key]->text .= 'BUG!! NO SE ENCONTRO PADRE';
                                        }
                                    }
                                    if ($ac_padre->totalCount > 1 && ($actuacion->li_attr->dataActuacionName == 'ACUERDOS')) {
                                        // se trata de un acuerdo que aplica para varias promociones
                                        $tmp = array();
                                        $cont = 0;
                                        foreach ($ac_padre->resultados as $key => $promo_padre) {
                                            if ($cont != 0) { // evitar la primera promocion, pues la copia del acuerdo se hará de la segunda en adelante
                                                $tmp['promocion'] = $promo_padre->idActuacionPadre . '_ac';
                                                $tmp['acuerdo'] = $actuacion->actuacion_id . '_ac';
                                                array_push($acuerdos_multi_promo, $tmp);
                                            }
                                            $cont++;
                                        }
                                    }
                                }
                            }
                            // JSON FINAL ACTUACIONES
                            //print_r($actuaciones_obj);
                            $all_actuaciones = array_merge($actuaciones_obj, $all_actuaciones);
                            $tree_actuaciones_json = json_encode($all_actuaciones);
                        }
                    }
                    // AUDIENCIAS
                    $params = '';
                    $params["fields"] = 'idAudiencia,idSolicitudAudiencia';
                    $params["orders"] = 'fechaRegistro DESC';
                    $params["tables"] = 'tblaudiencias';
                    $params["conditions"] = 'idReferencia = ' . $carpetaBase->idCarpeta . ' AND cveTipoCarpeta = ' . $carpetaBase->cveTipoCarpeta . ' AND activo = "S"';
                    $params["groups"] = '';
                    $audiencias_json = $arbolFacade->selectTree($params);
                    $audiencias_obj = json_decode($audiencias_json);
                    if ($audiencias_obj->totalCount > 0) {
                        $json = '[';
                        foreach ($audiencias_obj->resultados as $audiencia) {
                            $AudienciaDTO = new AudienciasDTO();
                            $AudienciaDTO->setIdAudiencia($audiencia->idAudiencia);
                            $AudienciaDTO->setActivo("S");

                            $AudienciaDAO = new AudienciasDAO();
                            $AudienciaDTO = $AudienciaDAO->selectAudiencias($AudienciaDTO, " ORDER BY fechaRegistro DESC ", null);
                            if ($AudienciaDTO !== "") {
                                $audiencia_dto = $AudienciaDTO[0];
                                // mandar cveJuzgado a las actuaciones que se desprendan de las TOCAS (cveTipoCarpeta = 6)
                                if ($carpetaBase->cveTipoCarpeta == 6) {
                                    $audienciaJuzgadoToca = $audiencia_dto->getCveJuzgado();
                                }else{
                                    $audienciaJuzgadoToca = '0';
                                }
                                $json .= '{';
                                $json .= '"id" : "' . $audiencia_dto->getIdaudiencia() . '_au" ,';
                                $json .= '"audiencia_id": "' . $audiencia_dto->getIdAudiencia() . '" ,';
                                $sintesis = htmlentities($arbolFacade->getDesCatAudiencia($audiencia_dto->getCveCatAudiencia()));
                                $date = explode(" ", $audiencia_dto->getFechaInicial());
                                $hora = explode(" ", $audiencia_dto->getFechaInicial());
                                $date = htmlentities(str_replace("-", "/", $date[0]));
                                $date = explode('/', $date);
                                $dateFormat = $date[2] . '/' . $date[1] . '/' . $date[0];                            
                                $numAnioaudiencia = htmlentities('[ ' . $hora[1]);
                                $json .= '"text": ' . json_encode($dateFormat . ' -- ' . $numAnioaudiencia . ' AUDIENCIA ] -- ' . $sintesis) . ' ,';
                                $text_tooltip = json_encode($dateFormat . ' -- ' . $numAnioaudiencia . ' AUDIENCIA ] -- ' . html_entity_decode($sintesis));
                                $json .= '"li_attr": { "dataActuacionName":"AUDIENCIA", "dataIdCarpeta":"' . $carpetaBase->idCarpeta . '", "dataIdActuacion":"' . $audiencia_dto->getIdaudiencia() . '", "dataCveTipoCarpeta":"' . $carpetaBase->cveTipoCarpeta . '", "dataCveJuzgado":"' . $cveJuzgado . '", "dataFechaOrden":' . json_encode($date[0] . $date[1] . $date[2]) . ' },';
                                $json .= '"icon": "icon-audiencia" ,';
                                $json .= '"parent":  "' . $carpetaBase->idCarpeta . '" ,';
                                $url = 'sigejupe/videoaudiencias/frmconsultavideoaudiencias.php';
                                $json .= '"a_attr": {"onclick":"loadFormActuacion(' . "'" . '' . $url . '' . "'" . ',' . $audiencia_dto->getIdAudiencia() . ',' . $audiencia_dto->getIdReferencia() . ',' . $audiencia_dto->getCveTipoCarpeta() . ',' . $audienciaJuzgadoToca . ')" , "title":' .$text_tooltip. '}';
                                $json .= '},';
                                // buscar si la audiencia tiene acta minima
                                $params = '';
                                $params["fields"] = 'idActuacion';
                                $params["orders"] = 'fechaRegistro DESC';
                                $params["tables"] = 'tblactasaudiencias';
                                $params["conditions"] = 'idAudiencia = ' . $audiencia_dto->getIdAudiencia() . ' AND activo = "S"';
                                $params["groups"] = '';
                                $actas_audiencia_json = $arbolFacade->selectTree($params);
                                $actas_audiencia_obj = json_decode($actas_audiencia_json);
                                if ($actas_audiencia_obj->totalCount > 0) {
                                    foreach ($actas_audiencia_obj->resultados as $acta) {
                                        $ActuacionesDTO = new ActuacionesDTO();
                                        $ActuacionesDTO->setIdActuacion($acta->idActuacion);
                                        $ActuacionesDTO->setActivo("S");

                                        $ActuacionesDAO = new ActuacionesDAO();
                                        $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, null, " ORDER BY fechaRegistro DESC ");

                                        if ($ActuacionesDTO !== "") {
                                            $actuacion_acta = $ActuacionesDTO[0];
                                            // mandar cveJuzgado a las actuaciones que se desprendan de las TOCAS (cveTipoCarpeta = 6)
                                            if ($carpetaBase->cveTipoCarpeta == 6) {
                                                $actuacionActaJuzgadoToca = $actuacion_acta->getCveJuzgado();
                                            }else{
                                                $actuacionActaJuzgadoToca = '0';
                                            }
                                            $json .= '{';
                                            $json .= '"id" : "' . $actuacion_acta->getIdActuacion() . '_ac" ,';
                                            $json .= '"actuacion_id": "' . $actuacion_acta->getIdActuacion() . '" ,';
                                            if ($actuacion_acta->getCveTipoActuacion() == 2 || $actuacion_acta->getCveTipoActuacion() == 33) {
                                                // es un acuerdo, se muestra la resolucion como sintesis
                                                $sintesis = htmlentities($arbolFacade->getResolucionFromAcuerdo($actuacion_acta->getCveTipoResolucion()));
                                            } else {
                                                $sintesis = htmlentities($actuacion_acta->getSintesis());
                                            }
                                            $acTipoActuacionName = htmlentities($arbolFacade->getTiposActuacionesName($actuacion_acta->getCveTipoActuacion()));
                                            $date = explode(" ", $actuacion_acta->getFechaRegistro());
                                            $date = htmlentities(str_replace("-", "/", $date[0]));
                                            $date = explode('/', $date);
                                            $dateFormat = $date[2] . '/' . $date[1] . '/' . $date[0];
                                            $numAnioActuacion = htmlentities('[ ' . $actuacion_acta->getNumActuacion() . '/' . $actuacion_acta->getAniActuacion());
                                            $icono = htmlentities($arbolFacade->getIconoTipoActuacion($actuacion_acta->getCveTipoActuacion()));
                                            $url = $arbolFacade->getUrlTipoActuacion($actuacion_acta->getCveTipoActuacion(),$carpetaBase->cveTipoCarpeta);
                                            $json .= '"text": ' . json_encode($dateFormat . ' -- ' . $numAnioActuacion . ' ' . $acTipoActuacionName . ' ] -- ' . $sintesis) . ' ,';
                                            $text_tooltip = json_encode($dateFormat . ' -- ' . $numAnioActuacion . ' ' . $acTipoActuacionName . ' ] -- ' . html_entity_decode($sintesis));
                                            $json .= '"li_attr": { "dataActuacionName":"' . $acTipoActuacionName . '", "dataIdCarpeta":"' . $carpetaBase->idCarpeta . '", "dataIdActuacion":"' . $actuacion_acta->getIdActuacion() . '", "dataCveTipoCarpeta":"' . $carpetaBase->cveTipoCarpeta . '", "dataCveJuzgado":"' . $cveJuzgado . '" },';
                                            $json .= '"icon":  ' . json_encode($icono) . ' ,';
                                            $json .= '"parent" : "' . $audiencia_dto->getIdaudiencia() . '_au" ,';
                                            $json .= '"a_attr": {"onclick":"loadFormActuacion(' . "'" . '' . $url . '' . "'" . ',' . $actuacion_acta->getIdActuacion() . ',' . $actuacion_acta->getIdReferencia() . ',' . $actuacion_acta->getCveTipoCarpeta() . ',' . $actuacionActaJuzgadoToca . ')", "title":' .$text_tooltip. '}';
                                            $json .= '},';
                                            // buscar si el acta minima tiene notificacion
                                            $params = '';
                                            $params["fields"] = 'idActuacionHija';
                                            $params["orders"] = 'fechaRegistro DESC';
                                            $params["tables"] = 'tblantecedesactuaciones';
                                            $params["conditions"] = 'idActuacionPadre = ' . $actuacion_acta->getIdActuacion() . ' AND activo = "S"';
                                            $params["groups"] = '';
                                            $notificaciones_actas_json = $arbolFacade->selectTree($params);
                                            $notificaciones_actas_obj = json_decode($notificaciones_actas_json);
                                            if ($notificaciones_actas_obj->totalCount > 0) {
                                                $actuaciones_tmp = json_decode($tree_actuaciones_json);
                                                foreach ($notificaciones_actas_obj->resultados as $notificacion) {
                                                    $ActuacionesDTO = new ActuacionesDTO();
                                                    $ActuacionesDTO->setIdActuacion($notificacion->idActuacionHija);
                                                    $ActuacionesDTO->setActivo("S");

                                                    $ActuacionesDAO = new ActuacionesDAO();
                                                    $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, null, " ORDER BY fechaRegistro DESC ");

                                                    if ($ActuacionesDTO !== "") {
                                                        $actuacion_notificacion = $ActuacionesDTO[0];
                                                        // mandar cveJuzgado a las actuaciones que se desprendan de las TOCAS (cveTipoCarpeta = 6)
                                                        if ($carpetaBase->cveTipoCarpeta == 6) {
                                                            $actuacionNotificacionJuzgadoToca = $actuacion_notificacion->getCveJuzgado();
                                                        }else{
                                                            $actuacionNotificacionJuzgadoToca = '0';
                                                        }
                                                        // quitar las notificaciones relacionadas a esta acta minima que venian en el objeto de actuaciones
                                                        $id_notificacion = $actuacion_notificacion->getIdActuacion() . '_ac';
                                                        foreach ($actuaciones_tmp as $key => $actuacion_tmp) {
                                                            if ($actuacion_tmp->id == $id_notificacion) {
                                                                unset($actuaciones_tmp[$key]);
                                                                array_push($notificaciones_en_actas, $id_notificacion);
                                                            }
                                                        }
                                                        // generar nuevo nodo de notificacion ligada a una acta minima
                                                        $json .= '{';
                                                        $json .= '"id" : "' . $actuacion_notificacion->getIdActuacion() . '_ac" ,';
                                                        $json .= '"actuacion_id": "' . $actuacion_notificacion->getIdActuacion() . '" ,';
                                                        $sintesis = htmlentities($actuacion_notificacion->getSintesis());
                                                        $acTipoActuacionName = htmlentities($arbolFacade->getTiposActuacionesName($actuacion_notificacion->getCveTipoActuacion()));
                                                        $date = explode(" ", $actuacion_notificacion->getFechaRegistro());
                                                        $date = htmlentities(str_replace("-", "/", $date[0]));
                                                        $date = explode('/', $date);
                                                        $dateFormat = $date[2] . '/' . $date[1] . '/' . $date[0];
                                                        $numAnioActuacion = htmlentities('[ ' . $actuacion_notificacion->getNumActuacion() . '/' . $actuacion_notificacion->getAniActuacion());
                                                        $icono = htmlentities($arbolFacade->getIconoTipoActuacion($actuacion_notificacion->getCveTipoActuacion()));
                                                        $url = $arbolFacade->getUrlTipoActuacion($actuacion_notificacion->getCveTipoActuacion(),$carpetaBase->cveTipoCarpeta);
                                                        $json .= '"text": ' . json_encode($dateFormat . ' -- ' . $numAnioActuacion . ' ' . $acTipoActuacionName . ' ] -- ' . $sintesis) . ' ,';
                                                        $text_tooltip = json_encode($dateFormat . ' -- ' . $numAnioActuacion . ' ' . $acTipoActuacionName . ' ] -- ' . html_entity_decode($sintesis));
                                                        $json .= '"li_attr": { "dataActuacionName":"' . $acTipoActuacionName . '", "dataIdCarpeta":"' . $carpetaBase->idCarpeta . '", "dataIdActuacion":"' . $actuacion_notificacion->getIdActuacion() . '", "dataCveTipoCarpeta":"' . $carpetaBase->cveTipoCarpeta . '", "dataCveJuzgado":"' . $cveJuzgado . '" },';
                                                        $json .= '"icon":  ' . json_encode($icono) . ' ,';
                                                        $json .= '"parent" : "' . $actuacion_acta->getIdActuacion() . '_ac" ,';
                                                        $json .= '"a_attr": {"onclick":"loadFormActuacion(' . "'" . '' . $url . '' . "'" . ',' . $actuacion_notificacion->getIdActuacion() . ',' . $actuacion_notificacion->getIdReferencia() . ',' . $actuacion_notificacion->getCveTipoCarpeta() . ',' . $actuacionNotificacionJuzgadoToca . ')", "title":' .$text_tooltip. '}';
                                                        $json .= '},';
                                                    }
                                                }
                                                // regresar el json de actuaciones como venia
                                                $tree_actuaciones_json = array_values((array) $actuaciones_tmp);
                                                $tree_actuaciones_json = json_encode($tree_actuaciones_json);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        $json = substr($json, 0, -1);
                        $json .= ']';
                        $audiencias_obj = json_decode($json);
                        // JSON FINAL AUDIENCIAS
                        $all_audiencias = array_merge($audiencias_obj, $all_audiencias);
                        $tree_audiencias_json = json_encode($all_audiencias);
                    }
                }

                // carpetas a nodos
                $json = '[';
                foreach ($tree_carpetas as $carpetaBase) {
                    $json .= '{';
                    $json .= '"id": "' . $carpetaBase->idCarpeta . '" ,';
                    $nameCarpeta = htmlentities($carpetaBase->name_carpeta);
                    //$principal = ($tmp == 0) ? ' (PRINCIPAL)' : '';
                    // Ordenes de aprehension o Cateo
                    if ($carpetaBase->cveTipoCarpeta == 9 || $carpetaBase->cveTipoCarpeta == 10) {
                        // por ser un icono con una hoja y un lapiz (no porque sea un acuerdo)
                        //$json .= '"icon": "icon-acuerdo" ,'; 
                        if ($carpetaBase->cveTipoCarpeta == 9) {
                            $numeroEspecializadoCateo = htmlentities($carpetaBase->numeroEspecializadoCateo);
                            $json .= '"text": "' . $carpetaBase->numero . '/' . $carpetaBase->anio . ' -- ' . $nameCarpeta . ' (N° Esp ' . $numeroEspecializadoCateo.') " , ';
                        }
                        if ($carpetaBase->cveTipoCarpeta == 10) {
                            $numeroEspecializadoOrden = htmlentities($carpetaBase->numeroEspecializadoOrden);
                            $json .= '"text": "' . $carpetaBase->numero . '/' . $carpetaBase->anio . ' -- ' . $nameCarpeta . ' (N° Esp ' . $numeroEspecializadoOrden . ') " ,';
                        }
                    }else{
                        $json .= '"text": "' . $carpetaBase->numero . '/' . $carpetaBase->anio . ' -- ' . $nameCarpeta . '" ,';
                    }
                    if ($carpetaBase->idCarpeta == $busqueda_inicial_id) {
                        $class = 'carpetaPadre carpetaInicial';
                    } else {
                        $class = 'carpetaPadre';
                    }
                    $json .= '"li_attr": { "class":"' . $class . '", "dataCveJuzgado":"' . $cveJuzgado . '", "dataCveTipoCarpeta":"' . $carpetaBase->cveTipoCarpeta . '" },';
                    $json .= '"parent":  "#" ,';
                    //$json .= '"parent":  "'.$carpetaBase->parent.'" ,';
                    // para segunda instancia, buscar si el amparo o el exhorto se desprenden de una toca, en ese caso estas (el amparo o el exhorto) son de segunda instancia y se manda la clave del juzgado
                    if ($carpetaBase->parent != '#' && ($carpetaBase->cveTipoCarpeta == 7 || $carpetaBase->cveTipoCarpeta == 8) ) {
                        $padre_obj = $arbolFacade->getBaseCarpetaById($carpetaBase->parent);
                    }else{
                        $padre_obj = false;
                    }
                    if ($padre_obj && $padre_obj->cveTipoCarpeta == 6) {
                        // el padre es una toca, se trata de un amparo o exhorto de segunda instancia, mandar el juzgado
                        $json .= '"a_attr": { "onclick":"setCarpetaOrigen(' . $carpetaBase->idCarpeta . ',' . $carpetaBase->cveTipoCarpeta . ', ' . $carpetaBase->cveJuzgado . ')" }';
                    }else{
                        $json .= '"a_attr": { "onclick":"setCarpetaOrigen(' . $carpetaBase->idCarpeta . ',' . $carpetaBase->cveTipoCarpeta . ',0)" }';
                    }
                    $json .= '},';
                }
                $json = substr($json, 0, -1);
                $json .= ']';
                // JSON FINAL CARPETAS
                $tree_carpetas_json = $json;

                // borrar las notificaciones encontradas en las audiencias/actas minimas/notificaciones del arreglo de actuaciones normales
                if ($tree_actuaciones_json != '') {
                    $actuaciones_tmp = json_decode($tree_actuaciones_json);
                    foreach ($notificaciones_en_actas as $notificacion) {
                        foreach ($actuaciones_tmp as $key => $actuacion_tmp) {
                            if ($actuacion_tmp->id == $notificacion) {
                                unset($actuaciones_tmp[$key]);
                            }
                        }
                    }
                    $tree_actuaciones_json = array_values((array) $actuaciones_tmp);
                    $tree_actuaciones_json = json_encode($tree_actuaciones_json);
                }

                $tree_actuaciones_json = ($tree_actuaciones_json != '') ? substr($tree_actuaciones_json, 1) : '';
                $tree_actuaciones_json = ($tree_actuaciones_json != '') ? substr($tree_actuaciones_json, 0, -1) : '';
                $separador = ($tree_actuaciones_json != '') ? ',' : '';

                $tree_audiencias_json = ($tree_audiencias_json != '') ? substr($tree_audiencias_json, 1) : '';
                $tree_audiencias_json = ($tree_audiencias_json != '') ? substr($tree_audiencias_json, 0, -1) : '';
                $separador_audiencias = ($tree_audiencias_json != '') ? ',' : '';

                $tree_carpetas_json = substr($tree_carpetas_json, 1);
                $tree_carpetas_json = substr($tree_carpetas_json, 0, -1);

                // devolver los principales json (actuaciones y carpetas)
                $final_tree = '[' . $tree_carpetas_json . $separador_audiencias . $tree_audiencias_json . $separador . $tree_actuaciones_json . ']';
                $json = '{"estatus" : "ok" , "resultados" : ' . $final_tree . ' , "multi_promo" : ' . json_encode($acuerdos_multi_promo) . '}';
                echo $json;
                exit();
            } else if ($principal->Estatus == "Fail") {
                // ocurrio un error al obtener la carpeta padre mayor (procedure call _principal)
                $json = '{"estatus" : "fail","mnj":"' . $principal->mnj . '"}';
                echo $json;
                exit();
            }
            break;

        case "getAllCarpetasFromJuzgado":
            $arbolFacade = new ArbolFacade();
            $arbolFacade->initializeTiposCarpetas();
            if (sizeof($tiposCarpetasDeJuzgado) != 0) {
                $resultados = array();
                //$resultados['tipoCarpeta'] = 
                foreach ($tiposCarpetasDeJuzgado as $key => $tipoCarpeta) {
                    switch ($tipoCarpeta) {
                        case 7:
                            // buscar exhortos
                            $params["fields"] = 'idExhorto,numExhorto,aniExhorto,fechaRegistro,cveJuzgado';
                            $params["orders"] = 'fechaRegistro DESC';
                            $params["tables"] = 'tblexhortos';
                            $params["conditions"] = ' numExhorto = "' . $numero . '" AND aniExhorto = "' . $anio . '" AND cveJuzgado = "' . $cveJuzgado . '" AND activo ="S" ';
                            $params["groups"] = '';
                            $base_json = $arbolFacade->selectTree($params);
                            $base_obj = json_decode($base_json);
                            if ($base_obj->totalCount > 0) {
                                $resultados[$key]['cveJuzgado'] = $cveJuzgado;
                                $resultados[$key]['tipoCarpeta'] = $tipoCarpeta;
                                $resultados[$key]['descripcionCarpeta'] = 'EXHORTOS';
                                $resultados[$key]['anio'] = $base_obj->resultados[0]->aniExhorto;
                                $resultados[$key]['numero'] = $base_obj->resultados[0]->numExhorto;
                                $resultados[$key]['fecha'] = $base_obj->resultados[0]->fechaRegistro;
                            } else {
                                //print_r("nada en exhortos");
                            }
                            break;
                        case 8:
                            // buscar amparos
                            $params["fields"] = 'idAmparo,numAmparo,aniAmparo,fechaRegistro,cveJuzgado';
                            $params["orders"] = 'fechaRegistro DESC';
                            $params["tables"] = 'tblamparos';
                            $params["conditions"] = ' numAmparo = "' . $numero . '" AND aniAmparo = "' . $anio . '" AND cveJuzgado = "' . $cveJuzgado . '" AND activo ="S" ';
                            $params["groups"] = '';
                            $base_json = $arbolFacade->selectTree($params);
                            $base_obj = json_decode($base_json);
                            if ($base_obj->totalCount > 0) {
                                $resultados[$key]['cveJuzgado'] = $cveJuzgado;
                                $resultados[$key]['tipoCarpeta'] = $tipoCarpeta;
                                $resultados[$key]['descripcionCarpeta'] = 'AMPAROS';
                                $resultados[$key]['anio'] = $base_obj->resultados[0]->aniAmparo;
                                $resultados[$key]['numero'] = $base_obj->resultados[0]->numAmparo;
                                $resultados[$key]['fecha'] = $base_obj->resultados[0]->fechaRegistro;
                            } else {
                                //print_r("nada en amparos");
                            }
                            break;
                        case 1:
                        case 2:
                        case 3:
                        case 4:
                        case 5:
                        case 6:
                            // para la descripcion
                            $des = $arbolFacade->getTiposCarpetasName($tipoCarpeta);
                            // buscar en carpetas judiciales
                            $params["fields"] = 'idCarpetaJudicial,numero,anio,fechaRadicacion,cveJuzgado';
                            $params["orders"] = 'fechaRadicacion DESC';
                            $params["tables"] = 'tblcarpetasjudiciales';
                            $conditions = ' numero = "' . $numero . '" AND anio = "' . $anio . '" AND cveJuzgado = "' . $cveJuzgado . '" AND activo ="S" ';
                            $conditions .= 'AND cveTipoCarpeta = "' . $tipoCarpeta . '"';
                            $params["conditions"] = $conditions;
                            $params["groups"] = '';
                            $base_json = $arbolFacade->selectTree($params);
                            $base_obj = json_decode($base_json);
                            if ($base_obj->totalCount > 0) {
                                $resultados[$key]['cveJuzgado'] = $cveJuzgado;
                                $resultados[$key]['tipoCarpeta'] = $tipoCarpeta;
                                $resultados[$key]['descripcionCarpeta'] = $des;
                                $resultados[$key]['anio'] = $base_obj->resultados[0]->anio;
                                $resultados[$key]['numero'] = $base_obj->resultados[0]->numero;
                                $resultados[$key]['fecha'] = $base_obj->resultados[0]->fechaRadicacion;
                            } else {
                                //print_r("nada en carpetas judiciales".$des);
                            }
                            break;
                        default:
                            # code...
                            break;
                    }
                }
                if ($resultados) {
                    $json = '{"estatus":"ok","resultados":' . json_encode($resultados) . '}';
                    echo $json;
                    exit();
                } else {
                    $json = '{"estatus":"fail","mnj":"Sin resultados"}';
                    echo $json;
                    exit();
                }
            } else {
                $json = '{"estatus":"fail","mnj":"Sin resultados"}';
                echo $json;
                exit();
            }
            break;
    }

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>
<?php

if (!isset($_SESSION)) {
    session_start();
}
date_default_timezone_set("America/Mexico_City");
error_reporting(E_ALL);
ini_set('max_execution_time', 500000);

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitosexhortos/DelitosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitosexhortos/DelitosexhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofenfendidosexhortos/OfenfendidosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofenfendidosexhortos/OfenfendidosexhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosexhortos/ImputadosexhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

//Para libro Promociones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/promoventesactuaciones/PromoventesactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/promoventesactuaciones/PromoventesactuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedesactuaciones/AntecedesactuacionesDAO.Class.php");

//Para libro Indice
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consignaciones/ConsignacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consignaciones/ConsignacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesordenes/SolicitudesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenes/OrdenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");
//Amparos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/amparos/AmparosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipoamparo/TipoamparoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipoamparo/TipoamparoDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/quejosos/QuejososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/quejosos/QuejososDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tercerosperjudicados/TercerosperjudicadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tercerosperjudicados/TercerosperjudicadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class librosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function libroExhorto($exhortosDto, $param = null, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $json = "";
        $x = 1;
        $exhortosDao = new ExhortosDAO();

        $delitosExhortosDto = new DelitosexhortosDTO();
        $delitosExhortosDao = new DelitosexhortosDAO();

        $ofendidosexhortosDto = new OfenfendidosexhortosDTO();
        $ofendidosexhortosDao = new OfenfendidosexhortosDAO();

        $imputadosExhortosDto = new ImputadosexhortosDTO();
        $imputadosExhortosDao = new ImputadosexhortosDAO();

        $delitosDto = new DelitosDTO();
        $delitosDao = new DelitosDAO();

        $estadosDto = new EstadosDTO();
        $estadosDao = new EstadosDAO();

        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();

        $tiposCarpetasDto = new TiposcarpetasDTO();
        $tiposCarpetasDao = new TiposcarpetasDAO();
        $exhortosDto = $exhortosDao->selectExhortos($exhortosDto, " AND fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00' AND fechaRegistro <= '" . $param['fechaFinal'] . " 23:59:59' order by numExhorto ASC,aniExhorto ASC", $this->proveedor);
        if ($exhortosDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($exhortosDto) . '",';
            $json .= '"data":[';
            foreach ($exhortosDto as $exhorto) {
                $estadosDto->setCveEstado($exhorto->getCveEstadoProcedencia());
                $rsEstado = $estadosDao->selectEstados($estadosDto, "", $this->proveedor);
                if ($rsEstado != "") {
                    $estado = $rsEstado[0]->getDesEstado();
                } else {
                    $estado = "SIN ESTADO";
                }
                if ($exhorto->getCveJuzgadoProcedencia() != "" && $exhorto->getCveJuzgadoProcedencia() != 0) {
                    $juzgadosDto->setCveJuzgado($exhorto->getCveJuzgadoProcedencia());

                    $rsJuz = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
                    if ($rsJuz != "") {
                        $desJuz = $rsJuz[0]->getDesJuzgado();
                    } else {
                        $desJuz = "";
                    }
                } else {
                    $desJuz = "";
                }
                $json .= "{";
                $json .= '"idExhorto":' . json_encode(utf8_encode($exhorto->getIdExhorto())) . ",";
                $json .= '"numExhorto":' . json_encode(utf8_encode($exhorto->getNumExhorto())) . ",";
                $json .= '"aniExhorto":' . json_encode(utf8_encode($exhorto->getAniExhorto())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($exhorto->getFechaRegistro())) . ",";
                $json .= '"cveEstadoProcedencia":' . json_encode(utf8_encode($exhorto->getCveEstadoProcedencia())) . ",";
                $json .= '"desEstadoProcedencia":' . json_encode(utf8_encode($estado)) . ",";
                $json .= '"cveJuzgadoProcedencia":' . json_encode(utf8_encode($exhorto->getCveJuzgadoProcedencia())) . ",";
                $json .= '"descJuzgadoProcedencia":' . json_encode(utf8_encode($desJuz)) . ",";
                $json .= '"juzgadoProcedencia":' . json_encode(utf8_encode($exhorto->getJuzgadoProcedencia())) . ",";
                $json .= '"numCausa":' . json_encode(utf8_encode($exhorto->getNumero())) . ",";
                $json .= '"aniCausa":' . json_encode(utf8_encode($exhorto->getAnio())) . ",";
                $json .= '"Observaciones":' . json_encode(utf8_encode($exhorto->getObservaciones())) . ",";
                $json .= '"fecOficio":' . json_encode(utf8_encode($exhorto->getFecOficio())) . ",";

                ##TipoCarpeta
                $tiposCarpetasDto->setCveTipoCarpeta($exhorto->getCveTipoCarpeta());
                $rsTiposCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto, "", $this->proveedor);
                if ($rsTiposCarpetas != "") {
                    $json .= '"desCarpeta":' . json_encode(utf8_encode($rsTiposCarpetas[0]->getDesTipoCarpeta())) . ',';
                } else {
                    $json .= '"desCarpeta":' . json_encode(utf8_encode("N/A")) . ',';
                }
                ##DELITOS
                $json .= '"delitos":[';
                $delitosExhortosDto->setIdExhorto($exhorto->getIdExhorto());
                $delitosExhortosDto->setActivo("S");
                $rsDelitos = $delitosExhortosDao->selectDelitosexhortos($delitosExhortosDto, "", $this->proveedor);
                if ($rsDelitos != "") {
                    $d = 1;
                    foreach ($rsDelitos as $rsDelito) {
                        $delitosDto->setCveDelito($rsDelito->getCveDelito());
                        $rsDelitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                        if ($rsDelitosDto != "") {
                            $delito = $rsDelitosDto[0]->getDesDelito();
                        } else {
                            $delito = "N/A";
                        }
                        $json .= "{";
                        $json .= '"idDelitoExhorto":' . json_encode(utf8_encode($rsDelito->getIdDelitoExhorto())) . ",";
                        $json .= '"descDelito":' . json_encode(utf8_encode($delito)) . "";
//
                        $json .= "}" . "\n";
                        $d ++;
                        if ($d <= count($rsDelitos)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= "],";

                ##imputados
                $json .= '"imputados":[';
                $imputadosExhortosDto->setIdExhorto($exhorto->getIdExhorto());
                $imputadosExhortosDto->setActivo("S");
                $rsImputados = $imputadosExhortosDao->selectImputadosexhortos($imputadosExhortosDto, "", $this->proveedor);
                if ($rsImputados != "") {
                    $i = 1;
                    foreach ($rsImputados as $rsImputado) {
                        $json .= "{";
                        $json .= '"idImputado":' . json_encode(utf8_encode($rsImputado->getIdImputadoExhorto())) . ",";
                        $json .= '"cveTipoPersona":' . json_encode(utf8_encode($rsImputado->getCveTipoPersona())) . ",";
                        $json .= '"nombremoral":' . json_encode(utf8_encode($rsImputado->getNombreMoral())) . ",";
                        $json .= '"nombre":' . json_encode(utf8_encode($rsImputado->getNombre())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($rsImputado->getPaterno())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($rsImputado->getMaterno())) . "";
                        $json .= "}";
                        $i ++;
                        if ($i <= count($rsImputados)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= "],";

                ###Ofendidos
                $json .= '"ofendidos":[';
                $ofendidosexhortosDto->setIdExhorto($exhorto->getIdExhorto());
                $ofendidosexhortosDto->setActivo("S");
                $rsOfendidos = $ofendidosexhortosDao->selectOfenfendidosexhortos($ofendidosexhortosDto, "", $this->proveedor);
                if ($rsOfendidos != "") {
                    $o = 1;
                    foreach ($rsOfendidos as $ofendido) {
                        $json .= "{";
                        $json .= '"idOfendido":' . json_encode(utf8_encode($ofendido->getIdOfenfendidoExhorto())) . ",";
                        $json .= '"cveTipoPersona":' . json_encode(utf8_encode($ofendido->getCveTipoPersona())) . ",";
                        $json .= '"nombremoral":' . json_encode(utf8_encode($ofendido->getNombreMoral())) . ",";
                        $json .= '"nombre":' . json_encode(utf8_encode($ofendido->getNombre())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($ofendido->getPaterno())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($ofendido->getMaterno())) . "";
                        $json .= "}";
                        $o ++;
                        if ($o <= count($rsOfendidos)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= "]";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($exhortosDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

    public function libroOficio($actuacionesdto, $param = null, $provedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $actuacionesdao = new ActuacionesDAO();
        $TiposcarpetasDto = new TiposcarpetasDTO();
        $TiposcarpetasDao = new TiposcarpetasDAO();
        $actuacionesres = $actuacionesdao->selectActuaciones($actuacionesdto, $this->proveedor, "order by numActuacion ASC,aniActuacion ASC", $param);
        if ($actuacionesres != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($actuacionesres) . '",';
            $json .= '"mnj":"' . $mensaje . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($actuacionesres as $Act) {
                $json .= "{";
                $json .= '"idActuacion":' . json_encode($Act->getIdActuacion()) . '';
                $json .= ',"numActuacion":' . json_encode($Act->getNumActuacion()) . '';
                $json .= ',"aniActuacion":' . json_encode($Act->getAniActuacion()) . '';
                $json .= ',"cveTipoActuacion":' . json_encode($Act->getCveTipoActuacion()) . '';
                $json .= ',"numero":' . json_encode($Act->getNumero()) . '';
                $json .= ',"anio":' . json_encode($Act->getAnio()) . '';
                $json .= ',"cveTipoCarpeta":' . json_encode($Act->getCveTipoCarpeta()) . '';
                $json .= ',"cveJuzgado":' . json_encode($Act->getCveJuzgado()) . '';
                $json .= ',"Sintesis":' . json_encode($Act->getSintesis()) . '';
                $json .= ',"fechaRegistro":' . json_encode($Act->getFechaRegistro()) . '';
                $texto = $Act->getObservaciones();
                $json .= ',"observaciones":' . json_encode($texto) . '';

                $TiposcarpetasDto->setCveTipoCarpeta($Act->getCveTipoCarpeta());
                //var_dump($TiposcarpetasDto);
                $res = $TiposcarpetasDao->selectTiposcarpetas($TiposcarpetasDto, '', $this->proveedor);
                //var_dump($res);
                $json .= ',"desCarpeta":' . json_encode($res[0]->getDesTipoCarpeta()) . '';

                $json .= '}';
                $x ++;
                if ($x <= count($actuacionesres)) {
                    $json .= ",";
                }
            }
            $json .= "]}";
        } else {
            $json .= '{"estatus":"ok2",';
            $json .= '"mnj":"No se encontraron registros."}';
        }

        return $json;
    }

    public function libroPromociones($ActuacionesDto, $param = null, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $ActuacionesDao = new ActuacionesDAO();

        $json = "";
        //Promociones
        $rsActuaciones = $ActuacionesDao->selectActuacionesLibro($ActuacionesDto, $this->proveedor, '', $param);
        if ($rsActuaciones != "") {
            $json .= '{"estatus":"ok",';
            $json .= '"totalCount":"' . count($rsActuaciones) . '",';
            $json .= '"resultados":[';
            $n1 = 1;

            $tiposCarpetasDto = new TiposcarpetasDTO();
            $tiposCarpetasDao = new TiposcarpetasDAO();

            foreach ($rsActuaciones as $actuacion) {
                $tiposCarpetasDto->setCveTipoCarpeta($actuacion->getCveTipoCarpeta());
                $rsTiposCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto, "", $this->proveedor);

                $json .= "{";
                $json .= '"idActuacion":' . json_encode(utf8_encode($actuacion->getIdActuacion())) . ",";
                $json .= '"numActuacion":' . json_encode(utf8_encode($actuacion->getNumActuacion())) . ",";
                $json .= '"aniActuacion":' . json_encode(utf8_encode($actuacion->getAniActuacion())) . ",";
                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacion->getCveTipoActuacion())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($actuacion->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($actuacion->getAnio())) . ",";
                $json .= '"noFojas":' . json_encode(utf8_encode($actuacion->getNoFojas())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($actuacion->getCveTipoCarpeta())) . ",";
                $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($rsTiposCarpetas[0]->getDesTipoCarpeta())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacion->getCveJuzgado())) . ",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode($actuacion->getCveUsuario())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($actuacion->getFechaRegistro())) . ",";
                $json .= '"sintesis":' . json_encode(utf8_encode($actuacion->getSintesis())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($actuacion->getActivo())) . ",";

                //Promoventes
                $json .= '"promoventes":';
                $json .= "{";

                $promoventesDto = new PromoventesactuacionesDTO();
                $promoventesDao = new PromoventesactuacionesDAO();

                $promoventesDto->setIdActuacion($actuacion->getIdActuacion());
                $promoventesDto->setActivo('S');
                $rsPromoventes = $promoventesDao->selectPromoventesactuaciones($promoventesDto, '', $this->proveedor);

                if ($rsPromoventes) {
                    $json .= '"totalCount":"' . count($rsPromoventes) . '",';
                    $json .= '"datos":[';
                    $n2 = 1;
                    foreach ($rsPromoventes as $promovente) {
                        $json .= "{";
                        $json .= '"idPromoventeActuacion":' . json_encode(utf8_encode($promovente->getIdPromoventeActuacion())) . ",";
                        $json .= '"idActuacion":' . json_encode(utf8_encode($promovente->getIdActuacion())) . ",";
                        $json .= '"cveTipoParte":' . json_encode(utf8_encode($promovente->getCveTipoParte())) . ",";
                        $json .= '"cveTipoPersona":' . json_encode(utf8_encode($promovente->getCveTipoPersona())) . ",";
                        $json .= '"nombre":' . json_encode(utf8_encode($promovente->getNombre())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($promovente->getPaterno())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($promovente->getMaterno())) . ",";
                        $json .= '"activo":' . json_encode(utf8_encode($promovente->getActivo())) . ",";
                        $json .= '"nombrePersonaMoral":' . json_encode(utf8_encode($promovente->getNombrePersonaMoral())) . ",";
                        $json .= '"cveGenero":' . json_encode(utf8_encode($promovente->getCveGenero())) . "";
                        $json .= "}" . "\n";
                        $n2 ++;
                        if ($n2 <= count($rsPromoventes)) {
                            $json .= ",";
                        }
                    }
                    $json .= "]";
                } else {
                    $json .= '"totalCount":"0", "text":"No se encontraron resultados"';
                }
                $json .= "},";

                $json .= '"acuerdos":{';
                $antecedesDto = new AntecedesactuacionesDTO();
                $antecedesDao = new AntecedesactuacionesDAO();

                $antecedesDto->setIdActuacionPadre($actuacion->getIdActuacion());
                $antecedesDto->setActivo('S');
                $rsAntecedes = $antecedesDao->selectAntecedesactuaciones($antecedesDto, '', $this->proveedor);

                if ($rsAntecedes) {
                    $json .= '"totalCount":"' . count($rsAntecedes) . '",';
                    $json .= '"datos":[';
                    $n3 = 1;
                    foreach ($rsAntecedes as $antecede) {
                        $acuerdosDao = new ActuacionesDAO();
                        $acuerdosDto = new ActuacionesDTO();
                        $acuerdosDto->setIdActuacion($antecede->getIdActuacionHija());
                        $acuerdosDto->setCveTipoActuacion(2);
                        $acuerdosDto->setActivo('S');
                        $rsAcuerdos = $acuerdosDao->selectActuaciones($acuerdosDto, $this->proveedor);

                        $json .= "{";
                        $json .= '"idActuacionPadre":' . json_encode(utf8_encode($antecede->getIdActuacionPadre())) . ",";
                        $json .= '"idActuacionHija":' . json_encode(utf8_encode($antecede->getIdActuacionHija())) . ",";
                        $json .= '"fechaAcuerdo":' . json_encode(utf8_encode($rsAcuerdos[0]->getFechaRegistro())) . "";
                        $json .= "}" . "\n";
                        $n3 ++;
                        if ($n3 <= count($rsAntecedes)) {
                            $json .= ",";
                        }
                    }
                    $json .= "]";
                } else {
                    $json .= '"totalCount":"0", "text":"No se encontraron resultados"';
                }
                $json .= "}";

                $json .= "}";
                $n1 ++;
                if ($n1 <= count($rsActuaciones)) {
                    $json .= "," . "\n";
                }
            }
            //fin Promociones  
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"totalCount":"0", "text":"No se encontraron resultados"}';
        }
        return $json;
    }

    public function libroSentencias($ActuacionesDto,$param=null,$proveedor=null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $actuacionesdao = new ActuacionesDAO();
        
        $TiposcarpetasDto = new TiposcarpetasDTO();
        $TiposcarpetasDao = new TiposcarpetasDAO();
        
        $delitosCarDto=new DelitoscarpetasDTO();
        $delitosCarDao=new DelitoscarpetasDAO();
        
        $delitosDto=new DelitosDTO();
        $delitosDao=new DelitosDAO();
        
        $audienciasDao=new AudienciasDAO();
        $audienciasDto=new AudienciasDTO();
        
        $cataudienciasDto=new CataudienciasDTO();
        $cataudienciasDao=new CataudienciasDAO();

        $actuacionesres = $actuacionesdao->selectActuaciones($ActuacionesDto,$this->proveedor,"order by numActuacion ASC,aniActuacion ASC",$param);
            if($actuacionesres != ""){
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($actuacionesres) . '",';
                $json .= '"mnj":"' . $mensaje . '",';
                $json .= '"data":[';
                $x=1;
                foreach ($actuacionesres as $Act) {
                    $json .= "{";
                    $json .= '"idActuacion":' . json_encode($Act->getIdActuacion()) . '';
                    $json .= ',"numActuacion":' . json_encode($Act->getNumActuacion()) . '';
                    $json .= ',"aniActuacion":' . json_encode($Act->getAniActuacion()) . '';
                    $json .= ',"cveTipoActuacion":' . json_encode($Act->getCveTipoActuacion()) . '';
                    $json .= ',"numero":' . json_encode($Act->getNumero()) . '';
                    $json .= ',"anio":' . json_encode($Act->getAnio()) . '';
                    $json .= ',"cveTipoCarpeta":' . json_encode($Act->getCveTipoCarpeta()) . '';
                    $json .= ',"cveJuzgado":' . json_encode($Act->getCveJuzgado()) . '';
                    $json .= ',"fechaRegistro":' . json_encode($Act->getFechaRegistro()) . '';
                    
                    $TiposcarpetasDto->setCveTipoCarpeta($Act->getCveTipoCarpeta());
                    $res = $TiposcarpetasDao->selectTiposcarpetas($TiposcarpetasDto,'',$this->proveedor);
                    if($res != ""){
                        $json .= ',"desCarpeta":' . json_encode($res[0]->getDesTipoCarpeta()) . '';
                    }else{
                        $json .= ',"desCarpeta":"N/A"';
                    }
                    ##delitos
                        ##
                        $delitosCarDto->setIdCarpetaJudicial($Act->getIdReferencia());
                        $delcarRes=$delitosCarDao->selectDelitoscarpetas($delitosCarDto,"",$this->proveedor);
                        $json .= ',"delitos":[';
                        if($delcarRes != ""){
                            $y=1;
                            foreach($delcarRes as $delitos){
                                $delitosDto->setCveDelito($delitos->getCveDelito());
                                $resDelito=$delitosDao->selectDelitos($delitosDto,"",$this->proveedor);
                                if($resDelito != ""){
                                    $json .= "{";
                                    $json .= '"idDelito":' . json_encode($resDelito[0]->getCveDelito()) . '';
                                    $json .= ',"desDelito":' . json_encode(utf8_encode($resDelito[0]->getDesDelito())) . '}';
                                    $y ++;
                                    if ($y <= count($delcarRes)) {
                                            $json .= ",";
                                    }
                                }
                            }
                            $json .= ']';
                        }
                        ##audiencias
                        $json .= ',"audiencia":[';
                        $audienciasDto->setIdReferencia($Act->getIdReferencia());
                        $audienciasres=$audienciasDao->selectAudiencias($audienciasDto,"",$this->proveedor);
                        if($audienciasres != ""){
                            $z=1;
                            foreach($audienciasres as $audiencias){
                                $cataudienciasDto->setCveCatAudiencia($audiencias->getCveCatAudiencia());
                                $cataudienciasDto->setCveTipoAudiencia(80);
                                $cataudienciares=$cataudienciasDao->selectCataudiencias($cataudienciasDto,"",$this->proveedor);
                                if($cataudienciares != ""){
                                    $json .= "{";
                                    $json .= '"idCatAudiencia":' . json_encode($cataudienciares[0]->getCveCatAudiencia()) . '';
                                    $json .= ',"fechaAudiencia":' . json_encode($audiencias->getFechaInicial()) . '';
                                    $json .= ',"desAudiencia":' . json_encode($cataudienciares[0]->getDesCatAudiencia()) . '}';
                                    $z ++;
                                    if ($z <= count($audienciasres)) {
                                            $json .= ",";
                                    }
                                }
                            }
                        }
                        $json .= "]";
                    
                    
                    $json .= '}';
                    $x ++;
                   if ($x <= count($actuacionesres)) {
                      $json .= ",";
                    }
                }
                $json .= "]}";
            }else {
                $json .= '{"estatus":"ok2",';
                $json .= '"mnj":"No se encontraron registros."}';
            }
        return $json;
    }
    
    public function libroGobierno($carpetaJudicialDto, $param = null, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        
        //var_dump($carpetaJudicialDto);
        $carpetajudicialDao=new CarpetasjudicialesDAO();
        
        $solicitudesOrdendeDto=new SolicitudesordenesDTO();
        $solicitudesOrdendeDao=new SolicitudesordenesDAO();

        $consignacionDto=new ConsignacionesDTO();
        $consignacionDao=new ConsignacionesDAO();
        
        $ordenesDto=new OrdenesDTO();
        $ordenesDao=new OrdenesDAO();
        
        $impofedelDto=new ImpofedelcarpetasDTO();
        $impofedelDao=new ImpofedelcarpetasDAO();
        
        $imputadosCarpetasDto = new ImputadoscarpetasDTO();
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        
        $ofendidosCarpetasDto = new OfendidoscarpetasDTO();
        $ofendidosCarpetasDao = new OfendidoscarpetasDAO();
        
        $delitosCarpetasDto = new DelitoscarpetasDTO();
        $delitosCarpetasDao = new DelitoscarpetasDAO();
        
        $delitosDto = new DelitosDTO();
        $delitosDao = new DelitosDAO();
        
        $ofendidosCarpetasDto = new OfendidoscarpetasDTO();
        $ofendidosCarpetasDao = new OfendidoscarpetasDAO();
        
        $carpetajudicialres=$carpetajudicialDao->selectCarpetasjudiciales($carpetaJudicialDto,"AND fechaRegistro >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRegistro <= '" . $param['fechaHasta'] . " 23:59:59' ORDER BY numero, anio",$this->proveedor,$param);
            if($carpetajudicialres != ""){
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($carpetajudicialres) . '",';
                $json .= '"mnj":"' . $mensaje . '",';
                $json .= '"data":[';
                $x=1;
                foreach($carpetajudicialres as $carpetas){
                    $json .= "{";
                    $json .= '"idCarpeta":' . json_encode($carpetas->getIdCarpetaJudicial()) . '';
                    $json .= ',"numero":' . json_encode($carpetas->getNumero()) . '';
                    $json .= ',"anio":' . json_encode($carpetas->getAnio()) . '';
                    $json .= ',"fechaRegistro":' . json_encode($carpetas->getFechaRegistro()) . '';
                    $json .= ',"CarpetaInv":' . json_encode($carpetas->getCarpetaInv()) . '';
                    $json .= ',"nuc":' . json_encode($carpetas->getNuc()) . '';
                    
                    ##Consignacion
                    $consignacionDto->setCveConsignacion($carpetas->getCveConsignacion());
                    $consignacionres=$consignacionDao->selectConsignaciones($consignacionDto,"", $this->proveedor);
                    if($consignacionres !=""){
                        $json .= ',"consignacion":' . json_encode($consignacionres[0]->getDesConsignacion()) . '';
                    }else{
                        $json .= ',"consignacion":"N/A"';
                    }
                    ##imputado
                    $json .= ',"relacion":[';
                    $impofedelDto->setIdCarpetaJudicial($carpetas->getIdCarpetaJudicial());
                    $impofedelres=$impofedelDao->selectImpofedelcarpetas($impofedelDto,"", $this->proveedor);
                    $co=1;
                    if($impofedelres != ""){
                        foreach ($impofedelres as $impofedel) {
                            $json .= "{";
                            $json .= '"idimpofedel":' . json_encode(utf8_encode($impofedel->getIdImpOfeDelCarpeta())) . ",";
                            $json .= '"imputado":[';

                                $imputadosCarpetasDto->setIdImputadoCarpeta($impofedel->getIdImputadoCarpeta());
                                $rsImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, $letraCondicion,$this->proveedor);
                                if ($rsImputadosCarpetas) {
                                    $n2 = 1;
                                    foreach ($rsImputadosCarpetas as $imputado) {
                                        $json .= "{";
                                        $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($imputado->getIdCarpetaJudicial())) . ",";
                                        $json .= '"nombre":'. json_encode(utf8_encode($imputado->getNombre())) . ",";
                                        $json .= '"paterno":'. json_encode(utf8_encode($imputado->getPaterno())) . ",";
                                        $json .= '"materno":'. json_encode(utf8_encode($imputado->getMaterno())) . ",";
                                        $json .= '"CURP":'. json_encode(utf8_encode($imputado->getCurp())) . ",";
                                        $json .= '"cveTipoPersona":'. json_encode(utf8_encode($imputado->getCveTipoPersona())) . ",";
                                        $json .= '"nombreMoral":' . json_encode(utf8_encode($imputado->getNombreMoral())) . ",";
                                        $json .= '"fechaDet":' . json_encode(utf8_encode($imputado->getFechaControlDet())) . "";
                                        $json .=',"alias":'. json_encode(utf8_encode($imputado->getAlias()));
                                        $json .=',"fechaOrden":'. json_encode(utf8_encode($ordenFech));
                                        $json .= "}";
                                        $n2 ++;
                                        if ($n2 <= count($rsImputadosCarpetas)) {
                                            $json .= ",";
                                        }
                                    }
                                }
                                $json .= "],";
                                $json .= '"ofendido":[';
                                $ofendidosCarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                $rsOfendidoCarpetas = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto, '', $this->proveedor);
                                if ($rsOfendidoCarpetas) {
                                    $n3 = 1;
                                    foreach ($rsOfendidoCarpetas as $ofendido) {
                                        $json .= "{";
                                         $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($ofendido->getIdCarpetaJudicial())) . ",";
                                        $json .= '"nombre":'. json_encode(utf8_encode($ofendido->getNombre())) . ",";
                                        $json .= '"paterno":'. json_encode(utf8_encode($ofendido->getPaterno())) . ",";
                                        $json .= '"materno":'. json_encode(utf8_encode($ofendido->getMaterno())) . ",";
                                        $json .= '"CURP":'. json_encode(utf8_encode($ofendido->getCurp())) . ",";
                                        $json .= '"cveTipoPersona":'. json_encode(utf8_encode($ofendido->getCveTipoPersona())) . ",";
                                        $json .= '"nombreMoral":' . json_encode(utf8_encode($ofendido->getNombreMoral())) . "";
                                        $json .= "}" . "\n";
                                        $n3 ++;
                                        if ($n3 <= count($rsOfendidoCarpetas)) {
                                            $json .= ",";
                                        }
                                    }
                                }
                                $json .= "],";
                                $json .= '"delito":[';
                                $delitosCarpetasDto->setIdDelitoCarpeta($impofedel->getIdDelitoCarpeta());
                                $delitosCarpetasDto->setActivo("S");
                                $rsDelitosCarpetas = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
                                if ($rsDelitosCarpetas != "") {
                                    $d=1;
                                    foreach ($rsDelitosCarpetas as $rsDelito) {
                                        $delitosDto->setCveDelito($rsDelito->getCveDelito());
                                        $rsDelitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                                        if ($rsDelitosDto != "") {
                                            $delito = $rsDelitosDto[0]->getDesDelito();
                                        } else {
                                            $delito = "N/A";
                                        }
                                        $json .= "{";
                                        $json .= '"idDelitoCarpeta":' . json_encode(($rsDelito->getIdDelitoCarpeta())) . ",";
                                        $json .= '"idCarpetaJudicial":' . json_encode(($rsDelito->getIdCarpetaJudicial())) . ",";
                                        $json .= '"desDelito":' . json_encode(utf8_encode($delito)) . "";
                                        $json .= "}" . "\n";
                                        $d ++;
                                        if ($d <= count($rsDelitosCarpetas)) {
                                            $json .= ",";
                                        }
                                    }
                                }
                                $json .= "]";
                            $json .= "}";
                            $co ++;
                            if ($co <= count($impofedelres)) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';
                    $json .= '}';
                    $x ++;
                   if ($x <= count($carpetajudicialres)) {
                      $json .= ",";
                    }
                }
                $json .= "]}";
            }else{
                $json .= '{"estatus":"ok2",';
                $json .= '"mnj":"No se encontraron registros."}';
            }
        return $json;
    }
    
    public function libroGobierno2($carpetaJudicialDto, $param = null){
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        
        //var_dump($carpetaJudicialDto);
        $carpetajudicialDao=new CarpetasjudicialesDAO();
        
        $tiposCarpetasDto = new TiposcarpetasDTO();
        $tiposCarpetasDao = new TiposcarpetasDAO();

        $consignacionDto=new ConsignacionesDTO();
        $consignacionDao=new ConsignacionesDAO();

        $imputadosCarpetasDto = new ImputadoscarpetasDTO();
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();

        $ofendidosCarpetasDto = new OfendidoscarpetasDTO();
        $ofendidosCarpetasDao = new OfendidoscarpetasDAO();

        $delitosCarpetasDto = new DelitoscarpetasDTO();
        $delitosCarpetasDao = new DelitoscarpetasDAO();  
        
        $delitosDto = new DelitosDTO();
        $delitosDao = new DelitosDAO();
        
        $carpetajudicialres=$carpetajudicialDao->selectCarpetasjudiciales($carpetaJudicialDto,"AND fechaRegistro >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRegistro <= '" . $param['fechaHasta'] . " 23:59:59' ORDER BY numero, anio", $this->proveedor);
            if($carpetajudicialres != ""){
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($carpetajudicialres) . '",';
                $json .= '"mnj":"' . $mensaje . '",';
                $json .= '"data":[';
                $x=1;
                foreach($carpetajudicialres as $carpetas){
                    $json .= "{";
                    $json .= '"idCarpeta":' . json_encode($carpetas->getIdCarpetaJudicial()) . '';
                    $json .= ',"numero":' . json_encode($carpetas->getNumero()) . '';
                    $json .= ',"anio":' . json_encode($carpetas->getAnio()) . '';
                    $json .= ',"fechaRegistro":' . json_encode($carpetas->getFechaRegistro()) . '';
                    
                    ##TipoCarpeta
                    $tiposCarpetasDto->setCveTipoCarpeta($carpetas->getCveTipoCarpeta());
                    $rsTiposCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto, "",$this->proveedor);
                    if($rsTiposCarpetas != ""){
                        $json .= ',"desCarpeta":' . json_encode($rsTiposCarpetas[0]->getDesTipoCarpeta()) . '';
                    }else{
                        $json .= ',"desCarpeta":"N/A"';
                    }
                    ##Consignacion
                    $consignacionDto->setCveConsignacion($carpetas->getCveConsignacion());
                    $consignacionres=$consignacionDao->selectConsignaciones($consignacionDto,"", $this->proveedor);
                    if($consignacionres != ""){
                        $json .= ',"consignacion":' . json_encode($consignacionres[0]->getDesConsignacion()) . '';
                    }else{
                        $json .= ',"consignacion":"N/A"';
                    }
                    $imputadosCarpetasDto->setIdCarpetaJudicial($carpetas->getIdCarpetaJudicial());
                    $imputadosCarpetasDto->setActivo("S");
                    $rsImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, $letraCondicion,$this->proveedor);
                    $json .= ',"imputados":[';
                    if ($rsImputadosCarpetas) {
                        $n2 = 1;
                        foreach ($rsImputadosCarpetas as $imputado) {
                            $json .= "{";
                            $json .= '"nombre":'. json_encode(utf8_encode($imputado->getNombre())) . ",";
                            $json .= '"paterno":'. json_encode(utf8_encode($imputado->getPaterno())) . ",";
                            $json .= '"materno":'. json_encode(utf8_encode($imputado->getMaterno())) . ",";
                            $json .= '"cveTipoPersona":'. json_encode(utf8_encode($imputado->getCveTipoPersona())) . ",";
                            $json .= '"nombreMoral":' . json_encode(utf8_encode($imputado->getNombreMoral())) . ",";
                            $json .= '"fechaDet":' . json_encode(utf8_encode($imputado->getFechaControlDet())) . ",";
                            $json .= '"alias":'. json_encode(utf8_encode($imputado->getAlias()));
                            $json .= "}";
                            $n2 ++;
                            if ($n2 <= count($rsImputadosCarpetas)) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= "]";
                    ##Ofendido
                    $ofendidosCarpetasDto->setIdCarpetaJudicial($carpetas->getIdCarpetaJudicial());
                    $rsOfendidoCarpetas = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto, '', $this->proveedor);
                    $json .= ',"ofendidos":[';
                    if ($rsOfendidoCarpetas) {
                        $n3 = 1;
                        foreach ($rsOfendidoCarpetas as $ofendido) {
                            $json .= "{";
                            $json .= '"nombre":'. json_encode(utf8_encode($ofendido->getNombre())) . ",";
                            $json .= '"paterno":'. json_encode(utf8_encode($ofendido->getPaterno())) . ",";
                            $json .= '"materno":'. json_encode(utf8_encode($ofendido->getMaterno())) . ",";
                            $json .= '"cveTipoPersona":'. json_encode(utf8_encode($ofendido->getCveTipoPersona())) . ",";
                            $json .= '"nombreMoral":' . json_encode(utf8_encode($ofendido->getNombreMoral())) . "";
                            $json .= "}";
                            $n3 ++;
                            if ($n3 <= count($rsOfendidoCarpetas)) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= "]";
                    ##Delito
                    $delitosCarpetasDto->setIdCarpetaJudicial($carpetas->getIdCarpetaJudicial());
                    $delitosCarpetasDto->setActivo("S");

                    $rsDelitosCarpetas = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
                    $json .= ',"delitos":[';
                    if ($rsDelitosCarpetas != "") {
                        $d=1;
                        foreach ($rsDelitosCarpetas as $rsDelito) {
                            $delitosDto->setCveDelito($rsDelito->getCveDelito());
                            $rsDelitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                            if ($rsDelitosDto != "") {
                                $delito = $rsDelitosDto[0]->getDesDelito();
                            }else {
                                $delito = "N/A";
                            }
                            $json .= "{";
                            $json .= '"idDelitoCarpeta":' . json_encode(($rsDelito->getIdDelitoCarpeta())) . ",";
                            $json .= '"desDelito":' . json_encode(utf8_encode($delito)) . "";
                            $json .= "}";
                            $d ++;
                            if ($d <= count($rsDelitosCarpetas)) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= "]";
                    $json .= '}';
                    $x ++;
                   if ($x <= count($carpetajudicialres)) {
                      $json .= ",";
                    }
                }
                $json .= "]}";
            }else{
                $json .= '{"estatus":"ok2",';
                $json .= '"mnj":"No se encontraron registros."}';
            }
        return $json;
    }

    public function libroAmparos($amparosDto, $param = null, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $AmparosDao = new AmparosDAO();

        $json = "";
        $rsAmparos = $AmparosDao->selectAmparos($amparosDto, "AND fechaRegistro >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRegistro <= '" . $param['fechaHasta'] . " 23:59:59' ORDER BY numAmparo, aniAmparo", $this->proveedor);
        if ($rsAmparos != "") {
            $json .= '{"estatus":"ok",';
            $json .= '"totalCount":"' . count($rsAmparos) . '",';
            $json .= '"resultados":[';
            $n1 = 1;
            $tiposAmparosDto = new TipoamparoDTO();
            $tiposAmparosDao = new TipoamparoDAO();

            foreach ($rsAmparos as $amparo) {
                $tiposAmparosDto->setCveTipoAmparo($amparo->getCveTipoAmparo());
                $rsTiposAmparos = $tiposAmparosDao->selectTipoamparo($tiposAmparosDto, "", $this->proveedor);

                $json .= "{";
                $json .= '"idAmparo":' . json_encode(utf8_encode($amparo->getIdAmparo())) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($amparo->getIdCarpetaJudicial())) . ",";
                $json .= '"numAmparo":' . json_encode(utf8_encode($amparo->getNumAmparo())) . ",";
                $json .= '"aniAmparo":' . json_encode(utf8_encode($amparo->getAniAmparo())) . ",";
                $json .= '"cveTipoAmparo":' . json_encode(utf8_encode($amparo->getCveTipoAmparo())) . ",";
                $json .= '"desTipoAmparo":' . json_encode(utf8_encode($rsTiposAmparos[0]->getDesTipoAmparo())) . ",";
//                //$json .= '"numero":' . json_encode(utf8_encode($actuacion->getNumero())) . ",";
                $json .= '"actoReclamado":' . json_encode(utf8_encode($amparo->getActoReclamado())) . ",";
                $json .= '"autoridadProcedencia":' . json_encode(utf8_encode($amparo->getAutoridadProcedencia())) . ",";
                $json .= '"numeroProcedencia":' . json_encode(utf8_encode($amparo->getNumeroProcedencia())) . ",";
                $json .= '"numOficio":' . json_encode(utf8_encode($amparo->getNumOficio())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($amparo->getCveJuzgado())) . ",";
                //$json .= '"cveUsuario":' . json_encode(utf8_encode($actuacion->getCveUsuario())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($amparo->getFechaRegistro())) . ",";
                $json .= '"observaciones":' . json_encode(utf8_encode($amparo->getObservaciones())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($amparo->getActivo())) . ",";

                //Quejosos
                $json .= '"quejosos":';
                $json .= "{";

                $quejososDto = new QuejososDTO();
                $quejososDao = new QuejososDAO();

                $quejososDto->setIdAmparo($amparo->getIdAmparo());
                $quejososDto->setActivo('S');
                $rsQuejosos = $quejososDao->selectQuejosos($quejososDto, '', $this->proveedor);

                if ($rsQuejosos) {
                    $json .= '"totalCount":"' . count($rsQuejosos) . '",';
                    $json .= '"datos":[';
                    $n2 = 1;
                    foreach ($rsQuejosos as $quejoso) {
                        $json .= "{";
                        $json .= '"idAmparo":' . json_encode(utf8_encode($quejoso->getIdAmparo())) . ",";
                        $json .= '"idQuejoso":' . json_encode(utf8_encode($quejoso->getIdQuejoso())) . ",";
                        // $json .= '"idActuacion":' . json_encode(utf8_encode($quejoso->getIdActuacion())) . ",";
                        // $json .= '"cveTipoParte":' . json_encode(utf8_encode($promovente->getCveTipoParte())) . ",";
                        //  $json .= '"cveTipoPersona":' . json_encode(utf8_encode($promovente->getCveTipoPersona())) . ",";
                        $json .= '"nombre":' . json_encode(utf8_encode($quejoso->getNombreQ())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($quejoso->getPaternoQ())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($quejoso->getMaternoQ())) . ",";
                        //$json .= '"activo":' . json_encode(utf8_encode($promovente->getActivo())) . ",";
                        $json .= '"nombreMoral":' . json_encode(utf8_encode($quejoso->getNombreMoral())) . "";
                        //  $json .= '"cveGenero":' . json_encode(utf8_encode($promovente->getCveGenero())) . "";
                        $json .= "}" . "\n";
                        $n2 ++;
                        if ($n2 <= count($rsQuejosos)) {
                            $json .= ",";
                        }
                    }
                    $json .= "]";
                } else {
                    $json .= '"totalCount":"0", "text":"No se encontraron resultados"';
                }
                $json .= "},";


//                Terceros Perjudicados
                $json .= '"tercerosPerjudicados":';
                $json .= "{";

                $perjudicadosDto = new TercerosperjudicadosDTO();
                $perjudicadosDao = new TercerosperjudicadosDAO();

                $perjudicadosDto->setIdAmparo($amparo->getIdAmparo());
                $perjudicadosDto->setActivo('S');
                $rsPerjudicados = $perjudicadosDao->selectTercerosperjudicados($perjudicadosDto, "", $this->proveedor);

                if ($rsPerjudicados) {
                    $json .= '"totalCount":"' . count($rsPerjudicados) . '",';
                    $json .= '"datos":[';
                    $n3 = 1;
                    foreach ($rsPerjudicados as $perjudicado) {
                        $json .= "{";
                        $json .= '"idAmparo":' . json_encode(utf8_encode($perjudicado->getIdAmparo())) . ",";
                        $json .= '"idPerjudicado":' . json_encode(utf8_encode($perjudicado->getIdTercero())) . ",";
//                       // $json .= '"idActuacion":' . json_encode(utf8_encode($quejoso->getIdActuacion())) . ",";
//                       // $json .= '"cveTipoParte":' . json_encode(utf8_encode($promovente->getCveTipoParte())) . ",";
//                      //  $json .= '"cveTipoPersona":' . json_encode(utf8_encode($promovente->getCveTipoPersona())) . ",";
                        $json .= '"nombre":' . json_encode(utf8_encode($perjudicado->getNombreT())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($perjudicado->getPaternoT())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($perjudicado->getMaternoT())) . ",";
//                        //$json .= '"activo":' . json_encode(utf8_encode($promovente->getActivo())) . ",";
                        $json .= '"nombreMoral":' . json_encode(utf8_encode($perjudicado->getNombreMoral())) . "";
//                      //  $json .= '"cveGenero":' . json_encode(utf8_encode($promovente->getCveGenero())) . "";
                        $json .= "}" . "\n";
                        $n3 ++;
                        if ($n3 <= count($rsPerjudicados)) {
                            $json .= ",";
                        }
                    }
                    $json .= "]";
                } else {
                    $json .= '"totalCount":"0", "text":"No se encontraron resultados"';
                }
                $json .= "}"; //fin terceros
                //antecedes
//                $antecedesDto = new AntecedescarpetasDTO();
//                $antecedesDao = new AntecedescarpetasDAO();

                $carpetasJDto = new CarpetasjudicialesDTO();
                $carpetasJDao = new CarpetasjudicialesDAO();

                $tiposCarpetasDto = new TiposcarpetasDTO();
                $tiposCarpetasDao = new TiposcarpetasDAO();
                
                $delitosCarpetasDto = new DelitoscarpetasDTO();
                $delitosCarpetasDao = new DelitoscarpetasDAO();  
        
                $delitosDto = new DelitosDTO();
                $delitosDao = new DelitosDAO();

                if ($amparo->getIdCarpetaJudicial() != "" && $amparo->getIdCarpetaJudicial() != null ) {
                    $json .= ', "antecedes":{';
                    $carpetasJDto->setIdCarpetaJudicial($amparo->getIdCarpetaJudicial());
                        $carpetasJDto->setActivo('S');
                            $rsCarpetasJ = $carpetasJDao->selectCarpetasjudiciales($carpetasJDto, '', $this->proveedor);
                    if ($rsCarpetasJ) {
                            $tiposCarpetasDto->setActivo('S');
                            $tiposCarpetasDto->setCveTipoCarpeta($rsCarpetasJ[0]->getcveTipoCarpeta());
                            $rsTiposCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto, " ", $this->proveedor);
                            
                            //delitos
                        $delitosCarpetasDto->setIdCarpetaJudicial($amparo->getIdCarpetaJudicial());
                        $delitosCarpetasDto->setActivo('S');
                        $rsDelitosCarpetas = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, " ", $this->proveedor);
                        
                        $delitosDto->setActivo('S');
                        $delitosDto->setCveDelito($rsDelitosCarpetas[0]->getCveDelito());
                        $rsDelitos = $delitosDao->selectDelitos($delitosDto, " ", $this->proveedor);
//                        
                        $json .= '"idCarpeta":' . json_encode(utf8_encode($rsCarpetasJ[0]->getidCarpetaJudicial())) . ",";
                        $json .= '"idtipoC":' . json_encode(utf8_encode($rsCarpetasJ[0]->getcveTipoCarpeta())) . ",";

                        if ($rsTiposCarpetas) {
                        $json .= '"tipoC":' . json_encode(utf8_encode($rsTiposCarpetas[0]->getDesTipoCarpeta())) . ",";
                        } else {
                            $json .= '"tipoC":"",';
                        }
                        if ($rsDelitosCarpetas) {
                            $json .= '"cveDelito":' . json_encode(utf8_encode($rsDelitosCarpetas[0]->getCveDelito())) . ",";
                        }//rsDelitos
                        else {
                            $json .= '"cveDelito":"",';
                            }
                        if ($rsDelitos) {
                            $json .= '"delito":' . json_encode(utf8_encode($rsDelitos[0]->getDesDelito())) . ",";
                        } else {
                            $json .= '"delito":"",';
                        }
                        $json .= '"numero":' . json_encode(utf8_encode($rsCarpetasJ[0]->getNumero())) . ",";
                        $json .= '"anio":' . json_encode(utf8_encode($rsCarpetasJ[0]->getAnio())) . " ";
                    }//carpetas
                    else {
                        $json .= '{"totalCount":"0", "text":"No se encontraron resultados"}';
                    }
                $json .= '}';
                }
//                else {
//                    $json .= '{"totalCount":"0", "text":"No se encontraron resultados"} ]';
//                }

//                }


                $json .= "}";
                $n1 ++;
                if ($n1 <= count($rsAmparos)) {
                    $json .= "," . "\n";
                }
            }
            //fin Amparos  
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"totalCount":"0", "text":"No se encontraron resultados"}';
        }
        return $json;
    }

    public function libroIndice($carpetaJudicialDto, $param = null, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $carpetaJudicialDao = new CarpetasjudicialesDAO();
        $json = "";
        $rsCarpetasJudiciales = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, " AND fechaRegistro >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRegistro <= '" . $param['fechaHasta'] . " 23:59:59' ORDER BY numero, anio", $this->proveedor, $param);
        if ($rsCarpetasJudiciales != "") {
            $json .= '{"estatus":"ok",';
            $json .= '"total":"' . count($rsCarpetasJudiciales) . '",';
            $json .= '"resultados":[';
            $n1 = 1;
            $tiposCarpetasDto = new TiposcarpetasDTO();
            $tiposCarpetasDao = new TiposcarpetasDAO();

            $letraCondicion = "AND (paterno like '" . $param['letraAp'] . "%' OR nombreMoral like '" . $param['letraAp'] . "%' )";
            $conta = 0;
            foreach ($rsCarpetasJudiciales as $carpetaJ) {
                $tiposCarpetasDto->setCveTipoCarpeta($carpetaJ->getCveTipoCarpeta());
                $tiposCarpetasDto->setActivo("S");
                $rsTiposCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto, "", $this->proveedor);

                //Imputado 
                $imputadosCarpetasLetraDto = new ImputadoscarpetasDTO();
                $imputadosCarpetasLetraDao = new ImputadoscarpetasDAO();

                $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                $imputadosCarpetasDao = new ImputadoscarpetasDAO();

                $imputadosCarpetasLetraDto->setIdCarpetaJudicial($carpetaJ->getIdCarpetaJudicial());
                $imputadosCarpetasLetraDto->setActivo("S");

                $rsImputadosCarpetasL = $imputadosCarpetasLetraDao->selectImputadoscarpetas($imputadosCarpetasLetraDto, $letraCondicion, $this->proveedor);
                if ($rsImputadosCarpetasL) {

                    $imputadosCarpetasDto->setIdCarpetaJudicial($carpetaJ->getIdCarpetaJudicial());
                    $imputadosCarpetasDto->setActivo("S");
                    $rsImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, '', $this->proveedor);
                    $conta++;
                    if ($conta > 1) {
                        $json .= ",";
                    }
                    $json .= "{";
                    $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($carpetaJ->getIdCarpetaJudicial())) . ",";
                    $json .= '"numero":' . json_encode(utf8_encode($carpetaJ->getNumero())) . ",";
                    $json .= '"anio":' . json_encode(utf8_encode($carpetaJ->getAnio())) . ",";
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($carpetaJ->getFechaRegistro())) . ",";
                    $json .= '"fechaRadicacion":' . json_encode(utf8_encode($carpetaJ->getFechaRadicacion())) . ",";
                    $json .= '"numImputados":' . json_encode(utf8_encode($carpetaJ->getNumImputados())) . ",";
                    $json .= '"numOfendidos":' . json_encode(utf8_encode($carpetaJ->getNumOfendidos())) . ",";
                    $json .= '"numDelitos":' . json_encode(utf8_encode($carpetaJ->getNumDelitos())) . ",";
//                    $json .= '"observaciones":' . json_encode(utf8_encode($carpetaJ->getObservaciones())) . ",";
                    $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($carpetaJ->getCveTipoCarpeta())) . ",";
                    $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($rsTiposCarpetas[0]->getDesTipoCarpeta())) . ",";

                    $json .= '"imputados":';
                    $json .= '[';
                    $n2 = 1;
                    foreach ($rsImputadosCarpetas as $imputado) {
                        $json .= "{";
                        $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($imputado->getIdCarpetaJudicial())) . ",";
                        $json .= '"nombre":' . json_encode(utf8_encode($imputado->getNombre())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($imputado->getPaterno())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($imputado->getMaterno())) . ",";
                        $json .= '"CURP":' . json_encode(utf8_encode($imputado->getCurp())) . ",";
                        $json .= '"cveTipoPersona":' . json_encode(utf8_encode($imputado->getCveTipoPersona())) . ",";
                        $json .= '"nombreMoral":' . json_encode(utf8_encode($imputado->getNombreMoral())) . "";
                        $json .= "}" . "\n";
                        $n2 ++;
                        if ($n2 <= count($rsImputadosCarpetas)) {
                            $json .= ",";
                        }
                    }
                    $json .= "],";
//                } imputados
                    //Ofendidos
                    $json .= '"ofendidos":';
                    $ofendidosCarpetasDto = new OfendidoscarpetasDTO();
                    $ofendidosCarpetasDao = new OfendidoscarpetasDAO();

                    $ofendidosCarpetasDto->setIdCarpetaJudicial($carpetaJ->getIdCarpetaJudicial());
                    $ofendidosCarpetasDto->setActivo('S');
                    $rsOfendidoCarpetas = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto, '', $this->proveedor);
                    if ($rsOfendidoCarpetas) {
                        $json .= '[';
                        $n2 = 1;
                        foreach ($rsOfendidoCarpetas as $ofendido) {
                            $json .= "{";
                            $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($ofendido->getIdCarpetaJudicial())) . ",";
                            $json .= '"nombre":' . json_encode(utf8_encode($ofendido->getNombre())) . ",";
                            $json .= '"paterno":' . json_encode(utf8_encode($ofendido->getPaterno())) . ",";
                            $json .= '"materno":' . json_encode(utf8_encode($ofendido->getMaterno())) . ",";
                            $json .= '"CURP":' . json_encode(utf8_encode($ofendido->getCurp())) . ",";
                            $json .= '"cveTipoPersona":' . json_encode(utf8_encode($ofendido->getCveTipoPersona())) . ",";
                            $json .= '"nombreMoral":' . json_encode(utf8_encode($ofendido->getNombreMoral())) . "";
                            $json .= "}" . "\n";
                            $n2 ++;
                            if ($n2 <= count($rsOfendidoCarpetas)) {
                                $json .= ",";
                            }
                        }
                        $json .= "],";
                    }

                    ##DELITOS
                    $json .= '"delitos":[';
                    $delitosCarpetasDto = new DelitoscarpetasDTO();
                    $delitosCarpetasDao = new DelitoscarpetasDAO();
                    $delitosDto = new DelitosDTO();
                    $delitosDao = new DelitosDAO();

                    $delitosCarpetasDto->setIdCarpetaJudicial($carpetaJ->getIdCarpetaJudicial());
                    $delitosCarpetasDto->setActivo("S");

                    $rsDelitosCarpetas = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
                    if ($rsDelitosCarpetas != "") {
                        $d = 1;
                        foreach ($rsDelitosCarpetas as $rsDelito) {
                            $delitosDto->setCveDelito($rsDelito->getCveDelito());
                            $delitosCarpetasDto->setActivo('S');
                            $rsDelitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                            if ($rsDelitosDto != "") {
                                $delito = $rsDelitosDto[0]->getDesDelito();
                            } else {
                                $delito = "N/A";
                            }
                            $json .= "{";
                            $json .= '"idDelitoCarpeta":' . json_encode(($rsDelito->getIdDelitoCarpeta())) . ",";
                            $json .= '"idCarpetaJudicial":' . json_encode(($rsDelito->getIdCarpetaJudicial())) . ",";
                            $json .= '"descDelito":' . json_encode(utf8_encode($delito)) . "";
                            $json .= "}" . "\n";
                            $d ++;
                            if ($d <= count($rsDelitosCarpetas)) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= "]";
//                //FIN DELITOS

                    $json .= "}" . "\n";
                    $n1 ++;
                }
            }

            $json .= "],";
            $json .= '"totalCount":"' . $conta . '"';
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

}

//$exhortosDto = new ExhortosDTO();
//$param = array();
//
//
//
//$exhortosDto->setCveJuzgado("762");
//$param["fechaInicial"] = "2015-11-15";
//$param["fechaFinal"] = "2016-11-15";
//
//
//$controller = new librosController();
//$controller = $controller->libroExhorto($exhortosDto, $param);
//print_r($controller);
?>
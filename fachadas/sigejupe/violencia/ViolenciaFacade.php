<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/violencia/ViolenciaController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/paises/PaisesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estados/EstadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/municipios/MunicipiosController.Class.php");

//////SEXUALES
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");

/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/modalidadesacosos/ModalidadesacososDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/modalidadesacosos/ModalidadesacososDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ambitosacosos/AmbitosacososDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ambitosacosos/AmbitosacososDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallesconductas/DetallesconductasDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/factoresculturales/FactoresculturalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/factoresculturales/FactoresculturalesDAO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/homicidiosdolosos/HomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/homicidiosdolosos/HomicidiosdolososDAO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");

/////////////////////////


class ViolenciaFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTrataspersonas($TrataspersonasDto) {
        $TrataspersonasDto->setIdTrataPersona(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getIdTrataPersona())))));
        $TrataspersonasDto->setCveEstadoDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getCveEstadoDestino())))));
        $TrataspersonasDto->setCveMunicipioDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getCveMunicipioDestino())))));
        $TrataspersonasDto->setCvePaisDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getCvePaisDestino())))));
        $TrataspersonasDto->setEstadoDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getEstadoDestino())))));
        $TrataspersonasDto->setMunicipioDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getMunicipioDestino())))));
        $TrataspersonasDto->setCveEstadoOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getCveEstadoOrigen())))));
        $TrataspersonasDto->setCveMunicipioOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getCveMunicipioOrigen())))));
        $TrataspersonasDto->setCvePaisOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getCvePaisOrigen())))));
        $TrataspersonasDto->setEstadoOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getEstadoOrigen())))));
        $TrataspersonasDto->setMunicipioOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getMunicipioOrigen())))));
        $TrataspersonasDto->setIdImpOfeDelSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getIdImpOfeDelSolicitud())))));
        $TrataspersonasDto->setCveTipoTrata(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getCveTipoTrata())))));
        $TrataspersonasDto->setCveTrasportacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonasDto->getCveTrasportacion())))));

        return $TrataspersonasDto;
    }

    public function validarSexuales($sexualesDto) {
        $sexualesDto->setIdSexual(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $sexualesDto->getIdSexual())))));
        $sexualesDto->setCveModalidadAcoso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $sexualesDto->getCveModalidadAcoso())))));
        $sexualesDto->setCveAmbitoAcoso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $sexualesDto->getCveAmbitoAcoso())))));
        $sexualesDto->setIdImpOfeDelSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $sexualesDto->getIdImpOfeDelSolicitud())))));
        return $sexualesDto;
    }

    public function validarSexualesconductas($SexualesconductasDto) {
        $SexualesconductasDto->setIdSexualConducta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SexualesconductasDto->getIdSexualConducta())))));
        $SexualesconductasDto->setIdSexual(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SexualesconductasDto->getIdSexual())))));
        $SexualesconductasDto->setCveConducta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SexualesconductasDto->getCveConducta())))));
        return $SexualesconductasDto;
    }

    public function validarDetallessexualesconductas($DetallessexualesconductasDto) {
        $DetallessexualesconductasDto->setIdDetalleSexualConducta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DetallessexualesconductasDto->getIdDetalleSexualConducta())))));
        $DetallessexualesconductasDto->setCveDetalleConducta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DetallessexualesconductasDto->getCveDetalleConducta())))));
        $DetallessexualesconductasDto->setIdSexualConducta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DetallessexualesconductasDto->getIdSexualConducta())))));
        return $DetallessexualesconductasDto;
    }

    public function validarTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto->setIdTestigoSexual(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualesDto->getIdTestigoSexual())))));
        $TestigossexualesDto->setIdSexual(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualesDto->getIdSexual())))));
        $TestigossexualesDto->setPaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualesDto->getPaterno())))));
        $TestigossexualesDto->setMaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualesDto->getMaterno())))));
        $TestigossexualesDto->setNombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualesDto->getNombre())))));
        $TestigossexualesDto->setCveGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualesDto->getCveGenero())))));
        $TestigossexualesDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualesDto->getActivo())))));
        return $TestigossexualesDto;
    }

    public function validarViolenciadegenero($ViolenciadegeneroDto) {
        $ViolenciadegeneroDto->setIdViolenciaDeGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciadegeneroDto->getIdViolenciaDeGenero())))));
        $ViolenciadegeneroDto->setCveEfecto(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciadegeneroDto->getCveEfecto())))));
        $ViolenciadegeneroDto->setIdImpOfeDelSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciadegeneroDto->getIdImpOfeDelSolicitud())))));
        $ViolenciadegeneroDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciadegeneroDto->getActivo())))));
        return $ViolenciadegeneroDto;
    }

    public function validarEfectosofendidos($EfectosofendidosDto) {
        $EfectosofendidosDto->setIdEfectoOfendido(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidosDto->getIdEfectoOfendido())))));
        $EfectosofendidosDto->setCveDetalleEfecto(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidosDto->getCveDetalleEfecto())))));
        $EfectosofendidosDto->setIdImpOfeDelSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidosDto->getIdImpOfeDelSolicitud())))));
        $EfectosofendidosDto->setIdReferencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidosDto->getIdReferencia())))));
        $EfectosofendidosDto->setOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidosDto->getOrigen())))));
        $EfectosofendidosDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidosDto->getActivo())))));
        return $EfectosofendidosDto;
    }

    public function validarViolenciafactoressociales($ViolenciafactoressocialesDto) {
        $ViolenciafactoressocialesDto->setIdViolenciaFactorSocial(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciafactoressocialesDto->getIdViolenciaFactorSocial())))));
        $ViolenciafactoressocialesDto->setCveFactorCultural(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciafactoressocialesDto->getCveFactorCultural())))));
        $ViolenciafactoressocialesDto->setIdViolenciaDeGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciafactoressocialesDto->getIdViolenciaDeGenero())))));
        $ViolenciafactoressocialesDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciafactoressocialesDto->getActivo())))));
        return $ViolenciafactoressocialesDto;
    }

    public function validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto) {
        $ViolenciahomicidiosdolososDto->setIdViolenciaHomicidioDoloso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciahomicidiosdolososDto->getIdViolenciaHomicidioDoloso())))));
        $ViolenciahomicidiosdolososDto->setIdViolenciaDeGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciahomicidiosdolososDto->getIdViolenciaDeGenero())))));
        $ViolenciahomicidiosdolososDto->setCveHomicidioDoloso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciahomicidiosdolososDto->getCveHomicidioDoloso())))));
        $ViolenciahomicidiosdolososDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciahomicidiosdolososDto->getActivo())))));
        return $ViolenciahomicidiosdolososDto;
    }

    ////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////RELACIONES//////////////////////////////////
    public function selectRelacion($TrataspersonasDto) {
        
    }

    ///////////////////////////////TRATA DE PERSONAS//////////////////////////////
    public function insertTrataspersonas($TrataspersonasDto) {
        $json = "";
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        //Se verifica que exista la relacion
        $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
        $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

        $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($TrataspersonasDto->getIdImpOfeDelSolicitud());
        $impOfeDelSolicitudesDto->setActivo("S");
        $rsImpOfeDelSolicitud = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
        if ($rsImpOfeDelSolicitud != "") {
            //Se verifica que la solicitud no este enviada
            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

            $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpOfeDelSolicitud[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
            if ($rsSolicitudAudiencias[0]->getCveEstatusSolicitud() == "1") {

                $ViolenciaController = new ViolenciaController();
                $TrataspersonasAuxDto = $ViolenciaController->selectTrataspersonas($TrataspersonasDto);
                if ($TrataspersonasAuxDto == "") {
                    $TrataspersonasDto = $ViolenciaController->insertTrataspersonas($TrataspersonasDto);
                    $x = 1;
                    if ($TrataspersonasDto != "") {
                        $json .= "{";
                        $json .= '"status":"ok",';
                        $json .= '"totalCount":"' . count($TrataspersonasDto) . '",';
                        $json .= '"data":[';
                        foreach ($TrataspersonasDto as $TratasPersona) {
                            $json .= "{";
                            $json .= '"idTrataPersona":' . json_encode(utf8_encode($TratasPersona->getIdTrataPersona())) . ",";
                            $json .= '"cveEstadoDestino":' . json_encode(utf8_encode($TratasPersona->getCveEstadoDestino())) . ",";
                            $json .= '"cveMunicipioDestino":' . json_encode(utf8_encode($TratasPersona->getCveMunicipioDestino())) . ",";
                            $json .= '"cvePaisDestino":' . json_encode(utf8_encode($TratasPersona->getCvePaisDestino())) . ",";
                            $json .= '"estadoDestino":' . json_encode(utf8_encode($TratasPersona->getEstadoDestino())) . ",";
                            $json .= '"municipioDestino":' . json_encode(utf8_encode($TratasPersona->getMunicipioDestino())) . ",";
                            $json .= '"cveEstadoOrigen":' . json_encode(utf8_encode($TratasPersona->getCveEstadoOrigen())) . ",";
                            $json .= '"cveMunicipioOrigen":' . json_encode(utf8_encode($TratasPersona->getCveMunicipioOrigen())) . ",";
                            $json .= '"cvePaisOrigen":' . json_encode(utf8_encode($TratasPersona->getCvePaisOrigen())) . ",";
                            $json .= '"estadoOrigen":' . json_encode(utf8_encode($TratasPersona->getEstadoOrigen())) . ",";
                            $json .= '"municipioOrigen":' . json_encode(utf8_encode($TratasPersona->getMunicipioOrigen())) . ",";
                            $json .= '"cveTipoTrata":' . json_encode(utf8_encode($TratasPersona->getCveTipoTrata())) . ",";
                            $json .= '"cveTrasportacion":' . json_encode(utf8_encode($TratasPersona->getCveTrasportacion())) . ",";
                            $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($TratasPersona->getIdImpOfeDelSolicitud())) . "";
                            $json .= "}" . "\n";
                            $x ++;
                            if ($x <= count($TrataspersonasDto)) {
                                $json .= ",";
                            }
                        }
                        $json .= "]";
                        $json .= "}";
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"No se encontraron resultados."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"El registro ya se encuentra dado de alta."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"No se puede agregar trata de personas, ya que la solictud se encuentra enviada."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"La relacion no existe. Verifique."}';
        }
        return $json;
    }

    public function updateTratasPersonas($TrataspersonasDto) {
        $json = "";
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $ViolenciaController = new ViolenciaController();

        $TrataPersonasDto = new TrataspersonasDTO();
        $TrataPersonasDao = new TrataspersonasDAO();
        $TrataPersonasDto->setIdTrataPersona($TrataspersonasDto->getIdTrataPersona());
        $raTrata = $TrataPersonasDao->selectTrataspersonas($TrataPersonasDto);
        if ($raTrata != "") {
            //Se verifica que exista la relacion
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

            $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($raTrata[0]->getIdImpOfeDelSolicitud());
            $impOfeDelSolicitudesDto->setActivo("S");
            $rsImpOfeDelSolicitud = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
            if ($rsImpOfeDelSolicitud != "") {
                //Se verifica que la solicitud no este enviada
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

                $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpOfeDelSolicitud[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                if ($rsSolicitudAudiencias[0]->getCveEstatusSolicitud() == "1") {
                    $TrataspersonasDto = $ViolenciaController->updateTratasPersonas($TrataspersonasDto);
                    $x = 1;
                    if ($TrataspersonasDto != "") {
                        $json .= "{";
                        $json .= '"status":"ok",';
                        $json .= '"totalCount":"' . count($TrataspersonasDto) . '",';
                        $json .= '"data":[';
                        foreach ($TrataspersonasDto as $TratasPersona) {
                            $json .= "{";
                            $json .= '"idTrataPersona":' . json_encode(utf8_encode($TratasPersona->getIdTrataPersona())) . ",";
                            $json .= '"cveEstadoDestino":' . json_encode(utf8_encode($TratasPersona->getCveEstadoDestino())) . ",";
                            $json .= '"cveMunicipioDestino":' . json_encode(utf8_encode($TratasPersona->getCveMunicipioDestino())) . ",";
                            $json .= '"cvePaisDestino":' . json_encode(utf8_encode($TratasPersona->getCvePaisDestino())) . ",";
                            $json .= '"estadoDestino":' . json_encode(utf8_encode($TratasPersona->getEstadoDestino())) . ",";
                            $json .= '"municipioDestino":' . json_encode(utf8_encode($TratasPersona->getMunicipioDestino())) . ",";
                            $json .= '"cveEstadoOrigen":' . json_encode(utf8_encode($TratasPersona->getCveEstadoOrigen())) . ",";
                            $json .= '"cveMunicipioOrigen":' . json_encode(utf8_encode($TratasPersona->getCveMunicipioOrigen())) . ",";
                            $json .= '"cvePaisOrigen":' . json_encode(utf8_encode($TratasPersona->getCvePaisOrigen())) . ",";
                            $json .= '"estadoOrigen":' . json_encode(utf8_encode($TratasPersona->getEstadoOrigen())) . ",";
                            $json .= '"municipioOrigen":' . json_encode(utf8_encode($TratasPersona->getMunicipioOrigen())) . ",";
                            $json .= '"cveTipoTrata":' . json_encode(utf8_encode($TratasPersona->getCveTipoTrata())) . ",";
                            $json .= '"cveTrasportacion":' . json_encode(utf8_encode($TratasPersona->getCveTrasportacion())) . ",";
                            $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($TratasPersona->getIdImpOfeDelSolicitud())) . "";
                            $json .= "}" . "\n";
                            $x ++;
                            if ($x <= count($TrataspersonasDto)) {
                                $json .= ",";
                            }
                        }
                        $json .= "]";
                        $json .= "}";
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"No se pudo eliminar."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se puede modificar trata de personas, ya que la solictud se encuentra enviada."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"La relacion no existe. Verifique."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro la trata de personas. Verifique."}';
        }
        return $json;
    }

    public function selectTrataspersonas($TrataspersonasDto) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $ViolenciaController = new ViolenciaController();
        $TrataspersonasDto = $ViolenciaController->selectTrataspersonas($TrataspersonasDto);

        $paisesDto = new PaisesDTO ();
        $paisesDao = new PaisesDAO ();
        $estadosDto = new EstadosDTO ();
        $estadosDao = new EstadosDAO ();
        $municipiosDto = new MunicipiosDTO ();
        $municipiosDao = new MunicipiosDAO ();

        $json = "";
        $x = 1;
        if ($TrataspersonasDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($TrataspersonasDto) . '",';
            $json .= '"data":[';
            foreach ($TrataspersonasDto as $TratasPersona) {
                $paisesDto->setCvePais($TratasPersona->getCvePaisOrigen());
                $rsPaisOrigen = $paisesDao->selectPaises($paisesDto);
                $paisesDto->setCvePais($TratasPersona->getCvePaisDestino());
                $rsPaisDestino = $paisesDao->selectPaises($paisesDto);


                $json .= "{";
                $json .= '"idTrataPersona":' . json_encode(utf8_encode($TratasPersona->getIdTrataPersona())) . ",";
                $json .= '"cveEstadoDestino":' . json_encode(utf8_encode($TratasPersona->getCveEstadoDestino())) . ",";
                $json .= '"cveMunicipioDestino":' . json_encode(utf8_encode($TratasPersona->getCveMunicipioDestino())) . ",";

                if ($TratasPersona->getCveEstadoDestino() != null && $TratasPersona->getCveEstadoDestino() != 0 && $TratasPersona->getCveEstadoDestino() != "") {
                    $estadosDto->setCveEstado($TratasPersona->getCveEstadoDestino());
                    $rsEstadoDestino = $estadosDao->selectEstados($estadosDto);
                    $json .= '"desEstadoDestino":' . json_encode(utf8_encode($rsEstadoDestino[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"desEstadoDestino": "N/A",';
                }

                if ($TratasPersona->getCveMunicipioDestino() != null && $TratasPersona->getCveMunicipioDestino() != 0 && $TratasPersona->getCveMunicipioDestino() != "") {
                    $municipiosDto->setCveMunicipio($TratasPersona->getCveMunicipioDestino());
                    $rsMunicipioDestino = $municipiosDao->selectMunicipios($municipiosDto);
                    $json .= '"desMunicipioDestino":' . json_encode(utf8_encode($rsMunicipioDestino[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"desMunicipioDestino": "N/A",';
                }

                $json .= '"cvePaisDestino":' . json_encode(utf8_encode($TratasPersona->getCvePaisDestino())) . ",";
                if ($rsPaisDestino != "") {
                    $json .= '"desPaisDestino":' . json_encode(utf8_encode($rsPaisDestino [0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPaisDestino": "N/A",';
                }
                $json .= '"estadoDestino":' . json_encode(utf8_encode($TratasPersona->getEstadoDestino())) . ",";
                $json .= '"municipioDestino":' . json_encode(utf8_encode($TratasPersona->getMunicipioDestino())) . ",";
                $json .= '"cveEstadoOrigen":' . json_encode(utf8_encode($TratasPersona->getCveEstadoOrigen())) . ",";
                $json .= '"cveMunicipioOrigen":' . json_encode(utf8_encode($TratasPersona->getCveMunicipioOrigen())) . ",";

                if ($TratasPersona->getCveEstadoOrigen() != null && $TratasPersona->getCveEstadoOrigen() != 0 && $TratasPersona->getCveEstadoOrigen() != "") {
                    $estadosDto->setCveEstado($TratasPersona->getCveEstadoOrigen());
                    $rsEstadoOrigen = $estadosDao->selectEstados($estadosDto);
                    $json .= '"desEstadoOrigen":' . json_encode(utf8_encode($rsEstadoOrigen[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"desEstadoOrigen": "N/A",';
                }

                if ($TratasPersona->getCveMunicipioOrigen() != null && $TratasPersona->getCveMunicipioOrigen() != 0 && $TratasPersona->getCveMunicipioOrigen() != "") {
                    $municipiosDto->setCveMunicipio($TratasPersona->getCveMunicipioOrigen());
                    $rsMunicipioOrigen = $municipiosDao->selectMunicipios($municipiosDto);
                    $json .= '"desMunicipioOrigen":' . json_encode(utf8_encode($rsMunicipioOrigen[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"desMunicipioOrigen": "N/A",';
                }


                $json .= '"cvePaisOrigen":' . json_encode(utf8_encode($TratasPersona->getCvePaisOrigen())) . ",";
                if ($rsPaisOrigen != "") {
                    $json .= '"desPaisOrigen":' . json_encode(utf8_encode($rsPaisOrigen [0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPaisOrigen": "N/A",';
                }
                $json .= '"estadoOrigen":' . json_encode(utf8_encode($TratasPersona->getEstadoOrigen())) . ",";
                $json .= '"municipioOrigen":' . json_encode(utf8_encode($TratasPersona->getMunicipioOrigen())) . ",";
                $json .= '"cveTipoTrata":' . json_encode(utf8_encode($TratasPersona->getCveTipoTrata())) . ",";
                $json .= '"cveTrasportacion":' . json_encode(utf8_encode($TratasPersona->getCveTrasportacion())) . ",";
                $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($TratasPersona->getIdImpOfeDelSolicitud())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($TrataspersonasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"Error al consultar la informacion."}';
        }
        return $json;
    }

//////////////////////SEXUALES
    public function insertSexuales($SexualesDto) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $ViolenciaController = new ViolenciaController();
        $json = "";
        $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
        $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();
        //Se verifica que si exista la relacion
        $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($SexualesDto->getIdImpOfeDelSolicitud());
        $impOfeDelSolicitudesDto->setActivo("S");
        $rsImpofedelSolicitudes = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
        if ($rsImpofedelSolicitudes != "") {
            //Se verifica el estatus de la solicitud            
            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpofedelSolicitudes[0]->getIdSolicitudAudiencia());
            $rsSolicitudesAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
            if ($rsSolicitudesAudiencias[0]->getCveEstatusSolicitud() == "1") {
                $rsValidaSexualesDto = $ViolenciaController->selectSexuales($SexualesDto);
                if ($rsValidaSexualesDto == "") {
                    $SexualesDto = $ViolenciaController->insertSexuales($SexualesDto);
                    $x = 1;
                    if ($SexualesDto != "") {
                        $json .= "{";
                        $json .= '"status":"ok",';
                        $json .= '"totalCount":"' . count($SexualesDto) . '",';
                        $json .= '"data":[';
                        foreach ($SexualesDto as $Sexual) {
                            $json .= "{";
                            $json .= '"idSexual":' . json_encode(utf8_encode($Sexual->getIdSexual())) . ",";
                            $json .= '"cveModalidadAcoso":' . json_encode(utf8_encode($Sexual->getCveModalidadAcoso())) . ",";
                            $json .= '"cveAmbitoAcoso":' . json_encode(utf8_encode($Sexual->getCveAmbitoAcoso())) . ",";
                            $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($Sexual->getIdImpOfeDelSolicitud())) . "";
                            $json .= "}" . "\n";
                            $x ++;
                            if ($x <= count($SexualesDto)) {
                                $json .= ",";
                            }
                        }
                        $json .= "]";
                        $json .= "}";
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"No se registro."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"El registro ya se encuentra dado de alta."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"No se puede agregar la modalidad, ya que la solicitud se encuentra enviada."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro la relacion. Verifique."}';
        }
        return $json;
    }

    public function selectSexuales($SexualesDto) {
        $SexualesDto = $this->
                validarSexuales($SexualesDto);
        $ViolenciaController = new ViolenciaController();
        $SexualesDto = $ViolenciaController->selectSexuales($SexualesDto);

        $ambitoAcosoDto = new AmbitosacososDTO();
        $ambitoAcosoDao = new AmbitosacososDAO();

        $modalidadAcosoDto = new ModalidadesacososDTO();
        $modalidadAcosoDao = new ModalidadesacososDAO();

        $json = "";
        $x = 1;
        if ($SexualesDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($SexualesDto) . '",';
            $json .= '"data":[';
            foreach ($SexualesDto as $Sexual) {
                $ambitoAcosoDto->setCveAmbitoAcoso($Sexual->getCveAmbitoAcoso());
                $rsAmbito = $ambitoAcosoDao->selectAmbitosacosos($ambitoAcosoDto);

                $modalidadAcosoDto->setCveModalidadAcoso($Sexual->getCveModalidadAcoso());
                $rsModalidad = $modalidadAcosoDao->selectModalidadesacosos($modalidadAcosoDto);


                $json .= "{";
                $json .= '"idSexual":' . json_encode(utf8_encode($Sexual->getIdSexual())) . ",";
                $json .= '"cveModalidadAcoso":' . json_encode(utf8_encode($Sexual->getCveModalidadAcoso())) . ",";
                if ($rsModalidad != "") {
                    $json .= '"desModalidad":' . json_encode(utf8_encode($rsModalidad [0]->getDesModalidadAcoso())) . ",";
                } else {
                    $json .= '"desModalidad": "N/A",';
                }
                $json .= '"cveAmbitoAcoso":' . json_encode(utf8_encode($Sexual->getCveAmbitoAcoso())) . ",";
                if ($rsAmbito != "") {
                    $json .= '"desAmbito":' . json_encode(utf8_encode($rsAmbito [0]->getDesAmbitoAcoso())) . ",";
                } else {
                    $json .= '"desAmbito": "N/A",';
                }
                $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($Sexual->getIdImpOfeDelSolicitud())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($SexualesDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se registro."}';
        }
        return $json;
    }

    public function eliminarSexual($SexualesDto) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $ViolenciaController = new ViolenciaController();
        $SexualesDto = $ViolenciaController->eliminaSexuales($SexualesDto);
        return $SexualesDto;
    }

    public function updateSexuales($SexualesDto) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $ViolenciaController = new ViolenciaController();
        $json = "";


        $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
        $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();
        //Se verifica que si exista la relacion
        $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($SexualesDto->getIdImpOfeDelSolicitud());
        $impOfeDelSolicitudesDto->setActivo("S");
        $rsImpofedelSolicitudes = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
        if ($rsImpofedelSolicitudes != "") {
            //Se verifica el estatus de la solicitud            
            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpofedelSolicitudes[0]->getIdSolicitudAudiencia());
            $rsSolicitudesAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
            if ($rsSolicitudesAudiencias[0]->getCveEstatusSolicitud() == "1") {

                $SexualesAuxDto = new SexualesDTO();
                $SexualesAuxDto->setCveModalidadAcoso($SexualesDto->getCveModalidadAcoso());
                $SexualesAuxDto->setCveAmbitoAcoso($SexualesDto->getCveAmbitoAcoso());
                $SexualesAuxDto->setIdImpOfeDelSolicitud($SexualesDto->getIdImpOfeDelSolicitud());
                $SexualesAuxDto->setActivo('S');
                $rsValidaSexualesDto = $ViolenciaController->selectSexuales($SexualesAuxDto);
                if ($rsValidaSexualesDto == "") {
                    $SexualesDto = $ViolenciaController->updateSexuales($SexualesDto);
                    $x = 1;
                    if ($SexualesDto != "") {
                        $json .= "{";
                        $json .= '"status":"ok",';
                        $json .= '"totalCount":"' . count($SexualesDto) . '",';
                        $json .= '"data":[';
                        foreach ($SexualesDto as $Sexual) {
                            $json .= "{";
                            $json .= '"idSexual":' . json_encode(utf8_encode($Sexual->getIdSexual())) . ",";
                            $json .= '"cveModalidadAcoso":' . json_encode(utf8_encode($Sexual->getCveModalidadAcoso())) . ",";
                            $json .= '"cveAmbitoAcoso":' . json_encode(utf8_encode($Sexual->getCveAmbitoAcoso())) . ",";
                            $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($Sexual->getIdImpOfeDelSolicitud())) . "";
                            $json .= "}" . "\n";
                            $x ++;
                            if ($x <= count($SexualesDto)) {
                                $json .= ",";
                            }
                        }
                        $json .= "]";
                        $json .= "}";
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"No se registro."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"el registro ya se encuentra dado de alta."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"No se puede modificar la modalidad, ya que la solicitud se encuentra enviada."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro la relacion. Verifique."}';
        }
        return $json;
    }

////////////////////CONDUCTAS////////////////////////////////
    public function guardarConductas($sexualesconductasDto, $detallessexualesconductasDto) {

        $sexualesconductasDto = $this->validarSexualesconductas($sexualesconductasDto);
        $detallessexualesconductasDto = $this->validarDetallessexualesconductas($detallessexualesconductasDto);
        $ViolenciaController = new ViolenciaController();
        $rs = $ViolenciaController->insertConductas($sexualesconductasDto, $detallessexualesconductasDto);
        return $rs;
    }

    public function updateConductas($sexualesconductasDto, $detallessexualesconductasDto) {

        $sexualesconductasDto = $this->validarSexualesconductas($sexualesconductasDto);
        $detallessexualesconductasDto = $this->validarDetallessexualesconductas($detallessexualesconductasDto);
        $ViolenciaController = new ViolenciaController();
        $rs = $ViolenciaController->updateConductas($sexualesconductasDto, $detallessexualesconductasDto);
        return $rs;
    }

    public function eliminarConducta($sexualesconductasDto, $detallessexualesconductasDto) {

        $sexualesconductasDto = $this->validarSexualesconductas($sexualesconductasDto);
        $detallessexualesconductasDto = $this->validarDetallessexualesconductas($detallessexualesconductasDto);
        $ViolenciaController = new ViolenciaController();
        $rs = $ViolenciaController->eliminarConducta($sexualesconductasDto, $detallessexualesconductasDto);
        return $rs;
    }

    public function selectConductas($sexualesconductasDto, $detallessexualesconductasDto) {

        $sexualesconductasDto = $this->validarSexualesconductas($sexualesconductasDto);
        $detallessexualesconductasDto = $this->validarDetallessexualesconductas($detallessexualesconductasDto);
        $ViolenciaController = new ViolenciaController();
        $rs = $ViolenciaController->selectConductas($sexualesconductasDto, $detallessexualesconductasDto);
        return $rs;
    }

///////////////////////////////TESTIGOS/////////////////////////////////////////////////
    public function insertTestigossexuales($TestigossexualesDto) {

        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $ViolenciaController = new ViolenciaController();
        $json = "";


        //Se verifica que exista la conducta sexual
        $sexualesDto = new SexualesDTO();
        $sexualesDao = new SexualesDAO();
        $sexualesDto->setIdSexual($TestigossexualesDto->getIdSexual());
        $rsSexuales = $sexualesDao->selectSexuales($sexualesDto);
        if ($rsSexuales != "") {
            //Se verifica que exista la relacion
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();
            //Se verifica que si exista la relacion
            $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsSexuales[0]->getIdImpOfeDelSolicitud());
            $impOfeDelSolicitudesDto->setActivo("S");
            $rsImpofedelSolicitudes = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
            if ($rsImpofedelSolicitudes != "") {
                //Se verifica el estatus de la solicitud            
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
                $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpofedelSolicitudes[0]->getIdSolicitudAudiencia());
                $rsSolicitudesAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                if ($rsSolicitudesAudiencias[0]->getCveEstatusSolicitud() == "1") {
                    $rsValidaTestigos = $ViolenciaController->selectTestigossexuales($TestigossexualesDto);
                    if ($rsValidaTestigos == "") {
                        $rsTestigossexualesDto = $ViolenciaController->insertTestigossexuales($TestigossexualesDto);
                        $x = 1;
                        if ($rsTestigossexualesDto != "") {
                            $json .= "{";
                            $json .= '"status":"ok",';
                            $json .= '"totalCount":"' . count($rsTestigossexualesDto) . '",';
                            $json .= '"data":[';
                            foreach ($rsTestigossexualesDto as $rsTestigosexual) {
                                $json .= "{";
                                $json .= '"idTestigoSexual":' . json_encode(utf8_encode($rsTestigosexual->getIdTestigoSexual())) . ",";
                                $json .= '"idSexual":' . json_encode(utf8_encode($rsTestigosexual->getIdSexual())) . ",";
                                $json .= '"paterno":' . json_encode(utf8_encode($rsTestigosexual->getPaterno())) . ",";
                                $json .= '"materno":' . json_encode(utf8_encode($rsTestigosexual->getMaterno())) . ",";
                                $json .= '"nombre":' . json_encode(utf8_encode($rsTestigosexual->getNombre())) . ",";
                                $json .= '"cveGenero":' . json_encode(utf8_encode($rsTestigosexual->getCveGenero())) . "";
                                $json .= "}" . "\n";
                                $x ++;
                                if ($x <= count($rsTestigossexualesDto)) {
                                    $json .= ",";
                                }
                            }
                            $json .= "]";
                            $json .= "}";
                        } else {
                            $json .= '{"status":"Fail",';
                            $json .= '"mnj":"No se registro."}';
                        }
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"El testigo ya se encuentra registrado."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se puede agregar al testigo, ya que la solicitud se encuentra enviada."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"No se encontro la relacion. Verifique."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro la consucta s-exual. Verifique"}';
        }
        return $json;
    }

    public function updateTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $ViolenciaController = new ViolenciaController();
        $json = "";

        //Se verifica que exista la conducta sexual
        $sexualesDto = new SexualesDTO();
        $sexualesDao = new SexualesDAO();
        $sexualesDto->setIdSexual($TestigossexualesDto->getIdSexual());
        $rsSexuales = $sexualesDao->selectSexuales($sexualesDto);
        if ($rsSexuales != "") {
            //Se verifica que exista la relacion
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();
            //Se verifica que si exista la relacion
            $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsSexuales[0]->getIdImpOfeDelSolicitud());
            $impOfeDelSolicitudesDto->setActivo("S");
            $rsImpofedelSolicitudes = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
            if ($rsImpofedelSolicitudes != "") {
                //Se verifica el estatus de la solicitud            
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
                $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpofedelSolicitudes[0]->getIdSolicitudAudiencia());
                $rsSolicitudesAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                if ($rsSolicitudesAudiencias[0]->getCveEstatusSolicitud() == "1") {
                    $TestigossexualesAuxDto = new TestigossexualesDTO();
                    $TestigossexualesAuxDto->setIdSexual($TestigossexualesDto->getIdSexual());
                    $TestigossexualesAuxDto->setPaterno($TestigossexualesDto->getPaterno());
                    $TestigossexualesAuxDto->setMaterno($TestigossexualesDto->getMaterno());
                    $TestigossexualesAuxDto->setNombre($TestigossexualesDto->getNombre());
                    $TestigossexualesAuxDto->setCveGenero($TestigossexualesDto->getCveGenero());
                    $TestigossexualesAuxDto->setActivo('S');
                    $rsValidaTestigos = $ViolenciaController->selectTestigossexuales($TestigossexualesAuxDto);
                    if ($rsValidaTestigos == "") {
                        $rsTestigossexualesDto = $ViolenciaController->updateTestigossexuales($TestigossexualesDto);
                        $x = 1;
                        if ($rsTestigossexualesDto != "") {
                            $json .= "{";
                            $json .= '"status":"ok",';
                            $json .= '"totalCount":"' . count($rsTestigossexualesDto) . '",';
                            $json .= '"data":[';
                            foreach ($rsTestigossexualesDto as $rsTestigosexual) {
                                $json .= "{";
                                $json .= '"idTestigoSexual":' . json_encode(utf8_encode($rsTestigosexual->getIdTestigoSexual())) . ",";
                                $json .= '"idSexual":' . json_encode(utf8_encode($rsTestigosexual->getIdSexual())) . ",";
                                $json .= '"paterno":' . json_encode(utf8_encode($rsTestigosexual->getPaterno())) . ",";
                                $json .= '"materno":' . json_encode(utf8_encode($rsTestigosexual->getMaterno())) . ",";
                                $json .= '"nombre":' . json_encode(utf8_encode($rsTestigosexual->getNombre())) . ",";
                                $json .= '"cveGenero":' . json_encode(utf8_encode($rsTestigosexual->getCveGenero())) . "";
                                $json .= "}" . "\n";
                                $x ++;
                                if ($x <= count($rsTestigossexualesDto)) {
                                    $json .= ",";
                                }
                            }
                            $json .= "]";
                            $json .= "}";
                        } else {
                            $json .= '{"status":"Fail",';
                            $json .= '"mnj":"No se registro."}';
                        }
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"El testigo ya se encuentra registrado."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se puede eliminar al testigo, ya que la solicitud se encuentra enviada."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"No se encontro la relacion. Verifique."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro la consucta s-exual. Verifique"}';
        }
        return $json;
    }

    public function deleteTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $ViolenciaController = new ViolenciaController();
        $json = "";
        //Se verifica que exista la conducta sexual
        $sexualesDto = new SexualesDTO();
        $sexualesDao = new SexualesDAO();

        $TestigosSexualesAuxDto = new TestigossexualesDTO();
        $TestigosSexualesDao = new TestigossexualesDAO();

        $TestigosSexualesAuxDto->setIdTestigoSexual($TestigossexualesDto->getIdTestigoSexual());
        $rsTestigosSexuales = $TestigosSexualesDao->selectTestigossexuales($TestigosSexualesAuxDto);
        if ($rsTestigosSexuales != "") {
            $sexualesDto->setIdSexual($rsTestigosSexuales[0]->getIdSexual());
            $sexualesDto->setActivo("S");
//            print_r($sexualesDto);
            $rsSexuales = $sexualesDao->selectSexuales($sexualesDto);
            if ($rsSexuales != "") {
                //Se verifica que exista la relacion
                $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
                $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();
                //Se verifica que si exista la relacion
                $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsSexuales[0]->getIdImpOfeDelSolicitud());
                $impOfeDelSolicitudesDto->setActivo("S");
                $rsImpofedelSolicitudes = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
                if ($rsImpofedelSolicitudes != "") {
                    //Se verifica el estatus de la solicitud            
                    $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                    $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
                    $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpofedelSolicitudes[0]->getIdSolicitudAudiencia());
                    $rsSolicitudesAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                    if ($rsSolicitudesAudiencias[0]->getCveEstatusSolicitud() == "1") {
                        $TestigossexualesDto->setActivo('N');
                        $rsTestigossexualesDto = $ViolenciaController->updateTestigossexuales($TestigossexualesDto);
                        $x = 1;
                        if ($rsTestigossexualesDto != "") {
                            $json .= "{";
                            $json .= '"status":"ok",';
                            $json .= '"totalCount":"' . count($rsTestigossexualesDto) . '",';
                            $json .= '"data":[';
                            foreach ($rsTestigossexualesDto as $rsTestigosexual) {
                                $json .= "{";
                                $json .= '"idTestigoSexual":' . json_encode(utf8_encode($rsTestigosexual->getIdTestigoSexual())) . ",";
                                $json .= '"idSexual":' . json_encode(utf8_encode($rsTestigosexual->getIdSexual())) . ",";
                                $json .= '"paterno":' . json_encode(utf8_encode($rsTestigosexual->getPaterno())) . ",";
                                $json .= '"materno":' . json_encode(utf8_encode($rsTestigosexual->getMaterno())) . ",";
                                $json .= '"nombre":' . json_encode(utf8_encode($rsTestigosexual->getNombre())) . ",";
                                $json .= '"cveGenero":' . json_encode(utf8_encode($rsTestigosexual->getCveGenero())) . "";
                                $json .= "}" . "\n";
                                $x ++;
                                if ($x <= count($rsTestigossexualesDto)) {
                                    $json .= ",";
                                }
                            }
                            $json .= "]";
                            $json .= "}";
                        } else {
                            $json .= '{"status":"Fail",';
                            $json .= '"mnj":"No se registro."}';
                        }
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"No se puede eliminar al testigo, ya que la solicitud se encuentra enviada."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se encontro la relacion. Verifique."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"No se encontro la consucta s-exual. Verifique"}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro el testigo sexual. Verifique"}';
        }
        return $json;
    }

    public function selectTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $ViolenciaController = new ViolenciaController();
        $rsTestigossexualesDto = $ViolenciaController->selectTestigossexuales($TestigossexualesDto);
        $json = "";
        $x = 1;
        if ($rsTestigossexualesDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($rsTestigossexualesDto) . '",';
            $json .= '"data":[';
            foreach ($rsTestigossexualesDto as $rsTestigosexual) {
                $json .= "{";
                $json .= '"idTestigoSexual":' . json_encode(utf8_encode($rsTestigosexual->getIdTestigoSexual())) . ",";
                $json .= '"idSexual":' . json_encode(utf8_encode($rsTestigosexual->getIdSexual())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($rsTestigosexual->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($rsTestigosexual->getMaterno())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($rsTestigosexual->getNombre())) . ",";
                $json .= '"cveGenero":' . json_encode(utf8_encode($rsTestigosexual->getCveGenero())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($rsTestigossexualesDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se registro."}';
        }
        return $json;
    }

////////////////////////Efectos/////////////////////////////////////////

    public function guardaEfectosViolencia($violenciadegeneroDto, $efectosofendidosDto) {

        $violenciadegeneroDto = $this->validarViolenciadegenero($violenciadegeneroDto);
        $efectosofendidosDto = $this->validarEfectosofendidos($efectosofendidosDto);
        $ViolenciaController = new ViolenciaController();
        $rs = $ViolenciaController->guardaEfectosViolencia($violenciadegeneroDto, $efectosofendidosDto);
        return $rs;
    }

    public function modificaEfectosViolencia($violenciadegeneroDto, $efectosofendidosDto) {

        $violenciadegeneroDto = $this->validarViolenciadegenero($violenciadegeneroDto);
        $efectosofendidosDto = $this->validarEfectosofendidos($efectosofendidosDto);
        $ViolenciaController = new ViolenciaController();
        $rs = $ViolenciaController->modificaEfectosViolencia($violenciadegeneroDto, $efectosofendidosDto);
        return $rs;
    }

    public function consultaEfectos($violenciadegeneroDto, $efectosofendidosDto) {
        $violenciadegeneroDto = $this->validarViolenciadegenero($violenciadegeneroDto);
        $efectosofendidosDto = $this->validarEfectosofendidos($efectosofendidosDto);
        $ViolenciaController = new ViolenciaController();
        $rs = $ViolenciaController->consultaEfectos($violenciadegeneroDto, $efectosofendidosDto);
        return $rs;
    }

    public function eliminarEfecto($violenciadegeneroDto, $efectosofendidosDto) {


        $violenciadegeneroDto = $this->validarViolenciadegenero($violenciadegeneroDto);
        $efectosofendidosDto = $this->validarEfectosofendidos($efectosofendidosDto);
        $ViolenciaController = new ViolenciaController();
        $rs = $ViolenciaController->eliminarEfecto($violenciadegeneroDto, $efectosofendidosDto);
        return $rs;
    }

///////////////////////FACTORES SOCIALES//////////////////////
    public function insertViolenciafactoressociales($ViolenciafactoressocialesDto) {

        $ViolenciafactoressocialesDto = $this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
        $ViolenciaController = new ViolenciaController();
        $json = "";

        $violenciaDeGeneroDto = new ViolenciadegeneroDTO();
        $violenciaDeGeneroDao = new ViolenciadegeneroDAO();
///////////Se verifica que exista el facto social.
        $violenciaDeGeneroDto->setIdViolenciaDeGenero($ViolenciafactoressocialesDto->getIdViolenciaDeGenero());
        $rsViolenciaDeGenero = $violenciaDeGeneroDao->selectViolenciadegenero($violenciaDeGeneroDto);
        if ($rsViolenciaDeGenero != "") {
//Se verifica que exista la relacion.
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

            $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsViolenciaDeGenero[0]->getIdImpOfeDelSolicitud());
            $impOfeDelSolicitudesDto->setActivo("S");
            $rsImpOfeDelSolicitud = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
            if ($rsImpOfeDelSolicitud != "") {
//Se verifica que la solicitud no este enviada
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

                $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpOfeDelSolicitud[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                if ($rsSolicitudAudiencias[0]->getCveEstatusSolicitud() == "1") {
                    $rsValidaFactores = $ViolenciaController->selectViolenciafactoressociales($ViolenciafactoressocialesDto);
                    if ($rsValidaFactores == "") {
                        $ViolenciafactoressocialesDto = $ViolenciaController->insertViolenciafactoressociales($ViolenciafactoressocialesDto);
                        $x = 1;
                        if ($ViolenciafactoressocialesDto != "") {
                            $json .= "{";
                            $json .= '"status":"ok",';
                            $json .= '"totalCount":"' . count($ViolenciafactoressocialesDto) . '",';
                            $json .= '"data":[';
                            foreach ($ViolenciafactoressocialesDto as $Violenciafactorsocial) {
                                $json .= "{";
                                $json .= '"idViolenciaFactorSocial":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaFactorSocial())) . ",";
                                $json .= '"cveFactorCultural":' . json_encode(utf8_encode($Violenciafactorsocial->getCveFactorCultural())) . ",";
                                $json .= '"idViolenciaDeGenero":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaDeGenero())) . "";
                                $json .= "}" . "\n";
                                $x ++;
                                if ($x <= count($ViolenciafactoressocialesDto)) {
                                    $json .= ",";
                                }
                            }
                            $json .= "]";
                            $json .= "}";
                        } else {
                            $json .= '{"status":"Fail",';
                            $json .= '"mnj":"No se registro."}';
                        }
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"El factor social ya se encuentra dado de alta."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se puede agregar factor social, ya que la solicitud se encuentra enviada."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"La relacion no existe. verifique."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro el factor social. verifique."}';
        }
        return $json;
    }

    public function updateViolenciafactoressociales($ViolenciafactoressocialesDto) {

        $json = "";
        $ViolenciafactoressocialesDto = $this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
        $ViolenciaController = new ViolenciaController();


        $violenciaDeGeneroDto = new ViolenciadegeneroDTO();
        $violenciaDeGeneroDao = new ViolenciadegeneroDAO();
///////////Se verifica que exista el facto social.
        $violenciaDeGeneroDto->setIdViolenciaDeGenero($ViolenciafactoressocialesDto->getIdViolenciaDeGenero());
        $rsViolenciaDeGenero = $violenciaDeGeneroDao->selectViolenciadegenero($violenciaDeGeneroDto);
        if ($rsViolenciaDeGenero != "") {
//Se verifica que exista la relacion.
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

            $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsViolenciaDeGenero[0]->getIdImpOfeDelSolicitud());
            $impOfeDelSolicitudesDto->setActivo("S");
            $rsImpOfeDelSolicitud = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
            if ($rsImpOfeDelSolicitud != "") {
//Se verifica que la solicitud no este enviada
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

                $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpOfeDelSolicitud[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                if ($rsSolicitudAudiencias[0]->getCveEstatusSolicitud() == "1") {


                    $ViolenciafactoressocialesAuxDto = new ViolenciafactoressocialesDTO ( );
                    $ViolenciafactoressocialesAuxDto->setCveFactorCultural($ViolenciafactoressocialesDto->getCveFactorCultural());
                    $ViolenciafactoressocialesAuxDto->setIdViolenciaDeGenero($ViolenciafactoressocialesDto->getIdViolenciaDeGenero());
                    $ViolenciafactoressocialesAuxDto->setActivo("S");
                    $rsValidaFactores = $ViolenciaController->selectViolenciafactoressociales($ViolenciafactoressocialesAuxDto);
                    if ($rsValidaFactores == "") {
                        $ViolenciafactoressocialesDto = $ViolenciaController->updateViolenciafactoressociales($ViolenciafactoressocialesDto);
                        $x = 1;
                        if ($ViolenciafactoressocialesDto != "") {
                            $json .= "{";
                            $json .= '"status":"ok",';
                            $json .= '"totalCount":"' . count($ViolenciafactoressocialesDto) . '",';
                            $json .= '"data":[';
                            foreach ($ViolenciafactoressocialesDto as $Violenciafactorsocial) {
                                $json .= "{";
                                $json .= '"idViolenciaFactorSocial":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaFactorSocial())) . ",";
                                $json .= '"cveFactorCultural":' . json_encode(utf8_encode($Violenciafactorsocial->getCveFactorCultural())) . ",";
                                $json .= '"idViolenciaDeGenero":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaDeGenero())) . "";
                                $json .= "}" . "\n";
                                $x ++;
                                if ($x <= count($ViolenciafactoressocialesDto)) {
                                    $json .= ",";
                                }
                            }
                            $json .= "]";
                            $json .= "}";
                        } else {
                            $json .= '{"status":"Fail",';
                            $json .= '"mnj":"No se registro."}';
                        }
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"El factor social ya se encuentra dado de alta."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se puede modificar factor social, ya que la solicitud se encuentra enviada."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"La relacion no existe. verifique."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro el factor social. verifique."}';
        }
        return $json;
    }

    public function selectViolenciafactoressociales($ViolenciafactoressocialesDto) {

        $ViolenciafactoressocialesDto = $this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
        $ViolenciaController = new ViolenciaController();
        $ViolenciafactoressocialesDto = $ViolenciaController->selectViolenciafactoressociales($ViolenciafactoressocialesDto);
        $json = "";
        $x = 1;
        if ($ViolenciafactoressocialesDto != "") {
            $factoresCulturalesDto = new FactoresculturalesDTO();
            $factoresCulturalesDao = new FactoresculturalesDAO();
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($ViolenciafactoressocialesDto) . '",';
            $json .= '"data":[';
            foreach ($ViolenciafactoressocialesDto as $Violenciafactorsocial) {
                $factoresCulturalesDto->setCveFactorCultural($Violenciafactorsocial->getCveFactorCultural());
                $rsFactor = $factoresCulturalesDao->selectFactoresculturales($factoresCulturalesDto);
                $json .= "{";
                $json .= '"idViolenciaFactorSocial":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaFactorSocial())) . ",";
                $json .= '"cveFactorCultural":' . json_encode(utf8_encode($Violenciafactorsocial->getCveFactorCultural())) . ",";
                if ($rsFactor != "") {
                    $json .= '"desFactorCultural":' . json_encode(utf8_encode($rsFactor [0]->getDesFactorCultural())) . ",";
                } else {
                    $json .= '"desFactorCultural": "N/A",';
                }
                $json .= '"idViolenciaDeGenero":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaDeGenero())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ViolenciafactoressocialesDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function deleteViolenciafactoressociales($ViolenciafactoressocialesDto) {

        $json = "";
        $ViolenciafactoressocialesDto = $this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
        $ViolenciaController = new ViolenciaController();
        $ViolenciaAuz = new ViolenciafactoressocialesDTO();
        $ViolenciaAuz->setIdViolenciaFactorSocial($ViolenciafactoressocialesDto->getIdViolenciaFactorSocial());

        $rs = $ViolenciaController->selectViolenciafactoressociales($ViolenciaAuz);
        if ($rs != "") {

            $violenciaDeGeneroDto = new ViolenciadegeneroDTO();
            $violenciaDeGeneroDao = new ViolenciadegeneroDAO();
///////////Se verifica que exista el facto social.
            $violenciaDeGeneroDto->setIdViolenciaDeGenero($rs[0]->getIdViolenciaDeGenero());
            $rsViolenciaDeGenero = $violenciaDeGeneroDao->selectViolenciadegenero($violenciaDeGeneroDto);
            if ($rsViolenciaDeGenero != "") {
//Se verifica que exista la relacion.
                $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
                $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

                $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsViolenciaDeGenero[0]->getIdImpOfeDelSolicitud());
                $impOfeDelSolicitudesDto->setActivo("S");
                $rsImpOfeDelSolicitud = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
                if ($rsImpOfeDelSolicitud != "") {
//Se verifica que la solicitud no este enviada
                    $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                    $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

                    $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpOfeDelSolicitud[0]->getIdSolicitudAudiencia());
                    $rsSolicitudAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                    if ($rsSolicitudAudiencias[0]->getCveEstatusSolicitud() == "1") {

                        $ViolenciafactoressocialesDto->setActivo('N');
                        $ViolenciafactoressocialesDto = $ViolenciaController->updateViolenciafactoressociales($ViolenciafactoressocialesDto);
                        $x = 1;
                        if ($ViolenciafactoressocialesDto != "") {
                            $json .= "{";
                            $json .= '"status":"ok",';
                            $json .= '"totalCount":"' . count($ViolenciafactoressocialesDto) . '",';
                            $json .= '"data":[';
                            foreach ($ViolenciafactoressocialesDto as $Violenciafactorsocial) {
                                $json .= "{";
                                $json .= '"idViolenciaFactorSocial":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaFactorSocial())) . ",";
                                $json .= '"cveFactorCultural":' . json_encode(utf8_encode($Violenciafactorsocial->getCveFactorCultural())) . ",";
                                $json .= '"idViolenciaDeGenero":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaDeGenero())) . "";
                                $json .= "}" . "\n";
                                $x ++;
                                if ($x <= count($ViolenciafactoressocialesDto)) {
                                    $json .= ",";
                                }
                            }
                            $json .= "]";
                            $json .= "}";
                        } else {
                            $json .= '{"status":"Fail",';
                            $json .= '"mnj":"No se pudo eliminar el registro."}';
                        }
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"No se puede eliminar factor social, ya que la solicitud se encuentra enviada."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"La relacion no existe. verifique."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"No se encontro el factor social. verifique."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro el factor social. verifique."}';
        }
        return $json;
    }

/////////////////////////HOMICIDIOS DOLOSOS////////////////////////////////
    public function InsertHomicidiosDolosos($ViolenciahomicidiosdolososDto) {

        $ViolenciahomicidiosdolososDto = $this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
        $ViolenciaController = new ViolenciaController();
        $json = "";

        $violenciaDeGeneroDto = new ViolenciadegeneroDTO();
        $violenciaDeGeneroDao = new ViolenciadegeneroDAO();
///////////Se verifica que exista el facto social.
        $violenciaDeGeneroDto->setIdViolenciaDeGenero($ViolenciahomicidiosdolososDto->getIdViolenciaDeGenero());
        $rsViolenciaDeGenero = $violenciaDeGeneroDao->selectViolenciadegenero($violenciaDeGeneroDto);
        if ($rsViolenciaDeGenero != "") {
//Se verifica que exista la relacion.
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

            $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsViolenciaDeGenero[0]->getIdImpOfeDelSolicitud());
            $impOfeDelSolicitudesDto->setActivo("S");
            $rsImpOfeDelSolicitud = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
            if ($rsImpOfeDelSolicitud != "") {
//Se verifica que la solicitud no este enviada
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

                $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpOfeDelSolicitud[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                if ($rsSolicitudAudiencias[0]->getCveEstatusSolicitud() == "1") {
                    $rsValidaHomicidio = $ViolenciaController->selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
                    if ($rsValidaHomicidio == "") {
                        $ViolenciahomicidiosdolososDto = $ViolenciaController->insertViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
                        $x = 1;
                        if ($ViolenciahomicidiosdolososDto != "") {
                            $json .= "{";
                            $json .= '"status":"ok",';
                            $json .= '"totalCount":"' . count($ViolenciahomicidiosdolososDto) . '",';
                            $json .= '"data":[';
                            foreach ($ViolenciahomicidiosdolososDto as $Violenciahomicidiodoloso) {
                                $json .= "{";
                                $json .= '"idViolenciaHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaHomicidioDoloso())) . ",";
                                $json .= '"idViolenciaDeGenero":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaDeGenero())) . ",";
                                $json .= '"cveHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getCveHomicidioDoloso())) . "";
                                $json .= "}" . "\n";
                                $x ++;
                                if ($x <= count($ViolenciahomicidiosdolososDto)) {
                                    $json .= ",";
                                }
                            }
                            $json .= "]";
                            $json .= "}";
                        } else {
                            $json .= '{"status":"Fail",';
                            $json .= '"mnj":"No se pudo guardar el registro."}';
                        }
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"El homicidio doloso ya se ecnuentra dado de alta"}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se puede agregar el homicidio doloso, ya que la solicitud se encuentra enviada."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"La relacion no existe. verifique."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro el factor social. verifique."}';
        }
        return $json;
    }

    public function UpdateHomicidiosDolosos($ViolenciahomicidiosdolososDto) {



        $ViolenciahomicidiosdolososDto = $this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
        $ViolenciaController = new ViolenciaController();
        $json = "";

        $violenciaDeGeneroDto = new ViolenciadegeneroDTO();
        $violenciaDeGeneroDao = new ViolenciadegeneroDAO();
///////////Se verifica que exista el facto social.
        $violenciaDeGeneroDto->setIdViolenciaDeGenero($ViolenciahomicidiosdolososDto->getIdViolenciaDeGenero());
        $rsViolenciaDeGenero = $violenciaDeGeneroDao->selectViolenciadegenero($violenciaDeGeneroDto);
        if ($rsViolenciaDeGenero != "") {
//Se verifica que exista la relacion.
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

            $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsViolenciaDeGenero[0]->getIdImpOfeDelSolicitud());
            $impOfeDelSolicitudesDto->setActivo("S");
            $rsImpOfeDelSolicitud = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
            if ($rsImpOfeDelSolicitud != "") {
//Se verifica que la solicitud no este enviada
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

                $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpOfeDelSolicitud[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                if ($rsSolicitudAudiencias[0]->getCveEstatusSolicitud() == "1") {
                    $ViolenciahomicidiosdolososAuxDto = new ViolenciahomicidiosdolososDTO ( );
                    $ViolenciahomicidiosdolososAuxDto->setIdViolenciaDeGenero($ViolenciahomicidiosdolososDto->getIdViolenciaDeGenero());
                    $ViolenciahomicidiosdolososAuxDto->setCveHomicidioDoloso($ViolenciahomicidiosdolososDto->getCveHomicidioDoloso());
                    $ViolenciahomicidiosdolososAuxDto->setActivo('S');
                    $rsValidaHomicidio = $ViolenciaController->selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososAuxDto);
                    if ($rsValidaHomicidio == "") {
                        $ViolenciahomicidiosdolososDto = $ViolenciaController->updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
                        $x = 1;
                        if ($ViolenciahomicidiosdolososDto != "") {
                            $json .= "{";
                            $json .= '"status":"ok",';
                            $json .= '"totalCount":"' . count($ViolenciahomicidiosdolososDto) . '",';
                            $json .= '"data":[';
                            foreach ($ViolenciahomicidiosdolososDto as $Violenciahomicidiodoloso) {
                                $json .= "{";
                                $json .= '"idViolenciaHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaHomicidioDoloso())) . ",";
                                $json .= '"idViolenciaDeGenero":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaDeGenero())) . ",";
                                $json .= '"cveHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getCveHomicidioDoloso())) . "";
                                $json .= "}" . "\n";
                                $x ++;
                                if ($x <= count($ViolenciahomicidiosdolososDto)) {
                                    $json .= ",";
                                }
                            }
                            $json .= "]";
                            $json .= "}";
                        } else {
                            $json .= '{"status":"Fail",';
                            $json .= '"mnj":"No se pudo guardar el registro."}';
                        }
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"El homicidio doloso ya se encuentra dado de alta."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se puede modificar el homicidio doloso, ya que la solicitud se encuentra enviada."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"La relacion no existe. verifique."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro el factor social. verifique."}';
        }
        return $json;
    }

    public function DeleteHomicidiosDolosos($ViolenciahomicidiosdolososDto) {

        $json = "";
        $ViolenciahomicidiosdolososDto = $this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
        $ViolenciaController = new ViolenciaController();
        $violenciaDeGeneroDto = new ViolenciadegeneroDTO();
        $violenciaDeGeneroDao = new ViolenciadegeneroDAO();
///////////Se verifica que exista el facto social.
        $violenciaDeGeneroDto->setIdViolenciaDeGenero($ViolenciahomicidiosdolososDto->getIdViolenciaDeGenero());
        $rsViolenciaDeGenero = $violenciaDeGeneroDao->selectViolenciadegenero($violenciaDeGeneroDto);
        if ($rsViolenciaDeGenero != "") {
//Se verifica que exista la relacion.
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

            $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsViolenciaDeGenero[0]->getIdImpOfeDelSolicitud());
            $impOfeDelSolicitudesDto->setActivo("S");
            $rsImpOfeDelSolicitud = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
            if ($rsImpOfeDelSolicitud != "") {
//Se verifica que la solicitud no este enviada
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

                $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpOfeDelSolicitud[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                if ($rsSolicitudAudiencias[0]->getCveEstatusSolicitud() == "1") {
                    $ViolenciahomicidiosdolososDto->setActivo('N');
                    $ViolenciahomicidiosdolososDto = $ViolenciaController->updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
                    $x = 1;
                    if ($ViolenciahomicidiosdolososDto != "") {
                        $json .= "{";
                        $json .= '"status":"ok",';
                        $json .= '"totalCount":"' . count($ViolenciahomicidiosdolososDto) . '",';
                        $json .= '"data":[';
                        foreach ($ViolenciahomicidiosdolososDto as $Violenciahomicidiodoloso) {
                            $json .= "{";
                            $json .= '"idViolenciaHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaHomicidioDoloso())) . ",";
                            $json .= '"idViolenciaDeGenero":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaDeGenero())) . ",";
                            $json .= '"cveHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getCveHomicidioDoloso())) . "";
                            $json .= "}" . "\n";
                            $x ++;
                            if ($x <= count($ViolenciahomicidiosdolososDto)) {
                                $json .= ",";
                            }
                        }
                        $json .= "]";
                        $json .= "}";
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"No se pudo guardar el registro."}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se puede eliminar el homicidio doloso, ya que la solicitud se encuentra enviada."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"La relacion no existe. verifique."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro el factor social. verifique."}';
        }
        return $json;
    }

    public function SelectHomicidiosDolosos($ViolenciahomicidiosdolososDto) {



        $ViolenciahomicidiosdolososDto = $this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
        $ViolenciaController = new ViolenciaController();
        $ViolenciahomicidiosdolososDto = $ViolenciaController->selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
        $json = "";
        $x = 1;
        if ($ViolenciahomicidiosdolososDto != "") {
            $homicidiosDolososDto = new HomicidiosdolososDTO();
            $homicidiosDolososDao = new HomicidiosdolososDAO();

            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($ViolenciahomicidiosdolososDto) . '",';
            $json .= '"data":[';
            foreach ($ViolenciahomicidiosdolososDto as $Violenciahomicidiodoloso) {
                $homicidiosDolososDto->setCveHomicidioDoloso($Violenciahomicidiodoloso->getCveHomicidioDoloso());
                $rsHomicidios = $homicidiosDolososDao->selectHomicidiosdolosos($homicidiosDolososDto);
                $json .= "{";
                $json .= '"idViolenciaHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaHomicidioDoloso())) . ",";
                $json .= '"idViolenciaDeGenero":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaDeGenero())) . ",";
                $json .= '"cveHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getCveHomicidioDoloso())) . ",";
                if ($rsHomicidios != "") {
                    $json .= '"desHomicidioDoloso":' . json_encode(utf8_encode($rsHomicidios [0]->getDesHomicidioDoloso())) . "";
                } else {
                    $json .= '"desHomicidioDoloso": "N/A"';
                }
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ViolenciahomicidiosdolososDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/'
                        , $fecha)) {
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

}

@$accion = $_POST["accion"];
/////////////////TRATA DE PERSONAS////////////////////////////////
@$idTrataPersona = $_POST["idTrataPersona"];
@$cveEstadoDestino = $_POST["cveEstadoDestino"];
@$cveMunicipioDestino = $_POST["cveMunicipioDestino"];
@$cvePaisDestino = $_POST["cvePaisDestino"];
@$estadoDestino = $_POST["estadoDestino"];
@$municipioDestino = $_POST["municipioDestino"];
@$cveEstadoOrigen = $_POST["cveEstadoOrigen"];
@$cveMunicipioOrigen = $_POST["cveMunicipioOrigen"];
@$cvePaisOrigen = $_POST["cvePaisOrigen"];
@$estadoOrigen = $_POST["estadoOrigen"];
@$municipioOrigen = $_POST["municipioOrigen"];
@$cveTipoTrata = $_POST["cveTipoTrata"];
@$cveTrasportacion = $_POST["cveTrasportacion"];
@$idImpOfeDelSolicitud = $_POST["idImpOfeDelSolicitud"];
@$activo = $_POST["activo"];
/////////////////SEXUALES////////////////////////////////
@$idSexual = $_POST["idSexual"];
@$cveModalidadAcoso = $_POST["cveModalidadAcoso"];
@$cveAmbitoAcoso = $_POST["cveAmbitoAcoso"];
@$idImpOfeDelSolicitud = $_POST["idImpOfeDelSolicitud"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$activo = $_POST["activo"];
//////////////SEXUALES CONDUCTA//////////////////////////
@$idSexualConducta = $_POST["idSexualConducta"];
@$idSexual = $_POST["idSexual"];
@$cveConducta = $_POST["cveConducta"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
//////////////SEXUALES DETALLE CONDUCTA//////////////////////////
@$idDetalleSexualConducta = $_POST["idDetalleSexualConducta"];
@$cveDetalleConducta = $_POST["cveDetalleConducta"];
@$idSexualConducta = $_POST["idSexualConducta"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
//////////////TESTIGOS//////////////////////////////
@$idTestigoSexual = $_POST["idTestigoSexual"];
@$idSexual = $_POST["idSexual"];
@$paterno = $_POST["paterno"];
@$materno = $_POST["materno"];
@$nombre = $_POST["nombre"];
@$cveGenero = $_POST["cveGenero"];
@$activo = $_POST["activo"];
/////////EFECTOS////////////
@$idViolenciaDeGenero = $_POST["idViolenciaDeGenero"];
@$cveEfecto = $_POST["cveEfecto"];
@$idImpOfeDelSolicitud = $_POST["idImpOfeDelSolicitud"];
@$activo = $_POST["activo"];
////////////////////efectos ofendidos/////////////////
@$idEfectoOfendido = $_POST["idEfectoOfendido"];
@$cveDetalleEfecto = $_POST["cveDetalleEfecto"];
@$idImpOfeDelSolicitud = $_POST["idImpOfeDelSolicitud"];
@$IdReferencia = $_POST["IdReferencia"];
@$origen = $_POST["origen"];
@$activo = $_POST["activo"];
///////////////violencia factor social/////////////////
@$idViolenciaFactorSocial = $_POST["idViolenciaFactorSocial"];
@$cveFactorCultural = $_POST["cveFactorCultural"];
@$idViolenciaDeGenero = $_POST["idViolenciaDeGenero"];
@$activo = $_POST["activo"];
//////////////HOMICIDIOS DOLOSOS//////////////////////
@$idViolenciaHomicidioDoloso = $_POST["idViolenciaHomicidioDoloso"];
@$idViolenciaDeGenero = $_POST["idViolenciaDeGenero"];
@$cveHomicidioDoloso = $_POST["cveHomicidioDoloso"];
@$activo = $_POST["activo"];



$violenciaFacade = new ViolenciaFacade( );
/////////////////TRATA DE PERSONAS////////////////////////////////
$TrataspersonasDto = new TrataspersonasDTO();
$TrataspersonasDto->setIdTrataPersona($idTrataPersona);
$TrataspersonasDto->setCveEstadoDestino($cveEstadoDestino);
$TrataspersonasDto->setCveMunicipioDestino($cveMunicipioDestino);
$TrataspersonasDto->setCvePaisDestino($cvePaisDestino);
$TrataspersonasDto->setEstadoDestino($estadoDestino);
$TrataspersonasDto->setMunicipioDestino($municipioDestino);
$TrataspersonasDto->setCveEstadoOrigen($cveEstadoOrigen);
$TrataspersonasDto->setCveMunicipioOrigen($cveMunicipioOrigen);
$TrataspersonasDto->setCvePaisOrigen($cvePaisOrigen);
$TrataspersonasDto->setEstadoOrigen($estadoOrigen);
$TrataspersonasDto->setMunicipioOrigen($municipioOrigen);
$TrataspersonasDto->setCveTipoTrata($cveTipoTrata);
$TrataspersonasDto->setCveTrasportacion($cveTrasportacion);
$TrataspersonasDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
$TrataspersonasDto->setActivo($activo);
/////////////////SEXUALES////////////////////////////////
$sexualesDto = new SexualesDTO();
$sexualesDto->setIdSexual($idSexual);
$sexualesDto->setCveModalidadAcoso($cveModalidadAcoso);
$sexualesDto->setCveAmbitoAcoso($cveAmbitoAcoso);
$sexualesDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
$sexualesDto->setActivo($activo);
$sexualesDto->setFechaRegistro($fechaRegistro);
$sexualesDto->setFechaActualizacion($fechaActualizacion);
//////////////SEXUALES CONDUCTA//////////////////////////
$sexualesconductasDto = new SexualesconductasDTO();
$sexualesconductasDto->setIdSexualConducta($idSexualConducta);
$sexualesconductasDto->setIdSexual($idSexual);
$sexualesconductasDto->setCveConducta($cveConducta);
$sexualesconductasDto->setActivo($activo);
$sexualesconductasDto->setFechaRegistro($fechaRegistro);
$sexualesconductasDto->setFechaActualizacion($fechaActualizacion);
//////////////SEXUALES DETALLE CONDUCTA//////////////////////////
$detallessexualesconductasDto = new DetallessexualesconductasDTO();
$detallessexualesconductasDto->setIdDetalleSexualConducta($idDetalleSexualConducta);
$detallessexualesconductasDto->setCveDetalleConducta($cveDetalleConducta);
$detallessexualesconductasDto->setIdSexualConducta($idSexualConducta);
$detallessexualesconductasDto->setActivo($activo);
$detallessexualesconductasDto->setFechaRegistro($fechaRegistro);
$detallessexualesconductasDto->setFechaActualizacion($fechaActualizacion);
//////////////TESTIGOS//////////////////////////////
$testigossexualesDto = new TestigossexualesDTO();
$testigossexualesDto->setIdTestigoSexual($idTestigoSexual);
$testigossexualesDto->setIdSexual($idSexual);
$testigossexualesDto->setPaterno($paterno);
$testigossexualesDto->setMaterno($materno);
$testigossexualesDto->setNombre($nombre);
$testigossexualesDto->setCveGenero($cveGenero);
$testigossexualesDto->setActivo($activo);
//////////////EFECTOS//////////////////////////////
$violenciadegeneroDto = new ViolenciadegeneroDTO();
$violenciadegeneroDto->setIdViolenciaDeGenero($idViolenciaDeGenero);
$violenciadegeneroDto->setCveEfecto($cveEfecto);
$violenciadegeneroDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
$violenciadegeneroDto->setActivo($activo);
//////////////EFECTOS OFENDIDOS//////////////////////////////
$efectosofendidosDto = new EfectosofendidosDTO();
$efectosofendidosDto->setIdEfectoOfendido($idEfectoOfendido);
$efectosofendidosDto->setCveDetalleEfecto($cveDetalleEfecto);
$efectosofendidosDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
$efectosofendidosDto->setIdReferencia($IdReferencia);
$efectosofendidosDto->setOrigen($origen);
$efectosofendidosDto->setActivo($activo);
//////////////factores sociales//////////////////////////////
$violenciafactoressocialesDto = new ViolenciafactoressocialesDTO();
$violenciafactoressocialesDto->setIdViolenciaFactorSocial($idViolenciaFactorSocial);
$violenciafactoressocialesDto->setCveFactorCultural($cveFactorCultural);
$violenciafactoressocialesDto->setIdViolenciaDeGenero($idViolenciaDeGenero);
$violenciafactoressocialesDto->setActivo($activo);
/////////////////////HOMICIDIOS DOLOSOS////////////////////////
$violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososDTO();
$violenciahomicidiosdolososDto->setIdViolenciaHomicidioDoloso($idViolenciaHomicidioDoloso);
$violenciahomicidiosdolososDto->setIdViolenciaDeGenero($idViolenciaDeGenero);
$violenciahomicidiosdolososDto->setCveHomicidioDoloso($cveHomicidioDoloso);
$violenciahomicidiosdolososDto->setActivo($activo);

////////////////////////////////////////////////////////////////////////////////

if (($accion == "consultarRelacion")) {
    $rsTrata = $violenciaFacade->selectRelacion($TrataspersonasDto);
    echo $rsTrata;
} else if (($accion == "guardarTrata") && $TrataspersonasDto->getIdTrataPersona() == "") {
    $rsTrata = $violenciaFacade->insertTratasPersonas($TrataspersonasDto);
    echo $rsTrata;
} else if (($accion == "guardarTrata") && $TrataspersonasDto->getIdTrataPersona() != "") {
    $rsConsultaTrata = $violenciaFacade->updateTratasPersonas($TrataspersonasDto);
    echo $rsConsultaTrata;
} else if (($accion == "consultaTrata")) {
    $rsConsultaTrata = $violenciaFacade->selectTratasPersonas($TrataspersonasDto);
    echo $rsConsultaTrata;
} else if (($accion == "eliminar")) {
    $TrataspersonasDto->setActivo('N');
    $rsConsultaTrata = $violenciaFacade->updateTratasPersonas($TrataspersonasDto);
    echo $rsConsultaTrata;
} else if (($accion == "guardarSexuales") && $sexualesDto->getIdSexual() == "") {
    $rsConsultaSexual = $violenciaFacade->insertSexuales($sexualesDto);
    echo $rsConsultaSexual;
} else if (($accion == "guardarSexuales") && $sexualesDto->getIdSexual() != "") {
    $rsConsultaSexual = $violenciaFacade->updateSexuales($sexualesDto);
    echo $rsConsultaSexual;
} else if (($accion == "consultaSexual")) {
    $rsConsultaSexual = $violenciaFacade->selectSexuales($sexualesDto);
    echo $rsConsultaSexual;
} else if (($accion == "eliminarSexual")) {
    $sexualesDto->setActivo('N');
    $rsConsultaSexual = $violenciaFacade->eliminarSexual($sexualesDto);
    echo $rsConsultaSexual;
} else if (($accion == "guardarConducta") && $sexualesconductasDto->getIdSexualConducta() == "") {
    $rs = $violenciaFacade->guardarConductas($sexualesconductasDto, $detallessexualesconductasDto);
    echo $rs;
} else if (($accion == "guardarConducta") && $sexualesconductasDto->getIdSexualConducta() != "") {
    $rs = $violenciaFacade->updateConductas($sexualesconductasDto, $detallessexualesconductasDto);
    echo $rs;
} else if (($accion == "consultaConducta")) {
    $rs = $violenciaFacade->selectConductas($sexualesconductasDto, $detallessexualesconductasDto);
    echo $rs;
} else if (($accion == "eliminarConducta")) {
    $sexualesconductasDto->setActivo('N');
    $detallessexualesconductasDto->setActivo('N');
    $rs = $violenciaFacade->eliminarConducta($sexualesconductasDto, $detallessexualesconductasDto);
    echo $rs;
} else if (($accion == "guardarTestigos") && $testigossexualesDto->getIdTestigoSexual() == "") {
    $rs = $violenciaFacade->insertTestigossexuales($testigossexualesDto);
    echo $rs;
} else if (($accion == "guardarTestigos") && $testigossexualesDto->getIdTestigoSexual() != "") {
    $rs = $violenciaFacade->updateTestigossexuales($testigossexualesDto);
    echo $rs;
} else if (($accion == "consultaTestigos")) {
    $rs = $violenciaFacade->selectTestigossexuales($testigossexualesDto);
    echo $rs;
} else if (($accion == "eliminarTestigos")) {
    $rs = $violenciaFacade->deleteTestigossexuales($testigossexualesDto);
    echo $rs;
} else if (($accion == "guardaEfectosViolencia") && ($violenciadegeneroDto->getIdViolenciaDeGenero() == "")) {
    $rs = $violenciaFacade->guardaEfectosViolencia($violenciadegeneroDto, $efectosofendidosDto);
    echo $rs;
} else if (($accion == "guardaEfectosViolencia") && ($violenciadegeneroDto->getIdViolenciaDeGenero() != "")) {
    $rs = $violenciaFacade->modificaEfectosViolencia($violenciadegeneroDto, $efectosofendidosDto);
    echo $rs;
} else if (($accion == "consultaEfectos")) {
    $rs = $violenciaFacade->consultaEfectos($violenciadegeneroDto, $efectosofendidosDto);
    echo $rs;
} else if (($accion == "eliminarEfecto")) {
    $rs = $violenciaFacade->eliminarEfecto($violenciadegeneroDto, $efectosofendidosDto);
    echo $rs;
} else if (($accion == "guardaFactorSocial") && $violenciafactoressocialesDto->getIdViolenciaFactorSocial() == "") {
    $rs = $violenciaFacade->insertViolenciafactoressociales($violenciafactoressocialesDto);
    echo $rs;
} else if (($accion == "guardaFactorSocial") && $violenciafactoressocialesDto->getIdViolenciaFactorSocial() != "") {
    $rs = $violenciaFacade->updateViolenciafactoressociales($violenciafactoressocialesDto);
    echo $rs;
} else if (($accion == "consultaFactorSocial")) {
    $rs = $violenciaFacade->selectViolenciafactoressociales($violenciafactoressocialesDto);
    echo $rs;
} else if (($accion == "eliminarFactorSocial")) {
    $rs = $violenciaFacade->deleteViolenciafactoressociales($violenciafactoressocialesDto);
    echo $rs;
} else if (($accion == "guardaHomicidios") && ($violenciahomicidiosdolososDto->getIdViolenciaHomicidioDoloso() == "")) {
    $rs = $violenciaFacade->InsertHomicidiosDolosos($violenciahomicidiosdolososDto);
    echo $rs;
} else if (($accion == "guardaHomicidios") && ($violenciahomicidiosdolososDto->getIdViolenciaHomicidioDoloso() != "")) {
    $rs = $violenciaFacade->UpdateHomicidiosDolosos($violenciahomicidiosdolososDto);
    echo $rs;
} else if (($accion == "consultaHomicidio")) {
    $rs = $violenciaFacade->SelectHomicidiosDolosos($violenciahomicidiosdolososDto);
    echo $rs;
} else if (($accion == "eliminarHomicidios")) {
    $rs = $violenciaFacade->DeleteHomicidiosDolosos($violenciahomicidiosdolososDto);
    echo $rs;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?> 
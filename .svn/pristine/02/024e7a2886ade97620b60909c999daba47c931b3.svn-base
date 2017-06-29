<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/violenciacarpetas/ViolenciacarpetasController.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/paises/PaisesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estados/EstadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/municipios/MunicipiosController.Class.php");

//////SEXUALES
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");

/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/modalidadesacosos/ModalidadesacososDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/modalidadesacosos/ModalidadesacososDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ambitosacosos/AmbitosacososDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ambitosacosos/AmbitosacososDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallesconductas/DetallesconductasDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/factoresculturales/FactoresculturalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/factoresculturales/FactoresculturalesDAO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/homicidiosdolosos/HomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/homicidiosdolosos/HomicidiosdolososDAO.Class.php");
/////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");

/////////////////////////


class ViolenciacarpetasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTrataspersonascarpetas($TrataspersonascarpetasDto) {
        $TrataspersonascarpetasDto->setIdTrataPersonaCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getIdTrataPersonaCarpeta())))));
        $TrataspersonascarpetasDto->setCveEstadoDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getCveEstadoDestino())))));
        $TrataspersonascarpetasDto->setCveMunicipioDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getCveMunicipioDestino())))));
        $TrataspersonascarpetasDto->setCvePaisDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getCvePaisDestino())))));
        $TrataspersonascarpetasDto->setEstadoDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getEstadoDestino())))));
        $TrataspersonascarpetasDto->setMunicipioDestino(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getMunicipioDestino())))));
        $TrataspersonascarpetasDto->setCveEstadoOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getCveEstadoOrigen())))));
        $TrataspersonascarpetasDto->setCveMunicipioOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getCveMunicipioOrigen())))));
        $TrataspersonascarpetasDto->setCvePaisOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getCvePaisOrigen())))));
        $TrataspersonascarpetasDto->setEstadoOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getEstadoOrigen())))));
        $TrataspersonascarpetasDto->setMunicipioOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getMunicipioOrigen())))));
        $TrataspersonascarpetasDto->setIdImpOfeDelCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getIdImpOfeDelCarpeta())))));
        $TrataspersonascarpetasDto->setCveTipoTrata(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getCveTipoTrata())))));
        $TrataspersonascarpetasDto->setCveTrasportacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TrataspersonascarpetasDto->getCveTrasportacion())))));

        return $TrataspersonascarpetasDto;
    }

    public function validarSexualescarpetas($sexualescarpetasDto) {
        $sexualescarpetasDto->setIdSexualCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $sexualescarpetasDto->getIdSexualCarpeta())))));
        $sexualescarpetasDto->setCveModalidadAcoso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $sexualescarpetasDto->getCveModalidadAcoso())))));
        $sexualescarpetasDto->setCveAmbitoAcoso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $sexualescarpetasDto->getCveAmbitoAcoso())))));
        $sexualescarpetasDto->setIdImpOfeDelCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $sexualescarpetasDto->getIdImpOfeDelCarpeta())))));
        return $sexualescarpetasDto;
    }

    public function validarSexualesconductascarpetas($SexualesconductascarpetasDto) {
        $SexualesconductascarpetasDto->setIdSexualConductaCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SexualesconductascarpetasDto->getIdSexualConductaCarpeta())))));
        $SexualesconductascarpetasDto->setIdSexualCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SexualesconductascarpetasDto->getIdSexualCarpeta())))));
        $SexualesconductascarpetasDto->setCveConducta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SexualesconductascarpetasDto->getCveConducta())))));
        return $SexualesconductascarpetasDto;
    }

    public function validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto) {
        $DetallessexualesconductascarpetasDto->setIdDetalleSexualConductaCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DetallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta())))));
        $DetallessexualesconductascarpetasDto->setCveDetalleConducta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DetallessexualesconductascarpetasDto->getCveDetalleConducta())))));
        $DetallessexualesconductascarpetasDto->setIdSexualConductaCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DetallessexualesconductascarpetasDto->getIdSexualConductaCarpeta())))));
        return $DetallessexualesconductascarpetasDto;
    }

    public function validarTestigossexualescarpetas($TestigossexualescarpetasDto) {
        $TestigossexualescarpetasDto->setIdTestigoSexualCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualescarpetasDto->getIdTestigoSexualCarpeta())))));
        $TestigossexualescarpetasDto->setIdSexualCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualescarpetasDto->getIdSexualCarpeta())))));
        $TestigossexualescarpetasDto->setPaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualescarpetasDto->getPaterno())))));
        $TestigossexualescarpetasDto->setMaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualescarpetasDto->getMaterno())))));
        $TestigossexualescarpetasDto->setNombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualescarpetasDto->getNombre())))));
        $TestigossexualescarpetasDto->setCveGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualescarpetasDto->getCveGenero())))));
        $TestigossexualescarpetasDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TestigossexualescarpetasDto->getActivo())))));
        return $TestigossexualescarpetasDto;
    }

    public function validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto) {
        $ViolenciadegenerocarpetasDto->setIdViolenciaDeGeneroCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta())))));
        $ViolenciadegenerocarpetasDto->setCveEfecto(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciadegenerocarpetasDto->getCveEfecto())))));
        $ViolenciadegenerocarpetasDto->setIdImpOfeDelCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciadegenerocarpetasDto->getIdImpOfeDelCarpeta())))));
        $ViolenciadegenerocarpetasDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciadegenerocarpetasDto->getActivo())))));
        return $ViolenciadegenerocarpetasDto;
    }

    public function validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto) {
        $EfectosofendidoscarpetasDto->setIdEfectoOfendidoCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta())))));
        $EfectosofendidoscarpetasDto->setCveDetalleEfecto(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidoscarpetasDto->getCveDetalleEfecto())))));
        $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidoscarpetasDto->getIdImpOfeDelCarpeta())))));
        $EfectosofendidoscarpetasDto->setIdReferencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidoscarpetasDto->getIdReferencia())))));
        $EfectosofendidoscarpetasDto->setOrigen(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidoscarpetasDto->getOrigen())))));
        $EfectosofendidoscarpetasDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $EfectosofendidoscarpetasDto->getActivo())))));
        return $EfectosofendidoscarpetasDto;
    }

    public function validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto) {
        $ViolenciafactoressocialescarpetasDto->setIdViolenciaFactorSocialCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta())))));
        $ViolenciafactoressocialescarpetasDto->setCveFactorCultural(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciafactoressocialescarpetasDto->getCveFactorCultural())))));
        $ViolenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta())))));
        $ViolenciafactoressocialescarpetasDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciafactoressocialescarpetasDto->getActivo())))));
        return $ViolenciafactoressocialescarpetasDto;
    }

    public function validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto) {
        $ViolenciahomicidiosdolososcarpetasDto->setIdViolenciaHomicidioDolosoCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta())))));
        $ViolenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta())))));
        $ViolenciahomicidiosdolososcarpetasDto->setCveHomicidioDoloso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso())))));
        $ViolenciahomicidiosdolososcarpetasDto->setActivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ViolenciahomicidiosdolososcarpetasDto->getActivo())))));
        return $ViolenciahomicidiosdolososcarpetasDto;
    }

    ////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////RELACIONES//////////////////////////////////
        public function selectRelacion($TrataspersonascarpetasDto) {
    
        }
    ///////////////////////////////TRATA DE PERSONAS//////////////////////////////
    public function insertTrataspersonas($TrataspersonascarpetasDto) {
        $TrataspersonascarpetasDto = $this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $json = "";
        $TrataspersonasAuxDto = $ViolenciacarpetasController->selectTrataspersonascarpetas($TrataspersonascarpetasDto);
        if ($TrataspersonasAuxDto == "") {
            $TrataspersonascarpetasDto = $ViolenciacarpetasController->insertTrataspersonascarpetas($TrataspersonascarpetasDto);
            $x = 1;
            if ($TrataspersonascarpetasDto != "") {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($TrataspersonascarpetasDto) . '",';
                $json .= '"data":[';
                foreach ($TrataspersonascarpetasDto as $TratasPersona) {
                    $json .= "{";
                    $json .= '"idTrataPersonaCarpeta":' . json_encode(utf8_encode($TratasPersona->getIdTrataPersonaCarpeta())) . ",";
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
                    $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($TratasPersona->getIdImpOfeDelCarpeta())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($TrataspersonascarpetasDto)) {
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
        return $json;
    }

    public function updateTratasPersonas($TrataspersonascarpetasDto) {
        $TrataspersonascarpetasDto = $this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $TrataspersonascarpetasDto = $ViolenciacarpetasController->updateTratasPersonascarpetas($TrataspersonascarpetasDto);
        $json = "";
        $x = 1;
        if ($TrataspersonascarpetasDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($TrataspersonascarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($TrataspersonascarpetasDto as $TratasPersona) {
                $json .= "{";
                $json .= '"idTrataPersonaCarpeta":' . json_encode(utf8_encode($TratasPersona->getIdTrataPersonaCarpeta())) . ",";
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
                $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($TratasPersona->getIdImpOfeDelCarpeta())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($TrataspersonascarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se pudo actualizar."}';
        }
        return $json;
    }

    public function selectTrataspersonas($TrataspersonascarpetasDto) {
        $TrataspersonascarpetasDto = $this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $TrataspersonascarpetasDto = $ViolenciacarpetasController->selectTrataspersonascarpetas($TrataspersonascarpetasDto);

        $paisesDto = new PaisesDTO ();
        $paisesDao = new PaisesDAO ();
        $estadosDto = new EstadosDTO ();
        $estadosDao = new EstadosDAO ();
        $municipiosDto = new MunicipiosDTO ();
        $municipiosDao = new MunicipiosDAO ();

        $json = "";
        $x = 1;
        if ($TrataspersonascarpetasDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($TrataspersonascarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($TrataspersonascarpetasDto as $TratasPersona) {
                $paisesDto->setCvePais($TratasPersona->getCvePaisOrigen());
                $rsPaisOrigen = $paisesDao->selectPaises($paisesDto);
                $paisesDto->setCvePais($TratasPersona->getCvePaisDestino());
                $rsPaisDestino = $paisesDao->selectPaises($paisesDto);


                $json .= "{";
                $json .= '"idTrataPersonaCarpeta":' . json_encode(utf8_encode($TratasPersona->getIdTrataPersonaCarpeta())) . ",";
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
                    $json .= '"desPaisDestino":' . json_encode(utf8_encode($rsPaisDestino[0]->getDesPais())) . ",";
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
                    $json .= '"desPaisOrigen":' . json_encode(utf8_encode($rsPaisOrigen[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPaisOrigen": "N/A",';
                }
                $json .= '"estadoOrigen":' . json_encode(utf8_encode($TratasPersona->getEstadoOrigen())) . ",";
                $json .= '"municipioOrigen":' . json_encode(utf8_encode($TratasPersona->getMunicipioOrigen())) . ",";
                $json .= '"cveTipoTrata":' . json_encode(utf8_encode($TratasPersona->getCveTipoTrata())) . ",";
                $json .= '"cveTrasportacion":' . json_encode(utf8_encode($TratasPersona->getCveTrasportacion())) . ",";
                $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($TratasPersona->getIdImpOfeDelCarpeta())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($TrataspersonascarpetasDto)) {
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

//////////////////////SEXUALES
    public function insertSexuales($SexualescarpetasDto) {
        $SexualescarpetasDto = $this->validarSexualescarpetas($SexualescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $json = "";
        $rsValidaSexualesDto = $ViolenciacarpetasController->selectSexualescarpetas($SexualescarpetasDto);
        if ($rsValidaSexualesDto == "") {
            $SexualescarpetasDto = $ViolenciacarpetasController->insertSexualescarpetas($SexualescarpetasDto);
            $x = 1;
            if ($SexualescarpetasDto != "") {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($SexualescarpetasDto) . '",';
                $json .= '"data":[';
                foreach ($SexualescarpetasDto as $Sexual) {
                    $json .= "{";
                    $json .= '"idSexualCarpeta":' . json_encode(utf8_encode($Sexual->getIdSexualCarpeta())) . ",";
                    $json .= '"cveModalidadAcoso":' . json_encode(utf8_encode($Sexual->getCveModalidadAcoso())) . ",";
                    $json .= '"cveAmbitoAcoso":' . json_encode(utf8_encode($Sexual->getCveAmbitoAcoso())) . ",";
                    $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($Sexual->getIdImpOfeDelCarpeta())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($SexualescarpetasDto)) {
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
        return $json;
    }

    public function selectSexuales($SexualescarpetasDto) {
        $SexualescarpetasDto = $this->validarSexualescarpetas($SexualescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $SexualescarpetasDto = $ViolenciacarpetasController->selectSexualescarpetas($SexualescarpetasDto);

        $ambitoAcosoDto = new AmbitosacososDTO();
        $ambitoAcosoDao = new AmbitosacososDAO();

        $modalidadAcosoDto = new ModalidadesacososDTO();
        $modalidadAcosoDao = new ModalidadesacososDAO();

        $json = "";
        $x = 1;
        if ($SexualescarpetasDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($SexualescarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($SexualescarpetasDto as $Sexual) {
                $ambitoAcosoDto->setCveAmbitoAcoso($Sexual->getCveAmbitoAcoso());
                $rsAmbito = $ambitoAcosoDao->selectAmbitosacosos($ambitoAcosoDto);

                $modalidadAcosoDto->setCveModalidadAcoso($Sexual->getCveModalidadAcoso());
                $rsModalidad = $modalidadAcosoDao->selectModalidadesacosos($modalidadAcosoDto);


                $json .= "{";
                $json .= '"idSexualCarpeta":' . json_encode(utf8_encode($Sexual->getIdSexualCarpeta())) . ",";
                $json .= '"cveModalidadAcoso":' . json_encode(utf8_encode($Sexual->getCveModalidadAcoso())) . ",";
                if ($rsModalidad != "") {
                    $json .= '"desModalidad":' . json_encode(utf8_encode($rsModalidad[0]->getDesModalidadAcoso())) . ",";
                } else {
                    $json .= '"desModalidad": "N/A",';
                }
                $json .= '"cveAmbitoAcoso":' . json_encode(utf8_encode($Sexual->getCveAmbitoAcoso())) . ",";
                if ($rsAmbito != "") {
                    $json .= '"desAmbito":' . json_encode(utf8_encode($rsAmbito[0]->getDesAmbitoAcoso())) . ",";
                } else {
                    $json .= '"desAmbito": "N/A",';
                }
                $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($Sexual->getIdImpOfeDelCarpeta())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($SexualescarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontraron registros."}';
        }
        return $json;
    }

    public function eliminarSexual($SexualescarpetasDto) {
        $SexualescarpetasDto = $this->validarSexualescarpetas($SexualescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $SexualescarpetasDto = $ViolenciacarpetasController->updateSexualescarpetas($SexualescarpetasDto);
        $json = "";
        $x = 1;
        if ($SexualescarpetasDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($SexualescarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($SexualescarpetasDto as $Sexual) {
                $json .= "{";
                $json .= '"idSexualCarpeta":' . json_encode(utf8_encode($Sexual->getIdSexualCarpeta())) . ",";
                $json .= '"cveModalidadAcoso":' . json_encode(utf8_encode($Sexual->getCveModalidadAcoso())) . ",";
                $json .= '"cveAmbitoAcoso":' . json_encode(utf8_encode($Sexual->getCveAmbitoAcoso())) . ",";
                $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($Sexual->getIdImpOfeDelCarpeta())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($SexualescarpetasDto)) {
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

    public function updateSexuales($SexualescarpetasDto) {
        $SexualescarpetasDto = $this->validarSexualescarpetas($SexualescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $json = "";
        $SexualesAuxDto = new SexualescarpetasDTO();
        $SexualesAuxDto->setCveModalidadAcoso($SexualescarpetasDto->getCveModalidadAcoso());
        $SexualesAuxDto->setCveAmbitoAcoso($SexualescarpetasDto->getCveAmbitoAcoso());
        $SexualesAuxDto->setIdImpOfeDelCarpeta($SexualescarpetasDto->getIdImpOfeDelCarpeta());
        $SexualesAuxDto->setActivo('S');
        $rsValidaSexualesDto = $ViolenciacarpetasController->selectSexualescarpetas($SexualesAuxDto);
        if ($rsValidaSexualesDto == "") {
            $SexualescarpetasDto = $ViolenciacarpetasController->updateSexualescarpetas($SexualescarpetasDto);
            $x = 1;
            if ($SexualescarpetasDto != "") {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($SexualescarpetasDto) . '",';
                $json .= '"data":[';
                foreach ($SexualescarpetasDto as $Sexual) {
                    $json .= "{";
                    $json .= '"idSexualCarpeta":' . json_encode(utf8_encode($Sexual->getIdSexualCarpeta())) . ",";
                    $json .= '"cveModalidadAcoso":' . json_encode(utf8_encode($Sexual->getCveModalidadAcoso())) . ",";
                    $json .= '"cveAmbitoAcoso":' . json_encode(utf8_encode($Sexual->getCveAmbitoAcoso())) . ",";
                    $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($Sexual->getIdImpOfeDelCarpeta())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($SexualescarpetasDto)) {
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
        return $json;
    }

////////////////////CONDUCTAS////////////////////////////////
    public function guardarConductas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto) {
        $sexualesconductascarpetasDto = $this->validarSexualesconductascarpetas($sexualesconductascarpetasDto);
        $detallessexualesconductascarpetasDto = $this->validarDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $rs = $ViolenciacarpetasController->insertConductascarpetas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto);
        return $rs;
    }

    public function updateConductas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto) {
        $sexualesconductascarpetasDto = $this->validarSexualesconductascarpetas($sexualesconductascarpetasDto);
        $detallessexualesconductascarpetasDto = $this->validarDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $rs = $ViolenciacarpetasController->updateConductascarpetas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto);
        return $rs;
    }

    public function eliminarConducta($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto) {
        $sexualesconductascarpetasDto = $this->validarSexualesconductascarpetas($sexualesconductascarpetasDto);
        $detallessexualesconductascarpetasDto = $this->validarDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $rs = $ViolenciacarpetasController->eliminarConductacarpetas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto);
        return $rs;
    }

    public function selectConductas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto) {
        $sexualesconductascarpetasDto = $this->validarSexualesconductascarpetas($sexualesconductascarpetasDto);
        $detallessexualesconductascarpetasDto = $this->validarDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $rs = $ViolenciacarpetasController->selectConductascarpetas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto);
        return $rs;
    }

    ///////////////////////////////TESTIGOS/////////////////////////////////////////////////
    public function insertTestigossexuales($TestigossexualescarpetasDto) {
        $TestigossexualescarpetasDto = $this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $json = "";
        $rsValidaTestigos = $ViolenciacarpetasController->selectTestigossexualescarpetas($TestigossexualescarpetasDto);
        if ($rsValidaTestigos == "") {
            $rsTestigossexualesDto = $ViolenciacarpetasController->insertTestigossexualescarpetas($TestigossexualescarpetasDto);
            $x = 1;
            if ($rsTestigossexualesDto != "") {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($rsTestigossexualesDto) . '",';
                $json .= '"data":[';
                foreach ($rsTestigossexualesDto as $rsTestigosexual) {
                    $json .= "{";
                    $json .= '"idTestigoSexualCarpeta":' . json_encode(utf8_encode($rsTestigosexual->getIdTestigoSexualCarpeta())) . ",";
                    $json .= '"idSexualCarpeta":' . json_encode(utf8_encode($rsTestigosexual->getIdSexualCarpeta())) . ",";
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
        return $json;
    }

    public function updateTestigossexuales($TestigossexualescarpetasDto) {
        $TestigossexualescarpetasDto = $this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $json = "";
        $TestigossexualesAuxDto = new TestigossexualescarpetasDTO();
        $TestigossexualesAuxDto->setIdSexualCarpeta($TestigossexualescarpetasDto->getIdSexualCarpeta());
        $TestigossexualesAuxDto->setPaterno($TestigossexualescarpetasDto->getPaterno());
        $TestigossexualesAuxDto->setMaterno($TestigossexualescarpetasDto->getMaterno());
        $TestigossexualesAuxDto->setNombre($TestigossexualescarpetasDto->getNombre());
        $TestigossexualesAuxDto->setCveGenero($TestigossexualescarpetasDto->getCveGenero());
        $TestigossexualesAuxDto->setActivo('S');
        $rsValidaTestigos = $ViolenciacarpetasController->selectTestigossexualescarpetas($TestigossexualesAuxDto);
        if ($rsValidaTestigos == "") {
            $rsTestigossexualesDto = $ViolenciacarpetasController->updateTestigossexualescarpetas($TestigossexualescarpetasDto);
            $x = 1;
            if ($rsTestigossexualesDto != "") {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($rsTestigossexualesDto) . '",';
                $json .= '"data":[';
                foreach ($rsTestigossexualesDto as $rsTestigosexual) {
                    $json .= "{";
                    $json .= '"idTestigoSexualCarpeta":' . json_encode(utf8_encode($rsTestigosexual->getIdTestigoSexualCarpeta())) . ",";
                    $json .= '"idSexualCarpeta":' . json_encode(utf8_encode($rsTestigosexual->getIdSexualCarpeta())) . ",";
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
        return $json;
    }

    public function deleteTestigossexuales($TestigossexualescarpetasDto) {
        $TestigossexualescarpetasDto = $this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $TestigossexualescarpetasDto->setActivo('N');
        $rsTestigossexualesDto = $ViolenciacarpetasController->updateTestigossexualescarpetas($TestigossexualescarpetasDto);
        $json = "";
        $x = 1;
        if ($rsTestigossexualesDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($rsTestigossexualesDto) . '",';
            $json .= '"data":[';
            foreach ($rsTestigossexualesDto as $rsTestigosexual) {
                $json .= "{";
                $json .= '"idTestigoSexualCarpeta":' . json_encode(utf8_encode($rsTestigosexual->getIdTestigoSexualCarpeta())) . ",";
                $json .= '"idSexualCarpeta":' . json_encode(utf8_encode($rsTestigosexual->getIdSexualCarpeta())) . ",";
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

    public function selectTestigossexuales($TestigossexualescarpetasDto) {
        $TestigossexualescarpetasDto = $this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $rsTestigossexualesDto = $ViolenciacarpetasController->selectTestigossexualescarpetas($TestigossexualescarpetasDto);
        $json = "";
        $x = 1;
        if ($rsTestigossexualesDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($rsTestigossexualesDto) . '",';
            $json .= '"data":[';
            foreach ($rsTestigossexualesDto as $rsTestigosexual) {
                $json .= "{";
                $json .= '"idTestigoSexualCarpeta":' . json_encode(utf8_encode($rsTestigosexual->getIdTestigoSexualCarpeta())) . ",";
                $json .= '"idSexualCarpeta":' . json_encode(utf8_encode($rsTestigosexual->getIdSexualCarpeta())) . ",";
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

    public function guardaEfectosViolencia($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto) {
        $violenciadegenerocarpetasDto = $this->validarViolenciadegenerocarpetas($violenciadegenerocarpetasDto);
        $efectosofendidoscarpetasDto = $this->validarEfectosofendidoscarpetas($efectosofendidoscarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $rs = $ViolenciacarpetasController->guardaEfectosViolenciacarpetas($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto);
        return $rs;
    }

    public function modificaEfectosViolencia($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto) {
        $violenciadegenerocarpetasDto = $this->validarViolenciadegenerocarpetas($violenciadegenerocarpetasDto);
        $efectosofendidoscarpetasDto = $this->validarEfectosofendidoscarpetas($efectosofendidoscarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $rs = $ViolenciacarpetasController->modificaEfectosViolenciacarpetas($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto);
        return $rs;
    }

    public function consultaEfectos($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto) {
        $violenciadegenerocarpetasDto = $this->validarViolenciadegenerocarpetas($violenciadegenerocarpetasDto);
        $efectosofendidoscarpetasDto = $this->validarEfectosofendidoscarpetas($efectosofendidoscarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $rs = $ViolenciacarpetasController->consultaEfectoscarpetas($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto);
        return $rs;
    }

    public function eliminarEfecto($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto) {
        $violenciadegenerocarpetasDto = $this->validarViolenciadegenerocarpetas($violenciadegenerocarpetasDto);
        $efectosofendidoscarpetasDto = $this->validarEfectosofendidoscarpetas($efectosofendidoscarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $rs = $ViolenciacarpetasController->eliminarEfectocarpetas($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto);
        return $rs;
    }

    ///////////////////////FACTORES SOCIALES//////////////////////
    public function insertViolenciafactoressociales($ViolenciafactoressocialescarpetasDto) {
        $ViolenciafactoressocialescarpetasDto = $this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $json = "";
        $rsValidaFactores = $ViolenciacarpetasController->selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        if ($rsValidaFactores == "") {
            $ViolenciafactoressocialescarpetasDto = $ViolenciacarpetasController->insertViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
            $x = 1;
            if ($ViolenciafactoressocialescarpetasDto != "") {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($ViolenciafactoressocialescarpetasDto) . '",';
                $json .= '"data":[';
                foreach ($ViolenciafactoressocialescarpetasDto as $Violenciafactorsocial) {
                    $json .= "{";
                    $json .= '"idViolenciaFactorSocialCarpeta":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaFactorSocialCarpeta())) . ",";
                    $json .= '"cveFactorCultural":' . json_encode(utf8_encode($Violenciafactorsocial->getCveFactorCultural())) . ",";
                    $json .= '"idViolenciaDeGeneroCarpeta":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaDeGeneroCarpeta())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($ViolenciafactoressocialescarpetasDto)) {
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
        return $json;
    }

    public function updateViolenciafactoressociales($ViolenciafactoressocialescarpetasDto) {
        $json = "";
        $ViolenciafactoressocialescarpetasDto = $this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $ViolenciafactoressocialesAuxDto = new ViolenciafactoressocialescarpetasDTO();
        $ViolenciafactoressocialesAuxDto->setCveFactorCultural($ViolenciafactoressocialescarpetasDto->getCveFactorCultural());
        $ViolenciafactoressocialesAuxDto->setIdViolenciaDeGeneroCarpeta($ViolenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta());
        $ViolenciafactoressocialesAuxDto->setActivo("S");
        $rsValidaFactores = $ViolenciacarpetasController->selectViolenciafactoressocialescarpetas($ViolenciafactoressocialesAuxDto);
        if ($rsValidaFactores == "") {
            $ViolenciafactoressocialescarpetasDto = $ViolenciacarpetasController->updateViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
            $x = 1;
            if ($ViolenciafactoressocialescarpetasDto != "") {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($ViolenciafactoressocialescarpetasDto) . '",';
                $json .= '"data":[';
                foreach ($ViolenciafactoressocialescarpetasDto as $Violenciafactorsocial) {
                    $json .= "{";
                    $json .= '"idViolenciaFactorSocialCarpeta":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaFactorSocialCarpeta())) . ",";
                    $json .= '"cveFactorCultural":' . json_encode(utf8_encode($Violenciafactorsocial->getCveFactorCultural())) . ",";
                    $json .= '"idViolenciaDeGeneroCarpeta":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaDeGeneroCarpeta())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($ViolenciafactoressocialescarpetasDto)) {
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
        return $json;
    }

    public function selectViolenciafactoressociales($ViolenciafactoressocialescarpetasDto) {
        $ViolenciafactoressocialescarpetasDto = $this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $ViolenciafactoressocialescarpetasDto = $ViolenciacarpetasController->selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        $json = "";
        $x = 1;
        if ($ViolenciafactoressocialescarpetasDto != "") {
            $factoresCulturalesDto = new FactoresculturalesDTO();
            $factoresCulturalesDao = new FactoresculturalesDAO();
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($ViolenciafactoressocialescarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($ViolenciafactoressocialescarpetasDto as $Violenciafactorsocial) {
                $factoresCulturalesDto->setCveFactorCultural($Violenciafactorsocial->getCveFactorCultural());
                $rsFactor = $factoresCulturalesDao->selectFactoresculturales($factoresCulturalesDto);
                $json .= "{";
                $json .= '"idViolenciaFactorSocialCarpeta":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaFactorSocialCarpeta())) . ",";
                $json .= '"cveFactorCultural":' . json_encode(utf8_encode($Violenciafactorsocial->getCveFactorCultural())) . ",";
                if ($rsFactor != "") {
                    $json .= '"desFactorCultural":' . json_encode(utf8_encode($rsFactor[0]->getDesFactorCultural())) . ",";
                } else {
                    $json .= '"desFactorCultural": "N/A",';
                }
                $json .= '"idViolenciaDeGeneroCarpeta":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaDeGeneroCarpeta())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ViolenciafactoressocialescarpetasDto)) {
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

    public function deleteViolenciafactoressociales($ViolenciafactoressocialescarpetasDto) {
        $ViolenciafactoressocialescarpetasDto = $this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $ViolenciafactoressocialescarpetasDto->setActivo('N');
        $ViolenciafactoressocialescarpetasDto = $ViolenciacarpetasController->updateViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        $json = "";
        $x = 1;
        if ($ViolenciafactoressocialescarpetasDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($ViolenciafactoressocialescarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($ViolenciafactoressocialescarpetasDto as $Violenciafactorsocial) {
                $json .= "{";
                $json .= '"idViolenciaFactorSocialCarpeta":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaFactorSocialCarpeta())) . ",";
                $json .= '"cveFactorCultural":' . json_encode(utf8_encode($Violenciafactorsocial->getCveFactorCultural())) . ",";
                $json .= '"idViolenciaDeGeneroCarpeta":' . json_encode(utf8_encode($Violenciafactorsocial->getIdViolenciaDeGeneroCarpeta())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ViolenciafactoressocialescarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se pudo eliminar el registro."}';
        }
        return $json;
    }

    /////////////////////////HOMICIDIOS DOLOSOS////////////////////////////////
    public function InsertHomicidiosDolosos($ViolenciahomicidiosdolososcarpetasDto) {

        $ViolenciahomicidiosdolososcarpetasDto = $this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $json = "";
        $rsValidaHomicidio = $ViolenciacarpetasController->selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        if ($rsValidaHomicidio == "") {
            $ViolenciahomicidiosdolososcarpetasDto = $ViolenciacarpetasController->insertViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
            $x = 1;
            if ($ViolenciahomicidiosdolososcarpetasDto != "") {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($ViolenciahomicidiosdolososcarpetasDto) . '",';
                $json .= '"data":[';
                foreach ($ViolenciahomicidiosdolososcarpetasDto as $Violenciahomicidiodoloso) {
                    $json .= "{";
                    $json .= '"idViolenciaHomicidioDolosoCarpeta":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaHomicidioDolosoCarpeta())) . ",";
                    $json .= '"idViolenciaDeGeneroCarpeta":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaDeGeneroCarpeta())) . ",";
                    $json .= '"cveHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getCveHomicidioDoloso())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($ViolenciahomicidiosdolososcarpetasDto)) {
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
        return $json;
    }

    public function UpdateHomicidiosDolosos($ViolenciahomicidiosdolososcarpetasDto) {

        $ViolenciahomicidiosdolososcarpetasDto = $this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $json = "";
        $ViolenciahomicidiosdolososAuxDto = new ViolenciahomicidiosdolososcarpetasDTO();
        $ViolenciahomicidiosdolososAuxDto->setIdViolenciaDeGeneroCarpeta($ViolenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta());
        $ViolenciahomicidiosdolososAuxDto->setCveHomicidioDoloso($ViolenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso());
        $ViolenciahomicidiosdolososAuxDto->setActivo('S');
        $rsValidaHomicidio = $ViolenciacarpetasController->selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososAuxDto);
        if ($rsValidaHomicidio == "") {
            $ViolenciahomicidiosdolososcarpetasDto = $ViolenciacarpetasController->updateViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
            $x = 1;
            if ($ViolenciahomicidiosdolososcarpetasDto != "") {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($ViolenciahomicidiosdolososcarpetasDto) . '",';
                $json .= '"data":[';
                foreach ($ViolenciahomicidiosdolososcarpetasDto as $Violenciahomicidiodoloso) {
                    $json .= "{";
                    $json .= '"idViolenciaHomicidioDolosoCarpeta":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaHomicidioDolosoCarpeta())) . ",";
                    $json .= '"idViolenciaDeGeneroCarpeta":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaDeGeneroCarpeta())) . ",";
                    $json .= '"cveHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getCveHomicidioDoloso())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($ViolenciahomicidiosdolososcarpetasDto)) {
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
        return $json;
    }

    public function DeleteHomicidiosDolosos($ViolenciahomicidiosdolososcarpetasDto) {

        $ViolenciahomicidiosdolososcarpetasDto = $this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $ViolenciahomicidiosdolososcarpetasDto->setActivo('N');
        //var_dump($ViolenciahomicidiosdolososcarpetasDto);
        $ViolenciahomicidiosdolososcarpetasDto = $ViolenciacarpetasController->updateViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        $json = "";
        $x = 1;
        if ($ViolenciahomicidiosdolososcarpetasDto != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($ViolenciahomicidiosdolososcarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($ViolenciahomicidiosdolososcarpetasDto as $Violenciahomicidiodoloso) {
                $json .= "{";
                $json .= '"idViolenciaHomicidioDolosoCarpeta":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaHomicidioDolosoCarpeta())) . ",";
                $json .= '"idViolenciaDeGeneroCarpeta":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaDeGeneroCarpeta())) . ",";
                $json .= '"cveHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getCveHomicidioDoloso())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ViolenciahomicidiosdolososcarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se pudo borrar el registro."}';
        }
        return $json;
    }

    public function SelectHomicidiosDolosos($ViolenciahomicidiosdolososcarpetasDto) {

        $ViolenciahomicidiosdolososcarpetasDto = $this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        $ViolenciacarpetasController = new ViolenciacarpetasController();
        $ViolenciahomicidiosdolososcarpetasDto = $ViolenciacarpetasController->selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        $json = "";
        $x = 1;
        if ($ViolenciahomicidiosdolososcarpetasDto != "") {
            $homicidiosDolososDto = new HomicidiosdolososDTO();
            $homicidiosDolososDao = new HomicidiosdolososDAO();

            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($ViolenciahomicidiosdolososcarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($ViolenciahomicidiosdolososcarpetasDto as $Violenciahomicidiodoloso) {
                $homicidiosDolososDto->setCveHomicidioDoloso($Violenciahomicidiodoloso->getCveHomicidioDoloso());
                $rsHomicidios = $homicidiosDolososDao->selectHomicidiosdolosos($homicidiosDolososDto);
                $json .= "{";
                $json .= '"idViolenciaHomicidioDolosoCarpeta":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaHomicidioDolosoCarpeta())) . ",";
                $json .= '"idViolenciaDeGeneroCarpeta":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getIdViolenciaDeGeneroCarpeta())) . ",";
                $json .= '"cveHomicidioDoloso":' . json_encode(utf8_encode($Violenciahomicidiodoloso->getCveHomicidioDoloso())) . ",";
                if ($rsHomicidios != "") {
                    $json .= '"desHomicidioDoloso":' . json_encode(utf8_encode($rsHomicidios[0]->getDesHomicidioDoloso())) . "";
                } else {
                    $json .= '"desHomicidioDoloso": "N/A"';
                }
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ViolenciahomicidiosdolososcarpetasDto)) {
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
@$idImpOfeDelCarpeta = $_POST["idImpOfeDelCarpeta"];
@$activo = $_POST["activo"];
/////////////////SEXUALES////////////////////////////////
@$idSexual = $_POST["idSexual"];
@$cveModalidadAcoso = $_POST["cveModalidadAcoso"];
@$cveAmbitoAcoso = $_POST["cveAmbitoAcoso"];
@$idImpOfeDelCarpeta = $_POST["idImpOfeDelCarpeta"];
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
@$idImpOfeDelCarpeta = $_POST["idImpOfeDelCarpeta"];
@$activo = $_POST["activo"];
////////////////////efectos ofendidos/////////////////
@$idEfectoOfendido = $_POST["idEfectoOfendido"];
@$cveDetalleEfecto = $_POST["cveDetalleEfecto"];
@$idImpOfeDelCarpeta = $_POST["idImpOfeDelCarpeta"];
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



$violenciacarpetasFacade = new ViolenciacarpetasFacade();
/////////////////TRATA DE PERSONAS////////////////////////////////
$TrataspersonascarpetasDto = new TrataspersonascarpetasDTO();
$TrataspersonascarpetasDto->setIdTrataPersonaCarpeta($idTrataPersona);
$TrataspersonascarpetasDto->setCvePaisDestino($cvePaisDestino);
if ( $cvePaisDestino == 119 ){
    $TrataspersonascarpetasDto->setCveEstadoDestino($cveEstadoDestino);
    $TrataspersonascarpetasDto->setCveMunicipioDestino($cveMunicipioDestino);
}

$TrataspersonascarpetasDto->setEstadoDestino($estadoDestino);
$TrataspersonascarpetasDto->setMunicipioDestino($municipioDestino);
$TrataspersonascarpetasDto->setCvePaisOrigen($cvePaisOrigen);
if ( $cvePaisOrigen == 119 ){
    $TrataspersonascarpetasDto->setCveEstadoOrigen($cveEstadoOrigen);
    $TrataspersonascarpetasDto->setCveMunicipioOrigen($cveMunicipioOrigen);
}
$TrataspersonascarpetasDto->setEstadoOrigen($estadoOrigen);
$TrataspersonascarpetasDto->setMunicipioOrigen($municipioOrigen);
$TrataspersonascarpetasDto->setCveTipoTrata($cveTipoTrata);
$TrataspersonascarpetasDto->setCveTrasportacion($cveTrasportacion);
$TrataspersonascarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
$TrataspersonascarpetasDto->setActivo($activo);
/////////////////SEXUALES////////////////////////////////
$sexualescarpetasDto = new SexualescarpetasDTO();
$sexualescarpetasDto->setIdSexualCarpeta($idSexual);
$sexualescarpetasDto->setCveModalidadAcoso($cveModalidadAcoso);
$sexualescarpetasDto->setCveAmbitoAcoso($cveAmbitoAcoso);
$sexualescarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
$sexualescarpetasDto->setActivo($activo);
$sexualescarpetasDto->setFechaRegistro($fechaRegistro);
$sexualescarpetasDto->setFechaActualizacion($fechaActualizacion);
//////////////SEXUALES CONDUCTA//////////////////////////
$sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
$sexualesconductascarpetasDto->setIdSexualConductaCarpeta($idSexualConducta);
$sexualesconductascarpetasDto->setIdSexualCarpeta($idSexual);
$sexualesconductascarpetasDto->setCveConducta($cveConducta);
$sexualesconductascarpetasDto->setActivo($activo);
$sexualesconductascarpetasDto->setFechaRegistro($fechaRegistro);
$sexualesconductascarpetasDto->setFechaActualizacion($fechaActualizacion);
//////////////SEXUALES DETALLE CONDUCTA//////////////////////////
$detallessexualesconductascarpetasDto = new DetallessexualesconductascarpetasDTO();
$detallessexualesconductascarpetasDto->setIdDetalleSexualConductaCarpeta($idDetalleSexualConducta);
$detallessexualesconductascarpetasDto->setCveDetalleConducta($cveDetalleConducta);
$detallessexualesconductascarpetasDto->setIdSexualConductaCarpeta($idSexualConducta);
$detallessexualesconductascarpetasDto->setActivo($activo);
$detallessexualesconductascarpetasDto->setFechaRegistro($fechaRegistro);
$detallessexualesconductascarpetasDto->setFechaActualizacion($fechaActualizacion);
//////////////TESTIGOS//////////////////////////////
$testigossexualesDto = new TestigossexualescarpetasDTO();
$testigossexualesDto->setIdTestigoSexualCarpeta($idTestigoSexual);
$testigossexualesDto->setIdSexualCarpeta($idSexual);
$testigossexualesDto->setPaterno($paterno);
$testigossexualesDto->setMaterno($materno);
$testigossexualesDto->setNombre($nombre);
$testigossexualesDto->setCveGenero($cveGenero);
$testigossexualesDto->setActivo($activo);
//////////////EFECTOS//////////////////////////////
$violenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
$violenciadegenerocarpetasDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGenero);
$violenciadegenerocarpetasDto->setCveEfecto($cveEfecto);
$violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
$violenciadegenerocarpetasDto->setActivo($activo);
//////////////EFECTOS OFENDIDOS//////////////////////////////
$efectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
$efectosofendidoscarpetasDto->setIdEfectoOfendidoCarpeta($idEfectoOfendido);
$efectosofendidoscarpetasDto->setCveDetalleEfecto($cveDetalleEfecto);
$efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
$efectosofendidoscarpetasDto->setIdReferencia($IdReferencia);
$efectosofendidoscarpetasDto->setOrigen($origen);
$efectosofendidoscarpetasDto->setActivo($activo);
//////////////factores sociales//////////////////////////////
$violenciafactoressocialesDto = new ViolenciafactoressocialescarpetasDTO();
$violenciafactoressocialesDto->setIdViolenciaFactorSocialCarpeta($idViolenciaFactorSocial);
$violenciafactoressocialesDto->setCveFactorCultural($cveFactorCultural);
$violenciafactoressocialesDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGenero);
$violenciafactoressocialesDto->setActivo($activo);
/////////////////////HOMICIDIOS DOLOSOS////////////////////////
$violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososcarpetasDTO();
$violenciahomicidiosdolososDto->setIdViolenciaHomicidioDolosoCarpeta($idViolenciaHomicidioDoloso);
$violenciahomicidiosdolososDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGenero);
$violenciahomicidiosdolososDto->setCveHomicidioDoloso($cveHomicidioDoloso);
$violenciahomicidiosdolososDto->setActivo($activo);

////////////////////////////////////////////////////////////////////////////////

if (($accion == "consultarRelacion")) {
    $rsTrata = $violenciacarpetasFacade->selectRelacion($TrataspersonascarpetasDto);
    echo $rsTrata;
} else if (($accion == "guardarTrata") && $TrataspersonascarpetasDto->getIdTrataPersonaCarpeta() == "") {
    $rsTrata = $violenciacarpetasFacade->insertTratasPersonas($TrataspersonascarpetasDto);
    echo $rsTrata;
} else if (($accion == "guardarTrata") && $TrataspersonascarpetasDto->getIdTrataPersonaCarpeta() != "") {
    $rsConsultaTrata = $violenciacarpetasFacade->updateTratasPersonas($TrataspersonascarpetasDto);
    echo $rsConsultaTrata;
} else if (($accion == "consultaTrata")) {
    $rsConsultaTrata = $violenciacarpetasFacade->selectTratasPersonas($TrataspersonascarpetasDto);
    echo $rsConsultaTrata;
} else if (($accion == "eliminar")) {
    $TrataspersonascarpetasDto->setActivo('N');
    $rsConsultaTrata = $violenciacarpetasFacade->updateTratasPersonas($TrataspersonascarpetasDto);
    echo $rsConsultaTrata;
} else if (($accion == "guardarSexuales") && $sexualescarpetasDto->getIdSexualCarpeta() == "") {
    $rsConsultaSexual = $violenciacarpetasFacade->insertSexuales($sexualescarpetasDto);
    echo $rsConsultaSexual;
} else if (($accion == "guardarSexuales") && $sexualescarpetasDto->getIdSexualCarpeta() != "") {
    $rsConsultaSexual = $violenciacarpetasFacade->updateSexuales($sexualescarpetasDto);
    echo $rsConsultaSexual;
} else if (($accion == "consultaSexual")) {
    $rsConsultaSexual = $violenciacarpetasFacade->selectSexuales($sexualescarpetasDto);
    echo $rsConsultaSexual;
} else if (($accion == "eliminarSexual")) {
    $sexualescarpetasDto->setActivo('N');
    $rsConsultaSexual = $violenciacarpetasFacade->eliminarSexual($sexualescarpetasDto);
    echo $rsConsultaSexual;
} else if (($accion == "guardarConducta") && $sexualesconductascarpetasDto->getIdSexualConductaCarpeta() == "") {
    $rs = $violenciacarpetasFacade->guardarConductas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto);
    echo $rs;
} else if (($accion == "guardarConducta") && $sexualesconductascarpetasDto->getIdSexualConductaCarpeta() != "") {
    $rs = $violenciacarpetasFacade->updateConductas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto);
    echo $rs;
} else if (($accion == "consultaConducta")) {
    $rs = $violenciacarpetasFacade->selectConductas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto);
    echo $rs;
} else if (($accion == "eliminarConducta")) {
    $sexualesconductascarpetasDto->setActivo('N');
    $detallessexualesconductascarpetasDto->setActivo('N');
    $rs = $violenciacarpetasFacade->eliminarConducta($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto);
    echo $rs;
} else if (($accion == "guardarTestigos") && $testigossexualesDto->getIdTestigoSexualCarpeta() == "") {
    $rs = $violenciacarpetasFacade->insertTestigossexuales($testigossexualesDto);
    echo $rs;
} else if (($accion == "guardarTestigos") && $testigossexualesDto->getIdTestigoSexualCarpeta() != "") {
    $rs = $violenciacarpetasFacade->updateTestigossexuales($testigossexualesDto);
    echo $rs;
} else if (($accion == "consultaTestigos")) {
    $rs = $violenciacarpetasFacade->selectTestigossexuales($testigossexualesDto);
    echo $rs;
} else if (($accion == "eliminarTestigos")) {
    $rs = $violenciacarpetasFacade->deleteTestigossexuales($testigossexualesDto);
    echo $rs;
} else if (($accion == "guardaEfectosViolencia") && ($violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() == "")) {
    $rs = $violenciacarpetasFacade->guardaEfectosViolencia($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto);
    echo $rs;
} else if (($accion == "guardaEfectosViolencia") && ($violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() != "")) {
    $rs = $violenciacarpetasFacade->modificaEfectosViolencia($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto);
    echo $rs;
} else if (($accion == "consultaEfectos")) {
    $rs = $violenciacarpetasFacade->consultaEfectos($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto);
    echo $rs;
} else if (($accion == "eliminarEfecto")) {
    $rs = $violenciacarpetasFacade->eliminarEfecto($violenciadegenerocarpetasDto, $efectosofendidoscarpetasDto);
    echo $rs;
} else if (($accion == "guardaFactorSocial") && $violenciafactoressocialesDto->getIdViolenciaFactorSocialCarpeta() == "") {
    $rs = $violenciacarpetasFacade->insertViolenciafactoressociales($violenciafactoressocialesDto);
    echo $rs;
} else if (($accion == "guardaFactorSocial") && $violenciafactoressocialesDto->getIdViolenciaFactorSocialCarpeta() != "") {
    $rs = $violenciacarpetasFacade->updateViolenciafactoressociales($violenciafactoressocialesDto);
    echo $rs;
} else if (($accion == "consultaFactorSocial")) {
    $rs = $violenciacarpetasFacade->selectViolenciafactoressociales($violenciafactoressocialesDto);
    echo $rs;
} else if (($accion == "eliminarFactorSocial")) {
    $rs = $violenciacarpetasFacade->deleteViolenciafactoressociales($violenciafactoressocialesDto);
    echo $rs;
} else if (($accion == "guardaHomicidios") && ($violenciahomicidiosdolososDto->getIdViolenciaHomicidioDolosoCarpeta() == "")) {
    $rs = $violenciacarpetasFacade->InsertHomicidiosDolosos($violenciahomicidiosdolososDto);
    echo $rs;
} else if (($accion == "guardaHomicidios") && ($violenciahomicidiosdolososDto->getIdViolenciaHomicidioDolosoCarpeta() != "")) {
    $rs = $violenciacarpetasFacade->UpdateHomicidiosDolosos($violenciahomicidiosdolososDto);
    echo $rs;
} else if (($accion == "consultaHomicidio")) {
    $rs = $violenciacarpetasFacade->SelectHomicidiosDolosos($violenciahomicidiosdolososDto);
    echo $rs;
} else if (($accion == "eliminarHomicidios")) {
    //var_dump($violenciahomicidiosdolososDto);
    $rs = $violenciacarpetasFacade->DeleteHomicidiosDolosos($violenciahomicidiosdolososDto);
    echo $rs;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?> 
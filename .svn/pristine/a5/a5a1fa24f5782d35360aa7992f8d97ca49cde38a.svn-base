<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/conductas/ConductasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/conductas/ConductasDTO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallesconductas/DetallesconductasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallesconductas/DetallesconductasDTO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectos/EfectosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectos/EfectosDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallesefectos/DetallesefectosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallesefectos/DetallesefectosDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidoscarpetas/EfectosofendidoscarpetasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class ViolenciacarpetasController {

    private $proveedor;

    public function __construct() {
        
    }

///////////////////////////VALIDACIONES///////////////////////////////////////////////////////////////////////////////////////
    public function validarTrataspersonascarpetas($TrataspersonascarpetasDto) {
//        print_r($TrataspersonascarpetasDto);
//        print_r($TrataspersonascarpetasDto);
//        $TrataspersonascarpetasDto = new TrataspersonasDTO();
        $TrataspersonascarpetasDto->setIdTrataPersonaCarpeta(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getIdTrataPersonaCarpeta()))));
        $TrataspersonascarpetasDto->setCveEstadoDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getCveEstadoDestino()))));
        $TrataspersonascarpetasDto->setCveMunicipioDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getCveMunicipioDestino()))));
        $TrataspersonascarpetasDto->setCvePaisDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getCvePaisDestino()))));
        $TrataspersonascarpetasDto->setEstadoDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getEstadoDestino()))));
        $TrataspersonascarpetasDto->setMunicipioDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getMunicipioDestino()))));
        $TrataspersonascarpetasDto->setCveEstadoOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getCveEstadoOrigen()))));
        $TrataspersonascarpetasDto->setCveMunicipioOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getCveMunicipioOrigen()))));
        $TrataspersonascarpetasDto->setCvePaisOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getCvePaisOrigen()))));
        $TrataspersonascarpetasDto->setEstadoOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getEstadoOrigen()))));
        $TrataspersonascarpetasDto->setMunicipioOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getMunicipioOrigen()))));
        $TrataspersonascarpetasDto->setCveTipoTrata(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getCveTipoTrata()))));
        $TrataspersonascarpetasDto->setCveTrasportacion(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getCveTrasportacion()))));
        $TrataspersonascarpetasDto->setIdImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim($TrataspersonascarpetasDto->getIdImpOfeDelCarpeta()))));
        return $TrataspersonascarpetasDto;
    }

    public function validarSexualescarpetas($SexualescarpetasDto) {
        $SexualescarpetasDto->setIdSexualCarpeta(strtoupper(str_ireplace("'", "", trim($SexualescarpetasDto->getIdSexualCarpeta()))));
        $SexualescarpetasDto->setCveModalidadAcoso(strtoupper(str_ireplace("'", "", trim($SexualescarpetasDto->getCveModalidadAcoso()))));
        $SexualescarpetasDto->setCveAmbitoAcoso(strtoupper(str_ireplace("'", "", trim($SexualescarpetasDto->getCveAmbitoAcoso()))));
        $SexualescarpetasDto->setIdImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim($SexualescarpetasDto->getIdImpOfeDelCarpeta()))));
        $SexualescarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($SexualescarpetasDto->getFechaRegistro()))));
        $SexualescarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($SexualescarpetasDto->getFechaActualizacion()))));
        return $SexualescarpetasDto;
    }

    public function validarSexualesconductascarpetas($SexualesconductascarpetasDto) {
        $SexualesconductascarpetasDto->setIdSexualConductaCarpeta(strtoupper(str_ireplace("'", "", trim($SexualesconductascarpetasDto->getIdSexualConductaCarpeta()))));
        $SexualesconductascarpetasDto->setIdSexualCarpeta(strtoupper(str_ireplace("'", "", trim($SexualesconductascarpetasDto->getIdSexualCarpeta()))));
        $SexualesconductascarpetasDto->setCveConducta(strtoupper(str_ireplace("'", "", trim($SexualesconductascarpetasDto->getcveConducta()))));
        $SexualesconductascarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($SexualesconductascarpetasDto->getFechaRegistro()))));
        $SexualesconductascarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($SexualesconductascarpetasDto->getFechaActualizacion()))));
        return $SexualesconductascarpetasDto;
    }

    public function validarDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto) {
        $detallessexualesconductascarpetasDto->setIdDetalleSexualConductaCarpeta(strtoupper(str_ireplace("'", "", trim($detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()))));
        $detallessexualesconductascarpetasDto->setCveDetalleConducta(strtoupper(str_ireplace("'", "", trim($detallessexualesconductascarpetasDto->getCveDetalleConducta()))));
        $detallessexualesconductascarpetasDto->setIdSexualConductaCarpeta(strtoupper(str_ireplace("'", "", trim($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()))));
        $detallessexualesconductascarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($detallessexualesconductascarpetasDto->getFechaRegistro()))));
        $detallessexualesconductascarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($detallessexualesconductascarpetasDto->getFechaActualizacion()))));
        return $detallessexualesconductascarpetasDto;
    }

    public function validarTestigossexualescarpetas($TestigossexualescarpetasDto) {
        $TestigossexualescarpetasDto->setIdTestigoSexualCarpeta(strtoupper(str_ireplace("'", "", trim($TestigossexualescarpetasDto->getIdTestigoSexualCarpeta()))));
        $TestigossexualescarpetasDto->setIdSexualCarpeta(strtoupper(str_ireplace("'", "", trim($TestigossexualescarpetasDto->getIdSexualCarpeta()))));
        $TestigossexualescarpetasDto->setPaterno(strtoupper(str_ireplace("'", "", trim($TestigossexualescarpetasDto->getPaterno()))));
        $TestigossexualescarpetasDto->setMaterno(strtoupper(str_ireplace("'", "", trim($TestigossexualescarpetasDto->getMaterno()))));
        $TestigossexualescarpetasDto->setNombre(strtoupper(str_ireplace("'", "", trim($TestigossexualescarpetasDto->getNombre()))));
        $TestigossexualescarpetasDto->setCveGenero(strtoupper(str_ireplace("'", "", trim($TestigossexualescarpetasDto->getCveGenero()))));
        $TestigossexualescarpetasDto->setActivo(strtoupper(str_ireplace("'", "", trim($TestigossexualescarpetasDto->getActivo()))));
        $TestigossexualescarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($TestigossexualescarpetasDto->getFechaRegistro()))));
        $TestigossexualescarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($TestigossexualescarpetasDto->getFechaActualizacion()))));
        return $TestigossexualescarpetasDto;
    }

    public function validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto) {
        $ViolenciadegenerocarpetasDto->setIdViolenciaDeGeneroCarpeta(strtoupper(str_ireplace("'", "", trim($ViolenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta()))));
        $ViolenciadegenerocarpetasDto->setCveEfecto(strtoupper(str_ireplace("'", "", trim($ViolenciadegenerocarpetasDto->getCveEfecto()))));
        $ViolenciadegenerocarpetasDto->setIdImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim($ViolenciadegenerocarpetasDto->getIdImpOfeDelCarpeta()))));
        $ViolenciadegenerocarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($ViolenciadegenerocarpetasDto->getFechaRegistro()))));
        $ViolenciadegenerocarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($ViolenciadegenerocarpetasDto->getFechaActualizacion()))));
        return $ViolenciadegenerocarpetasDto;
    }

    public function validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto) {
        $EfectosofendidoscarpetasDto->setIdEfectoOfendidoCarpeta(strtoupper(str_ireplace("'", "", trim($EfectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta()))));
        $EfectosofendidoscarpetasDto->setCveDetalleEfecto(strtoupper(str_ireplace("'", "", trim($EfectosofendidoscarpetasDto->getCveDetalleEfecto()))));
        $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim($EfectosofendidoscarpetasDto->getIdImpOfeDelCarpeta()))));
        $EfectosofendidoscarpetasDto->setIdReferencia(strtoupper(str_ireplace("'", "", trim($EfectosofendidoscarpetasDto->getIdReferencia()))));
        $EfectosofendidoscarpetasDto->setOrigen(strtoupper(str_ireplace("'", "", trim($EfectosofendidoscarpetasDto->getOrigen()))));
        $EfectosofendidoscarpetasDto->setActivo(strtoupper(str_ireplace("'", "", trim($EfectosofendidoscarpetasDto->getActivo()))));
        $EfectosofendidoscarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($EfectosofendidoscarpetasDto->getFechaRegistro()))));
        $EfectosofendidoscarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($EfectosofendidoscarpetasDto->getFechaActualizacion()))));
        return $EfectosofendidoscarpetasDto;
    }

    public function validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto) {
        $ViolenciafactoressocialescarpetasDto->setIdViolenciaFactorSocialCarpeta(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()))));
        $ViolenciafactoressocialescarpetasDto->setCveFactorCultural(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialescarpetasDto->getCveFactorCultural()))));
        $ViolenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()))));
        $ViolenciafactoressocialescarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialescarpetasDto->getFechaRegistro()))));
        $ViolenciafactoressocialescarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialescarpetasDto->getFechaActualizacion()))));
        return $ViolenciafactoressocialescarpetasDto;
    }

    public function validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto) {
        $ViolenciahomicidiosdolososcarpetasDto->setIdViolenciaHomicidioDolosoCarpeta(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()))));
        $ViolenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()))));
        $ViolenciahomicidiosdolososcarpetasDto->setCveHomicidioDoloso(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()))));
        $ViolenciahomicidiosdolososcarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososcarpetasDto->getFechaRegistro()))));
        $ViolenciahomicidiosdolososcarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososcarpetasDto->getFechaActualizacion()))));
        return $ViolenciahomicidiosdolososcarpetasDto;
    }

    ///////////////////////////FIN VALIDACIONES////////////////////////////////
    //////////////////////////TRATAS DE PERSONAS////////////////////////////////

    public function insertTrataspersonascarpetas($TrataspersonascarpetasDto, $proveedor = null) {
        $TrataspersonascarpetasDto = $this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
        $TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
        $TrataspersonascarpetasDto = $TrataspersonascarpetasDao->insertTrataspersonascarpetas($TrataspersonascarpetasDto, $proveedor);
        return $TrataspersonascarpetasDto;
    }

    public function selectTrataspersonascarpetas($TrataspersonascarpetasDto, $proveedor = null) {
        $TrataspersonascarpetasDto = $this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
        $TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
        $TrataspersonascarpetasDto = $TrataspersonascarpetasDao->selectTrataspersonascarpetas($TrataspersonascarpetasDto,"", $proveedor);
        return $TrataspersonascarpetasDto;
    }

    public function updateTratasPersonascarpetas($TrataspersonascarpetasDto, $proveedor = null) {
        $TrataspersonascarpetasDto = $this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
        $TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
        $TrataspersonascarpetasDto = $TrataspersonascarpetasDao->updateTrataspersonascarpetas($TrataspersonascarpetasDto, $proveedor);
        return $TrataspersonascarpetasDto;
    }

    ////////////SEXUALES
    public function insertSexualescarpetas($SexualescarpetasDto, $proveedor = null) {
        $SexualescarpetasDto = $this->validarSexualescarpetas($SexualescarpetasDto);
        $SexualescarpetasDao = new SexualescarpetasDAO();
        $SexualescarpetasDto = $SexualescarpetasDao->insertSexualescarpetas($SexualescarpetasDto, $proveedor);
        return $SexualescarpetasDto;
    }

    public function selectSexualescarpetas($SexualescarpetasDto, $proveedor = null) {
        $SexualescarpetasDto = $this->validarSexualescarpetas($SexualescarpetasDto);
        $SexualescarpetasDao = new SexualescarpetasDAO();
        $SexualescarpetasDto = $SexualescarpetasDao->selectSexualescarpetas($SexualescarpetasDto, "", $proveedor);
        return $SexualescarpetasDto;
    }

    public function updateSexualescarpetas($SexualescarpetasDto, $proveedor = null) {
        $SexualescarpetasDto = $this->validarSexualescarpetas($SexualescarpetasDto);
        $SexualescarpetasDao = new SexualescarpetasDAO();
        $SexualescarpetasDto = $SexualescarpetasDao->updateSexualescarpetas($SexualescarpetasDto, $proveedor);
        return $SexualescarpetasDto;
    }

    ////////////////CONDUCTAS//////////////////////////////////////////////////
    public function insertConductascarpetas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto, $proveedor = null) {
        $sexualesconductascarpetasDto = $this->validarSexualesconductascarpetas($sexualesconductascarpetasDto);
        $detallessexualesconductascarpetasDto = $this->validarDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);

        $error = false;
        $result = "";
        $msg = array();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");


        $SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
        $sexualesconductascarpetasDto = $SexualesconductascarpetasDao->insertSexualesconductascarpetas($sexualesconductascarpetasDto, $this->proveedor);
        if ($sexualesconductascarpetasDto != "") {
            $detallessexualesconductascarpetasDto->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[0]->getIdSexualConductaCarpeta());
            $DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();
            $detallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasDao->insertDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto, $this->proveedor);
            if ($detallessexualesconductascarpetasDto == "") {
                $msg[] = array("No se puedo insertar el detalle de la conducta. Verifique");
                $error = true;
            }
        } else {
            $msg[] = array("No se puedo insertar la conducta. Verifique");
            $error = true;
        }
        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $listaResultados = array();
            $resultado = array(
                "idSexualConductaCarpeta" => $sexualesconductascarpetasDto[0]->getIdSexualConductaCarpeta(),
                "idSexualCarpeta" => $sexualesconductascarpetasDto[0]->getIdSexualCarpeta(),
                "cveConducta" => $sexualesconductascarpetasDto[0]->getCveConducta(),
                "idDetalleSexualConductaCarpeta" => $detallessexualesconductascarpetasDto[0]->getIdDetalleSexualConductaCarpeta(),
                "cveDetalleConducta" => $detallessexualesconductascarpetasDto[0]->getCveDetalleConducta(),
                "idSexualConductaCarpeta" => $detallessexualesconductascarpetasDto[0]->getIdSexualConductaCarpeta()
            );
            array_push($listaResultados, $resultado);
            $result = array("status" => "ok", "msj" => "La conducta y su detalle se agregaron de forma correcta", "resultado" => $listaResultados);
            $result = json_encode($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "Error" => $msg);
            $result = json_encode($result);
        }
        return $result;
    }

    public function updateConductascarpetas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto, $proveedor = null) {
        $sexualesconductascarpetasDto = $this->validarSexualesconductascarpetas($sexualesconductascarpetasDto);
        $detallessexualesconductascarpetasDto = $this->validarDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);

        $error = false;
        $result = "";
        $msg = array();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");


        $SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
        $sexualesconductascarpetasDto = $SexualesconductascarpetasDao->updateSexualesconductascarpetas($sexualesconductascarpetasDto, $this->proveedor);
        if ($sexualesconductascarpetasDto != "") {
            $detallessexualesconductascarpetasDto->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[0]->getIdSexualConductaCarpeta());
            $DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();
            $detallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasDao->updateDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto, $this->proveedor);
            if ($detallessexualesconductascarpetasDto == "") {
                $msg[] = array("No se puedo actualizar el detalle de la conducta. Verifique");
                $error = true;
            }
        } else {
            $msg[] = array("No se puedo actualizar la conducta. Verifique");
            $error = true;
        }
        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $listaResultados = array();
            $resultado = array(
                "idSexualConductaCarpeta" => $sexualesconductascarpetasDto[0]->getIdSexualConductaCarpeta(),
                "idSexualCarpeta" => $sexualesconductascarpetasDto[0]->getIdSexualCarpeta(),
                "cveConducta" => $sexualesconductascarpetasDto[0]->getCveConducta(),
                "idDetalleSexualConductaCarpeta" => $detallessexualesconductascarpetasDto[0]->getIdDetalleSexualConductaCarpeta(),
                "cveDetalleConducta" => $detallessexualesconductascarpetasDto[0]->getCveDetalleConducta(),
                "idSexualConductaCarpeta" => $detallessexualesconductascarpetasDto[0]->getIdSexualConductaCarpeta()
            );
            array_push($listaResultados, $resultado);
            $result = array("status" => "ok", "msj" => "La conducta y su detalle se actualizaron de forma correcta", "resultado" => $listaResultados);
            $result = json_encode($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "Error" => $msg);
            $result = json_encode($result);
        }
        return $result;
    }

    public function eliminarConductacarpetas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto, $proveedor = null) {
        $sexualesconductascarpetasDto = $this->validarSexualesconductascarpetas($sexualesconductascarpetasDto);
        $detallessexualesconductascarpetasDto = $this->validarDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);

        $error = false;
        $result = "";
        $msg = array();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");


        $SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
        $sexualesconductascarpetasDto = $SexualesconductascarpetasDao->updateSexualesconductascarpetas($sexualesconductascarpetasDto, $this->proveedor);
        if ($sexualesconductascarpetasDto != "") {
            $detallessexualesconductascarpetasDto->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[0]->getIdSexualConductaCarpeta());
            $DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();
            $detallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasDao->updateDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto, $this->proveedor);
            if ($detallessexualesconductascarpetasDto == "") {
                $msg[] = array("No se puedo actualizar el detalle de la conducta. Verifique");
                $error = true;
            }
        } else {
            $msg[] = array("No se puedo actualizar la conducta. Verifique");
            $error = true;
        }
        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $listaResultados = array();
            $resultado = array(
                "idSexualConductaCarpeta" => $sexualesconductascarpetasDto[0]->getIdSexualConductaCarpeta(),
                "idSexualCarpeta" => $sexualesconductascarpetasDto[0]->getIdSexualCarpeta(),
                "cveConducta" => $sexualesconductascarpetasDto[0]->getCveConducta(),
                "idDetalleSexualConductaCarpeta" => $detallessexualesconductascarpetasDto[0]->getIdDetalleSexualConductaCarpeta(),
                "cveDetalleConducta" => $detallessexualesconductascarpetasDto[0]->getCveDetalleConducta(),
                "idSexualConductaCarpeta" => $detallessexualesconductascarpetasDto[0]->getIdSexualConductaCarpeta()
            );
            array_push($listaResultados, $resultado);
            $result = array("status" => "ok", "msj" => "La conducta y su detalle se actualizaron de forma correcta", "resultado" => $listaResultados);
            $result = json_encode($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "Error" => $msg);
            $result = json_encode($result);
        }
        return $result;
    }

    public function selectConductascarpetas($sexualesconductascarpetasDto, $detallessexualesconductascarpetasDto = "") {
        $json = "";
        $x = 1;
        $i = 1;
        $sexualesconductascarpetasDto = $this->validarSexualesconductascarpetas($sexualesconductascarpetasDto);
        $detallessexualesconductascarpetasDto = $this->validarDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
        $SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
        $sexualesconductascarpetasDto = $SexualesconductascarpetasDao->selectSexualesconductascarpetas($sexualesconductascarpetasDto);
        if ($sexualesconductascarpetasDto != "") {
            $DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();

            $conductasDao = new ConductasDAO();
            $conductasDto = new ConductasDTO();
            $detallesConductasDao = new DetallesconductasDAO();
            $detallesConductasDto = new DetallesconductasDTO();

            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($sexualesconductascarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($sexualesconductascarpetasDto as $sexualconducta) {
                $conductasDto->setCveConducta($sexualconducta->getCveConducta());
                $rsConducta = $conductasDao->selectConductas($conductasDto);

                $json .= "{";
                $json .= '"idSexualConductaCarpeta":' . json_encode(utf8_encode($sexualconducta->getIdSexualConductaCarpeta())) . ",";
                $json .= '"idSexualCarpeta":' . json_encode(utf8_encode($sexualconducta->getIdSexualCarpeta())) . ",";
                $json .= '"cveConducta":' . json_encode(utf8_encode($sexualconducta->getCveConducta())) . ",";
                if ($rsConducta != "") {
                    $json .= '"desConducta":' . json_encode(utf8_encode($rsConducta[0]->getDesConducta())) . ",";
                } else {
                    $json .= '"desConducta": "N/A",';
                }
                $json .= '"dataDetalle":[';
                $detallessexualesconductascarpetasDto->setIdSexualConductaCarpeta($sexualconducta->getIdSexualConductaCarpeta());
                $detallessexualesconductas = $DetallessexualesconductascarpetasDao->selectDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
                if ($detallessexualesconductas != "") {
                    foreach ($detallessexualesconductas as $detallessexualconducta) {
                        $detallesConductasDto->setCveDetalleConducta($detallessexualconducta->getCveDetalleConducta());
                        $rsDetalleConducta = $detallesConductasDao->selectDetallesconductas($detallesConductasDto);
                        $json .= "{";
                        $json .= '"idDetalleSexualConductaCarpeta":' . json_encode(utf8_encode($detallessexualconducta->getIdDetalleSexualConductaCarpeta())) . ",";
                        $json .= '"cveDetalleConducta":' . json_encode(utf8_encode($detallessexualconducta->getCveDetalleConducta())) . ",";
                        if ($rsDetalleConducta != "") {
                            $json .= '"desDetalleConducta":' . json_encode(utf8_encode($rsDetalleConducta[0]->getDesDetalleConducta())) . ",";
                        } else {
                            $json .= '"desDetalleConducta": "N/A",';
                        }
                        $json .= '"idSexualConductaCarpeta":' . json_encode(utf8_encode($detallessexualconducta->getIdSexualConductaCarpeta())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($detallessexualesconductas)) {
                            $json .= ",";
                        }
                    }
                    $json .= "]";
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se encontro detalle de la conducta."}';
                }
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($sexualesconductascarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro conductas."}';
        }
        return $json;
    }

//////////////////////////TESTIGOS
    public function insertTestigossexualescarpetas($TestigossexualescarpetasDto, $proveedor = null) {
        $TestigossexualescarpetasDto = $this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
        $TestigossexualescarpetasDao = new TestigossexualescarpetasDAO();
        $TestigossexualescarpetasDto = $TestigossexualescarpetasDao->insertTestigossexualescarpetas($TestigossexualescarpetasDto, $proveedor);
        return $TestigossexualescarpetasDto;
    }

    public function selectTestigossexualescarpetas($TestigossexualescarpetasDto, $proveedor = null) {
        $TestigossexualescarpetasDto = $this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
        $TestigossexualescarpetasDao = new TestigossexualescarpetasDAO();
        $TestigossexualescarpetasDto = $TestigossexualescarpetasDao->selectTestigossexualescarpetas($TestigossexualescarpetasDto, "", $proveedor);
        return $TestigossexualescarpetasDto;
    }

    public function updateTestigossexualescarpetas($TestigossexualescarpetasDto, $proveedor = null) {
        $TestigossexualescarpetasDto = $this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
        $TestigossexualescarpetasDao = new TestigossexualescarpetasDAO();
        $TestigossexualescarpetasDto = $TestigossexualescarpetasDao->updateTestigossexualescarpetas($TestigossexualescarpetasDto, $proveedor);
        return $TestigossexualescarpetasDto;
    }

    /////////////////////////EFECTOS///////////////////
    public function guardaEfectosViolenciacarpetas($ViolenciadegenerocarpetasDto, $EfectosofendidoscarpetasDto, $proveedor = null) {
        $ViolenciadegenerocarpetasDto = $this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
        $EfectosofendidoscarpetasDto = $this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);


        $ViolenciadegeneroDao = new ViolenciadegenerocarpetasDAO();
        $EfectosofendidosDao = new EfectosofendidoscarpetasDAO();
        $EfectosofendidosAuxDto = new EfectosofendidoscarpetasDTO();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");

        $rsViolenciadegenero = $ViolenciadegeneroDao->selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);

        if ($rsViolenciadegenero != "") {
            $EfectosofendidosAuxDto->setCveDetalleEfecto($EfectosofendidoscarpetasDto->getCveDetalleEfecto());
            $EfectosofendidosAuxDto->setCveDetalleEfecto($EfectosofendidoscarpetasDto->getCveDetalleEfecto());
            $EfectosofendidosAuxDto->setIdImpOfeDelCarpeta($EfectosofendidoscarpetasDto->getIdImpOfeDelCarpeta());
            $EfectosofendidosAuxDto->setIdReferencia($rsViolenciadegenero[0]->getIdViolenciaDeGeneroCarpeta());
            $EfectosofendidosAuxDto->setOrigen($EfectosofendidoscarpetasDto->getOrigen());
            $EfectosofendidosAuxDto->setActivo('S');
            $rsValidaEfecto = $EfectosofendidosDao->selectEfectosofendidoscarpetas($EfectosofendidosAuxDto, "",$proveedor);

            if ($rsValidaEfecto == "") {
                $error = false;
                $result = "";
                $msg = array();
                $rsViolenciadegenero = $ViolenciadegeneroDao->selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
                if ($rsViolenciadegenero == "") {
                    $ViolenciadegenerocarpetasDto = $ViolenciadegeneroDao->insertViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto, $this->proveedor);
                    if ($ViolenciadegenerocarpetasDto != "") {
                        $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($ViolenciadegenerocarpetasDto[0]->getIdImpOfeDelCarpeta());
                        $EfectosofendidoscarpetasDto->setIdReferencia($ViolenciadegenerocarpetasDto[0]->getIdViolenciaDeGeneroCarpeta());
                        $EfectosofendidoscarpetasDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                        $EfectosofendidosDao = new EfectosofendidoscarpetasDAO();
                        $EfectosofendidoscarpetasDto = $EfectosofendidosDao->insertEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, $this->proveedor);
                        if ($EfectosofendidoscarpetasDto == "") {
                            $msg[] = array("No se puedo insertar el detalle del efecto. Verifique");
                            $error = true;
                        }
                    } else {
                        $msg[] = array("No se puedo insertar el efecto. Verifique");
                        $error = true;
                    }
                } else {
                    $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($rsViolenciadegenero[0]->getIdImpOfeDelCarpeta());
                    $EfectosofendidoscarpetasDto->setIdReferencia($rsViolenciadegenero[0]->getIdViolenciaDeGeneroCarpeta());
                    $EfectosofendidoscarpetasDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                    $EfectosofendidoscarpetasDto = $EfectosofendidosDao->insertEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, $this->proveedor);
                    if ($EfectosofendidoscarpetasDto == "") {
                        $msg[] = array("No se puedo insertar el detalle del efecto. Verifique");
                        $error = true;
                    }
                }
            } else {
                $msg[] = array("El registro se encuentra dado de alta. Verifique");
                $error = true;
            }
        } else {
            $error = false;
            $result = "";
            $msg = array();
            $rsViolenciadegenero = $ViolenciadegeneroDao->selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
            if ($rsViolenciadegenero == "") {
                $ViolenciadegenerocarpetasDto = $ViolenciadegeneroDao->insertViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto, $this->proveedor);
                if ($ViolenciadegenerocarpetasDto != "") {
                    $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($ViolenciadegenerocarpetasDto[0]->getIdImpOfeDelCarpeta());
                    $EfectosofendidoscarpetasDto->setIdReferencia($ViolenciadegenerocarpetasDto[0]->getIdViolenciaDeGeneroCarpeta());
                    $EfectosofendidoscarpetasDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                    $EfectosofendidosDao = new EfectosofendidoscarpetasDAO();
                    $EfectosofendidoscarpetasDto = $EfectosofendidosDao->insertEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, $this->proveedor);
                    if ($EfectosofendidoscarpetasDto == "") {
                        $msg[] = array("No se puedo insertar el detalle del efecto. Verifique");
                        $error = true;
                    }
                } else {
                    $msg[] = array("No se puedo insertar el efecto. Verifique");
                    $error = true;
                }
            } else {
                $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($rsViolenciadegenero[0]->getIdImpOfeDelCarpeta());
                $EfectosofendidoscarpetasDto->setIdReferencia($rsViolenciadegenero[0]->getIdViolenciaDeGeneroCarpeta());
                $EfectosofendidoscarpetasDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                $EfectosofendidoscarpetasDto = $EfectosofendidosDao->insertEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, $this->proveedor);
                if ($EfectosofendidoscarpetasDto == "") {
                    $msg[] = array("No se puedo insertar el detalle del efecto. Verifique");
                    $error = true;
                }
            }
        }

        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $result = array("status" => "ok", "msj" => "La conducta y su detalle se agregaron de forma correcta");
            $result = json_encode($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "mnj" => $msg);
            $result = json_encode($result);
        }

        return $result;
    }

    public function modificaEfectosViolenciacarpetas($ViolenciadegenerocarpetasDto, $EfectosofendidoscarpetasDto, $proveedor = null) {
        $ViolenciadegenerocarpetasDto = $this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
        $EfectosofendidoscarpetasDto = $this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
        $ViolenciadegeneroAuxDto = new ViolenciadegenerocarpetasDTO();
        $error = false;
        $result = "";
        $msg = array();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");

        $ViolenciadegeneroDao = new ViolenciadegenerocarpetasDAO();
        $ViolenciadegeneroAux = new ViolenciadegenerocarpetasDTO();
        $EfectosofendidosDao = new EfectosofendidoscarpetasDAO();

        $ViolenciadegeneroAux->setCveEfecto($ViolenciadegenerocarpetasDto->getCveEfecto());
        $ViolenciadegeneroAux->setIdImpOfeDelCarpeta($ViolenciadegenerocarpetasDto->getIdImpOfeDelCarpeta());
        $ViolenciadegeneroAux->setActivo('S');
        $rsViolenciadegenero = $ViolenciadegeneroDao->selectViolenciadegenerocarpetas($ViolenciadegeneroAux);
        if ($rsViolenciadegenero != "") {
            $EfectosofendidosAuxDto = new EfectosofendidoscarpetasDTO();
            $EfectosofendidosAuxDto->setCveDetalleEfecto($EfectosofendidoscarpetasDto->getCveDetalleEfecto());
            $EfectosofendidosAuxDto->setIdImpOfeDelCarpeta($EfectosofendidoscarpetasDto->getIdImpOfeDelCarpeta());
            $EfectosofendidosAuxDto->setIdReferencia($rsViolenciadegenero[0]->getIdViolenciaDeGeneroCarpeta());
            $EfectosofendidosAuxDto->setOrigen('V');
            $EfectosofendidosAuxDto->setActivo('S');
            $rsEfectos = $EfectosofendidosDao->selectEfectosofendidoscarpetas($EfectosofendidosAuxDto);
            if ($rsEfectos == "") {
                $EfectosofendidoscarpetasDto = $EfectosofendidosDao->updateEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, $this->proveedor);
                if ($EfectosofendidoscarpetasDto == "") {
                    $msg[] = array("No se puedo modificar el detalle del efecto. Verifique");
                    $error = true;
                }
            } else {
                $msg[] = array("El detalle del efecto ya se encuentra registrado. Verifique.");
                $error = true;
            }
        } else {
            $EfectosofendidosAuxDto = new EfectosofendidoscarpetasDTO();
            $EfectosofendidosAuxDto->setCveDetalleEfecto($EfectosofendidoscarpetasDto->getCveDetalleEfecto());
            $EfectosofendidosAuxDto->setIdImpOfeDelCarpeta($EfectosofendidoscarpetasDto->getIdImpOfeDelCarpeta());
            $EfectosofendidosAuxDto->setIdReferencia($ViolenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta());
            $EfectosofendidosAuxDto->setOrigen('V');
            $EfectosofendidosAuxDto->setActivo('S');
            $rsEfectos = $EfectosofendidosDao->selectEfectosofendidoscarpetas($EfectosofendidosAuxDto);
            if ($rsEfectos != "") {
                $ViolenciadegenerocarpetasDto = $ViolenciadegeneroDao->insertViolenciadegenerocarpetas($ViolenciadegeneroAux, $this->proveedor);
                if ($ViolenciadegenerocarpetasDto != "") {
                    $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($ViolenciadegeneroAux->getIdImpOfeDelCarpeta());
                    $EfectosofendidoscarpetasDto->setIdReferencia($ViolenciadegeneroAux->getIdViolenciaDeGeneroCarpeta());
                    $EfectosofendidoscarpetasDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                    $EfectosofendidosDao = new EfectosofendidoscarpetasDAO();
                    $EfectosofendidoscarpetasDto = $EfectosofendidosDao->insertEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, $this->proveedor);
                    if ($EfectosofendidoscarpetasDto == "") {
                        $msg[] = array("No se puedo insertar el detalle del efecto. Verifique");
                        $error = true;
                    }
                } else {
                    $msg[] = array("No se puedo insertar el efecto. Verifique");
                    $error = true;
                }
            } else {
                $ViolenciadegenerocarpetasDto = $ViolenciadegeneroDao->updateViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto, $this->proveedor);
                if ($ViolenciadegenerocarpetasDto != "") {
                    $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($ViolenciadegenerocarpetasDto[0]->getIdImpOfeDelCarpeta());
                    $EfectosofendidoscarpetasDto->setIdReferencia($ViolenciadegenerocarpetasDto[0]->getIdViolenciaDeGeneroCarpeta());
                    $EfectosofendidoscarpetasDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                    $EfectosofendidoscarpetasDto->setActivo('S'); //// 
                    $EfectosofendidosDao = new EfectosofendidoscarpetasDAO();
                    $EfectosofendidoscarpetasDto = $EfectosofendidosDao->updateEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, $this->proveedor);
                    if ($EfectosofendidoscarpetasDto == "") {
                        $msg[] = array("No se puedo actualizar el detalle del efecto. Verifique");
                        $error = true;
                    }
                } else {
                    $msg[] = array("No se puedo actualizar el efecto. Verifique");
                    $error = true;
                }
            }
        }

        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $result = array("status" => "ok", "msj" => "La conducta y su detalle se actualizaron de forma correcta");
            $result = json_encode($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "mnj" => $msg);
            $result = json_encode($result);
        }
        return $result;
    }

    public function consultaEfectoscarpetas($ViolenciadegenerocarpetasDto, $EfectosofendidoscarpetasDto, $proveedor = null) {
        $ViolenciadegenerocarpetasDto = $this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
        $EfectosofendidoscarpetasDto = $this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
        $json = "";
        $x = 1;
        $result = "";
        $msg = array();

        $ViolenciadegeneroDao = new ViolenciadegenerocarpetasDAO();
        $EfectosofendidosDao = new EfectosofendidoscarpetasDAO();

        $ViolenciadegenerocarpetasDto = $ViolenciadegeneroDao->selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto, $proveedor);
        if ($ViolenciadegenerocarpetasDto != "") {
            $efectosDao = new EfectosDAO();
            $efectosDto = new EfectosDTO();
            $detallesEfectosDao = new DetallesefectosDAO();
            $detallesEfectosDto = new DetallesefectosDTO();

            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($ViolenciadegenerocarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($ViolenciadegenerocarpetasDto as $violenciadegenero) {
                $efectosDto->setCveEfecto($violenciadegenero->getCveEfecto());
                $rsEfectos = $efectosDao->selectEfectos($efectosDto);
                $i = 1;
                $json .= "{";
                $json .= '"idViolenciaDeGeneroCarpeta":' . json_encode(utf8_encode($violenciadegenero->getIdViolenciaDeGeneroCarpeta())) . ",";
                $json .= '"cveEfecto":' . json_encode(utf8_encode($violenciadegenero->getCveEfecto())) . ",";
                if ($rsEfectos != "") {
                    $json .= '"desEfecto":' . json_encode(utf8_encode($rsEfectos[0]->getDesEfecto())) . ",";
                } else {
                    $json .= '"desEfecto": "N/A",';
                }
                $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($violenciadegenero->getIdImpOfeDelCarpeta())) . ",";
                $json .= '"dataDetalle":[';
                $EfectosofendidoscarpetasDto->setIdReferencia($violenciadegenero->getIdViolenciaDeGeneroCarpeta());
                $EfectosofendidoscarpetasDto->setOrigen("V");
                $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($violenciadegenero->getIdImpOfeDelCarpeta());
                $rsEfectosofendidosDto = $EfectosofendidosDao->selectEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, "", $proveedor);
                if ($rsEfectosofendidosDto != "") {
                    foreach ($rsEfectosofendidosDto as $efectosofendidos) {
                        $detallesEfectosDto->setCveDetalleEfecto($efectosofendidos->getCveDetalleEfecto());
                        $rsDetalleEfecto = $detallesEfectosDao->selectDetallesefectos($detallesEfectosDto);

                        $json .= "{";
                        $json .= '"idEfectoOfendidoCarpeta":' . json_encode(utf8_encode($efectosofendidos->getIdEfectoOfendidoCarpeta())) . ",";
                        $json .= '"cveDetalleEfecto":' . json_encode(utf8_encode($efectosofendidos->getCveDetalleEfecto())) . ",";
                        if ($rsDetalleEfecto != "") {
                            $json .= '"desDetalleEfecto":' . json_encode(utf8_encode($rsDetalleEfecto[0]->getDesDetalleEfecto())) . ",";
                        } else {
                            $json .= '"desDetalleEfecto": "N/A",';
                        }
                        $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($efectosofendidos->getIdImpOfeDelCarpeta())) . ",";
                        $json .= '"idReferencia":' . json_encode(utf8_encode($efectosofendidos->getIdReferencia())) . ",";
                        $json .= '"origen":' . json_encode(utf8_encode($efectosofendidos->getOrigen())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($rsEfectosofendidosDto)) {
                            $json .= ",";
                        }
                    }
                    $json .= "]";
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se encontro efectos."}';
                }
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ViolenciadegenerocarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro efectos."}';
        }
        return $json;
    }

    public function eliminarEfectocarpetas($ViolenciadegenerocarpetasDto, $EfectosofendidoscarpetasDto, $proveedor = null) {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $error = false;
        $msg = array();

        $ViolenciadegenerocarpetasDto = $this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
        $EfectosofendidoscarpetasDto = $this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);

        $EfectosofendidosDao = new EfectosofendidoscarpetasDAO();
        $EfectosofendidosAuxDto = new EfectosofendidoscarpetasDTO();
        $ViolenciadegeneroDao = new ViolenciadegenerocarpetasDAO();

        $EfectosofendidoscarpetasDto->setActivo('N');
        $rsEfectosOfendidos = $EfectosofendidosDao->updateEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, $this->proveedor);
        if ($rsEfectosOfendidos != "") {
            $EfectosofendidosAuxDto->setIdReferencia($ViolenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta());
            $EfectosofendidosAuxDto->setOrigen('V');
            $EfectosofendidosAuxDto->setActivo('S');
            $totalActivosEfectos = $EfectosofendidosDao->selectEfectosofendidoscarpetas($EfectosofendidosAuxDto, "", $this->proveedor);
            if ($totalActivosEfectos == "") {
                $ViolenciadegenerocarpetasDto->setActivo('N');
                $rsViolencia = $ViolenciadegeneroDao->updateViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto, $this->proveedor);
                if ($rsViolencia == "") {
                    $msg[] = array("No se puedo eliminar el efecto. Verifique");
                    $error = true;
                }
            }
        } else {
            $msg[] = array("No se puedo eliminar el detalle del efecto. Verifique");
            $error = true;
        }
        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $result = array("status" => "ok", "msj" => "El registro se elimino de forma correcta");
            $result = json_encode($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "Error" => $error);
            $result = json_encode($result);
        }

        return $result;
    }

////////////////////factores sociales///////////////////////////////////////////
    public function insertViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto, $proveedor = null) {
        $ViolenciafactoressocialescarpetasDto = $this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        $ViolenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
        $ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasDao->insertViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto, $proveedor);
        return $ViolenciafactoressocialescarpetasDto;
    }

    public function updateViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto, $proveedor = null) {
        $ViolenciafactoressocialescarpetasDto = $this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        $ViolenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
        $ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasDao->updateViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto, $proveedor);
        return $ViolenciafactoressocialescarpetasDto;
    }

    public function selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto, $proveedor = null) {
        $ViolenciafactoressocialescarpetasDto = $this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
        $ViolenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
        $ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto, $proveedor);
        return $ViolenciafactoressocialescarpetasDto;
    }

    ///////////////////////////homicidios dolosos///////////////////////////////
    public function insertViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto, $proveedor = null) {
        $ViolenciahomicidiosdolososcarpetasDto = $this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        $ViolenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
        $ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasDao->insertViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto, $proveedor);
        return $ViolenciahomicidiosdolososcarpetasDto;
    }

    public function updateViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto, $proveedor = null) {
        $ViolenciahomicidiosdolososcarpetasDto = $this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        $ViolenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
        //var_dump($ViolenciahomicidiosdolososcarpetasDto);
        $ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasDao->updateViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto, $proveedor);
        return $ViolenciahomicidiosdolososcarpetasDto;
    }

    public function selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto, $proveedor = null) {
        $ViolenciahomicidiosdolososcarpetasDto = $this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
        $ViolenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
        $ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto, $proveedor);
        return $ViolenciahomicidiosdolososcarpetasDto;
    }

}

?>
<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonas/TrataspersonasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexuales/SexualesDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductas/SexualesconductasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductas/DetallessexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductas/DetallessexualesconductasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/conductas/ConductasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/conductas/ConductasDTO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallesconductas/DetallesconductasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallesconductas/DetallesconductasDTO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexuales/TestigossexualesDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectos/EfectosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectos/EfectosDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallesefectos/DetallesefectosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallesefectos/DetallesefectosDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidos/EfectosofendidosDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenero/ViolenciadegeneroDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressociales/ViolenciafactoressocialesDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");

/*
 * requeridos para webservice
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");


//include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaController.Class.php");

/*
 *
 */

/*
 * clase para loguear acciones de llamadas web service
 */
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");

class ViolenciaController {

    private $proveedor;

    public function __construct() {
        
    }

///////////////////////////VALIDACIONES///////////////////////////////////////////////////////////////////////////////////////
    public function validarTrataspersonas($TrataspersonasDto) {
        $TrataspersonasDto->setIdTrataPersona(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getIdTrataPersona()))));
        $TrataspersonasDto->setcveEstadoDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveEstadoDestino()))));
        $TrataspersonasDto->setcveMunicipioDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveMunicipioDestino()))));
        $TrataspersonasDto->setcvePaisDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcvePaisDestino()))));
        $TrataspersonasDto->setestadoDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getestadoDestino()))));
        $TrataspersonasDto->setmunicipioDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getmunicipioDestino()))));
        $TrataspersonasDto->setcveEstadoOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveEstadoOrigen()))));
        $TrataspersonasDto->setcveMunicipioOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveMunicipioOrigen()))));
        $TrataspersonasDto->setcvePaisOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcvePaisOrigen()))));
        $TrataspersonasDto->setestadoOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getestadoOrigen()))));
        $TrataspersonasDto->setmunicipioOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getmunicipioOrigen()))));
        $TrataspersonasDto->setcveTipoTrata(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveTipoTrata()))));
        $TrataspersonasDto->setcveTrasportacion(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveTrasportacion()))));
        $TrataspersonasDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getidImpOfeDelSolicitud()))));

        return $TrataspersonasDto;
    }

    public function validarSexuales($SexualesDto) {
        $SexualesDto->setidSexual(strtoupper(str_ireplace("'", "", trim($SexualesDto->getidSexual()))));
        $SexualesDto->setcveModalidadAcoso(strtoupper(str_ireplace("'", "", trim($SexualesDto->getcveModalidadAcoso()))));
        $SexualesDto->setcveAmbitoAcoso(strtoupper(str_ireplace("'", "", trim($SexualesDto->getcveAmbitoAcoso()))));
        $SexualesDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim($SexualesDto->getidImpOfeDelSolicitud()))));
        $SexualesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($SexualesDto->getfechaRegistro()))));
        $SexualesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($SexualesDto->getfechaActualizacion()))));

        return $SexualesDto;
    }

    public function validarSexualesconductas($SexualesconductasDto) {
        $SexualesconductasDto->setidSexualConducta(strtoupper(str_ireplace("'", "", trim($SexualesconductasDto->getidSexualConducta()))));
        $SexualesconductasDto->setidSexual(strtoupper(str_ireplace("'", "", trim($SexualesconductasDto->getidSexual()))));
        $SexualesconductasDto->setcveConducta(strtoupper(str_ireplace("'", "", trim($SexualesconductasDto->getcveConducta()))));
        $SexualesconductasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($SexualesconductasDto->getfechaRegistro()))));
        $SexualesconductasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($SexualesconductasDto->getfechaActualizacion()))));

        return $SexualesconductasDto;
    }

    public function validarDetallessexualesconductas($detallessexualesconductasDto) {
        $detallessexualesconductasDto->setidDetalleSexualConducta(strtoupper(str_ireplace("'", "", trim($detallessexualesconductasDto->getidDetalleSexualConducta()))));
        $detallessexualesconductasDto->setcveDetalleConducta(strtoupper(str_ireplace("'", "", trim($detallessexualesconductasDto->getcveDetalleConducta()))));
        $detallessexualesconductasDto->setidSexualConducta(strtoupper(str_ireplace("'", "", trim($detallessexualesconductasDto->getidSexualConducta()))));
        $detallessexualesconductasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($detallessexualesconductasDto->getfechaRegistro()))));
        $detallessexualesconductasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($detallessexualesconductasDto->getfechaActualizacion()))));

        return $detallessexualesconductasDto;
    }

    public function validarTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto->setidTestigoSexual(strtoupper(str_ireplace("'", "", trim($TestigossexualesDto->getidTestigoSexual()))));
        $TestigossexualesDto->setidSexual(strtoupper(str_ireplace("'", "", trim($TestigossexualesDto->getidSexual()))));
        $TestigossexualesDto->setpaterno(strtoupper(str_ireplace("'", "", trim($TestigossexualesDto->getpaterno()))));
        $TestigossexualesDto->setmaterno(strtoupper(str_ireplace("'", "", trim($TestigossexualesDto->getmaterno()))));
        $TestigossexualesDto->setnombre(strtoupper(str_ireplace("'", "", trim($TestigossexualesDto->getnombre()))));
        $TestigossexualesDto->setcveGenero(strtoupper(str_ireplace("'", "", trim($TestigossexualesDto->getcveGenero()))));
        $TestigossexualesDto->setactivo(strtoupper(str_ireplace("'", "", trim($TestigossexualesDto->getactivo()))));
        $TestigossexualesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TestigossexualesDto->getfechaRegistro()))));
        $TestigossexualesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TestigossexualesDto->getfechaActualizacion()))));

        return $TestigossexualesDto;
    }

    public function validarViolenciadegenero($ViolenciadegeneroDto) {
        $ViolenciadegeneroDto->setidViolenciaDeGenero(strtoupper(str_ireplace("'", "", trim($ViolenciadegeneroDto->getidViolenciaDeGenero()))));
        $ViolenciadegeneroDto->setcveEfecto(strtoupper(str_ireplace("'", "", trim($ViolenciadegeneroDto->getcveEfecto()))));
        $ViolenciadegeneroDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim($ViolenciadegeneroDto->getidImpOfeDelSolicitud()))));
        $ViolenciadegeneroDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ViolenciadegeneroDto->getfechaRegistro()))));
        $ViolenciadegeneroDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ViolenciadegeneroDto->getfechaActualizacion()))));

        return $ViolenciadegeneroDto;
    }

    public function validarEfectosofendidos($EfectosofendidosDto) {
        $EfectosofendidosDto->setidEfectoOfendido(strtoupper(str_ireplace("'", "", trim($EfectosofendidosDto->getidEfectoOfendido()))));
        $EfectosofendidosDto->setcveDetalleEfecto(strtoupper(str_ireplace("'", "", trim($EfectosofendidosDto->getcveDetalleEfecto()))));
        $EfectosofendidosDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim($EfectosofendidosDto->getidImpOfeDelSolicitud()))));
        $EfectosofendidosDto->setIdReferencia(strtoupper(str_ireplace("'", "", trim($EfectosofendidosDto->getIdReferencia()))));
        $EfectosofendidosDto->setorigen(strtoupper(str_ireplace("'", "", trim($EfectosofendidosDto->getorigen()))));
        $EfectosofendidosDto->setactivo(strtoupper(str_ireplace("'", "", trim($EfectosofendidosDto->getactivo()))));
        $EfectosofendidosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($EfectosofendidosDto->getfechaRegistro()))));
        $EfectosofendidosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($EfectosofendidosDto->getfechaActualizacion()))));

        return $EfectosofendidosDto;
    }

    public function validarViolenciafactoressociales($ViolenciafactoressocialesDto) {
        $ViolenciafactoressocialesDto->setidViolenciaFactorSocial(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialesDto->getidViolenciaFactorSocial()))));
        $ViolenciafactoressocialesDto->setcveFactorCultural(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialesDto->getcveFactorCultural()))));
        $ViolenciafactoressocialesDto->setidViolenciaDeGenero(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialesDto->getidViolenciaDeGenero()))));
        $ViolenciafactoressocialesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialesDto->getfechaRegistro()))));
        $ViolenciafactoressocialesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ViolenciafactoressocialesDto->getfechaActualizacion()))));

        return $ViolenciafactoressocialesDto;
    }

    public function validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto) {
        $ViolenciahomicidiosdolososDto->setidViolenciaHomicidioDoloso(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()))));
        $ViolenciahomicidiosdolososDto->setidViolenciaDeGenero(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososDto->getidViolenciaDeGenero()))));
        $ViolenciahomicidiosdolososDto->setcveHomicidioDoloso(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososDto->getcveHomicidioDoloso()))));
        $ViolenciahomicidiosdolososDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososDto->getfechaRegistro()))));
        $ViolenciahomicidiosdolososDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ViolenciahomicidiosdolososDto->getfechaActualizacion()))));

        return $ViolenciahomicidiosdolososDto;
    }

    ///////////////////////////FIN VALIDACIONES////////////////////////////////
    //////////////////////////TRATAS DE PERSONAS////////////////////////////////

    public function insertTrataspersonas($TrataspersonasDto, $proveedor = null) {

        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasDao = new TrataspersonasDAO();
        $TrataspersonasDto = $TrataspersonasDao->insertTrataspersonas($TrataspersonasDto, $proveedor);
        if ($TrataspersonasDto != "") {

            $dtoToJson = new DtoToJson($TrataspersonasDto);
            $trata = $dtoToJson->toJson();
            $BitacoramovimientosDao = new BitacoramovimientosDAO();
            $BitacoramovimientosDto = new BitacoramovimientosDTO();
            $BitacoramovimientosDto->setCveAccion("159");
            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $BitacoramovimientosDto->setObservaciones("iNSERTO TRATA DE PERSONAS:" . $trata);
            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
        }

        return $TrataspersonasDto;
    }

    public function selectTrataspersonas($TrataspersonasDto, $proveedor = null) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasDao = new TrataspersonasDAO();
        $TrataspersonasDto = $TrataspersonasDao->selectTrataspersonas($TrataspersonasDto, $proveedor);

        return $TrataspersonasDto;
    }

    public function updateTratasPersonas($TrataspersonasDto, $proveedor = null) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasDao = new TrataspersonasDAO();
        $TrataspersonasDto = $TrataspersonasDao->updateTrataspersonas($TrataspersonasDto, $proveedor);
        if ($TrataspersonasDto != "") {
            $dtoToJson = new DtoToJson($TrataspersonasDto);
            $trata = $dtoToJson->toJson();
            $BitacoramovimientosDao = new BitacoramovimientosDAO();
            $BitacoramovimientosDto = new BitacoramovimientosDTO();
            $BitacoramovimientosDto->setCveAccion("160");
            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $BitacoramovimientosDto->setObservaciones("ACTUALIZO TRATA DE PERSONAS:" . $trata);
            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
        }

        return $TrataspersonasDto;
    }

    ////////////SEXUALES
    public function insertSexuales($SexualesDto, $proveedor = null, $usaBitacora = true) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesDao = new SexualesDAO();
        $SexualesDto = $SexualesDao->insertSexuales($SexualesDto, $proveedor);
        if ($SexualesDto != "") {
            if ($usaBitacora) {
                $dtoToJson = new DtoToJson($SexualesDto);
                $sexual = $dtoToJson->toJson();
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("166");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("registro sexuales:" . $sexual);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        }

        return $SexualesDto;
    }

    public function selectSexuales($SexualesDto, $proveedor = null) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesDao = new SexualesDAO();
        $SexualesDto = $SexualesDao->selectSexuales($SexualesDto, $proveedor);

        return $SexualesDto;
    }

    public function updateSexuales($SexualesDto, $proveedor = null, $usaBitacora = true) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesDao = new SexualesDAO();
        $SexualesDto = $SexualesDao->updateSexuales($SexualesDto, $proveedor);
        if ($SexualesDto != "") {
            if ($usaBitacora) {
                $dtoToJson = new DtoToJson($SexualesDto);
                $sexual = $dtoToJson->toJson();
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("167");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("actualizo sexuales:" . $sexual);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        }

        return $SexualesDto;
    }

    public function eliminaSexuales($SexualesDto, $proveedor = null, $usaBitacora = true) {
        $error = false;
        $result = "";
        $msg = array();


        $SexualDto = new SexualesDTO();
        $SexualDao = new SexualesDAO();
        $SexualDto->setIdSexual($SexualesDto->getIdSexual());
        $rsSexual = $SexualDao->selectSexuales($SexualDto);

        if ($rsSexual != "") {
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();
            //Se verifica que si exista la relacion
            $impOfeDelSolicitudesDto->setIdImpOfeDelSolicitud($rsSexual[0]->getIdImpOfeDelSolicitud());
            $impOfeDelSolicitudesDto->setActivo("S");
            $rsImpofedelSolicitudes = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto);
            if ($rsImpofedelSolicitudes != "") {
                //Se verifica el estatus de la solicitud            
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
                $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpofedelSolicitudes[0]->getIdSolicitudAudiencia());
                $rsSolicitudesAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
//                if ($rsSolicitudesAudiencias[0]->getCveEstatusSolicitud() == "1") {

                    if ($proveedor == null) {
                        $this->proveedor = new Proveedor('mysql', 'sigejupe');
                        $this->proveedor->connect();
                    } else {
                        $this->proveedor = $proveedor;
                    }
                    $this->proveedor->execute("BEGIN");

                    $SexualesDto = $this->validarSexuales($SexualesDto);
                    $SexualesDao = new SexualesDAO();
                    $SexualesDto = $SexualesDao->updateSexuales($SexualesDto, $proveedor);
//        $json = "";
//        $x = 1;
                    if ($SexualesDto != "") {
                        $sexualesConductaDto = new SexualesconductasDTO();
                        $sexualesConductaDao = new SexualesconductasDAO();

                        $sexualesConductaDto->setIdSexual($SexualesDto[0]->getIdSexual());
                        $rsSexualConducta = $sexualesConductaDao->selectSexualesconductas($sexualesConductaDto);
                        if ($rsSexualConducta != "") {
                            foreach ($rsSexualConducta as $sexConducta) {
                                $sexualesConductaDto->setIdSexualConducta($sexConducta->getIdSexualConducta());
                                $sexualesConductaDto->setActivo("N");
                                $rsSecual = $sexualesConductaDao->updateSexualesconductas($sexualesConductaDto, $proveedor);
                                if ($rsSecual == "") {
                                    $msg[] = array("No se puedo eliminar la conducta sexual.");
                                    $error = true;
                                }
                            }
                        }

                        $testidosSexualesDto = new TestigossexualesDTO();
                        $testidosSexualesDao = new TestigossexualesDAO();

                        $testidosSexualesDto->setIdSexual($SexualesDto[0]->getIdSexual());
                        $rsTestidosSexuales = $testidosSexualesDao->selectTestigossexuales($testidosSexualesDto);
                        if ($rsTestidosSexuales != "") {
                            foreach ($rsTestidosSexuales as $rsTestidos) {
                                $testidosSexualesDto->setIdTestigoSexual($rsTestidos->getIdTestigoSexual());
                                $testidosSexualesDto->setActivo("N");
                                $rsTestigo = $testidosSexualesDao->updateTestigossexuales($testidosSexualesDto, $proveedor);
                                if ($rsTestigo == "") {
                                    $msg[] = array("No se puedo eliminar a os testigos.");
                                    $error = true;
                                }
                            }
                        }
                    } else {
                        $msg[] = array("No se puedo eliminar la conducta.");
                        $error = true;
                    }

                    if ((!$error)) {
                        $this->proveedor->execute("COMMIT");
                        $result = array("status" => "ok", "msj" => "La Modalidad no se pudo elimar");
                        $result = json_encode($result);
                        if ($usaBitacora) {
                            $dtoToJson = new DtoToJson($SexualesDto);
                            $sexual = $dtoToJson->toJson();
                            $BitacoramovimientosDao = new BitacoramovimientosDAO();
                            $BitacoramovimientosDto = new BitacoramovimientosDTO();
                            $BitacoramovimientosDto->setCveAccion("163");
                            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                            $BitacoramovimientosDto->setObservaciones("actualizo sexuales:" . $sexual);
                            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                        }
                    } else {
                        $this->proveedor->execute("ROLLBACK");
                        $result = array("status" => "error", "mnj" => $msg);
                        $result = json_encode($result);
                    }
//                } else {
//                    $result = array("status" => "error", "mnj" => "No se puede eliminar la modalidad, ya que la solicitud se encuentra enviada");
//                    $result = json_encode($result);
//                }
            } else {
                $result = array("status" => "error", "mnj" => "No se encontro la relacion. Verifique");
                $result = json_encode($result);
            }
        } else {
            $result = array("status" => "error", "mnj" => "No se encontro la modalidad. Verifique");
            $result = json_encode($result);
        }
        return $result;
    }

    ////////////////CONDUCTAS//////////////////////////////////////////////////
    public function insertConductas($sexualesconductasDto, $detallessexualesconductasDto, $proveedor = null, $usaBitacora = true) {
        $sexualesconductasDto = $this->validarSexualesconductas($sexualesconductasDto);
        $detallessexualesconductasDto = $this->validarDetallessexualesconductas($detallessexualesconductasDto);

        $error = false;
        $result = "";
        $msg = array();

        //Se verifica que exista la conducta sexual
        $sexualesDto = new SexualesDTO();
        $sexualesDao = new SexualesDAO();
        $sexualesDto->setIdSexual($sexualesconductasDto->getIdSexual());
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
//                if ($rsSolicitudesAudiencias[0]->getCveEstatusSolicitud() == "1") {

                    if ($proveedor == null) {
                        $this->proveedor = new Proveedor('mysql', 'sigejupe');
                        $this->proveedor->connect();
                    } else {
                        $this->proveedor = $proveedor;
                    }
                    $this->proveedor->execute("BEGIN");


                    $SexualesconductasDao = new SexualesconductasDAO();
                    $sexualesconductasDto = $SexualesconductasDao->insertSexualesconductas($sexualesconductasDto, $proveedor);
                    if ($sexualesconductasDto != "") {
                        $detallessexualesconductasDto->setIdSexualConducta($sexualesconductasDto[0]->getIdSexualConducta());
                        $DetallessexualesconductasDao = new DetallessexualesconductasDAO();
                        $detallessexualesconductasDto = $DetallessexualesconductasDao->insertDetallessexualesconductas($detallessexualesconductasDto, $proveedor);
                        if ($detallessexualesconductasDto == "") {
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
                            "idSexualConducta" => $sexualesconductasDto[0]->getIdSexualConducta(),
                            "idSexual" => $sexualesconductasDto[0]->getIdSexual(),
                            "cveConducta" => $sexualesconductasDto[0]->getCveConducta(),
                            "idDetalleSexualConducta" => $detallessexualesconductasDto[0]->getIdDetalleSexualConducta(),
                            "cveDetalleConducta" => $detallessexualesconductasDto[0]->getCveDetalleConducta(),
                            "idSexualConducta" => $detallessexualesconductasDto[0]->getIdSexualConducta()
                        );
                        array_push($listaResultados, $resultado);
                        $result = array("status" => "ok", "msj" => "La conducta y su detalle se agregaron de forma correcta", "resultado" => $listaResultados);
                        $result = json_encode($result);

                        if ($usaBitacora) {
                            $BitacoramovimientosDao = new BitacoramovimientosDAO();
                            $BitacoramovimientosDto = new BitacoramovimientosDTO();
                            $BitacoramovimientosDto->setCveAccion("163");
                            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                            $BitacoramovimientosDto->setObservaciones("iNSERTO UNA CONDUCTA" . json_encode($result));
                            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                        }
                    } else {
                        $this->proveedor->execute("ROLLBACK");
                        $result = array("status" => "error", "mnj" => $msg);
                        $result = json_encode($result);
                    }
//                } else {
//                    $result = array("status" => "error", "mnj" => "No se puede agregar la conducta, ya que la solicitud se encuentra enviada.");
//                    $result = json_encode($result);
//                }
            } else {
                $result = array("status" => "error", "mnj" => "No se encontro la relacion. Verifique");
                $result = json_encode($result);
            }
        } else {
            $result = array("status" => "error", "mnj" => "No se encontro la consucta s-exual. Verifique");
            $result = json_encode($result);
        }
        return $result;
    }

    public function updateConductas($sexualesconductasDto, $detallessexualesconductasDto, $proveedor = null, $usaBitacora = true) {
        $sexualesconductasDto = $this->validarSexualesconductas($sexualesconductasDto);
        $detallessexualesconductasDto = $this->validarDetallessexualesconductas($detallessexualesconductasDto);

        $error = false;
        $result = "";
        $msg = array();
        //Se verifica que exista la conducta sexual
        $sexualesDto = new SexualesDTO();
        $sexualesDao = new SexualesDAO();
        $sexualesDto->setIdSexual($sexualesconductasDto->getIdSexual());
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
//                if ($rsSolicitudesAudiencias[0]->getCveEstatusSolicitud() == "1") {
                    if ($proveedor == null) {
                        $this->proveedor = new Proveedor('mysql', 'sigejupe');
                        $this->proveedor->connect();
                    } else {
                        $this->proveedor = $proveedor;
                    }
                    $this->proveedor->execute("BEGIN");


                    $SexualesconductasDao = new SexualesconductasDAO();
                    $sexualesconductasDto = $SexualesconductasDao->updateSexualesconductas($sexualesconductasDto, $proveedor);
                    if ($sexualesconductasDto != "") {
                        $detallessexualesconductasDto->setIdSexualConducta($sexualesconductasDto[0]->getIdSexualConducta());
                        $DetallessexualesconductasDao = new DetallessexualesconductasDAO();
                        $detallessexualesconductasDto = $DetallessexualesconductasDao->updateDetallessexualesconductas($detallessexualesconductasDto, $proveedor);
                        if ($detallessexualesconductasDto == "") {
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
                            "idSexualConducta" => $sexualesconductasDto[0]->getIdSexualConducta(),
                            "idSexual" => $sexualesconductasDto[0]->getIdSexual(),
                            "cveConducta" => $sexualesconductasDto[0]->getCveConducta(),
                            "idDetalleSexualConducta" => $detallessexualesconductasDto[0]->getIdDetalleSexualConducta(),
                            "cveDetalleConducta" => $detallessexualesconductasDto[0]->getCveDetalleConducta(),
                            "idSexualConducta" => $detallessexualesconductasDto[0]->getIdSexualConducta()
                        );
                        array_push($listaResultados, $resultado);
                        $result = array("status" => "ok", "msj" => "La conducta y su detalle se actualizaron de forma correcta", "resultado" => $listaResultados);
                        $result = json_encode($result);

                        if ($usaBitacora) {
                            $BitacoramovimientosDao = new BitacoramovimientosDAO();
                            $BitacoramovimientosDto = new BitacoramovimientosDTO();
                            $BitacoramovimientosDto->setCveAccion("164");
                            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                            $BitacoramovimientosDto->setObservaciones("ACTUALIZO UNA CONDUCTA" . json_encode($result));
                            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                        }
                    } else {
                        $this->proveedor->execute("ROLLBACK");
                        $result = array("status" => "error", "mnj" => $msg);
                        $result = json_encode($result);
                    }
//                } else {
//                    $result = array("status" => "error", "mnj" => "No se puede modificar la conducta, ya que la solicitud se encuentra enviada.");
//                    $result = json_encode($result);
//                }
            } else {
                $result = array("status" => "error", "mnj" => "No se encontro la relacion. Verifique");
                $result = json_encode($result);
            }
        } else {
            $result = array("status" => "error", "mnj" => "No se encontro la consucta s-exual. Verifique");
            $result = json_encode($result);
        }
        return $result;
    }

    public function eliminarConducta($sexualesconductasDto, $detallessexualesconductasDto, $proveedor = null, $usaBitacora = true) {
        $sexualesconductasDto = $this->validarSexualesconductas($sexualesconductasDto);
        $detallessexualesconductasDto = $this->validarDetallessexualesconductas($detallessexualesconductasDto);

        $error = false;
        $result = "";
        $msg = array();
        //Se verifica que exista la conducta sexual
        $sexualesDto = new SexualesDTO();
        $sexualesDao = new SexualesDAO();

        $sexualConductaDto = new SexualesconductasDTO();
        $sexualConductaDao = new SexualesconductasDAO();
        $sexualConductaDto->setIdSexualConducta($sexualesconductasDto->getIdSexualConducta());
        $rsSexualconducta = $sexualConductaDao->selectSexualesconductas($sexualConductaDto);
        if ($rsSexualconducta != "") {
            $sexualesDto->setIdSexual($rsSexualconducta[0]->getIdSexual());
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
//                    if ($rsSolicitudesAudiencias[0]->getCveEstatusSolicitud() == "1") {
                        if ($proveedor == null) {
                            $this->proveedor = new Proveedor('mysql', 'sigejupe');
                            $this->proveedor->connect();
                        } else {
                            $this->proveedor = $proveedor;
                        }
                        $this->proveedor->execute("BEGIN");


                        $SexualesconductasDao = new SexualesconductasDAO();
                        $sexualesconductasDto = $SexualesconductasDao->updateSexualesconductas($sexualesconductasDto, $proveedor);
                        if ($sexualesconductasDto != "") {
                            $detallessexualesconductasDto->setIdSexualConducta($sexualesconductasDto[0]->getIdSexualConducta());
                            $DetallessexualesconductasDao = new DetallessexualesconductasDAO();
                            $detallessexualesconductasDto = $DetallessexualesconductasDao->updateDetallessexualesconductas($detallessexualesconductasDto, $proveedor);
                            if ($detallessexualesconductasDto == "") {
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
                                "idSexualConducta" => $sexualesconductasDto[0]->getIdSexualConducta(),
                                "idSexual" => $sexualesconductasDto[0]->getIdSexual(),
                                "cveConducta" => $sexualesconductasDto[0]->getCveConducta(),
                                "idDetalleSexualConducta" => $detallessexualesconductasDto[0]->getIdDetalleSexualConducta(),
                                "cveDetalleConducta" => $detallessexualesconductasDto[0]->getCveDetalleConducta(),
                                "idSexualConducta" => $detallessexualesconductasDto[0]->getIdSexualConducta()
                            );
                            array_push($listaResultados, $resultado);
                            $result = array("status" => "ok", "msj" => "La conducta y su detalle se actualizaron de forma correcta", "resultado" => $listaResultados);
                            $result = json_encode($result);

                            if ($usaBitacora) {
                                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                                $BitacoramovimientosDto->setCveAccion("165");
                                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                                $BitacoramovimientosDto->setObservaciones("ELIMINO UNA CONDUCTA" . json_encode($result));
                                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                            }
                        } else {
                            $this->proveedor->execute("ROLLBACK");
                            $result = array("status" => "error", "mnj" => $msg);
                            $result = json_encode($result);
                        }
//                    } else {
//                        $result = array("status" => "error", "mnj" => "No se puede eliminar la conducta, ya que la solicitud se encuentra enviada.");
//                        $result = json_encode($result);
//                    }
                } else {
                    $result = array("status" => "error", "mnj" => "No se encontro la relacion. Verifique");
                    $result = json_encode($result);
                }
            } else {
                $result = array("status" => "error", "mnj" => "No se encontro la consucta s-exual. Verifique");
                $result = json_encode($result);
            }
        } else {
            $result = array("status" => "error", "mnj" => "No se encontro la consucta s-exual. Verifique");
            $result = json_encode($result);
        }
        return $result;
    }

    public function selectConductas($sexualesconductasDto, $detallessexualesconductasDto = "") {
        $json = "";
        $x = 1;
        $i = 1;
        $sexualesconductasDto = $this->validarSexualesconductas($sexualesconductasDto);
        $detallessexualesconductasDto = $this->validarDetallessexualesconductas($detallessexualesconductasDto);
        $SexualesconductasDao = new SexualesconductasDAO();
        $sexualesconductasDto = $SexualesconductasDao->selectSexualesconductas($sexualesconductasDto);
        if ($sexualesconductasDto != "") {
            $DetallessexualesconductasDao = new DetallessexualesconductasDAO();

            $conductasDao = new ConductasDAO();
            $conductasDto = new ConductasDTO();
            $detallesConductasDao = new DetallesconductasDAO();
            $detallesConductasDto = new DetallesconductasDTO();

            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($sexualesconductasDto) . '",';
            $json .= '"data":[';
            foreach ($sexualesconductasDto as $sexualconducta) {
                $conductasDto->setCveConducta($sexualconducta->getCveConducta());
                $rsConducta = $conductasDao->selectConductas($conductasDto);

                $json .= "{";
                $json .= '"idSexualConducta":' . json_encode(utf8_encode($sexualconducta->getIdSexualConducta())) . ",";
                $json .= '"idSexual":' . json_encode(utf8_encode($sexualconducta->getIdSexual())) . ",";
                $json .= '"cveConducta":' . json_encode(utf8_encode($sexualconducta->getCveConducta())) . ",";
                if ($rsConducta != "") {
                    $json .= '"desConducta":' . json_encode(utf8_encode($rsConducta[0]->getDesConducta())) . ",";
                } else {
                    $json .= '"desConducta": "N/A",';
                }
                $json .= '"dataDetalle":[';
                $detallessexualesconductasDto->setIdSexualConducta($sexualconducta->getIdSexualConducta());
                $detallessexualesconductas = $DetallessexualesconductasDao->selectDetallessexualesconductas($detallessexualesconductasDto);
                if ($detallessexualesconductas != "") {
                    foreach ($detallessexualesconductas as $detallessexualconducta) {
                        $detallesConductasDto->setCveDetalleConducta($detallessexualconducta->getCveDetalleConducta());
                        $rsDetalleConducta = $detallesConductasDao->selectDetallesconductas($detallesConductasDto);
                        $json .= "{";
                        $json .= '"idDetalleSexualConducta":' . json_encode(utf8_encode($detallessexualconducta->getIdDetalleSexualConducta())) . ",";
                        $json .= '"cveDetalleConducta":' . json_encode(utf8_encode($detallessexualconducta->getCveDetalleConducta())) . ",";
                        if ($rsDetalleConducta != "") {
                            $json .= '"desDetalleConducta":' . json_encode(utf8_encode($rsDetalleConducta[0]->getDesDetalleConducta())) . ",";
                        } else {
                            $json .= '"desDetalleConducta": "N/A",';
                        }
                        $json .= '"idSexualConducta":' . json_encode(utf8_encode($detallessexualconducta->getIdSexualConducta())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($detallessexualesconductas)) {
                            $json .= ",";
                        }
                    }
                    $json .= "]";
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se encontro detalle de la conducta."}]';
                }
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($sexualesconductasDto)) {
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
    public function insertTestigossexuales($TestigossexualesDto, $proveedor = null, $usaBitacora = true) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $TestigossexualesDao = new TestigossexualesDAO();


        $TestigossexualesDto = $TestigossexualesDao->insertTestigossexuales($TestigossexualesDto, $proveedor);
        if ($TestigossexualesDto != "") {
            $dtoToJson = new DtoToJson($TestigossexualesDto);
            $testigos = $dtoToJson->toJson();

            if ($usaBitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("161");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("registro testigos:" . $testigos);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        }

        return $TestigossexualesDto;
    }

    public function selectTestigossexuales($TestigossexualesDto, $proveedor = null) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $TestigossexualesDao = new TestigossexualesDAO();
        $TestigossexualesDto = $TestigossexualesDao->selectTestigossexuales($TestigossexualesDto, $proveedor);

        return $TestigossexualesDto;
    }

    public function updateTestigossexuales($TestigossexualesDto, $proveedor = null) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $TestigossexualesDao = new TestigossexualesDAO();
        $TestigossexualesDto = $TestigossexualesDao->updateTestigossexuales($TestigossexualesDto, $proveedor);
        if ($TestigossexualesDto != "") {
            $dtoToJson = new DtoToJson($TestigossexualesDto);
            $testigos = $dtoToJson->toJson();
            $BitacoramovimientosDao = new BitacoramovimientosDAO();
            $BitacoramovimientosDto = new BitacoramovimientosDTO();
            $BitacoramovimientosDto->setCveAccion("162");
            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $BitacoramovimientosDto->setObservaciones("ACTUALIZO TESTIGOS:" . $testigos);
            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
        }

        return $TestigossexualesDto;
    }

    /////////////////////////EFECTOS///////////////////
    public function guardaEfectosViolencia($ViolenciadegeneroDto, $EfectosofendidosDto, $proveedor = null, $usaBitacora = true) {
        $impofedelSolicutdesDto = new ImpofedelsolicitudesDTO();
        $impofedelSolicutdesDao = new ImpofedelsolicitudesDAO();
        //////////Verificamos que exista la relacion
        $impofedelSolicutdesDto->setIdImpOfeDelSolicitud($ViolenciadegeneroDto->getIdImpOfeDelSolicitud());
        $rsImpofedelSolicitudes = $impofedelSolicutdesDao->selectImpofedelsolicitudes($impofedelSolicutdesDto);
        if ($rsImpofedelSolicitudes != "") {
            /////Verificamos que la solictud no se encuentre enviada o cancelada
            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

            $ViolenciadegeneroDto = $this->validarViolenciadegenero($ViolenciadegeneroDto);
            $EfectosofendidosDto = $this->validarEfectosofendidos($EfectosofendidosDto);

            $ViolenciadegeneroDao = new ViolenciadegeneroDAO();
            $EfectosofendidosDao = new EfectosofendidosDAO();
            $EfectosofendidosAuxDto = new EfectosofendidosDTO();

            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }
            $this->proveedor->execute("BEGIN");

            $rsViolenciadegenero = $ViolenciadegeneroDao->selectViolenciadegenero($ViolenciadegeneroDto);

            if ($rsViolenciadegenero != "") {
                $EfectosofendidosAuxDto->setCveDetalleEfecto($EfectosofendidosDto->getCveDetalleEfecto());
                $EfectosofendidosAuxDto->setCveDetalleEfecto($EfectosofendidosDto->getCveDetalleEfecto());
                $EfectosofendidosAuxDto->setIdImpOfeDelSolicitud($EfectosofendidosDto->getIdImpOfeDelSolicitud());
                $EfectosofendidosAuxDto->setIdReferencia($rsViolenciadegenero[0]->getIdViolenciaDeGenero());
                $EfectosofendidosAuxDto->setOrigen($EfectosofendidosDto->getOrigen());
                $EfectosofendidosAuxDto->setActivo('S');
                $rsValidaEfecto = $EfectosofendidosDao->selectEfectosofendidos($EfectosofendidosAuxDto, $proveedor);

                if ($rsValidaEfecto == "") {
                    $error = false;
                    $result = "";
                    $msg = array();
                    $rsViolenciadegenero = $ViolenciadegeneroDao->selectViolenciadegenero($ViolenciadegeneroDto);
                    if ($rsViolenciadegenero == "") {
                        $ViolenciadegeneroDto = $ViolenciadegeneroDao->insertViolenciadegenero($ViolenciadegeneroDto, $proveedor);
                        if ($ViolenciadegeneroDto != "") {
                            $EfectosofendidosDto->setIdImpOfeDelSolicitud($ViolenciadegeneroDto[0]->getIdImpOfeDelSolicitud());
                            $EfectosofendidosDto->setIdReferencia($ViolenciadegeneroDto[0]->getIdViolenciaDeGenero());
                            $EfectosofendidosDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                            $EfectosofendidosDao = new EfectosofendidosDAO();
                            $EfectosofendidosDto = $EfectosofendidosDao->insertEfectosofendidos($EfectosofendidosDto, $proveedor);
                            if ($EfectosofendidosDto == "") {
                                $msg[] = array("No se puedo insertar el detalle del efecto. Verifique");
                                $error = true;
                            }
                        } else {
                            $msg[] = array("No se puedo insertar el efecto. Verifique");
                            $error = true;
                        }
                    } else {
                        $EfectosofendidosDto->setIdImpOfeDelSolicitud($rsViolenciadegenero[0]->getIdImpOfeDelSolicitud());
                        $EfectosofendidosDto->setIdReferencia($rsViolenciadegenero[0]->getIdViolenciaDeGenero());
                        $EfectosofendidosDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                        $EfectosofendidosDto = $EfectosofendidosDao->insertEfectosofendidos($EfectosofendidosDto, $proveedor);
                        if ($EfectosofendidosDto == "") {
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
                $rsViolenciadegenero = $ViolenciadegeneroDao->selectViolenciadegenero($ViolenciadegeneroDto);
                if ($rsViolenciadegenero == "") {
                    $ViolenciadegeneroDto = $ViolenciadegeneroDao->insertViolenciadegenero($ViolenciadegeneroDto, $proveedor);
                    if ($ViolenciadegeneroDto != "") {
                        $EfectosofendidosDto->setIdImpOfeDelSolicitud($ViolenciadegeneroDto[0]->getIdImpOfeDelSolicitud());
                        $EfectosofendidosDto->setIdReferencia($ViolenciadegeneroDto[0]->getIdViolenciaDeGenero());
                        $EfectosofendidosDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                        $EfectosofendidosDao = new EfectosofendidosDAO();
                        $EfectosofendidosDto = $EfectosofendidosDao->insertEfectosofendidos($EfectosofendidosDto, $proveedor);
                        if ($EfectosofendidosDto == "") {
                            $msg[] = array("No se puedo insertar el detalle del efecto. Verifique");
                            $error = true;
                        }
                    } else {
                        $msg[] = array("No se puedo insertar el efecto. Verifique");
                        $error = true;
                    }
                } else {
                    $EfectosofendidosDto->setIdImpOfeDelSolicitud($rsViolenciadegenero[0]->getIdImpOfeDelSolicitud());
                    $EfectosofendidosDto->setIdReferencia($rsViolenciadegenero[0]->getIdViolenciaDeGenero());
                    $EfectosofendidosDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                    $EfectosofendidosDto = $EfectosofendidosDao->insertEfectosofendidos($EfectosofendidosDto, $proveedor);
                    if ($EfectosofendidosDto == "") {
                        $msg[] = array("No se puedo insertar el detalle del efecto. Verifique");
                        $error = true;
                    }
                }
            }

            if ((!$error)) {
                $this->proveedor->execute("COMMIT");
                $result = array("status" => "ok", "msj" => "La conducta y su detalle se agregaron de forma correcta");
                $result = json_encode($result);


                if ($usaBitacora) {

                    /* $resultBitacora = array(
                      "violenciaDeGenero" => $ViolenciadegeneroDto[0],
                      "efecto"            => $EfectosofendidosDto[0],
                      ); */

                    $dtoToJson = new DtoToJson($ViolenciadegeneroDto);
                    $violencia = $dtoToJson->toJson();
                    $dtoToJson = new DtoToJson($EfectosofendidosDto);
                    $efectos = $dtoToJson->toJson();

                    $BitacoramovimientosDao = new BitacoramovimientosDAO();
                    $BitacoramovimientosDto = new BitacoramovimientosDTO();
                    $BitacoramovimientosDto->setCveAccion("151");
                    $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                    $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                    $BitacoramovimientosDto->setObservaciones("AGREGO EFECTOS VIOLENCIA DE GENERO: Violencia de genero" . $violencia . " efctos:" . $efectos);
                    $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                }
            } else {
                $this->proveedor->execute("ROLLBACK");
                $result = array("status" => "error", "mnj" => $msg);
                $result = json_encode($result);
            }
        } else {
            $result = array("status" => "error", "mnj" => "La relacion no existe, Verifique");
            $result = json_encode($result);
        }

        return $result;
    }

    public function modificaEfectosViolencia($ViolenciadegeneroDto, $EfectosofendidosDto, $proveedor = null, $usaBitacora = true) {
        $ViolenciadegeneroDto = $this->validarViolenciadegenero($ViolenciadegeneroDto);
        $EfectosofendidosDto = $this->validarEfectosofendidos($EfectosofendidosDto);
        $ViolenciadegeneroAuxDto = new ViolenciadegeneroDTO();
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

        $ViolenciadegeneroDao = new ViolenciadegeneroDAO();
        $ViolenciadegeneroAux = new ViolenciadegeneroDTO();
        $EfectosofendidosDao = new EfectosofendidosDAO();

        $ViolenciadegeneroAux->setCveEfecto($ViolenciadegeneroDto->getCveEfecto());
        $ViolenciadegeneroAux->setIdImpOfeDelSolicitud($ViolenciadegeneroDto->getIdImpOfeDelSolicitud());
        $ViolenciadegeneroAux->setActivo('S');
        $rsViolenciadegenero = $ViolenciadegeneroDao->selectViolenciadegenero($ViolenciadegeneroAux);
        if ($rsViolenciadegenero != "") {
            $EfectosofendidosAuxDto = new EfectosofendidosDTO();
            $EfectosofendidosAuxDto->setCveDetalleEfecto($EfectosofendidosDto->getCveDetalleEfecto());
            $EfectosofendidosAuxDto->setIdImpOfeDelSolicitud($EfectosofendidosDto->getIdImpOfeDelSolicitud());
            $EfectosofendidosAuxDto->setIdReferencia($rsViolenciadegenero[0]->getIdViolenciaDeGenero());
            $EfectosofendidosAuxDto->setOrigen('V');
            $EfectosofendidosAuxDto->setActivo('S');
            $rsEfectos = $EfectosofendidosDao->selectEfectosofendidos($EfectosofendidosAuxDto);
            if ($rsEfectos == "") {
                $EfectosofendidosDto = $EfectosofendidosDao->updateEfectosofendidos($EfectosofendidosDto, $proveedor);
                if ($EfectosofendidosDto == "") {
                    $msg[] = array("No se puedo modificar el detalle del efecto. Verifique");
                    $error = true;
                }
            } else {
                $msg[] = array("El detalle del efecto ya se ecunetra registrado. Verifique.");
                $error = true;
            }
        } else {
            $EfectosofendidosAuxDto = new EfectosofendidosDTO();
            $EfectosofendidosAuxDto->setCveDetalleEfecto($EfectosofendidosDto->getCveDetalleEfecto());
            $EfectosofendidosAuxDto->setIdImpOfeDelSolicitud($EfectosofendidosDto->getIdImpOfeDelSolicitud());
            $EfectosofendidosAuxDto->setIdReferencia($ViolenciadegeneroDto->getIdViolenciaDeGenero());
            $EfectosofendidosAuxDto->setOrigen('V');
            $EfectosofendidosAuxDto->setActivo('S');
            $rsEfectos = $EfectosofendidosDao->selectEfectosofendidos($EfectosofendidosAuxDto);
            if ($rsEfectos != "") {
                $ViolenciadegeneroDto = $ViolenciadegeneroDao->insertViolenciadegenero($ViolenciadegeneroAux, $proveedor);
                if ($ViolenciadegeneroDto != "") {
                    $EfectosofendidosDto->setIdImpOfeDelSolicitud($ViolenciadegeneroAux->getIdImpOfeDelSolicitud());
                    $EfectosofendidosDto->setIdReferencia($ViolenciadegeneroAux->getIdViolenciaDeGenero());
                    $EfectosofendidosDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                    $EfectosofendidosDao = new EfectosofendidosDAO();
                    $EfectosofendidosDto = $EfectosofendidosDao->insertEfectosofendidos($EfectosofendidosDto, $proveedor);
                    if ($EfectosofendidosDto == "") {
                        $msg[] = array("No se puedo insertar el detalle del efecto. Verifique");
                        $error = true;
                    }
                } else {
                    $msg[] = array("No se puedo insertar el efecto. Verifique");
                    $error = true;
                }
            } else {
                $ViolenciadegeneroDto = $ViolenciadegeneroDao->updateViolenciadegenero($ViolenciadegeneroDto, $proveedor);
                if ($ViolenciadegeneroDto != "") {
                    $EfectosofendidosDto->setIdImpOfeDelSolicitud($ViolenciadegeneroDto[0]->getIdImpOfeDelSolicitud());
                    $EfectosofendidosDto->setIdReferencia($ViolenciadegeneroDto[0]->getIdViolenciaDeGenero());
                    $EfectosofendidosDto->setOrigen('V'); //// 'V' pertenece a violencia de génro
                    $EfectosofendidosDto->setActivo('S'); ////
                    $EfectosofendidosDao = new EfectosofendidosDAO();
                    $EfectosofendidosDto = $EfectosofendidosDao->updateEfectosofendidos($EfectosofendidosDto, $proveedor);
                    if ($EfectosofendidosDto == "") {
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

            if ($usaBitacora) {
                $dtoToJson = new DtoToJson($ViolenciadegeneroDto);
                $violencia = $dtoToJson->toJson();
                $dtoToJson = new DtoToJson($EfectosofendidosDto);
                $efectos = $dtoToJson->toJson();
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("152");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("ACTUALIZO EFECTOS VIOLENCIA DE GENERO: Violencia de genero" . $violencia . " efctos:" . $efectos);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "mnj" => $msg);
            $result = json_encode($result);
        }

        return $result;
    }

    public function consultaEfectos($ViolenciadegeneroDto, $EfectosofendidosDto, $proveedor = null) {
        $ViolenciadegeneroDto = $this->validarViolenciadegenero($ViolenciadegeneroDto);
        $EfectosofendidosDto = $this->validarEfectosofendidos($EfectosofendidosDto);
        $json = "";
        $x = 1;
        $result = "";
        $msg = array();

        $ViolenciadegeneroDao = new ViolenciadegeneroDAO();
        $EfectosofendidosDao = new EfectosofendidosDAO();

        $ViolenciadegeneroDto = $ViolenciadegeneroDao->selectViolenciadegenero($ViolenciadegeneroDto, " order by idViolenciaDeGenero DESC", $proveedor);
        if ($ViolenciadegeneroDto != "") {
            $efectosDao = new EfectosDAO();
            $efectosDto = new EfectosDTO();
            $detallesEfectosDao = new DetallesefectosDAO();
            $detallesEfectosDto = new DetallesefectosDTO();

            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"totalCount":"' . count($ViolenciadegeneroDto) . '",';
            $json .= '"data":[';
            foreach ($ViolenciadegeneroDto as $violenciadegenero) {
                $efectosDto->setCveEfecto($violenciadegenero->getCveEfecto());
                $rsEfectos = $efectosDao->selectEfectos($efectosDto);
                $i = 1;
                $json .= "{";
                $json .= '"idViolenciaDeGenero":' . json_encode(utf8_encode($violenciadegenero->getIdViolenciaDeGenero())) . ",";
                $json .= '"cveEfecto":' . json_encode(utf8_encode($violenciadegenero->getCveEfecto())) . ",";
                if ($rsEfectos != "") {
                    $json .= '"desEfecto":' . json_encode(utf8_encode($rsEfectos[0]->getDesEfecto())) . ",";
                } else {
                    $json .= '"desEfecto": "N/A",';
                }
                $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($violenciadegenero->getIdImpOfeDelSolicitud())) . ",";
                $json .= '"dataDetalle":[';
                $EfectosofendidosDto->setIdReferencia($violenciadegenero->getIdViolenciaDeGenero());
                $EfectosofendidosDto->setOrigen("V");
                $EfectosofendidosDto->setIdImpOfeDelSolicitud($violenciadegenero->getIdImpOfeDelSolicitud());
                $EfectosofendidosDto->setActivo("S");
                $rsEfectosofendidosDto = $EfectosofendidosDao->selectEfectosofendidos($EfectosofendidosDto, " order by idEfectoOfendido DESC", $proveedor);
//                PRINT_R($rsEfectosofendidosDto);
                if ($rsEfectosofendidosDto != "") {
                    foreach ($rsEfectosofendidosDto as $efectosofendidos) {
                        $detallesEfectosDto->setCveDetalleEfecto($efectosofendidos->getCveDetalleEfecto());
                        $rsDetalleEfecto = $detallesEfectosDao->selectDetallesefectos($detallesEfectosDto);

                        $json .= "{";
                        $json .= '"idEfectoOfendido":' . json_encode(utf8_encode($efectosofendidos->getIdEfectoOfendido())) . ",";
                        $json .= '"cveDetalleEfecto":' . json_encode(utf8_encode($efectosofendidos->getCveDetalleEfecto())) . ",";
                        if ($rsDetalleEfecto != "") {
                            $json .= '"desDetalleEfecto":' . json_encode(utf8_encode($rsDetalleEfecto[0]->getDesDetalleEfecto())) . ",";
                        } else {
                            $json .= '"desDetalleEfecto": "N/A",';
                        }
                        $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($efectosofendidos->getIdImpOfeDelSolicitud())) . ",";
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
                if ($x <= count($ViolenciadegeneroDto)) {
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

    public function eliminarEfecto($ViolenciadegeneroDto, $EfectosofendidosDto, $proveedor = null, $usaBitacora = true) {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $error = false;
        $msg = array();

        $ViolenciadegeneroDto = $this->validarViolenciadegenero($ViolenciadegeneroDto);
        $EfectosofendidosDto = $this->validarEfectosofendidos($EfectosofendidosDto);

        $EfectosofendidosDao = new EfectosofendidosDAO();
        $EfectosofendidosAuxDto = new EfectosofendidosDTO();
        $ViolenciadegeneroDao = new ViolenciadegeneroDAO();

        $EfectosofendidosDto->setActivo('N');
        $rsEfectosOfendidos = $EfectosofendidosDao->updateEfectosofendidos($EfectosofendidosDto, $proveedor);

//        print_r($rsEfectosOfendidos);

        if ($rsEfectosOfendidos != "") {
            $EfectosofendidosAuxDto->setIdReferencia($ViolenciadegeneroDto->getIdViolenciaDeGenero());
            $EfectosofendidosAuxDto->setOrigen('V');
            $EfectosofendidosAuxDto->setActivo('S');
            $totalActivosEfectos = $EfectosofendidosDao->selectEfectosofendidos($EfectosofendidosAuxDto);

//            print_r($totalActivosEfectos);

            if ($totalActivosEfectos == "") {
                $ViolenciadegeneroDto->setActivo('N');
                $rsViolencia = $ViolenciadegeneroDao->updateViolenciadegenero($ViolenciadegeneroDto, $proveedor);
                if ($rsViolencia == "") {
                    $msg[] = array("No se puedo eliminar el efecto. Verifique");
                    $error = true;
                }
            }

            //ELIMINA fACTOR SOCIAL
            $violenciafactoressocialesDto = new ViolenciafactoressocialesDTO();
            $violenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
            $violenciafactoressocialesDto->setIdViolenciaDeGenero($ViolenciadegeneroDto->getIdViolenciaDeGenero());
            $rsViolenciaFactores = $violenciafactoressocialesDao->selectViolenciafactoressociales($violenciafactoressocialesDto);
            if ($rsViolenciaFactores != "") {
                foreach ($rsViolenciaFactores as $violenciaFactor) {
                    $violenciafactoressocialesDto->setIdViolenciaFactorSocial($violenciaFactor->getIdViolenciaFactorSocial());
                    $violenciafactoressocialesDto->setActivo("N");
                    $rsViolencia = $violenciafactoressocialesDao->updateViolenciafactoressociales($violenciafactoressocialesDto, $proveedor);
                    if ($rsViolencia == "") {
                        $msg[] = array("No se puedo eliminar el factor social. Verifique");
                        $error = true;
                    }
                }
            }

            //eliminar domicilio doloso
            $violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososDTO();
            $violenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
            $violenciahomicidiosdolososDto->setIdViolenciaDeGenero($ViolenciadegeneroDto->getIdViolenciaDeGenero());
            $rsHomicidioDoloso = $violenciahomicidiosdolososDao->selectViolenciahomicidiosdolosos($violenciahomicidiosdolososDto);
            if ($rsHomicidioDoloso != "") {
                foreach ($rsHomicidioDoloso as $rsHomicidios) {
                    $violenciahomicidiosdolososDto->setIdViolenciaHomicidioDoloso($rsHomicidios->getIdViolenciaHomicidioDoloso());
                    $violenciahomicidiosdolososDto->setActivo("N");
                    $rsHomicidio = $violenciahomicidiosdolososDao->updateViolenciahomicidiosdolosos($violenciahomicidiosdolososDto, $proveedor);
                    if ($rsHomicidio == "") {
                        $msg[] = array("No se puedo eliminar el homicidio doloso. Verifique");
                        $error = true;
                    }
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

//            print_r($ViolenciadegeneroDto);
//            print_r($EfectosofendidosDto);
//            $dtoToJson = new DtoToJson($ViolenciadegeneroDto);
//            $violencia = $dtoToJson->toJson();
//            $dtoToJson1 = new DtoToJson($EfectosofendidosDto);
//            $efectos = $dtoToJson1->toJson();

            if ($usaBitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("153");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("ELIMINO EFECTOS VIOLENCIA DE GENERO: Violencia de genero id " . $ViolenciadegeneroDto->getIdViolenciaDeGenero() . " id efctos " . $EfectosofendidosDto->getIdEfectoOfendido());
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "mnj" => $msg);
            $result = json_encode($result);
        }

        return $result;
    }

////////////////////factores sociales///////////////////////////////////////////
    public function insertViolenciafactoressociales($ViolenciafactoressocialesDto, $proveedor = null, $usaBitacora = true) {
        $ViolenciafactoressocialesDto = $this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
        $ViolenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
        $ViolenciafactoressocialesDto = $ViolenciafactoressocialesDao->insertViolenciafactoressociales($ViolenciafactoressocialesDto, $proveedor);
        if ($ViolenciafactoressocialesDto != "") {

            $dtoToJson = new DtoToJson($ViolenciafactoressocialesDto);
            $factor = $dtoToJson->toJson();


            if ($usaBitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("154");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("AGREGO FACTOR SOCIAL: Violencia de genero" . $factor);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        }

        return $ViolenciafactoressocialesDto;
    }

    public function updateViolenciafactoressociales($ViolenciafactoressocialesDto, $proveedor = null, $usaBitacora = true) {
        $ViolenciafactoressocialesDto = $this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
        $ViolenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
        $ViolenciafactoressocialesDto = $ViolenciafactoressocialesDao->updateViolenciafactoressociales($ViolenciafactoressocialesDto, $proveedor);
        if ($ViolenciafactoressocialesDto != "") {

            $dtoToJson = new DtoToJson($ViolenciafactoressocialesDto);
            $factor = $dtoToJson->toJson();


            if ($usaBitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("155");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("AGREGO FACTOR SOCIAL: Violencia de genero" . $factor);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        }

        return $ViolenciafactoressocialesDto;
    }

    public function selectViolenciafactoressociales($ViolenciafactoressocialesDto, $proveedor = null) {
        $ViolenciafactoressocialesDto = $this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
        $ViolenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
        $ViolenciafactoressocialesDto = $ViolenciafactoressocialesDao->selectViolenciafactoressociales($ViolenciafactoressocialesDto, $proveedor);

        return $ViolenciafactoressocialesDto;
    }

    ///////////////////////////homicidios dolosos///////////////////////////////
    public function insertViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto, $proveedor = null, $usaBitacora = true) {

        $ViolenciahomicidiosdolososDto = $this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
        $ViolenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
        $ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososDao->insertViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto, $proveedor);
        if ($ViolenciahomicidiosdolososDto != "") {

            $dtoToJson = new DtoToJson($ViolenciahomicidiosdolososDto);
            $factor = $dtoToJson->toJson();

            if ($usaBitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("157");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("AGREGO FACTOR SOCIAL: Violencia de genero" . $factor);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        }

        return $ViolenciahomicidiosdolososDto;
    }

    public function updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto, $proveedor = null, $usaBitacora = true) {
        $ViolenciahomicidiosdolososDto = $this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
        $ViolenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
        $ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososDao->updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto, $proveedor);
        if ($ViolenciahomicidiosdolososDto != "") {

            if ($usaBitacora) {
                $dtoToJson = new DtoToJson($ViolenciahomicidiosdolososDto);
                $factor = $dtoToJson->toJson();
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("158");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("ACTUALIZO O ELIMINO FACTOR SOCIAL: Violencia de genero" . $factor);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        }

        return $ViolenciahomicidiosdolososDto;
    }

    public function selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto, $proveedor = null) {
        $ViolenciahomicidiosdolososDto = $this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
        $ViolenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
        $ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososDao->selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto, $proveedor);

        return $ViolenciahomicidiosdolososDto;
    }

    /*
     *
     * metodos para webservice
     *
     */

    /**
     * metodo para agregar efecto de violencia de genero via web service
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function agregarEfectoViolenciaGenero($data, $proveedor = null) {
        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");
        try {

            $logger->w_onError('**************/método: agregarEfectoViolenciaGenero > inicia proceso para agregar/editar un efecto violencia de genero /**************');

            if (!isset($data['id_relacion']))
                throw new Exception('no se encuentra el parametro id_relacion');
            if (!isset($data['idEfectoOfendido']))
                throw new Exception('no se encuentra el parametro idEfectoOfendido');
            if (!isset($data['cveEfecto']))
                throw new Exception('no se encuentra el parametro cveEfecto');
            if (!isset($data['cveDetalleEfecto']))
                throw new Exception('no se encuentra el parametro cveDetalleEfecto');


            $ViolenciadegeneroDTO = new ViolenciadegeneroDTO();
            $ViolenciadegeneroDTO->setIdImpOfeDelSolicitud($data['id_relacion']);
            $ViolenciadegeneroDTO->setCveEfecto($data['cveEfecto']);
            $ViolenciadegeneroDTO->setActivo('S');

            $EfectosofendidosDTO = new EfectosofendidosDTO();
            $EfectosofendidosDTO->setIdImpOfeDelSolicitud($data['id_relacion']);
            $EfectosofendidosDTO->setCveDetalleEfecto($data['cveDetalleEfecto']);
            $EfectosofendidosDTO->setActivo('S');

            if (isset($data['idViolenciaDeGenero']) && isset($data['idEfectoOfendido']) && $data['idViolenciaDeGenero'] != '' && $data['idEfectoOfendido'] != '') {
                $ViolenciadegeneroDTO->setIdViolenciaDeGenero($data['idViolenciaDeGenero']);
                $EfectosofendidosDTO->setIdEfectoOfendido($data['idEfectoOfendido']);

                $logger->w_onError("se va a editar un efecto de violencia de genero con los parametros : " . json_encode($data));

                $responseAgregarEfecto = $this->modificaEfectosViolencia($ViolenciadegeneroDTO, $EfectosofendidosDTO, '', false);
            } else {
                $logger->w_onError('se va a agregar un efecto de ofendidocon los parametros : ' . json_encode($data));
                $responseAgregarEfecto = $this->guardaEfectosViolencia($ViolenciadegeneroDTO, $EfectosofendidosDTO, '', false);
            }


            $responseAgregarEfecto = json_decode($responseAgregarEfecto, true);


            if (is_array($responseAgregarEfecto['mnj'])) {
                $mensaje = implode(',', $responseAgregarEfecto['mnj'][0]);
            } else {
                $mensaje = $responseAgregarEfecto['mnj'];
            }

            if ($responseAgregarEfecto['status'] == 'error')
                throw new Exception($mensaje);

            $logger->w_onError(">>>>>>>>>>>>>>El registro se insertó/modificó correctamente");
            $response = [
                'estatus' => 'ok',
                'mensaje' => 'El efecto de violencia de genero se guardó/editó de forma correcta'
            ];
        } catch (Exception $e) {

            $logger->w_onError(">>>>>>>>>>>>>>" . $e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para eliminar efecto de violencia de genero  via webservice
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function eliminarEfectoViolenciaGenero($data, $proveedor = null) {

        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError('**************método eliminarEfectoViolenciaGenero > inicia proceso para eliminar un efecto de violencia de genero');
            $logger->w_onError('parametros de entrada: ' . json_encode($data));

            if (!isset($data['idViolenciaDeGenero']))
                throw new Exception('no se encuentra el parametro idViolenciaDeGenero');

            if (!isset($data['idEfectoOfendido']))
                throw new Exception('no se encuentra el parametro idEfectoOfendido');

            $ViolenciadegeneroDTO = new ViolenciadegeneroDTO();
            $ViolenciadegeneroDTO->setIdViolenciaDeGenero($data['idViolenciaDeGenero']);

            $EfectosofendidosDTO = new EfectosofendidosDTO();
            $EfectosofendidosDTO->setIdEfectoOfendido($data['idEfectoOfendido']);

            $eliminarEfecto = $this->eliminarEfecto($ViolenciadegeneroDTO, $EfectosofendidosDTO, '', false);

            $eliminarEfecto = json_decode($eliminarEfecto, true);

            if ($eliminarEfecto['status'] == 'error')
                throw new Exception('ocurrio un error al eliminar el efecto de violencia de genero');

            $logger->w_onError(">>>>>>>>>>>>>>efecto de violencia de genero eliminado correctamente");

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'efecto de violencia de genero eliminado correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError(">>>>>>>>>>>>>>" . $e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para agregar factor social via webservice
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function agregarFactorSocialViolenciaGenero($data, $proveedor = null) {

        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError('*************** método agregarFactorSocialViolenciaGenero > inicia proceso para agregar/modificar factor social de violencia de genero');
            $logger->w_onError('parametros de entrada: ' . json_encode($data));

            if (!isset($data['idViolenciaDeGenero']))
                throw new Exception('el parametro idViolenciaDeGenero es obligatorio');
            if (!isset($data['cveFactorCultural']))
                throw new Exception('el parametro cveFactorCultural es obligatorio');

            if (!is_numeric($data['idViolenciaDeGenero']))
                throw new Exception('el parametro idViolenciaDeGenero debe de ser numerico');
            if (!is_numeric($data['cveFactorCultural']))
                throw new Exception('el parametro cveFactorCultural debe de ser numerico');

            if (isset($data['idViolenciaFactorSocial'])) {
                if (!is_numeric($data['idViolenciaFactorSocial']))
                    throw new Exception('el parametro idViolenciaFactorSocial debe de ser numerico');
            }

            $ViolenciafactoressocialesDTO = new ViolenciafactoressocialesDTO();
            $ViolenciafactoressocialesDTO->setIdViolenciaDeGenero($data['idViolenciaDeGenero']);
            $ViolenciafactoressocialesDTO->setCveFactorCultural($data['cveFactorCultural']);
            $ViolenciafactoressocialesDTO->setActivo('S');

            $selectFactorSocial = $this->selectViolenciafactoressociales($ViolenciafactoressocialesDTO);

            if ($selectFactorSocial != '')
                throw new Exception('ya se encuentra dado de alta este factor social');


            if (isset($data['idViolenciaFactorSocial'])) {
                $ViolenciafactoressocialesDTO->setIdViolenciaFactorSocial($data['idViolenciaFactorSocial']);
                $agregaFactorSocial = $this->updateViolenciafactoressociales($ViolenciafactoressocialesDTO, '', false);
                $mensaje_error = 'editar';
                $mensaje_ok = 'editó';
            } else {
                $agregaFactorSocial = $this->insertViolenciafactoressociales($ViolenciafactoressocialesDTO, '', false);
                $mensaje_error = 'insertar';
                $mensaje_ok = 'guardó';
            }


            if ($agregaFactorSocial == '')
                throw new Exception('no se pudo ' . $mensaje_error . ' el factor social');

            $logger->w_onError('el factor social del efecto de violencia de genero se ' . $mensaje_ok . ' correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el factor social del efecto de violencia de genero se ' . $mensaje_ok . ' correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para eliminar
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function eliminarFactorSocialViolenciaGenero($data, $proveedor = null) {

        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError('*************** método eliminarFactorSocialViolenciaGenero > inicia proceso para eliminar factor social de violencia de genero');
            $logger->w_onError('parametros de entrada: ' . json_encode($data));

            if (!isset($data['idViolenciaFactorSocial']))
                throw new Exception('no se encuentra el campo idViolenciaFactorSocial');

            $ViolenciafactoressocialesDto = new ViolenciafactoressocialesDTO();
            $ViolenciafactoressocialesDto->setIdViolenciaFactorSocial($data['idViolenciaFactorSocial']);
            $ViolenciafactoressocialesDto->setActivo('N');
            $ViolenciafactoressocialesDto = $this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);

            $ViolenciafactoressocialesDto = $this->updateViolenciafactoressociales($ViolenciafactoressocialesDto, '', false);

            if ($ViolenciafactoressocialesDto == "")
                throw new Exception('no se pudo eliminar el factor social');


            $logger->w_onError('el factor social del efecto de violencia de genero se eliminó correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el factor social del efecto de violencia de genero se eliminó correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para agregar homicidio doloso
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function agregarHomicidioDolosoViolenciaGenero($data, $proveedor = null) {
        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError("*************** método agregarHomicidioDolosoViolenciaGenero > inicia proceso para agregar/editar homicidio doloso");
            $logger->w_onError("parametros de entrada: " . json_encode($data));

            if (!isset($data['idViolenciaDeGenero']))
                throw new Exception('el parametro idViolenciaDeGenero es obligatorio');
            if (!isset($data['cveHomicidioDoloso']))
                throw new Exception('el parametro cveHomicidioDoloso es obligatorio');

            if (!is_numeric($data['idViolenciaDeGenero']))
                throw new Exception('el parametro idViolenciaDeGenero debe de ser numerico');
            if (!is_numeric($data['cveHomicidioDoloso']))
                throw new Exception('el parametro cveHomicidioDoloso debe de ser numerico');

            if (isset($data['idViolenciaHomicidioDoloso'])) {
                if (!is_numeric($data['idViolenciaHomicidioDoloso']))
                    throw new Exception('el parametro idViolenciaHomicidioDoloso debe de ser numerico');
            }

            $ViolenciahomicidiosdolososDto = new ViolenciahomicidiosdolososDTO();
            $ViolenciahomicidiosdolososDto->setIdViolenciaDeGenero($data['idViolenciaDeGenero']);
            $ViolenciahomicidiosdolososDto->setCveHomicidioDoloso($data['cveHomicidioDoloso']);
            $ViolenciahomicidiosdolososDto->setActivo('S');

            $selectHomicidioDoloso = $this->selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);

            if ($selectHomicidioDoloso != '')
                throw new Exception('el homicidio doloso ya existe');

            if (isset($data['idViolenciaHomicidioDoloso'])) {
                $ViolenciahomicidiosdolososDto->setIdViolenciaHomicidioDoloso($data['idViolenciaHomicidioDoloso']);
                $agregarHomicidioDoloso = $this->updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto, '', false);
                $mensaje_ok = 'editó';
                $mensaje_error = 'editar';
            } else {
                $agregarHomicidioDoloso = $this->insertViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto, '', false);
                $mensaje_ok = 'guardó';
                $mensaje_error = 'guardar';
            }

            if ($agregarHomicidioDoloso == '')
                throw new Exception('no se pudo ' . $mensaje_error . ' el homicidio doloso, ocurrio un error');

            $logger->w_onError('el homicidio doloso del efecto de violencia de genero se ' . $mensaje_ok . ' correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el homicidio doloso del efecto de violencia de genero se ' . $mensaje_ok . ' correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * eliminar homicidio doloso
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function eliminarHomicidioDolosoViolenciaGenero($data, $proveedor = null) {
        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError("*************** método eliminarHomicidioDolosoViolenciaGenero > inicia proceso para eliminar homicidio doloso");
            $logger->w_onError("parametros de entrada: " . json_encode($data));

            if (!isset($data['idViolenciaHomicidioDoloso']))
                throw new Exception('el parametro idViolenciaHomicidioDoloso es obligatorio');
            if (!is_numeric($data['idViolenciaHomicidioDoloso']))
                throw new Exception('el parametro idViolenciaHomicidioDoloso debe ser numerico');

            $ViolenciahomicidiosdolososDto = new ViolenciahomicidiosdolososDTO();
            $ViolenciahomicidiosdolososDto->setIdViolenciaHomicidioDoloso($data['idViolenciaHomicidioDoloso']);
            $ViolenciahomicidiosdolososDto->setActivo('N');

            $eliminarHomicidioDoloso = $this->updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto, '', false);

            if ($eliminarHomicidioDoloso == '')
                throw new Exception('no se pudo eliminar el homicidio doloso, ocurrio un error');

            $logger->w_onError('el homicidio doloso del efecto de violencia de genero se eliminó correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el homicidio doloso del efecto de violencia de genero se eliminó correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para agregar efectos sexuales
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function agregarEfectosGeneral($data, $proveedor = null) {
        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError('*************** método agregarEfectosGeneral > inicia proceso para agregar efecto sexual general');
            $logger->w_onError('parametros de entrada: ' . json_encode($data));


            if (!isset($data['idImpOfeDelSolicitud']))
                throw new Exception('el parámetro idImpOfeDelSolicitud es requerido');
            if (!isset($data['cveModalidadAcoso']))
                throw new Exception('el parámetro idImpOfeDelSolicitud es requerido');
            if (!isset($data['cveAmbitoAcoso']))
                throw new Exception('el parámetro cveAmbitoAcoso es requerido');

            if (!is_numeric($data['idImpOfeDelSolicitud']))
                throw new Exception('el parámetro idImpOfeDelSolicitud debe de ser numerico');
            if (!is_numeric($data['cveModalidadAcoso']))
                throw new Exception('el parámetro cveModalidadAcoso debe de ser numerico');
            if (!is_numeric($data['cveAmbitoAcoso']))
                throw new Exception('el parámetro cveAmbitoAcoso debe de ser numerico');

            if (isset($data['idSexual'])) {
                if (!is_numeric($data['idSexual']))
                    throw new Exception('el parámetro idSexual debe de ser numerico');
            }

            $SexualesDto = new SexualesDTO();
            $SexualesDto->setIdImpOfeDelSolicitud($data['idImpOfeDelSolicitud']);
            $SexualesDto->setCveModalidadAcoso($data['cveModalidadAcoso']);
            $SexualesDto->setCveAmbitoAcoso($data['cveAmbitoAcoso']);
            $SexualesDto->setActivo('S');

            $selectEfectoSexual = $this->selectSexuales($SexualesDto);

            if ($selectEfectoSexual != '')
                throw new Exception('el efecto sexual ya existe');

            if (isset($data['idSexual'])) {
                $SexualesDto->setIdSexual($data['idSexual']);
                $agregaEfectoSexual = $this->updateSexuales($SexualesDto, '', false);
                $mensaje = 'editó';
            } else {
                $agregaEfectoSexual = $this->insertSexuales($SexualesDto, '', false);
                $mensaje = 'agregó';
            }


            if ($agregaEfectoSexual == '')
                throw new Exception('el efecto sexual no se ' . $mensaje . ', ocurrio un error');


            $logger->w_onError('el efecto general se ' . $mensaje . ' correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el efecto general se ' . $mensaje . ' correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para elimiar efecto sexual general
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function eliminarEfectosGeneral($data, $proveedor = null) {
        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError('*************** método para eliminar un efecto sexual general');
            $logger->w_onError('parametros de entrada: ' . json_encode($data));

            if (!isset($data['idSexual']))
                throw new Exception('el parámetro idSexual es requerido');
            if (!is_numeric($data['idSexual']))
                throw new Exception('el parámetro idSexual debe de ser numerico');

            $SexualesDto = new SexualesDTO();
            $SexualesDto->setIdSexual($data['idSexual']);
            $SexualesDto->setActivo('N');

            $eliminaEfectoSexual = $this->updateSexuales($SexualesDto, '', false);

            if ($eliminaEfectoSexual == '')
                throw new Exception('no se pudo eliminar el efecto sexual, ocurrio un error');

            $logger->w_onError('el efecto general se eliminó correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el efecto general se eliminó correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para agregar una conducta a un efecto sexual
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function agregarConductaSexual($data, $proveedor = null) {
        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {


            $logger->w_onError("*************** método agregarConductaSexual > inicia proceso para agregar conducta sexual al efecto sexual");
            $logger->w_onError("parametros de entrada: " . json_encode($data));

            if (!isset($data['idSexual']))
                throw new Exception('el parámetro idSexual es requerido');
            if (!isset($data['cveConducta']))
                throw new Exception('el parámetro idSexual es requerido');
            if (!isset($data['cveDetalleConducta']))
                throw new Exception('el parámetro idSexual es requerido');

            if (!is_numeric($data['idSexual']))
                throw new Exception('el parámetro idSexual debe de ser numerico');
            if (!is_numeric($data['cveConducta']))
                throw new Exception('el parámetro cveConducta debe de ser numerico');
            if (!is_numeric($data['cveDetalleConducta']))
                throw new Exception('el parámetro cveDetalleConducta debe de ser numerico');

            if (isset($data['idSexualConducta'])) {
                if (!is_numeric($data['idSexualConducta']))
                    throw new Exception('el parámetro idSexualConducta debe de ser numerico');
            }

            if (isset($data['idDetalleSexualConducta'])) {
                if (!is_numeric($data['idDetalleSexualConducta']))
                    throw new Exception('el parámetro idDetalleSexualConducta debe de ser numerico');
            }

            $SexualesConductasDto = new SexualesconductasDTO();
            $SexualesConductasDto->setIdSexual($data['idSexual']);
            $SexualesConductasDto->setCveConducta($data['cveConducta']);

            $DetallesSexualesConductasDto = new DetallessexualesconductasDTO();
            $DetallesSexualesConductasDto->setCveDetalleConducta($data['cveDetalleConducta']);

            if (isset($data['idSexualConducta']) && isset($data['idDetalleSexualConducta'])) {
                $SexualesConductasDto->setIdSexualConducta($data['idSexualConducta']);
                $DetallesSexualesConductasDto->setIdDetalleSexualConducta($data['idDetalleSexualConducta']);
                $agregaConductaSexual = $this->updateConductas($SexualesConductasDto, $DetallesSexualesConductasDto, '', false);
                $mensaje_ok = 'editaron';
                $mensaje_error = 'editó';
            } else {
                $agregaConductaSexual = $this->insertConductas($SexualesConductasDto, $DetallesSexualesConductasDto, '', false);
                $mensaje_ok = 'agregaron';
                $mensaje_error = 'agregó';
            }


            $agregaConductaSexual = json_decode($agregaConductaSexual, true);

            if ($agregaConductaSexual['status'] == 'error')
                throw new Exception('no se ' . $mensaje_error . ' la conducta y el detalle, ocurrio un error');

            $logger->w_onError('la conducta y su detalle se ' . $mensaje_ok . ' correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'la conducta y su detalle se ' . $mensaje_ok . ' correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para eliminar conducta de un efecto sexual
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function eliminarConductaSexual($data, $proveedor = null) {
        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError("*************** método eliminarConductaSexual > inicia proceso para eliminar conducta sexual");
            $logger->w_onError("parametros de entrada: " . json_encode($data));

            if (!isset($data['idSexualConducta']))
                throw new Exception('el parámetro idSexualConducta es requerido');
            if (!is_numeric($data['idSexualConducta']))
                throw new Exception('el parámetro idSexualConducta debe de ser numerico');

            if (!isset($data['idDetalleSexualConducta']))
                throw new Exception('el parámetro idDetalleSexualConducta es requerido');
            if (!is_numeric($data['idDetalleSexualConducta']))
                throw new Exception('el parámetro idDetalleSexualConducta debe de ser numerico');

            $SexualesConductasDto = new SexualesconductasDTO();
            $SexualesConductasDto->setIdSexualConducta($data['idSexualConducta']);
            $SexualesConductasDto->setActivo('N');


            $DetallessexualesconductasDTO = new DetallessexualesconductasDTO();
            $DetallessexualesconductasDTO->setIdSexualConducta($data['idSexualConducta']);
            $DetallessexualesconductasDTO->setIdDetalleSexualConducta($data['idDetalleSexualConducta']);
            $DetallessexualesconductasDTO->setActivo('N');

            $eliminaConductaSexual = $this->eliminarConducta($SexualesConductasDto, $DetallessexualesconductasDTO, '', false);

            $eliminaConductaSexual = json_decode($eliminaConductaSexual, true);

            if ($eliminaConductaSexual['status'] == 'error')
                throw new Exception('no se pudo eliminar la conducta sexual');

            $logger->w_onError('la conducta sexual se eliminó correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'la conducta sexual se eliminó correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para agregar testigos
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function agregarTestigos($data, $proveedor = null) {
        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError("*************** método agregarTestigos > inicia proceso para agregar testigos a violencia de genero");
            $logger->w_onError("parametros de entrada: " . json_encode($data));

            if (!isset($data['idSexual']))
                throw new Exception('el parámetro idSexual es requerido');
            if (!isset($data['nombre']))
                throw new Exception('el parámetro nombre es requerido');
            if (!isset($data['paterno']))
                throw new Exception('el parámetro paterno es requerido');
            if (!isset($data['materno']))
                throw new Exception('el parámetro materno es requerido');
            if (!isset($data['cveGenero']))
                throw new Exception('el parámetro cveGenero es requerido');

            if (!is_numeric($data['idSexual']))
                throw new Exception('el parámetro idSexual debe de ser numerico');
            if (!is_numeric($data['cveGenero']))
                throw new Exception('el parámetro cveGenero debe de ser numerico');

            if (isset($data['idTestigoSexual'])) {
                if (!is_numeric($data['idTestigoSexual']))
                    throw new Exception('el parámetro idTestigoSexual debe de ser numerico');
            }

            $TestigosSexualesDto = new TestigossexualesDTO();
            $TestigosSexualesDto->setIdSexual($data['idSexual']);
            $TestigosSexualesDto->setNombre($data['nombre']);
            $TestigosSexualesDto->setPaterno($data['paterno']);
            $TestigosSexualesDto->setMaterno($data['materno']);
            $TestigosSexualesDto->setCveGenero($data['cveGenero']);
            $TestigosSexualesDto->setActivo('S');

            $selectTestigoSexual = $this->selectTestigossexuales($TestigosSexualesDto);

            if ($selectTestigoSexual != '')
                throw new Exception('el testigo sexual ya existe');

            if ($data['idTestigoSexual']) {

                $TestigosSexualesDto->setIdTestigoSexual($data['idTestigoSexual']);

                $TestigossexualesDao = new TestigossexualesDAO();
                $insertaTestigoSexual = $TestigossexualesDao->updateTestigossexuales($TestigosSexualesDto);

                $mensaje_ok = 'editó';
                $mensaje_error = 'editar';
            } else {

                $insertaTestigoSexual = $this->insertTestigossexuales($TestigosSexualesDto, '', false);

                $mensaje_ok = 'agregó';
                $mensaje_error = 'guardar';
            }


            if ($insertaTestigoSexual == '')
                throw new Exception('no se pudo ' . $mensaje_error . ' el testigo sexual');

            $logger->w_onError('el testigo se ' . $mensaje_ok . ' correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el testigo se ' . $mensaje_ok . ' correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para eliminar testigo sexual
     * @param $data
     * @param null $proveedor
     * @return array
     * @throws Exception
     */
    public function eliminarTestigos($data, $proveedor = null) {
        $data = json_decode($data, true);

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError("*************** método eliminarTestigos > inicia proceso para eliminar testigo sexual de violencia de genero");
            $logger->w_onError("parametros de entrada: " . json_encode($data));

            if (!isset($data['idTestigoSexual']))
                throw new Exception('el parámetro idTestigoSexual es requerido');
            if (!is_numeric($data['idTestigoSexual']))
                throw new Exception('el parámetro idTestigoSexual debe de ser numerico');

            $TestigossexualesDto = new TestigossexualesDTO();
            $TestigossexualesDto->setIdTestigoSexual($data['idTestigoSexual']);
            $TestigossexualesDto->setActivo('N');

            $TestigossexualesDao = new TestigossexualesDAO();
            $TestigossexualesDto = $TestigossexualesDao->updateTestigossexuales($TestigossexualesDto);

            if ($TestigossexualesDto == '')
                throw new Exception('no se pudo eliminar el testigo sexual, ocurrio un error');

            $logger->w_onError('el testigo se eliminó correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el testigo se eliminó correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para agregar registro
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function agregar($data, $proveedor = null) {
        $data = json_decode($data, true);

        print_r($data);
        die;

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute("BEGIN");

        try {

            foreach ($data as $index_relacion => $relacion) {


                //insertar en violencia de genero
                if (isset($relacion['violencia_genero'])) {
                    foreach ($relacion['violencia_genero'] as $index_violencia_genero => $violencia_genero) {
                        
                    }
                }

                /*
                 * insertar trata de personas
                 */
                if (isset($relacion['trata_personas'])) {
                    foreach ($relacion['trata_personas'] as $index_trata => $trata_persona) {

                        $TrataspersonasDto = new TrataspersonasDTO();
                        $TrataspersonasDao = new TrataspersonasDAO();

                        $TrataspersonasDto->setCvePaisOrigen($trata_persona['pais_origen']);
                        $TrataspersonasDto->setCvePaisDestino($trata_persona['pais_destino']);

                        if ($trata_persona['pais_origen'] == 119) {
                            $TrataspersonasDto->setCveEstadoOrigen($trata_persona['estado_origen']);
                            $TrataspersonasDto->setCveMunicipioOrigen($trata_persona['municipio_origen']);
                        } else {
                            $TrataspersonasDto->setEstadoOrigen($trata_persona['estado_origen']);
                            $TrataspersonasDto->setMunicipioOrigen($trata_persona['municipio_origen']);
                        }

                        if ($trata_persona['pais_destino'] == 119) {
                            $TrataspersonasDto->setCveEstadoDestino($trata_persona['estado_destino']);
                            $TrataspersonasDto->setCveMunicipioDestino($trata_persona['municipio_destino']);
                        } else {
                            $TrataspersonasDto->setEstadoDestino($trata_persona['estado_destino']);
                            $TrataspersonasDto->setMunicipioDestino($trata_persona['municipio_destino']);
                        }

                        $TrataspersonasDto->setCveTipoTrata($trata_persona['tipo_trata']);
                        $TrataspersonasDto->setCveTrasportacion($trata_persona['transportacion']);
                        $TrataspersonasDto->setIdImpOfeDelSolicitud($relacion['id_relacion']);
                        $TrataspersonasDto->setActivo('S');
                        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);

                        //validaciones trata de personas
                        if ($trata_persona['pais_origen'] != 119) {
                            if (!is_string($trata_persona['estado_origen']))
                                throw new Exception('El estado de origen en el registro de trata de personas con indice ' . $index_trata . ' debe de ser un string');
                            if (!is_string($trata_persona['municipio_origen']))
                                throw new Exception('El municipio de origen en el registro de trata de personas con indice ' . $index_trata . ' debe de ser un string');
                        } else {
                            if (!is_numeric($trata_persona['estado_origen']))
                                throw new Exception('El estado de origen en el registro de trata de personas con indice ' . $index_trata . ' debe de ser un tipo numerico');
                            if (!is_numeric($trata_persona['municipio_origen']))
                                throw new Exception('El municipio de origen en el registro de trata de personas con indice ' . $index_trata . ' debe de ser un tipo numerico');
                        }
                        //terminan validaciones
                        //valida si existe el registro
                        $selectTrataPersona = $TrataspersonasDao->selectTrataspersonas($TrataspersonasDto, '', $this->proveedor);
                        if ($selectTrataPersona != '')
                            throw new Exception('el registro de trata de personas en ' . $index_trata . ' ya existe');

                        $TrataspersonasDto = $TrataspersonasDao->insertTrataspersonas($TrataspersonasDto, $this->proveedor);
                        if ($TrataspersonasDto == "")
                            throw new Exception('no se pudo insertar el registro trata de personas en el índice ' . $index_trata . ', ocurrio un error');
                        //$TrataspersonasDto = $TrataspersonasDao->insertTrataspersonas($TrataspersonasDto, $proveedor);
                    }
                }


                //insertar efectos
                foreach ($relacion['efectos'] as $index_efecto => $efecto) {
                    $SexualesDto = new SexualesDTO();
                    $SexualesDao = new SexualesDAO();
                    $SexualesDto->setIdImpOfeDelSolicitud($relacion['id_relacion']);
                    $SexualesDto->setActivo('S');

                    //si no es nulo el id_efecto_genral y existe el registro entonces saltamos
                    //y procede a insertar conductas y testigos
                    if (isset($relacion['id_efecto_general'])) {

                        if (!is_null($relacion['id_efecto_general'])) {
                            $SexualesDto->setIdSexual($efecto['id_efecto_general']);
                            $selectSexual = $this->selectSexuales($SexualesDto);
                            if ($selectSexual == ' ')
                                throw new Exception('no existe el campo id_efecto_general en el índice ' . $index_efecto);
                        } else {
                            throw new Exception('el campo id_efecto_genera no puede ir vacío en el índice ' . $index_efecto);
                        }
                    } else {

                        $SexualesDto->setCveModalidadAcoso($efecto['modalidad']);
                        $SexualesDto->setCveAmbitoAcoso($efecto['ambito']);


                        $SexualesDto = $this->validarSexuales($SexualesDto);
                        $selectSexual = $this->selectSexuales($SexualesDto);

                        //validaciones de los campos
                        //terminan validaciones

                        if ($selectSexual != '')
                            throw new Exception('el efecto general en su índice ' . $index_efecto . ' ya existe');
                        $SexualesDto = $SexualesDao->insertSexuales($SexualesDto);
                        if ($SexualesDto == '')
                            throw new Exception('el efecto general en su índice ' . $index_efecto . ' no se pudo insertar, ocurrio un error');
                    }
                }
            }

            $this->proveedor->execute("COMMIT");

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'Registro guardado correctamente!'
            ];
        } catch (Exception $e) {

            $this->proveedor->execute("ROLLBACK");

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para agregar/modificar trata de personas
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function agregarTrataPersonas($data, $proveedor = null) {
        $data = json_decode($data, true);

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        if ($proveedor == null) {
            $this->proveedor->execute("BEGIN");
        }

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError("*************** método agregarTrataPersonas > inicia proceso para agregar/modificar trata de personas");
            $logger->w_onError("parametros de entrada: " . json_encode($data));

            if (!isset($data['id_relacion']))
                throw new Exception('el valor id_relacion no esta declarado en el parametro');
            if (!isset($data['trata_personas']))
                throw new Exception('el valor trata_personas no esta declarado en el parametro');

            $id_relacion = $data['id_relacion'];

            $ImpOfeDelSolicitudDto = new ImpofedelsolicitudesDTO();
            $ImpOfeDelSolicitudDao = new ImpofedelsolicitudesDAO();
            $ImpOfeDelSolicitudDto->setIdImpOfeDelSolicitud($id_relacion);
            $ImpOfeDelSolicitudDto->setActivo('S');

            $selectImpofedel = $ImpOfeDelSolicitudDao->selectImpofedelsolicitudes($ImpOfeDelSolicitudDto);

            if ($selectImpofedel == '')
                throw new Exception('no exite la relación con el id ' . $id_relacion);


            foreach ($data['trata_personas'] as $index_trata => $trata_persona) {

                /*
                 * validacion pais
                 */
                if ($trata_persona['pais_origen'] != 119) {
                    if (!is_string($trata_persona['estado_origen']))
                        throw new Exception('El estado de origen en el registro de trata de personas con indice ' . $index_trata . ' debe de ser un string');
                    if (!is_string($trata_persona['municipio_origen']))
                        throw new Exception('El municipio de origen en el registro de trata de personas con indice ' . $index_trata . ' debe de ser un string');
                } else {
                    if (!is_numeric($trata_persona['estado_origen']))
                        throw new Exception('El estado de origen en el registro de trata de personas con indice ' . $index_trata . ' debe de ser un tipo numerico');
                    if (!is_numeric($trata_persona['municipio_origen']))
                        throw new Exception('El municipio de origen en el registro de trata de personas con indice ' . $index_trata . ' debe de ser un tipo numerico');
                }
                /*
                 * termina validacion pais
                 */

                $TrataspersonasDto = new TrataspersonasDTO();
                $TrataspersonasDao = new TrataspersonasDAO();

                $TrataspersonasDto->setCvePaisOrigen($trata_persona['pais_origen']);
                $TrataspersonasDto->setCvePaisDestino($trata_persona['pais_destino']);

                if ($trata_persona['pais_origen'] == 119) {
                    $TrataspersonasDto->setCveEstadoOrigen($trata_persona['estado_origen']);
                    $TrataspersonasDto->setCveMunicipioOrigen($trata_persona['municipio_origen']);
                    $TrataspersonasDto->setEstadoOrigen('');
                    $TrataspersonasDto->setMunicipioOrigen('');
                } else {
                    $TrataspersonasDto->setEstadoOrigen($trata_persona['estado_origen']);
                    $TrataspersonasDto->setMunicipioOrigen($trata_persona['municipio_origen']);
                    $TrataspersonasDto->setCveEstadoOrigen('');
                    $TrataspersonasDto->setCveMunicipioOrigen('');
                }

                if ($trata_persona['pais_destino'] == 119) {
                    $TrataspersonasDto->setCveEstadoDestino($trata_persona['estado_destino']);
                    $TrataspersonasDto->setCveMunicipioDestino($trata_persona['municipio_destino']);
                    $TrataspersonasDto->setEstadoDestino('');
                    $TrataspersonasDto->setMunicipioDestino('');
                } else {
                    $TrataspersonasDto->setEstadoDestino($trata_persona['estado_destino']);
                    $TrataspersonasDto->setMunicipioDestino($trata_persona['municipio_destino']);
                    $TrataspersonasDto->setCveEstadoDestino('');
                    $TrataspersonasDto->setCveMunicipioDestino('');
                }

                $TrataspersonasDto->setCveTipoTrata($trata_persona['tipo_trata']);
                $TrataspersonasDto->setCveTrasportacion($trata_persona['transportacion']);
                $TrataspersonasDto->setIdImpOfeDelSolicitud($id_relacion);
                $TrataspersonasDto->setActivo('S');
                $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);


                /*
                 * valida que no existe el registro
                 */
                $orden = '';

                if (isset($trata_persona['idTrataPersona'])) {
                    $orden = ' WHERE idTrataPersona != ' . $trata_persona['idTrataPersona'];
                }

                $selectTrataPersona = $TrataspersonasDao->selectTrataspersonas($TrataspersonasDto, $orden, $this->proveedor);
                if ($selectTrataPersona != '')
                    throw new Exception('el registro de trata de personas en el índice ' . $index_trata . ' ya existe');

                if (isset($trata_persona['idTrataPersona'])) {
                    $TrataspersonasDto->setIdTrataPersona($trata_persona['idTrataPersona']);
                }

                if ($TrataspersonasDto->getIdTrataPersona() == '') {
                    $TrataspersonasDto = $TrataspersonasDao->insertTrataspersonas($TrataspersonasDto, $this->proveedor);
                    if ($TrataspersonasDto == "")
                        throw new Exception('no se pudo insertar el registro trata de personas en el índice ' . $index_trata . ', ocurrio un error');
                } else {

                    $TrataspersonasDto = $TrataspersonasDao->updateTrataspersonas($TrataspersonasDto, $this->proveedor);
                    if ($TrataspersonasDto == "")
                        throw new Exception('no se pudo editar el registro trata de personas en el índice ' . $index_trata . ', ocurrio un error');
                }
            }

            if ($proveedor == null) {
                $this->proveedor->execute("COMMIT");
            }

            $logger->w_onError('registro(s) guardado(s) correctamente!');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'registro(s) guardado(s) correctamente!'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            if ($proveedor == null) {
                $this->proveedor->execute("ROLLBACK");
            }

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para eliminar trata de personas
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function eliminarTrataPersonas($data, $proveedor = null) {
        $data = json_decode($data, true);


        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        if ($proveedor == null) {
            $this->proveedor->execute("BEGIN");
        }


        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError("*************** método eliminarTrataPersonas > inicia proceso para eliminar trata de personas");
            $logger->w_onError("parametros de entrada: " . json_encode($data));

            foreach ($data as $index => $idTrataPersona) {

                if (!is_numeric($idTrataPersona))
                    throw new Exception('el registro en el índice = ' . $index . ' no es debe de ser número');
                $TrataspersonasDto = new TrataspersonasDTO();
                $TrataspersonasDao = new TrataspersonasDAO();

                $TrataspersonasDto->setIdTrataPersona($idTrataPersona);
                $TrataspersonasDto->setActivo('N');

                $eliminaTrata = $TrataspersonasDao->updateTrataspersonas($TrataspersonasDto, $this->proveedor);

                if ($eliminaTrata == '')
                    throw new Exception('no se pudo eliminar los registros, ocurrio un error');
            }

            if ($proveedor == null) {
                $this->proveedor->execute("COMMIT");
            }


            $logger->w_onError('registros de trata de personas fueron eliminados correctamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'Registros de trata de personas eliminados correctamente'
            ];
        } catch (Exception $e) {

            $logger->w_onError($e->getMessage());

            if ($proveedor == null) {
                $this->proveedor->execute("ROLLBACK");
            }

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para consultar violencia de genero por id de relacion
     * @param $data
     * @return array
     */
    public function consultarPorIdRelacion($data) {
        $data = json_decode($data, true);
        $response = [];

        $logger = new Logger("/../../logs/", "WebServicePasoSeis");

        try {

            $logger->w_onError("*************** método consultarPorIdRelacion > inicia proceso para consultar violencia de genero por un id de relacion");
            $logger->w_onError("parametros de entrada: " . json_encode($data));

            if (!count($data))
                throw new Exception('el parametro debe contener valores');

            $response['estatus'] = 'ok';
            $response['mensaje'] = 'datos consultados correctamente';

            foreach ($data as $id_relacion) {
                $ImpOfeDelSolicitudDto = new ImpofedelsolicitudesDTO();
                $ImpOfeDelSolicitudDao = new ImpofedelsolicitudesDAO();
                $ImpOfeDelSolicitudDto->setIdImpOfeDelSolicitud($id_relacion);
                $ImpOfeDelSolicitudDto->setActivo('S');

                $selectImpofedel = $ImpOfeDelSolicitudDao->selectImpofedelsolicitudes($ImpOfeDelSolicitudDto);

                if ($selectImpofedel == '')
                    throw new Exception('no exite la relación con el id ' . $id_relacion);

                $resumenController = new ResumensolicitudaudienciaController();

                $response['data'][$id_relacion]['violencia_genero'] = $resumenController->getViolenciaGenero($id_relacion);
                $response['data'][$id_relacion]['trata_personas'] = $resumenController->getTrataPersonas($id_relacion);
                $response['data'][$id_relacion]['efectos'] = $resumenController->getSexualesGeneral($id_relacion);
            }

            $logger->w_onError("la consulta se realizó con exito");
        } catch (Exception $e) {
            unset($response['data']);

            $logger->w_onError($e->getMessage());

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

}

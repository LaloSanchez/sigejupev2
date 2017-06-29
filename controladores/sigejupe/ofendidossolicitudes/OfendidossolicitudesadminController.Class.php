<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidossolicitudes/OfendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidos/TutoresofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidos/TutoresofendidosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");


/*
 * invocar controlador de domicilio, telefonos, defensores, tutoresm nacionalidades
 */
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesadminController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/telefonosofendidossolicitudes/TelefonosofendidossolicitudesadminController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresofendidossolicitudes/DefensoresofendidossolicitudesadminController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tutoresofendidos/TutoresofendidosadminController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesadminController.Class.php");

/*
 * de las relaciones, violencia de genero, trata de personas y efectos sexuales
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenero/ViolenciadegeneroDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressociales/ViolenciafactoressocialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonas/TrataspersonasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexuales/SexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexuales/TestigossexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductas/SexualesconductasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductas/DetallessexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductas/DetallessexualesconductasDAO.Class.php");

class OfendidossolicitudesController {

    private $proveedor;

    public function __construct()
    {

    }

///////////////////////////////////////////////////////////////////////////////
//INICIO DE VALIDACIONES
///////////////////////////////////////////////////////////////////////////////
    public function validarOfendidossolicitudes($OfendidossolicitudesDto)
    {
        $OfendidossolicitudesDto->setidOfendidoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getidOfendidoSolicitud())))));
        if ($this->esFecha($OfendidossolicitudesDto->getidOfendidoSolicitud())) {
            $OfendidossolicitudesDto->setidOfendidoSolicitud($this->fechaMysql($OfendidossolicitudesDto->getidOfendidoSolicitud()));
        }
        $OfendidossolicitudesDto->setidSolicitudAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getidSolicitudAudiencia())))));
        $OfendidossolicitudesDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getactivo())))));
        $OfendidossolicitudesDto->setfechaRegistro(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getfechaRegistro())))));
        if ($this->esFecha($OfendidossolicitudesDto->getfechaRegistro())) {
            $OfendidossolicitudesDto->setfechaRegistro($this->fechaMysql($OfendidossolicitudesDto->getfechaRegistro()));
        }
        $OfendidossolicitudesDto->setfechaActualizacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getfechaActualizacion())))));
        if ($this->esFecha($OfendidossolicitudesDto->getfechaActualizacion())) {
            $OfendidossolicitudesDto->setfechaActualizacion($this->fechaMysql($OfendidossolicitudesDto->getfechaActualizacion()));
        }
        $OfendidossolicitudesDto->setnombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getnombre())))));
        $OfendidossolicitudesDto->setpaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getpaterno())))));
        $OfendidossolicitudesDto->setmaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getmaterno())))));
        $OfendidossolicitudesDto->setrfc(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getrfc())))));
        $OfendidossolicitudesDto->setcurp(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcurp())))));
        $OfendidossolicitudesDto->setfechaNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getfechaNacimiento())))));
        if ($this->esFecha($OfendidossolicitudesDto->getfechaNacimiento())) {
            $OfendidossolicitudesDto->setfechaNacimiento($this->fechaMysql($OfendidossolicitudesDto->getfechaNacimiento()));
        }
        $OfendidossolicitudesDto->setcveOcupacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveOcupacion())))));
        $OfendidossolicitudesDto->setcveTipoPersona(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveTipoPersona())))));
        $OfendidossolicitudesDto->setcveGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveGenero())))));
        $OfendidossolicitudesDto->setCveTipoParte(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getCveTipoParte())))));
        $OfendidossolicitudesDto->setCveTipoReligion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getCveTipoReligion())))));
        $OfendidossolicitudesDto->setedad(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getedad())))));
        $OfendidossolicitudesDto->setcvePaisNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcvePaisNacimiento())))));
        $OfendidossolicitudesDto->setcveEstadoNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveEstadoNacimiento())))));
        $OfendidossolicitudesDto->setestadoNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getestadoNacimiento())))));
        $OfendidossolicitudesDto->setcveMunicipioNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveMunicipioNacimiento())))));
        $OfendidossolicitudesDto->setmunicipioNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getmunicipioNacimiento())))));
        $OfendidossolicitudesDto->setcveEstadoCivil(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveEstadoCivil())))));
        $OfendidossolicitudesDto->setcveAlfabetismo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveAlfabetismo())))));
        $OfendidossolicitudesDto->setcveNivelInstruccion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveNivelInstruccion())))));
        $OfendidossolicitudesDto->setcveEspanol(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveEspanol())))));
        $OfendidossolicitudesDto->setcveDialectoIndigena(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveDialectoIndigena())))));
        $OfendidossolicitudesDto->setcveTipoFamiliaLinguistica(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveTipoFamiliaLinguistica())))));
        $OfendidossolicitudesDto->setcveInterprete(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveInterprete())))));
        $OfendidossolicitudesDto->setcveOrdenProteccion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveOrdenProteccion())))));
        $OfendidossolicitudesDto->setcveEstadoPsicofisico(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveEstadoPsicofisico())))));
        $OfendidossolicitudesDto->setcveNacionalidad(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveNacionalidad())))));
        $OfendidossolicitudesDto->setnombreMoral(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getnombreMoral())))));
        $OfendidossolicitudesDto->setcveVictimaDeLaDelincuenciaOrganizada(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveVictimaDeLaDelincuenciaOrganizada())))));
        $OfendidossolicitudesDto->setcveVictimaDeViolenciaDeGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveVictimaDeViolenciaDeGenero())))));
        $OfendidossolicitudesDto->setcveVictimaDeTrata(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveVictimaDeTrata())))));
        $OfendidossolicitudesDto->setcveVictimaDeAcoso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveVictimaDeAcoso())))));
        $OfendidossolicitudesDto->setdesaparecido(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getdesaparecido())))));
        $OfendidossolicitudesDto->setnumHijos(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getnumHijos())))));
        $OfendidossolicitudesDto->setembarazada(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getembarazada())))));
        $OfendidossolicitudesDto->setcveGrupoEdnico(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveGrupoEdnico())))));


        return $OfendidossolicitudesDto;
    }

    public function validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto)
    {
        $DefensoresofendidossolicitudesDto->setidDefensorOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud()))));
        $DefensoresofendidossolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getidOfendidoSolicitud()))));
        $DefensoresofendidossolicitudesDto->setcveTipoAsesor(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getcveTipoAsesor()))));
        $DefensoresofendidossolicitudesDto->setnombre(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getnombre()))));
        $DefensoresofendidossolicitudesDto->settelefono(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->gettelefono()))));
        $DefensoresofendidossolicitudesDto->setcelular(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getcelular()))));
        $DefensoresofendidossolicitudesDto->setemail(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getemail()))));
        $DefensoresofendidossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getactivo()))));
        $DefensoresofendidossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getfechaRegistro()))));
        $DefensoresofendidossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getfechaActualizacion()))));

        return $DefensoresofendidossolicitudesDto;
    }

    public function validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto)
    {
        $DomiciliosofendidossolicitudesDto->setidDomicilioOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getidDomicilioOfendidoSolicitud()))));
        $DomiciliosofendidossolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getidOfendidoSolicitud()))));
        $DomiciliosofendidossolicitudesDto->setcvePais(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getcvePais()))));
        $DomiciliosofendidossolicitudesDto->setcveEstado(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getcveEstado()))));
        $DomiciliosofendidossolicitudesDto->setcveMunicipio(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getcveMunicipio()))));
        $DomiciliosofendidossolicitudesDto->setdireccion(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getdireccion()))));
        $DomiciliosofendidossolicitudesDto->setcolonia(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getcolonia()))));
        $DomiciliosofendidossolicitudesDto->setnumInterior(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getnumInterior()))));
        $DomiciliosofendidossolicitudesDto->setnumExterior(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getnumExterior()))));
        $DomiciliosofendidossolicitudesDto->setcp(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getcp()))));
        $DomiciliosofendidossolicitudesDto->setlatitud(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getlatitud()))));
        $DomiciliosofendidossolicitudesDto->setlongitud(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getlongitud()))));
        $DomiciliosofendidossolicitudesDto->setrecidenciaHabitual(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getrecidenciaHabitual()))));
        $DomiciliosofendidossolicitudesDto->setestado(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getestado()))));
        $DomiciliosofendidossolicitudesDto->setmunicipio(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getmunicipio()))));
        $DomiciliosofendidossolicitudesDto->setcveConvivencia(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getcveConvivencia()))));
        $DomiciliosofendidossolicitudesDto->setcveTipoDeVivienda(strtoupper(str_ireplace("'", "", trim($DomiciliosofendidossolicitudesDto->getcveTipoDeVivienda()))));

        return $DomiciliosofendidossolicitudesDto;
    }

    public function validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto)
    {
        $TelefonosofendidossolicitudesDto->setidTelefonoOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud()))));
        $TelefonosofendidossolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getidOfendidoSolicitud()))));
        $TelefonosofendidossolicitudesDto->settelefono(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->gettelefono()))));
        $TelefonosofendidossolicitudesDto->setcelular(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getcelular()))));
        $TelefonosofendidossolicitudesDto->setemail(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getemail()))));
        $TelefonosofendidossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getactivo()))));
        $TelefonosofendidossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getfechaRegistro()))));
        $TelefonosofendidossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getfechaActualizacion()))));

        return $TelefonosofendidossolicitudesDto;
    }

    public function validarTutoresofendidos($TutoresofendidosDto)
    {
        $TutoresofendidosDto->setidTutorOfendido(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getidTutorOfendido()))));
        $TutoresofendidosDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getidOfendidoSolicitud()))));
        $TutoresofendidosDto->setcveTipoTutor(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getcveTipoTutor()))));
        $TutoresofendidosDto->setnombre(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getnombre()))));
        $TutoresofendidosDto->setpaterno(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getpaterno()))));
        $TutoresofendidosDto->setmaterno(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getmaterno()))));
        $TutoresofendidosDto->setfechaNacimiento(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getfechaNacimiento()))));
        $TutoresofendidosDto->setedad(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getedad()))));
        $TutoresofendidosDto->setactivo(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getactivo()))));
        $TutoresofendidosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getfechaRegistro()))));
        $TutoresofendidosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getfechaActualizacion()))));
        $TutoresofendidosDto->setcveGenero(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getcveGenero()))));

        return $TutoresofendidosDto;
    }

    public function validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto)
    {
        $NacionalidadesofendidossolicitudesDto->setidNacionalidadOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud()))));
        $NacionalidadesofendidossolicitudesDto->setcvePais(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getcvePais()))));
        $NacionalidadesofendidossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getactivo()))));
        $NacionalidadesofendidossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getfechaRegistro()))));
        $NacionalidadesofendidossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getfechaActualizacion()))));
        $NacionalidadesofendidossolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getidOfendidoSolicitud()))));

        return $NacionalidadesofendidossolicitudesDto;
    }

///////////////////////////////////////////////////////////////////////////////
//FIN DE VALIDACIONES
///////////////////////////////////////////////////////////////////////////////

    public function validaEstatusSolicitud($idSolicitudAudiencia, $accion)
    {
        $solicitudesAudienciaDto = new SolicitudesaudienciasDTO();
        $solicitudesAudienciaDao = new SolicitudesaudienciasDAO();

        $solicitudesAudienciaDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
        $solicitudesAudienciaDto->setActivo('S');


        $getSolicitud = $solicitudesAudienciaDao->selectSolicitudesaudiencias($solicitudesAudienciaDto);

        $estatusSolicitud = $getSolicitud[0]->getCveEstatusSolicitud();

        if ($estatusSolicitud == 2 || $estatusSolicitud == 3) {

            $desestatussolicitus = '';

            switch ($estatusSolicitud) {
                case 2:
                    $desestatussolicitus = 'enviada';
                    break;
                case 3:
                    $desestatussolicitus = 'cancelada';
                    break;
            }

            $response = [
                'estatus' => 'error',
                'mensaje' => 'No se puede ' . $accion . ' el ofendido, ya que la solicitud se encuentra ' . $desestatussolicitus
            ];
        } else {

            $response = [
                'estatus' => 'ok'
            ];
        }

        return $response;
    }

    public function validaOfendido($OfendidossolicitudesDto)
    {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        //validar en base si puede agregar ofendido de acuerdo al num de ofendidos en la solicitud de audiencia.
        $audienciaDto = new SolicitudesaudienciasDTO();
        $audienciaDto->setIdSolicitudAudiencia($OfendidossolicitudesDto->getIdSolicitudAudiencia());
        $audienciaDao = new SolicitudesaudienciasDAO();
        $audienciaResponse = $audienciaDao->selectSolicitudesaudiencias($audienciaDto);

        if ($audienciaResponse == '') {
            return [
                'status'  => 'error',
                'mensaje' => [
                    'no se encontro una solicitud de audiencias'
                ]
            ];
        }

        //validar si el estatus es 2 o 3(enviada o cancelada) no permitir agregar mas ofendidos


        $numOfendidosAudiencia = $audienciaResponse[0]->getNumOfendidos();


        $ofendidoDto = new OfendidossolicitudesDTO();
        $ofendidoDto->setIdSolicitudAudiencia($OfendidossolicitudesDto->getIdSolicitudAudiencia());
        $ofendidoDto->setActivo('S');
        $ofendidoDao = new OfendidossolicitudesDAO();
        $ofendidoResponse = $ofendidoDao->selectOfendidossolicitudes($ofendidoDto);
        $numOfendidos = count($ofendidoResponse);


        if ($OfendidossolicitudesDto->getIdOfendidoSolicitud() == "" && ($numOfendidos == $numOfendidosAudiencia)) {
            $estatus = 'error';
            $msg[] = '*Ya no puedes agregar mas ofendidos a esta solicitud de audiencia.';

            return [
                'status'  => $estatus,
                'mensaje' => $msg
            ];
        }

        if (!$validacion->num(1, 3, $OfendidossolicitudesDto->getCveTipoPersona())) {
            if ($OfendidossolicitudesDto->getCveTipoPersona() < 1 && $OfendidossolicitudesDto->getCveTipoPersona() > 3) {
                $estatus = 'error';
                $msg[] = '* El tipo de persona no es válido';
            }
        }

        if ($OfendidossolicitudesDto->getCveTipoPersona() == 1) {

            if (!$validacion->between(1, 50, (string) $OfendidossolicitudesDto->getNombre())) {
                $estatus = 'error';
                $msg[] = '* El nombre del ofendido debe tener entre 1 y 50 de longitud';
            }

            if (!$validacion->between(1, 50, (string) $OfendidossolicitudesDto->getPaterno())) {
                $estatus = 'error';
                $msg[] = '* El apellido paterno del ofendido debe tener entre 1 y 50 de longitud';
            }

            if (!$validacion->between(1, 50, (string) $OfendidossolicitudesDto->getMaterno())) {
                $estatus = 'error';
                $msg[] = '* El apellido materno del ofendido debe tener entre 1 y 50 caracteres de longitud';
            }

            if ($OfendidossolicitudesDto->getRfc() != "") {
                if (!$validacion->rfc((string) $OfendidossolicitudesDto->getRfc())) {
                    $estatus = 'error';
                    $msg[] = '* El rfc registrado no es un formato válido';
                }
            }


            if ($OfendidossolicitudesDto->getCurp() != "") {
                if (!$validacion->curp((string) $OfendidossolicitudesDto->getCurp())) {
                    $estatus = 'error';
                    $msg[] = '* La CURP no es válida';
                }
            }

            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveGenero())) {
                if ($OfendidossolicitudesDto->getCveGenero() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* El genero no es válido';
                }
            }

            if ($OfendidossolicitudesDto->getCveGenero() != 2 && $OfendidossolicitudesDto->getEmbarazada() == 'S') {
                $estatus = 'error';
                $msg[] = '* No puede estar embarazada si el genero no es Mujer';
            }

            if ($OfendidossolicitudesDto->getCveTipoParte() == '' || $OfendidossolicitudesDto->getCveTipoParte() == '') {
                $estatus = 'error';
                $msg[] = '* La calidad del sujeto pasivo es requerido';
            } else {

                if ($OfendidossolicitudesDto->getCveTipoParte() != 2 && $OfendidossolicitudesDto->getCveTipoParte() != 4) {
                    $estatus = 'error';
                    $msg[] = '* La calidad del sujeto pasivo no es un valor válido';
                }
            }


            if (!$validacion->num(1, 3, (int) $OfendidossolicitudesDto->getCvePaisNacimiento())) {
                if ($OfendidossolicitudesDto->getCvePaisNacimiento() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* El país de nacimiento no es válido';
                }
            }

            if ($OfendidossolicitudesDto->getCvePaisNacimiento() == 119) {
                if (!$validacion->num(1, 5, (int) $OfendidossolicitudesDto->getCveEstadoNacimiento())) {
                    if ($OfendidossolicitudesDto->getCveEstadoNacimiento() <= 0) {
                        $estatus = 'error';
                        $msg[] = '* El estado de nacimiento no es válido';
                    }
                }

                if (!$validacion->num(1, 5, (int) $OfendidossolicitudesDto->getCveMunicipioNacimiento())) {
                    if ($OfendidossolicitudesDto->getCveMunicipioNacimiento() <= 0) {
                        $estatus = 'error';
                        $msg[] = '* El municipio de nacimiento no es válido';
                    }
                }
            } else {
                if (!$validacion->between(1, 200, (string) $OfendidossolicitudesDto->getEstadoNacimiento())) {
                    if ($OfendidossolicitudesDto->getEstadoNacimiento() == "") {
                        $estatus = 'error';
                        $msg[] = '* El estado de nacimiento es requerido y debe contener entre 1 y 200 caracteres';
                    }
                }

                if (!$validacion->between(1, 200, (string) $OfendidossolicitudesDto->getMunicipioNacimiento())) {
                    if ($OfendidossolicitudesDto->getMunicipioNacimiento() == "") {
                        $estatus = 'error';
                        $msg[] = '* El municipio de nacimiento es requerido y debe contener entre 1 y 200 caracteres';
                    }
                }
            }

            if ($OfendidossolicitudesDto->getFechaNacimiento() != "") {
                if (!$validacion->dateMysql((string) $OfendidossolicitudesDto->getFechaNacimiento())) {
                    $estatus = 'error';
                    $msg[] = '* El formato de fecha de nacimiento no es válido';
                }
            }

            if ($OfendidossolicitudesDto->getEdad() != "") {
                if (!$validacion->num(0, 3, (string) $OfendidossolicitudesDto->getEdad())) {
                    $estatus = 'error';
                    $msg[] = '* La edad no es válida';
                }
            }

            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveNivelInstruccion())) {
                if ($OfendidossolicitudesDto->getCveNivelInstruccion() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* El nivel de estudios no es válido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEstadoCivil())) {
                if ($OfendidossolicitudesDto->getCveEstadoCivil() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* El estado civil no es válido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEspanol())) {
                if ($OfendidossolicitudesDto->getCveEspanol() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Si habla español no es válido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveAlfabetismo())) {
                if ($OfendidossolicitudesDto->getCveAlfabetismo() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Alfabetismo no es válido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveDialectoIndigena())) {
                if ($OfendidossolicitudesDto->getCveDialectoIndigena() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Dialecto indigena no es válido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveTipoFamiliaLinguistica())) {
                if ($OfendidossolicitudesDto->getCveTipoFamiliaLinguistica() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Tipo de familia lingüística no valido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveOcupacion())) {
                if ($OfendidossolicitudesDto->getCveOcupacion() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Ocupación no valida';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveInterprete())) {
                if ($OfendidossolicitudesDto->getCveInterprete() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Interprete no válido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEstadoPsicofisico())) {
                if ($OfendidossolicitudesDto->getCveEstadoPsicofisico() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Estado Psicofisico no válido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveGrupoEdnico())) {
                if ($OfendidossolicitudesDto->getCveGrupoEdnico() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Grupo étnico no válido';
                }
            }

            if ($OfendidossolicitudesDto->getNumHijos() != '') {
                if ($OfendidossolicitudesDto->getNumHijos() < 0) {
                    $estatus = 'error';
                    $msg[] = '* Número de hijos tiene que ser mayor a 0';
                }
                if (!$validacion->num(0, 3, (int) $OfendidossolicitudesDto->getNumHijos())) {
                    $estatus = 'error';
                    $msg[] = '* Número de hijos no válido';
                }
            }
        } elseif ($OfendidossolicitudesDto->getCveTipoPersona() == 2 || $OfendidossolicitudesDto->getCveTipoPersona() == 3) {

            if (!$validacion->between(1, 500, (string) $OfendidossolicitudesDto->getNombreMoral())) {
                $estatus = 'error';
                $msg[] = '* El nombre moral debe tener entre 1 y 500 caracteres y ser texto';
            }

            if ($OfendidossolicitudesDto->getRfc() != '') {
                if (!$validacion->rfc((string) $OfendidossolicitudesDto->getRfc())) {
                    $estatus = 'error';
                    $msg[] = '* El Rfc no es válido';
                }
            }

            if ($OfendidossolicitudesDto->getCvePaisNacimiento() == 119) {

                if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEstadoNacimiento())) {
                    if ($OfendidossolicitudesDto->getCveEstadoNacimiento() <= 0) {
                        $estatus = 'error';
                        $msg[] = '* El estado no es válido';
                    }
                }

                if (!$validacion->num(1, 5, (int) $OfendidossolicitudesDto->getCveMunicipioNacimiento())) {
                    if ($OfendidossolicitudesDto->getCveMunicipioNacimiento() <= 0) {
                        $estatus = 'error';
                        $msg[] = '* El municipio no es válido';
                    }
                }
            } else {

                if (!$validacion->between(1, 200, $OfendidossolicitudesDto->getEstadoNacimiento())) {
                    $estatus = 'error';
                    $msg[] = '*El estado debe contener entre 1 y 200 caracteres y debe ser texto';
                }

                if (!$validacion->between(1, 200, $OfendidossolicitudesDto->getMunicipioNacimiento())) {
                    $estatus = 'error';
                    $msg[] = '*El municipio debe contener entre 1 y 200 caracteres y debe ser texto';
                }
            }

            if ($OfendidossolicitudesDto->getCveTipoParte() == '' || $OfendidossolicitudesDto->getCveTipoParte() == '0') {
                $estatus = 'error';
                $msg[] = '* La calidad del sujeto pasivo es requerido';
            } else {

                if ($OfendidossolicitudesDto->getCveTipoParte() != 2 && $OfendidossolicitudesDto->getCveTipoParte() != 4) {
                    $estatus = 'error';
                    $msg[] = '* La calidad del sujeto pasivo no es un valor v&aacute;lido';
                }
            }
        }
        //si el tipo de persona es fisica

        $response = [
            'status'  => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }

    public function utfEncodeOfendido($ofendidoResponse)
    {
        foreach ($ofendidoResponse as $index => $objectOfendido) {

            $ofendidoResponse[$index]->setIdOfendidoSolicitud(utf8_encode($objectOfendido->getidOfendidoSolicitud()));
            $ofendidoResponse[$index]->setIdSolicitudAudiencia(utf8_encode($objectOfendido->getIdSolicitudAudiencia()));
            $ofendidoResponse[$index]->setActivo(utf8_encode($objectOfendido->getActivo()));
            $ofendidoResponse[$index]->setNombre(utf8_encode($objectOfendido->getNombre()));
            $ofendidoResponse[$index]->setPaterno(utf8_encode($objectOfendido->getPaterno()));
            $ofendidoResponse[$index]->setMaterno(utf8_encode($objectOfendido->getMaterno()));
            $ofendidoResponse[$index]->setEstadoNacimiento(utf8_encode($objectOfendido->getEstadoNacimiento()));
            $ofendidoResponse[$index]->setMunicipioNacimiento(utf8_encode($objectOfendido->getMunicipioNacimiento()));
            $ofendidoResponse[$index]->setNombreMoral(utf8_encode($objectOfendido->getNombreMoral()));
        }

        return $ofendidoResponse;
    }

    public function agregarOfendido($OfendidossolicitudesDto, $proveedor = null, $usaBitacora = true)
    {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }


        //validar que la solicitud no sea 2 o 3
//        $validarEstatusSolicitud = $this->validaEstatusSolicitud($OfendidossolicitudesDto->getIdSolicitudAudiencia(), 'agregar');
//        if ($validarEstatusSolicitud['estatus'] == 'error') {
//            return [
//                'status' => 'error',
//                'mensaje' => [
//                    $validarEstatusSolicitud['mensaje']
//                ]
//            ];
//        }

        $validacion = $this->validaOfendido($OfendidossolicitudesDto);
        //si el estatus es true es que tiene un error;
        if ($validacion['status'] == "error")
            return $validacion;

        $ofendido = $OfendidossolicitudesDto;
        $OfendidossolicitudesDao = new OfendidossolicitudesDAO();

        if ($ofendido->getCveTipoPersona() == 1) {

            $ofendido->setNombreMoral('');

            if ($ofendido->getEmbarazada() == '') {

                $ofendido->setEmbarazada('N');
            }
            if ($ofendido->getDesaparecido() == '') {

                $ofendido->setDesaparecido('N');
            }
        } elseif ($ofendido->getCveTipoPersona() == 2 || $ofendido->getCveTipoPersona() == 3) {

            $ofendido->setActivo('S');
            $ofendido->setNombre('');
            $ofendido->setPaterno('');
            $ofendido->setMaterno('');
            $ofendido->setCurp('');
            $ofendido->setfechaNacimiento('');
            $ofendido->setCveOcupacion('15');
            $ofendido->setCveGenero('3');
            $ofendido->setCveTipoReligion('');
            $ofendido->setEdad('');
            $ofendido->setCveEstadoCivil('3');
            $ofendido->setCveAlfabetismo('4');
            $ofendido->setCveNivelInstruccion('11');
            $ofendido->setCveEspanol('4');
            $ofendido->setCveDialectoIndigena('3');
            $ofendido->setCveTipoFamiliaLinguistica('15');
            $ofendido->setCveInterprete('3');
            $ofendido->setCveOrdenProteccion('8');
            $ofendido->setCveEstadoPsicofisico('6');
            $ofendido->setCveVictimaDeLaDelincuenciaOrganizada('3');
            $ofendido->setCveVictimaDeViolenciaDeGenero('3');
            $ofendido->setCveVictimaDeTrata('3');
            $ofendido->setCveVictimaDeAcoso('3');
            $ofendido->setDesaparecido('N');
            $ofendido->setNumHijos('');
            $ofendido->setEmbarazada('N');
            $ofendido->setCveGrupoEdnico('72');
        }

        try {

            if ($proveedor == null) {
                $this->proveedor->execute('BEGIN');
            }

            $ofendidoResponse = $OfendidossolicitudesDao->insertOfendidossolicitudes($ofendido, $this->proveedor);

            if (!count($ofendidoResponse))
                throw new Exception('no se pudo guardar el ofendido');

            $ofendidoResponse = $this->utfEncodeOfendido($ofendidoResponse);

            if ($usaBitacora) {

                $bitacora = new BitacoramovimientosController();

                $bitacoraOfendido = $bitacora->agregar(55, 'INSERCION tblofendidossolicitudes', 'txt', serialize($ofendidoResponse[0]), '', $this->proveedor);

                if (!count($bitacoraOfendido))
                    throw new Exception('no se pudo guardar la accion agregar ofendido en bitacora');
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            return [
                'status'  => 'ok',
                'mensaje' => 'Datos de ofendido guardados correctamente.',
                'data'    => $ofendidoResponse[0]->toString()
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }

            return [
                'status'  => 'error',
                'mensaje' => ['No se pudo guardar los datos del ofendido.'],
                'data'    => ''
            ];
        }
    }

    public function modificarOfendido($OfendidossolicitudesDto, $proveedor = '', $usaBitacora = true)
    {
        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //validar que la solicitud no sea 2 o 3
//        $validarEstatusSolicitud = $this->validaEstatusSolicitud($OfendidossolicitudesDto->getIdSolicitudAudiencia(), 'modificar');
//        if ($validarEstatusSolicitud['estatus'] == 'error') {
//            return [
//                'status' => 'error',
//                'mensaje' => [
//                    $validarEstatusSolicitud['mensaje']
//                ]
//            ];
//        }

        $validacion = $this->validaOfendido($OfendidossolicitudesDto);
        //si el estatus es true es que tiene un error;
        if ($validacion['status'] == "error")
            return $validacion;

        $ofendido = $OfendidossolicitudesDto;
        $OfendidossolicitudesDao = new OfendidossolicitudesDAO();


        if ($ofendido->getCveTipoPersona() == 1) {

            $ofendido->setNombreMoral(' ');

            if ($ofendido->getEmbarazada() == '') {
                $ofendido->setEmbarazada('N');
            }

            if ($ofendido->getDesaparecido() == '') {
                $ofendido->setDesaparecido('N');
            }
        } elseif ($ofendido->getCveTipoPersona() == 2 || $ofendido->getCveTipoPersona() == 3) {

            $ofendido->setActivo('S');
            $ofendido->setNombre(' ');
            $ofendido->setPaterno(' ');
            $ofendido->setMaterno(' ');
            $ofendido->setCurp(' ');
            $ofendido->setfechaNacimiento(' ');
            $ofendido->setCveOcupacion('15');
            $ofendido->setCveGenero('3');
            $ofendido->setEdad('0');
            $ofendido->setCveEstadoCivil('3');
            $ofendido->setCveAlfabetismo('4');
            $ofendido->setCveNivelInstruccion('11');
            $ofendido->setCveEspanol('4');
            $ofendido->setCveDialectoIndigena('3');
            $ofendido->setCveTipoFamiliaLinguistica('15');
            $ofendido->setCveInterprete('3');
            $ofendido->setCveOrdenProteccion('8');
            $ofendido->setCveEstadoPsicofisico('6');
            $ofendido->setCveVictimaDeLaDelincuenciaOrganizada('3');
            $ofendido->setCveVictimaDeViolenciaDeGenero('3');
            $ofendido->setCveVictimaDeTrata('3');
            $ofendido->setCveVictimaDeAcoso('3');
            $ofendido->setDesaparecido('N');
            $ofendido->setNumHijos('0');
            $ofendido->setEmbarazada('N');
            $ofendido->setCveGrupoEdnico('72');
        }


        try {

            if ($proveedor == null) {
                $this->proveedor->execute('BEGIN');
            }


            $ofendido->setFechaActualizacion('NOW');


            if ($ofendido->getCveVictimaDeViolenciaDeGenero() == 2 || $ofendido->getCveVictimaDeTrata() == 2 || $ofendido->getCveVictimaDeAcoso() == 2) {

                //obtener las relaciones del ofendido
                $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
                $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

                $impOfeDelSolicitudesDto->setIdOfendidoSolicitud($ofendido->getIdOfendidoSolicitud());
                $impOfeDelSolicitudesDto->setIdSolicitudAudiencia($ofendido->getIdSolicitudAudiencia());
                $impOfeDelSolicitudesDto->setActivo('S');

                $getRelaciones = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto, '', $this->proveedor);


                if ($getRelaciones != '') {

                    foreach ($getRelaciones as $relacion) {

                        $idImpOfeDelSolicitud = $relacion->getIdImpOfeDelSolicitud();

                        //si victima de violencia de genero es "NO", eliminar logicamente violencia de genero


                        if ($ofendido->getCveVictimaDeViolenciaDeGenero() == 2) {

                            $eliminarViolenciaGenero = $this->eliminarViolenciaGenero($idImpOfeDelSolicitud, $this->proveedor);
                            if ($eliminarViolenciaGenero['estatus'] == 'error') {
                                throw new Exception($eliminarViolenciaGenero['mensaje']);
                            }
                        }


                        //si victima de trata es "NO", eliminar logicamente trata de personas
                        if ($ofendido->getCveVictimaDeTrata() == 2) {

                            $eliminarVictimaTrata = $this->eliminarTrataPersonas($idImpOfeDelSolicitud, $this->proveedor);
                            if ($eliminarVictimaTrata['estatus'] == 'error') {
                                throw new Exception($eliminarVictimaTrata['mensaje']);
                            }
                        }

                        //si victima de acoso sexual es "N" eliminar datos de efectos sexuales
                        if ($ofendido->getCveVictimaDeAcoso() == 2) {

                            $eliminarVictimaAcoso = $this->eliminarEfectosSexuales($idImpOfeDelSolicitud, $this->proveedor);
                            if ($eliminarVictimaAcoso['estatus'] == 'error') {
                                throw new Exception($eliminarVictimaAcoso['mensaje']);
                            }
                        }
                    }
                }
            }


            $ofendidoResponse = $OfendidossolicitudesDao->updateOfendidossolicitudes($ofendido, $this->proveedor);

            if (!count($ofendidoResponse))
                throw new Exception('no se pudo editar el ofendido');

            $ofendidoResponse = $this->utfEncodeOfendido($ofendidoResponse);

            if ($usaBitacora) {

                $bitacora = new BitacoramovimientosController();
                $bitacoraOfendido = $bitacora->agregar(56, 'ACTUALIZACION tblofendidossolicitudes', 'txt', serialize($ofendidoResponse[0]), '', $this->proveedor);

                if (!count($bitacoraOfendido))
                    throw new Exception('no se pudo guardar la accion actualizar ofendido en bitacora');
            }

            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }

            $response = [
                'status'  => 'ok',
                'mensaje' => 'Datos de ofendido editados correctamente.',
                'data'    => $ofendidoResponse[0]->toString()
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            $response = [
                'status'  => 'error',
                'mensaje' => ['No se pudo editar los datos del ofendido.'],
                'data'    => ''
            ];
        }

        return $response;
    }

    public function eliminarOfendido($OfendidossolicitudesDto, $proveedor = '', $usaBitacora = true)
    {
        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute("BEGIN");

        $ofendidoSolicitudDto = new OfendidossolicitudesDTO();
        $ofendidoSolicitudDao = new OfendidossolicitudesDAO();

        $ofendidoSolicitudDto->setIdOfendidoSolicitud($OfendidossolicitudesDto->getIdOfendidoSolicitud());
        $ofendidoSolicitudDto->setActivo('S');

        $getOfendidoSolicitud = $ofendidoSolicitudDao->selectOfendidossolicitudes($ofendidoSolicitudDto, '', $proveedor);

        //validar que la solicitud no sea 2 o 3
//        $validarEstatusSolicitud = $this->validaEstatusSolicitud($getOfendidoSolicitud[0]->getIdSolicitudAudiencia(), 'eliminar');
//
//        if ($validarEstatusSolicitud['estatus'] == 'error') {
//            return [
//                'status' => 'error',
//                'mensaje' => $validarEstatusSolicitud['mensaje']
//            ];
//        }

        try {

            $idOfendido = $OfendidossolicitudesDto->getIdOfendidoSolicitud();

            //Eliminar domicilios
            $domicilioDao = new DomiciliosofendidossolicitudesDAO();
            $domicilioDto = new DomiciliosofendidossolicitudesDTO();
            $domicilioDto->setIdOfendidoSolicitud($idOfendido);
            $domicilioResponse = $domicilioDao->eliminarDomicilioOfendido($domicilioDto, $this->proveedor);

            if (!$domicilioResponse)
                throw new Exception('domicilio no eliminado');

            //eliminar teléfonos
            $telefonoDao = new TelefonosofendidossolicitudesDAO();
            $telefonoDto = new TelefonosofendidossolicitudesDTO();
            $telefonoDto->setIdOfendidoSolicitud($idOfendido);
            $telefonoResponse = $telefonoDao->eliminarTelefonosOfendido($telefonoDto, $this->proveedor);

            if (!$telefonoResponse)
                throw new Exception('teléfono no eliminado');


            //eliminar defensores
            $defensorDao = new DefensoresofendidossolicitudesDAO();
            $defensorDto = new DefensoresofendidossolicitudesDTO();
            $defensorDto->setIdOfendidoSolicitud($idOfendido);
            $defensorResponse = $defensorDao->eliminarDefensoresOfendido($defensorDto, $this->proveedor);

            if (!$defensorResponse)
                throw new Exception('defensor no eliminado');


            //eliminar tutores
            $tutorDao = new TutoresofendidosDAO();
            $tutorDto = new TutoresofendidosDTO();
            $tutorDto->setIdOfendidoSolicitud($idOfendido);
            $tutorResponse = $tutorDao->eliminarTutoresOfendido($tutorDto, $this->proveedor);

            if (!$tutorResponse)
                throw new Exception('tutor no eliminado');


            //eliminar las nacionalidades del ofendido
            $nacionalidadDao = new NacionalidadesofendidossolicitudesDAO();
            $nacionalidadDto = new NacionalidadesofendidossolicitudesDTO();
            $nacionalidadDto->setIdOfendidoSolicitud($idOfendido);
            $nacionalidadResponse = $nacionalidadDao->eliminarNacionalidadesOfendidos($nacionalidadDto, $this->proveedor);

            if (!$nacionalidadResponse)
                throw new Exception('nacionalidad no eliminada');


            //eliminar la relacion
            //obtener las relaciones del ofendido
            $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

            $impOfeDelSolicitudesDto->setIdOfendidoSolicitud($idOfendido);
            $impOfeDelSolicitudesDto->setIdSolicitudAudiencia($getOfendidoSolicitud[0]->getIdSolicitudAudiencia());
            $impOfeDelSolicitudesDto->setActivo('S');

            $getRelaciones = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto, '', $this->proveedor);

            if ($getRelaciones != '') {

                foreach ($getRelaciones as $relacion) {

                    $idImpOfeDelSolicitud = $relacion->getIdImpOfeDelSolicitud();

                    //eliminar logicamente violencia de genero
                    $eliminarViolenciaGenero = $this->eliminarViolenciaGenero($idImpOfeDelSolicitud, $this->proveedor);
                    if ($eliminarViolenciaGenero['estatus'] == 'error') {
                        throw new Exception($eliminarViolenciaGenero['mensaje']);
                    }


                    //eliminar logicamente trata de personas
                    $eliminarVictimaTrata = $this->eliminarTrataPersonas($idImpOfeDelSolicitud, $this->proveedor);
                    if ($eliminarVictimaTrata['estatus'] == 'error') {
                        throw new Exception($eliminarVictimaTrata['mensaje']);
                    }


                    //eliminar datos de efectos sexuales
                    $eliminarVictimaAcoso = $this->eliminarEfectosSexuales($idImpOfeDelSolicitud, $this->proveedor);
                    if ($eliminarVictimaAcoso['estatus'] == 'error') {
                        throw new Exception($eliminarVictimaAcoso['mensaje']);
                    }

                    //eliminar la relacion
                    $impOfeDelSolicitudEliminarDto = new ImpofedelsolicitudesDTO();
                    $impOfeDelSolicitudEliminarDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
                    $impOfeDelSolicitudEliminarDto->setActivo('N');

                    $eliminarRelacion = $impOfeDelSolicitudesDao->eliminaImpodelsolicitudes($impOfeDelSolicitudEliminarDto, $this->proveedor);
                    if ($eliminarRelacion == '') {
                        throw new Exception('ocurrio un error al eliminar la relaci&oacute;n');
                    }
                }
            }


            //eliminar el ofendido
            $ofendidosDao = new OfendidossolicitudesDAO();
            $OfendidossolicitudesDto->setActivo('N');
            $ofendidosResponse = $ofendidosDao->updateOfendidossolicitudes($OfendidossolicitudesDto, $this->proveedor);

            if (!count($ofendidosResponse))
                throw new Exception('no se pudo eliminar el ofendido');

            if ($usaBitacora) {

                $bitacora = new BitacoramovimientosController();

                $bitacoraOfendido = $bitacora->agregar(57, 'ELIMINAR tblofendidossolicitudes y sus relaciones de violencia de genero, trata personas y efectos sexuales', 'txt', serialize($OfendidossolicitudesDto), '', $this->proveedor);

                if (!count($bitacoraOfendido))
                    throw new Exception('no se pudo guardar la accion eliminar ofendido en bitacora');
            }

            $this->proveedor->execute('COMMIT');

            $response = [
                'status'  => 'ok',
                'mensaje' => 'Ofendido eliminado correctamente!',
                'data'    => [
                    'idOfendidoSolicitud'  => $ofendidosResponse[0]->getIdOfendidoSolicitud(),
                    'idSolicitudAudiencia' => $ofendidosResponse[0]->getIdSolicitudAudiencia()
                ]
            ];
        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            $response = [
                'status'  => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    public function consultaOfendidossolicitudes($OfendidossolicitudesDto)
    {
        $OfendidossolicitudesDao = new OfendidossolicitudesDAO();
        $response = $OfendidossolicitudesDao->selectOfendidossolicitudes($OfendidossolicitudesDto);

        $response = $this->utfEncodeOfendido($response);

        return $response;
    }

    public function selectOfendidossolicitudes($param, $proveedor = null)
    {

        $param = json_decode($param, true);

        $OfendidossolicitudesDto = new OfendidossolicitudesDTO();

        $idOfendidoSolicitud = (isset($param["ofendido"]["idOfendidoSolicitud"])) ? $param["ofendido"]["idOfendidoSolicitud"] : '';
        $idSolicitudAudiencia = (isset($param["ofendido"]["idSolicitudAudiencia"])) ? $param["ofendido"]["idSolicitudAudiencia"] : '';
        $activo = (isset($param["ofendido"]["activo"])) ? $param["ofendido"]["activo"] : '';
        $fechaRegistro = (isset($param["ofendido"]["fechaRegistro"])) ? $param["ofendido"]["fechaRegistro"] : '';
        $fechaActualizacion = (isset($param["ofendido"]["fechaActualizacion"])) ? $param["ofendido"]["fechaActualizacion"] : '';
        $nombre = (isset($param["ofendido"]["nombre"])) ? $param["ofendido"]["nombre"] : '';
        $paterno = (isset($param["ofendido"]["paterno"])) ? $param["ofendido"]["paterno"] : '';
        $materno = (isset($param["ofendido"]["materno"])) ? $param["ofendido"]["materno"] : '';
        $rfc = (isset($param["ofendido"]["rfc"])) ? $param["ofendido"]["rfc"] : '';
        $curp = (isset($param["ofendido"]["curp"])) ? $param["ofendido"]["curp"] : '';
        $fechaNacimiento = isset($param["ofendido"]["fechaNacimiento"]) ? $param["ofendido"]["fechaNacimiento"] : '';
        $cveOcupacion = (isset($param["ofendido"]["cveOcupacion"])) ? $param["ofendido"]["cveOcupacion"] : '';
        $cveTipoPersona = (isset($param["ofendido"]["cveTipoPersona"])) ? $param["ofendido"]["cveTipoPersona"] : '';
        $cveGenero = (isset($param["ofendido"]["cveGenero"])) ? $param["ofendido"]["cveGenero"] : '';
        $edad = (isset($param["ofendido"]["edad"])) ? $param["ofendido"]["edad"] : '';
        $cvePaisNacimiento = (isset($param["ofendido"]["cvePaisNacimiento"])) ? $param["ofendido"]["cvePaisNacimiento"] : '';
        $cveEstadoNacimiento = (isset($param["ofendido"]["cveEstadoNacimiento"])) ? $param["ofendido"]["cveEstadoNacimiento"] : '';
        $estadoNacimiento = (isset($param["ofendido"]["estadoNacimiento"])) ? $param["ofendido"]["estadoNacimiento"] : '';
        $cveMunicipioNacimiento = (isset($param["ofendido"]["cveMunicipioNacimiento"])) ? $param["ofendido"]["cveMunicipioNacimiento"] : '';
        $municipioNacimiento = (isset($param["ofendido"]["municipioNacimiento"])) ? $param["ofendido"]["municipioNacimiento"] : '';
        $cveEstadoCivil = (isset($param["ofendido"]["cveEstadoCivil"])) ? $param["ofendido"]["cveEstadoCivil"] : '';
        $cveAlfabetismo = (isset($param["ofendido"]["cveAlfabetismo"])) ? $param["ofendido"]["cveAlfabetismo"] : '';
        $cveNivelInstruccion = (isset($param["ofendido"]["cveNivelInstruccion"])) ? $param["ofendido"]["cveNivelInstruccion"] : '';
        $cveEspanol = (isset($param["ofendido"]["cveEspanol"])) ? $param["ofendido"]["cveEspanol"] : '';
        $cveDialectoIndigena = (isset($param["ofendido"]["cveDialectoIndigena"])) ? $param["ofendido"]["cveDialectoIndigena"] : '';
        $cveTipoFamiliaLinguistica = (isset($param["ofendido"]["cveTipoFamiliaLinguistica"])) ? $param["ofendido"]["cveTipoFamiliaLinguistica"] : '';
        $cveInterprete = (isset($param["ofendido"]["cveInterprete"])) ? $param["ofendido"]["cveInterprete"] : '';
        $cveOrdenProteccion = (isset($param["ofendido"]["cveOrdenProteccion"])) ? $param["ofendido"]["cveOrdenProteccion"] : '';
        $cveEstadoPsicofisico = (isset($param["ofendido"]["cveEstadoPsicofisico"])) ? $param["ofendido"]["cveEstadoPsicofisico"] : '';
        $nombreMoral = (isset($param["ofendido"]["nombreMoral"])) ? $param["ofendido"]["nombreMoral"] : '';
        $cveVictimaDeLaDelincuenciaOrganizada = (isset($param["ofendido"]["cveVictimaDeLaDelincuenciaOrganizada"])) ? $param["ofendido"]["cveVictimaDeLaDelincuenciaOrganizada"] : '';
        $cveVictimaDeTrata = (isset($param["ofendido"]["cveVictimaDeTrata"])) ? $param["ofendido"]["cveVictimaDeTrata"] : '';
        $desaparecido = (isset($param["ofendido"]["desaparecido"])) ? $param["ofendido"]["desaparecido"] : '';
        $numHijos = (isset($param["ofendido"]["numHijos"])) ? $param["ofendido"]["numHijos"] : '';
        $embarazada = (isset($param["ofendido"]["embarazada"])) ? $param["ofendido"]["embarazada"] : '';
        $cveGrupoEtnico = (isset($param["ofendido"]["cveGrupoEdnico"])) ? $param["ofendido"]["cveGrupoEdnico"] : '';

        $OfendidossolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
        $OfendidossolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
        $OfendidossolicitudesDto->setActivo($activo);
        $OfendidossolicitudesDto->setFechaRegistro($fechaRegistro);
        $OfendidossolicitudesDto->setFechaActualizacion($fechaActualizacion);
        $OfendidossolicitudesDto->setNombre($nombre);
        $OfendidossolicitudesDto->setPaterno($paterno);
        $OfendidossolicitudesDto->setMaterno($materno);
        $OfendidossolicitudesDto->setRfc($rfc);
        $OfendidossolicitudesDto->setCurp($curp);
        $OfendidossolicitudesDto->setFechaNacimiento($fechaNacimiento);
        $OfendidossolicitudesDto->setCveOcupacion($cveOcupacion);
        $OfendidossolicitudesDto->setCveTipoPersona($cveTipoPersona);
        $OfendidossolicitudesDto->setCveGenero($cveGenero);
        $OfendidossolicitudesDto->setEdad($edad);
        $OfendidossolicitudesDto->setCvePaisNacimiento($cvePaisNacimiento);
        $OfendidossolicitudesDto->setCveEstadoNacimiento($cveEstadoNacimiento);
        $OfendidossolicitudesDto->setEstadoNacimiento($estadoNacimiento);
        $OfendidossolicitudesDto->setCveMunicipioNacimiento($cveMunicipioNacimiento);
        $OfendidossolicitudesDto->setMunicipioNacimiento($municipioNacimiento);
        $OfendidossolicitudesDto->setCveEstadoCivil($cveEstadoCivil);
        $OfendidossolicitudesDto->setCveAlfabetismo($cveAlfabetismo);
        $OfendidossolicitudesDto->setCveNivelInstruccion($cveNivelInstruccion);
        $OfendidossolicitudesDto->setCveEspanol($cveEspanol);
        $OfendidossolicitudesDto->setCveDialectoIndigena($cveDialectoIndigena);
        $OfendidossolicitudesDto->setCveTipoFamiliaLinguistica($cveTipoFamiliaLinguistica);
        $OfendidossolicitudesDto->setCveInterprete($cveInterprete);
        $OfendidossolicitudesDto->setCveOrdenProteccion($cveOrdenProteccion);
        $OfendidossolicitudesDto->setCveEstadoPsicofisico($cveEstadoPsicofisico);
        $OfendidossolicitudesDto->setNombreMoral($nombreMoral);
        $OfendidossolicitudesDto->setCveVictimaDeLaDelincuenciaOrganizada($cveVictimaDeLaDelincuenciaOrganizada);
        $OfendidossolicitudesDto->setCveVictimaDeTrata($cveVictimaDeTrata);
        $OfendidossolicitudesDto->setDesaparecido($desaparecido);
        $OfendidossolicitudesDto->setNumHijos($numHijos);
        $OfendidossolicitudesDto->setEmbarazada($embarazada);
        $OfendidossolicitudesDto->setCveGrupoEdnico($cveGrupoEtnico);

        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);

        $OfendidossolicitudesDao = new OfendidossolicitudesDAO();
        $OfendidossolicitudesDto = $OfendidossolicitudesDao->selectOfendidossolicitudes($OfendidossolicitudesDto, "", $proveedor);

        try {

            if (!count($OfendidossolicitudesDto))
                throw new Exception('Sin resultados');

            $ofendidos = [];

            foreach ($OfendidossolicitudesDto as $ofendidoDto) {

                $ofendido = $ofendidoDto->toString();

                //Domicilios Ofendido
                $domiciliosDto = new DomiciliosofendidossolicitudesDTO();
                $domiciliosDao = new DomiciliosofendidossolicitudesDAO();
                $domiciliosDto->setIdOfendidoSolicitud($ofendido['idOfendidoSolicitud']);
                $domiciliosDto->setActivo('S');
                $domiciliosResponse = $domiciliosDao->selectDomiciliosofendidossolicitudes($domiciliosDto);

                $ofendido['domicilios'] = [];
                foreach ($domiciliosResponse as $domicilio) {
                    $ofendido['domicilios'][] = $domicilio->toString();
                }

                //telefonos del ofendido
                $telefonosDto = new TelefonosofendidossolicitudesDTO();
                $telefonosDao = new TelefonosofendidossolicitudesDAO();
                $telefonosDto->setIdOfendidoSolicitud($ofendido['idOfendidoSolicitud']);
                $telefonosDto->setActivo('S');
                $telefonosResponse = $telefonosDao->selectTelefonosofendidossolicitudes($telefonosDto);

                $ofendido['telefonos'] = [];
                foreach ($telefonosResponse as $telefono) {
                    $ofendido['telefonos'][] = $telefono->toString();
                }


                //defensores del ofendido
                $defensoresDto = new DefensoresofendidossolicitudesDTO();
                $defensoresDao = new DefensoresofendidossolicitudesDAO();
                $defensoresDto->setIdOfendidoSolicitud(($ofendido['idOfendidoSolicitud']));
                $defensoresDto->setActivo('S');
                $defensoresResponse = $defensoresDao->selectDefensoresofendidossolicitudes($defensoresDto);

                $ofendido['defensores'] = [];
                foreach ($defensoresResponse as $defensor) {
                    $ofendido['defensores'][] = $defensor->toString();
                }

                //tutores del ofendido
                $tutoresDto = new TutoresofendidosDTO();
                $tutoresDao = new TutoresofendidosDAO();
                $tutoresDto->setIdOfendidoSolicitud(($ofendido['idOfendidoSolicitud']));
                $tutoresDto->setActivo('S');
                $tutoresResponse = $tutoresDao->selectTutoresofendidos($tutoresDto);

                $ofendido['tutores'] = [];
                foreach ($tutoresResponse as $tutor) {
                    $ofendido['tutores'][] = $tutor->toString();
                }

                //nacionalidades del ofendido
                $nacionalidadesDto = new NacionalidadesofendidossolicitudesDTO();
                $nacionalidadesDao = new NacionalidadesofendidossolicitudesDAO();
                $nacionalidadesDto->setIdOfendidoSolicitud(($ofendido['idOfendidoSolicitud']));
                $nacionalidadesDto->setActivo('S');
                $nacionalidadesResponse = $nacionalidadesDao->selectNacionalidadesofendidossolicitudes($nacionalidadesDto);

                $ofendido['nacionalidades'] = [];
                foreach ($nacionalidadesResponse as $nacionalidad) {
                    $ofendido['nacionalidades'][] = $nacionalidad->toString();
                }

                $ofendidos[] = $ofendido;
            }

            $response = [
                'estatus' => 'Ok',
                'mensaje' => 'Resultados de Ofendidos',
                'data'    => $ofendidos
            ];
        } catch (Exception $e) {
            $response = [
                'estatus' => 'Error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    public function insertOfendidossolicitudes($param, $proveedor = null)
    {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");

        $param = json_decode($param, true);

        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;

        foreach ($param as $arreglo) {
            if ($arreglo["ofendido"]["idOfendidoSolicitud"] == "") {
                $OfendidossolicitudesDto = new OfendidossolicitudesDTO();
                if (count($arreglo["ofendido"]) > 0) {
                    $OfendidossolicitudesDto->setIdSolicitudAudiencia($arreglo["ofendido"]["idSolicitudAudiencia"]);
                    $OfendidossolicitudesDto->setActivo($arreglo["ofendido"]["activo"]);
                    $OfendidossolicitudesDto->setFechaRegistro($arreglo["ofendido"]["fechaRegistro"]);
                    $OfendidossolicitudesDto->setFechaActualizacion($arreglo["ofendido"]["fechaActualizacion"]);
                    $OfendidossolicitudesDto->setNombre($arreglo["ofendido"]["nombre"]);
                    $OfendidossolicitudesDto->setPaterno($arreglo["ofendido"]["paterno"]);
                    $OfendidossolicitudesDto->setMaterno($arreglo["ofendido"]["materno"]);
                    $OfendidossolicitudesDto->setRfc($arreglo["ofendido"]["rfc"]);
                    $OfendidossolicitudesDto->setCurp($arreglo["ofendido"]["curp"]);
                    $OfendidossolicitudesDto->setFechaNacimiento($arreglo["ofendido"]["fechaNacimiento"]);
                    $OfendidossolicitudesDto->setCveOcupacion($arreglo["ofendido"]["cveOcupacion"]);
                    $OfendidossolicitudesDto->setCveTipoPersona($arreglo["ofendido"]["cveTipoPersona"]);
                    $OfendidossolicitudesDto->setCveGenero($arreglo["ofendido"]["cveGenero"]);
                    $OfendidossolicitudesDto->setEdad($arreglo["ofendido"]["edad"]);
                    $OfendidossolicitudesDto->setCvePaisNacimiento($arreglo["ofendido"]["cvePaisNacimiento"]);
                    $OfendidossolicitudesDto->setCveEstadoNacimiento($arreglo["ofendido"]["cveEstadoNacimiento"]);
                    $OfendidossolicitudesDto->setEstadoNacimiento($arreglo["ofendido"]["estadoNacimiento"]);
                    $OfendidossolicitudesDto->setCveMunicipioNacimiento($arreglo["ofendido"]["cveMunicipioNacimiento"]);
                    $OfendidossolicitudesDto->setMunicipioNacimiento($arreglo["ofendido"]["municipioNacimiento"]);
                    $OfendidossolicitudesDto->setCveEstadoCivil($arreglo["ofendido"]["cveEstadoCivil"]);
                    $OfendidossolicitudesDto->setCveAlfabetismo($arreglo["ofendido"]["cveAlfabetismo"]);
                    $OfendidossolicitudesDto->setCveNivelInstruccion($arreglo["ofendido"]["cveNivelInstruccion"]);
                    $OfendidossolicitudesDto->setCveEspanol($arreglo["ofendido"]["cveEspanol"]);
                    $OfendidossolicitudesDto->setCveDialectoIndigena($arreglo["ofendido"]["cveDialectoIndigena"]);
                    $OfendidossolicitudesDto->setCveTipoFamiliaLinguistica($arreglo["ofendido"]["cveTipoFamiliaLinguistica"]);
                    $OfendidossolicitudesDto->setCveInterprete($arreglo["ofendido"]["cveInterprete"]);
                    $OfendidossolicitudesDto->setCveOrdenProteccion($arreglo["ofendido"]["cveOrdenProteccion"]);
                    $OfendidossolicitudesDto->setCveEstadoPsicofisico($arreglo["ofendido"]["cveEstadoPsicofisico"]);
                    $OfendidossolicitudesDto->setNombreMoral($arreglo["ofendido"]["nombreMoral"]);
                    $OfendidossolicitudesDto->setCveVictimaDeLaDelincuenciaOrganizada($arreglo["ofendido"]["cveVictimaDeLaDelincuenciaOrganizada"]);
//            $OfendidossolicitudesDto->setCveVictimaDeViolenciaDeGenero($arreglo["ofendido"]["cveVictimaDeViolendiaDeGenero"]);
                    $OfendidossolicitudesDto->setCveVictimaDeTrata($arreglo["ofendido"]["cveVictimaDeTrata"]);
                    $OfendidossolicitudesDto->setDesaparecido($arreglo["ofendido"]["desaparecido"]);
                    $OfendidossolicitudesDto->setNumHijos($arreglo["ofendido"]["numHijos"]);
                    $OfendidossolicitudesDto->setEmbarazada($arreglo["ofendido"]["embarazada"]);
                    $OfendidossolicitudesDto->setCveGrupoEdnico($arreglo["ofendido"]["cveGrupoEdnico"]);
                }
                $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);


                if ($OfendidossolicitudesDto->getCveTipoPersona() == 1) {
                    if (!$validacion->text(1, 50, (string) $OfendidossolicitudesDto->getNombre())) {
                        $msg[] = array("No ingreso un nombre correcto del ofendido en la posicion:" . $count);
                        $error = true;
                    }

                    if (!$validacion->text(1, 50, $OfendidossolicitudesDto->getPaterno())) {
                        $msg[] = array("No ingreso un apellido paterno del ofendido en la posicion:" . $count);
                        $error = true;
                    }

                    if (!$validacion->text(1, 50, $OfendidossolicitudesDto->getMaterno())) {
                        $msg[] = array("No ingreso un apellido materno del ofendido en la posicion:" . $count);
                        $error = true;
                    }


                    if ($OfendidossolicitudesDto->getRfc() != "") {
                        if (!$validacion->rfc((string) $OfendidossolicitudesDto->getRfc())) {
                            $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if ($OfendidossolicitudesDto->getCurp() != "") {
                        if (!$validacion->curp((string) $OfendidossolicitudesDto->getCurp())) {
                            $msg[] = array("La curp ingresada no es valida en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveGenero())) {
                        if ($OfendidossolicitudesDto->getCveGenero() <= 0) {
                            $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 3, (int) $OfendidossolicitudesDto->getCvePaisNacimiento())) {
                        if ($OfendidossolicitudesDto->getCvePaisNacimiento() <= 0) {
                            $msg[] = array("El pais de nacimiento no es correcto en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if ($OfendidossolicitudesDto->getCvePaisNacimiento() == 119) {
                        if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEstadoNacimiento())) {
                            if ($OfendidossolicitudesDto->getCveEstadoNacimiento() <= 0) {
                                $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->num(1, 5, (int) $OfendidossolicitudesDto->getCveMunicipioNacimiento())) {
                            if ($OfendidossolicitudesDto->getCveMunicipioNacimiento() <= 0) {
                                $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    } else {
                        if (!$validacion->text(1, 200, (string) $OfendidossolicitudesDto->getEstadoNacimiento())) {
                            if ($OfendidossolicitudesDto->getEstadoNacimiento() == "") {
                                $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 200, (string) $OfendidossolicitudesDto->getMunicipioNacimiento())) {
                            if ($OfendidossolicitudesDto->getMunicipioNacimiento() == "") {
                                $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }

                    if ($OfendidossolicitudesDto->getFechaNacimiento() != "") {
                        if (!$validacion->date((string) $OfendidossolicitudesDto->getFechaNacimiento())) {
                            $msg[] = array("El formato de fecha de nacimiento no es valido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if ($OfendidossolicitudesDto->getEdad() != "") {
                        if (!$validacion->num(1, 3, (string) $OfendidossolicitudesDto->getEdad())) {
                            $msg[] = array("La edad ingresada no es valida en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveNivelInstruccion())) {
                        if ($OfendidossolicitudesDto->getCveNivelInstruccion() <= 0) {
                            $msg[] = array("El nivel de instruccion no es correcto en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEstadoCivil())) {
                        if ($OfendidossolicitudesDto->getCveEstadoCivil() <= 0) {
                            $msg[] = array("El estado civil no es correcto en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEspanol())) {
                        if ($OfendidossolicitudesDto->getCveEspanol() <= 0) {
                            $msg[] = array("No se identifica la clave para saber si habla espanol en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveAlfabetismo())) {
                        if ($OfendidossolicitudesDto->getCveAlfabetismo() <= 0) {
                            $msg[] = array("No se identifico una clave valida de alfabetismo en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveDialectoIndigena())) {
                        if ($OfendidossolicitudesDto->getCveDialectoIndigena() <= 0) {
                            $msg[] = array("No se identifico una clave valida de dialecto indigena en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveTipoFamiliaLinguistica())) {
                        if ($OfendidossolicitudesDto->getCveTipoFamiliaLinguistica() <= 0) {
                            $msg[] = array("No se identifico una clave valida de tipo de familia linguistica en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveOcupacion())) {
                        if ($OfendidossolicitudesDto->getCveOcupacion() <= 0) {
                            $msg[] = array("No se identifico una clave valida de tipo de ocupacion en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveInterprete())) {
                        if ($OfendidossolicitudesDto->getCveInterprete() <= 0) {
                            $msg[] = array("No se identifico una clave valida si requiere interprete en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEstadoPsicofisico())) {
                        if ($OfendidossolicitudesDto->getCveEstadoPsicofisico() <= 0) {
                            $msg[] = array("No se identifico una clave valida del estado psicofisico en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveGrupoEdnico())) {
                        if ($OfendidossolicitudesDto->getCveGrupoEdnico() <= 0) {
                            $msg[] = array("No se identifico una clave valida para tipo de reincidencia en la posicion:" . $count);
                            $error = true;
                        }
                    }
                } else if (($OfendidossolicitudesDto->getCveTipoPersona() == 2) || ($OfendidossolicitudesDto->getCveTipoPersona() == 3)) {
                    if (!$validacion->text(1, 500, $OfendidossolicitudesDto->getNombreMoral())) {
                        $msg[] = array("El nombre moral no es correcto en la posicion:" . $count);
                        $error = true;
                    }
                } else {
                    $msg[] = array("El tipo de persona no es correcto en la posicion:" . $count);
                    $error = true;
                }


                if (count($arreglo["defensores"]) > 0) {
                    for ($index = 0; $index < count($arreglo["defensores"]); $index ++) {
                        $DefensoressolicitudesDto = new DefensoresofendidossolicitudesDTO();
                        if (count($arreglo["defensores"][$index]) > 0) {
                            $DefensoressolicitudesDto->setCveTipoAsesor($arreglo["defensores"][$index]["cveTipoAsesor"]);
                            $DefensoressolicitudesDto->setNombre($arreglo["defensores"][$index]["nombre"]);
                            $DefensoressolicitudesDto->setTelefono($arreglo["defensores"][$index]["telefono"]);
                            $DefensoressolicitudesDto->setCelular($arreglo["defensores"][$index]["celular"]);
                            $DefensoressolicitudesDto->setEmail($arreglo["defensores"][$index]["email"]);
                            $DefensoressolicitudesDto->setActivo("S");
                        }
                        $DefensoressolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoressolicitudesDto);

                        if (!$validacion->text(1, 2, (int) $DefensoressolicitudesDto->getcveTipoAsesor())) {
                            if ($DefensoressolicitudesDto->getcveTipoAsesor() <= 0) {
                                $msg[] = array("El tipo de defensor no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 500, (string) $DefensoressolicitudesDto->getNombre())) {
                            if ($DefensoressolicitudesDto->getNombre() == "") {
                                $msg[] = array("No ingreso un nombre correcto del defensor en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if ($DefensoressolicitudesDto->getTelefono() != "") {
                            if (!$validacion->telefono((string) $DefensoressolicitudesDto->getTelefono())) {
                                $msg[] = array("No ingreso un Telefono correcto del defensor en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($DefensoressolicitudesDto->getCelular() != "") {
                            if (!$validacion->telefono((string) $DefensoressolicitudesDto->getCelular())) {
                                $msg[] = array("No ingreso un celular correcto del defensor en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($DefensoressolicitudesDto->getEmail() == "") {
                            if (!$validacion->email((string) $DefensoressolicitudesDto->getEmail())) {
                                $msg[] = array("No ingreso un email correcto del defensor en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }
                }

                if (count($arreglo["domicilios"]) > 0) {
                    for ($index = 0; $index < count($arreglo["domicilios"]); $index ++) {
                        $domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();
                        $domiciliosofendidossolicitudesDto->setCvePais($arreglo["domicilios"][$index]["cvePais"]);
                        $domiciliosofendidossolicitudesDto->setCveEstado($arreglo["domicilios"][$index]["cveEstado"]);
                        $domiciliosofendidossolicitudesDto->setCveMunicipio($arreglo["domicilios"][$index]["cveMunicipio"]);
                        $domiciliosofendidossolicitudesDto->setDireccion($arreglo["domicilios"][$index]["direccion"]);
                        $domiciliosofendidossolicitudesDto->setColonia($arreglo["domicilios"][$index]["colonia"]);
                        $domiciliosofendidossolicitudesDto->setNumInterior($arreglo["domicilios"][$index]["numInterior"]);
                        $domiciliosofendidossolicitudesDto->setNumExterior($arreglo["domicilios"][$index]["numExterior"]);
                        $domiciliosofendidossolicitudesDto->setCp($arreglo["domicilios"][$index]["cp"]);
                        $domiciliosofendidossolicitudesDto->setLatitud($arreglo["domicilios"][$index]["latitud"]);
                        $domiciliosofendidossolicitudesDto->setLongitud($arreglo["domicilios"][$index]["longitud"]);
                        $domiciliosofendidossolicitudesDto->setRecidenciaHabitual($arreglo["domicilios"][$index]["recidenciaHabitual"]);
                        $domiciliosofendidossolicitudesDto->setEstado($arreglo["domicilios"][$index]["estado"]);
                        $domiciliosofendidossolicitudesDto->setMunicipio($arreglo["domicilios"][$index]["municipio"]);
                        $domiciliosofendidossolicitudesDto->setCveConvivencia($arreglo["domicilios"][$index]["cveConvivencia"]);
                        $domiciliosofendidossolicitudesDto->setCveTipoDeVivienda($arreglo["domicilios"][$index]["cveTipoDeVivienda"]);

                        $domiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto);
                        if (!$validacion->text(1, 3, (int) $domiciliosofendidossolicitudesDto->getCvePais())) {
                            if ($domiciliosofendidossolicitudesDto->getCvePais() <= 0) {
                                $msg[] = array("El pais no puede estar en blanco en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($domiciliosofendidossolicitudesDto->getCvePais() == 119) {
                            if (!$validacion->num(1, 2, (int) $domiciliosofendidossolicitudesDto->getEstado())) {
                                if ($domiciliosofendidossolicitudesDto->getEstado() <= 0) {
                                    $msg[] = array("El estado requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->num(1, 5, (int) $domiciliosofendidossolicitudesDto->getMunicipio())) {
                                if ($domiciliosofendidossolicitudesDto->getMunicipio() <= 0) {
                                    $msg[] = array("El municipio es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        } else {
                            if (!$validacion->text(1, 200, (string) $domiciliosofendidossolicitudesDto->getEstado())) {
                                if ($domiciliosofendidossolicitudesDto->getEstado() == "") {
                                    $msg[] = array("El estado es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 200, (string) $domiciliosofendidossolicitudesDto->getMunicipio())) {
                                if ($domiciliosofendidossolicitudesDto->getMunicipio() == "") {
                                    $msg[] = array("El municipio es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }

                        if (!$validacion->text(1, 500, (string) $domiciliosofendidossolicitudesDto->getDireccion())) {
                            if ($domiciliosofendidossolicitudesDto->getDireccion() == "") {
                                $msg[] = array("La direccion es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 200, (string) $domiciliosofendidossolicitudesDto->getColonia())) {
                            if ($domiciliosofendidossolicitudesDto->getColonia() == "") {
                                $msg[] = array("La colonia es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($domiciliosofendidossolicitudesDto->getNumInterior() != "") {
                            if (!$validacion->textNum(1, 10, (string) $domiciliosofendidossolicitudesDto->getNumInterior())) {
                                $msg[] = array("El num interior es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($domiciliosofendidossolicitudesDto->getNumExterior() != "") {
                            if (!$validacion->textNum(1, 10, (string) $domiciliosofendidossolicitudesDto->getNumExterior())) {
                                $msg[] = array("El num exterior es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($domiciliosofendidossolicitudesDto->getCp() != "") {
                            if (!$validacion->textNum(1, 6, (string) $domiciliosofendidossolicitudesDto->getCp())) {
                                $msg[] = array("El Codigo postal es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->textNum(1, 1, (string) $domiciliosofendidossolicitudesDto->getRecidenciaHabitual())) {
                            if ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() == "") {
                                $msg[] = array("Se debe indicar residencia habitual (S o N) en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 3, (int) $domiciliosofendidossolicitudesDto->getCveTipoDeVivienda())) {
                            if ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() <= 0) {
                                $msg[] = array("Se debe de indicar el tipo de vivienda en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->text(1, 3, (int) $domiciliosofendidossolicitudesDto->getCveConvivencia())) {
                            if ($domiciliosofendidossolicitudesDto->getCveConvivencia() <= 0) {
                                $msg[] = array("Se debe de indicar con quien vive en el domicilio en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }
                }

                if (count($arreglo["telefonos"]) > 0) {
                    for ($index = 0; $index < count($arreglo["telefonos"]); $index ++) {
                        $telefonosofendidossolicitudesDto = new TelefonosofendidossolicitudesDTO();
                        $telefonosofendidossolicitudesDto->setTelefono($arreglo["telefonos"][$index]["telefono"]);
                        $telefonosofendidossolicitudesDto->setCelular($arreglo["telefonos"][$index]["celular"]);
                        $telefonosofendidossolicitudesDto->setEmail($arreglo["telefonos"][$index]["email"]);
                        $telefonosofendidossolicitudesDto->setActivo("S");

                        $telefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto);

                        if ($telefonosofendidossolicitudesDto->getTelefono() != "") {
                            if (!$validacion->telefono((string) $telefonosofendidossolicitudesDto->getTelefono())) {
                                $msg[] = array("No ingreso un Telefono correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($telefonosofendidossolicitudesDto->getCelular() != "") {
                            if (!$validacion->telefono((string) $telefonosofendidossolicitudesDto->getCelular())) {
                                $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($telefonosofendidossolicitudesDto->getEmail() == "") {
                            if (!$validacion->email((string) $telefonosofendidossolicitudesDto->getEmail())) {
                                $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }
                }
                if (count($arreglo["tutores"]) > 0) {
                    for ($index = 0; $index < count($arreglo["tutores"]); $index ++) {
                        $tutoresOfendidosDto = new TutoresofendidosDTO();
                        $tutoresOfendidosDto->setCveGenero($arreglo["tutores"][$index]["cveGenero"]);
                        $tutoresOfendidosDto->setCveTipoTutor($arreglo["tutores"][$index]["cveTipoTutor"]);
                        $tutoresOfendidosDto->setNombre($arreglo["tutores"][$index]["nombre"]);
                        $tutoresOfendidosDto->setPaterno($arreglo["tutores"][$index]["paterno"]);
                        $tutoresOfendidosDto->setMaterno($arreglo["tutores"][$index]["materno"]);
                        $tutoresOfendidosDto->setFechaNacimiento($arreglo["tutores"][$index]["fechaNacimiento"]);
                        $tutoresOfendidosDto->setEdad($arreglo["tutores"][$index]["edad"]);
                        $tutoresOfendidosDto->setActivo("S");

                        $tutoresOfendidosDto = $this->validarTutoresofendidos($tutoresOfendidosDto);

                        if (!$validacion->num(1, 2, (int) $tutoresOfendidosDto->getCveGenero())) {
                            if ($tutoresOfendidosDto->getCveGenero() <= 0) {
                                $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->num(1, 2, (int) $tutoresOfendidosDto->getCveTipoTutor())) {
                            if ($tutoresOfendidosDto->getCveTipoTutor() <= 0) {
                                $msg[] = array("El tipo de tutor seleccionado no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 50, (string) $tutoresOfendidosDto->getNombre())) {
                            $msg[] = array("No ingreso un nombre de tutor correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 50, $tutoresOfendidosDto->getPaterno())) {
                            $msg[] = array("No ingreso un apellido paterno de tutor correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 50, $tutoresOfendidosDto->getMaterno())) {
                            $msg[] = array("No ingreso un apellido materno de tutor correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if ($tutoresOfendidosDto->getFechaNacimiento() != "") {
                            if (!$validacion->date((string) $tutoresOfendidosDto->getFechaNacimiento())) {
                                $msg[] = array("El formato de fecha de nacimiento no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $tutoresOfendidosDto->setFechaNacimiento($validacion->normalToMysql($tutoresOfendidosDto->getFechaNacimiento()));
                            }
                        }
                    }
                }

                if (count($arreglo["nacionalidades"]) > 0) {
                    for ($index = 0; $index < count($arreglo["nacionalidades"]); $index ++) {
                        $nacionalidadesofendidossolicitudesDto = new NacionalidadesofendidossolicitudesDTO();
                        $nacionalidadesofendidossolicitudesDto->setCvePais($arreglo["nacionalidades"][$index]["cvePais"]);
                        $nacionalidadesofendidossolicitudesDto->setActivo("S");

                        $nacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto);

                        if (!$validacion->num(1, 2, (int) $nacionalidadesofendidossolicitudesDto->getCvePais())) {
                            if ($nacionalidadesofendidossolicitudesDto->getCvePais() <= 0) {
                                $msg[] = array("El pais seleccionado no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }
                }
                if ((!$error) && (0 <= count($msg))) {

                    $OfendidossolicitudesDao = new OfendidossolicitudesDAO();
                    $tmp = new OfendidossolicitudesDTO();

                    if ($OfendidossolicitudesDto->getCveTipoPersona() == 1) {
                        $tmp->setNombre($OfendidossolicitudesDto->getNombre());
                        $tmp->setPaterno($OfendidossolicitudesDto->getPaterno());
                        $tmp->setMaterno($OfendidossolicitudesDto->getMaterno());
                        $tmp->setIdSolicitudAudiencia($OfendidossolicitudesDto->getIdSolicitudAudiencia());
                    } else if (($OfendidossolicitudesDto->getCveTipoPersona() == 2) || ($OfendidossolicitudesDto->getCveTipoPersona() == 3)) {
                        $tmp->setNombreMoral($OfendidossolicitudesDto->getNombreMoral());
                        $tmp->setIdSolicitudAudiencia($OfendidossolicitudesDto->getIdSolicitudAudiencia());
                    }

                    $tmp->setActivo('S');
                    $tmp = $OfendidossolicitudesDao->selectOfendidossolicitudes($tmp, "", $this->proveedor);

                    if (!count($tmp)) {
                        $OfendidossolicitudesDto = $OfendidossolicitudesDao->insertOfendidossolicitudes($OfendidossolicitudesDto, $this->proveedor);
                        if ($OfendidossolicitudesDto != "") {
                            if (count($arreglo["defensores"]) > 0) {
                                for ($index = 0; $index < count($arreglo["defensores"]); $index ++) {
                                    $DefensoressolicitudesDto = new DefensoresofendidossolicitudesDTO();
                                    if (count($arreglo["defensores"][$index]) > 0) {
                                        $DefensoressolicitudesDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                        $DefensoressolicitudesDto->setCveTipoAsesor($arreglo["defensores"][$index]["cveTipoAsesor"]);
                                        $DefensoressolicitudesDto->setNombre($arreglo["defensores"][$index]["nombre"]);
                                        $DefensoressolicitudesDto->setTelefono($arreglo["defensores"][$index]["telefono"]);
                                        $DefensoressolicitudesDto->setCelular($arreglo["defensores"][$index]["celular"]);
                                        $DefensoressolicitudesDto->setEmail($arreglo["defensores"][$index]["email"]);
                                        $DefensoressolicitudesDto->setActivo("S");
                                    }
                                    if ((!$error) && (0 <= count($msg))) {
                                        $DefensoressolicitudesDao = new DefensoresofendidossolicitudesDAO();
                                        $tmp = new DefensoresofendidossolicitudesDTO();

                                        $tmp->setNombre($DefensoressolicitudesDto->getNombre());
                                        $tmp->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                        $tmp = $DefensoressolicitudesDao->selectDefensoresofendidossolicitudes($tmp, "", $this->proveedor);
                                        if ($tmp == "") {
                                            $DefensoressolicitudesDto = $DefensoressolicitudesDao->insertDefensoresofendidossolicitudes($DefensoressolicitudesDto, $this->proveedor);
                                            if ($DefensoressolicitudesDto == "") {
                                                $msg[] = array("No se logro registrar al defensor debido a algun error en la transaccion ");
                                                $error = true;
                                            }
                                        }
                                    } else {
                                        $msg[] = array("No se logro registrar al defensor debido a algun error en la transaccion ");
                                        $error = true;
                                    }
                                }
                            } else {
                                $msg[] = array("Los ofendidos son requeridos");
                                $error = true;
                            }
                            if (count($arreglo["domicilios"]) > 0) {
                                for ($index = 0; $index < count($arreglo["domicilios"]); $index ++) {
                                    $domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();
                                    $domiciliosofendidossolicitudesDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                    $domiciliosofendidossolicitudesDto->setCvePais($arreglo["domicilios"][$index]["cvePais"]);
                                    $domiciliosofendidossolicitudesDto->setCveEstado($arreglo["domicilios"][$index]["cveEstado"]);
                                    $domiciliosofendidossolicitudesDto->setCveMunicipio($arreglo["domicilios"][$index]["cveMunicipio"]);
                                    $domiciliosofendidossolicitudesDto->setDireccion($arreglo["domicilios"][$index]["direccion"]);
                                    $domiciliosofendidossolicitudesDto->setColonia($arreglo["domicilios"][$index]["colonia"]);
                                    $domiciliosofendidossolicitudesDto->setNumInterior($arreglo["domicilios"][$index]["numInterior"]);
                                    $domiciliosofendidossolicitudesDto->setNumExterior($arreglo["domicilios"][$index]["numExterior"]);
                                    $domiciliosofendidossolicitudesDto->setCp($arreglo["domicilios"][$index]["cp"]);
                                    $domiciliosofendidossolicitudesDto->setLatitud($arreglo["domicilios"][$index]["latitud"]);
                                    $domiciliosofendidossolicitudesDto->setLongitud($arreglo["domicilios"][$index]["longitud"]);
                                    $domiciliosofendidossolicitudesDto->setRecidenciaHabitual($arreglo["domicilios"][$index]["recidenciaHabitual"]);
                                    $domiciliosofendidossolicitudesDto->setEstado($arreglo["domicilios"][$index]["estado"]);
                                    $domiciliosofendidossolicitudesDto->setMunicipio($arreglo["domicilios"][$index]["municipio"]);
                                    $domiciliosofendidossolicitudesDto->setCveConvivencia($arreglo["domicilios"][$index]["cveConvivencia"]);
                                    $domiciliosofendidossolicitudesDto->setCveTipoDeVivienda($arreglo["domicilios"][$index]["cveTipoDeVivienda"]);
                                    if (!$error) {
                                        $domiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
                                        $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesDao->insertDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, $this->proveedor);
                                        if ($domiciliosofendidossolicitudesDto == "") {
                                            $msg[] = array("No se logro registrar el domicilio debido a algun error en la transaccion");
                                            $error = true;
                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("El o los docimiclios son requeridos");
                                $error = true;
                            }
                        } else {
                            $msg[] = array("No se logro registrar al ofendido debido a algun error en la transaccion ");
                            $error = true;
                        }


                        if (count($arreglo["telefonos"]) > 0) {
                            for ($index = 0; $index < count($arreglo["telefonos"]); $index ++) {
                                $telefonosofendidossolicitudesDto = new TelefonosofendidossolicitudesDTO();
                                $telefonosofendidossolicitudesDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                $telefonosofendidossolicitudesDto->setTelefono($arreglo["telefonos"][$index]["telefono"]);
                                $telefonosofendidossolicitudesDto->setCelular($arreglo["telefonos"][$index]["celular"]);
                                $telefonosofendidossolicitudesDto->setEmail($arreglo["telefonos"][$index]["email"]);
                                $telefonosofendidossolicitudesDto->setActivo("S");
                                if ((!$error)) {
                                    $telefenosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
                                    $telefonosofendidossolicitudesDto = $telefenosofendidossolicitudesDao->insertTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, $this->proveedor);

                                    if ($telefonosofendidossolicitudesDto == "") {
                                        $msg[] = array("No se logro registrar el telefono debido a algun error en la transaccion");
                                        $error = true;
                                    }
                                }
                            }
                        }

                        if (count($arreglo["tutores"]) > 0) {
                            for ($index = 0; $index < count($arreglo["tutores"]); $index ++) {
                                $tutoresOfendidosDto = new TutoresofendidosDTO();
                                $tutoresOfendidosDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                $tutoresOfendidosDto->setCveGenero($arreglo["tutores"][$index]["cveGenero"]);
                                $tutoresOfendidosDto->setCveTipoTutor($arreglo["tutores"][$index]["cveTipoTutor"]);
                                $tutoresOfendidosDto->setNombre($arreglo["tutores"][$index]["nombre"]);
                                $tutoresOfendidosDto->setPaterno($arreglo["tutores"][$index]["paterno"]);
                                $tutoresOfendidosDto->setMaterno($arreglo["tutores"][$index]["materno"]);
                                $tutoresOfendidosDto->setFechaNacimiento($arreglo["tutores"][$index]["fechaNacimiento"]);
                                $tutoresOfendidosDto->setEdad($arreglo["tutores"][$index]["edad"]);
                                $tutoresOfendidosDto->setActivo("S");
                                if ((!$error)) {
                                    $tutoresofendidosDao = new TutoresofendidosDAO();
                                    $tutoresOfendidosDto = $tutoresofendidosDao->insertTutoresofendidos($tutoresOfendidosDto, $this->proveedor);

                                    if ($tutoresOfendidosDto == "") {
                                        $msg[] = array("No se logro registrar el tutor debido a algun error en la transaccion");
                                        $error = true;
                                    }
                                }
                            }
                        }
                        if (count($arreglo["nacionalidades"]) > 0) {
                            for ($index = 0; $index < count($arreglo["nacionalidades"]); $index ++) {
                                $nacionalidadesofendidossolicitudesDto = new NacionalidadesofendidossolicitudesDTO();
                                $nacionalidadesofendidossolicitudesDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                $nacionalidadesofendidossolicitudesDto->setCvePais($arreglo["nacionalidades"][$index]["cvePais"]);
                                $nacionalidadesofendidossolicitudesDto->setActivo("S");
                                if ((!$error)) {
                                    $nacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
                                    $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesDao->insertNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, $this->proveedor);
                                    if ($nacionalidadesofendidossolicitudesDto == "") {
                                        $msg[] = array("No se logro registrar la nacionalidad debido a algun error en la transaccion");
                                        $error = true;
                                    }
                                }
                            }
                        }
                    } else {
                        $msg[] = array("El ofendido ya existe en la solicitud de audiencia en la posicion:" . $count);
                        $error = true;
                    }
                }
                $count ++;
            } else {
                ////////////////////////////////////////////////////////////////
                //UPDATE DE OFENDIDOS SOLICITUD
                ////////////////////////////////////////////////////////////////
                $OfendidossolicitudesDto = new OfendidossolicitudesDTO();
                if (count($arreglo["ofendido"]) > 0) {
                    $OfendidossolicitudesDto->setIdOfendidoSolicitud($arreglo["ofendido"]["idOfendidoSolicitud"]);
                    $OfendidossolicitudesDto->setIdSolicitudAudiencia($arreglo["ofendido"]["idSolicitudAudiencia"]);
                    $OfendidossolicitudesDto->setActivo($arreglo["ofendido"]["activo"]);
                    $OfendidossolicitudesDto->setFechaRegistro($arreglo["ofendido"]["fechaRegistro"]);
                    $OfendidossolicitudesDto->setFechaActualizacion($arreglo["ofendido"]["fechaActualizacion"]);
                    $OfendidossolicitudesDto->setNombre($arreglo["ofendido"]["nombre"]);
                    $OfendidossolicitudesDto->setPaterno($arreglo["ofendido"]["paterno"]);
                    $OfendidossolicitudesDto->setMaterno($arreglo["ofendido"]["materno"]);
                    $OfendidossolicitudesDto->setRfc($arreglo["ofendido"]["rfc"]);
                    $OfendidossolicitudesDto->setCurp($arreglo["ofendido"]["curp"]);
                    $OfendidossolicitudesDto->setFechaNacimiento($arreglo["ofendido"]["fechaNacimiento"]);
                    $OfendidossolicitudesDto->setCveOcupacion($arreglo["ofendido"]["cveOcupacion"]);
                    $OfendidossolicitudesDto->setCveTipoPersona($arreglo["ofendido"]["cveTipoPersona"]);
                    $OfendidossolicitudesDto->setCveGenero($arreglo["ofendido"]["cveGenero"]);
                    $OfendidossolicitudesDto->setEdad($arreglo["ofendido"]["edad"]);
                    $OfendidossolicitudesDto->setCvePaisNacimiento($arreglo["ofendido"]["cvePaisNacimiento"]);
                    $OfendidossolicitudesDto->setCveEstadoNacimiento($arreglo["ofendido"]["cveEstadoNacimiento"]);
                    $OfendidossolicitudesDto->setEstadoNacimiento($arreglo["ofendido"]["estadoNacimiento"]);
                    $OfendidossolicitudesDto->setCveMunicipioNacimiento($arreglo["ofendido"]["cveMunicipioNacimiento"]);
                    $OfendidossolicitudesDto->setMunicipioNacimiento($arreglo["ofendido"]["municipioNacimiento"]);
                    $OfendidossolicitudesDto->setCveEstadoCivil($arreglo["ofendido"]["cveEstadoCivil"]);
                    $OfendidossolicitudesDto->setCveAlfabetismo($arreglo["ofendido"]["cveAlfabetismo"]);
                    $OfendidossolicitudesDto->setCveNivelInstruccion($arreglo["ofendido"]["cveNivelInstruccion"]);
                    $OfendidossolicitudesDto->setCveEspanol($arreglo["ofendido"]["cveEspanol"]);
                    $OfendidossolicitudesDto->setCveDialectoIndigena($arreglo["ofendido"]["cveDialectoIndigena"]);
                    $OfendidossolicitudesDto->setCveTipoFamiliaLinguistica($arreglo["ofendido"]["cveTipoFamiliaLinguistica"]);
                    $OfendidossolicitudesDto->setCveInterprete($arreglo["ofendido"]["cveInterprete"]);
                    $OfendidossolicitudesDto->setCveOrdenProteccion($arreglo["ofendido"]["cveOrdenProteccion"]);
                    $OfendidossolicitudesDto->setCveEstadoPsicofisico($arreglo["ofendido"]["cveEstadoPsicofisico"]);
                    $OfendidossolicitudesDto->setNombreMoral($arreglo["ofendido"]["nombreMoral"]);
                    $OfendidossolicitudesDto->setCveVictimaDeLaDelincuenciaOrganizada($arreglo["ofendido"]["cveVictimaDeLaDelincuenciaOrganizada"]);
//            $OfendidossolicitudesDto->setCveVictimaDeViolenciaDeGenero($arreglo["ofendido"]["cveVictimaDeViolendiaDeGenero"]);
                    $OfendidossolicitudesDto->setCveVictimaDeTrata($arreglo["ofendido"]["cveVictimaDeTrata"]);
                    $OfendidossolicitudesDto->setDesaparecido($arreglo["ofendido"]["desaparecido"]);
                    $OfendidossolicitudesDto->setNumHijos($arreglo["ofendido"]["numHijos"]);
                    $OfendidossolicitudesDto->setEmbarazada($arreglo["ofendido"]["embarazada"]);
                    $OfendidossolicitudesDto->setCveGrupoEdnico($arreglo["ofendido"]["cveGrupoEdnico"]);
                }
                $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);


                if ($OfendidossolicitudesDto->getCveTipoPersona() == 1) {
                    if (!$validacion->text(1, 50, (string) $OfendidossolicitudesDto->getNombre())) {
                        $msg[] = array("No ingreso un nombre correcto del ofendido en la posicion:" . $count);
                        $error = true;
                    }

                    if (!$validacion->text(1, 50, $OfendidossolicitudesDto->getPaterno())) {
                        $msg[] = array("No ingreso un apellido paterno del ofendido en la posicion:" . $count);
                        $error = true;
                    }

                    if (!$validacion->text(1, 50, $OfendidossolicitudesDto->getMaterno())) {
                        $msg[] = array("No ingreso un apellido materno del ofendido en la posicion:" . $count);
                        $error = true;
                    }


                    if ($OfendidossolicitudesDto->getRfc() != "") {
                        if (!$validacion->rfc((string) $OfendidossolicitudesDto->getRfc())) {
                            $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if ($OfendidossolicitudesDto->getCurp() != "") {
                        if (!$validacion->curp((string) $OfendidossolicitudesDto->getCurp())) {
                            $msg[] = array("La curp ingresada no es valida en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveGenero())) {
                        if ($OfendidossolicitudesDto->getCveGenero() <= 0) {
                            $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 3, (int) $OfendidossolicitudesDto->getCvePaisNacimiento())) {
                        if ($OfendidossolicitudesDto->getCvePaisNacimiento() <= 0) {
                            $msg[] = array("El pais de nacimiento no es correcto en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if ($OfendidossolicitudesDto->getCvePaisNacimiento() == 119) {
                        if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEstadoNacimiento())) {
                            if ($OfendidossolicitudesDto->getCveEstadoNacimiento() <= 0) {
                                $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->num(1, 5, (int) $OfendidossolicitudesDto->getCveMunicipioNacimiento())) {
                            if ($OfendidossolicitudesDto->getCveMunicipioNacimiento() <= 0) {
                                $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    } else {
                        if (!$validacion->text(1, 200, (string) $OfendidossolicitudesDto->getEstadoNacimiento())) {
                            if ($OfendidossolicitudesDto->getEstadoNacimiento() == "") {
                                $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 200, (string) $OfendidossolicitudesDto->getMunicipioNacimiento())) {
                            if ($OfendidossolicitudesDto->getMunicipioNacimiento() == "") {
                                $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }

                    if ($OfendidossolicitudesDto->getFechaNacimiento() != "") {
                        if (!$validacion->date((string) $OfendidossolicitudesDto->getFechaNacimiento())) {
                            $msg[] = array("El formato de fecha de nacimiento no es valido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if ($OfendidossolicitudesDto->getEdad() != "") {
                        if (!$validacion->num(1, 3, (string) $OfendidossolicitudesDto->getEdad())) {
                            $msg[] = array("La edad ingresada no es valida en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveNivelInstruccion())) {
                        if ($OfendidossolicitudesDto->getCveNivelInstruccion() <= 0) {
                            $msg[] = array("El nivel de instruccion no es correcto en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEstadoCivil())) {
                        if ($OfendidossolicitudesDto->getCveEstadoCivil() <= 0) {
                            $msg[] = array("El estado civil no es correcto en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEspanol())) {
                        if ($OfendidossolicitudesDto->getCveEspanol() <= 0) {
                            $msg[] = array("No se identifica la clave para saber si habla espanol en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveAlfabetismo())) {
                        if ($OfendidossolicitudesDto->getCveAlfabetismo() <= 0) {
                            $msg[] = array("No se identifico una clave valida de alfabetismo en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveDialectoIndigena())) {
                        if ($OfendidossolicitudesDto->getCveDialectoIndigena() <= 0) {
                            $msg[] = array("No se identifico una clave valida de dialecto indigena en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveTipoFamiliaLinguistica())) {
                        if ($OfendidossolicitudesDto->getCveTipoFamiliaLinguistica() <= 0) {
                            $msg[] = array("No se identifico una clave valida de tipo de familia linguistica en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveOcupacion())) {
                        if ($OfendidossolicitudesDto->getCveOcupacion() <= 0) {
                            $msg[] = array("No se identifico una clave valida de tipo de ocupacion en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveInterprete())) {
                        if ($OfendidossolicitudesDto->getCveInterprete() <= 0) {
                            $msg[] = array("No se identifico una clave valida si requiere interprete en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveEstadoPsicofisico())) {
                        if ($OfendidossolicitudesDto->getCveEstadoPsicofisico() <= 0) {
                            $msg[] = array("No se identifico una clave valida del estado psicofisico en la posicion:" . $count);
                            $error = true;
                        }
                    }
                    if (!$validacion->num(1, 2, (int) $OfendidossolicitudesDto->getCveGrupoEdnico())) {
                        if ($OfendidossolicitudesDto->getCveGrupoEdnico() <= 0) {
                            $msg[] = array("No se identifico una clave valida para tipo de reincidencia en la posicion:" . $count);
                            $error = true;
                        }
                    }
                } else if (($OfendidossolicitudesDto->getCveTipoPersona() == 2) || ($OfendidossolicitudesDto->getCveTipoPersona() == 3)) {
                    if (!$validacion->text(1, 500, $OfendidossolicitudesDto->getNombreMoral())) {
                        $msg[] = array("El nombre moral no es correcto en la posicion:" . $count);
                        $error = true;
                    }
                } else {
                    $msg[] = array("El tipo de persona no es correcto en la posicion:" . $count);
                    $error = true;
                }


                if (count($arreglo["defensores"]) > 0) {
                    for ($index = 0; $index < count($arreglo["defensores"]); $index ++) {
                        $DefensoressolicitudesDto = new DefensoresofendidossolicitudesDTO();
                        if (count($arreglo["defensores"][$index]) > 0) {
                            $DefensoressolicitudesDto->setIdDefensorOfendidoSolicitud($arreglo["defensores"][$index]["idDefensorOfendidoSolicitud"]);
                            $DefensoressolicitudesDto->setIdOfendidoSolicitud($arreglo["defensores"][$index]["idOfendidoSolicitud"]);
                            $DefensoressolicitudesDto->setCveTipoAsesor($arreglo["defensores"][$index]["cveTipoAsesor"]);
                            $DefensoressolicitudesDto->setNombre($arreglo["defensores"][$index]["nombre"]);
                            $DefensoressolicitudesDto->setTelefono($arreglo["defensores"][$index]["telefono"]);
                            $DefensoressolicitudesDto->setCelular($arreglo["defensores"][$index]["celular"]);
                            $DefensoressolicitudesDto->setEmail($arreglo["defensores"][$index]["email"]);
                            $DefensoressolicitudesDto->setActivo("S");
                        }
                        $DefensoressolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoressolicitudesDto);

                        if (!$validacion->text(1, 2, (int) $DefensoressolicitudesDto->getcveTipoAsesor())) {
                            if ($DefensoressolicitudesDto->getcveTipoAsesor() <= 0) {
                                $msg[] = array("El tipo de defensor no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 500, (string) $DefensoressolicitudesDto->getNombre())) {
                            if ($DefensoressolicitudesDto->getNombre() == "") {
                                $msg[] = array("No ingreso un nombre correcto del defensor en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if ($DefensoressolicitudesDto->getTelefono() != "") {
                            if (!$validacion->telefono((string) $DefensoressolicitudesDto->getTelefono())) {
                                $msg[] = array("No ingreso un Telefono correcto del defensor en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($DefensoressolicitudesDto->getCelular() != "") {
                            if (!$validacion->telefono((string) $DefensoressolicitudesDto->getCelular())) {
                                $msg[] = array("No ingreso un celular correcto del defensor en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($DefensoressolicitudesDto->getEmail() == "") {
                            if (!$validacion->email((string) $DefensoressolicitudesDto->getEmail())) {
                                $msg[] = array("No ingreso un email correcto del defensor en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }
                }

                if (count($arreglo["domicilios"]) > 0) {
                    for ($index = 0; $index < count($arreglo["domicilios"]); $index ++) {
                        $domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();
                        $domiciliosofendidossolicitudesDto->setIdDomicilioOfendidoSolicitud($arreglo["domicilios"][$index]["idDomicilioOfendidoSolicitud"]);
                        $domiciliosofendidossolicitudesDto->setIdOfendidoSolicitud($arreglo["domicilios"][$index]["idOfendidoSolicitud"]);
                        $domiciliosofendidossolicitudesDto->setCvePais($arreglo["domicilios"][$index]["cvePais"]);
                        $domiciliosofendidossolicitudesDto->setCveEstado($arreglo["domicilios"][$index]["cveEstado"]);
                        $domiciliosofendidossolicitudesDto->setCveMunicipio($arreglo["domicilios"][$index]["cveMunicipio"]);
                        $domiciliosofendidossolicitudesDto->setDireccion($arreglo["domicilios"][$index]["direccion"]);
                        $domiciliosofendidossolicitudesDto->setColonia($arreglo["domicilios"][$index]["colonia"]);
                        $domiciliosofendidossolicitudesDto->setNumInterior($arreglo["domicilios"][$index]["numInterior"]);
                        $domiciliosofendidossolicitudesDto->setNumExterior($arreglo["domicilios"][$index]["numExterior"]);
                        $domiciliosofendidossolicitudesDto->setCp($arreglo["domicilios"][$index]["cp"]);
                        $domiciliosofendidossolicitudesDto->setLatitud($arreglo["domicilios"][$index]["latitud"]);
                        $domiciliosofendidossolicitudesDto->setLongitud($arreglo["domicilios"][$index]["longitud"]);
                        $domiciliosofendidossolicitudesDto->setRecidenciaHabitual($arreglo["domicilios"][$index]["recidenciaHabitual"]);
                        $domiciliosofendidossolicitudesDto->setEstado($arreglo["domicilios"][$index]["estado"]);
                        $domiciliosofendidossolicitudesDto->setMunicipio($arreglo["domicilios"][$index]["municipio"]);
                        $domiciliosofendidossolicitudesDto->setCveConvivencia($arreglo["domicilios"][$index]["cveConvivencia"]);
                        $domiciliosofendidossolicitudesDto->setCveTipoDeVivienda($arreglo["domicilios"][$index]["cveTipoDeVivienda"]);

                        $domiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto);
                        if (!$validacion->text(1, 3, (int) $domiciliosofendidossolicitudesDto->getCvePais())) {
                            if ($domiciliosofendidossolicitudesDto->getCvePais() <= 0) {
                                $msg[] = array("El pais no puede estar en blanco en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($domiciliosofendidossolicitudesDto->getCvePais() == 119) {
                            if (!$validacion->num(1, 2, (int) $domiciliosofendidossolicitudesDto->getEstado())) {
                                if ($domiciliosofendidossolicitudesDto->getEstado() <= 0) {
                                    $msg[] = array("El estado requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->num(1, 5, (int) $domiciliosofendidossolicitudesDto->getMunicipio())) {
                                if ($domiciliosofendidossolicitudesDto->getMunicipio() <= 0) {
                                    $msg[] = array("El municipio es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        } else {
                            if (!$validacion->text(1, 200, (string) $domiciliosofendidossolicitudesDto->getEstado())) {
                                if ($domiciliosofendidossolicitudesDto->getEstado() == "") {
                                    $msg[] = array("El estado es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 200, (string) $domiciliosofendidossolicitudesDto->getMunicipio())) {
                                if ($domiciliosofendidossolicitudesDto->getMunicipio() == "") {
                                    $msg[] = array("El municipio es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }

                        if (!$validacion->text(1, 500, (string) $domiciliosofendidossolicitudesDto->getDireccion())) {
                            if ($domiciliosofendidossolicitudesDto->getDireccion() == "") {
                                $msg[] = array("La direccion es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 200, (string) $domiciliosofendidossolicitudesDto->getColonia())) {
                            if ($domiciliosofendidossolicitudesDto->getColonia() == "") {
                                $msg[] = array("La colonia es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($domiciliosofendidossolicitudesDto->getNumInterior() != "") {
                            if (!$validacion->textNum(1, 10, (string) $domiciliosofendidossolicitudesDto->getNumInterior())) {
                                $msg[] = array("El num interior es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($domiciliosofendidossolicitudesDto->getNumExterior() != "") {
                            if (!$validacion->textNum(1, 10, (string) $domiciliosofendidossolicitudesDto->getNumExterior())) {
                                $msg[] = array("El num exterior es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($domiciliosofendidossolicitudesDto->getCp() != "") {
                            if (!$validacion->textNum(1, 6, (string) $domiciliosofendidossolicitudesDto->getCp())) {
                                $msg[] = array("El Codigo postal es requerido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->textNum(1, 1, (string) $domiciliosofendidossolicitudesDto->getRecidenciaHabitual())) {
                            if ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() == "") {
                                $msg[] = array("Se debe indicar residencia habitual (S o N) en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 3, (int) $domiciliosofendidossolicitudesDto->getCveTipoDeVivienda())) {
                            if ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() <= 0) {
                                $msg[] = array("Se debe de indicar el tipo de vivienda en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->text(1, 3, (int) $domiciliosofendidossolicitudesDto->getCveConvivencia())) {
                            if ($domiciliosofendidossolicitudesDto->getCveConvivencia() <= 0) {
                                $msg[] = array("Se debe de indicar con quien vive en el domicilio en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }
                }

                if (count($arreglo["telefonos"]) > 0) {
                    for ($index = 0; $index < count($arreglo["telefonos"]); $index ++) {
                        $telefonosofendidossolicitudesDto = new TelefonosofendidossolicitudesDTO();
                        $telefonosofendidossolicitudesDto->setIdTelefonoOfendidoSolicitud($arreglo["telefonos"][$index]["idTelefonoOfendidoSolicitud"]);
                        $telefonosofendidossolicitudesDto->setIdOfendidoSolicitud($arreglo["telefonos"][$index]["idOfendidoSolicitud"]);
                        $telefonosofendidossolicitudesDto->setTelefono($arreglo["telefonos"][$index]["telefono"]);
                        $telefonosofendidossolicitudesDto->setCelular($arreglo["telefonos"][$index]["celular"]);
                        $telefonosofendidossolicitudesDto->setEmail($arreglo["telefonos"][$index]["email"]);
                        $telefonosofendidossolicitudesDto->setActivo("S");

                        $telefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto);

                        if ($telefonosofendidossolicitudesDto->getTelefono() != "") {
                            if (!$validacion->telefono((string) $telefonosofendidossolicitudesDto->getTelefono())) {
                                $msg[] = array("No ingreso un Telefono correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($telefonosofendidossolicitudesDto->getCelular() != "") {
                            if (!$validacion->telefono((string) $telefonosofendidossolicitudesDto->getCelular())) {
                                $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($telefonosofendidossolicitudesDto->getEmail() == "") {
                            if (!$validacion->email((string) $telefonosofendidossolicitudesDto->getEmail())) {
                                $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }
                }
                if (count($arreglo["tutores"]) > 0) {
                    for ($index = 0; $index < count($arreglo["tutores"]); $index ++) {
                        $tutoresOfendidosDto = new TutoresofendidosDTO();
                        $tutoresOfendidosDto->setIdTutorOfendido($arreglo["tutores"][$index]["idTutorOfendido"]);
                        $tutoresOfendidosDto->setIdOfendidoSolicitud($arreglo["tutores"][$index]["idOfendidoSolicitud"]);
                        $tutoresOfendidosDto->setCveGenero($arreglo["tutores"][$index]["cveGenero"]);
                        $tutoresOfendidosDto->setCveTipoTutor($arreglo["tutores"][$index]["cveTipoTutor"]);
                        $tutoresOfendidosDto->setNombre($arreglo["tutores"][$index]["nombre"]);
                        $tutoresOfendidosDto->setPaterno($arreglo["tutores"][$index]["paterno"]);
                        $tutoresOfendidosDto->setMaterno($arreglo["tutores"][$index]["materno"]);
                        $tutoresOfendidosDto->setFechaNacimiento($arreglo["tutores"][$index]["fechaNacimiento"]);
                        $tutoresOfendidosDto->setEdad($arreglo["tutores"][$index]["edad"]);
                        $tutoresOfendidosDto->setActivo("S");

                        $tutoresOfendidosDto = $this->validarTutoresofendidos($tutoresOfendidosDto);

                        if (!$validacion->num(1, 2, (int) $tutoresOfendidosDto->getCveGenero())) {
                            if ($tutoresOfendidosDto->getCveGenero() <= 0) {
                                $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->num(1, 2, (int) $tutoresOfendidosDto->getCveTipoTutor())) {
                            if ($tutoresOfendidosDto->getCveTipoTutor() <= 0) {
                                $msg[] = array("El tipo de tutor seleccionado no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(1, 50, (string) $tutoresOfendidosDto->getNombre())) {
                            $msg[] = array("No ingreso un nombre de tutor correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 50, $tutoresOfendidosDto->getPaterno())) {
                            $msg[] = array("No ingreso un apellido paterno de tutor correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 50, $tutoresOfendidosDto->getMaterno())) {
                            $msg[] = array("No ingreso un apellido materno de tutor correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if ($tutoresOfendidosDto->getFechaNacimiento() != "") {
                            if (!$validacion->date((string) $tutoresOfendidosDto->getFechaNacimiento())) {
                                $msg[] = array("El formato de fecha de nacimiento no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $tutoresOfendidosDto->setFechaNacimiento($validacion->normalToMysql($tutoresOfendidosDto->getFechaNacimiento()));
                            }
                        }
                    }
                }

                if (count($arreglo["nacionalidades"]) > 0) {
                    for ($index = 0; $index < count($arreglo["nacionalidades"]); $index ++) {
                        $nacionalidadesofendidossolicitudesDto = new NacionalidadesofendidossolicitudesDTO();
                        $nacionalidadesofendidossolicitudesDto->setCvePais($arreglo["nacionalidades"][$index]["cvePais"]);
                        $nacionalidadesofendidossolicitudesDto->setActivo("S");

                        $nacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto);

                        if (!$validacion->num(1, 2, (int) $nacionalidadesofendidossolicitudesDto->getCvePais())) {
                            if ($nacionalidadesofendidossolicitudesDto->getCvePais() <= 0) {
                                $msg[] = array("El pais seleccionado no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    }
                }
                if ((!$error) && (0 <= count($msg))) {

                    $OfendidossolicitudesDao = new OfendidossolicitudesDAO();
                    $tmp = new OfendidossolicitudesDTO();

                    if ($OfendidossolicitudesDto->getCveTipoPersona() == 1) {
                        $tmp->setNombre($OfendidossolicitudesDto->getNombre());
                        $tmp->setPaterno($OfendidossolicitudesDto->getPaterno());
                        $tmp->setMaterno($OfendidossolicitudesDto->getMaterno());
                        $tmp->setIdSolicitudAudiencia($OfendidossolicitudesDto->getIdSolicitudAudiencia());
                    } else if (($OfendidossolicitudesDto->getCveTipoPersona() == 2) || ($OfendidossolicitudesDto->getCveTipoPersona() == 3)) {
                        $tmp->setNombreMoral($OfendidossolicitudesDto->getNombreMoral());
                        $tmp->setIdSolicitudAudiencia($OfendidossolicitudesDto->getIdSolicitudAudiencia());
                    }

                    $tmp->setActivo('S');

                    $tmp = $OfendidossolicitudesDao->selectOfendidossolicitudes($tmp, "", $this->proveedor);

                    if (count($tmp)) {
                        $OfendidossolicitudesDto = $OfendidossolicitudesDao->updateOfendidossolicitudes($OfendidossolicitudesDto, $this->proveedor);
                        if ($OfendidossolicitudesDto != "") {
                            if (count($arreglo["defensores"]) > 0) {
                                for ($index = 0; $index < count($arreglo["defensores"]); $index ++) {
                                    $DefensoressolicitudesDto = new DefensoresofendidossolicitudesDTO();
                                    if (count($arreglo["defensores"][$index]) > 0) {
                                        $DefensoressolicitudesDto->setIdDefensorOfendidoSolicitud($arreglo["defensores"][$index]["idDefensorOfendidoSolicitud"]);
                                        $DefensoressolicitudesDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                        $DefensoressolicitudesDto->setCveTipoAsesor($arreglo["defensores"][$index]["cveTipoAsesor"]);
                                        $DefensoressolicitudesDto->setNombre($arreglo["defensores"][$index]["nombre"]);
                                        $DefensoressolicitudesDto->setTelefono($arreglo["defensores"][$index]["telefono"]);
                                        $DefensoressolicitudesDto->setCelular($arreglo["defensores"][$index]["celular"]);
                                        $DefensoressolicitudesDto->setEmail($arreglo["defensores"][$index]["email"]);
                                        $DefensoressolicitudesDto->setActivo("S");
                                    }
                                    if ((!$error) && (0 <= count($msg))) {
                                        $DefensoressolicitudesDao = new DefensoresofendidossolicitudesDAO();
                                        $tmp = new DefensoresofendidossolicitudesDTO();

                                        $tmp->setNombre($DefensoressolicitudesDto->getNombre());
                                        $tmp->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                        $tmp = $DefensoressolicitudesDao->selectDefensoresofendidossolicitudes($tmp, "", $this->proveedor);
                                        if (!count($tmp)) {
                                            if ($DefensoressolicitudesDto->getIdDefensorOfendidoSolicitud() != "") {
                                                $DefensoressolicitudesDto = $DefensoressolicitudesDao->updateDefensoresofendidossolicitudes($DefensoressolicitudesDto, $this->proveedor);
                                            } else {
                                                $DefensoressolicitudesDto = $DefensoressolicitudesDao->insertDefensoresofendidossolicitudes($DefensoressolicitudesDto, $this->proveedor);
                                            }
                                            if ($DefensoressolicitudesDto == "") {
                                                $msg[] = array("No se logro registrar al defensor debido a algun error en la transaccion ");
                                                $error = true;
                                            }
                                        }
                                    } else {
                                        $msg[] = array("No se logro actualizar al defensor debido a algun error en la transaccion ");
                                        $error = true;
                                    }
                                }
                            } else {
                                $msg[] = array("Los ofendidos son requeridos");
                                $error = true;
                            }
                            if (count($arreglo["domicilios"]) > 0) {
                                for ($index = 0; $index < count($arreglo["domicilios"]); $index ++) {
                                    $domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();
                                    $domiciliosofendidossolicitudesDto->setIdDomicilioOfendidoSolicitud($arreglo["domicilios"][$index]["idDomicilioOfendidoSolicitud"]);
                                    $domiciliosofendidossolicitudesDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                    $domiciliosofendidossolicitudesDto->setCvePais($arreglo["domicilios"][$index]["cvePais"]);
                                    $domiciliosofendidossolicitudesDto->setCveEstado($arreglo["domicilios"][$index]["cveEstado"]);
                                    $domiciliosofendidossolicitudesDto->setCveMunicipio($arreglo["domicilios"][$index]["cveMunicipio"]);
                                    $domiciliosofendidossolicitudesDto->setDireccion($arreglo["domicilios"][$index]["direccion"]);
                                    $domiciliosofendidossolicitudesDto->setColonia($arreglo["domicilios"][$index]["colonia"]);
                                    $domiciliosofendidossolicitudesDto->setNumInterior($arreglo["domicilios"][$index]["numInterior"]);
                                    $domiciliosofendidossolicitudesDto->setNumExterior($arreglo["domicilios"][$index]["numExterior"]);
                                    $domiciliosofendidossolicitudesDto->setCp($arreglo["domicilios"][$index]["cp"]);
                                    $domiciliosofendidossolicitudesDto->setLatitud($arreglo["domicilios"][$index]["latitud"]);
                                    $domiciliosofendidossolicitudesDto->setLongitud($arreglo["domicilios"][$index]["longitud"]);
                                    $domiciliosofendidossolicitudesDto->setRecidenciaHabitual($arreglo["domicilios"][$index]["recidenciaHabitual"]);
                                    $domiciliosofendidossolicitudesDto->setEstado($arreglo["domicilios"][$index]["estado"]);
                                    $domiciliosofendidossolicitudesDto->setMunicipio($arreglo["domicilios"][$index]["municipio"]);
                                    $domiciliosofendidossolicitudesDto->setCveConvivencia($arreglo["domicilios"][$index]["cveConvivencia"]);
                                    $domiciliosofendidossolicitudesDto->setCveTipoDeVivienda($arreglo["domicilios"][$index]["cveTipoDeVivienda"]);
                                    if (!$error) {
                                        $domiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();

                                        if ($domiciliosofendidossolicitudesDto->getIdDomicilioOfendidoSolicitud() != "") {
                                            $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesDao->updateDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, $this->proveedor);
                                        } else {
                                            $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesDao->insertDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, $this->proveedor);
                                        }
                                        if ($domiciliosofendidossolicitudesDto == "") {
                                            $msg[] = array("No se logro actualizar el domicilio debido a algun error en la transaccion");
                                            $error = true;
                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("El o los docimiclios son requeridos");
                                $error = true;
                            }
                        } else {
                            $msg[] = array("No se logro registrar al ofendido debido a algun error en la transaccion ");
                            $error = true;
                        }


                        if (count($arreglo["telefonos"]) > 0) {
                            for ($index = 0; $index < count($arreglo["telefonos"]); $index ++) {
                                $telefonosofendidossolicitudesDto = new TelefonosofendidossolicitudesDTO();
                                $telefonosofendidossolicitudesDto->setIdTelefonoOfendidoSolicitud($arreglo["telefonos"][$index]["idTelefonoOfendidoSolicitud"]);
                                $telefonosofendidossolicitudesDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                $telefonosofendidossolicitudesDto->setTelefono($arreglo["telefonos"][$index]["telefono"]);
                                $telefonosofendidossolicitudesDto->setCelular($arreglo["telefonos"][$index]["celular"]);
                                $telefonosofendidossolicitudesDto->setEmail($arreglo["telefonos"][$index]["email"]);
                                $telefonosofendidossolicitudesDto->setActivo("S");
                                if ((!$error)) {
                                    $telefenosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
                                    if ($telefonosofendidossolicitudesDto->getIdTelefonoOfendidoSolicitud() != "") {
                                        $telefonosofendidossolicitudesDto = $telefenosofendidossolicitudesDao->updateTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, $this->proveedor);
                                    } else {
                                        $telefonosofendidossolicitudesDto = $telefenosofendidossolicitudesDao->insertTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, $this->proveedor);
                                    }

                                    if ($telefonosofendidossolicitudesDto == "") {
                                        $msg[] = array("No se logro actualizar el telefono debido a algun error en la transaccion");
                                        $error = true;
                                    }
                                }
                            }
                        }

                        if (count($arreglo["tutores"]) > 0) {
                            for ($index = 0; $index < count($arreglo["tutores"]); $index ++) {
                                $tutoresOfendidosDto = new TutoresofendidosDTO();
                                $tutoresOfendidosDto->setIdTutorOfendido($arreglo["tutores"][$index]["idTutorOfendido"]);
                                $tutoresOfendidosDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                $tutoresOfendidosDto->setCveGenero($arreglo["tutores"][$index]["cveGenero"]);
                                $tutoresOfendidosDto->setCveTipoTutor($arreglo["tutores"][$index]["cveTipoTutor"]);
                                $tutoresOfendidosDto->setNombre($arreglo["tutores"][$index]["nombre"]);
                                $tutoresOfendidosDto->setPaterno($arreglo["tutores"][$index]["paterno"]);
                                $tutoresOfendidosDto->setMaterno($arreglo["tutores"][$index]["materno"]);
                                $tutoresOfendidosDto->setFechaNacimiento($arreglo["tutores"][$index]["fechaNacimiento"]);
                                $tutoresOfendidosDto->setEdad($arreglo["tutores"][$index]["edad"]);
                                $tutoresOfendidosDto->setActivo("S");
                                if ((!$error)) {
                                    $tutoresofendidosDao = new TutoresofendidosDAO();

                                    if ($tutoresOfendidosDto->getIdTutorOfendido() != "") {
                                        $tutoresOfendidosDto = $tutoresofendidosDao->updateTutoresofendidos($tutoresOfendidosDto, $this->proveedor);
                                    } else {
                                        $tutoresOfendidosDto = $tutoresofendidosDao->insertTutoresofendidos($tutoresOfendidosDto, $this->proveedor);
                                    }

                                    if ($tutoresOfendidosDto == "") {
                                        $msg[] = array("No se logro actualizar el tutor debido a algun error en la transaccion");
                                        $error = true;
                                    }
                                }
                            }
                        }
                        if (count($arreglo["nacionalidades"]) > 0) {
                            for ($index = 0; $index < count($arreglo["nacionalidades"]); $index ++) {
                                $nacionalidadesofendidossolicitudesDto = new NacionalidadesofendidossolicitudesDTO();
                                $nacionalidadesofendidossolicitudesDto->setIdNacionalidadOfendidoSolicitud($arreglo["nacionalidades"][$index]["idNacionalidadOfendidoSolicitud"]);
                                $nacionalidadesofendidossolicitudesDto->setIdOfendidoSolicitud($OfendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                $nacionalidadesofendidossolicitudesDto->setCvePais($arreglo["nacionalidades"][$index]["cvePais"]);
                                $nacionalidadesofendidossolicitudesDto->setActivo("S");
                                if ((!$error)) {
                                    $nacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();

                                    if ($nacionalidadesofendidossolicitudesDto->getIdNacionalidadOfendidoSolicitud() != "") {
                                        $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesDao->updateNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, $this->proveedor);
                                    } else {
                                        $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesDao->insertNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, $this->proveedor);
                                    }

                                    if ($nacionalidadesofendidossolicitudesDto == "") {
                                        $msg[] = array("No se logro actualizar la nacionalidad debido a algun error en la transaccion");
                                        $error = true;
                                    }
                                }
                            }
                        }
                    } else {
                        $msg[] = array("El ofendido no existe en la solicitud de audiencia en la posicion:" . $count);
                        $error = true;
                    }
                }
                $count ++;
            }
        }
        if ((!$error)) {
            $result = array("Error" => $msg);
            $this->proveedor->execute("COMMIT");
            $msg[] = array("ofendido registrado de forma correcta");
            $msg[] = $OfendidossolicitudesDto[0]->toString();
            $result = array("Correcto" => $msg);
            $result = ($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("Error" => $msg);
            $result = ($result);
        }

        return $result;
    }

    public function updateOfendidossolicitudes($OfendidossolicitudesDto, $proveedor = null)
    {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesDao = new OfendidossolicitudesDAO();
        $OfendidossolicitudesDto = $OfendidossolicitudesDao->updateOfendidossolicitudes($OfendidossolicitudesDto, $proveedor);

        return $OfendidossolicitudesDto;
    }

    public function deleteOfendidossolicitudes($param, $proveedor = null)
    {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $param = json_decode($param, true);

        $this->proveedor->execute("BEGIN");


        try {


            foreach ($param as $idofendidoSolicitud) {

                $idOfendido = $idofendidoSolicitud;

                //eliminar el ofendido
                $ofendidosDao = new OfendidossolicitudesDAO();
                $OfendidossolicitudesDto = new OfendidossolicitudesDTO();
                $OfendidossolicitudesDto->setIdOfendidoSolicitud($idOfendido);

                $existOfendido = $ofendidosDao->selectOfendidossolicitudes($OfendidossolicitudesDto);

                if (!count($existOfendido))
                    throw new Exception('no existe el idOfendidoSolicitud ' . $idOfendido);

                $OfendidossolicitudesDto->setActivo('N');
                $ofendidosResponse = $ofendidosDao->updateOfendidossolicitudes($OfendidossolicitudesDto, $this->proveedor);

                if (!count($ofendidosResponse))
                    throw new Exception('no se pudo eliminar el ofendido');

                //Eliminar domicilios
                $domicilioDao = new DomiciliosofendidossolicitudesDAO();
                $domicilioDto = new DomiciliosofendidossolicitudesDTO();
                $domicilioDto->setIdOfendidoSolicitud($idOfendido);
                $domicilioResponse = $domicilioDao->eliminarDomicilioOfendido($domicilioDto, $this->proveedor);
                if (!$domicilioResponse)
                    throw new Exception('domicilio no eliminado');

                //eliminar teléfonos
                $telefonoDao = new TelefonosofendidossolicitudesDAO();
                $telefonoDto = new TelefonosofendidossolicitudesDTO();
                $telefonoDto->setIdOfendidoSolicitud($idOfendido);
                $telefonoResponse = $telefonoDao->eliminarTelefonosOfendido($telefonoDto, $this->proveedor);
                if (!$telefonoResponse)
                    throw new Exception('teléfono no eliminado');

                //eliminar defensores
                $defensorDao = new DefensoresofendidossolicitudesDAO();
                $defensorDto = new DefensoresofendidossolicitudesDTO();
                $defensorDto->setIdOfendidoSolicitud($idOfendido);
                $defensorResponse = $defensorDao->eliminarDefensoresOfendido($defensorDto, $this->proveedor);
                if (!$defensorResponse)
                    throw new Exception('defensor no eliminado');

                //eliminar tutores
                $tutorDao = new TutoresofendidosDAO();
                $tutorDto = new TutoresofendidosDTO();
                $tutorDto->setIdOfendidoSolicitud($idOfendido);
                $tutorResponse = $tutorDao->eliminarTutoresOfendido($tutorDto, $this->proveedor);
                if (!$tutorResponse)
                    throw new Exception('tutor no eliminado');

                //eliminar las nacionalidades del ofendido
                $nacionalidadDao = new NacionalidadesofendidossolicitudesDAO();
                $nacionalidadDto = new NacionalidadesofendidossolicitudesDTO();
                $nacionalidadDto->setIdOfendidoSolicitud($idOfendido);
                $nacionalidadResponse = $nacionalidadDao->eliminarNacionalidadesOfendidos($nacionalidadDto, $this->proveedor);
                if (!$nacionalidadResponse)
                    throw new Exception('nacionalidad no eliminada');


                //eliminar la relacion
                //obtener las relaciones del ofendido
                $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();
                $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();

                $impOfeDelSolicitudesDto->setIdOfendidoSolicitud($idOfendido);
                $impOfeDelSolicitudesDto->setIdSolicitudAudiencia($existOfendido[0]->getIdSolicitudAudiencia());
                $impOfeDelSolicitudesDto->setActivo('S');

                $getRelaciones = $impOfeDelSolicitudesDao->selectImpofedelsolicitudes($impOfeDelSolicitudesDto, '', $this->proveedor);


                if ($getRelaciones != '') {

                    foreach ($getRelaciones as $relacion) {

                        $idImpOfeDelSolicitud = $relacion->getIdImpOfeDelSolicitud();

                        //eliminar logicamente violencia de genero
                        $eliminarViolenciaGenero = $this->eliminarViolenciaGenero($idImpOfeDelSolicitud, $this->proveedor);
                        if ($eliminarViolenciaGenero['estatus'] == 'error') {
                            throw new Exception($eliminarViolenciaGenero['mensaje']);
                        }


                        //eliminar logicamente trata de personas
                        $eliminarVictimaTrata = $this->eliminarTrataPersonas($idImpOfeDelSolicitud, $this->proveedor);
                        if ($eliminarVictimaTrata['estatus'] == 'error') {
                            throw new Exception($eliminarVictimaTrata['mensaje']);
                        }


                        //eliminar datos de efectos sexuales
                        $eliminarVictimaAcoso = $this->eliminarEfectosSexuales($idImpOfeDelSolicitud, $this->proveedor);
                        if ($eliminarVictimaAcoso['estatus'] == 'error') {
                            throw new Exception($eliminarVictimaAcoso['mensaje']);
                        }

                        //eliminar la relacion
                        $impOfeDelSolicitudEliminarDto = new ImpofedelsolicitudesDTO();
                        $impOfeDelSolicitudEliminarDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
                        $impOfeDelSolicitudEliminarDto->setActivo('N');

                        $eliminarRelacion = $impOfeDelSolicitudesDao->eliminaImpodelsolicitudes($impOfeDelSolicitudEliminarDto, $this->proveedor);
                        if ($eliminarRelacion == '') {
                            throw new Exception('ocurrio un error al eliminar la relaci&oacute;n');
                        }
                    }
                }
            }

            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Ofendido(s) eliminado(s) correctamente!',
                'data'    => $param
            ];
        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => $e->getMessage()
            ];
        }
    }

    public function counsultarTotal($OfendidossolicitudesDto)
    {
        $solicitudAudienciasDao = new solicitudesAudienciasDAO();
        $solicitudAudienciasDto = new solicitudesAudienciasDTO();

        $rsRegistros = $this->consultaOfendidossolicitudes($OfendidossolicitudesDto);
        $registros = count($rsRegistros);

        $solicitudAudienciasDto->setIdSolicitudAudiencia($OfendidossolicitudesDto->getIdSolicitudAudiencia());
        $rsSolicitud = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDto);
        $rsOfendidosSolicitud = $rsSolicitud[0]->getNumOfendidos();


        if ($registros == $rsOfendidosSolicitud) {

            $result = array(
                "status"             => "ok",
                "msj"                => "correcto",
                "totalOfendidos"     => $registros,
                "imputadosSolicitud" => $rsOfendidosSolicitud
            );


            /*
             * validación que verifica que cada ofendido tenga que tener al menos un defensor
             *
             * validacion que verifica que cada ofendido tenga al menos un domicilio registrado
             *
             * validacion que verifica que cada ofendido tenga al menos una nacionalidad registrada
             */

            foreach ($rsRegistros as $ofendido) {

                $idOfendidoSolicitud = $ofendido->getIdOfendidoSolicitud();


                //valida domicilio para cada ofendido
//
//                $DomiciliosOfendidosDto = new DomiciliosofendidossolicitudesDTO();
//                $DomiciliosOfendidosDao = new DomiciliosofendidossolicitudesDAO();
//
//                $DomiciliosOfendidosDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
//                $DomiciliosOfendidosDto->setActivo('S');
//
//                $selectDomicilios = $DomiciliosOfendidosDao->selectDomiciliosofendidossolicitudes($DomiciliosOfendidosDto);
//
//                if (!count($selectDomicilios)) {
//
//                    /*
//                     * si el tipo de persona es 1(persona fisica) se muestra nombre, paterno y materno
//                     */
//                    if ($ofendido->getCveTipoPersona() == 1) {
//                        $nombre_ofendido = $ofendido->getNombre() . ' ' . $ofendido->getPaterno() . ' ' . $ofendido->getMaterno();
//                    } else {
//                        /*
//                         * si el tipo de persona es igual a 2 o 3 (moral u otra) se muestra nombre moral
//                         */
//                        $nombre_ofendido = $ofendido->getNombreMoral();
//                    }
//
//
//                    $result = [
//                        'status'             => 'error',
//                        'msj'                => 'Tienes que agregar al menos un domicilio para el ofendido: ' . $nombre_ofendido,
//                        "totalOfendidos"     => 0,
//                        "imputadosSolicitud" => $rsOfendidosSolicitud
//                    ];
//
//                    return $result;
//                }


                //valida defensor para cada ofendido

                $DefensoresOfendidosDto = new DefensoresofendidossolicitudesDTO();
                $DefensoresOfendidosDao = new DefensoresofendidossolicitudesDAO();
                $DefensoresOfendidosDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
                $DefensoresOfendidosDto->setActivo('S');

                $selectDefensores = $DefensoresOfendidosDao->selectDefensoresofendidossolicitudes($DefensoresOfendidosDto);

                if (!count($selectDefensores)) {

                    /*
                     * si el tipo de persona es 1(persona fisica) se muestra nombre, paterno y materno
                     */
                    if ($ofendido->getCveTipoPersona() == 1) {
                        $nombre_ofendido = $ofendido->getNombre() . ' ' . $ofendido->getPaterno() . ' ' . $ofendido->getMaterno();
                    } else {
                        /*
                         * si el tipo de persona es igual a 2 o 3 (moral u otra) se muestra nombre moral
                         */
                        $nombre_ofendido = $ofendido->getNombreMoral();
                    }

                    $result = [
                        'status'             => 'error',
                        'msj'                => 'Tienes que agregar al menos un defensor para el ofendido: ' . $nombre_ofendido,
                        "totalOfendidos"     => 0,
                        "imputadosSolicitud" => $rsOfendidosSolicitud
                    ];

                    return $result;
                }


                //valida nacionalidad para cada ofendido
                $NacionalidadesOfendidosDto = new NacionalidadesofendidossolicitudesDTO();
                $NacionalidadesOfendidosDao = new NacionalidadesofendidossolicitudesDAO();
                $NacionalidadesOfendidosDto->setActivo('S');
                $NacionalidadesOfendidosDto->setIdOfendidoSolicitud($idOfendidoSolicitud);

                $selectNacionalidades = $NacionalidadesOfendidosDao->selectNacionalidadesofendidossolicitudes($NacionalidadesOfendidosDto);

                if (!count($selectNacionalidades)) {

                    /*
                     * si el tipo de persona es 1(persona fisica) se muestra nombre, paterno y materno
                     */
                    if ($ofendido->getCveTipoPersona() == 1) {
                        $nombre_ofendido = $ofendido->getNombre() . ' ' . $ofendido->getPaterno() . ' ' . $ofendido->getMaterno();
                    } else {
                        /*
                         * si el tipo de persona es igual a 2 o 3 (moral u otra) se muestra nombre moral
                         */
                        $nombre_ofendido = $ofendido->getNombreMoral();
                    }

                    $result = [
                        'status'             => 'error',
                        'msj'                => 'Tienes que agregar al menos una nacionalidad para el ofendido: ' . $nombre_ofendido,
                        "totalOfendidos"     => 0,
                        "imputadosSolicitud" => $rsOfendidosSolicitud
                    ];

                    return $result;
                }
            }
        } else if ($registros < $rsOfendidosSolicitud) {
            $result = array(
                "status"             => "error",
                "msj"                => "Faltan por agregar ofendidos. Verifique",
                "totalOfendidos"     => $registros,
                "imputadosSolicitud" => $rsOfendidosSolicitud
            );
        } else if ($registros > $rsOfendidosSolicitud) {
            $result = array(
                "status"             => "error",
                "msj"                => "Tiene agregado uno o mas ofendidos de más. Verifique",
                "totalOfendidos"     => $registros,
                "imputadosSolicitud" => $rsOfendidosSolicitud
            );
        }


        return ($result);
    }

    /**
     * método para agregar ofendidos y todas su relaciones via webservice
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function creaOfendido($data, $proveedor = null)
    {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        try {

            if ($proveedor == null) {
                $this->proveedor->execute('BEGIN');
            }

            $data = json_decode($data, true);

            foreach ($data as $index => $arreglo) {

                $OfendidossolicitudesDto = new OfendidossolicitudesDTO();

                $OfendidossolicitudesDto->setIdOfendidoSolicitud(@$arreglo["ofendido"]["idOfendidoSolicitud"]);
                $OfendidossolicitudesDto->setIdSolicitudAudiencia(@$arreglo["ofendido"]["idSolicitudAudiencia"]);
                $OfendidossolicitudesDto->setNombre(@$arreglo["ofendido"]["nombre"]);
                $OfendidossolicitudesDto->setPaterno(@$arreglo["ofendido"]["paterno"]);
                $OfendidossolicitudesDto->setMaterno(@$arreglo["ofendido"]["materno"]);
                $OfendidossolicitudesDto->setRfc(@$arreglo["ofendido"]["rfc"]);
                $OfendidossolicitudesDto->setCurp(@$arreglo["ofendido"]["curp"]);
                $OfendidossolicitudesDto->setFechaNacimiento(@$arreglo["ofendido"]["fechaNacimiento"]);
                $OfendidossolicitudesDto->setCveOcupacion(@$arreglo["ofendido"]["cveOcupacion"]);
                $OfendidossolicitudesDto->setCveTipoPersona(@$arreglo["ofendido"]["cveTipoPersona"]);
                $OfendidossolicitudesDto->setCveGenero(@$arreglo["ofendido"]["cveGenero"]);
                $OfendidossolicitudesDto->setCveTipoParte(@$arreglo["ofendido"]["cveTipoParte"]);
                $OfendidossolicitudesDto->setCveTipoReligion(@$arreglo["ofendido"]["cveTipoReligion"]);
                $OfendidossolicitudesDto->setEdad(@$arreglo["ofendido"]["edad"]);
                $OfendidossolicitudesDto->setCvePaisNacimiento(@$arreglo["ofendido"]["cvePaisNacimiento"]);
                $OfendidossolicitudesDto->setCveEstadoNacimiento(@$arreglo["ofendido"]["cveEstadoNacimiento"]);
                $OfendidossolicitudesDto->setEstadoNacimiento(@$arreglo["ofendido"]["estadoNacimiento"]);
                $OfendidossolicitudesDto->setCveMunicipioNacimiento(@$arreglo["ofendido"]["cveMunicipioNacimiento"]);
                $OfendidossolicitudesDto->setMunicipioNacimiento(@$arreglo["ofendido"]["municipioNacimiento"]);
                $OfendidossolicitudesDto->setCveEstadoCivil(@$arreglo["ofendido"]["cveEstadoCivil"]);
                $OfendidossolicitudesDto->setCveAlfabetismo(@$arreglo["ofendido"]["cveAlfabetismo"]);
                $OfendidossolicitudesDto->setCveNivelInstruccion(@$arreglo["ofendido"]["cveNivelInstruccion"]);
                $OfendidossolicitudesDto->setCveEspanol(@$arreglo["ofendido"]["cveEspanol"]);
                $OfendidossolicitudesDto->setCveDialectoIndigena(@$arreglo["ofendido"]["cveDialectoIndigena"]);
                $OfendidossolicitudesDto->setCveTipoFamiliaLinguistica(@$arreglo["ofendido"]["cveTipoFamiliaLinguistica"]);
                $OfendidossolicitudesDto->setCveInterprete(@$arreglo["ofendido"]["cveInterprete"]);
                $OfendidossolicitudesDto->setCveOrdenProteccion(@$arreglo["ofendido"]["cveOrdenProteccion"]);
                $OfendidossolicitudesDto->setCveEstadoPsicofisico(@$arreglo["ofendido"]["cveEstadoPsicofisico"]);
                $OfendidossolicitudesDto->setNombreMoral(@$arreglo["ofendido"]["nombreMoral"]);
                $OfendidossolicitudesDto->setCveVictimaDeLaDelincuenciaOrganizada(@$arreglo["ofendido"]["cveVictimaDeLaDelincuenciaOrganizada"]);
                $OfendidossolicitudesDto->setCveVictimaDeViolenciaDeGenero(@$arreglo["ofendido"]["cveVictimaDeViolenciaDeGenero"]);
                $OfendidossolicitudesDto->setCveVictimaDeTrata(@$arreglo["ofendido"]["cveVictimaDeTrata"]);
                $OfendidossolicitudesDto->setDesaparecido(@$arreglo["ofendido"]["desaparecido"]);
                $OfendidossolicitudesDto->setNumHijos(@$arreglo["ofendido"]["numHijos"]);
                $OfendidossolicitudesDto->setEmbarazada(@$arreglo["ofendido"]["embarazada"]);
                $OfendidossolicitudesDto->setCveGrupoEdnico(@$arreglo["ofendido"]["cveGrupoEdnico"]);
                $OfendidossolicitudesDto->setActivo('S');

                $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);

                if ($OfendidossolicitudesDto->getIdOfendidoSolicitud() == '') {
                    $creaOfendido = $this->agregarOfendido($OfendidossolicitudesDto, $this->proveedor, false);
                } else {
                    $creaOfendido = $this->modificarOfendido($OfendidossolicitudesDto, $this->proveedor, false);
                }


                if ($creaOfendido['status'] == 'error') {

                    $errorOfendido = "el error ocurrió en el ofendido con índice " . $index;

                    if (is_array($creaOfendido['mensaje'])) {
                        $creaOfendido['mensaje'][] = $errorOfendido;
                        $mensaje = implode(',', $creaOfendido['mensaje']);
                    } else {
                        $mensaje = $errorOfendido . ', ' . $creaOfendido['mensaje'];
                    }

                    throw new Exception($mensaje);
                }


                /*
                 * obtenemos el id del ofendido que se guardó o actualizó
                 */

                $idOfendido = @$creaOfendido['data']['idOfendidoSolicitud'];

                if ($idOfendido == '')
                    throw new Exception('no se pudo recuperar el id del ofendido en el índice ' . $index);

                /*
                 * insertar domicilios del ofendido si es que existen registros a insertar o editar
                 */


                if (isset($arreglo['ofendido']['domicilios']) && count($arreglo['ofendido']['domicilios'])) {

                    foreach ($arreglo['ofendido']['domicilios'] as $indexDomicilio => $domicilio) {

                        $domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();
                        $domiciliosofendidossolicitudesDto->setIdDomicilioOfendidoSolicitud(@$domicilio["idDomicilioOfendidoSolicitud"]);
                        $domiciliosofendidossolicitudesDto->setIdOfendidoSolicitud($idOfendido);
                        $domiciliosofendidossolicitudesDto->setDomicilioProcesal(@$domicilio["DomicilioProcesal"]);
                        $domiciliosofendidossolicitudesDto->setCvePais(@$domicilio["cvePais"]);
                        $domiciliosofendidossolicitudesDto->setCveEstado(@$domicilio["cveEstado"]);
                        $domiciliosofendidossolicitudesDto->setCveMunicipio(@$domicilio["cveMunicipio"]);
                        $domiciliosofendidossolicitudesDto->setDireccion(@$domicilio["direccion"]);
                        $domiciliosofendidossolicitudesDto->setColonia(@$domicilio["colonia"]);
                        $domiciliosofendidossolicitudesDto->setNumInterior(@$domicilio["numInterior"]);
                        $domiciliosofendidossolicitudesDto->setNumExterior(@$domicilio["numExterior"]);
                        $domiciliosofendidossolicitudesDto->setCp(@$domicilio["cp"]);
                        $domiciliosofendidossolicitudesDto->setLatitud(@$domicilio["latitud"]);
                        $domiciliosofendidossolicitudesDto->setLongitud(@$domicilio["longitud"]);
                        $domiciliosofendidossolicitudesDto->setRecidenciaHabitual(@$domicilio["recidenciaHabitual"]);
                        $domiciliosofendidossolicitudesDto->setEstado(@$domicilio["estado"]);
                        $domiciliosofendidossolicitudesDto->setMunicipio(@$domicilio["municipio"]);
                        $domiciliosofendidossolicitudesDto->setCveConvivencia(@$domicilio["cveConvivencia"]);
                        $domiciliosofendidossolicitudesDto->setCveTipoDeVivienda(@$domicilio["cveTipoDeVivienda"]);

                        $domiciliosController = new DomiciliosofendidossolicitudesController();

                        if ($domiciliosofendidossolicitudesDto->getIdDomicilioOfendidoSolicitud() == '') {
                            $creaDomicilio = $domiciliosController->agregarDomicilioOfendido($domiciliosofendidossolicitudesDto, $this->proveedor);
                        } else {
                            $creaDomicilio = $domiciliosController->modificarDomicilioOfendido($domiciliosofendidossolicitudesDto, $this->proveedor);
                        }

                        if ($creaDomicilio['status'] == 'error') {

                            $errorDomicilio = "el error ocurrió en el ofendido con índice " . $index . ' y Domicilio con índice ' . $indexDomicilio;

                            if (is_array($creaDomicilio['mensaje'])) {
                                $creaDomicilio['mensaje'][] = $errorDomicilio;
                                $mensaje = implode(',', $creaDomicilio['mensaje']);
                            } else {
                                $mensaje = $errorDomicilio . ', ' . $creaDomicilio['mensaje'];
                            }

                            throw new Exception($mensaje);
                        }
                    }
                }


                /*
                 * insertar/editar telefonos de ofendidos si es que existen registros
                 */
                if (isset($arreglo['ofendido']['telefonos']) && count($arreglo['ofendido']['telefonos'])) {

                    foreach ($arreglo['ofendido']['telefonos'] as $indexTelefono => $telefono) {

                        $telefonosofendidossolicitudesDto = new TelefonosofendidossolicitudesDTO();
                        $telefonosofendidossolicitudesDto->setIdTelefonoOfendidoSolicitud(@$telefono["idTelefonoOfendidoSolicitud"]);
                        $telefonosofendidossolicitudesDto->setIdOfendidoSolicitud($idOfendido);
                        $telefonosofendidossolicitudesDto->setTelefono(@$telefono["telefono"]);
                        $telefonosofendidossolicitudesDto->setCelular(@$telefono["celular"]);
                        $telefonosofendidossolicitudesDto->setEmail(@$telefono["email"]);
                        $telefonosofendidossolicitudesDto->setActivo("S");

                        $telefonosController = new TelefonosofendidossolicitudesController();

                        if ($telefonosofendidossolicitudesDto->getIdTelefonoOfendidoSolicitud() == '') {
                            $creaTelefono = $telefonosController->agregarTelefonoOfendido($telefonosofendidossolicitudesDto, $this->proveedor, false);
                        } else {
                            $creaTelefono = $telefonosController->modificarTelefonoOfendido($telefonosofendidossolicitudesDto, $this->proveedor, false);
                        }


                        if ($creaTelefono['status'] == 'error') {

                            $errorTelefono = "el error ocurrió en el ofendido con índice " . $index . ' y teléfono con índice ' . $indexTelefono;

                            if (is_array($creaTelefono['mensaje'])) {
                                $creaTelefono['mensaje'][] = $errorTelefono;
                                $mensaje = implode(',', $creaTelefono['mensaje']);
                            } else {
                                $mensaje = $errorTelefono . ', ' . $creaTelefono['mensaje'];
                            }

                            throw new Exception($mensaje);
                        }
                    }
                }


                /*
                 * insertar/editar defensores de ofendidos si es que existen registros
                 */
                if (isset($arreglo['ofendido']['defensores']) && count($arreglo['ofendido']['defensores'])) {
                    foreach ($arreglo['ofendido']['defensores'] as $indexDefensor => $defensor) {

                        $DefensoressolicitudesDto = new DefensoresofendidossolicitudesDTO();
                        $DefensoressolicitudesDto->setIdDefensorOfendidoSolicitud(@$defensor["idDefensorOfendidoSolicitud"]);
                        $DefensoressolicitudesDto->setIdOfendidoSolicitud($idOfendido);
                        $DefensoressolicitudesDto->setCveTipoAsesor(@$defensor["cveTipoAsesor"]);
                        $DefensoressolicitudesDto->setNombre(@$defensor["nombre"]);
                        $DefensoressolicitudesDto->setTelefono(@$defensor["telefono"]);
                        $DefensoressolicitudesDto->setCelular(@$defensor["celular"]);
                        $DefensoressolicitudesDto->setEmail(@$defensor["email"]);
                        $DefensoressolicitudesDto->setActivo("S");

                        $defensoresController = new DefensoresofendidossolicitudesController();

                        if ($DefensoressolicitudesDto->getIdDefensorOfendidoSolicitud() == '') {
                            $creaDefensor = $defensoresController->agregarDefensorOfendido($DefensoressolicitudesDto, $this->proveedor, false);
                        } else {
                            $creaDefensor = $defensoresController->modificarDefensorOfendido($DefensoressolicitudesDto, $this->proveedor, false);
                        }

                        if ($creaDefensor['status'] == 'error') {

                            $errorDefensor = "el error ocurrió en el ofendido con índice " . $index . ' y teléfono con índice ' . $indexDefensor;

                            if (is_array($creaDefensor['mensaje'])) {
                                $creaDefensor['mensaje'][] = $errorDefensor;
                                $mensaje = implode(',', $creaDefensor['mensaje']);
                            } else {
                                $mensaje = $errorDefensor . ', ' . $creaDefensor['mensaje'];
                            }

                            throw new Exception($mensaje);
                        }
                    }
                }

                /*
                 * insertar/editar tutores de ofendidos si es que existen registros
                 */
                if (isset($arreglo['ofendido']['tutores']) && count($arreglo['ofendido']['tutores'])) {

                    foreach ($arreglo['ofendido']['tutores'] as $indexTutor => $tutor) {

                        $tutoresOfendidosDto = new TutoresofendidosDTO();
                        $tutoresOfendidosDto->setIdTutorOfendido(@$tutor["idTutorOfendido"]);
                        $tutoresOfendidosDto->setIdOfendidoSolicitud($idOfendido);
                        $tutoresOfendidosDto->setCveTipoTutor(@$tutor["cveTipoTutor"]);
                        $tutoresOfendidosDto->setProvDef(@$tutor["ProvDef"]);
                        $tutoresOfendidosDto->setNombre(@$tutor["nombre"]);
                        $tutoresOfendidosDto->setPaterno(@$tutor["paterno"]);
                        $tutoresOfendidosDto->setMaterno(@$tutor["materno"]);
                        $tutoresOfendidosDto->setCveGenero(@$tutor["cveGenero"]);
                        $tutoresOfendidosDto->setFechaNacimiento($this->fechaNormal(@$tutor["fechaNacimiento"]));
                        $tutoresOfendidosDto->setEdad(@$tutor["edad"]);
                        $tutoresOfendidosDto->setActivo("S");

                        $tutoresController = new TutoresofendidosController();

                        if ($tutoresOfendidosDto->getIdTutorOfendido() == null) {
                            $creaTutor = $tutoresController->agregarTutorOfendido($tutoresOfendidosDto, $this->proveedor, false);
                        } else {
                            $creaTutor = $tutoresController->modificarTutorOfendido($tutoresOfendidosDto, $this->proveedor, false);
                        }


                        if ($creaTutor['status'] == 'error') {

                            $errorTutor = "el error ocurrió en el ofendido con índice " . $index . ' y tutor con índice ' . $indexTutor;

                            if (is_array($creaTutor['mensaje'])) {
                                $creaTutor['mensaje'][] = $errorTutor;
                                $mensaje = implode(',', $creaTutor['mensaje']);
                            } else {
                                $mensaje = $errorTutor . ', ' . $creaTutor['mensaje'];
                            }

                            throw new Exception($mensaje);
                        }
                    }
                }


                /*
                 * agregar nacionalidades de ofendidos
                 */
                if (isset($arreglo['ofendido']['nacionalidades']) && count($arreglo['ofendido']['nacionalidades'])) {
                    foreach ($arreglo['ofendido']['nacionalidades'] as $indexNacionalidad => $nacionalidad) {
                        $nacionalidadesofendidossolicitudesDto = new NacionalidadesofendidossolicitudesDTO();
                        $nacionalidadesofendidossolicitudesDto->setIdNacionalidadOfendidoSolicitud(@$nacionalidad['idNacionalidadOfendidoSolicitud']);
                        $nacionalidadesofendidossolicitudesDto->setIdOfendidoSolicitud($idOfendido);
                        $nacionalidadesofendidossolicitudesDto->setCvePais(@$nacionalidad["cvePais"]);
                        $nacionalidadesofendidossolicitudesDto->setActivo("S");

                        $nacionalidadesController = new NacionalidadesofendidossolicitudesController();

                        if ($nacionalidadesofendidossolicitudesDto->getIdNacionalidadOfendidoSolicitud() == '') {
                            $creaNacionalidad = $nacionalidadesController->agregarNacionalidadOfendido($nacionalidadesofendidossolicitudesDto, $this->proveedor, false);
                        } else {
                            $creaNacionalidad = $nacionalidadesController->modificarNacionalidadOfendido($nacionalidadesofendidossolicitudesDto, $this->proveedor, false);
                        }

                        if ($creaNacionalidad['status'] == 'error') {

                            $errorNacionalidad = "el error ocurrió en el ofendido con índice " . $index . ' y tutor con índice ' . $indexTutor;

                            if (is_array($creaNacionalidad['mensaje'])) {
                                $creaNacionalidad['mensaje'][] = $errorNacionalidad;
                                $mensaje = implode(',', $creaNacionalidad['mensaje']);
                            } else {
                                $mensaje = $errorNacionalidad . ', ' . $creaNacionalidad['mensaje'];
                            }

                            throw new Exception($mensaje);
                        }
                    }
                }
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'datos de ofendidos y sus relaciones fueron guardadados correctamente'
            ];
        } catch (Exception $e) {
            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    private function esFecha($fecha)
    {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }

        return false;
    }

    private function fechaMysql($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

    public function eliminarViolenciaGenero($idImpOfeDelRelacion, $proveedor)
    {

        try {
            $estatus = 'N';

            //eliminar violencia de genero
            $violenciaGeneroDto = new ViolenciadegeneroDTO();
            $violenciaGeneroDao = new ViolenciadegeneroDAO();
            $violenciaGeneroDto->setIdImpOfeDelSolicitud($idImpOfeDelRelacion);
            $violenciaGeneroDto->setActivo('S');
            $selectViolenciaGenero = $violenciaGeneroDao->selectViolenciadegenero($violenciaGeneroDto, '', $proveedor);

            if ($selectViolenciaGenero != '') {

                foreach ($selectViolenciaGenero as $violenciaGenero) {
                    $idViolenciaGenero = $violenciaGenero->getIdViolenciaDeGenero();
                    //eliminar cada registro violencia de genero;

                    $violenciaGeneroDto->setIdViolenciaDeGenero($idViolenciaGenero);
                    $violenciaGeneroDto->setActivo($estatus);

                    $updateViolenciaGenero = $violenciaGeneroDao->updateViolenciadegenero($violenciaGeneroDto, $proveedor);

                    if ($updateViolenciaGenero == '')
                        throw new Exception('no se pudo eliminar el registro violencia de genero con el id: ' . $idViolenciaGenero);

                    //eliminar violencia factores sociales
                    $violenciaFactoresSocialesDto = new ViolenciafactoressocialesDTO();
                    $violenciaFactoresSocialesDao = new ViolenciafactoressocialesDAO();
                    $violenciaFactoresSocialesDto->setIdViolenciaDeGenero($idViolenciaGenero);
                    $violenciaFactoresSocialesDto->setActivo('S');

                    $selectViolenciaFactoresSociales = $violenciaFactoresSocialesDao->selectViolenciafactoressociales($violenciaFactoresSocialesDto, '', $proveedor);

                    if ($selectViolenciaFactoresSociales != '') {
                        foreach ($selectViolenciaFactoresSociales as $violenciaFactorSocial) {
                            $idViolenciaFactorSocial = $violenciaFactorSocial->getIdViolenciaFactorSocial();
                            $violenciaFactoresSocialesDto->setIdViolenciaFactorSocial($idViolenciaFactorSocial);
                            $violenciaFactoresSocialesDto->setActivo($estatus);

                            $updateViolenciaFactorSocial = $violenciaFactoresSocialesDao->updateViolenciafactoressociales($violenciaFactoresSocialesDto, $proveedor);

                            if ($updateViolenciaFactorSocial == '')
                                throw new Exception('no se pudo eliminar el registro violencia factor social con id: ' . $idViolenciaFactorSocial);
                        }
                    }


                    //eliminar violencia homicidios dolosos
                    $violenciaHomicidiosDolososDto = new ViolenciahomicidiosdolososDTO();
                    $violenciaHomicidiosDolososDao = new ViolenciahomicidiosdolososDAO();
                    $violenciaHomicidiosDolososDto->setIdViolenciaDeGenero($idViolenciaGenero);
                    $violenciaHomicidiosDolososDto->setActivo('S');

                    $selectViolenciaHomicidiosDolosos = $violenciaHomicidiosDolososDao->selectViolenciahomicidiosdolosos($violenciaHomicidiosDolososDto, '', $proveedor);

                    if ($selectViolenciaHomicidiosDolosos != '') {
                        foreach ($selectViolenciaHomicidiosDolosos as $violenciaHomicidioDoloso) {
                            $idViolenciaHomicidioDoloso = $violenciaHomicidioDoloso->getIdViolenciaHomicidioDoloso();
                            $violenciaHomicidiosDolososDto->setIdViolenciaHomicidioDoloso($idViolenciaHomicidioDoloso);
                            $violenciaHomicidiosDolososDto->setActivo($estatus);

                            $updateViolenciaHomicidioDoloso = $violenciaHomicidiosDolososDao->updateViolenciahomicidiosdolosos($violenciaHomicidiosDolososDto, $proveedor);

                            if ($updateViolenciaHomicidioDoloso == '')
                                throw new Exception('no se pudo eliminar el registro violencia homicidio doloso con id: ' . $idViolenciaHomicidioDoloso);
                        }
                    }
                }
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'eliminacion correcta'
            ];
        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    public function eliminarTrataPersonas($idImpOfeDelRelacion, $proveedor)
    {

        try {
            $estatus = 'N';

            $trataPersonasDto = new TrataspersonasDTO();
            $trataPersonasDao = new TrataspersonasDAO();
            $trataPersonasDto->setIdImpOfeDelSolicitud($idImpOfeDelRelacion);
            $trataPersonasDto->setActivo('S');

            $selectTratasPersonas = $trataPersonasDao->selectTrataspersonas($trataPersonasDto, '', $proveedor);

            if ($selectTratasPersonas != '') {

                foreach ($selectTratasPersonas as $trataPersona) {
                    $idTrataPersona = $trataPersona->getIdTrataPersona();

                    $trataPersonasDto->setIdTrataPersona($idTrataPersona);
                    $trataPersonasDto->setActivo($estatus);

                    $updateTrataPersona = $trataPersonasDao->updateTrataspersonas($trataPersonasDto, $proveedor);

                    if ($updateTrataPersona == '')
                        throw new Exception('no se pudo eliminar el registro trata de personas con el id: ' . $idTrataPersona);
                }
            }


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'eliminacion correcta'
            ];
        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    public function eliminarEfectosSexuales($idImpOfeDelRelacion, $proveedor)
    {

        try {

            $estatus = 'N';

            $sexualesDto = new SexualesDTO();
            $sexualesDao = new SexualesDAO();

            $sexualesDto->setIdImpOfeDelSolicitud($idImpOfeDelRelacion);
            $sexualesDto->setActivo('S');

            $selectSexuales = $sexualesDao->selectSexuales($sexualesDto);

            if ($selectSexuales != '') {
                foreach ($selectSexuales as $sexual) {
                    $idSexual = $sexual->getIdSexual();
                    $sexualesDto->setIdSexual($idSexual);
                    $sexualesDto->setActivo($estatus);

                    $updateSexual = $sexualesDao->updateSexuales($sexualesDto, $proveedor);

                    if ($updateSexual == '')
                        throw new Exception('No se pudo eliminar el registro en la tabla sexuales con el id: ' . $idSexual);

                    //eliminar testigos sexuales
                    $testigosSexualesDto = new TestigossexualesDTO();
                    $testigosSexualesDao = new TestigossexualesDAO();
                    $testigosSexualesDto->setIdSexual($idSexual);
                    $testigosSexualesDto->setActivo('S');

                    $selectTestigosSexuales = $testigosSexualesDao->selectTestigossexuales($testigosSexualesDto, '', $proveedor);


                    if ($selectTestigosSexuales != '') {

                        foreach ($selectTestigosSexuales as $testigoSexual) {
                            $idTestigoSexual = $testigoSexual->getIdTestigoSexual();

                            $testigosSexualesDto->setIdTestigoSexual($idTestigoSexual);
                            $testigosSexualesDto->setActivo($estatus);

                            $updateTestigoSexual = $testigosSexualesDao->updateTestigossexuales($testigosSexualesDto, $proveedor);

                            if ($updateTestigoSexual == '')
                                throw New Exception('no se pudo eliminar el testigo sexual con el id: ' . $idTestigoSexual);
                        }
                    }


                    //eliminar sexualesconductas

                    $sexualesConductasDto = new SexualesconductasDTO();
                    $sexualesConductasDao = new SexualesconductasDAO();

                    $sexualesConductasDto->setIdSexual($idSexual);
                    $sexualesConductasDto->setActivo('S');

                    $selectSexualesConductas = $sexualesConductasDao->selectSexualesconductas($sexualesConductasDto, '', $proveedor);

                    if ($selectSexualesConductas != '') {

                        foreach ($selectSexualesConductas as $sexualConducta) {
                            $idSexualConducta = $sexualConducta->getIdSexualConducta();
                            $sexualesConductasDto->setIdSexualConducta($idSexualConducta);
                            $sexualesConductasDto->setActivo($estatus);

                            $updateSexualConducta = $sexualesConductasDao->updateSexualesconductas($sexualesConductasDto, $proveedor);

                            if ($updateSexualConducta == '')
                                throw new Exception('no se pudo eliminar el registro sexual conducta con id: ' . $idSexualConducta);


                            //eliminar detalles sexuales conductas
                            $detallesSexualesConductasDto = new DetallessexualesconductasDTO();
                            $detallesSexualesConductasDao = new DetallessexualesconductasDAO();

                            $detallesSexualesConductasDto->setIdSexualConducta($idSexualConducta);
                            $detallesSexualesConductasDto->setActivo('S');

                            $selectDetallesSexualesConductas = $detallesSexualesConductasDao->selectDetallessexualesconductas($detallesSexualesConductasDto, '', $proveedor);

                            if ($selectDetallesSexualesConductas != '') {
                                foreach ($selectDetallesSexualesConductas as $detalleSexualConducta) {
                                    $idDetalleSexualConducta = $detalleSexualConducta->getIdDetalleSexualConducta();

                                    $detallesSexualesConductasDto->setIdDetalleSexualConducta($idDetalleSexualConducta);
                                    $detallesSexualesConductasDto->setActivo($estatus);

                                    $updateDetalleSexualConducta = $detallesSexualesConductasDao->updateDetallessexualesconductas($detallesSexualesConductasDto, $proveedor);

                                    if ($updateDetalleSexualConducta == '')
                                        throw new Exception('no se pudo eliminar el detalle sexual conducta con id: ' . $idDetalleSexualConducta);
                                }
                            }
                        }
                    }
                }
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'eliminacion correcta'
            ];
        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

}

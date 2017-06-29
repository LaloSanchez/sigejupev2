<?php //ihs
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 FACADES
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadoscarpetas/ImputadoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipospersonas/TipospersonasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposreligiones/TiposreligionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposreligiones/TiposreligionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//etapa procesal
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/etapasprocesales/EtapasprocesalesDAO.Class.php");

class ImputadoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarImputadoscarpetas($ImputadoscarpetasDto){
        $ImputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getidImputadoCarpeta(),"utf8"):strtoupper($ImputadoscarpetasDto->getidImputadoCarpeta()))))));
        if($this->esFecha($ImputadoscarpetasDto->getidImputadoCarpeta())){
            $ImputadoscarpetasDto->setidImputadoCarpeta($this->fechaMysql($ImputadoscarpetasDto->getidImputadoCarpeta()));
        }
        $ImputadoscarpetasDto->setidCarpetaJudicial(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getidCarpetaJudicial(),"utf8"):strtoupper($ImputadoscarpetasDto->getidCarpetaJudicial()))))));
        if($this->esFecha($ImputadoscarpetasDto->getidCarpetaJudicial())){
            $ImputadoscarpetasDto->setidCarpetaJudicial($this->fechaMysql($ImputadoscarpetasDto->getidCarpetaJudicial()));
        }
        $ImputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getactivo(),"utf8"):strtoupper($ImputadoscarpetasDto->getactivo()))))));
        if($this->esFecha($ImputadoscarpetasDto->getactivo())){
            $ImputadoscarpetasDto->setactivo($this->fechaMysql($ImputadoscarpetasDto->getactivo()));
        }
        $ImputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($ImputadoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($ImputadoscarpetasDto->getfechaRegistro())){
            $ImputadoscarpetasDto->setfechaRegistro($this->fechaMysql($ImputadoscarpetasDto->getfechaRegistro()));
        }
        $ImputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($ImputadoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($ImputadoscarpetasDto->getfechaActualizacion())){
            $ImputadoscarpetasDto->setfechaActualizacion($this->fechaMysql($ImputadoscarpetasDto->getfechaActualizacion()));
        }
        $ImputadoscarpetasDto->setdetenido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getdetenido(),"utf8"):strtoupper($ImputadoscarpetasDto->getdetenido()))))));
        if($this->esFecha($ImputadoscarpetasDto->getdetenido())){
            $ImputadoscarpetasDto->setdetenido($this->fechaMysql($ImputadoscarpetasDto->getdetenido()));
        }
        $ImputadoscarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getnombre(),"utf8"):strtoupper($ImputadoscarpetasDto->getnombre()))))));
        if($this->esFecha($ImputadoscarpetasDto->getnombre())){
            $ImputadoscarpetasDto->setnombre($this->fechaMysql($ImputadoscarpetasDto->getnombre()));
        }
        $ImputadoscarpetasDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getpaterno(),"utf8"):strtoupper($ImputadoscarpetasDto->getpaterno()))))));
        if($this->esFecha($ImputadoscarpetasDto->getpaterno())){
            $ImputadoscarpetasDto->setpaterno($this->fechaMysql($ImputadoscarpetasDto->getpaterno()));
        }
        $ImputadoscarpetasDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getmaterno(),"utf8"):strtoupper($ImputadoscarpetasDto->getmaterno()))))));
        if($this->esFecha($ImputadoscarpetasDto->getmaterno())){
            $ImputadoscarpetasDto->setmaterno($this->fechaMysql($ImputadoscarpetasDto->getmaterno()));
        }
        $ImputadoscarpetasDto->setrfc(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getrfc(),"utf8"):strtoupper($ImputadoscarpetasDto->getrfc()))))));
        if($this->esFecha($ImputadoscarpetasDto->getrfc())){
            $ImputadoscarpetasDto->setrfc($this->fechaMysql($ImputadoscarpetasDto->getrfc()));
        }
        $ImputadoscarpetasDto->setcurp(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcurp(),"utf8"):strtoupper($ImputadoscarpetasDto->getcurp()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcurp())){
            $ImputadoscarpetasDto->setcurp($this->fechaMysql($ImputadoscarpetasDto->getcurp()));
        }
        $ImputadoscarpetasDto->setcveTipoDetencion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveTipoDetencion(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveTipoDetencion()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveTipoDetencion())){
            $ImputadoscarpetasDto->setcveTipoDetencion($this->fechaMysql($ImputadoscarpetasDto->getcveTipoDetencion()));
        }
        $ImputadoscarpetasDto->setLegalDetencion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getLegalDetencion(),"utf8"):strtoupper($ImputadoscarpetasDto->getLegalDetencion()))))));
        if($this->esFecha($ImputadoscarpetasDto->getLegalDetencion())){
            $ImputadoscarpetasDto->setLegalDetencion($this->fechaMysql($ImputadoscarpetasDto->getLegalDetencion()));
        }
        $ImputadoscarpetasDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveGenero(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveGenero()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveGenero())){
            $ImputadoscarpetasDto->setcveGenero($this->fechaMysql($ImputadoscarpetasDto->getcveGenero()));
        }
        $ImputadoscarpetasDto->setCveTipoReligion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getCveTipoReligion(),"utf8"):strtoupper($ImputadoscarpetasDto->getCveTipoReligion()))))));
        if($this->esFecha($ImputadoscarpetasDto->getCveTipoReligion())){
            $ImputadoscarpetasDto->setCveTipoReligion($this->fechaMysql($ImputadoscarpetasDto->getCveTipoReligion()));
        }
        $ImputadoscarpetasDto->setalias(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getalias(),"utf8"):strtoupper($ImputadoscarpetasDto->getalias()))))));
        if($this->esFecha($ImputadoscarpetasDto->getalias())){
            $ImputadoscarpetasDto->setalias($this->fechaMysql($ImputadoscarpetasDto->getalias()));
        }
        $ImputadoscarpetasDto->setfechaDeclaracion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getfechaDeclaracion(),"utf8"):strtoupper($ImputadoscarpetasDto->getfechaDeclaracion()))))));
        if($this->esFecha($ImputadoscarpetasDto->getfechaDeclaracion())){
            $ImputadoscarpetasDto->setfechaDeclaracion($this->fechaMysql($ImputadoscarpetasDto->getfechaDeclaracion()));
        }
        $ImputadoscarpetasDto->setcvePaisNacimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcvePaisNacimiento(),"utf8"):strtoupper($ImputadoscarpetasDto->getcvePaisNacimiento()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcvePaisNacimiento())){
            $ImputadoscarpetasDto->setcvePaisNacimiento($this->fechaMysql($ImputadoscarpetasDto->getcvePaisNacimiento()));
        }
        $ImputadoscarpetasDto->setcveEstadoNacimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveEstadoNacimiento(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveEstadoNacimiento()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveEstadoNacimiento())){
            $ImputadoscarpetasDto->setcveEstadoNacimiento($this->fechaMysql($ImputadoscarpetasDto->getcveEstadoNacimiento()));
        }
        $ImputadoscarpetasDto->setcveMunicipioNacimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveMunicipioNacimiento(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveMunicipioNacimiento()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveMunicipioNacimiento())){
            $ImputadoscarpetasDto->setcveMunicipioNacimiento($this->fechaMysql($ImputadoscarpetasDto->getcveMunicipioNacimiento()));
        }
        $ImputadoscarpetasDto->setfechaNacimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getfechaNacimiento(),"utf8"):strtoupper($ImputadoscarpetasDto->getfechaNacimiento()))))));
        if($this->esFecha($ImputadoscarpetasDto->getfechaNacimiento())){
            $ImputadoscarpetasDto->setfechaNacimiento($this->fechaMysql($ImputadoscarpetasDto->getfechaNacimiento()));
        }
        $ImputadoscarpetasDto->setedad(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getedad(),"utf8"):strtoupper($ImputadoscarpetasDto->getedad()))))));
        if($this->esFecha($ImputadoscarpetasDto->getedad())){
            $ImputadoscarpetasDto->setedad($this->fechaMysql($ImputadoscarpetasDto->getedad()));
        }
        $ImputadoscarpetasDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveTipoPersona(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveTipoPersona()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveTipoPersona())){
            $ImputadoscarpetasDto->setcveTipoPersona($this->fechaMysql($ImputadoscarpetasDto->getcveTipoPersona()));
        }
        $ImputadoscarpetasDto->setnombreMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getnombreMoral(),"utf8"):strtoupper($ImputadoscarpetasDto->getnombreMoral()))))));
        if($this->esFecha($ImputadoscarpetasDto->getnombreMoral())){
            $ImputadoscarpetasDto->setnombreMoral($this->fechaMysql($ImputadoscarpetasDto->getnombreMoral()));
        }
        $ImputadoscarpetasDto->setcveNivelInstruccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveNivelInstruccion(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveNivelInstruccion()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveNivelInstruccion())){
            $ImputadoscarpetasDto->setcveNivelInstruccion($this->fechaMysql($ImputadoscarpetasDto->getcveNivelInstruccion()));
        }
        $ImputadoscarpetasDto->setcveEstadoCivil(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveEstadoCivil(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveEstadoCivil()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveEstadoCivil())){
            $ImputadoscarpetasDto->setcveEstadoCivil($this->fechaMysql($ImputadoscarpetasDto->getcveEstadoCivil()));
        }
        $ImputadoscarpetasDto->setcveEspanol(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveEspanol(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveEspanol()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveEspanol())){
            $ImputadoscarpetasDto->setcveEspanol($this->fechaMysql($ImputadoscarpetasDto->getcveEspanol()));
        }
        $ImputadoscarpetasDto->setcveAlfabetismo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveAlfabetismo(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveAlfabetismo()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveAlfabetismo())){
            $ImputadoscarpetasDto->setcveAlfabetismo($this->fechaMysql($ImputadoscarpetasDto->getcveAlfabetismo()));
        }
        $ImputadoscarpetasDto->setcveDialectoIndigena(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveDialectoIndigena(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveDialectoIndigena()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveDialectoIndigena())){
            $ImputadoscarpetasDto->setcveDialectoIndigena($this->fechaMysql($ImputadoscarpetasDto->getcveDialectoIndigena()));
        }
        $ImputadoscarpetasDto->setcveTipoFamiliaLinguistica(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveTipoFamiliaLinguistica(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveTipoFamiliaLinguistica()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveTipoFamiliaLinguistica())){
            $ImputadoscarpetasDto->setcveTipoFamiliaLinguistica($this->fechaMysql($ImputadoscarpetasDto->getcveTipoFamiliaLinguistica()));
        }
        $ImputadoscarpetasDto->setcveOcupacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveOcupacion(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveOcupacion()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveOcupacion())){
            $ImputadoscarpetasDto->setcveOcupacion($this->fechaMysql($ImputadoscarpetasDto->getcveOcupacion()));
        }
        $ImputadoscarpetasDto->setcveInterprete(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveInterprete(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveInterprete()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveInterprete())){
            $ImputadoscarpetasDto->setcveInterprete($this->fechaMysql($ImputadoscarpetasDto->getcveInterprete()));
        }
        $ImputadoscarpetasDto->setcveEstadoPsicofisico(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveEstadoPsicofisico(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveEstadoPsicofisico()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveEstadoPsicofisico())){
            $ImputadoscarpetasDto->setcveEstadoPsicofisico($this->fechaMysql($ImputadoscarpetasDto->getcveEstadoPsicofisico()));
        }
        $ImputadoscarpetasDto->setfechaImputacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getfechaImputacion(),"utf8"):strtoupper($ImputadoscarpetasDto->getfechaImputacion()))))));
        if($this->esFecha($ImputadoscarpetasDto->getfechaImputacion())){
            $ImputadoscarpetasDto->setfechaImputacion($this->fechaMysql($ImputadoscarpetasDto->getfechaImputacion()));
        }
        $ImputadoscarpetasDto->setfechaControlDet(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getfechaControlDet(),"utf8"):strtoupper($ImputadoscarpetasDto->getfechaControlDet()))))));
        if($this->esFecha($ImputadoscarpetasDto->getfechaControlDet())){
            $ImputadoscarpetasDto->setfechaControlDet($this->fechaMysql($ImputadoscarpetasDto->getfechaControlDet()));
        }
        $ImputadoscarpetasDto->setfecTerminoCons(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getfecTerminoCons(),"utf8"):strtoupper($ImputadoscarpetasDto->getfecTerminoCons()))))));
        if($this->esFecha($ImputadoscarpetasDto->getfecTerminoCons())){
            $ImputadoscarpetasDto->setfecTerminoCons($this->fechaMysql($ImputadoscarpetasDto->getfecTerminoCons()));
        }
        $ImputadoscarpetasDto->setfecCierreInv(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getfecCierreInv(),"utf8"):strtoupper($ImputadoscarpetasDto->getfecCierreInv()))))));
        if($this->esFecha($ImputadoscarpetasDto->getfecCierreInv())){
            $ImputadoscarpetasDto->setfecCierreInv($this->fechaMysql($ImputadoscarpetasDto->getfecCierreInv()));
        }
        $ImputadoscarpetasDto->setestadoNacimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getestadoNacimiento(),"utf8"):strtoupper($ImputadoscarpetasDto->getestadoNacimiento()))))));
        if($this->esFecha($ImputadoscarpetasDto->getestadoNacimiento())){
            $ImputadoscarpetasDto->setestadoNacimiento($this->fechaMysql($ImputadoscarpetasDto->getestadoNacimiento()));
        }
        $ImputadoscarpetasDto->setmunicipioNacimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getmunicipioNacimiento(),"utf8"):strtoupper($ImputadoscarpetasDto->getmunicipioNacimiento()))))));
        if($this->esFecha($ImputadoscarpetasDto->getmunicipioNacimiento())){
            $ImputadoscarpetasDto->setmunicipioNacimiento($this->fechaMysql($ImputadoscarpetasDto->getmunicipioNacimiento()));
        }
        $ImputadoscarpetasDto->setrelacionMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getrelacionMoral(),"utf8"):strtoupper($ImputadoscarpetasDto->getrelacionMoral()))))));
        if($this->esFecha($ImputadoscarpetasDto->getrelacionMoral())){
            $ImputadoscarpetasDto->setrelacionMoral($this->fechaMysql($ImputadoscarpetasDto->getrelacionMoral()));
        }
        $ImputadoscarpetasDto->setpersonaMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getpersonaMoral(),"utf8"):strtoupper($ImputadoscarpetasDto->getpersonaMoral()))))));
        if($this->esFecha($ImputadoscarpetasDto->getpersonaMoral())){
            $ImputadoscarpetasDto->setpersonaMoral($this->fechaMysql($ImputadoscarpetasDto->getpersonaMoral()));
        }
        /*$ImputadoscarpetasDto->setcveNacionalidad(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveNacionalidad(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveNacionalidad()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveNacionalidad())){
        $ImputadoscarpetasDto->setcveNacionalidad($this->fechaMysql($ImputadoscarpetasDto->getcveNacionalidad()));
        }*/
        $ImputadoscarpetasDto->setcveCereso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveCereso(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveCereso()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveCereso())){
            $ImputadoscarpetasDto->setcveCereso($this->fechaMysql($ImputadoscarpetasDto->getcveCereso()));
        }
        $ImputadoscarpetasDto->setCveEtapaProcesal(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getCveEtapaProcesal(),"utf8"):strtoupper($ImputadoscarpetasDto->getCveEtapaProcesal()))))));
        if($this->esFecha($ImputadoscarpetasDto->getCveEtapaProcesal())){
            $ImputadoscarpetasDto->setCveEtapaProcesal($this->fechaMysql($ImputadoscarpetasDto->getCveEtapaProcesal()));
        }
        $ImputadoscarpetasDto->setcveTipoReincidencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveTipoReincidencia(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveTipoReincidencia()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveTipoReincidencia())){
            $ImputadoscarpetasDto->setcveTipoReincidencia($this->fechaMysql($ImputadoscarpetasDto->getcveTipoReincidencia()));
        }
        $ImputadoscarpetasDto->setingresoMensual(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getingresoMensual(),"utf8"):strtoupper($ImputadoscarpetasDto->getingresoMensual()))))));
        if($this->esFecha($ImputadoscarpetasDto->getingresoMensual())){
            $ImputadoscarpetasDto->setingresoMensual($this->fechaMysql($ImputadoscarpetasDto->getingresoMensual()));
        }
        $ImputadoscarpetasDto->setcveGrupoEdnico(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getcveGrupoEdnico(),"utf8"):strtoupper($ImputadoscarpetasDto->getcveGrupoEdnico()))))));
        if($this->esFecha($ImputadoscarpetasDto->getcveGrupoEdnico())){
            $ImputadoscarpetasDto->setcveGrupoEdnico($this->fechaMysql($ImputadoscarpetasDto->getcveGrupoEdnico()));
        }
        $ImputadoscarpetasDto->setTieneSobreseimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getTieneSobreseimiento(),"utf8"):strtoupper($ImputadoscarpetasDto->getTieneSobreseimiento()))))));
        if($this->esFecha($ImputadoscarpetasDto->getTieneSobreseimiento())){
            $ImputadoscarpetasDto->setTieneSobreseimiento($this->fechaMysql($ImputadoscarpetasDto->getTieneSobreseimiento()));
        }
        $ImputadoscarpetasDto->setFechaSobreseimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ImputadoscarpetasDto->getFechaSobreseimiento(),"utf8"):strtoupper($ImputadoscarpetasDto->getFechaSobreseimiento()))))));
        if($this->esFecha($ImputadoscarpetasDto->getFechaSobreseimiento())){
            $ImputadoscarpetasDto->setFechaSobreseimiento($this->fechaMysql($ImputadoscarpetasDto->getFechaSobreseimiento()));
        }
        return $ImputadoscarpetasDto;
    }
    public function selectImputadoscarpetas($ImputadoscarpetasDto){
        $ImputadoscarpetasDto=$this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->selectImputadoscarpetas($ImputadoscarpetasDto);
        $json = "";
        $x = 1;
        $tiposPersonasDto = new TipospersonasDTO ();
        $tiposPersonasDao = new TipospersonasDAO ();
        $generosDto = new GenerosDTO();
        $generosDao = new GenerosDAO();
        $tiposReligionesDto = new TiposreligionesDTO();
        $tiposReligionesDao = new TiposreligionesDAO();
        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $etapasprocesalesDto = new EtapasprocesalesDTO();
        $etapasprocesalesDao = new EtapasprocesalesDAO();
        
        if($ImputadoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($ImputadoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($ImputadoscarpetasDto as $ImputadoCarpeta) {
                $tiposPersonasDto->setCveTipoPersona($ImputadoCarpeta->getCveTipoPersona());
                $rsPersona = $tiposPersonasDao->selectTipospersonas($tiposPersonasDto);
                $generosDto->setCveGenero($ImputadoCarpeta->getCveGenero());
                $generosDto->setActivo("S");
                $rsGenero = $generosDao->selectGeneros($generosDto);
                $tiposReligionesDto->setCveTipoReligion($ImputadoCarpeta->getCveTipoReligion());
                $tiposReligionesDto->setActivo("S");
                $rsReligiones = $tiposReligionesDao->selectTiposreligiones($tiposReligionesDto);
                $carpetasJudicialesDto->setIdCarpetaJudicial($ImputadoCarpeta->getIdCarpetaJudicial());
                $rsCarpetasJudiciales = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                $etapasprocesalesDto->setCveEtapaProcesal($ImputadoCarpeta->getCveEtapaProcesal());
                $rsEtapaProcesal = $etapasprocesalesDao->selectEtapasprocesales($etapasprocesalesDto);
                $json .= "{";
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($ImputadoCarpeta->getIdImputadoCarpeta())) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($ImputadoCarpeta->getIdCarpetaJudicial())) . ",";
                if ($rsCarpetasJudiciales != "") {
                    $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getCveTipoCarpeta())) . ",";
                    if ($rsCarpetasJudiciales[0]->getCveTipoCarpeta() != "" || $rsCarpetasJudiciales[0]->getCveTipoCarpeta() != null && $rsCarpetasJudiciales[0]->getCveTipoCarpeta() != 0) {
                        $tiposCarpetasDto = new TiposcarpetasDTO();
                        $tiposCarpetasDao = new TiposcarpetasDAO();
                        $tiposCarpetasDto->setCveTipoCarpeta($rsCarpetasJudiciales[0]->getCveTipoCarpeta());
                        $rsCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
                        $json .= '"desCarpeta":' . json_encode(utf8_encode($rsCarpetas[0]->getDesTipoCarpeta())) . ",";
                    } else {
                        $json .= '"desCarpeta": "",';
                    }
                    $json .= '"numero":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getNumero())) . ",";
                    $json .= '"anio":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getAnio())) . ",";
                    $json .= '"nuc":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getNuc())) . ",";
                    $json .= '"carpetaInv":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getCarpetaInv())) . ",";
                    $json .= '"cveEtapaProcesalCarpeta":' . json_encode($rsCarpetasJudiciales[0]->getCveEtapaProcesal()) . ",";
                } else {
                    $json .= '"cveTipoCarpeta": "",';
                    $json .= '"numero": "",';
                    $json .= '"anio": "",';
                    $json .= '"nuc": "",';
                    $json .= '"carpetaInv": "",';
                    $json .= '"cveEtapaProcesalCarpeta": "",';
                }
                if ($ImputadoCarpeta->getFechaRegistro() != "") {
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($ImputadoCarpeta->getFechaRegistro())) . ",";
                } else {
                    $json .= '"fechaRegistro": "",';
                }
                if ($ImputadoCarpeta->getFechaActualizacion() != "") {
                    $json .= '"fechaActualizacion":' . json_encode(utf8_encode($ImputadoCarpeta->getFechaActualizacion())) . ",";
                } else {
                    $json .= '"fechaActualizacion": "",';
                }
                $json .= '"detenido":' . json_encode(utf8_encode($ImputadoCarpeta->getDetenido())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($ImputadoCarpeta->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($ImputadoCarpeta->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($ImputadoCarpeta->getMaterno())) . ",";
                $json .= '"rfc":' . json_encode(utf8_encode($ImputadoCarpeta->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($ImputadoCarpeta->getCurp())) . ",";
                $json .= '"cveTipoDetencion":' . json_encode(utf8_encode($ImputadoCarpeta->getCveTipoDetencion())) . ",";
                $json .= '"LegalDetencion":' . json_encode(utf8_encode($ImputadoCarpeta->getLegalDetencion())) . ",";
                $json .= '"cveGenero":' . json_encode(utf8_encode($ImputadoCarpeta->getCveGenero())) . ",";
                if ( $rsGenero != "" ) {
                    $json .= '"desGenero":' . json_encode(utf8_encode($rsGenero[0]->getDesGenero())) . ",";
                } else {
                    $json .= '"desGenero": "N/A",';
                }
                $json .= '"cveTipoReligion":' . json_encode(utf8_encode($ImputadoCarpeta->getCveTipoReligion())) . ",";
                if ( $rsReligiones != "" ) {
                    $json .= '"desTipoReligion":' . json_encode(utf8_encode($rsReligiones[0]->getDesTipoReligion())) . ",";
                } else {
                    $json .= '"desTipoReligion": "N/A",';
                }
                $json .= '"alias":' . json_encode(utf8_encode($ImputadoCarpeta->getAlias())) . ",";
                if ($ImputadoCarpeta->getFechaDeclaracion() != "") {
                    $json .= '"fechaDeclaracion":' . json_encode(utf8_encode($ImputadoCarpeta->getFechaDeclaracion())) . ",";
                } else {
                    $json .= '"fechaDeclaracion": "",';
                }
                $json .= '"cvePaisNacimiento":' . json_encode(utf8_encode($ImputadoCarpeta->getCvePaisNacimiento())) . ",";
                $json .= '"cveEstadoNacimiento":' . json_encode(utf8_encode($ImputadoCarpeta->getCveEstadoNacimiento())) . ",";
                $json .= '"cveMunicipioNacimiento":' . json_encode(utf8_encode($ImputadoCarpeta->getCveMunicipioNacimiento())) . ",";
                if ($ImputadoCarpeta->getFechaNacimiento() != "") {
                    $json .= '"fechaNacimiento":' . json_encode(($ImputadoCarpeta->getFechaNacimiento())) . ",";
                } else {
                    $json .= '"fechaNacimiento": "",';
                }
                $json .= '"edad":' . json_encode(utf8_encode($ImputadoCarpeta->getEdad())) . ",";
                $json .= '"cveTipoPersona":' . json_encode(utf8_encode($ImputadoCarpeta->getCveTipoPersona())) . ",";
                if ($rsPersona != "") {
                    $json .= '"desTipoPersona":' . json_encode(utf8_encode($rsPersona[0]->getDesTipoPersona())) . ",";
                } else {
                    $json .= '"desTipoPersona": "N/A",';
                }
                $json .= '"nombreMoral":' . json_encode(utf8_encode($ImputadoCarpeta->getNombreMoral())) . ",";
                $json .= '"cveNivelInstruccion":' . json_encode(utf8_encode($ImputadoCarpeta->getCveNivelInstruccion())) . ",";
                $json .= '"cveEstadoCivil":' . json_encode(utf8_encode($ImputadoCarpeta->getCveEstadoCivil())) . ",";
                $json .= '"cveEspanol":' . json_encode(utf8_encode($ImputadoCarpeta->getCveEspanol())) . ",";
                $json .= '"cveAlfabetismo":' . json_encode(utf8_encode($ImputadoCarpeta->getCveAlfabetismo())) . ",";
                $json .= '"cveDialectoIndigena":' . json_encode(utf8_encode($ImputadoCarpeta->getCveDialectoIndigena())) . ",";
                $json .= '"cveTipoFamiliaLinguistica":' . json_encode(utf8_encode($ImputadoCarpeta->getCveTipoFamiliaLinguistica())) . ",";
                $json .= '"cveOcupacion":' . json_encode(utf8_encode($ImputadoCarpeta->getCveOcupacion())) . ",";
                $json .= '"cveInterprete":' . json_encode(utf8_encode($ImputadoCarpeta->getCveInterprete())) . ",";
                $json .= '"cveEstadoPsicofisico":' . json_encode(utf8_encode($ImputadoCarpeta->getCveEstadoPsicofisico())) . ",";
                if ($ImputadoCarpeta->getFechaImputacion() != "") {
                    $json .= '"fechaImputacion":' . json_encode(utf8_encode($ImputadoCarpeta->getFechaImputacion())) . ",";
                } else {
                    $json .= '"fechaImputacion": "",';
                }
                if ($ImputadoCarpeta->getFechaControlDet() != "") {
                    $json .= '"fechaControlDet":' . json_encode(utf8_encode($ImputadoCarpeta->getFechaControlDet())) . ",";
                } else {
                    $json .= '"fechaControlDet": "",';
                }
                if ($ImputadoCarpeta->getFecTerminoCons() != "") {
                    $json .= '"fecTerminoCons":' . json_encode(utf8_encode($ImputadoCarpeta->getFecTerminoCons())) . ",";
                } else {
                    $json .= '"fecTerminoCons": "",';
                }
                if ($ImputadoCarpeta->getFecCierreInv() != "") {
                    $json .= '"fecCierreInv":' . json_encode(utf8_encode($ImputadoCarpeta->getFecCierreInv())) . ",";
                } else {
                    $json .= '"fecCierreInv": "",';
                }
                $json .= '"estadoNacimiento":' . json_encode(utf8_encode($ImputadoCarpeta->getEstadoNacimiento())) . ",";
                $json .= '"municipioNacimiento":' . json_encode(utf8_encode($ImputadoCarpeta->getMunicipioNacimiento())) . ",";
                $json .= '"relacionMoral":' . json_encode(utf8_encode($ImputadoCarpeta->getRelacionMoral())) . ",";
                $json .= '"personaMoral":' . json_encode(utf8_encode($ImputadoCarpeta->getPersonaMoral())) . ",";
                $json .= '"cveCereso":' . json_encode(utf8_encode($ImputadoCarpeta->getCveCereso())) . ",";
                $json .= '"cveEtapaProcesal":' . json_encode(utf8_encode($ImputadoCarpeta->getCveEtapaProcesal())) . ",";
                if ( $rsEtapaProcesal != "" ) {
                    $json .= '"desEtapaProcesal":' . json_encode(utf8_encode($rsEtapaProcesal[0]->getDesEtapaProcesal())) . ",";
                } else {
                    $json .= '"desEtapaProcesal":"",';
                }
                $json .= '"cveTipoReincidencia":' . json_encode(utf8_encode($ImputadoCarpeta->getCveTipoReincidencia())) . ",";
                $json .= '"ingresoMensual":' . json_encode(utf8_encode($ImputadoCarpeta->getIngresoMensual())) . ",";
                $json .= '"cveGrupoEdnico":' . json_encode(utf8_encode($ImputadoCarpeta->getCveGrupoEdnico())) . ",";
                $json .= '"TieneSobreseimiento":' . json_encode(utf8_encode($ImputadoCarpeta->getTieneSobreseimiento())) . ",";
                $json .= '"FechaSobreseimiento":' . json_encode(utf8_encode($ImputadoCarpeta->getFechaSobreseimiento())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ImputadoscarpetasDto)) {
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
    
    public function insertImputadoscarpetas($ImputadoscarpetasDto){
        $ImputadoscarpetasDto=$this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->insertImputadoscarpetas($ImputadoscarpetasDto);
        if($ImputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($ImputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateImputadoscarpetas($ImputadoscarpetasDto){
        $ImputadoscarpetasDto=$this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->updateImputadoscarpetas($ImputadoscarpetasDto);
        if($ImputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($ImputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteImputadoscarpetas($ImputadoscarpetasDto){
        $ImputadoscarpetasDto=$this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->deleteImputadoscarpetas($ImputadoscarpetasDto);
        if($ImputadoscarpetasDto==true){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    
    /*
     * Para actualizar carpetas judiciales
     */
    public function guardarImputado($imputadoscarpetasDto) {
        $imputadoscarpetasDto = $this->validarImputadoscarpetas($imputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $rs = $ImputadoscarpetasController->guardarImputado($imputadoscarpetasDto);
        return ($rs);
    }
    
    public function modificarImputado($imputadoscarpetasDto, $idCarpetaDestino) {
        $imputadoscarpetasDto = $this->validarImputadoscarpetas($imputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $rs = $ImputadoscarpetasController->modificarImputado($imputadoscarpetasDto, $idCarpetaDestino);
        return ($rs);
    }
    
    public function eliminarImputadoscarpetas($ImputadoscarpetasDto){
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $actualizarCarpeta = 1;
        $rs = $ImputadoscarpetasController->eliminaImputado($ImputadoscarpetasDto, null, $actualizarCarpeta);
        return $rs;
    }
    
    public function selectImputadoscarpetasTotal($ImputadoscarpetasDto) {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $rs = $ImputadoscarpetasController->consultaImputadoscarpetasTotal($ImputadoscarpetasDto);
        return $rs;
    }
    
     public function selectImputadosconsentencia($ImputadoscarpetasDto) {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $rs = $ImputadoscarpetasController->consultaimputadosconsentencia($ImputadoscarpetasDto,$_POST);
       if ( $rs != "") {
            return $rs;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
     public function selectImputadossinsentencia($ImputadoscarpetasDto,$actuacion) {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $rs = $ImputadoscarpetasController->consultaimputadossinsentencia($ImputadoscarpetasDto,$actuacion);
       if ( $rs != "") {
            return $rs;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    /*---------------- GET PAGINAS----------------------------------------------------------------------*/ 
    public function getPaginas($ImputadoscarpetasDto, $param) {
        
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->getPaginas($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    /*---------------- GET PAGINAS IMPUTADOS----------------------------------------------------------------------*/ 
    public function getPaginasImp($ImputadoscarpetasDto, $param) {
        
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->getPaginasImp($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
/*----------------------GET P�GINAS CONSULTA DE IMPUTADOS (VARIAS TABLAS)*/    
    public function getPaginasImpConsulta($ImputadoscarpetasDto, $param) {
        
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->getPaginasImpConsulta($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
/*----------------------GET PÁGINAS CONSULTA DE IMPUTADOS CON O SIN LEGAL DETENCION (VARIAS TABLAS)*/    
    public function getPaginasImpConsultaLegalDetencion($ImputadoscarpetasDto,$filtroLegalDetencion, $param) {
        
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->getPaginasImpConsultaLegalDetencion($ImputadoscarpetasDto,$filtroLegalDetencion,$param);
        if ($ImputadoscarpetasDto != "") {
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
/*----------------------GET PÁGINAS CONSULTA DE AGRESORES (VARIAS TABLAS)*/    
    public function getPaginasAgresores($ImputadoscarpetasDto, $param) {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->getPaginasAgresores($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    /*------------------GET P�GINAS MUJERES-----------------------------------------------------------------*/
    public function getPaginasMujeres($ImputadoscarpetasDto, $param) {
        
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->getPaginasMujeres($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    
    /*----------------- CONSULTA DE MUJERES EN PRISI�N-----------------------------------------------------*/
    public function consultarMujeresPrision($ImputadoscarpetasDto,$param)
    {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->consultarMujeresPrision($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    /*-------------------------------------------------------------------------------------------------------*/
    /*----------------- CONSULTA DE IMPUTADOS POR NOMBRE-----------------------------------------------------*/
    public function consultarImputadosNombre($ImputadoscarpetasDto,$param)
    {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->consultarImputadosNombre($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
           // return $ImputadoscarpetasDto;
            return json_encode($ImputadoscarpetasDto);
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    public function consultarUnImputado($ImputadoscarpetasDto,$param){
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->consultarUnImputado($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
           // return $ImputadoscarpetasDto;
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    /*----------------- CONSULTA DE IMPUTADOS CON O SIN LEGAL DETENCION-----------------------------------------------------*/
    public function consultarImputadosLegalDetencion($ImputadoscarpetasDto,$filtroLegalDetencion,$param){
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->consultarImputadosLegalDetencion($ImputadoscarpetasDto,$filtroLegalDetencion,$param);
        if ($ImputadoscarpetasDto != "") {
            return json_encode($ImputadoscarpetasDto);
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    public function consultarUnImputadoLegalDetencion($ImputadoscarpetasDto,$param){
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->consultarUnImputadoLegalDetencion($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
/*-----------DETALLE DE UN IMPUTADO-OFENDIDO-DELITO*/    
    public function consultarImputadoDelito($ImputadoscarpetasDto,$param){
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->consultarImputadoDelito($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
           // return $ImputadoscarpetasDto;
            return $ImputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }


    /*-------------------------------------------------------------------------------------------------------*/
   
    /*----------------- CONSULTA DE AGRESORES-----------------------------------------------------*/
    public function consultarAgresores($ImputadoscarpetasDto,$param)
    {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $ImputadoscarpetasDto = $ImputadoscarpetasController->consultarAgresores($ImputadoscarpetasDto,$param);
        if ($ImputadoscarpetasDto != "") {
            return json_encode($ImputadoscarpetasDto);
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    /*-------------------------------------------------------------------------------------------------------*/
    
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
    
    /*
     * Metodo para copiar los datos personales de un imputado correspondiente
     * a una carpeta origen hacia un imputado de una carpeta destino
     */
    public function copiarDatosPersona($imputadoscarpetasDto, $param) {
        $imputadoscarpetasDto = $this->validarImputadoscarpetas($imputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $rs = $ImputadoscarpetasController->copiarDatosPersona($imputadoscarpetasDto, $param);
        return ($rs);
    }
    
    public function copiarDatosSolicitud($imputadoscarpetasDto, $param) {
        $imputadoscarpetasDto = $this->validarImputadoscarpetas($imputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $rs = $ImputadoscarpetasController->copiarDatosSolicitud($imputadoscarpetasDto, $param);
        return ($rs);
    }
    
    public function modificarEtapaProcesalImputado($imputadoscarpetasDto, $param) {
        $imputadoscarpetasDto = $this->validarImputadoscarpetas($imputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $rs = $ImputadoscarpetasController->modificarEtapaProcesalImputado($imputadoscarpetasDto, $param);
        return json_encode($rs);
    }
    
    public function datosPartes($imputadoscarpetasDto){
        $imputadoscarpetasDto = $this->validarImputadoscarpetas($imputadoscarpetasDto);
        $ImputadoscarpetasController = new ImputadoscarpetasController();
        $rs = $ImputadoscarpetasController->datosPartes($imputadoscarpetasDto);
        return $rs;
    }
    
}


/*-----------------------------------------------------------------*/
/*Variables extra para la busqueda de imputados con legal detencion*/
@$filtroLegalDetencion = array();
@$filtroLegalDetencion["cveJuzgado"]=$_POST["cveJuzgado"];
@$filtroLegalDetencion["cveTipoCarpeta"]=$_POST["cveTipoCarpeta"];
@$filtroLegalDetencion["numero"]=$_POST["numero"];
@$filtroLegalDetencion["anio"]=$_POST["anio"];
@$filtroLegalDetencion["LegalDetencion"]=$_POST["LegalDetencion"];
@$filtroLegalDetencion["fechaInicialRadicacionLD"]=$_POST["fechaInicialRadicacionLD"];
@$filtroLegalDetencion["fechaFinalRadicacionLD"]=$_POST["fechaFinalRadicacionLD"];
/*-----------------------------------------------------------------*/

@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$idCarpetaJudicial=$_POST["idCarpetaJudicial"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$detenido=$_POST["detenido"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$rfc=$_POST["rfc"];
@$curp=$_POST["curp"];
@$cveTipoDetencion=$_POST["cveTipoDetencion"];
@$LegalDetencion=$_POST["LegalDetencion"];
@$cveGenero=$_POST["cveGenero"];
@$cveTipoReligion=$_POST["cveTipoReligion"];
@$alias=$_POST["alias"];
@$fechaDeclaracion=$_POST["fechaDeclaracion"];
@$cvePaisNacimiento=$_POST["cvePaisNacimiento"];
@$cveEstadoNacimiento=$_POST["cveEstadoNacimiento"];
@$cveMunicipioNacimiento=$_POST["cveMunicipioNacimiento"];
@$fechaNacimiento=$_POST["fechaNacimiento"];
@$edad=$_POST["edad"];
@$cveTipoPersona=$_POST["cveTipoPersona"];
@$nombreMoral=$_POST["nombreMoral"];
@$cveNivelInstruccion=$_POST["cveNivelInstruccion"];
@$cveEstadoCivil=$_POST["cveEstadoCivil"];
@$cveEspanol=$_POST["cveEspanol"];
@$cveAlfabetismo=$_POST["cveAlfabetismo"];
@$cveDialectoIndigena=$_POST["cveDialectoIndigena"];
@$cveTipoFamiliaLinguistica=$_POST["cveTipoFamiliaLinguistica"];
@$cveOcupacion=$_POST["cveOcupacion"];
@$cveInterprete=$_POST["cveInterprete"];
@$cveEstadoPsicofisico=$_POST["cveEstadoPsicofisico"];
@$fechaImputacion=$_POST["fechaImputacion"];
@$fechaControlDet=$_POST["fechaControlDet"];
if($fechaControlDet!=""){
    $fechaControlDetAux = explode(" ", $fechaControlDet);
    if(count($fechaControlDetAux) > 0){
        $fechaTmp = explode("/", $fechaControlDetAux[0]);
        if(count($fechaTmp) > 0) {
            $fechaResult = $fechaTmp[2] . "/" . $fechaTmp[1] . "/" . $fechaTmp[0];
            $fechaControlDet = $fechaResult . " " . $fechaControlDetAux[1];
            //echo $fechaControlDet;
        }
    }
}
@$fecTerminoCons=$_POST["fecTerminoCons"];
if ( $fecTerminoCons != "" ) {
    $fechaTerminoConsAux = explode(" ", $fecTerminoCons);
    if ( count($fechaTerminoConsAux) > 0 ) {
        $fechaTmpAux = explode("/", $fechaTerminoConsAux[0]);
        if(count($fechaTmpAux) > 0) {
            $fechaResultAux = $fechaTmpAux[2] . "/" . $fechaTmpAux[1] . "/" . $fechaTmpAux[0];
            $fecTerminoCons = $fechaResultAux . " " . $fechaTerminoConsAux[1];
        }
    }
}
@$fecCierreInv=$_POST["fecCierreInv"];
@$estadoNacimiento=$_POST["estadoNacimiento"];
@$municipioNacimiento=$_POST["municipioNacimiento"];
@$relacionMoral=$_POST["relacionMoral"];
@$personaMoral=$_POST["personaMoral"];
//@$cveNacionalidad=$_POST["cveNacionalidad"];
@$cveCereso=$_POST["cveCereso"];
@$cveEtapaProcesal=$_POST["cveEtapaProcesal"];
@$cveTipoReincidencia=$_POST["cveTipoReincidencia"];
@$ingresoMensual=$_POST["ingresoMensual"];
@$cveGrupoEdnico=$_POST["cveGrupoEdnico"];
@$tieneSobreseimiento=$_POST["tieneSobreseimiento"];
@$fechaSobreseimiento=$_POST["fechaSobreseimiento"];
@$accion=$_POST["accion"];

/*----------------------------------------------------PAGINACION*/
$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
@$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
@$param["generico"] = $_POST['generico'];
/*-----------------------------------------------------------*/

$imputadoscarpetasFacade = new ImputadoscarpetasFacade();
$imputadoscarpetasDto = new ImputadoscarpetasDTO();

$imputadoscarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
$imputadoscarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
$imputadoscarpetasDto->setActivo($activo);
$imputadoscarpetasDto->setFechaRegistro($fechaRegistro);
$imputadoscarpetasDto->setFechaActualizacion($fechaActualizacion);
$imputadoscarpetasDto->setDetenido($detenido);
$imputadoscarpetasDto->setNombre($nombre);
$imputadoscarpetasDto->setPaterno($paterno);
$imputadoscarpetasDto->setMaterno($materno);
$imputadoscarpetasDto->setRfc($rfc);
$imputadoscarpetasDto->setCurp($curp);
$imputadoscarpetasDto->setCveTipoDetencion($cveTipoDetencion);
$imputadoscarpetasDto->setLegalDetencion($LegalDetencion);
$imputadoscarpetasDto->setCveGenero($cveGenero);
$imputadoscarpetasDto->setCveTipoReligion($cveTipoReligion);
$imputadoscarpetasDto->setAlias($alias);
$imputadoscarpetasDto->setFechaDeclaracion($fechaDeclaracion);
$imputadoscarpetasDto->setCvePaisNacimiento($cvePaisNacimiento);
$imputadoscarpetasDto->setCveEstadoNacimiento($cveEstadoNacimiento);
$imputadoscarpetasDto->setCveMunicipioNacimiento($cveMunicipioNacimiento);
$imputadoscarpetasDto->setFechaNacimiento($fechaNacimiento);
$imputadoscarpetasDto->setEdad($edad);
$imputadoscarpetasDto->setCveTipoPersona($cveTipoPersona);
$imputadoscarpetasDto->setNombreMoral($nombreMoral);
$imputadoscarpetasDto->setCveNivelInstruccion($cveNivelInstruccion);
$imputadoscarpetasDto->setCveEstadoCivil($cveEstadoCivil);
$imputadoscarpetasDto->setCveEspanol($cveEspanol);
$imputadoscarpetasDto->setCveAlfabetismo($cveAlfabetismo);
$imputadoscarpetasDto->setCveDialectoIndigena($cveDialectoIndigena);
$imputadoscarpetasDto->setCveTipoFamiliaLinguistica($cveTipoFamiliaLinguistica);
$imputadoscarpetasDto->setCveOcupacion($cveOcupacion);
$imputadoscarpetasDto->setCveInterprete($cveInterprete);
$imputadoscarpetasDto->setCveEstadoPsicofisico($cveEstadoPsicofisico);
$imputadoscarpetasDto->setFechaImputacion($fechaImputacion);
$imputadoscarpetasDto->setFechaControlDet($fechaControlDet);
$imputadoscarpetasDto->setFecTerminoCons($fecTerminoCons);
$imputadoscarpetasDto->setFecCierreInv($fecCierreInv);
$imputadoscarpetasDto->setEstadoNacimiento($estadoNacimiento);
$imputadoscarpetasDto->setMunicipioNacimiento($municipioNacimiento);
$imputadoscarpetasDto->setRelacionMoral($relacionMoral);
$imputadoscarpetasDto->setPersonaMoral($personaMoral);
//$imputadoscarpetasDto->setCveNacionalidad($cveNacionalidad);
$imputadoscarpetasDto->setCveCereso($cveCereso);
$imputadoscarpetasDto->setCveEtapaProcesal($cveEtapaProcesal);
$imputadoscarpetasDto->setCveTipoReincidencia($cveTipoReincidencia);
$imputadoscarpetasDto->setIngresoMensual($ingresoMensual);
$imputadoscarpetasDto->setCveGrupoEdnico($cveGrupoEdnico);
$imputadoscarpetasDto->setTieneSobreseimiento($tieneSobreseimiento);
$imputadoscarpetasDto->setFechaSobreseimiento($fechaSobreseimiento);

if( ($accion=="guardar") && ($idImputadoCarpeta=="") ){
    $imputadoscarpetasDto=$imputadoscarpetasFacade->insertImputadoscarpetas($imputadoscarpetasDto);
    echo $imputadoscarpetasDto;
} else if(($accion=="guardar") && ($idImputadoCarpeta!="")){
    $imputadoscarpetasDto=$imputadoscarpetasFacade->updateImputadoscarpetas($imputadoscarpetasDto);
    echo $imputadoscarpetasDto;
} else if($accion=="consultar"){
    $imputadoscarpetasDto=$imputadoscarpetasFacade->selectImputadoscarpetas($imputadoscarpetasDto);
    echo $imputadoscarpetasDto;
} else if( ($accion=="baja") && ($idImputadoCarpeta!="") ){
    $imputadoscarpetasDto=$imputadoscarpetasFacade->deleteImputadoscarpetas($imputadoscarpetasDto);
    echo $imputadoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idImputadoCarpeta!="") ){
    $imputadoscarpetasDto=$imputadoscarpetasFacade->selectImputadoscarpetas($imputadoscarpetasDto);
    echo $imputadoscarpetasDto;
} else if( ($accion == "guardarImputado") && ($idImputadoCarpeta=="") ){
    $imputadoscarpetasDto=$imputadoscarpetasFacade->guardarImputado($imputadoscarpetasDto);
    echo $imputadoscarpetasDto;
} else if ( ($accion == "guardarImputado") && ($idImputadoCarpeta != "") ) {
    @$idCarpetaDestino = $_POST["carpetaDestino"];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->modificarImputado($imputadoscarpetasDto, $idCarpetaDestino);
    echo $imputadoscarpetasDto;
} else if ($accion == "consultarTotal") {
    $imputadoscarpetasDto = $imputadoscarpetasFacade->selectImputadoscarpetasTotal($imputadoscarpetasDto);
    echo $imputadoscarpetasDto;
} else if( ($accion=="eliminar") && ($idImputadoCarpeta!="") ){
    $imputadoscarpetasDto=$imputadoscarpetasFacade->eliminarImputadoscarpetas($imputadoscarpetasDto);
    echo $imputadoscarpetasDto;
}else if ($accion == "consultarMujeresPrision") {
    @$param["paginacion"] = true;
    @$param["vnombre"] = $_POST['vnombre'];
    @$param["vpaterno"] = $_POST['vpaterno'];
    @$param["vmaterno"] = $_POST['vmaterno'];
    @$param["valias"] = $_POST['valias'];
    @$param["fechaDetencionDesde"] = $_POST['txtFecInicialBusquedaDet'];
    @$param["fechaDetencionHasta"] = $_POST['txtFecFinalBusquedaDet'];

    
    $imputadoscarpetasDto = $imputadoscarpetasFacade->consultarMujeresPrision($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
}else if ($accion == "getPaginas") {
    @$param["paginacion"] = true;
    $imputadoscarpetasDto = $imputadoscarpetasFacade->getPaginas($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
}else if ($accion == "getPaginasImp") {
    @$param["paginacion"] = true;
    $imputadoscarpetasDto = $imputadoscarpetasFacade->getPaginasImp($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
}else if ($accion == "consultarImputadosNombre") {
    @$param["paginacion"] = true;
    @$param["tipo"] = $_POST['tipo'];
    @$param["idImputadoExhorto"] = $_POST['idImputadoExhorto'];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->consultarImputadosNombre($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
} else if ($accion == "consultarImputadosLegalDetencion") {
    @$param["paginacion"] = true;
    @$param["tipo"] = $_POST['tipo'];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->consultarImputadosLegalDetencion($imputadoscarpetasDto,$filtroLegalDetencion,$param);//$param
    echo $imputadoscarpetasDto;
}
else if ($accion == "consultarUnImputado") {
    @$param["paginacion"] = true;
    @$param["tipo"] = $_POST['tipo'];
    @$param["idImputadoExhorto"] = $_POST['idImputadoExhorto'];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->consultarUnImputado($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
}else if($accion == "getPaginasImpConsulta"){
    @$param["paginacion"] = true;
    @$param["tipo"] = $_POST['tipo'];//Esta es la l�nea que agregu�
    $imputadoscarpetasDto = $imputadoscarpetasFacade->getPaginasImpConsulta($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
} else if ($accion == "consultarUnImputadoLegalDetencion") {
    @$param["paginacion"] = true;
    @$param["tipo"] = $_POST['tipo'];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->consultarUnImputadoLegalDetencion($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
} else if($accion == "getPaginasImpConsultaLegalDetencion"){
    @$param["paginacion"] = true;
    @$param["tipo"] = $_POST['tipo'];//Esta es la línea que agregué
    $imputadoscarpetasDto = $imputadoscarpetasFacade->getPaginasImpConsultaLegalDetencion($imputadoscarpetasDto,$filtroLegalDetencion,$param);//$param
    echo $imputadoscarpetasDto;
}
else if($accion == "getPaginasMujeres"){
    @$param["paginacion"] = true;
    @$param["vnombre"] = $_POST['vnombre'];
    @$param["vpaterno"] = $_POST['vpaterno'];
    @$param["vmaterno"] = $_POST['vmaterno'];
    @$param["valias"] = $_POST['valias'];
    @$param["fechaDetencionDesde"] = $_POST['txtFecInicialBusquedaDet'];
    @$param["fechaDetencionHasta"] = $_POST['txtFecFinalBusquedaDet'];

    $imputadoscarpetasDto = $imputadoscarpetasFacade->getPaginasMujeres($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
}
else if ($accion == "ConsultarAgresores") {
    @$param["paginacion"] = true;
    @$param["fechaDelitoDesde"] = $_POST['fechaDelitoDesde'];
    @$param["fechaDelitoHasta"] = $_POST['fechaDelitoHasta'];
    @$param["cveTipoCarpeta"] = $_POST['cveTipoCarpeta'];
    @$param["idImputado"] = $_POST['idImputado'];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->consultarAgresores($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
}
else if($accion == "getPaginasAgresores"){
    @$param["paginacion"] = true;
    @$param["fechaDelitoDesde"] = $_POST['fechaDelitoDesde'];
    @$param["fechaDelitoHasta"] = $_POST['fechaDelitoHasta'];
    @$param["cveTipoCarpeta"] = $_POST['cveTipoCarpeta'];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->getPaginasAgresores($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
}
else if ($accion == "consultarImputadoDelito") {
    @$param["paginacion"] = true;
    $imputadoscarpetasDto = $imputadoscarpetasFacade->consultarImputadoDelito($imputadoscarpetasDto,$param);//$param
    echo $imputadoscarpetasDto;
}
else if($accion == "consultasinsentencia"){
    $actuacion=$_POST['actuacion'];
    $imputadoscarpetasDto=$imputadoscarpetasFacade->selectImputadossinsentencia($imputadoscarpetasDto,$actuacion);
    print_r($imputadoscarpetasDto);
}
else if($accion == "consultaimputadosconsentencia"){
    $imputadoscarpetasDto=$imputadoscarpetasFacade->selectImputadosconsentencia($imputadoscarpetasDto);
    print_r($imputadoscarpetasDto);
} else if ( $accion == "copiarDatosPersona" ) {
    @$param['idImputados'] = $_POST['idImputados'];
    @$param['idCarpetaJudicialDestino'] = $_POST['idCarpetaJudicialDestino'];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->copiarDatosPersona($imputadoscarpetasDto, $param);
    echo $imputadoscarpetasDto;
} else if ( $accion == "copiarDatosSolicitud" ) {
    @$param['idImputados'] = $_POST['idImputados'];
    @$param['idSolicitudAudiencia'] = $_POST['idSolicitudAudiencia'];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->copiarDatosSolicitud($imputadoscarpetasDto, $param);
    echo $imputadoscarpetasDto;
} else if ( $accion == "etapaProcesalImputado" ) {
    @$param['idCarpetaJudicialDestino'] = $_POST['carpetaDestino'];
    @$param['cveEstatusCarpeta'] = $_POST['cveEstatusCarpeta'];
    @$param['fechaTermino'] = $_POST['fechaTermino'];
    @$param['modificarEstatusCarpeta'] = $_POST['modificarEstatus'];
    $imputadoscarpetasDto = $imputadoscarpetasFacade->modificarEtapaProcesalImputado($imputadoscarpetasDto, $param);
    echo $imputadoscarpetasDto;
} else if ( $accion == "consultarDatosPartes" ) {
    $imputadoscarpetasDto = $imputadoscarpetasFacade->datosPartes($imputadoscarpetasDto);
    echo $imputadoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
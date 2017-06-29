<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

//Imputados Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
//carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//Tipos Carpeta
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//Ocupaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ocupaciones/OcupacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ocupaciones/OcupacionesDAO.Class.php");
//Pa�ses
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/paises/PaisesDAO.Class.php");
//Estados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");
//Municipios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");
//Estados Civiles
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadosciviles/EstadoscivilesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadosciviles/EstadoscivilesDAO.Class.php");
//Niveles Instrucciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nivelesinstrucciones/NivelesinstruccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nivelesinstrucciones/NivelesinstruccionesDAO.Class.php");
//Alfabetismo
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/alfabetismo/AlfabetismoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/alfabetismo/AlfabetismoDAO.Class.php");
//Espanol
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/espanol/EspanolDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/espanol/EspanolDAO.Class.php");
//Dialecto Ind�gena
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/dialectoindigena/DialectoindigenaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/dialectoindigena/DialectoindigenaDAO.Class.php");
//Tipo Familia Ling��stica
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipofamilialinguistica/TipofamilialinguisticaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipofamilialinguistica/TipofamilialinguisticaDAO.Class.php");
//Interpretes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/interpretes/InterpretesDAO.Class.php");
//Estados Psicof�sicos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadospsicofisicos/EstadospsicofisicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadospsicofisicos/EstadospsicofisicosDAO.Class.php");
//Grupos �tnicos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposednicos/GruposednicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposednicos/GruposednicosDAO.Class.php");

//Tipos Detenciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposdetenciones/TiposdetencionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposdetenciones/TiposdetencionesDAO.Class.php");
//Ceresos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ceresos/CeresosDAO.Class.php");
//Tipos Reincidencia
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposreincidencias/TiposreincidenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposreincidencias/TiposreincidenciasDAO.Class.php");
//Etapas Procesales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/etapasprocesales/EtapasprocesalesDAO.Class.php");
//Imputados Exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosexhortos/ImputadosexhortosDAO.Class.php");
//Consignaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consignaciones/ConsignacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consignaciones/ConsignacionesDAO.Class.php");
//Exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consignaciones/ConsignacionesDAO.Class.php");
//Domicilios Imputados Carpets
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
//Bitacora movimientos
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

class DomiciliosimputadoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto){
        $DomiciliosimputadoscarpetasDto->setidDomicilioImputadoCarpeta(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta()))));
        $DomiciliosimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getidImputadoCarpeta()))));
        $DomiciliosimputadoscarpetasDto->setDomicilioProcesal(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getDomicilioProcesal()))));
        $DomiciliosimputadoscarpetasDto->setcvePais(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getcvePais()))));
        $DomiciliosimputadoscarpetasDto->setcveEstado(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getcveEstado()))));
        $DomiciliosimputadoscarpetasDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getcveMunicipio()))));
        $DomiciliosimputadoscarpetasDto->setdireccion(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getdireccion()))));
        $DomiciliosimputadoscarpetasDto->setcolonia(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getcolonia()))));
        $DomiciliosimputadoscarpetasDto->setnumInterior(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getnumInterior()))));
        $DomiciliosimputadoscarpetasDto->setnumExterior(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getnumExterior()))));
        $DomiciliosimputadoscarpetasDto->setcp(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getcp()))));
        $DomiciliosimputadoscarpetasDto->setlatitud(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getlatitud()))));
        $DomiciliosimputadoscarpetasDto->setlongitud(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getlongitud()))));
        $DomiciliosimputadoscarpetasDto->setrecidenciaHabitual(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getrecidenciaHabitual()))));
        $DomiciliosimputadoscarpetasDto->setestado(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getestado()))));
        $DomiciliosimputadoscarpetasDto->setmunicipio(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getmunicipio()))));
        $DomiciliosimputadoscarpetasDto->setcveConvivencia(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getcveConvivencia()))));
        $DomiciliosimputadoscarpetasDto->setcveTipoDeVivienda(strtoupper(str_ireplace("'","",trim($DomiciliosimputadoscarpetasDto->getcveTipoDeVivienda()))));
        return $DomiciliosimputadoscarpetasDto;
    }
    public function selectDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto,$proveedor=null){
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto,$proveedor);
        return $DomiciliosimputadoscarpetasDto;
    }
    public function insertDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto,$proveedor=null){
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasDao->insertDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto,$proveedor);
        return $DomiciliosimputadoscarpetasDto;
    }
    
    public function agregarDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto,$proveedor=null){
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $domiciliosimputadoscarpetasDto = $this->validarDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);

        if (!$validacion->text(1, 3, (int) $domiciliosimputadoscarpetasDto->getCvePais())) {
            if ($domiciliosimputadoscarpetasDto->getCvePais() <= 0) {
                $msg[] = array("El pais no puede estar en blanco en la posicion:" . $count);
                $error = true;
            }
        }

        if ($domiciliosimputadoscarpetasDto->getCvePais() == 119) {
            if (!$validacion->num(0, 5, (int) $domiciliosimputadoscarpetasDto->getCveEstado())) {
                if ($domiciliosimputadoscarpetasDto->getEstado() <= 0) {
                    $msg[] = array("El estado requerido en la direccion en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->num(0, 5, (int) $domiciliosimputadoscarpetasDto->getMunicipio())) {
                if ($domiciliosimputadoscarpetasDto->getCveMunicipio() <= 0) {
                    $msg[] = array("El municipio es requerido en la direccion posicion:" . $count);
                    $error = true;
                }
            }
        } else {
            if (!$validacion->between(1, 200, (string) $domiciliosimputadoscarpetasDto->getEstado())) {
                if ($domiciliosimputadoscarpetasDto->getEstado() == "") {
                    $msg[] = array("El estado es requerido en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->between(1, 200, (string) $domiciliosimputadoscarpetasDto->getMunicipio())) {
                if ($domiciliosimputadoscarpetasDto->getMunicipio() == "") {
                    $msg[] = array("El municipio es requerido en la posicion:" . $count);
                    $error = true;
                }
            }
        }

        if (!$validacion->text(1, 500, (string) $domiciliosimputadoscarpetasDto->getDireccion())) {
            if ($domiciliosimputadoscarpetasDto->getDireccion() == "") {
                $msg[] = array("La direccion es requerido en la posicion:" . $count);
                $error = true;
            }
        }

        if (!$validacion->text(1, 200, (string) $domiciliosimputadoscarpetasDto->getColonia())) {
            if ($domiciliosimputadoscarpetasDto->getColonia() == "") {
                $msg[] = array("La colonia es requerido en la posicion:" . $count);
                $error = true;
            }
        }

//        if ($domiciliosimputadoscarpetasDto->getNumInterior() != "") {
//            if (!$validacion->textNum(1, 10, (string) $domiciliosimputadoscarpetasDto->getNumInterior())) {
//                $msg[] = array("El num interior es requerido en la posicion:" . $count);
//                $error = true;
//            }
//        }
//
//        if ($domiciliosimputadoscarpetasDto->getNumExterior() != "") {
//            if (!$validacion->textNum(1, 10, (string) $domiciliosimputadoscarpetasDto->getNumExterior())) {
//                $msg[] = array("El num exterior es requerido en la posicion:" . $count);
//                $error = true;
//            }
//        }

        if ($domiciliosimputadoscarpetasDto->getCp() != "") {
            if ( (int)strlen($domiciliosimputadoscarpetasDto->getCp()) < 5 ) {
                $msg[] = array("El Codigo postal debe contener 5 caracteres");
                $error = true;
            } else if (!$validacion->textNum(1, 5, (string) $domiciliosimputadoscarpetasDto->getCp())) {
                $msg[] = array("El Codigo postal es requerido en la posicion:" . $count);
                $error = true;
            }
        } 
//        else {
//            $msg[] = array("El Codigo postal es requerido en la posicion:" . $count);
//            $error = true;
//        }

        if (!$validacion->textNum(1, 1, (string) $domiciliosimputadoscarpetasDto->getRecidenciaHabitual())) {
            if ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() == "") {
                $msg[] = array("Se debe residencia habitual (S o N) en la posicion:" . $count);
                $error = true;
            }
        }
        if (!$validacion->textNum(1, 1, (string) $domiciliosimputadoscarpetasDto->getDomicilioProcesal())) {
            if ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() == "") {
                $msg[] = array("Se debe indicar si es domiclio procesal (S o N) en la posicion:" . $count);
                $error = true;
            }
        }
        if (!$validacion->text(1, 3, (int) $domiciliosimputadoscarpetasDto->getCveTipoDeVivienda())) {
            if ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() <= 0) {
                $msg[] = array("Se debe de indicar el tipo de vivienda en la posicion:" . $count);
                $error = true;
            }
        }
        if (!$validacion->text(1, 3, (int) $domiciliosimputadoscarpetasDto->getCveConvivencia())) {
            if ($domiciliosimputadoscarpetasDto->getCveConvivencia() <= 0) {
                $msg[] = array("Se debe de indicar con quien vive en el domicilio en la posicion:" . $count);
                $error = true;
            }
        }
        if (!$error) {
            $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
            $domiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasDao->insertDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, $proveedor);
            if ($domiciliosimputadoscarpetasDto != "") {
                $resultado = array(
                    "idDomicilioImputadoCarpeta" => $domiciliosimputadoscarpetasDto[0]->getIdDomicilioImputadoCarpeta(),
                    "idImputadoCarpeta" => $domiciliosimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "DomicilioProcesal" => $domiciliosimputadoscarpetasDto[0]->getDomicilioProcesal(),
                    "cvePais" => $domiciliosimputadoscarpetasDto[0]->getCvePais(),
                    "cveEstado" => $domiciliosimputadoscarpetasDto[0]->getCveEstado(),
                    "cveMunicipio" => $domiciliosimputadoscarpetasDto[0]->getCveMunicipio(),
                    "direccion" => utf8_encode($domiciliosimputadoscarpetasDto[0]->getDireccion()),
                    "colonia" => utf8_encode($domiciliosimputadoscarpetasDto[0]->getColonia()),
                    "numInterior" => $domiciliosimputadoscarpetasDto[0]->getNumInterior(),
                    "numExterior" => $domiciliosimputadoscarpetasDto[0]->getNumExterior(),
                    "cp" => $domiciliosimputadoscarpetasDto[0]->getCp(),
                    "latitud" => $domiciliosimputadoscarpetasDto[0]->getLatitud(),
                    "longitud" => $domiciliosimputadoscarpetasDto[0]->getLongitud(),
                    "recidenciaHabitual" => $domiciliosimputadoscarpetasDto[0]->getRecidenciaHabitual(),
                    "estado" => utf8_encode($domiciliosimputadoscarpetasDto[0]->getEstado()),
                    "municipio" => utf8_encode($domiciliosimputadoscarpetasDto[0]->getMunicipio()),
                    "cveConvivencia" => $domiciliosimputadoscarpetasDto[0]->getCveConvivencia(),
                    "cveTipoVivienda" => $domiciliosimputadoscarpetasDto[0]->getCveTipoDeVivienda(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el domicilio debido a algun error en la transaccion");
                $error = true;
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(171, 'Insercion tbldomiciliosimputadoscarpetas', 'txt', serialize($domiciliosimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion insertar domicilio imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    public function updateDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto,$proveedor=null){
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
        //$tmpDto = new DomiciliosimputadoscarpetasDTO();
        //$tmpDto = $DomiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$DomiciliosimputadoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasDao->updateDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto,$proveedor);
        return $DomiciliosimputadoscarpetasDto;
        //}
        //return "";
    }

    public function modificarDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto,$proveedor=null){
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $domiciliosimputadoscarpetasDto = $this->validarDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);

        if (!$validacion->text(1, 3, (int) $domiciliosimputadoscarpetasDto->getCvePais())) {
            if ($domiciliosimputadoscarpetasDto->getCvePais() <= 0) {
                $msg[] = array("El pais no puede estar en blanco en la posicion:" . $count);
                $error = true;
            }
        }

        if ($domiciliosimputadoscarpetasDto->getCvePais() == 119) {
            if (!$validacion->num(0, 5, (int) $domiciliosimputadoscarpetasDto->getCveEstado())) {
                if ($domiciliosimputadoscarpetasDto->getEstado() <= 0) {
                    $msg[] = array("El estado requerido en la direccion en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->num(0, 5, (int) $domiciliosimputadoscarpetasDto->getMunicipio())) {
                if ($domiciliosimputadoscarpetasDto->getCveMunicipio() <= 0) {
                    $msg[] = array("El municipio es requerido en la direccion posicion:" . $count);
                    $error = true;
                }
            }
        } else {
            if (!$validacion->between(1, 200, (string) $domiciliosimputadoscarpetasDto->getEstado())) {
                if ($domiciliosimputadoscarpetasDto->getEstado() == "") {
                    $msg[] = array("El estado es requerido en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->between(1, 200, (string) $domiciliosimputadoscarpetasDto->getMunicipio())) {
                if ($domiciliosimputadoscarpetasDto->getMunicipio() == "") {
                    $msg[] = array("El municipio es requerido en la posicion:" . $count);
                    $error = true;
                }
            }
        }

        if (!$validacion->text(1, 500, (string) $domiciliosimputadoscarpetasDto->getDireccion())) {
            if ($domiciliosimputadoscarpetasDto->getDireccion() == "") {
                $msg[] = array("La direccion es requerido en la posicion:" . $count);
                $error = true;
            }
        }

        if (!$validacion->text(1, 200, (string) $domiciliosimputadoscarpetasDto->getColonia())) {
            if ($domiciliosimputadoscarpetasDto->getColonia() == "") {
                $msg[] = array("La colonia es requerido en la posicion:" . $count);
                $error = true;
            }
        }

//        if ($domiciliosimputadoscarpetasDto->getNumInterior() != "") {
//            if (!$validacion->textNum(1, 10, (string) $domiciliosimputadoscarpetasDto->getNumInterior())) {
//                $msg[] = array("El num interior es requerido en la posicion:" . $count);
//                $error = true;
//            }
//        }
//
//        if ($domiciliosimputadoscarpetasDto->getNumExterior() != "") {
//            if (!$validacion->textNum(1, 10, (string) $domiciliosimputadoscarpetasDto->getNumExterior())) {
//                $msg[] = array("El num exterior es requerido en la posicion:" . $count);
//                $error = true;
//            }
//        }

        if ($domiciliosimputadoscarpetasDto->getCp() != "") {
            if ( (int)strlen($domiciliosimputadoscarpetasDto->getCp()) < 5 ) {
                $msg[] = array("El Codigo postal debe contener 5 caracteres");
                $error = true;
            } else if (!$validacion->textNum(1, 5, (string) $domiciliosimputadoscarpetasDto->getCp())) {
                $msg[] = array("El Codigo postal es requerido en la posicion:" . $count);
                $error = true;
            }
        } 
//        else {
//            $msg[] = array("El Codigo postal es requerido en la posicion:" . $count);
//            $error = true;
//        }

        if (!$validacion->textNum(1, 1, (string) $domiciliosimputadoscarpetasDto->getRecidenciaHabitual())) {
            if ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() == "") {
                $msg[] = array("Se debe residencia habitual (S o N) en la posicion:" . $count);
                $error = true;
            }
        }
        
        if (!$validacion->textNum(1, 1, (string) $domiciliosimputadoscarpetasDto->getDomicilioProcesal())) {
            if ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() == "") {
                $msg[] = array("Se debe indicar si es domicilio procesal (S o N) en la posicion:" . $count);
                $error = true;
            }
        }

        if (!$validacion->text(1, 3, (int) $domiciliosimputadoscarpetasDto->getCveTipoDeVivienda())) {
            if ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() <= 0) {
                $msg[] = array("Se debe de indicar el tipo de vivienda en la posicion:" . $count);
                $error = true;
            }
        }
        if (!$validacion->text(1, 3, (int) $domiciliosimputadoscarpetasDto->getCveConvivencia())) {
            if ($domiciliosimputadoscarpetasDto->getCveConvivencia() <= 0) {
                $msg[] = array("Se debe de indicar con quien vive en el domicilio en la posicion:" . $count);
                $error = true;
            }
        }
        if (!$error) {
            $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
            $domiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasDao->modificarDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, $proveedor);
            if ($domiciliosimputadoscarpetasDto != "") {
                $resultado = array(
                    "idDomicilioImputadoCarpeta" => $domiciliosimputadoscarpetasDto[0]->getIdDomicilioImputadoCarpeta(),
                    "idImputadoCarpeta" => $domiciliosimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "DomicilioProcesal" => $domiciliosimputadoscarpetasDto[0]->getDomicilioProcesal(),
                    "cvePais" => $domiciliosimputadoscarpetasDto[0]->getCvePais(),
                    "cveEstado" => $domiciliosimputadoscarpetasDto[0]->getCveEstado(),
                    "cveMunicipio" => $domiciliosimputadoscarpetasDto[0]->getCveMunicipio(),
                    "direccion" => utf8_encode($domiciliosimputadoscarpetasDto[0]->getDireccion()),
                    "colonia" => utf8_encode($domiciliosimputadoscarpetasDto[0]->getColonia()),
                    "numInterior" => $domiciliosimputadoscarpetasDto[0]->getNumInterior(),
                    "numExterior" => $domiciliosimputadoscarpetasDto[0]->getNumExterior(),
                    "cp" => $domiciliosimputadoscarpetasDto[0]->getCp(),
                    "latitud" => $domiciliosimputadoscarpetasDto[0]->getLatitud(),
                    "longitud" => $domiciliosimputadoscarpetasDto[0]->getLongitud(),
                    "recidenciaHabitual" => $domiciliosimputadoscarpetasDto[0]->getRecidenciaHabitual(),
                    "estado" => utf8_encode($domiciliosimputadoscarpetasDto[0]->getEstado()),
                    "municipio" => utf8_encode($domiciliosimputadoscarpetasDto[0]->getMunicipio()),
                    "cveConvivencia" => $domiciliosimputadoscarpetasDto[0]->getCveConvivencia(),
                    "cveTipoVivienda" => $domiciliosimputadoscarpetasDto[0]->getCveTipoDeVivienda(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el domicilio debido a algun error en la transaccion");
                $error = true;
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(172, 'Modificacion tbldomiciliosimputadoscarpetas', 'txt', serialize($domiciliosimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion modificacion domicilio imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function deleteDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto,$proveedor=null){
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasDao->deleteDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto,$proveedor);
        return $DomiciliosimputadoscarpetasDto;
    }
    
    public function eliminarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto,$proveedor=null){
        $result = "";
        $DomiciliosimputadoscarpetasDto = $this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $dto = new DomiciliosimputadoscarpetasDTO();
        $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
        $dto->setIdDomicilioImputadoCarpeta($DomiciliosimputadoscarpetasDto->getIdDomicilioImputadoCarpeta());
        $dto = $DomiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($dto);
        $DomiciliosimputadoscarpetasDto->setActivo('N');
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasDao->eliminarDomiciliosImputadosCarpetasByIdImputado($DomiciliosimputadoscarpetasDto, $proveedor);

        if ($DomiciliosimputadoscarpetasDto != "") {
            $result = array(
                "status" => "Ok",
                "totalCount" => "El domicilio se elimino de forma correcta"
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(173, 'Borrado logico tblimputadoscarpetas', 'txt', serialize($dto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion borrado logico domicilio imputado carpetas en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => "No se pudo eliminar el registro");
            $result = ($result);
        }
        echo json_encode($result);
    }
    
 
    /********************* CONSULTA DE GET P�GINAS ***************************************************************/
    public function getPaginasDomicilios($DomiciliosimputadoscarpetasDto="",$param=null){
        //print_r($Imputados).'Imputados---';
        $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
        
        if($param["fechaDesde"]!=""){$fechaInicio = explode("/", $param["fechaDesde"]);}
        if($param["fechaHasta"]!=""){$fechaFinal = explode("/", $param["fechaHasta"]);}
        $cveTipoPersona = $param["cveTipoPersona"];
        
        $campos=" COUNT(ic.idImputadoCarpeta) AS totalCount";
        $orden=" dic ";
        $orden.=" LEFT JOIN tblimputadoscarpetas AS ic ";
        $orden.=" ON ic.idImputadoCarpeta = dic.idImputadoCarpeta    ";
        $orden.=" LEFT JOIN tblcarpetasjudiciales AS cj   ON cj.idCarpetaJudicial = ic.idCarpetaJudicial    ";
        $orden.=" LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=cj.cveJuzgado   ";
        $orden.=" LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = cj.cveTipoCarpeta    ";
        $orden.=" LEFT JOIN tblpaises AS  p  ON p.cvePais = dic.cvePais    ";
        $orden.=" LEFT JOIN tblestados AS e  ";
        $orden.=" ON e.cveEstado = dic.cveEstado   ";
        $orden.=" LEFT JOIN tblmunicipios AS m  ON m.cveMunicipio = dic.cveMunicipio   ";
        $orden.=" WHERE ic.activo = 'S' ";
        if($DomiciliosimputadoscarpetasDto->getCvePais()!='0'){
            $orden.=" AND dic.cvePais=".$DomiciliosimputadoscarpetasDto->getCvePais();
        }       
        if($DomiciliosimputadoscarpetasDto->getCveEstado()!='0'){
            $orden.=" AND dic.cveEstado=".$DomiciliosimputadoscarpetasDto->getCveEstado();
        }
        if($DomiciliosimputadoscarpetasDto->getEstado()!=''){
            $orden.=" AND dic.estado like '%".$DomiciliosimputadoscarpetasDto->getEstado()."%'";
        }        
        if($DomiciliosimputadoscarpetasDto->getCveMunicipio()!='0'){
            $orden.=" AND dic.cveMunicipio=".$DomiciliosimputadoscarpetasDto->getCveMunicipio();
        }
        if($DomiciliosimputadoscarpetasDto->getMunicipio()!=''){
            $orden.=" AND dic.municipio like '%".$DomiciliosimputadoscarpetasDto->getMunicipio()."%'";
        }  
        if($DomiciliosimputadoscarpetasDto->getDireccion()!=''){
            $orden.=" AND (dic.direccion COLLATE utf8_spanish_ci like '%".$DomiciliosimputadoscarpetasDto->getDireccion()."%' OR dic.colonia COLLATE utf8_spanish_ci like '%".$DomiciliosimputadoscarpetasDto->getDireccion()."%') ";
        }               
        $orden.=" UNION all ";
        $orden.=" (";
        $orden.=" SELECT COUNT(iex.idImputadoExhorto) AS totalCount";
        $orden.=" FROM ";
        $orden.=" tbljuzgados AS j ";
        $orden.=" LEFT JOIN tblexhortos exh ";
        $orden.=" ON j.cveJuzgado=exh.cveJuzgado  ";
        $orden.=" LEFT JOIN tblimputadosexhortos AS iex ";
        $orden.=" ON exh.idExhorto = iex.idExhorto  ";
        $orden.=" LEFT JOIN tblpaises AS p  ";
        $orden.=" ON p.cvePais = iex.cvePais  ";
        $orden.=" LEFT JOIN tblestados AS e ";
        $orden.=" ON e.cveEstado = iex.cveEstado  ";
        $orden.=" LEFT JOIN tblmunicipios m ";
        $orden.=" ON m.cveMunicipio = iex.cveMunicipio  ";
        $orden.=" WHERE iex.activo='S' ";
        
        if($DomiciliosimputadoscarpetasDto->getCvePais()!='0'){
            $orden.=" AND iex.cvePais=".$DomiciliosimputadoscarpetasDto->getCvePais();
        }       
        if($DomiciliosimputadoscarpetasDto->getCveEstado()!='0'){
            $orden.=" AND iex.cveEstado=".$DomiciliosimputadoscarpetasDto->getCveEstado();
        }
        if($DomiciliosimputadoscarpetasDto->getEstado()!=''){
            $orden.=" AND iex.estado like '%".$DomiciliosimputadoscarpetasDto->getEstado()."%'";
        }        
        if($DomiciliosimputadoscarpetasDto->getCveMunicipio()!='0'){
            $orden.=" AND iex.cveMunicipio=".$DomiciliosimputadoscarpetasDto->getCveMunicipio();
        }
        if($DomiciliosimputadoscarpetasDto->getMunicipio()!=''){
            $orden.=" AND iex.municipio like '%".$DomiciliosimputadoscarpetasDto->getMunicipio()."%'";
        }  
        if($DomiciliosimputadoscarpetasDto->getDireccion()!=''){
            $orden.=" AND iex.domicilio COLLATE utf8_spanish_ci like '%".$DomiciliosimputadoscarpetasDto->getDireccion()."%'";
        } 
        $orden.=" )";
        $DomiciliosimputadoscarpetasDto=new DomiciliosimputadoscarpetasDTO();//Se mada vac�os

        $param["paginacion"]="false";      
                                                        //selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto,$proveedor = null,$orden="",$param=null,$fields=null)
        $JsonResponse = $DomiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetasPag($DomiciliosimputadoscarpetasDto,null,$orden,null,$campos);
        //var_dump($JsonResponse);
        //$numTot=$JsonResponse; 
        $numTot=0;
            foreach ($JsonResponse as $total)
            {
                $numTot=$numTot+$total["totalCount"];
            } 
        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        //echo $totPages;
        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot . '",';
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

/********************* TERMINO DE CONSULTA DE IMPUTADOS POR DOMICILIO*****************************************************/
  
/********************* CONSULTA DE IMPUTADOS POR DOMICILIO ***************************************************************/
    public function consultarImputadosDomicilio($DomiciliosimputadoscarpetasDto="",$param=null){
        //print_r($DomiciliosimputadoscarpetasDto).'Imputados---';
        $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();

        if($param["fechaDesde"]!=""){$fechaInicio = explode("/", $param["fechaDesde"]);}
        if($param["fechaHasta"]!=""){$fechaFinal = explode("/", $param["fechaHasta"]);}
        $cveTipoPersona = $param["cveTipoPersona"];
        
        $campos=" dic.idDomicilioImputadoCarpeta id,cj.numero, cj.anio, tc.desTipoCarpeta, ic.nombre,ic.paterno, ic.materno, ic.nombreMoral,ic.cveTipoPersona, dic.direccion,dic.colonia, p.desPais, e.desEstado, m.desMunicipio,'CARPETA JUDICIAL' AS TipoOrigen,dic.estado,dic.municipio,dic.cvePais,j.desjuzgado,cj.carpetaInv,cj.nuc ";
        
        $orden=" dic ";
        $orden.=" LEFT JOIN tblimputadoscarpetas AS ic ";
        $orden.=" ON ic.idImputadoCarpeta = dic.idImputadoCarpeta    ";
        $orden.=" LEFT JOIN tblcarpetasjudiciales AS cj   ON cj.idCarpetaJudicial = ic.idCarpetaJudicial    ";
        $orden.=" LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=cj.cveJuzgado   ";
        $orden.=" LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = cj.cveTipoCarpeta    ";
        $orden.=" LEFT JOIN tblpaises AS  p  ON p.cvePais = dic.cvePais    ";
        $orden.=" LEFT JOIN tblestados AS e  ";
        $orden.=" ON e.cveEstado = dic.cveEstado   ";
        $orden.=" LEFT JOIN tblmunicipios AS m  ON m.cveMunicipio = dic.cveMunicipio   ";
        $orden.=" WHERE ic.activo = 'S' ";
        if($DomiciliosimputadoscarpetasDto->getCvePais()!='0'){
            $orden.=" AND dic.cvePais=".$DomiciliosimputadoscarpetasDto->getCvePais();
        }       
        if($DomiciliosimputadoscarpetasDto->getCveEstado()!='0'){
            $orden.=" AND dic.cveEstado=".$DomiciliosimputadoscarpetasDto->getCveEstado();
        }
        if($DomiciliosimputadoscarpetasDto->getEstado()!=''){
            $orden.=" AND dic.estado like '%".$DomiciliosimputadoscarpetasDto->getEstado()."%'";
        }        
        if($DomiciliosimputadoscarpetasDto->getCveMunicipio()!='0'){
            $orden.=" AND dic.cveMunicipio=".$DomiciliosimputadoscarpetasDto->getCveMunicipio();
        }
        if($DomiciliosimputadoscarpetasDto->getMunicipio()!=''){
            $orden.=" AND dic.municipio like '%".$DomiciliosimputadoscarpetasDto->getMunicipio()."%'";
        }  
        if($DomiciliosimputadoscarpetasDto->getDireccion()!=''){
            $orden.=" AND (dic.direccion COLLATE utf8_spanish_ci like '%".$DomiciliosimputadoscarpetasDto->getDireccion()."%' OR dic.colonia COLLATE utf8_spanish_ci like '%".$DomiciliosimputadoscarpetasDto->getDireccion()."%') ";
        }              
        $orden.=" UNION all ";
        $orden.=" (";
        $orden.=" SELECT iex.idImputadoExhorto,exh.numExhorto numero, exh.aniExhorto anio,'NUM EXHORTO' AS desTipoCarpeta, iex.nombre,iex.paterno, iex.materno, iex.nombreMoral,iex.cveTipoPersona, iex.domicilio AS direccion, '' AS colonia, p.desPais, e.desEstado, m.desMunicipio, 'EXHORTO' AS TipoOrigen,iex.estado,iex.municipio,iex.cvePais,j.desjuzgado,' ' As carpetaInv,' ' As nuc ";
        $orden.=" FROM ";
        $orden.=" tbljuzgados AS j ";
        $orden.=" LEFT JOIN tblexhortos exh ";
        $orden.=" ON j.cveJuzgado=exh.cveJuzgado  ";
        $orden.=" LEFT JOIN tblimputadosexhortos AS iex ";
        $orden.=" ON exh.idExhorto = iex.idExhorto  ";
        $orden.=" LEFT JOIN tblpaises AS p  ";
        $orden.=" ON p.cvePais = iex.cvePais  ";
        $orden.=" LEFT JOIN tblestados AS e ";
        $orden.=" ON e.cveEstado = iex.cveEstado  ";
        $orden.=" LEFT JOIN tblmunicipios m ";
        $orden.=" ON m.cveMunicipio = iex.cveMunicipio  ";
        $orden.=" WHERE iex.activo='S' ";
        
        if($DomiciliosimputadoscarpetasDto->getCvePais()!='0'){
            $orden.=" AND iex.cvePais=".$DomiciliosimputadoscarpetasDto->getCvePais();
        }       
        if($DomiciliosimputadoscarpetasDto->getCveEstado()!='0'){
            $orden.=" AND iex.cveEstado=".$DomiciliosimputadoscarpetasDto->getCveEstado();
        }
        if($DomiciliosimputadoscarpetasDto->getEstado()!=''){
            $orden.=" AND iex.estado like '%".$DomiciliosimputadoscarpetasDto->getEstado()."%'";
        }        
        if($DomiciliosimputadoscarpetasDto->getCveMunicipio()!='0'){
            $orden.=" AND iex.cveMunicipio=".$DomiciliosimputadoscarpetasDto->getCveMunicipio();
        }
        if($DomiciliosimputadoscarpetasDto->getMunicipio()!=''){
            $orden.=" AND iex.municipio like '%".$DomiciliosimputadoscarpetasDto->getMunicipio()."%'";
        }  
        if($DomiciliosimputadoscarpetasDto->getDireccion()!=''){
            $orden.=" AND iex.domicilio COLLATE utf8_spanish_ci like '%".$DomiciliosimputadoscarpetasDto->getDireccion()."%'";
        } 
        $orden.=" )";
        
        $DomiciliosimputadoscarpetasDto=new DomiciliosimputadoscarpetasDTO();//Se mada vac�os
                                                                       // selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto,$proveedor = null,$orden="",$param=null,$fields=null)
        //return $DomiciliosimputadoscarpetasDto;//Lo imprimo como prueba
        //echo $campos.'--Camps--';
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetasPag($DomiciliosimputadoscarpetasDto,null,$orden,$param,$campos);
        if($DomiciliosimputadoscarpetasDto!=""){
        $datos=array("estatus"=>"ok","totalCount"=>"","pagina"=>$param["pag"],"total"=>"","mensaje"=>"Consulta exitosa","datos"=>array());
            foreach ($DomiciliosimputadoscarpetasDto as $DomicilioImputado)
            {
                array_push($datos["datos"], $DomicilioImputado);
            }
        }
        else
        {
             $datos=array("estatus"=>"Error","mensaje"=>"SIN RESULTADOS A MOSTRAR");
        }
        return $datos;
    }     

/********************* TERMINO DE CONSULTA DE IMPUTADOS POR DOMICILIO*****************************************************/
/********************* CONSULTA DE UN IMPUTADO POR DOMICILIO ***************************************************************/
    public function consultarUnImputadoDomicilio($DomiciliosimputadoscarpetasDto="",$param=null){
        //var_dump($DomiciliosimputadoscarpetasDto);
        //print_r($Imputados).'Imputados---';
        $DomiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
        $ImputadosexhortosDao = new ImputadosexhortosDAO();
        $ImputadosexhortosDto = new ImputadosexhortosDTO();

        @$tipo=$_POST["tipo"];
        @$direccion= $_POST['direccion'];
        @$cveEstado= $_POST['cveEstado'];
        @$cveMunicipio= $_POST['cveMunicipio'];
        @$idImputadoExhorto=$_POST["idImputadoExhorto"];
        
        if($cveEstado == "0"){$cveEstado="";}
        if($cveMunicipio == "0"){$cveMunicipio="";}

        //Para que no entre en algunode los dos
        if($tipo=='Carpetas')
        {
            $ImputadosexhortosDto->setIdImputadoExhorto('w');
        }
        if($tipo=='Exhortos')
        {
            $ImputadosexhortosDto->setIdImputadoExhorto($idImputadoExhorto);
            $DomiciliosimputadoscarpetasDto->setIdDomicilioImputadoCarpeta('w');
        }
            
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetasPag($DomiciliosimputadoscarpetasDto);
        
        $ImputadosexhortosDto->setDomicilio($direccion);
        $ImputadosexhortosDto->setCveEstado($cveEstado);
        $ImputadosexhortosDto->setCveMunicipio($cveMunicipio);
        $ImputadosexhortosDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto);
        
        if ($DomiciliosimputadoscarpetasDto != "" or $ImputadosexhortosDto!="") {
            $json = "";
            $json .= '{"type":"OK",';
            //$total=count($ImputadoscarpetasDto);
            $total=count($DomiciliosimputadoscarpetasDto)+count($ImputadosexhortosDto);
            $totalCarpetas=count($DomiciliosimputadoscarpetasDto);
            $totalExhortos=count($ImputadosexhortosDto);
            $json .= '"totalCount":' . json_encode($total) . ",";
            $json .= '"data":[';
            $x = 1;
            $y = 1;
            $json .= "{";
           
            $json .= '"ImputadosCarpetas": [';
            
            if($DomiciliosimputadoscarpetasDto!="")
            {    
             foreach ($DomiciliosimputadoscarpetasDto as $DomImputado) {
                $json .= "{";
                $json .= '"idDomicilioImputadoCarpeta":' . json_encode($DomImputado->getIdDomicilioImputadoCarpeta()) . ",";
                if($DomImputado->getDireccion()!=""){
                    $direccion=', '.$DomImputado->getDireccion();
                }else{$direccion="";}
                if ($DomImputado->getCvePais()!= "") {
                    $PaisesDto = new PaisesDTO();
                    $PaisesDao = new PaisesDAO();
                    $PaisesDto->setCvePais($DomImputado->getCvePais());
                    $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                    if($PaisesDto!=""){
                    $pais=$PaisesDto[0]->getDesPais();
                    }else{$pais="";}
                }    
                else{$pais="";}
                
                if ($DomImputado->getCveEstado()!="" and $DomImputado->getCveEstado()!="0" and $DomImputado->getCvePais()=="119") {
                    $EstadosDto = new EstadosDTO();
                    $EstadosDao = new EstadosDAO();
                    $EstadosDto->setCveEstado($DomImputado->getCveEstado());
                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                    if($EstadosDto!=""){
                    $estado=', '.$EstadosDto[0]->getDesEstado();
                    }
                    else{$estado="";}
                }else{$estado=', '.$DomImputado->getEstado();}
                
                //echo $estado."-Estado-";
                
                if ($DomImputado->getCveMunicipio()!="" and $DomImputado->getCveMunicipio()!="0" and $DomImputado->getCvePais()=="119") {
                    $MunicipiosDto = new MunicipiosDTO();
                    $MunicipiosDao = new MunicipiosDAO();
                    $MunicipiosDto->setCveMunicipio($DomImputado->getCveMunicipio());
                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                    if($MunicipiosDto!=""){
                    $municipio=', '.$MunicipiosDto[0]->getDesMunicipio();
                    }else{$municipio="";}
                }else{$municipio=', '.$DomImputado->getMunicipio();}
                
                $domicilio=$pais.$estado.$municipio.$direccion;
                //echo $domicilio.'-Domicilio-';
                
                      
                $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
                $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
                $ImputadoscarpetasDto->setIdImputadoCarpeta($DomImputado->getIdImputadoCarpeta());
                $Imputado = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto);
                
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputado[0]->getIdImputadoCarpeta())) . ",";
                if($Imputado[0]->getCveTipoPersona()==1){
                $json .= '"nombre":' . json_encode(utf8_encode($Imputado[0]->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($Imputado[0]->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($Imputado[0]->getMaterno())) . ",";
                }
                else
                {
                $json .= '"nombre":' . json_encode(utf8_encode($Imputado[0]->getNombreMoral())) . ",";
                $json .='"paterno": "",';
                $json .='"materno": "",';
                }
                $json .= '"rfc":' . json_encode(utf8_encode($Imputado[0]->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($Imputado[0]->getCurp())) . ",";
                $json .= '"alias":' . json_encode(utf8_encode($Imputado[0]->getAlias())) . ",";
                $json .= '"domicilio":' . json_encode(utf8_encode($domicilio)) . ",";

                
                //"fechaDeclaracion": "2015-11-12",
                if($Imputado[0]->getFechaDeclaracion()!=''){
                $tmpFecha = explode('-',$Imputado[0]->getFechaDeclaracion());
                $fechaDeclaracion=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                $json .= '"fechaDeclaracion":' . json_encode($fechaDeclaracion) . ",";
                }else{$json .='"fechaDeclaracion": "-",';}
                
                //"fechaImputacion": "2015-11-12",
                if($Imputado[0]->getFechaImputacion()!=''){
                $tmpFecha = explode('-',$Imputado[0]->getFechaImputacion());
                $fechaImputacion=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                $json .= '"fechaImputacion":' . json_encode($fechaImputacion) . ",";
                }else{$json .='"fechaImputacion": "-",';}
                
                //"fecCierreInv": "2015-11-12"
                if($Imputado[0]->getFecCierreInv()!=''){
                $tmpFecha = explode('-',$Imputado[0]->getFecCierreInv());
                $fecCierreInv=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                $json .= '"fecCierreInv":' . json_encode($fecCierreInv) . ",";
                }else{$json .='"fecCierreInv": "-",';}
                
                //"fechaSobreseimiento": "2015-11-12",------------
                if($Imputado[0]->getFechaSobreseimiento()!=''){
                $tmpFecha = explode('-',$Imputado[0]->getFechaSobreseimiento());
                $fechaSobreseimiento=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                $json .= '"fechaSobreseimiento":' . json_encode($fechaSobreseimiento) . ",";
                }else{$json .='"fechaSobreseimiento": "-",';}

                //"fechaControl": "2015-11-12 09:35:25",
                if($Imputado[0]->getFechaControlDet()!=''){
                $tmpFecha1 = explode(' ',$Imputado[0]->getFechaControlDet());
                $tmpFecha = explode('-',$tmpFecha1[0]);
                $fechaControl=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                $json .= '"fechaControl":' . json_encode($fechaControl) . ",";
                }else{$json .='"fechaControl": "-",';}
                
                //fecTerminoCons": "2015-11-12 09:35:25",
                if($Imputado[0]->getFecTerminoCons()!=''){
                $tmpFecha1 = explode(' ',$Imputado[0]->getFecTerminoCons());
                $tmpFecha = explode('-',$tmpFecha1[0]);
                $fecTerminoCons=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                $json .= '"fecTerminoCons":' . json_encode($fecTerminoCons) . ",";
                }else{$json .='"fecTerminoCons": "-",';}
                
                if($Imputado[0]->getTieneSobreseimiento()=='N'){$sobre='NO';}else{$sobre='SI';}
                $json .= '"tieneSobreseimiento":' . json_encode($sobre) . ",";
                $json .= '"ingresomensual":' . json_encode('$'.$Imputado[0]->getIngresoMensual()) . ",";

                                
                $CarpetaJudicialDto = new CarpetasjudicialesDTO();
                $CarpetaJudicialDao = new CarpetasjudicialesDAO();
                $CarpetaJudicialDto->setIdCarpetaJudicial($Imputado[0]->getidCarpetaJudicial());
                //print_r($CarpetaJudicialDto).'ok';
                $CarpetaJudicialDto = $CarpetaJudicialDao->selectCarpetasjudiciales($CarpetaJudicialDto);
                
                if($CarpetaJudicialDto!="")
                {
                $cveTipoCarpeta=$CarpetaJudicialDto[0]->getCveTipoCarpeta();
                $numero=$CarpetaJudicialDto[0]->getNumero();
                $anio=$CarpetaJudicialDto[0]->getAnio();
                
                $carpetaInv=$CarpetaJudicialDto[0]->getCarpetaInv();
                $nuc=$CarpetaJudicialDto[0]->getNuc();
                $cveJuzgado=$CarpetaJudicialDto[0]->getCveJuzgado();
                $JuzgadosDto = new JuzgadosDTO();
                $JuzgadosDao = new JuzgadosDAO();
                $JuzgadosDto->setCveJuzgado($CarpetaJudicialDto[0]->getCveJuzgado());
                $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                $DesJuzgado=$JuzgadosDto[0]->getDesJuzgado();
                    $TiposCarpetaDto = new TiposcarpetasDTO();
                    $TiposCarpetaDao = new TiposcarpetasDAO();
                    $TiposCarpetaDto->setCveTipoCarpeta($CarpetaJudicialDto[0]->getCveTipoCarpeta());
                    $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
                    if($TiposCarpetaDto!=""){
                    $DesCarpeta=$TiposCarpetaDto[0]->getDesTipoCarpeta();
                    }else{$DesCarpeta="";}
                $Carpeta=$DesCarpeta.' '.$numero.'/'.$anio;
                }else{$Carpeta="";}
                
                $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                $json .= '"CarpetaInv":' . json_encode(utf8_encode($carpetaInv)) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";
                
//                $CarpetaJudicialDto = new CarpetasjudicialesDTO();
//                $CarpetaJudicialDao = new CarpetasjudicialesDAO();
//                $CarpetaJudicialDto->setIdCarpetaJudicial($Imputado[0]->getidCarpetaJudicial());
//                $CarpetaJudicialDto = $CarpetaJudicialDao->selectCarpetasjudiciales($CarpetaJudicialDto);
//                $cveTipoCarpeta=$CarpetaJudicialDto[0]->getCveTipoCarpeta();
//                $numero=$CarpetaJudicialDto[0]->getNumero();
//                $anio=$CarpetaJudicialDto[0]->getAnio();
//                
//                $TiposCarpetaDto = new TiposcarpetasDTO();
//                $TiposCarpetaDao = new TiposcarpetasDAO();
//                $TiposCarpetaDto->setCveTipoCarpeta($CarpetaJudicialDto[0]->getCveTipoCarpeta());
//                $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
//                $DesCarpeta=$TiposCarpetaDto[0]->getDesTipoCarpeta();
//                
//                $Carpeta=$DesCarpeta.' '.$numero.'/'.$anio;
//                $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                
               
                if ($Imputado[0]->getCveOcupacion() != "") {
                    $OcupacionesDto = new OcupacionesDTO();
                    $OcupacionesDao = new OcupacionesDAO();
                    $OcupacionesDto->setCveOcupacion($Imputado[0]->getCveOcupacion());
                    $OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto);
                    $json .= '"desocupacion":' . json_encode(utf8_encode($OcupacionesDto[0]->getDesOcupacion())) . ",";
                }
                else{$json .= '"desocupacion": "",';}
                
                if ($Imputado[0]->getFechaNacimiento() != "") {
                    $tmpFecha = explode('-',$Imputado[0]->getFechaNacimiento());
                    $fechaNacimiento=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                    $json .= '"fechaNacimiento":' . json_encode($fechaNacimiento) . ",";
                    
                }
                else{$json .= '"fechaNacimiento": "",';}
                $json .= '"edad":' . json_encode(utf8_encode($Imputado[0]->getEdad())) . ",";
                
                if ($Imputado[0]->getCvePaisNacimiento() != "") {
                    $PaisesDto = new PaisesDTO();
                    $PaisesDao = new PaisesDAO();
                    $PaisesDto->setCvePais($Imputado[0]->getCvePaisNacimiento());
                    $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                    $json .= '"desPais":' . json_encode(utf8_encode($PaisesDto[0]->getDesPais())) . ",";
                }    
                else{$json .= '"desPais": "",';}
                
                if ($Imputado[0]->getCveEstadoNacimiento()!="" and $Imputado[0]->getCveEstadoNacimiento()!="0") {
                    $EstadosDto = new EstadosDTO();
                    $EstadosDao = new EstadosDAO();
                    $EstadosDto->setCveEstado($Imputado[0]->getCveEstadoNacimiento());
                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                    if($EstadosDto!=""){
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
                    }
                    else{$json .= '"estadoNacimiento": "",';}
                }
                else{$json .= '"estadoNacimiento":' . json_encode(utf8_encode($Imputado[0]->getEstadoNacimiento())) . ",";}
                
                if ($Imputado[0]->getCveMunicipioNacimiento() != "" and $Imputado[0]->getCveMunicipioNacimiento() != "0") {
                    $MunicipiosDto = new MunicipiosDTO();
                    $MunicipiosDao = new MunicipiosDAO();
                    $MunicipiosDto->setCveMunicipio($Imputado[0]->getCveMunicipioNacimiento());
                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                    if($EstadosDto!=""){
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
                    }
                    else{$json .= '"municipioNacimiento": "",';}
                }
                else{$json .= '"municipioNacimiento":' . json_encode(utf8_encode($Imputado[0]->getMunicipioNacimiento())) . ",";}
                
                if ($Imputado[0]->getCveEstadoCivil() != "") {
                    $EstadosCivilesDto = new EstadoscivilesDTO();
                    $EstadosCivilesDao = new EstadoscivilesDAO();
                    $EstadosCivilesDto->setCveEstadoCivil($Imputado[0]->getCveEstadoCivil());
                    $EstadosCivilesDto = $EstadosCivilesDao->selectEstadosciviles($EstadosCivilesDto);
                    $json .= '"desEstadoCivil":' . json_encode(utf8_encode($EstadosCivilesDto[0]->getDesEstadoCivil())) . ",";
                }
                else{$json .= '"desEstadoCivil": "",';}

                if ($Imputado[0]->getCveNivelInstruccion() != "") {
                    $NivelInstruccionesDto = new NivelesinstruccionesDTO();
                    $NivelInstruccionesDao = new NivelesinstruccionesDAO();
                    $NivelInstruccionesDto->setCveNivelInstruccion($Imputado[0]->getCveNivelInstruccion());
                    $NivelInstruccionesDto = $NivelInstruccionesDao->selectNivelesinstrucciones($NivelInstruccionesDto);
                    $json .= '"desNivelInstruccion":' . json_encode(utf8_encode($NivelInstruccionesDto[0]->getDesNivelInstruccion())) . ",";
                }
                else{$json .= '"desNivelInstruccion": "",';}

                if ($Imputado[0]->getCveEspanol() != "") {
                    $EspanolDto = new EspanolDTO();
                    $EspanolDao = new EspanolDAO();
                    $EspanolDto->setCveEspanol($Imputado[0]->getCveEspanol());
                    $EspanolDto = $EspanolDao->selectEspanol($EspanolDto);
                    $json .= '"desEspanol":' . json_encode(utf8_encode($EspanolDto[0]->getDesEspanol())) . ",";
                }
                else{$json .= '"desEspanol": "",';}
                
                if ($Imputado[0]->getCveDialectoIndigena() != "") {
                    $DialectoIndigenaDto = new DialectoindigenaDTO();
                    $DialectoIndigenaDao = new DialectoindigenaDAO();
                    $DialectoIndigenaDto->setCveDialectoIndigena($Imputado[0]->getCveDialectoIndigena());
                    $DialectoIndigenaDto = $DialectoIndigenaDao->selectDialectoindigena($DialectoIndigenaDto);
                    $json .= '"desDialecto":' . json_encode(utf8_encode($DialectoIndigenaDto[0]->getDesDialectoIndigena())) . ",";
                }
                else{$json .= '"desDialecto": "",';}
                
                if ($Imputado[0]->getCveTipoFamiliaLinguistica() != "") {
                    $FamLinDto = new TipofamilialinguisticaDTO();
                    $FamLinDao = new TipofamilialinguisticaDAO();
                    $FamLinDto->setCveTipoFamiliaLinguistica($Imputado[0]->getCveTipoFamiliaLinguistica());
                    $FamLinDto = $FamLinDao->selectTipofamilialinguistica($FamLinDto);
                    $json .= '"desFamLin":' . json_encode(utf8_encode('-'.$FamLinDto[0]->getDesTipoFamiliaLinguistica())) . ",";
                }
                else{$json .= '"desFamLin": "",';}                

                if ($Imputado[0]->getCveInterprete() != "") {
                    $InterpreteDto = new InterpretesDTO();
                    $InterpreteDao = new InterpretesDAO();
                    $InterpreteDto->setCveInterprete($Imputado[0]->getCveInterprete());
                    $InterpreteDto = $InterpreteDao->selectInterpretes($InterpreteDto);
                    $json .= '"interprete":' . json_encode(utf8_encode($InterpreteDto[0]->getDesInterprete())) . ",";
                }
                else{$json .= '"interprete": "",';}                      
                
                if ($Imputado[0]->getCveEstadoPsicofisico() != "") {
                    $EdoPsicofisicoDto = new EstadospsicofisicosDTO();
                    $EdoPsicofisicoDao = new EstadospsicofisicosDAO();
                    $EdoPsicofisicoDto->setCveEstadoPsicofisico($Imputado[0]->getCveEstadoPsicofisico());
                    $EdoPsicofisicoDto = $EdoPsicofisicoDao->selectEstadospsicofisicos($EdoPsicofisicoDto);
                    $json .= '"edopsico":' . json_encode(utf8_encode($EdoPsicofisicoDto[0]->getDesEstadoPsicofisico())) . ",";
                }
                else{$json .= '"edopsico": "",';}                
 
                if ($Imputado[0]->getCveGrupoEdnico() != "") {
                    $GrupoEtnicoDto = new GruposednicosDTO();
                    $GrupoEtnicoDao = new GruposednicosDAO();
                    $GrupoEtnicoDto->setCveGrupoEdnico($Imputado[0]->getCveGrupoEdnico());
                    $GrupoEtnicoDto = $GrupoEtnicoDao->selectGruposednicos($GrupoEtnicoDto);
                    $json .= '"grupoetnico":' . json_encode(utf8_encode($GrupoEtnicoDto[0]->getDesGrupoEdnico())). ",";
                }
                else{$json .= '"grupoetnico": "",';}  
                
                if ($Imputado[0]->getCveTipoDetencion() != "") {
                    $TiposDetencionesDto = new TiposdetencionesDTO();
                    $TiposDetencionesDao = new TiposdetencionesDAO();
                    $TiposDetencionesDto->setCveTipoDetencion($Imputado[0]->getCveTipoDetencion());
                    $TiposDetencionesDto = $TiposDetencionesDao->selectTiposdetenciones($TiposDetencionesDto);
                    $json .= '"tipodetencion":' . json_encode(utf8_encode($TiposDetencionesDto[0]->getDesTipoDetencion())). ",";
                }
                else{$json .= '"tipodetencion": "",';}  
                
                if ($Imputado[0]->getCveTipoReincidencia() != "") {
                    $ReincidenciasDto = new TiposreincidenciasDTO();
                    $ReincidenciasDao = new TiposreincidenciasDAO();
                    $ReincidenciasDto->setCveTipoReincidencia($Imputado[0]->getCveTipoReincidencia());
                    $ReincidenciasDto = $ReincidenciasDao->selectTiposreincidencias($ReincidenciasDto);
                    $json .= '"reincidencia":' . json_encode(utf8_encode($ReincidenciasDto[0]->getDesTipoReincidencia())). ",";
                }
                else{$json .= '"reincidencia": "",';}  
                                                
                if ($Imputado[0]->getCveCereso() != "") {
                    $CeresoDto = new CeresosDTO();
                    $CeresoDao = new CeresosDAO();
                    $CeresoDto->setCveCereso($Imputado[0]->getCveCereso());
                    $CeresoDto = $CeresoDao->selectCeresos($CeresoDto);
                    $json .= '"cereso":' . json_encode(utf8_encode($CeresoDto[0]->getDesCereso())). ",";
                }
                else{$json .= '"cereso": "",';}               
                                                                
                if ($Imputado[0]->getCveEtapaProcesal() != "") {
                    $EtapaProcesalDto = new EtapasprocesalesDTO();
                    $EtapaProcesalDao = new EtapasprocesalesDAO();
                    $EtapaProcesalDto->setCveEtapaProcesal($Imputado[0]->getCveEtapaProcesal());
                    $EtapaProcesalDto = $EtapaProcesalDao->selectEtapasprocesales($EtapaProcesalDto);
                    $json .= '"EtapaProcesal":' . json_encode(utf8_encode($EtapaProcesalDto[0]->getDesEtapaProcesal()));
                }
                else{$json .= '"EtapaProcesal": ""';}  

                
                $json .= "}";
                $y++;
                if ($y <= count($DomiciliosimputadoscarpetasDto)) {
                    $json .= ",";
                }
            }
            }
            $json .= '],';
           
                       
            $json .= '"ImputadosExhortos": [';
            
            if($ImputadosexhortosDto!="")
            {
                foreach ($ImputadosexhortosDto as $Imputado) {
                $json .= "{";
                $json .= '"idImputadoExhorto":' . json_encode(utf8_encode($Imputado->getIdImputadoExhorto())) . ",";
                
                if($Imputado->getCveTipoPersona()==1){
                $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                }
                else
                {
                $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombreMoral())) . ",";
                $json .='"paterno": "",';
                $json .='"materno": "",';
                }
                
                
                $json .= '"alias":' . json_encode(utf8_encode($Imputado->getAlias())) . ",";
                $json .= '"telefono":' . json_encode(utf8_encode($Imputado->getTelefono())) . ",";
                if($Imputado->getDomicilio()!=""){
                $direccion=', '.$Imputado->getDomicilio();
                }else{$direccion="";}      
                if ($Imputado->getCvePais() != "") {
                    $PaisesDto = new PaisesDTO();
                    $PaisesDao = new PaisesDAO();
                    $PaisesDto->setCvePais($Imputado->getCvePais());
                    $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                    if($PaisesDto!=""){
                    $pais=$PaisesDto[0]->getDesPais();
                    }else{$pais="";}
                }    
                else{$pais="";}
                
                if ($Imputado->getCveEstado() != "" and $Imputado->getCveEstado()!="0" and $Imputado->getCvePais()== "119") {
                    $EstadosDto = new EstadosDTO();
                    $EstadosDao = new EstadosDAO();
                    $EstadosDto->setCveEstado($Imputado->getCveEstado());
                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                    if($EstadosDto!=""){
                    $estado=', '.$EstadosDto[0]->getDesEstado().', ';
                    }
                    else{$estado="";}
                }else{$estado=', '.$Imputado->getEstado().', ';}
                
                if ($Imputado->getCveMunicipio() and $Imputado->getCveMunicipio()!="0"  and $Imputado->getCvePais()== "119") {
                    $MunicipiosDto = new MunicipiosDTO();
                    $MunicipiosDao = new MunicipiosDAO();
                    $MunicipiosDto->setCveMunicipio($Imputado->getCveMunicipio());
                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                    if($MunicipiosDto!=""){
                    $municipio=$MunicipiosDto[0]->getDesMunicipio();
                    }
                    else{$municipio="";}
                }else{$municipio=$Imputado->getMunicipio();}
                
                $domicilio=$pais.$estado.$municipio.$direccion;
                
                $json .= '"domicilio":' . json_encode($domicilio) . ",";
                $json .= '"idExhortoImputado":' . json_encode(utf8_encode($Imputado->getIdExhorto())) . ",";
                
                $ExhortosDto = new ExhortosDTO();
                $ExhortosDao = new ExhortosDAO();
                $ExhortosDto->setIdExhorto($Imputado->getIdExhorto());
                $ExhortosDto = $ExhortosDao->selectExhortos($ExhortosDto);
                
                $numero=$ExhortosDto[0]->getNumExhorto();
                $anio=$ExhortosDto[0]->getAniExhorto();
                $nuc=$ExhortosDto[0]->getNuc();
                $CarpetaInv=$ExhortosDto[0]->getCarpetaInv();
                $Carpeta='Exhorto'.' '.$numero.'/'.$anio;              
                
                $json .= '"idExhorto":' . json_encode(utf8_encode($ExhortosDto[0]->getIdExhorto())) . ",";
                $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                $json .= '"CarpetaInv":' . json_encode(utf8_encode($CarpetaInv)) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                
                $JuzgadosDto = new JuzgadosDTO();
                $JuzgadosDao = new JuzgadosDAO();
                $JuzgadosDto->setCveJuzgado($ExhortosDto[0]->getCveJuzgado());
                $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                $DesJuzgado=$JuzgadosDto[0]->getDesJuzgado();
                $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";
                
//                $TiposCarpetaDto = new TiposcarpetasDTO();
//                $TiposCarpetaDao = new TiposcarpetasDAO();
//                $TiposCarpetaDto->setCveTipoCarpeta($ExhortosDto[0]->getCveTipoCarpeta());
//                $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
//                $DesCarpeta=$TiposCarpetaDto[0]->getDesTipoCarpeta();
//                $numero=$ExhortosDto[0]->getNumero();
//                $anio=$ExhortosDto[0]->getAnio();
//                $Carpeta=$DesCarpeta.' '.$numero.'/'.$anio;              
//                $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                
                //$json .= '"cveConsignacion":' . json_encode(utf8_encode($Imputado->getCveConsignacion())) . ",";
                //$json .= '"cveEstado":' . json_encode(utf8_encode($Imputado->getCveEstado())) . ",";
                //$json .= '"cveMunicipio":' . json_encode(utf8_encode($Imputado->getCveMunicipio())) . ",";
                //$json .= '"cveCereso":' . json_encode(utf8_encode($Imputado->getCveCereso())) . ",";
                
                if ($Imputado->getCveEstado() != "") {
                    $EstadosDto = new EstadosDTO();
                    $EstadosDao = new EstadosDAO();
                    $EstadosDto->setCveEstado($Imputado->getCveEstado());
                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                    $json .= '"estado":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
                }
                else{$json .= '"estado": "",';}
                
                if ($Imputado->getCveMunicipio() != "") {
                    $MunicipiosDto = new MunicipiosDTO();
                    $MunicipiosDao = new MunicipiosDAO();
                    $MunicipiosDto->setCveMunicipio($Imputado->getCveMunicipio());
                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                    $json .= '"municipio":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
                }
                else{$json .= '"municipio": "",';}
                                                
                if ($Imputado->getCveCereso() != "") {
                    $CeresoDto = new CeresosDTO();
                    $CeresoDao = new CeresosDAO();
                    $CeresoDto->setCveCereso($Imputado->getCveCereso());
                    $CeresoDto = $CeresoDao->selectCeresos($CeresoDto);
                    $json .= '"cereso":' . json_encode(utf8_encode($CeresoDto[0]->getDesCereso())). ",";
                }
                else{$json .= '"cereso": "",';}               
                                                                
                if ($Imputado->getCveConsignacion() != "") {
                    $ConsignacionesDto = new ConsignacionesDTO();
                    $ConsignacionesDao = new ConsignacionesDAO();
                    $ConsignacionesDto->setCveConsignacion($Imputado->getCveConsignacion());
                    $ConsignacionesDto = $ConsignacionesDao->selectConsignaciones($ConsignacionesDto);
                    $json .= '"consignacion":' . json_encode(utf8_encode($ConsignacionesDto[0]->getDesConsignacion()));
                }
                else{$json .= '"consignacion": ""';}  

                
                $json .= "}";
                $x++;
                if ($x <= count($ImputadosexhortosDto)) {
                    $json .= ",";
                }
            }
            }
            
            $json .= '],';
            //$json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            //$json .= '"totalImputadosCarpetas":"' . count($ImputadoscarpetasDto) . '",';
            $json .= '"total":"' . count($DomiciliosimputadoscarpetasDto) . '",';
            $json .= '"totalImputadosExhortos":"' . count($ImputadosexhortosDto) . '"';
            $json .= "}]}";//Agregu� }]

           // echo"Json:---";
            //echo $json;
            
            return $json;
        } else {
            return "";
        }
    }     

/********************* TERMINO DE CONSULTA DE UN IMPUTADO POR DOMICILIO*****************************************************/
  
    
}
?>
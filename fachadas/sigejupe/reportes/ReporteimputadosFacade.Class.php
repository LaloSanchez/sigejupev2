<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
//Reporte imputados
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteimputadosController.Class.php");
//carpetas judiciales
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
//Imputados carpetas
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
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
//Grado de participacion
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gradoparticipaciones/GradoparticipacionesDTO.Class.php");

    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ReporteimputadosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteGlobalImputados($carpetasJudicialesDto, $consultarPor, $param) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $reporteGlobalImputados = $reporteImputadosCOntroller->reporteGlobalImputados($carpetasJudicialesDto, $consultarPor, $param);
            return $reporteGlobalImputados;
        }

        public function reporteImputadosRegion($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $consultarPor, $param) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $reporteImputados = $reporteImputadosCOntroller->reporteImputadosRegion($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $consultarPor, $param);
            return $reporteImputados;
        }

        public function reporteImputadosDistrito($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $regionesDto, $consultarPor, $param) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $reporteImputados = $reporteImputadosCOntroller->reporteImputadosDistrito($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $regionesDto, $consultarPor, $param);
            return $reporteImputados;
        }

        public function reporteImputadosJuzgado($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $distritosDto, $consultarPor, $param) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $reporteImputados = $reporteImputadosCOntroller->reporteImputadosJuzgado($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $distritosDto, $consultarPor, $param);
            return $reporteImputados;
        }

        public function reporteImputadosGeneralDesglosado($carpetasJudicialesDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $juzgadosDto, $param, $consultarPor) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $reporteImputados = $reporteImputadosCOntroller->reporteImputadosGeneralDesglosado($carpetasJudicialesDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $juzgadosDto, $param, $consultarPor);
            return $reporteImputados;
        }

        public function reporteImputadosDesglose($carpetasJudicialesDto, $juzgadosDto, $desglosado) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $reporteImputados = $reporteImputadosCOntroller->reporteImputadosDesglose($carpetasJudicialesDto, $juzgadosDto, $desglosado);
            return $reporteImputados;
        }

        public function reporteImputadosNacionalidad($imputadoscarpetasDto, $tipoJuzgadosDto, $param) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $reporteImputadosNacionalidad = $reporteImputadosCOntroller->reporteImputadosNacionalidad($imputadoscarpetasDto, $tipoJuzgadosDto, $param);
            return $reporteImputadosNacionalidad;
        }

        public function getPaginasImputadosNacionalidad($imputadoscarpetasDto, $tipoJuzgadosDto, $numeroRegistros) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $numeroPaginas = $reporteImputadosCOntroller->getPaginasImputadosNacionalidad($imputadoscarpetasDto, $tipoJuzgadosDto, $numeroRegistros);
            return $numeroPaginas;
        }

        public function datosImputado($imputadoscarpetasDto) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $datosImputado = $reporteImputadosCOntroller->datosImputado($imputadoscarpetasDto);
            return $datosImputado;
        }

        public function paginasImputadosDesglose($carpetasJudicialesDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $juzgadosDto, $param, $consultarPor) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $datosImputado = $reporteImputadosCOntroller->paginasImputadosDesglose($carpetasJudicialesDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $juzgadosDto, $param, $consultarPor);
            return $datosImputado;
        }

        public function getPaginas($carpetasJudicialesDto, $consultarPor, $param) {
            $reporteImputadosCOntroller = new ReporteimputadosController();
            $datosImputado = $reporteImputadosCOntroller->getPaginas($carpetasJudicialesDto, $consultarPor, $param);
            return $datosImputado;
        }

    }

    @$idImputadoCarpeta = $_POST["idImputadoCarpeta"];
    @$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$detenido = $_POST["detenido"];
    @$nombre = $_POST["nombre"];
    @$paterno = $_POST["paterno"];
    @$materno = $_POST["materno"];
    @$rfc = $_POST["rfc"];
    @$curp = $_POST["curp"];
    @$cveTipoDetencion = $_POST["cveTipoDetencion"];
    @$cveGenero = $_POST["cveGenero"];
    @$alias = $_POST["alias"];
    @$fechaDeclaracion = $_POST["fechaDeclaracion"];
    @$cvePaisNacimiento = $_POST["cvePais"];
    @$cveEstadoNacimiento = $_POST["cveEstadoNacimiento"];
    @$cveMunicipioNacimiento = $_POST["cveMunicipioNacimiento"];
    @$fechaNacimiento = $_POST["fechaNacimiento"];
    @$edad = $_POST["edad"];
    @$cveTipoPersona = $_POST["cveTipoPersona"];
    @$nombreMoral = $_POST["nombreMoral"];
    @$cveNivelInstruccion = $_POST["cveNivelInstruccion"];
    @$cveEstadoCivil = $_POST["cveEstadoCivil"];
    @$cveEspanol = $_POST["cveEspanol"];
    @$cveAlfabetismo = $_POST["cveAlfabetismo"];
    @$cveDialectoIndigena = $_POST["cveDialectoIndigena"];
    @$cveTipoFamiliaLinguistica = $_POST["cveTipoFamiliaLinguistica"];
    @$cveOcupacion = $_POST["cveOcupacion"];
    @$cveInterprete = $_POST["cveInterprete"];
    @$cveEstadoPsicofisico = $_POST["cveEstadoPsicofisico"];
    @$fechaImputacion = $_POST["fechaImputacion"];
    @$fechaControlDet = $_POST["fechaControlDet"];

    @$fecTerminoCons = $_POST["fecTerminoCons"];
    @$fecCierreInv = $_POST["fecCierreInv"];
    @$estadoNacimiento = $_POST["estadoNacimiento"];
    @$municipioNacimiento = $_POST["municipioNacimiento"];
    @$relacionMoral = $_POST["relacionMoral"];
    @$personaMoral = $_POST["personaMoral"];
//@$cveNacionalidad=$_POST["cveNacionalidad"];
    @$cveCereso = $_POST["cveCereso"];
    @$cveEtapaProcesal = $_POST["cveEtapaProcesal"];
    @$cveTipoReincidencia = $_POST["cveTipoReincidencia"];
    @$ingresoMensual = $_POST["ingresoMensual"];
    @$cveGrupoEdnico = $_POST["cveGrupoEdnico"];
    @$tieneSobreseimiento = $_POST["tieneSobreseimiento"];
    @$fechaSobreseimiento = $_POST["fechaSobreseimiento"];
    @$accion = $_POST["accion"];


    $imputadoscarpetasDto = new ImputadoscarpetasDTO();
    $reporteImputadosFacade = new ReporteimputadosFacade();

//Imputados
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
    $imputadoscarpetasDto->setCveGenero($cveGenero);
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
//tipo juzgados
    @$cveTipoJuzgado = $_POST["cveTipoJuzgado"];
    $tipoJuzgadosDto = new TiposjuzgadosDTO();
    $tipoJuzgadosDto->setCveTipoJuzgado($cveTipoJuzgado);
//carpetas judiciales
    @$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
    @$cveEtapaProcesal = $_POST["cveEtapaprocesal"];
    @$cveConsignacion = $_POST["cveConsignacion"];
    @$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
    @$numero = $_POST["numero"];
    @$anio = $_POST["anio"];
    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
    $carpetasJudicialesDto->setIdCarpetaJudicial($idCarpetaJudicial);
    $carpetasJudicialesDto->setCveEtapaProcesal($cveEtapaProcesal);
    $carpetasJudicialesDto->setCveConsignacion($cveConsignacion);
    $carpetasJudicialesDto->setCveTipoCarpeta($cveTipoCarpeta);
    $carpetasJudicialesDto->setNumero($numero);
    $carpetasJudicialesDto->setAnio($anio);

//Regiones
    @$cveRegion = $_POST["cveRegion"];
    $regionesDto = new RegionesDTO();
    $regionesDto->setCveRegion($cveRegion);

//Distritos
    @$cveDistrito = $_POST["cveDistrito"];
    $distritosDto = new DistritosDTO();
    $distritosDto->setCveDistrito($cveDistrito);
    $distritosDto->setCveRegion($cveRegion);

//Juzgados
    @$cveJuzgado = $_POST["cveJuzgado"];
    $juzgadosDto = new JuzgadosDTO();
    $juzgadosDto->setCveJuzgado($cveJuzgado);
    $juzgadosDto->setCveRegion($cveRegion);
    $juzgadosDto->setCveDistrito($cveDistrito);
    $juzgadosDto->setCveTipojuzgado($cveTipoJuzgado);
    @$consultarPor = $_POST["consultarPor"];

//Grado participacion
    @$cveGradoParticipacion = $_POST["cveGradoParticipacion"];
    $gradoParticipacionDto = new GradoparticipacionesDTO();
    $gradoParticipacionDto->setCveGradoParticipacion($cveGradoParticipacion);
//Domicilios
    @$cveConvivencia = $_POST["cveConvivencia"];
    $domiciliosImputadosDto = new DomiciliosimputadoscarpetasDTO();
    $domiciliosImputadosDto->setCveConvivencia($cveConvivencia);
    @$param["cveDelito"] = $_POST["cveDelito"];
    @$param["cveMes"] = $_POST["cveMes"];
    @$param["fechaInicial"] = $_POST["fechaInicial"];
    @$param["fechaFinal"] = $_POST["fechaFinal"];
    @$param["cveTipoJuzgado"] = $_POST["cveTipoJuzgado"];
    @$param["desgloseGenero"] = $_POST["desgloseGenero"];
    @$param["edadMinima"] = $_POST["edadMinima"];
    @$param["edadMaxima"] = $_POST["edadMaxima"];
    @$param["rangoEdad"] = $_POST["rangoEdad"];
    @$param["rangoDelitos"] = $_POST["rangoDelitos"];
    @$param["consultarSentenciados"] = $_POST["consultarSentenciados"];
    @$param["cveTipoSentencia"] = $_POST["cveTipoSentencia"];
    @$param["edad"] = $_POST["edad"];
    @$param["cveResidenciaHabitual"] = $_POST["cveResidenciaHabitual"];
    @$param["multa"] = $_POST["multa"];
    @$param["sancion"] = $_POST["sancion"];
    @$param["tiempoPrision"] = $_POST["tiempoPrision"];
    @$param["cveConclusion"] = $_POST["cveConclusion"];
    @$param["numeroPenas"] = $_POST["numeroPenas"];
    @$param["cveTipoPersona"] = $_POST["cveTipoPersona"];
    @$param["mostrarTipoViolencia"] = $_POST["mostrarTipoViolencia"];
    @$param["mostrarModalidaViolencia"] = $_POST["mostrarModalidaViolencia"];
    @$param["cveTipoViolencia"] = $_POST["cveTipoViolencia"];
    @$param["cveModalidadViolencia"] = $_POST["cveModalidadViolencia"];

    if ($accion == "reportePorTipoJuzgado") {
        @$registros = $_POST["registrosPorPagina"];
        @$pagina = $_POST["pagina"];
        @$desglosado = $_POST['desglosado'];
        @$param = array("pagina" => $pagina, "registros" => $registros, "desglosado" => $desglosado);
        $reporteImputados = $reporteImputadosFacade->reporteImputadosNacionalidad($imputadoscarpetasDto, $tipoJuzgadosDto, $param);
        echo $reporteImputados;
    } else if ($accion == "getPaginasImputadosPais") {
        @$numeroRegistros = $_POST["numeroRegistrosPagina"];
        @$desglosado = $_POST['desglosado'];
        $paginas = $reporteImputadosFacade->getPaginasImputadosNacionalidad($imputadoscarpetasDto, $tipoJuzgadosDto, $numeroRegistros, $desglosado);
        echo $paginas;
    } else if ($accion == "datosImputado") {
        $imputadoscarpetasDto = $reporteImputadosFacade->datosImputado($imputadoscarpetasDto);
        echo $imputadoscarpetasDto;
    } else if ($accion == "consultaGeneralImputados") {
        @$param["pag"] = $_POST["pagina"];
        @$param["cantxPag"] = $_POST["registrosPorPagina"];
        $carpetasJudicialesDto = $reporteImputadosFacade->reporteGlobalImputados($carpetasJudicialesDto, $consultarPor, $param);
        echo $carpetasJudicialesDto;
    } else if ($accion == "consultaImputadosRegion") {
        $carpetasJudicialesDto = $reporteImputadosFacade->reporteImputadosRegion($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $consultarPor, $param);
        echo $carpetasJudicialesDto;
    } else if ($accion == "consultaImputadosDistrito") {
        $carpetasJudicialesDto = $reporteImputadosFacade->reporteImputadosDistrito($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $regionesDto, $consultarPor, $param);
        echo $carpetasJudicialesDto;
    } else if ($accion == "consultaImputadosJuzgado") {
        $carpetasJudicialesDto = $reporteImputadosFacade->reporteImputadosJuzgado($carpetasJudicialesDto, $juzgadosDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $distritosDto, $consultarPor, $param);
        echo $carpetasJudicialesDto;
    } else if ($accion == "consultaImputadosGeneralDesglosado") {
        @$param["pag"] = $_POST["pagina"];
        @$param["cantxPag"] = $_POST["registrosPorPagina"];
        $carpetasJudicialesDto = $reporteImputadosFacade->reporteImputadosGeneralDesglosado($carpetasJudicialesDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $juzgadosDto, $param, $consultarPor);
        echo $carpetasJudicialesDto;
    } else if ($accion == "consultaImputadosDesglose") {
        @$desglosado = $_POST['desglosado'];
        $carpetasJudicialesDto = $reporteImputadosFacade->reporteImputadosDesglose($carpetasJudicialesDto, $juzgadosDto, $desglosado);
        echo $carpetasJudicialesDto;
    } else if ($accion == "getPaginasImputadosDesglosado") {
        @$param["pag"] = $_POST["pagina"];
        @$param["cantxPag"] = $_POST["cantidadRegistros"];
        $paginas = $reporteImputadosFacade->paginasImputadosDesglose($carpetasJudicialesDto, $imputadoscarpetasDto, $gradoParticipacionDto, $domiciliosImputadosDto, $juzgadosDto, $param, $consultarPor);
        echo $paginas;
    } else if ($accion == "getPaginas") {
        @$param["pag"] = $_POST["pagina"];
        @$param["cantxPag"] = $_POST["cantidadRegistros"];
        $paginas = $reporteImputadosFacade->getPaginas($carpetasJudicialesDto, $consultarPor, $param);
        echo $paginas;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
<?php

/**
 * Class: ConsultaexternaFacade - ConsultaexternaFacade.Class.php 
 * Trabaja con REST POST o GET
 *
 * @author Esaud Israel <@e_israel> on Feb 16, 2016 6:44:19 PM
 * @version 1.0
 */
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/relacionexpedientejuzgado/RelacionexpedientejuzgadoController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/documentosimg/DocumentosimgController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imagenes/ImagenesController.Class.php");

class ConsultaexternaFacade {
    
    public function __construct() {}
    
    /**
     * busca si tiene carpetas la persona logueada
     * @param int $IdPersonaAutorizada id de la sesión
     * @return json => si hay carpetas -> carpetas judiciales de la persona; otro caso => error
     */
    /* Se comenta ya que se usó SOAP
    public static function getCarpetasJudicialesPorPersona($IdPersonaAutorizada)
    {
        $RelacionexpedientejuzgadoDto = new RelacionexpedientejuzgadoDTO();
        $RelacionexpedientejuzgadoDto->setIdPersonaAutorizada($IdPersonaAutorizada);
        $RelacionexpedientejuzgadoDto->setActivo('S');
        $RelacionexpedientejuzgadoController = new RelacionexpedientejuzgadoController();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoController->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor = NULL);
        if ($RelacionexpedientejuzgadoDto != null):
            $dtoToJson = new DtoToJson($RelacionexpedientejuzgadoDto);
            return $dtoToJson->toJson();
        else:
            $jsonDto = new Encode_JSON();
            exit( utf8_encode($jsonDto->encode(
                array(
                    'status' => 'FAIL',
                    'totalCount' => 0, 
                    'text' => 'Búsqueda por idPersonaAutorizada',
                    'mnj' => 'No se encontraron registros.')
                )));
        endif;
    }# cierra getCarpetasJudicialesPorPersona
     */
    
    /**
     * busca por carpeta, valida que tenga relación la carpeta con la persona logueada
     * @param type $IdCarpetajudicial
     * @param type $IdPersonaAutorizada
     * 
     * @return JSON => si hay carpeta -> carpeta judicial solicitada; otro caso => error
     */
    /* Se comenta ya que se usó SOAP
    public static function getCarpetaJudicial($IdCarpetajudicial, $IdPersonaAutorizada)
    {
        $RelacionexpedientejuzgadoDto = new RelacionexpedientejuzgadoDTO();
        $RelacionexpedientejuzgadoDto->setIdCarpetajudicial($IdCarpetajudicial);
        $RelacionexpedientejuzgadoDto->setIdPersonaAutorizada($IdPersonaAutorizada);
        $RelacionexpedientejuzgadoController = new RelacionexpedientejuzgadoController();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoController->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor = NULL);
        # existe carpeta y persona
        if ($RelacionexpedientejuzgadoDto != null):
            # busca carpeta judicial
            $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
            $CarpetasjudicialesDto->setIdCarpetaJudicial($IdCarpetajudicial);
            $CarpetasjudicialesDto->setActivo('S');
            $CarpetasjudicialesController = new CarpetasjudicialesController();
            $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetasjudiciales($CarpetasjudicialesDto, $proveedor = NULL);
            
            #busca actuaciones
            $ActuacionesDto = new ActuacionesDTO();
            $ActuacionesDto->setNumero($CarpetasjudicialesDto[0]->getNumero());
            $ActuacionesDto->setAnio($CarpetasjudicialesDto[0]->getAnio());
            $ActuacionesDto->setCveTipoCarpeta($CarpetasjudicialesDto[0]->getCveTipoCarpeta());
            $ActuacionesDto->setCveJuzgado($CarpetasjudicialesDto[0]->getCveJuzgado());
            $ActuacionesDto->setActivo('S');
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto =  $ActuacionesController->selectActuaciones($ActuacionesDto, $proveedor = NULL);
            
            #une carpetas y actuaciones
            $dtoToJson = new DtoToJson(array_merge($CarpetasjudicialesDto, $ActuacionesDto));
            return $dtoToJson->toJson();
        else:
            $jsonDto = new Encode_JSON();
            exit(utf8_encode($jsonDto->encode(
                array(
                    'status' => 'FAIL',
                    'totalCount' => 0, 
                    'text' => 'Búsqueda por idPersonaAutorizada y idCarpetaJudicial',
                    'mnj' => 'No se encontraron registros.')
                )));
        endif;
    }# cierra getCarpetaJudicial
     */
    
    /**
     * devuelve el detalle de la carpeta
     * @param string $tipo 1 = es carpeta judicial, 2 = es actuación
     * @param int $id de la carpeta a buscar
     * 
     * @return JSON con detalle de la carpeta
     */
    /* Se comenta ya que se usó SOAP
    public static function getDetalleCarpeta($tipo, $id, $proveedor = NULL)
    {
        #si es actuación
        if($tipo == 2)
        {
            $ActuacionesDto = new ActuacionesDTO();
            $ActuacionesDto->setIdActuacion($id);
            $ActuacionesDto->setActivo('S');
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto =  $ActuacionesController->selectActuaciones($ActuacionesDto, $proveedor = NULL);
            if($ActuacionesDto != NULL)
            {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson();
            }
            else
            {
                $jsonDto = new Encode_JSON();
                exit( utf8_encode($jsonDto->encode(
                    array(
                        'status' => 'FAIL',
                        'totalCount' => 0, 
                        'text' => 'Búsqueda detalle Actuación',
                        'mnj' => 'No se encontraron registros.')
                    )));
            }
        }
        else# si es carpeta judicial
        {
            $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
            $CarpetasjudicialesDto->setIdCarpetaJudicial($id);
            $CarpetasjudicialesDto->setActivo('S');
            $CarpetasjudicialesController = new CarpetasjudicialesController();
            $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetasjudiciales($CarpetasjudicialesDto, $proveedor = NULL);
            if($CarpetasjudicialesDto != NULL)
            {
                $dtoToJson = new DtoToJson($CarpetasjudicialesDto);
                return $dtoToJson->toJson();
            }
            else
            {
                $jsonDto = new Encode_JSON();
                exit( utf8_encode($jsonDto->encode(
                    array(
                        'status' => 'FAIL',
                        'totalCount' => 0, 
                        'text' => 'Búsqueda detalle Carpeta Judicial ',
                        'mnj' => 'No se encontraron registros.')
                    )));
            }
        }
    }# cierra getDetalleCarpeta
     */
    
    /**
     * 
     * @param int $tipo 1:idCarpetaJudicial, 2:idActuacion
     * @param int $id  id de lo que es
     * 
     * @return objeto documentoImagenes
     */
    public static function getDocumentosImagenes($tipo, $id)
    {
        $DocumentosimgDto = new DocumentosimgDTO();
        $DocumentosimgDto->setActivo('S');
        if($tipo == 2)# es actuación
            $DocumentosimgDto->setIdActuacion($id);
        else# es carpeta judicial
            $DocumentosimgDto->setIdCarpetaJudicial ($id);
        $DocumentosimgController = new DocumentosimgController();
        $DocumentosimgDto =  $DocumentosimgController->selectDocumentosimg($DocumentosimgDto, $proveedor = null);
        if($DocumentosimgDto != NULL)
            return $DocumentosimgDto[0]; # regresa el documento que encontró
        else
        {
            $jsonDto = new Encode_JSON();
            return utf8_encode($jsonDto->encode(
                array(
                    'status' => 'FAIL',
                    'totalCount' => 0, 
                    'txt' => 'Búsqueda por documento.',
                    'mnj' => 'No existen registros del documento.')
            ));
        }
    }# cierra getdocumentosImagenes
    
    /**
     * 
     * @param int $idDocumentoImg
     * 
     * @return json Detalle de las imagenes del documento
     * 
     * @todo se muestran solo las adjuntadas?
     */
    /* Se comenta ya que se usó SOAP
    public static function getImagenes($idDocumentoImg)
    {
        $ImagenesDto = new ImagenesDTO();
        $ImagenesDto->setIdDocumentoImg($idDocumentoImg);
        $ImagenesDto->setAdjunto('S');
        $ImagenesController = new ImagenesController();
        $ImagenesDto = $ImagenesController->selectImagenes($ImagenesDto);
        if($ImagenesDto != NULL)
        {
            $dtoToJson = new DtoToJson($ImagenesDto);
            return $dtoToJson->toJson();    
        }
        else
        {
            $jsonDto = new Encode_JSON();
            exit( utf8_encode($jsonDto->encode(
                array(
                    'status' => 'FAIL',
                    'totalCount' => 0, 
                    'txt' => 'Búsqueda de imágenes por documento.',
                    'mnj' => 'No existen registros de imagenes.')
            )));
        }
    }# cierra getImagenes
     * 
     */
    
} # cierra clase


/**
 * Si hay post o get
 */
/*
if (isset($_REQUEST)) 
{
    $accion = isset($_REQUEST['accion']) ? $_REQUEST['accion'] : 'consultar';
    $idPersonaautorizada = isset($_REQUEST['idPersonaautorizada']) ? $_REQUEST['idPersonaautorizada'] : NULL;
    $idCarpetajudicial = isset($_REQUEST['IdCarpetajudicial']) ? $_REQUEST['IdCarpetajudicial'] : NULL;
    $idCj = isset($_REQUEST['idCj']) ? $_REQUEST['idCj'] : 0;
    $idAct = isset($_REQUEST['idAct']) ? $_REQUEST['idAct'] : 0;
    $tipoCarpeta = $idAct > 0 ? 2 : 1;
    
    # consulta carpetas judiciales por persona
    if ($accion == 'consultarpersona' && $idPersonaautorizada != NULL) 
    {
        header('Content-Type: application/json; charset=utf-8');
        echo ConsultaexternaFacade::getCarpetasJudicialesPorPersona($idPersonaautorizada);
    }
    elseif ($accion == 'consultarcarpetas' && $idPersonaautorizada != NULL && $idCarpetajudicial != NULL) 
    {
        header('Content-Type: application/json; charset=utf-8');
        echo ConsultaexternaFacade::getCarpetaJudicial($idCarpetajudicial, $idPersonaautorizada);
    }
    elseif ($accion == 'consultardetallecarpeta' && ($idCj > 0 || $idAct > 0)) 
    {
        $id = $idCj > 0 ? $idCj : $idAct;
        header('Content-Type: application/json; charset=utf-8');
        # muestra detalle de la carpeta
        echo ConsultaexternaFacade::getDetalleCarpeta($tipoCarpeta, $id);
        # muestra detalle de imagenes
        $documento = ConsultaexternaFacade::getDocumentosImagenes($tipoCarpeta, $id);
        echo ConsultaexternaFacade::getImagenes($documento->getIdDocumentoImg());
    }
    else
    {
        $jsonDto = new Encode_JSON();
        header('Content-Type: application/json; charset=utf-8');
        echo utf8_encode($jsonDto->encode(
            array(
                'status' => 'FAIL',
                'totalCount' => 0, 
                'mnj' => 'No se recibió información de la persona autorizada.')
          ));
    }
} 
else 
{
    $jsonDto = new Encode_JSON();
    header('Content-Type: application/json; charset=utf-8');
    echo utf8_encode($jsonDto->encode(
        array(
            'status' => 'FAIL',
            'totalCount' => 0, 
            'mnj' => 'No se recibió información para procesar.')
      ));
}
*/
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
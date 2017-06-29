<?php

include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");

include_once(dirname(__FILE__) . "/../actuacionesfirmadas/ActuacionesfirmadasController.Class.php");
include_once(dirname(__FILE__) . "/../actuacionesfirmantes/ActuacionesfirmantesController.Class.php");
include_once (dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesfirmadas/ActuacionesfirmadasDTO.Class.php");
include_once (dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesfirmantes/ActuacionesfirmantesDTO.Class.php");

include_once(dirname(__FILE__) . "/../solicitudescateos/SolicitudescateosFirmaController.Class.php");
include_once(dirname(__FILE__) . "/../cateos/CateosFirmaController.Class.php");

class FirmaElectronicaController {

    private $host = null;

    public function __construct() {
        $this->host = new Host(dirname(__FILE__) . "/../../tribunal/host/config.xml", "FIRMAELECTRONICA");
        $this->host = $this->host->getConnect();
    }

    public function RegistroTransferenciaFirma($jsonParam) {
        if (trim($jsonParam) != "") {
//            print_r($jsonParam);
            $arrParam = json_decode($jsonParam);
            if (array_key_exists('operation', $arrParam) && array_key_exists('textRef', $arrParam) &&
                    array_key_exists('attrSign', $arrParam) && array_key_exists('value', $arrParam) && array_key_exists('validity', $arrParam)) {
//                /* RegistroTransferencia(Obtener token) */
                $params = array(
                    "evcOperacionJar" => $arrParam->operation, /* Solo aqui definir tipo de operacion************** */
                    "evcReferencia" => $arrParam->textRef,
                    "evcAtributoFirmante" => $arrParam->attrSign,
                    "evcValor" => $arrParam->value,
                    "einVigencia" => $arrParam->validity/* VIDA DEL JAR */
                );


                $auth = array(
                    "Usuario" => "userws",
                    "Clave" => "12121212",
                    "Entidad" => "pjem"
                );

//                $service = new SoapClient($this->host . "/WSCommerceFiel/WebService.asmx?WSDL");
                $service = new SoapClient("http://10.22.157.40/WSCommerceFiel/WebService.asmx?WSDL");
                $header = new SoapHeader('www.XMLWebServiceSoapHeaderAuth.net', 'AuthSoapHd', $auth, false);
                $service->__setSoapHeaders($header);

                $rs = $service->RegistroTransferencia($params);
                return $rs;
            } else {
                echo "El JSON no contiene formato valido para la operación, checa el API!!!";
            }
        }
    }

    public function GeneracionJarFirma($jsonParam) {
        if (trim($jsonParam) != "") {
            $arrParam = json_decode($jsonParam);
            if (array_key_exists('codigo', $arrParam)) {

                $params = array(
                    "evcCodigoActivacion" => $arrParam->codigo
                );

                $auth = array(
                    'Usuario' => 'userws',
                    'Clave' => '12121212',
                    'Entidad' => 'pjem'
                );

                $service = new SoapClient("http://10.22.157.40/WSCommerceFiel/WebService.asmx?WSDL");
                $header = new SoapHeader('www.XMLWebServiceSoapHeaderAuth.net', 'AuthSoapHd', $auth, false);
                $service->__setSoapHeaders($header);

                $jar = $service->PwuJar($params);
                return $jar;
            } else {
                echo "El JSON no contiene formato2 valido para la operación, checa el API!!!";
            }
        }
    }

    public function DigestionArchivoFirma($jsonParam) {
        if (trim($jsonParam) != "") {
            $arrParam = json_decode($jsonParam);
            if (array_key_exists('transferencia', $arrParam) && array_key_exists('descripcion', $arrParam) && array_key_exists('archivo', $arrParam)) {
                /* Firma de FirmaDigestionArchivo (Archivos) */
                $params = array(
                    "ebgTransferencia" => $arrParam->transferencia, /* Viene de RegistroTransferencia es la Transferencia ******************* */
                    "evcTipoDigestion" => "2", /* Tipo de Codificacion 2. base 64 */
                    "evcTipoOrigen" => "1", /* 1 Se puede omitir o cualquier valor */
                    "evcDescripcion" => $arrParam->descripcion, /* Texto libre que se mostará al usuario en aplicativo */
//            "evcArchivo" => "C:\\borrame\\archivo a firmar", /* ruta fisica del archivo (ruta local) permisos lectura, y copiar mi archivo a esa ruta */
//                    "evcArchivo" => "C:\\Users\\Administrador\\Desktop\\Back\\web.config", /* ruta fisica del archivo (ruta local) permisos lectura */
                    "evcArchivo" => $arrParam->archivo, /* ruta fisica del archivo (ruta local) permisos lectura */
                    "svcResultado" => "",
                    "sbgArchivoFirma" => "123"
                );
                $auth = array(
                    'Usuario' => 'userws',
                    'Clave' => '12121212',
                    'Entidad' => 'pjem'
                );

                $service = new SoapClient("http://10.22.157.40/WSCommerceFiel/WebService.asmx?WSDL");
                $header = new SoapHeader('www.XMLWebServiceSoapHeaderAuth.net', 'AuthSoapHd', $auth, false);
                $service->__setSoapHeaders($header);
                $rs = $service->FirmaDigestionArchivo($params);
                return $rs;
            }
        }
    }

    public function SummarizeInfo($jsonParam) {
        if (count($jsonParam) > 0) {
            if ($jsonParam["jsonString"] != "") {
                $params = array(
                    "jsonString" => $jsonParam["jsonString"]
                );
                $auth = array(
                    'Usuario' => 'userws',
                    'Clave' => '12121212',
                    'Entidad' => 'pjem'
                );

                $service = new SoapClient("http://10.22.157.40/WSCommerceAux/WSAux.asmx?wsdl");
                $header = new SoapHeader('http://net.fielnet.ws/', 'AuthSoapHd', $auth, false);
                $service->__setSoapHeaders($header);
                $rs = $service->summarizeInfo($params);
                return $rs;
            }
        }
    }

    public function ObtienePdfSimplePersonal($params) {
        $auth = array(
            'Usuario' => 'userws',
            'Clave' => '12121212',
            'Entidad' => 'pjem'
        );

        $service = new SoapClient("http://10.22.157.40/WSCommerceFiel/WebService.asmx?WSDL");
        $header = new SoapHeader('www.XMLWebServiceSoapHeaderAuth.net', 'AuthSoapHd', $auth, false);
        $service->__setSoapHeaders($header);
        $rs = $service->ObtienePdfSimplePersonal($params);
        return $rs;
    }

    public function uploadFile($params) {
        $service = new SoapClient("http://10.22.157.40/WSCommerceAux/WSAux.asmx?WSDL");
        $rs = $service->uploadFile($params);
        return $rs;
    }

}

@$action = $_POST["action"];

@$operation = $_POST["operation"];
@$textRef = $_POST["textRef"];
@$attrSign = $_POST["attrSign"];
@$value = $_POST["value"];
@$validity = $_POST["validity"];
@$codigo = $_POST["codigo"];
@$fileName = $_POST["fileName"];
@$idsRegistroFirma = $_POST["idsRegistroFirma"];
@$transfer = $_POST["transfer"];
@$file = $_POST["file"];


@$activo = $_POST["activo"];
@$idReferencia = $_POST["idReferencia"];
@$cveReferencia = $_POST["cveReferencia"];
@$cveGrupo = $_POST["cveGrupo"];
@$filePathOrigen = $_POST["filePathOrigen"];
@$filePathDestino = $_POST["filePathDestino"];
@$cveTipoDocumento = $_POST["cveTipoDocumento"];
@$idReferenciaCarpeta = $_POST["idReferenciaCarpeta"];

switch ($action) {
    case "RegistroTransferenciaFirma":

        $jsonRequest = "{";
        $jsonRequest .= '"operation":' . json_encode($operation) . ",";
        $jsonRequest .= '"textRef":' . json_encode($textRef) . ",";
        $jsonRequest .= '"attrSign":' . json_encode($attrSign) . ",";
        $jsonRequest .= '"value":' . json_encode($value) . ",";
        $jsonRequest .= '"validity":' . json_encode($validity);
        $jsonRequest .= "}";

        $FirmaElectronicaController = new FirmaElectronicaController();
        $arrResponse = $FirmaElectronicaController->RegistroTransferenciaFirma($jsonRequest);


        if ($arrResponse != "") {
            $Descripcion = $arrResponse->RegistroTransferenciaResult->Descripcion;
            $Estado = $arrResponse->RegistroTransferenciaResult->Estado;
            $Transferencia = $arrResponse->RegistroTransferenciaResult->Transferencia;
            $Codigo = $arrResponse->RegistroTransferenciaResult->Codigo;

            $json = "{";
            if ($Estado == "0") {
                $json .= '"estatus":"ok",';
                $json .= '"resultados":[';
                $json .= '{';
                $json .= '"descripcion":' . json_encode($Descripcion) . ",";
                $json .= '"estado":' . json_encode($Estado) . ",";
                $json .= '"transferencia":' . json_encode($Transferencia) . ",";
                $json .= '"codigo":' . json_encode($Codigo);
                $json .= '}';
                $json .= ']';
            } else {
                $json .= '"estatus":"fail",';
                $json .= '"mnj":' . json_encode($Descripcion) . ",";
                $json .= '"estado":' . json_encode($Estado);
            }
            $json .= "}";
        }

        echo $json;

        break;

    case "GeneracionJarFirma":

        $jsonRequest = "{";
        $jsonRequest .= '"codigo":' . json_encode($codigo) . "";
        $jsonRequest .= "}";

        $FirmaElectronicaController = new FirmaElectronicaController();
        $arrResponse = $FirmaElectronicaController->GeneracionJarFirma($jsonRequest);

        if ($arrResponse != "") {
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=FirmaPJEM.jar');
            $jarDownload = "";
            foreach ($arrResponse as $j) {
                $jarDownload .= base64_encode($j);
            }
            echo base64_decode($jarDownload);
        }

        break;

    case "DigestionArchivoFirma":

        $jsonRequest = "{";
        $jsonRequest .= '"transferencia":' . json_encode($transfer) . ",";
        $jsonRequest .= '"descripcion":' . json_encode($textRef) . ",";
        $jsonRequest .= '"archivo":' . json_encode($file) . "";
        $jsonRequest .= "}";


//        print_r($jsonRequest);

        $FirmaElectronicaController = new FirmaElectronicaController();
        $arrResponse = $FirmaElectronicaController->DigestionArchivoFirma($jsonRequest);

        if ($arrResponse != "") {
//            var_dump($arrResponse);
            $Descripcion = $arrResponse->FirmaDigestionArchivoResult->Descripcion;
            $Estado = $arrResponse->FirmaDigestionArchivoResult->Estado;
            $IdRegistro = $arrResponse->FirmaDigestionArchivoResult->IdRegistro;
//            @$Resultado = $arrResponse->svcResultado;
//            @$ArchivoFirma = $arrResponse->sbgArchivoFirma;

            $json = "{";
            if ($Estado == "0") {
                $json .= '"estatus":"ok",';
                $json .= '"resultados":[';
                $json .= '{';
                $json .= '"descripcion":' . json_encode($Descripcion) . ",";
                $json .= '"estado":' . json_encode($Estado) . ",";
                $json .= '"idRegistro":' . json_encode($IdRegistro) . "";
                $json .= '}';
                $json .= ']';
            } else {
                $json .= '"estatus":"fail",';
                $json .= '"mnj":' . json_encode($Descripcion) . ",";
                $json .= '"estado":' . json_encode($Estado);
            }
            $json .= "}";

            echo $json;
        }

        break;

    case "ObtienePdfSimplePersonal":

        $params = array(
            "firmante" => "FIRMANTE",
            "archivoFirmas" => $idsRegistroFirma,
            "origen" => $file,
            "destino" => "C:\\archivosFirmados\\electronico\\" . $fileName
        );


        $FirmaElectronicaController = new FirmaElectronicaController();
        $arrResponse = $FirmaElectronicaController->ObtienePdfSimplePersonal($params);

        if ($arrResponse != "") {
            print_r($arrResponse);
        }
        break;

    case "summarizeInfo":



        $params = '{
    "ebgTransferencia": "' . $transfer . '",
    "tipoOrigen": "2",
    "archivos": [
        {
            "descripcion": "' . $textRef . '",
            "archivo": "' . $file . '"
        }
    ]
}';

        $jsonString = array(
            "jsonString" => $params
        );

        $FirmaElectronicaController = new FirmaElectronicaController();
        $arrResponse = $FirmaElectronicaController->SummarizeInfo($jsonString);
        if ($arrResponse != "") {
            $json = "{";

            if ($arrResponse->summarizeInfoResult->Estado == 0) {
                if ($arrResponse->summarizeInfoResult->FileRegisterInformation->FileInfo->Estado == 0) {
                    $json .= '"estatus":"ok",';
                    $json .= '"resultados":[';
                    $json .= '{';
                    $json .= '"descripcion":' . json_encode($arrResponse->summarizeInfoResult->FileRegisterInformation->FileInfo->Descripcion) . ",";
                    $json .= '"estado":' . json_encode($arrResponse->summarizeInfoResult->FileRegisterInformation->FileInfo->Estado) . ",";
                    $json .= '"idRegistro":' . json_encode($arrResponse->summarizeInfoResult->FileRegisterInformation->FileInfo->IdRegistro) . "";
                    $json .= '}';
                    $json .= ']';
                }
            } else {
                $json .= '"estatus":"fail",';
                $json .= '"mnj":' . json_encode($Descripcion) . ",";
                $json .= '"estado":' . json_encode($Estado);
            }
            echo $json .= "}";
        }
        break;

    case "uploadFile":

        $params = array(
            'path' => "C:\\archivosFirmados\\electronico\\" . $fileName,
            'urlScript' => 'http://10.22.165.57/firmaElectronica/upload.php',
            'param' => 'archivo',
            'optionalUserName' => '',
            'optionalPassword' => ''
        );


        $FirmaElectronicaController = new FirmaElectronicaController();
        $arrResponse = $FirmaElectronicaController->uploadFile($params);

        if ($arrResponse != "") {
            print_r($arrResponse);
        }

        break;

    case "pdfSimplePersonal":

//        $ActuacionesFirmantesDTO = new ActuacionesFirmantesDTO();
//        $ActuacionesFirmantesDTO->setActivo("S");
//        $ActuacionesFirmantesDTO->setCveTipoActuacion($cveReferencia);
//        $ActuacionesFirmantesController = new ActuacionesFirmantesController();
//        $ActuacionesFirmantesDTO = $ActuacionesFirmantesController->select($ActuacionesFirmantesDTO);
//        if ($ActuacionesFirmantesDTO != "") {
//            $ActuacionesFirmadasController = new ActuacionesFirmadasController();
//            $ActuacionesFirmadasDTO = new ActuacionesFirmadasDTO();
//
//            $ActuacionesFirmadasDTO->setActivo("S");
//            $ActuacionesFirmadasDTO->setIdActuacion($idReferencia);
//            $ActuacionesFirmadasDTO->setCveTipoActuacion($cveReferencia);
//            $ActuacionesFirmadasDTO = $ActuacionesFirmadasController->select($ActuacionesFirmadasDTO);
//            if ($ActuacionesFirmadasDTO != "") {
//                $count = count($ActuacionesFirmadasDTO);
//                $tmp = "";
////                if ($count > 0) {
//                    $tmp = array();
//                    foreach ($ActuacionesFirmadasDTO as $actuacionFirmada) {
//                        $tmpArray = array();
//                        $tmpArray["idActuacionFirmada"] = $actuacionFirmada->getIdActuacionFirmada();
//                        $tmpArray["cveGrupo"] = $actuacionFirmada->getCveGrupo();
//                        $tmpArray["idRegistroFirma"] = $actuacionFirmada->getIdRegistroFirma();
//                        $tmpArray["fileNameFirma"] = $actuacionFirmada->getFileNameFirma();
//                        $tmpArray["cveUsuario"] = $actuacionFirmada->getCveUsuario();
//                        array_push($tmp, $tmpArray);
//                    }
//                    if ($tmp != "") {
//                        $count = count($tmp);
//                        if ($count > 0) {
//                            $countFirmaValida = 0;
//                            $idsRegistroFirmantes = "";
//                            $countActFir = count($ActuacionesFirmantesDTO);
//                            if ($countActFir == $count) {
//                                foreach ($ActuacionesFirmantesDTO as $firmantes) {
//                                    for ($i = $count - 1; $i >= 0; $i--) {
//                                        if ($tmp[$i]["cveGrupo"] == $firmantes->getCveGrupo()) {
//                                            $countFirmaValida++;
//                                            $idsRegistroFirmantes .= $tmp[$i]["idRegistroFirma"] . ",";
//                                            break;
//                                        }
//                                    }
//                                }
//
//                                if ($countFirmaValida == $countActFir) {
//        $idsRegistroFirmantes = substr($idsRegistroFirmantes, 0, -1);
//        echo "ENTRA****";
        $params = array(
            "firmante" => "FIRMANTE",
            "archivoFirmas" => "1167",
//                                        "origen" => $file,
            "origen" => "http://10.22.165.204/sigejupev2/solicitudespdf/PJ0000132016C000000000000131230020160225000046.pdf",
//                                        "destino" => "C:\\archivosFirmados\\electronico\\" . $fileName
            "destino" => "C:\\archivosFirmados\\sigejupe\\cateos\\PJ0000132016C000000000000131230020160225000046.pdf"
        );


        $FirmaElectronicaController = new FirmaElectronicaController();
        $arrResponse = $FirmaElectronicaController->ObtienePdfSimplePersonal($params);

        if ($arrResponse != "") {
            if ($arrResponse->ObtienePdfSimplePersonalResult->State == 0) {

                $params = array(
//                                                'path' => "C:\\archivosFirmados\\electronico\\" . $fileName,
                    'path' => "C:\\archivosFirmados\\sigejupe\\cateos\\PJ0000132016C000000000000131230020160225000046.pdf",
                    'urlScript' => 'http://10.22.165.57/firmaElectronica/upload.php',
                    'param' => 'archivo',
                    'optionalUserName' => '',
                    'optionalPassword' => ''
                );


                $FirmaElectronicaController = new FirmaElectronicaController();
                $arrResponse = $FirmaElectronicaController->uploadFile($params);

                if ($arrResponse != "") {
                    echo "SIN ERRORES";
                    print_r($arrResponse);
                } else {
                    echo "no lo bajo";
                }
            }
        } else {
            "no firmo";
        }
//                                }
//                            } else if ($countActFir < $count) {
//                                echo "La actuacion tiene mas Firmas de la necesarias";
//                            } else if ($countActFir > $count) {
//                                echo "Faltan Firmas";
//                            }


        /*
         * falta primero saber si ya generar el pdf firmado
         * generar la carga y bajada del pdf firmado
         */
//                        }
//                    }
//                }
//            }
//        } else {
//            echo "Actuacion no necesita Firmas";
//        }


        break;
    case "pdfSimplePersonalCarpetas":
        $params = array(
            "firmante" => "FIRMANTE",
            "archivoFirmas" => $idReferencia,
            "origen" => $filePathOrigen,
            "destino" => $filePathDestino
        );


        $FirmaElectronicaController = new FirmaElectronicaController();
        $arrResponse = $FirmaElectronicaController->ObtienePdfSimplePersonal($params);
        if ($arrResponse != "") {
            if ($arrResponse->ObtienePdfSimplePersonalResult->State == 0) {


                switch ($cveTipoDocumento) {
                    case 0:
                        break;
                    case 19:
                        $solicitudescateosFirmaController = new SolicitudescateosFirmaController();
                        $arrResponse = $solicitudescateosFirmaController->notificaSolicitudCateo($idReferenciaCarpeta);

                        if ($arrResponse != "") {
//                            echo "SIN ERRORES";
//                            var_dump($arrResponse);
                            $params = array(
                                'path' => $filePathDestino,
                                'urlScript' => 'http://10.22.165.25/sigejupeSVN/controladores/sigejupe/solicitudescateos/uploadSolicitudesCateosFirmados.php',
                                'param' => 'archivo',
                                'optionalUserName' => '',
                                'optionalPassword' => ''
                            );
                            print_r($arrResponse);
                            $service = new SoapClient("http://10.22.157.40/WSCommerceAux/WSAux.asmx?WSDL");
                            $rs = $service->uploadFile($params);
                            print_r($rs);
                        } else {
                            echo "no lo bajo";
                        }
                        break;
                    case 20:
                        echo "OK1********";
                        $cateosFirmaController = new CateosFirmaController();
                        $arrResponse = $cateosFirmaController->notificaCateo($idReferenciaCarpeta);
                        print_r($arrResponse);

                        if ($arrResponse != "") {
//                            echo "SIN ERRORES";
                            $params = array(
                                'path' => $filePathDestino,
                                'urlScript' => 'http://10.22.165.25/sigejupeSVN/controladores/sigejupe/solicitudescateos/uploadSolicitudesCateosFirmados.php',
                                'param' => 'archivo',
                                'optionalUserName' => '',
                                'optionalPassword' => ''
                            );
                            print_r($arrResponse);
                            $service = new SoapClient("http://10.22.157.40/WSCommerceAux/WSAux.asmx?WSDL");
                            $rs = $service->uploadFile($params);
                            print_r($rs);
                        } else {
                            echo "no lo bajo";
                        }
                        break;
                    case 21 :
                        $solicitudesordenesFirmaController = new SolicitudesordenesFirmaController();
                        $arrResponse = $solicitudesordenesFirmaController->notificaSolicitudOrden($idReferenciaCarpeta);

                        if ($arrResponse != "") {
                            $params = array(
                                'path' => $filePathDestino,
                                'urlScript' => 'http://sigejupe.dev/controladores/sigejupe/solicitudescateos/uploadSolicitudesCateosFirmados.php',
                                'param' => 'archivo',
                                'optionalUserName' => '',
                                'optionalPassword' => ''
                            );
                            print_r($arrResponse);
                            $service = new SoapClient("http://10.22.157.40/WSCommerceAux/WSAux.asmx?WSDL");
                            $rs = $service->uploadFile($params);
                            print_r($rs);
                        } else {
                            echo "no lo bajo";
                        }
                        break;
                }
            }
        } else {
            echo "no firmo";
        }
        break;
}


//$jsonRequest = "{";
//$jsonRequest .= '"operation":' . json_encode("j03") . ",";
//$jsonRequest .= '"textRef":' . json_encode("Firma de prueba") . ",";
//$jsonRequest .= '"attrSign":' . json_encode("1") . ",";
//$jsonRequest .= '"value":' . json_encode("RIOI870805HMCCRL07") . ",";
//$jsonRequest .= '"validity":' . json_encode("360000");
//$jsonRequest .= "}";
//
//$FirmaElectronicaController = new FirmaElectronicaController();
//$rs = $FirmaElectronicaController->RegistroTransferenciaFirma($jsonRequest);
//var_dump($rs);
